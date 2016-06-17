angular.module('usuarioApp', [])

.controller('Usuarios', function($scope, $http){

    $scope.getData = function(){
        $http.get('usuarios/allUsers').success(function(datos){
            $scope.usuarios = datos;
        });
    }

    $scope.getData();

    $scope.submitAddForm = function(){

        $http({
          method: 'post',
          url: 'usuarios/registrar',
          data: $scope.user,
          headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        })
        .success(function(data){
            $scope.success = data.message;
            setTimeout(function(){
                    $('#addUserModal').closeModal();
                    $scope.getData();
                    $scope.success = undefined;
                    $scope.user = {};
                }, 2000);
        })
        .error(function(data){
            $scope.error = data.message;
            $scope.error = undefined;
        });

    }


    $scope.submitEditForm = function(){
        
    }

})