    <h2>Usuarios</h2>
    <div class="clearfix"></div>
    <a href="#/add" class="blue darken-3 btn">
        <i class="material-icons left">add</i>Agregar Usuario
    </a>
    <br>
    <br>

    <?= $this->session->flashdata('mensaje');?>

      <table class="table bordered highlight responsive-table" id="table_user">
        <thead>
          <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Rut</th>
              <th>Email</th>
              <th>Perfil</th>
              <th>Estado</th>
              <th>Acciones</th>
          </tr>
        </thead>

        <tbody ng-show="usuarios.length != 0">
          <tr ng-repeat="u in usuarios">
            <td>{{u.id_usuario}}</td>
            <td>{{u.nombre_usuario}}</td>
            <td>{{u.rut_usuario}}</td>
            <td>{{u.email_usuario}}</td>
            <td>{{u.nombre_perfil}}</td>
            <td>{{u.estado_usuario}}</td>
            <td>
              <a class="btn-floating blue darken-3 edit_user" href="usuarios/edit"><i class="material-icons">mode_edit</i></a>
              <a class="btn-floating red lighten-1 delete_user" data-id="{{u.id_usuario}}"><i class="material-icons">delete</i></a>              
            </td>
          </tr>
        </tbody>
      </table>



</div>