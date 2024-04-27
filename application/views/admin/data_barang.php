<div class="container-fuid">
	<button class="btn btn-sm btn-primary ml-2 mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i>Tambah Barang</button>

  <a class="btn btn-sm btn-danger ml-2 mb-3" href="<?php echo base_url('admin/data_barang/print') ?>"><i class="fa fa-print fa-sm"></i> Print</a>

  <table class="table table-bordered table-hover table-striped ml-2">
		<tr>
			<th>NO</th>
			<th>NAMA BARANG</th>
			<th>KETERANGAN</th>
			<th>KATEGORI</th>
			<th>HARGA</th>
			<th colspan="2">AKSI</th>
		</tr>
		<?php 
		$no=1;
		foreach($barang as $brg) : ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $brg->nama_brg ?></td>
			<td><?php echo $brg->keterangan ?></td>
			<td><?php echo $brg->kategori ?></td>
			<td><?php echo $brg->harga ?></td>
			<td><?php echo anchor('admin/data_barang/edit/' .$brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
			<td><?php echo anchor('admin/data_barang/hapus/' .$brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
      
		</tr>

		<?php endforeach; ?>

	</table>
</div>


<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

        	<div class="form-group">
        		<label>Nama Barang</label>
        		<input type="text" name="nama_brg" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>keterangan</label>
        		<input type="text" name="keterangan" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>kategori</label>
        		<select class="form-control" name="kategori">
            <option>Percetakan</option>
            <option>Jasa</option>  
            </select>
        	</div>

        	<div class="form-group">
        		<label>harga</label>
        		<input type="text" name="harga" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Gambar Produk</label><br>
        		<input type="file" name="gambar" class="form-control">
        	</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>

    </div>
  </div>
</div>