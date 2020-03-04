<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DropdownController extends Controller
{
     public function get_by_country(Request $request)
	{
		if (!$request->country) {
			$html = '<option value="">'.trans('global.pleaseSelect').'</option>';
		} else {
			$html = '';
			if ($request->country == 'Malaysia')
			{
				$html .= '<option value="Alor Setar">Alor Setar</option>';
				$html .= '<option value="George Town">George Town</option>';
				$html .= '<option value="Iskandar Puteri">Iskandar Puteri</option>';
				$html .= '<option value="Ipoh">Ipoh</option>';
				$html .= '<option value="Johor Bahru">Johor Bahru</option>';
				$html .= '<option value="Kuching">Kuching</option>';
				$html .= '<option value="Kota Kinabalu">Kota Kinabalu</option>';
				$html .= '<option value="Kuala Lumpur">Kuala Lumpur</option>';
				$html .= '<option value="Kuala Terengganu">Kuala Terengganu</option>';
				$html .= '<option value="Miri">Miri</option>';
				$html .= '<option value="Melaka">Melaka</option>';
				$html .= '<option value="Petaling Jaya">Petaling Jaya</option>';
				$html .= '<option value="Seberang Perai">Seberang Perai</option>';
				$html .= '<option value="Seremban">Seremban</option>';
				$html .= '<option value="Shah Alam">Shah Alam</option>';
			}
			else if ($request->country == 'Singapore')
			{
				$html .= '<option value="Singapore">Singapore</option>';
			}
			else if ($request->country == 'China')
			{
				$html .= '<option value="Beijing">Beijing</option>';
				$html .= '<option value="Chongqing">Chongqing</option>';
				$html .= '<option value="Guangzhou">Guangzhou</option>';
				$html .= '<option value="Hangzhou">Hangzhou</option>';
				$html .= '<option value="Shanghai">Shanghai</option>';
			}
		}

		return response()->json(['html' => $html]);
	}
}
