<link rel="stylesheet" href="style.css">
<head>
	<title>Planet Sport</title>
</head>
<div class="header">
		<h1>Planet Sport</h1>
<div class="menu">
		<a href="index" style="text-decoration: none">Home &emsp; &emsp;</a>
		<a href="" style="text-decoration: none">Product &emsp; &emsp;</a>
		<a href="" style="text-decoration: none">Contact</a>
	</div>
	</div>
		<table border="1">
	<tr>
		<th>No</th>
		<th>Nama Produk</th>
		<th>Harga</th>
		<th>Deskripsi</th>
	</tr>
	@foreach ($produk as $row)
	<tr>
		<td>{{ isset($i) ? ++$i : $i = 1 }}</td>
		<td>{{ $row->nama_produk }}</td>
		<td>{{ $row->harga_produk }}</td>
		<td>{{ $row->deskripsi_produk }}</td>
	</tr>
	@endforeach
</table>
<center>
<div class="footer">
		<p>Copyright &copy; 2019. Allright Reserved</p>
</div>
</center>