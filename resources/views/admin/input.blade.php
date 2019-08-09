@if(session('error'))
<div class="alert alert-error">
	{{ session('error') }}
</div>
@endif

@if (count($errors) > 0)
<div class="alert alert-danger">
	<strong>Perhatian</strong>
	<br />
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<h1>Input Produk</h1>
<form action="{{ url('produk', @$produk->id) }}" method="POST">
	@csrf
	
	@if(!empty($produk))
		@method('PATCH')
	@endif
	
	Nama Produk	: <input type="text" name="nama_produk" value="{{ old('nama_produk', @$produk->nama_produk) }}" /><br/>
	Harga Produk	: <input type="text" name="harga_produk" value="{{ old('harga_produk', @$produk->harga_produk) }}" /><br/>
	Deskripsi Produk	: <input type="text" name="deskripsi_produk" value="{{ old('deskripsi_produk', @$produk->deskripsi_produk) }}" /><br/>

	<input type="submit" value="Simpan" />
</form>