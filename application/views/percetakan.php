<div class="container-fluid">
    <div class="alert alert-info">
        <p class="text-center align-middle">This Is Our Product!!!</p>
    </div>
</div>
<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url('assets/img/slider3.png') ?>" class="d-block w-100" width="150" height="410" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('assets/img/slider5.png') ?>" class="d-block w-100" width="150" height="410" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

<div class="row text-center mt-4">
        
        <?php foreach ($percetakan as $brg) : ?>

            <div class="card ml-3 mb-3" style="width: 16rem;">
              <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
                <small><?php echo $brg->keterangan ?></small><br>
                <span class="badge badge-pill badge-success mb-2">Rp. <?php echo number_format($brg->harga, 0,',','.' ) ?></span>
                <!-- <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg, '<div class="btn btn-sm btn-primary mb-2">Tambah Ke Keranjang</div>') ?> -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#exampleModalCenteridtext<?= $brg->id_brg ?>" >
                  Tambah Keranjang
                </button>
                <?php echo anchor('dashboard/detail/'.$brg->id_brg, '<div class="btn btn-sm btn-success mb-2">Detail</div>') ?>
              </div>
            </div>

<form action="<?php echo base_url(). 'dashboard/tambah_ke_keranjang/'.$brg->id_brg  ?>" method="post" enctype="multipart/form-data">
  <!-- Modal -->
    <div class="modal fade" id="exampleModalCenteridtext<?= $brg->id_brg ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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

        <?php endforeach; ?>
    </div>
</div>