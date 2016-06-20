<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

  <span class="col-xs-12 col-sm-12 col-md-12 col-lg-12 teal lighten-2 white-text main-alert" ng-show="success">{{success}}</span>
  <span class="col-xs-12 col-sm-12 col-md-12 col-lg-12 red lighten-1 white-text main-alert" ng-show="error">{{error}}</span>

          <input type="hidden" ng-model="u.id_usuario">
          <div class="input-field col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <input id="nombre" type="text" ng-model="u.nombre_usuario">
            <label for="nombre">Nombre(*)</label>
          </div>
          <div class="input-field col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <input id="rut" type="text" name="rut" placeholder="Ingrese el rut sin puntos ni guíon" ng-model="u.rut_usuario">
            <label for="rut">Rut(*)</label>
          </div>

          <div class="input-field col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <input id="email" type="text" name="email" placeholder="Ingrese email (ejemplo@ejemplo.cl)" ng-model="u.email_usuario">
            <label for="email">Email(*)</label>
          </div>

          <div class="input-field col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <select name="perfil" id="perfil" ng-model="u.nombre_perfil">
              <option value="{{u.id_perfil}}">{{u.nombre_perfil}}</option>
              <option value="1">Administrador</option>
              <option value="2">Jefe de Sector</option>
              <option value="3">Gerente</option>
              <option value="4">Ayudante</option>
            </select>
            <label for="area">Perfil(*)</label>
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