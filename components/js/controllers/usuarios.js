angular.module('usuariosApp', ['ngRoute', 'ngAnimate'])

.config(function($routeProvider){
    $routeProvider
        .when('/', {
            controller: 'ListadoUsuarios',
            templateUrl: BASE_URL + '/inicio'
        })
        .when('/add', {
            controller: 'AgregarUsuarios',
            templateUrl: BASE_URL + '/agregar'
        })
        .when('/edit/:id', {
            controller: 'EditarUsuarios',
            templateUrl: BASE_URL + '/editar'
        })
        .otherwise({
            controller: 'ListadoUsuarios',
            templateUrl: BASE_URL + '/inicio'
        })
})

.controller('ListadoUsuarios', function($scope, $http){

    $scope.getData = function(){
        $http.get('usuarios/allUsers').success(function(datos){
            $scope.usuarios = datos;
        });
    }

    $scope.getData();

})

.controller('AgregarUsuarios', function($scope, $http){

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
                window.location.href = BASE_URL;
            }, 3000);
        })
        .error(function(data){
            $scope.error = data.message;
        });

    }

})


.controller('EditarUsuarios', function($scope, $http){
    
})

.controller('EliminarUsuarios', function($scope, $http){

})


.animation('.reveal-animation', function() {
  return {
    enter: function(element, done) {
      element.show('slow', done);
      return function(){
        element.stop();
      }
    },
    leave: function(element, done) {
      element.hide('fast', done)
      return function() {
        element.stop();
      }
    }
  }
})


