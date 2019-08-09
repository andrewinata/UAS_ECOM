<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function index()
	{
    $data['produk'] =\DB::table('t_produk')->get();
    return view('produk', $data);
	}
	public function create()
	{
		return view('admin.input');
	}
	
	public function store(Request $request)
	{
		$rule = [
			'nama_produk' => 'required|string',
			'harga_produk' => 'required|integer',
			'deskripsi_produk' => 'required|string',
		];
		$this->validate($request, $rule);
		$input = $request->all();
		unset($input['_token']);
		$status = \DB::table('t_produk')->insert($input);
		
		if ($status) {
			return redirect('/produk')->with('success', 'Data berhasil ditambahkan');
		} else {
			return redirect('/produk/create')->with('error', 'Data gagal ditambahkan');
		}
	}
	
	public function edit(Request $request, $id)
	{
		$data['produk'] = \DB::table('t_produk')->find($id);
		return view('admin.input', $data);
	}
	
		public function update(Request $request, $id)
	{
		$rule = [
			'nama_produk' => 'required|string',
			'harga_produk' => 'required|integer',
			'deskripsi_produk' => 'required|string',
		];
		$this->validate($request, $rule);
		
		$input = $request->all();
		unset($input['_token']);
		unset($input['_method']);
		
		$status = \DB::table('t_produk')->where('id', $id)->update($input);
		
		if ($status) {
			return redirect('/produk')->with('success', 'Data berhasil diubah');
		} else {
			return redirect('/produk/create')->with('error', 'Data gagal diubah');
		}
	}
	
		public function destroy(Request $request, $id)
	{
		
		$status = \DB::table('t_produk')->where('id', $id)->delete();
		
		if ($status) {
			return redirect('/produk')->with('success', 'Data berhasil dihapus');
		} else {
			return redirect('/produk/create')->with('error', 'Data gagal dihapus');
		}
	}
}
