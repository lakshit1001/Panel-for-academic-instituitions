var app = angular.module('myApp', ['ngRoute', 'ui.bootstrap', 'ngAnimate']);

app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
    when('/', {
      title: 'Students',
      templateUrl: 'partials/students.php',
      controller: 'studentsCtrl'
    })
    .when('/view', {
      title: 'Attendance View',
      templateUrl: 'partials/view.php',
      controller: 'viewCtrl'
    })
    .otherwise({
      redirectTo: '/'
    });;
}]);
