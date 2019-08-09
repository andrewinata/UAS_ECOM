@if(session('success'))
<div class="alert alert-success">
	{{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-error">
	{{ session('error') }}
</div>
@endif

<Center>
	<body style="background-color:powderblue;">
<h2>SELAMAT DATANG DI HALAMAN ADMIN</h2>
<a href="{{ url('/produk/create') }}">Tambah Data</a> </br>

<table border="1">
	<tr>
		<th>No</th>
		<th>Nama Produk</th>
		<th>Harga Produk</th>
		<th>Deskripsi Produk</th>
		<th>Aksi</th>
	</tr>
	@foreach ($produk as $row)
	<tr>
		<td>{{ isset($i) ? ++$i : $i = 1}}</td>
		<td>{{ $row->nama_produk }}</td>
		<td>{{ $row->harga_produk }}</td>
		<td>{{ $row->deskripsi_produk }}</td>
		<td>
			<a href="{{ url('/produk/' . $row->id . '/edit') }}">Edit</a>
			|
			<form action="{{ url('/produk/' . $row->id) }}" method="POST">
				@method('DELETE')
				@csrf
				<button type="submit">Delete</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>
</body>