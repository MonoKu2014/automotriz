    <a href="#" onclick="showNavMobile();" class="button-collapse button-mobile-menu"><i class="material-icons">menu</i></a>

    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" id="nav-menu-left">
    
        <ul class="collapsible" data-collapsible="expandable">

          <li class="">
            <div class="collapsible-header <?= $this->functions->printActiveClassNav('usuarios');?>"><i class="material-icons">settings</i>Administración</div>
            <div class="collapsible-body">
                <ul>
                    <li><a id="usuarios" href="<?= base_url();?>usuarios">Usuarios</a></li>
                    <li><a id="clientes" href="<?= base_url();?>clientes">Clientes</a></li>
                </ul>
            </div>
          </li>


          <li class="">
            <div class="collapsible-header"><i class="material-icons">credit_card</i>Cotizaciones</div>
            <div class="collapsible-body">
                <ul>
                    <li><a href="">Usuarios</a></li>
                    <li><a href="">Clientes</a></li>
                </ul>
            </div>
          </li>


          <li class="">
            <div class="collapsible-header"><i class="material-icons">work</i>Stock Vehículos</div>
            <div class="collapsible-body">
                <ul>
                    <li><a href="">Ingresar Vehículos</a></li>
                </ul>
            </div>
          </li>


          <li class="">
            <div class="collapsible-header"><i class="material-icons">contact_phone</i>Clientes</div>
            <div class="collapsible-body">
                <ul>
                    <li><a href="">Usuarios</a></li>
                    <li><a href="">Clientes</a></li>
                </ul>
            </div>
          </li>

          <li class="">
            <div class="collapsible-header"><i class="material-icons">credit_card</i>Créditos Internos</div>
            <div class="collapsible-body">
                <ul>
                    <li><a href="">Usuarios</a></li>
                    <li><a href="">Clientes</a></li>
                </ul>
            </div>
          </li>

          <li class="">
            <div class="collapsible-header"><i class="material-icons">perm_contact_calendar</i>Seguimiento Semanal</div>
            <div class="collapsible-body">
                <ul>
                    <li><a href="">Usuarios</a></li>
                    <li><a href="">Clientes</a></li>
                </ul>
            </div>
          </li>

          <li class="">
            <div class="collapsible-header"><i class="material-icons">perm_data_setting</i>Gerencia</div>
            <div class="collapsible-body">
                <ul>
                    <li><a href="">Usuarios</a></li>
                    <li><a href="">Clientes</a></li>
                </ul>
            </div>
          </li>

          <li class="">
            <div class="collapsible-header"><i class="material-icons">filter_drama</i>Administración</div>
            <div class="collapsible-body">
                <ul>
                    <li><a href="">Usuarios</a></li>
                    <li><a href="">Clientes</a></li>
                </ul>
            </div>
          </li>
        </ul>
    </div>
  <script>
  
    function showNavMobile(){
      $('#nav-menu-left').slideToggle();
    }

  </script>