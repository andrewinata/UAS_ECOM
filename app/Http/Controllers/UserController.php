<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index()
	{
		$data['produk'] = \DB::table('t_produk')->get();
		return view ('index', $data);
	}
}