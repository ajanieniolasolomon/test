var scotchapp=angular.module('start',['ngRoute']);
scotchapp.controller('mainController',function($scope){
  $scope.message="";
});
scotchapp.config(function ($routeProvider){
   $routeProvider
   .when('/',{

    templateUrl:
    url:'aja',
   });
   
});