var app = angular.module('myApp', ['ngRoute', 'ui.bootstrap', 'ngAnimate','ngFileUpload']);

app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
    when('/', {
      title: 'Students',
      templateUrl: 'partials/students.html',
      controller: 'studentsCtrl'
    })
    .when('/myenquiry', {
      title: 'Enquiry',
      templateUrl: 'partials/myenquiry.html',
      controller: 'viewCtrl'
    })
    .when('/enquiry', {
      title: 'EnquiryViewer',
      templateUrl: 'partials/enquiry.html',
      controller: 'enquiryCtrl'
    })
    .otherwise({
      redirectTo: '/'
    });
}])
