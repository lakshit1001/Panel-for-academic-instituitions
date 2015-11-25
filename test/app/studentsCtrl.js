app.controller('studentsCtrl', function ($scope, $modal, $filter, Data) {
    $scope.student = {};
    $scope.do = function(){
      Data.getbatch('studentsBatch',$scope.class,$scope.batch,$scope.subject).then(function(data){
        $scope.students = data.data;
      });
    };
    Data.get('subjects').then(function(data){
        $scope.subjects = data.data;
      });
 Data.get('classes').then(function(data){
        $scope.classes = data.data;
      });
  Data.get('batches').then(function(data){
        $scope.batches = data.data;
      });

    $scope.test = {};
    $scope.marks = {};

    $scope.send = function(){
      $scope.test.batch = $scope.batch;
      $scope.test.class = $scope.class;
      $scope.test.subject =  $scope.subject;
      $scope.test.date = $scope.date;
      $scope.test.name = $scope.name;
      $scope.test.mm = $scope.mm;

        Data.post('test', $scope.test).then(function(result){
          if(result.status != 'error'){
            Data.getbatch('lasttestid',$scope.class,$scope.batch,$scope.subject).then(function(data){
              $scope.testid = data.data;
              var details = [];
              console.log($scope.marks);
              for(var j = 0; j<$scope.students.length; j++){
              var  detail ={};
                console.log(details);
                detail.testid = $scope.testid[0].testid;
                detail.studentid = $scope.students[j].id;
                detail.name = $scope.students[j].name;
                detail.marks = $scope.marks[detail.studentid];

                console.log(detail);
                details.push(detail);
                console.log(details);
                  Data.post('testdetails',detail).then(function(results){
                   if(result.status != 'error'){
                   }else{
                     console.log(results);
                   }
                 });
              }


            });
          }else{
            console.log(result);
          }
        });
            alert("Submission Succesful");



    };


});

app.controller('viewCtrl', function ($scope, $modal, $filter, Data) {
  $scope.attendance = {};
  Data.get('test').then(function(data){
    $scope.test = data.data;
  });
  Data.get('subjects').then(function(data){
        $scope.subjects = data.data;
      });
 Data.get('classes').then(function(data){
        $scope.classes = data.data;
      });
  Data.get('batches').then(function(data){
        $scope.batches = data.data;
      });
    $scope.open = function (p,size) {
        var modalInstance = $modal.open({
          templateUrl: 'partials/viewer.html',
          controller: 'orderViewCtrl',
          size: size,
          resolve: {
            item: function () {
              return p;
            }
          }
        });

    };
});

app.controller('orderViewCtrl', function ($scope, $modalInstance, item, Data) {

  $scope.order = angular.copy(item);
    $scope.orderitems = {};
    $scope.attendetails = {};
    Data.getad('testdetails',item.testid).then(function(data){
      $scope.testdetails = data.data;
    });

        $scope.cancel = function () {
            $modalInstance.dismiss('Close');
        };
        $scope.title =  'View Results' ;

        var original = item;
        $scope.isClean = function() {
            return angular.equals(original, $scope.order);
        }

});
