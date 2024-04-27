<!DOCTYPE html>
<html><head>
	<title>Data Produk</title>
</head>
<body>
	<center>
		<h2>Data Produk</h2>
	</center>


	<table class="table table-bordered table-hover table-striped ml-2" border ="1" style="width: 100%" >
		<tr>
			<th>NO</th>
			<th>NAMA BARANG</th>
			<th>KETERANGAN</th>
			<th>KATEGORI</th>
			<th>HARGA</th>
	
		</tr>

		<?php 
		$no= 1;
		foreach ($barang as $brg) : ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $brg->nama_brg ?></td>
			<td><?php echo $brg->keterangan ?></td>
			<td><?php echo $brg->kategori ?></td>
			<td><?php echo $brg->harga ?></td>
	
		</tr>

	<?php endforeach; ?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>

</body></html>