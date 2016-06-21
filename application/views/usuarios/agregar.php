<h2>Agregar Usuarios</h2>
<p>Los campos marcados con (*) son de caracter obligatorio</p>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

  <span class="col-xs-12 col-sm-12 col-md-12 col-lg-8 teal lighten-2 white-text main-alert z-depth-1" ng-show="success">{{success}}</span>
  <span class="col-xs-12 col-sm-12 col-md-12 col-lg-8 red lighten-1 white-text main-alert z-depth-1" ng-show="error">{{error}}</span>

          <div class="input-field col-xs-12 col-sm-12 col-md-12 col-lg-8">
          (*) Nombre Completo
            <input id="nombre" name="nombre" type="text" placeholder="Ingrese el nombre completo" ng-model="user.nombre">
          </div>
          <div class="input-field col-xs-12 col-sm-12 col-md-12 col-lg-8">
          (*) Rut sin puntos y con guión
            <input id="rut" type="text" name="rut" placeholder="Ingrese el rut sin puntos y con guíon" ng-model="user.rut">
          </div>

          <div class="input-field col-xs-12 col-sm-12 col-md-12 col-lg-8">
          (*) Email
            <input id="email" type="text" name="email" placeholder="Ingrese email (ejemplo@ejemplo.cl)" ng-model="user.email">
          </div>

          <div class="input-field col-xs-12 col-sm-12 col-md-12 col-lg-8">
          (*) Perfil
            <select name="perfil" id="perfil" ng-model="user.perfil">
              <option value="">Seleccione</option>
              <option value="1">Administrador</option>
              <option value="2">Jefe de Sector</option>
              <option value="3">Gerente</option>
              <option value="4">Ayudante</option>
            </select>
          </div>

          <div class="input-field col-xs-12 col-sm-12 col-md-12 col-lg-8">
          (*) Seleccione el estado del usuario<br>
            <p>
              <input name="estado" type="radio" value="1" id="activo" ng-model="user.estado">
              <label for="activo">Activo</label>
            </p>
            <p>
              <input name="estado" type="radio" value="0" id="inactivo" ng-model="user.estado">
              <label for="inactivo">Inactivo</label>
            </p>
          </div>
          
          <div class="input-field col-xs-12 col-sm-12 col-md-12 col-lg-8">
            <button class="btn" ng-click="submitAddForm()">Guardar</button>
            <a href="<?= base_url();?>usuarios#/" class="btn red lighten-1">Cancelar</a>  
          </div>

</div>
<script>
  
$(document).ready(function(){

  $('select').material_select();

});

</script>