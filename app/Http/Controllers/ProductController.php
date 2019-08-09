<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
	{
		$data['produk'] = \DB::table('t_produk')->get();
		return view ('product', $data);
	}
}
