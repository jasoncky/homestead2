<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyOrderRequest;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Order;
use App\Product;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class OrdersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orders = Order::with('products')->get();

        return view('admin.orders.index', compact('orders'));
    }

    public function create()
    {
        abort_if(Gate::denies('order_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $products = Product::all();

        return view('admin.orders.create', compact('products'));
    }

    public function store(StoreOrderRequest $request)
    {
        //$order = Order::create($request->all());
		$order = Order::create($request->only('customer_name', 'customer_email', 'products','quantities'));

        $products = $request->input('products', []);
        $quantities = $request->input('quantities', []);
		$discounts = $request->input('discounts', []);
		$discountByPercents = $request->input('discountByPercents', []);
        for ($product=0; $product < count($products); $product++) {
            if ($products[$product] != '') {
				$index = $products[$product];
				$order->products()->syncWithoutDetaching(
					[$index =>
						[
							'quantity' => $quantities[$product],
							'discount' => $discounts[$product],
							'discountByPercent' => $discountByPercents[$product]
						]
					]
				);
            }
        }

        return redirect()->route('admin.orders.index');
    }

    public function edit(Order $order)
    {
        abort_if(Gate::denies('order_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $products = Product::all();

        $order->load('products');

        return view('admin.orders.edit', compact('products', 'order'));
    }

    public function update(UpdateOrderRequest $request, Order $order)
    {
        //$order->update($request->all());
		$order->update($request->only('customer_name', 'customer_email', 'products','quantities'));

        $order->products()->detach();
        $products = $request->input('products', []);
        $quantities = $request->input('quantities', []);
		$discounts = $request->input('discounts', []);
		$discountByPercents = $request->input('discountByPercents', []);
        for ($product=0; $product < count($products); $product++) {
            if ($products[$product] != '') {
                $order->products()->syncWithoutDetaching(
					[$products[$product] => 
						[
							'quantity' => $quantities[$product],
							'discount' => $discounts[$product],
							'discountByPercent' => $discountByPercents[$product]
						]
					]
				);
            }
        }

        return redirect()->route('admin.orders.index');
    }

    public function show(Order $order)
    {
        abort_if(Gate::denies('order_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $order->load('products');

        return view('admin.orders.show', compact('order'));
    }

    public function destroy(Order $order)
    {
        abort_if(Gate::denies('order_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $order->delete();

        return back();
    }

    public function massDestroy(MassDestroyOrderRequest $request)
    {
        Order::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
	
	public function invoice(Request $request)
	{
		$orders = Order::with('products')
					->where('orders.id', $request->invoice_id)
					->get();
		
		$items = [];
		foreach ($orders as $order)
		{
			$client = new Party([
				'name'          => 'Roosevelt Lloyd',
				'phone'         => '(520) 318-9486',
			]);

			$customer = new Party([
				'name'          => $order->customer_name,
				'email'       => $order->customer_email,
			]);
			
			foreach ($order->products as $order_product)
			{
				$description = $order_product->name;;
				$price = $order_product->price;
				$qty = $order_product->pivot->quantity;
				$discount = $order_product->pivot->discount;
				$discountByPercent = $order_product->pivot->discountByPercent;
				$units = "";
				
				if ($qty!=0 && $discount!=0 && $units!="" && $discountByPercent==0)
				{	
					$items[] = (new InvoiceItem())->title($description)->pricePerUnit($price)->quantity($qty)->discount($discount)->units($units);
				}
				else if ($qty!=0 && $discount!=0 && $units=="" && $discountByPercent==0)
				{
					$items[] = (new InvoiceItem())->title($description)->pricePerUnit($price)->quantity($qty)->discount($discount);
				}
				else if ($qty!=0 && $discount==0 && $units=="" && $discountByPercent!=0)
				{
					$items[] = (new InvoiceItem())->title($description)->pricePerUnit($price)->quantity($qty)->discountByPercent($discountByPercent);
				}
				else if ($qty!=0 && $discount==0 && $units!="" && $discountByPercent==0)
				{
					$items[] = (new InvoiceItem())->title($description)->pricePerUnit($price)->quantity($qty)->units($units);
				}
				else if ($qty!=0 && $discount==0 && $units=="" && $discountByPercent==0)
				{
					$items[] = (new InvoiceItem())->title($description)->pricePerUnit($price)->quantity($qty);
				}
				else if ($qty==0 && $discount==0 && $units!="" && $discountByPercent==0)
				{
					$items[] = (new InvoiceItem())->title($description)->pricePerUnit($price)->units($units);
				}
				else if ($qty==0 &&  $discount==0 && $units=="" && $discountByPercent!=0)
				{
					$items[] = (new InvoiceItem())->title($description)->pricePerUnit($price)->discountByPercent($discountByPercent);
				}
				else
				{
					$items[] = (new InvoiceItem())->title($description)->pricePerUnit($price);
				}
			}
			
			$notes = [
				'your multiline',
				'additional notes',
				'in regards of delivery or something else',
			];
			$notes = implode("<br>", $notes);

			$invoice = Invoice::make('receipt')
				->series('BIG')
				->sequence(667)
				->serialNumberFormat('{SEQUENCE}/{SERIES}')
				->seller($client)
				->buyer($customer)
				->date(now()->subWeeks(3))
				->dateFormat('m/d/Y')
				->payUntilDays(14)
				->currencySymbol('RM')
				->currencyCode('MYR')
				->currencyFormat('{SYMBOL}{VALUE}')
				->currencyThousandsSeparator(',')
				->currencyDecimalPoint('.')
				->filename($client->name . ' ' . $customer->name)
				->addItems($items)
				->notes($notes)
				->logo(public_path('vendor/invoices/sample-logo.png'))
				// You can additionally save generated invoice to configured disk
				->save('public');
				
			$link = $invoice->url();
			// Then send email to party with link

			// And return invoice itself to browser or have a different view
			return $invoice->download();
		}
		
	}
}