<div class="container">
<div class="row mt-3">
	<div class="col-md-6">

		<div class="card">
		  <div class="card-header">
		    Tempat Untuk Menambah Menu Makanan
		  </div>
		  <div class="card-body">
		  	<?php if( validation_errors() ) : ?>
		  	<div class="alert alert-warning" role="alert">
				 <?= validation_errors(); ?>
				</div> 
			<?php endif; ?>
		  	<form action="" method="post">
		<form>
		  <div class="form-group">
		    <label for="makanan">Masukan menu baru disini!</label>
		    <input type="text" class="form-control" id="makanan" name="makanan">
		    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
		  </div>
		  <div class="form-group">
		    <label for="harga">Masukkan harga jual menu</label>
		    <input type="text" class="form-control" id="harga" name="harga">
		  </div>
		  <button type="submit" name="tambah" class="btn btn-danger"<?= base_url('menu'); ?>>Tambahkan Menu Baru!</button>
		</form>
		</form>
		  </div>
		</div>
		

</div>


</div>