<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?php echo isset($title) ? '' . $title : null; ?>
			<small>List</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url('manage') ?>"><i class="fa fa-th"></i> Home</a></li>
			<li class="active"><?php echo isset($title) ? '' . $title : null; ?></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-5">
				<div class="box box-danger">
					<div class="box-header">
						<div class="col">
							<div class="alert alert-danger pull-center text-center">
								<b>PERINGATAN! &nbsp;<br>
									Halaman ini digunakan untuk membackup seluruh database</b>
							</div>
							<div class="pull-center text-center">
								<a href="<?php echo site_url('manage/maintenance/backup') ?>">
									<i class="fa fa-database" style="color:#03C9A9; font-size: 118pt"></i><br><br>
									<span class="btn btn-warning"><i class="fa fa-database"></i> <b>&nbsp;BACKUP DATABASE APLIKASI</b></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- /.content -->
</div>