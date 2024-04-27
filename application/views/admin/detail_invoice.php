<div class="container-fluid">
	<h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice: <?php echo $invoice->id ?></div> <a href="<?php echo base_url ('admin/invoice/approve/').$invoice->id?>" class="btn btn-sm btn-success">Approve: <?php echo $invoice->id ?></a></h4>


	<table class="table table-bordered table-hover table-striped">

		<tr>
			<th>ID BARANG</th>
			<th>NAMA PRODUK</th>
			<th>JUMLAH PESANAN</th>
			<th>HARGA SATUAN</th>
			<th>SUB-TOTAL</th>
			<th>Nama File</th>
			<th></th>
		</tr>

		<?php
		$total = 0;
		foreach($pesanan as $psn) :
			$subtotal = $psn->jumlah * $psn->harga;
			$total += $subtotal;
		 ?>

		 <tr>
		 	<td><?php echo $psn->id_brg ?></td>
		 	<td><?php echo $psn->nama_brg ?></td>
		 	<td><?php echo $psn->jumlah ?></td>
		 	<td><?php echo number_format($psn->harga,0,',','.') ?></td>
		 	<td><?php echo number_format($subtotal,0,',','.') ?></td>
		 	<td><a target="_blank" href="<?php echo base_url('uploads/').$psn->file_request ?>" type="button" class="btn btn-info btn-sm">Cek File</a></td>
		 </tr>

		<?php endforeach; ?>

		<tr>
			<td colspan="4" align="right">Grand Total</td>
			<td align="righ">Rp. <?php echo number_format($total,0,',','.') ?></td>
			<td></td>
			<td></td>
		</tr>
		
	</table>

	<a href="<?php echo base_url('admin/invoice/index') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
</div>