<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountryApiController extends Controller
{
    var $term = "";
	
	public function search(Request $request)
	{
		$this->term = $request->get('term');
		$country = array("China"=>"China","Malaysia"=>"Malaysia","Singapore"=>"Singapore");
		$filtered = array_filter($country, function ($key) {
			return strpos(strtolower($key), strtolower($this->term)) === 0;
		}, ARRAY_FILTER_USE_KEY);
		
		$rsarr = array();
		foreach ($filtered as $key => $value) {
			array_push($rsarr, ['id' => $key, 'text' => $key]);
		}
		return ['results' => $rsarr];
	}
}