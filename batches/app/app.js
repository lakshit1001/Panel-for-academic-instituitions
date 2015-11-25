var app = angular.module('myApp', ['ngRoute', 'ui.bootstrap', 'ngAnimate']);

app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
    when('/', {
      title: 'Students',
      templateUrl: 'partials/students.html',
      controller: 'studentsCtrl'
    })
    .otherwise({
      redirectTo: '/'
    });;
}]);
    