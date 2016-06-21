<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

  <span class="col-xs-12 col-sm-12 col-md-12 col-lg-12 teal lighten-2 white-text main-alert" ng-show="success">{{success}}</span>
  <span class="col-xs-12 col-sm-12 col-md-12 col-lg-12 red lighten-1 white-text main-alert" ng-show="error">{{error}}</span>

          <input type="hidden" ng-model="u.id_usuario">
          <div class="input-field col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <input id="nombre" type="text" placeholder="Ingrese el nombre completo" ng-model="u.nombre_usuario">
          </div>

          <div class="input-field col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <input id="rut" type="text" name="rut" placeholder="Ingrese el rut sin puntos ni guíon" ng-model="u.rut_usuario">
          </div>

          <div class="input-field col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <input id="email" type="text" name="email" placeholder="Ingrese email (ejemplo@ejemplo.cl)" ng-model="u.email_usuario">
          </div>

          <div class="input-field col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <select name="perfil" id="perfil2">
              <option value="1" ng-model="u.id_perfil">Administrador</option>
              <option value="2" ng-model="u.id_perfil">Jefe de Sector</option>
              <option value="3" ng-model="u.id_perfil">Gerente</option>
              <option value="4" ng-model="u.id_perfil">Ayudante</option>
            </select>
          </div>

          <div class="input-field col-xs-12 col-sm-12 col-md-12 col-lg-12">
          Seleccione el estado del usuario(*)<br>
            <p>
              <input name="group1" type="radio" value="1" id="test1" ng-model="u.estado_usuario">
              <label for="test1">Activo</label>
            </p>
            <p>
              <input name="group1" type="radio" value="0" id="test2" ng-model="u.estado_usuario">
              <label for="test2">Inactivo</label>
            </p>
          </div>

</div>
