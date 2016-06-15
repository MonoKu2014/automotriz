<div ng-app="usuarioApp" class="col-xs-12 col-sm-12 col-md-12 col-lg-10 content-right">
    <h2>Usuarios</h2>
    <div class="clearfix"></div>
    <a href="" class="blue darken-3 btn" id="button_add_user"><i class="material-icons left">add</i>Agregar Usuario</a>
    <br>
    <br>

    <?= $this->session->flashdata('mensaje');?>

      <table ng-controller="controladorUsuarios" class="table bordered highlight responsive-table" id="table_user">
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
              <button class="btn-floating red lighten-1" id="del_user"><i class="material-icons">delete</i></button>
              <button class="btn-floating blue darken-3"><i class="material-icons">mode_edit</i></button>
            </td>
          </tr>
        </tbody>
      </table>


      <?php $this->load->view('usuarios/add_user');?>

      <?php $this->load->view('usuarios/edit_user');?>

      
<script>
  $(document).ready(function(){

    var AlertSession = '<?= $this->session->flashdata('mensaje');?>';
    if(AlertSession){
      ShowAddUser();
    }
    
    $('select').material_select();

    $('#button_add_user').on('click', function(e){
      e.preventDefault();
      ShowAddUser();
    });

    $('#button_cancel_user').on('click', function(e){
      e.preventDefault();
      HideAddUser();
    });   

    function ShowAddUser(){
      $('#table_user').hide();
      $('#add_register').show();  
    }

    function HideAddUser(){
      $('#add_register').hide();
      $('#table_user').show();
    }


  });
</script>

</div>


<!-- FIN ROW (EMPIEZA EN LEFT.PHP) -->
</div>