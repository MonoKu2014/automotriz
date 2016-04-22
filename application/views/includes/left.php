<?php 
if($current_url == 'principal'){ $active_panel = 'active_nav'; } else { $active_panel = ''; }
if($current_url == 'usuarios'){ $active_user = 'active_nav'; } else { $active_user = ''; }
if($current_url == 'administracion'){ $active_admin = 'active_nav'; } else { $active_admin = ''; }
if($current_url == 'diseno'){ $active_design = 'active_nav'; } else { $active_design = ''; }
?>

<script>
$(document).ready(function(){

    var current_url = '<?= $current_url?>';
    if(current_url == 'administracion'){
        $('#administracion').slideDown();
    }

    if(current_url == 'diseno'){
        $('#diseno').slideDown();
    }

    if(current_url == 'cotizaciones'){
        $('#cotizaciones').slideDown();
    }

});
</script>


<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12" id="admin_left">
    <nav>
        <ul id="admin_nav">
            
            <!-- LINK PANEL DE CONTROL -->
            <li>
                <a href="<?= base_url();?>principal" class="<?= $active_panel;?>"><i class="fa fa-cogs"></i> Panel de control 
                </a>
            </li>
            <!-- LINK PANEL DE CONTROL -->


            <!-- LINK ADMINISTRACION -->
            <li>
                <a href="" class="administracion <?= $active_admin;?>">
                    <i class="fa fa-bar-chart"></i> Administración 
                        <i class="fa fa-angle-right pull-right"></i>
                </a>
            </li>
            <div id="administracion">
                <ul class="inside_nav">
                    <li><a href="<?= base_url();?>catalogos">Catálogos</a></li>
                    <li><a href="<?= base_url();?>categorias" id="c_admin">Categorías</a></li>
                    <li><a href="<?= base_url();?>subcategorias" id="subcategorias">Subcategorías</a></li>
                    <li><a href="<?= base_url();?>productos">Productos</a></li>

                    <?php if($this->session->perfil == 'Administrador'){ ?>
                        <li><a href="<?= base_url();?>empresas">Empresas</a></li>
                        <li><a href="<?= base_url();?>clientes">Cuentas por empresas</a></li>
                        <li><a href="<?= base_url();?>precios">Precios por empresas</a></li>
                    <?php } ?>

                    <li><a href="<?= base_url();?>marcas">Marcas</a></li>

                </ul>
            </div>
            <!-- LINK ADMINISTRACION -->


            <!-- LINK USUARIOS -->
            <?php if($this->session->perfil == 'Administrador'){ ?>
                <li><a href="<?= base_url();?>usuarios" class="<?= $active_user;?>"><i class="fa fa-users"></i> Usuarios</a></li>
            <?php } ?>
            <!-- LINK USUARIOS -->


            <!-- LINK DISEÑO DEL SITIO -->
            <li><a href="" class="diseno <?= $active_design;?>"><i class="fa fa-code"></i> Diseño del sitio <i class="fa fa-angle-right pull-right"></i></a></li>
            <div id="diseno">
                <ul class="inside_nav">
                    <li><a href="<?= base_url();?>cabecera">Cabecera</a></li>
                    <li><a href="<?= base_url();?>slide">Slide (Banner principal)</a></li>
                    <li><a href="<?= base_url();?>nosotros">Sobre Nosotros</a></li>
                    <li><a href="<?= base_url();?>datos">Datos Empresa</a></li>
                </ul>
            </div>
            <!-- LINK DISEÑO DEL SITIO -->



            <!-- LINK COTIZACIONES -->
            <?php if($this->session->perfil == 'Administrador'){ ?>
            <li><a href="<?= base_url();?>cotizaciones" class="cotizaciones"><i class="fa fa-users"></i> Cotizaciones <i class="fa fa-angle-right pull-right"></i></a></li>
            <div id="cotizaciones">
                <ul class="inside_nav">
                    <li><a href="<?= base_url();?>cotizaciones">Revisar Cotizaciones</a></li>
                    <li><a href="<?= base_url();?>graficos">Gráficos</a></li>
                </ul>
            </div>
            <?php } ?>
            <!-- LINK COTIZACIONES -->

            <li><a href=""><i class="fa fa-eye"></i> Ver sitio web</a></li>
        </ul>
    </nav>
</div>