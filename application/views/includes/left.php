<div>


    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" id="nav-menu-left">
    
        <ul class="collapsible" data-collapsible="expandable">

          <li class="">
            <div class="collapsible-header">
              <div class="chip">
                <img src="<?= base_url().IMAGES_PATH.$this->session->avatar;?>" alt="Contact Person">
                <?= $this->session->usuario;?>
              </div>
            </div>
          </li>

          <li class="">
            <div class="collapsible-header <?= $this->functions->printActiveClassNav('usuarios');?>"><i class="material-icons">settings</i>Administración</div>
            <div class="collapsible-body" style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                <ul>
                    <li><a id="usuarios" href="<?= base_url();?>usuarios">Usuarios</a></li>
                    <li><a id="clientes" href="">Clientes</a></li>
                </ul>
            </div>
          </li>


          <li class="">
            <div class="collapsible-header"><i class="material-icons">credit_card</i>Cotizaciones</div>
            <div class="collapsible-body" style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                <ul>
                    <li><a href="">Usuarios</a></li>
                    <li><a href="">Clientes</a></li>
                </ul>
            </div>
          </li>


          <li class="">
            <div class="collapsible-header"><i class="material-icons">work</i>Stock Vehículos</div>
            <div class="collapsible-body" style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                <ul>
                    <li><a href="">Usuarios</a></li>
                    <li><a href="">Clientes</a></li>
                </ul>
            </div>
          </li>


          <li class="">
            <div class="collapsible-header"><i class="material-icons">contact_phone</i>Clientes | Empresas</div>
            <div class="collapsible-body" style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                <ul>
                    <li><a href="">Usuarios</a></li>
                    <li><a href="">Clientes</a></li>
                </ul>
            </div>
          </li>

          <li class="">
            <div class="collapsible-header"><i class="material-icons">credit_card</i>Créditos Internos</div>
            <div class="collapsible-body" style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                <ul>
                    <li><a href="">Usuarios</a></li>
                    <li><a href="">Clientes</a></li>
                </ul>
            </div>
          </li>

          <li class="">
            <div class="collapsible-header"><i class="material-icons">perm_contact_calendar</i>Seguimiento Semanal</div>
            <div class="collapsible-body" style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                <ul>
                    <li><a href="">Usuarios</a></li>
                    <li><a href="">Clientes</a></li>
                </ul>
            </div>
          </li>

          <li class="">
            <div class="collapsible-header"><i class="material-icons">perm_data_setting</i>Gerencia</div>
            <div class="collapsible-body" style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                <ul>
                    <li><a href="">Usuarios</a></li>
                    <li><a href="">Clientes</a></li>
                </ul>
            </div>
          </li>

          <li class="">
            <div class="collapsible-header"><i class="material-icons">filter_drama</i>Administración</div>
            <div class="collapsible-body" style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                <ul>
                    <li><a href="">Usuarios</a></li>
                    <li><a href="">Clientes</a></li>
                </ul>
            </div>
          </li>
        </ul>
    </div>