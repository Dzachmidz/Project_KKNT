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
			<div class="col-md-12">
				<div class="box box-success">
					<div class="box-header">
						<?php echo form_open(current_url(), array('method' => 'get')) ?> <br>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
										<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
										<input class="form-control" type="text" name="ds" readonly="readonly" <?php echo (isset($q['ds'])) ? 'value="' . $q['ds'] . '"' : '' ?> placeholder="Tanggal Awal">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
										<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
										<input class="form-control" type="text" name="de" readonly="readonly" <?php echo (isset($q['de'])) ? 'value="' . $q['de'] . '"' : '' ?> placeholder="Tanggal Akhir">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<button type="submit" class="btn btn-primary"><i class="fa fa-filter"></i> Filter Data</button>
								<?php if ($q) { ?>
									<a class="btn btn-success" href="<?php echo site_url('manage/report/report' . '/?' . http_build_query($q)) ?>"><i class="fa fa-file-excel-o"></i> Ekspor Excel</a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php if ($q and !empty($py)) { ?>
			<div class="box box-success">
				<div class="box-body table-responsive">
					<table class="table table-responsive table-hover table-bordered" style="white-space: nowrap;">
						<tr>
							<th rowspan="2">Pembayaran</th>
							<th rowspan="2">Nama</th>
							<th rowspan="2">Kelas</th>
							<th rowspan="2">Tanggal</th>
							<th rowspan="2">Penerimaan</th>
							<th rowspan="2">Pengeluaran</th>
							<th rowspan="2">Keterangan</th>
						</tr>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
		<?php } ?>
	</section>
	<!-- /.content -->
</div>