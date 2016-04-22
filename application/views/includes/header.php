<!Doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>SEGURITO TOTAL</title>

    <script src="<?= base_url();?>components/js/jquery.js"></script>
    <script src="<?= base_url();?>components/js/bootstrap.min.js"></script>
    <script src="<?= base_url();?>components/js/admin.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>components/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>components/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>components/css/admin.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>components/css/jquery-confirm.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>components/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>components/css/lightbox.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url();?>components/css/jquery.dataTables.css">
    
    <script type="text/javascript" src="<?= base_url();?>/components/tinymce/tinymce.min.js"></script>

<script>
    var base_url = '<?php echo base_url();?>';
</script>
<script>
    
 tinymce.init({
  selector: 'textarea',
  theme: 'modern',
  plugins: [
    'advlist autolink lists link charmap  preview hr anchor pagebreak',
    'searchreplace visualblocks visualchars code',
    'insertdatetime nonbreaking save table contextmenu directionality',
    'paste textcolor colorpicker textpattern imagetools'
  ],
  toolbar1: 'undo redo styleselect bold italic alignleft aligncenter alignright alignjustify bullist numlist outdent indent | link',
  toolbar2: ' preview forecolor backcolor'
 });   

</script>

    <script src="<?= base_url();?>components/charts/Chart.min.js"></script>

</head>
<body>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="admin_header">
        <header>
            <div class="col-log-2 col-md-2 col-sm-2 col-xs-3">
                Panel de Control V2.0
            </div>
            <div class="col-log-8 col-md-8 col-sm-8 col-xs-6">
                
            </div>
            <div class="col-log-2 col-md-2 col-sm-2 col-xs-3 pull-right">
                <a href="" class="session_close">
                    <i class="fa fa-user"></i> Bienvenido: <?php echo $this->session->email;?>
                    &nbsp;&nbsp;&nbsp;
                    <i class="fa fa-caret-down"></i>
                </a>
               <div class="account text-center">
                    <p><a href="<?= base_url();?>principal/account"><i class="fa fa-user"></i> Mi cuenta</a></p>
                    <p><a href="<?= base_url();?>principal/close_account"><i class="fa fa-remove"></i> Cerrar Sesión</a></p>
               </div>
            </div>
        </header>
    </div>