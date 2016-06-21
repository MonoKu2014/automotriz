<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>SCSA <?= $this->session->area;?> | Panel de Control</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url().CSS_PATH;?>materialize.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url().CSS_PATH;?>bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url().CSS_PATH;?>main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="<?=base_url().JS_PATH;?>jquery.min.js"></script>
</head>
<script>
    var BASE_URL = '<?= $this->functions->getActiveNav();?>';
    $(document).ready(function(){
        $('#'+BASE_URL).addClass('activeNav');
        setTimeout(function(){ $('.alerta_error').hide(); }, 3000);
    });
</script>
<body>

<div id="main-header">
    <header class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <nav class="blue darken-3">
            <div class="nav-wrapper">
              <!--<a href="<?= base_url()?>main" class="brand-logo">&nbsp;SCSA | <?= $this->session->area;?></a>-->
              <ul class="right hide-on-med-and-down">
                <li>Bienvenido(a) <?= $this->session->usuario;?></li>
                <li>
                    <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Administración">
                        <i class="material-icons">settings</i>
                    </a>
                </li>
                <li>
                    <a class="tooltipped" href="<?= base_url();?>login/mi_cuenta" data-position="bottom" data-delay="50" data-tooltip="Mi Cuenta">
                        <i class="material-icons">perm_identity</i>
                    </a>
                </li>
                <li>
                    <a class="tooltipped" href="<?= base_url();?>login/cerrar_sesion" data-position="bottom" data-delay="50" data-tooltip="Cerrar Sesión">
                        <i class="material-icons">power_settings_new</i>
                    </a>
                </li>
              </ul>
            </div>
        </nav>
    </header>
</div>
