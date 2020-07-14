<?php
namespace App\Http\Controllers;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class InvoiceController extends Controller
{
	public function index()
    {
		$client = new Party([
            'name'          => 'Roosevelt Lloyd',
            'phone'         => '(520) 318-9486',
            'custom_fields' => [
                'note'        => 'IDDQD',
                'business id' => '365#GG',
            ],
        ]);

        $customer = new Party([
            'name'          => 'Ashley Medina',
            'address'       => 'The Green Street 12',
            'code'          => '#22663214',
            'custom_fields' => [
                'order number' => '> 654321 <',
            ],
        ]);
		
		
		$array = array(
			 0 => array (
				  'description' => 'Service 1',
				  'price'=> 47.79,
				  'qty' => 2,
				  'discount' => 10,
				  'discountByPercent' => 0,
				  'units' => ''
			 ),
			 1 => array(
				 'description' => 'Service 2',
				  'price'=> 71.96,
				  'qty' => 2,
				  'discount' => 0,
				  'discountByPercent' => 0,
				  'units' => ''
			 ),
			 2 => array (
				 'description' => 'Service 3',
				  'price'=> 4.56,
				  'qty' => '',
				  'discount' => 0,
				  'discountByPercent' => 0,
				  'units' => ''
			 ),
			 3 => array (
				 'description' => 'Service 4',
				  'price'=> 87.51,
				  'qty' => 7,
				  'discount' => 4,
				  'discountByPercent' => 0,
				  'units' => 'kg'
			 ),
			 4 => array (
				 'description' => 'Service 5',
				  'price'=> 71.09,
				  'qty' => 7,
				  'discount' => 0,
				  'discountByPercent' => 9,
				  'units' => ''
			 ),
			 5 => array (
				 'description' => 'Service 6',
				  'price'=> 58.18,
				  'qty' => 3,
				  'discount' => 3,
				  'discountByPercent' => 0,
				  'units' => ''
			 ),
			 6 => array (
				 'description' => 'Service 7',
				  'price'=> 71.09,
				  'qty' => 7,
				  'discount' => 0,
				  'discountByPercent' => 9,
				  'units' => ''
			 ),
			 7 => array (
				 'description' => 'Service 8',
				  'price'=> 33.24,
				  'qty' => 6,
				  'discount' => 0,
				  'discountByPercent' => 0,
				  'units' => 'm2'
			 ),
			 8 => array (
				 'description' => 'Service 9',
				  'price'=> 160,
				  'qty' => 0,
				  'discount' => 0,
				  'discountByPercent' => 0,
				  'units' => 'hours'
			 ),
			 9 => array (
				  'description' => 'Service 10',
				  'price'=> 62.21,
				  'qty' => 0,
				  'discount' => 0,
				  'discountByPercent' => 5,
				  'units' => ''
			 )
		 );
		$arrayLength = count($array);
		$items = [];
		
		
		for ($i = 0; $i < $arrayLength; $i++) {
			$description = $array[$i]["description"];
			$price = $array[$i]["price"];
			$qty = $array[$i]["qty"];
			$discount = $array[$i]["discount"];
			$discountByPercent = $array[$i]["discountByPercent"];
			$units = $array[$i]["units"];
				
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

		/*
		$items = [
            
			(new InvoiceItem())->title('Service 1')->pricePerUnit(47.79)->quantity(2)->discount(10),
            (new InvoiceItem())->title('Service 2')->pricePerUnit(71.96)->quantity(2),
            (new InvoiceItem())->title('Service 3')->pricePerUnit(4.56),
            (new InvoiceItem())->title('Service 4')->pricePerUnit(87.51)->quantity(7)->discount(4)->units('kg'),
            (new InvoiceItem())->title('Service 5')->pricePerUnit(71.09)->quantity(7)->discountByPercent(9),
            (new InvoiceItem())->title('Service 6')->pricePerUnit(76.32)->quantity(9),
            (new InvoiceItem())->title('Service 7')->pricePerUnit(58.18)->quantity(3)->discount(3),
            (new InvoiceItem())->title('Service 8')->pricePerUnit(42.99)->quantity(4)->discountByPercent(3),
            (new InvoiceItem())->title('Service 9')->pricePerUnit(33.24)->quantity(6)->units('m2'),
            (new InvoiceItem())->title('Service 11')->pricePerUnit(97.45)->quantity(2),
            (new InvoiceItem())->title('Service 12')->pricePerUnit(92.82),
            (new InvoiceItem())->title('Service 13')->pricePerUnit(12.98),
            (new InvoiceItem())->title('Service 14')->pricePerUnit(160)->units('hours'),
            (new InvoiceItem())->title('Service 15')->pricePerUnit(62.21)->discountByPercent(5),
            (new InvoiceItem())->title('Service 16')->pricePerUnit(2.80),
            (new InvoiceItem())->title('Service 17')->pricePerUnit(56.21),
            (new InvoiceItem())->title('Service 18')->pricePerUnit(66.81)->discountByPercent(8),
            (new InvoiceItem())->title('Service 19')->pricePerUnit(76.37),
            (new InvoiceItem())->title('Service 20')->pricePerUnit(55.80),
        ];
		*/

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