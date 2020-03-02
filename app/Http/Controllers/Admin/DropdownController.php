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
			$html .= '<option value="Kuala Lumpur">Kuala Lumpur</option>';
			$html .= '<option value="Selangor">Selangor</option>';
		}

		return response()->json(['html' => $html]);
	}
}
