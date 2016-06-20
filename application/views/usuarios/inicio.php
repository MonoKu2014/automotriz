<div ng-app="usuarioApp" class="col-xs-12 col-sm-12 col-md-12 col-lg-10 content-right" ng-controller="Usuarios">
    <h2>Usuarios</h2>
    <div class="clearfix"></div>
    <a href="" class="blue darken-3 btn" id="button_add_user"><i class="material-icons left">add</i>Agregar Usuario</a>
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
              <a class="btn-floating blue darken-3 edit_user" ng-click="openEditUser(u.id_usuario)"><i class="material-icons">mode_edit</i></a>
              <a class="btn-floating red lighten-1 delete_user" data-id="{{u.id_usuario}}"><i class="material-icons">delete</i></a>              
            </td>
          </tr>
        </tbody>
      </table>





        <div id="addUserModal" class="modal modal-fixed-footer">
          <div class="modal-content">
            <h4>Agregar Usuario</h4>
            <p>Los campos marcados con (*) son de caracter obligatorio</p>
            <?php $this->load->view('usuarios/add_user');?>
          </div>
          <div class="modal-footer">
            <button class="btn modal-action modal-close red lighten-1">Cancelar</button>
            <button class="btn" ng-click="submitAddForm()">Guardar</button>            
          </div>
        </div>

        <div id="editUserModal" class="modal modal-fixed-footer">
          <div class="modal-content" ng-repeat="u in usuario">
            <h4>Editar Usuario <span class="teal-text">{{u.nombre_usuario}}</span></h4>
            <p>Los campos marcados con (*) son de caracter obligatorio</p>
            <?php $this->load->view('usuarios/edit_user');?>
          </div>
          <div class="modal-footer">
            <button class="btn modal-action modal-close red lighten-1">Cancelar</button>
            <button class="btn" ng-click="submitEditForm()">Editar</button>            
          </div>
        </div>



        <div id="deleteUserModal" class="modal">
          <div class="modal-content">
            <h4>Eliminar Usuario</h4>
            <p>Está seguro de eliminar a éste usuario?</p>
          </div>
          <div class="modal-footer">
            <button class="btn modal-action modal-close red lighten-1">No</button>
            <button class="btn" ng-click="submitDeleteForm()">Si</button>            
          </div>
        </div>
     
<script>
  $(document).ready(function(){

   
    $('select').material_select();

    $('#button_add_user').on('click', function(e){
      e.preventDefault();
      $('#addUserModal').openModal();
    });


    /*$(document).on('click', '.edit_user', function(){
        $('#id_usuario').val($(this).attr('data-id'));
        $('#nombre_usuario').text($(this).attr('data-name'))
        $('#editUserModal').openModal();
    });*/


  });

</script>

</div>


<!-- FIN ROW (EMPIEZA EN LEFT.PHP) -->
</div>