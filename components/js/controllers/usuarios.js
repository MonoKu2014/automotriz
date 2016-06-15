angular.module('usuarioApp', [])

.controller('controladorUsuarios', function($scope, $http){

    $scope.getData = function(){
        $http.get('usuarios/allUsers').success(function(datos){
            $scope.usuarios = datos;
        });
    }

    $scope.getData();


/******************************************************************/

});