<div class="container-fluid">
	<div class="d-flex">
		<h4>Invoice Pemesanan Produk</h4>
		<a class="btn btn-sm btn-danger ml-2 mb-3" href="<?php echo base_url('admin/invoice/print') ?>"><i class="fa fa-print fa-sm"></i> Print</a>
		<!-- Button trigger modal -->
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	  Launch demo modal
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form method="post" action="<?php echo base_url('admin/invoice/print') ?>">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlSelect1">Example select</label>
		    <select class="form-control" id="exampleFormControlSelect1">
		      <option>0</option>
		      <option>1</option>
		    </select>
		  </div>
		  <button type="submit" class="btn btn-primary">Save changes</button>
		</form>
	      </div>
	    </div>
	  </div>
	</div>
	</div>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Id Invoice</th>
			<th>Nama Pemesan</th>
			<th>Alamat Pengiriman</th>
			<th>Tanggal Pemesanan</th>
			<th>Batas Pembayaran</th>
			<th>Approve</th>
			<th>Aksi</th>
		</tr>

		<?php foreach ($invoice as $inv) : ?>
		<tr>
			<td><?php echo $inv->id ?></td>
			<td><?php echo $inv->nama ?></td>
			<td><?php echo $inv->alamat ?></td>
			<td><?php echo $inv->tanggal_pesan ?></td>
			<td><?php echo $inv->batas_bayar ?></td>
			<td><?php echo $inv->approve ?></td>
			<td><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
		</tr>
	<?php endforeach; ?>
		
	</table>
</div>