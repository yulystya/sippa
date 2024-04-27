<!DOCTYPE html>
<html><head>
	<title>Data Invoice</title>
</head>
<body>
	<center>
		<h2>Invoice Pemesanan Produk</h2>
	</center>

	<table class="table table-bordered table-hover table-striped" border ="1" style="width: 100%" >
		<tr>
			<th>Id Invoice</th>
			<th>Nama Pemesan</th>
			<th>Alamat Pengiriman</th>
			<th>Tanggal Pemesanan</th>
			<th>Batas Pembayaran</th>
	
		</tr>

		<?php 
		$id= 1;
		foreach ($invoice as $inv) : ?>

		<tr>
			<td><?php echo $id++ ?></td>
			<td><?php echo $inv->nama ?></td>
			<td><?php echo $inv->alamat ?></td>
			<td><?php echo $inv->tanggal_pesan ?></td>
			<td><?php echo $inv->batas_bayar ?></td>
	
		</tr>

	<?php endforeach; ?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>

</body></html>