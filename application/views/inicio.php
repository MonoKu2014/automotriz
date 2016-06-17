<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<title>SCSA | Login</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url().CSS_PATH;?>materialize.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url().CSS_PATH;?>bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url().CSS_PATH;?>login.css">

</head>
<body class="blue darken-3 container">

<div id="login-page" class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 z-depth-5 card-panel">
      <form class="login-form" method="post" action="<?= base_url();?>login">
        <!--<div class="row">
          <div class="input-field col-xs-12 col-sm-12 col-md-12 col-lg-12 center">
            <img src="<?=//base_url().IMAGES_PATH;?>logo.jpg" alt="" class="responsive-img valign profile-image-login">
            <h5 class="center login-form-text">Sistema de Control de Stock Automotriz</h5>
            <?= //$this->session->flashdata('mensaje');?>
          </div>
        </div>-->
        <div class="row margin">
          <div class="input-field col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <input class="validate" id="email" type="email" name="email">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <input class="validate" id="password" type="password" name="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <select name="area" id="area">
              <option>Seleccione el área...</option>
              <option value="Hyundai">Hyundai</option>
              <option value="Fortaleza">Fortaleza</option>
              <option value="Ford Livianos">Ford Livianos</option>
              <option value="Usados Livianos">Usados Livianos</option>
            </select>
            <label for="area">Área</label>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="input-field center">
            <input type="submit" class="btn" value="Acceder">
          </div>
        </div>
        <div class="row">
          <div class="input-field col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p class="margin medium-small"><a href="register">Registrate!</a></p>
          </div>
          <div class="input-field col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <p class="margin right-align medium-small"><a href="forgot-password">Olvidó su contraseña?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>

<script src="<?=base_url().JS_PATH;?>jquery.min.js"></script>
<script src="<?=base_url().JS_PATH;?>materialize.min.js"></script>
<script>
$(document).ready(function(){
  $('#error-alert').delay(3500).fadeOut();
  $('select').material_select();
});
</script>
</body>
</html>