<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <title>YAYASAN HIFDZULWAFA AL - MADANI | Login</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" type="image/png" href="<?php echo media_url('img/logoyayasanbc.png') ?>">
  <link href="<?php echo media_url() ?>css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo media_url() ?>css/font-awesome.min.css" rel="stylesheet" />
  <link href="<?php echo media_url() ?>css/login.css" rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="col-md-12">
      <div class="navbar-header">
        <ul class="nav navbar-nav navbar-center">
          <?php if (isset($setting_school) and $setting_school['setting_value'] == '-') { ?>
            <li><a href="javascript:void(0)"><span class='glyphicon glyphicon-stats' aria-hidden='true'></span>&nbsp;<b> E-SPPM</b></a></li>
          <?php } else { ?>
            <li><a href="javascript:void(0)"><span class='glyphicon glyphicon-stats' aria-hidden='true'></span>&nbsp;<b> <?php echo $this->config->item('app_name') ?></b></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  <div class="kontainer">
    <div class="kotak">
      <div class="wrapper">
        <p style="padding: 20px 10px; text-align-last: center;">
          <?php if (isset($setting_logo) and $setting_logo['setting_value'] == NULL) { ?>
            <img src="<?php echo media_url('img/logo.png') ?>" height="100">
          <?php } else { ?>
            <img src="<?php echo upload_url('school/' . $setting_logo['setting_value']) ?>" height="100">
          <?php } ?>
        </p>
        <div class="title1"><span>LOGIN </span></div>
        <?php echo form_open('manage/auth/login', array('class' => 'login100-form validate-form')); ?>
        <div class="row">
          <i class="fa fa-user"></i>
          <input type="email" required="" autofocus="" name="email" placeholder="Email" class="form-control flat">
        </div>
        <div class="row">
          <i class="fa fa-lock"></i>
          <input type="password" required="" name="password" placeholder="Password" class="form-control flat">
        </div>

        <div class="row" style="margin-bottom: -12px;">
          <button class="btn btn-login"><span class="fa fa-random"></span> &nbsp;<b>LOGIN</b></button>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>

  <div class="navbar navbar-inverse navbar-fixed-bottom">
    <p class="navbar-text text-center"><b><?php echo $this->config->item('created') . ' ' . $this->config->item('app_name') . ' ' . $this->config->item('version') ?></b></p>
  </div>
  </div>
</body>

</html>