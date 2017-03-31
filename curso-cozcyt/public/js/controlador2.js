// Iniciar la aplicacion de Angular
var app = angular.module('myApp',['xeditable']);

// Angular-xeditable theme
app.run(function(editableOptions) {
  editableOptions.theme = 'bs3'; // bootstrap3 theme. Can be also 'bs2', 'default'
});

app.controller('myCtrl', function($scope, $http) {
   $scope.saludo = 'Hola!';
   $scope.posts = null;
   $scope.nuevo = null; // para el arreglo de los inputs
   
   leerTodo(); // Leemos los registros de la base de datos al cargar la pagina
   
   $scope.alerta = function(){
      alert("Hola");
   };
   
   // Esta solo se ejecuta, hasta que la mandes llamar porque es una funcion
   // Si metemos aqui el $http sin funcion, se ejecuta al cargar el archivo js
   function leerTodo(){
   
      // Peticion tipo GET al server
      $http({
        method: 'GET',
        url: '/consulta/todo' // URL del Server
      }).then(function successCallback(response) {
          console.log("Consultando...");
          //console.log(response); // response es toda la respuesta del server
          $scope.posts = response.data; // Solo necesitamos aqui los registros         
      }, function errorCallback(response) {
          console.log("Error!" + response.data);
      });
   }     
   
   // eliminar
   $scope.eliminar = function(post){
      console.log(post);
   
      // Peticion tipo GET al server
      $http({
        method: 'POST',
        url: '/eliminar/post/'+post.id // URL del Server
      }).then(function successCallback(response) {
          console.log("Eliminando...");
          console.log(response); // response es toda la respuesta del server
          leerTodo();
      }, function errorCallback(response) {
          console.log("Error!" + response.data);
      });
   }     
   
   // actualizar
   $scope.actualizar = function(post){
      console.log(post);
   
      // Peticion tipo GET al server
      $http({
        method: 'POST',
        url: '/update/post/'+post.id, // URL del Server
        data:{
           titulo:post.titulo,
           contenido:post.contenido,
           activo:post.activo
        }
      }).then(function successCallback(response) {
          console.log("Actualizando...");
          console.log(response); // response es toda la respuesta del server
          leerTodo();
      }, function errorCallback(response) {
          console.log("Error!" + response.data);
      });
   }     
   
   // La ponemos en el scope para que la pueda llamar el boton
   $scope.registrar = function(){      
      // Peticion tipo POST al server
      $http({
        method: 'POST',
        url: '/registrar/post', // URL del Server
        // Los datos del formulario
        data:{
           titulo:$scope.nuevo.titulo,
           contenido:$scope.nuevo.contenido,
           activo:$scope.nuevo.activo
        }
      }).then(function successCallback(response) {          
          console.log("Respuesta: " + response); 
          $scope.nuevo = {}; // Para que se borren los inputs
          leerTodo(); // nos traemos nuevamente los registros, incluido el nuevo
      }, function errorCallback(response) {
          console.log("Error!");
      });      
   };      
   
});