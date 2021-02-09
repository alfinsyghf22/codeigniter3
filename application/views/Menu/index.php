
<div class="container">
	<?php if( $this->session->flashdata('flash') ):?>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
		  <strong>Yeay!</strong> Menu makanan baru berhasil <?= $this->session->flashdata('flash');?>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
	</div>
</div>
<?php endif; ?>
	<div class="row mt-4">
		<div class="col-md-8">
			<a href="<?= base_url('menu/tambah'); ?>" class="btn btn-primary">Tambahkan Menu Makanan Lainnya</a>
	</div>
</div>

<div class="row mt-3">
	<div class="col-md-6">
		<form action="" method="post">
			<div class="input-group">
			  <input type="text" class="form-control" placeholder="Cari Menu!" name="keyword">
			  <div class="input-group-append">
			    <button class="btn btn-outline-light btn-success" type="submit">Cari</button>
			  </div>
			</div>
		</form>
	</div>
</div>

<div class="row mt-3">
	<div class="col-md-6">
		<h2>DAFTAR MENU</h2>
			<ul class="list-group">
				<?php foreach ($menu as $menu) :?>
					 <li class="list-group-item">
					  	<?= $menu['makanan'];?>
					  	<a href="<?= base_url(); ?>menu/hapus/<?= $menu['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Kamu Yakin?');">Hapus</a>
					  	<a href="<?= base_url(); ?>menu/ubah/<?= $menu['id']; ?>" class="badge badge-success float-right">Ubah</a>
					  	<a href="<?= base_url(); ?>menu/detail/<?= $menu['id']; ?>" class="badge badge-primary float-right">Detail</a>
  					</li>
				<?php endforeach;?>
			</ul>
		</div>
	</div>