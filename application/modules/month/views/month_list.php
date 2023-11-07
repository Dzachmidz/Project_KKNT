<script type="text/javascript" src="<?php echo media_url('js/jquery-migrate-3.0.0.min.js') ?>"></script>
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
			<div class="col-xs-12">
				<div class="box box-success">
					<div class="box-header">
						<a href="<?php echo site_url('manage/month/add') ?>" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</a>

						<div class="box-tools">
							<?php echo form_open(current_url(), array('class' => 'form-horizontal', 'method' => 'get')) ?>
							<div class="input-group input-group-sm" style="width: 250px;">
								<input type="text" id="field" autofocus name="n" <?php echo (isset($f['n'])) ? 'placeholder="' . $f['n'] . '"' : 'placeholder="Cari Bulan"' ?> class="form-control" required>
								<div class="input-group-btn">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>
					</div>

					<!-- /.box-header -->
					<div class="box-body table-responsive">
						<table class="table table-hover table-striped table-bordered">
							<tr>
								<th>No</th>
								<th>Nama Bulan</th>
								<th>Aksi</th>
							</tr>
							<tbody>
								<?php
								if (!empty($month)) {
									$i = 1;
									foreach ($month as $row) :
								?>
										<tr>
											<td><?php echo $i; ?></td>
											<td><?php echo $row['month_name']; ?></td>
											<td>
												<a href="<?php echo site_url('manage/month/edit/' . $row['month_id']) ?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
											</td>
										</tr>
									<?php
										$i++;
									endforeach;
								} else {
									?>
									<tr id="row">
										<td colspan="3" align="center">Data Kosong</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
						<?php echo $this->pagination->create_links(); ?>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<div>
			</div>
			<!-- /.box -->
		</div>
</div>
</section>
<!-- /.content -->
</div>