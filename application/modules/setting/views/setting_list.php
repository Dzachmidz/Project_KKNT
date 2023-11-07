<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo isset($title) ? '' . $title : null; ?>
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
          <?php echo form_open_multipart(current_url()); ?>
          <div class="box-body">
            <div class="col-md-4">
              <div class="form-group">
                <label class="control-label">Tingkat Sekolah</label>
                <select name="setting_level" class="form-control">
                  <option value="senior" <?php echo ($setting_level['setting_value'] == 'senior') ? 'selected' : '' ?>>KB/TK</option>
                  <option value="senior" <?php echo ($setting_level['setting_value'] == 'senior') ? 'selected' : '' ?>>PGSD</option>
                  <option value="senior" <?php echo ($setting_level['setting_value'] == 'senior') ? 'selected' : '' ?>>TPQ</option>
                </select>
              </div>
              <div class="form-group">
                <label class="control-label">Nama Sekolah</label>
                <input type="text" name="setting_school" value="<?php echo $setting_school['setting_value'] ?>" class="form-control" required>
              </div>
              <div class="form-group">
                <label class="control-label">Alamat Sekolah</label>
                <input name="setting_address" type="text" value="<?php echo $setting_address['setting_value'] ?>" class="form-control" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="control-label">Nama Kecamatan</label>
                <input type="text" name="setting_district" value="<?php echo $setting_district['setting_value'] ?>" class="form-control" required>
              </div>
              <div class="form-group">
                <label class="control-label">Nama Kota/Kab</label>
                <input type="text" name="setting_city" value="<?php echo $setting_city['setting_value'] ?>" class="form-control" required>
              </div>
              <div class="form-group">
                <label class="control-label">Nomor Telepon</label>
                <input type="text" name="setting_phone" value="<?php echo $setting_phone['setting_value'] ?>" class="form-control" required>
              </div>
              <div class="form-group">
                <input type="submit" value="Simpan Data" class="btn btn-success pull-left">
              </div>
            </div>
            <div class="col-md-4">
              <!-- <div class="row"> -->
              <div class="col">
                <label>Logo Sekolah</label>
                <a href="#" class="thumbnail">
                  <?php if (isset($setting_logo) and $setting_logo['setting_value'] != NULL) { ?>
                    <img src="<?php echo upload_url('school/' . $setting_logo['setting_value']) ?>" style="height: 115px">
                  <?php } else { ?>
                    <img src="<?php echo media_url('img/missing_logo.gif') ?>" id="target" alt="Choose image to upload">
                  <?php } ?>
                </a>
                <input type='file' id="setting_logo" name="setting_logo" class="btn btn-success pull-left">
              </div>
              <!-- </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php echo form_close() ?>
  </section>
</div>

<script type="text/javascript">
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#target').attr('src', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#setting_logo").change(function() {
    readURL(this);
  });
</script>