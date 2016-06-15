<form class="col s12" id="edit_register" method="post" action="<?= base_url();?>usuarios/registrar" enctype="multipart/form-data">
        <div class="row">

          <div id="content_message"></div>

          <div class="input-field col s6">
            <input id="nombre" name="nombre" type="text" placeholder="Ingrese el nombre completo">
            <label for="nombre">Nombre(*)</label>
          </div>
          <div class="input-field col s6">
            <input id="rut" type="text" name="rut" placeholder="Ingrese el rut sin puntos ni guíon">
            <label for="rut">Rut(*)</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input id="email" type="text" name="email" placeholder="Ingrese email (ejemplo@ejemplo.cl)">
            <label for="email">Email(*)</label>
          </div>
          <div class="input-field col s6">
            <select name="perfil" id="perfil">
              <option value="">Seleccione el perfil...</option>
              <option value="1">Administrador</option>
              <option value="2">Jefe de Sector</option>
              <option value="3">Gerente</option>
              <option value="4">Ayudante</option>
            </select>
            <label for="area">Perfil(*)</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <div class="file-field input-field">
              <div class="small btn">
                <span><i class="material-icons">image</i> Avatar</span>
                <input type="file" name="archivo">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Subir avatar del nuevo usuario">
              </div>
            </div>
          </div>
          <div class="input-field col s6">
          Seleccione el estado del usuario(*)<br>
            <input name="estado" type="radio" checked><label for="activo">Activo</label>
            <input name="estado" type="radio"><label for="inactivo">Inactivo</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s2">
            <input type="submit" class="btn" id="add_user_button" value="Guardar Usuario">
          </div>
          <div class="input-field col s2">
            <button class="btn red lighten-1" id="button_cancel_user_edit">Cancelar</button>
          </div>
        </div>
      </form>
