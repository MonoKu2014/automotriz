<!DOCTYPE html>
<html>
<head>
    <title>Panel de control</title>
    <script type="text/javascript" src="<?= base_url();?>components/js/jquery.js"></script>
    <script type="text/javascript" src="<?= base_url();?>components/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>components/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>components/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>components/css/estilo-login.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>components/css/font-awesome/css/font-awesome.min.css">
</head>
<body>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="container text-center">
            <form method="post" action="panel/login">
                <div class="jumbotron">
                    <h1>Panel de Control</h1>
                    <h2>Automotora</h2>
                        <div class="col-lg-3 col-md-3 col-sm-1 hidden-xs"></div>
                        <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
                            <input type="text" placeholder="Ingrese su E-mail" name="user" class="form-control">
                            <br>
                            <input type="password" placeholder="Ingrese su contraseña" name="password" class="form-control">
                            <br>
                            <input type="submit" value="Acceder" class="btn btn-primary">
                        </div>    
                        <div class="col-lg-3 col-md-3 col-sm-1 hidden-xs"></div>
                        <div class="clearfix"></div>  
                        <br>
                        <p class="remember_password">Olvido su contraseña? Ingrese <a href="panel/recuperar">Aquí</a></p>  
                </div>
            </form>
        </div>
    </div>

</body>
</html>