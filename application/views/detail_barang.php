<div class="container-fluid">
	
	<div class="card">
	  <h5 class="card-header">Detail Produk</h5>
	  <div class="card-body">

	  	<?php foreach($barang as $brg) : ?>
	   	<div class="row">
	   	<div class="col-md-4">
	   			<img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top">
	   	</div>
	   	<div class="col-md-8">
	   		<table class="table">
	   			<tr>
	   				<td>Nama Produk</td>
	   				<td><strong><?php echo $brg->nama_brg ?></strong></td>
	   			</tr>

	   			<tr>
	   				<td>Keterangan</td>
	   				<td><strong><?php echo $brg->keterangan ?></strong></td>
	   			</tr>

	   			<tr>
	   				<td>Kategori</td>
	   				<td><strong><?php echo $brg->kategori ?></strong></td>
	   			</tr>

	   			<tr>
	   				<td>Harga</td>
	   				<td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga,0,',','.') ?></div></strong></td>
	   			</tr>
	   			
	   		</table>
	   		<!-- Button trigger modal -->
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
		  Tambah Keranjang
		</button>
	   		<!-- <?php echo anchor('dashboard/request_produk/'.$brg->id_brg, '<div class="btn btn-sm btn-primary mb-2">Tambah Ke Keranjang</div>') ?> -->

	   		<?php echo anchor('welcome/index/','<div class="btn btn-sm btn-danger mb-2">Kembali</div>') ?>
	   	</div>
	   		


<form action="<?php echo base_url(). 'dashboard/tambah_ke_keranjang/'.$brg->id_brg  ?>" method="post" enctype="multipart/form-data">
	<!-- Modal -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalCenterTitle">Upload File Request</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <input type="file" name="file_request">
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
<!-- endmodal -->
</form>

	   </div>
	<?php endforeach; ?>
	  </div>
	</div>
</div>