app.controller('studentsCtrl', function ($scope, $modal, $filter, Data) {
    $scope.student = {};
    Data.get('students').then(function(data){
        $scope.students = data.data;
    });
    $scope.changeStudentstatus = function(student){
        student.status = (student.status=="Active" ? "Inactive" : "Active");
        Data.put("students/"+student.id,{status:student.status});
    };
    $scope.deleteStudent = function(student){
        if(confirm("Are you sure to remove the student")){
            Data.delete("students/"+student.id).then(function(result){
                $scope.students = _.without($scope.students, _.findWhere($scope.students, {id:student.id}));
            });
        }
    };
    $scope.open = function (p,size) {
        var modalInstance = $modal.open({
          templateUrl: 'partials/studentEdit.html',
          controller: 'studentEditCtrl',
          size: size,
          resolve: {
            item: function () {
              return p;
            }
          }
        });
        modalInstance.result.then(function(selectedObject) {
            if(selectedObject.save == "insert"){
                $scope.students.push(selectedObject);
                $scope.students = $filter('orderBy')($scope.students, 'id', 'reverse');
            }else if(selectedObject.save == "update"){
                p.name = selectedObject.name;
            }
        });
    };
    
 $scope.columns = [
                    {text:"ID",predicate:"id",sortable:true,dataType:"number"},
                    {text:"Name",predicate:"name",sortable:true},
                    {text:"Action",predicate:"",sortable:false}
                ];

});


app.controller('studentEditCtrl', function ($scope, $modalInstance, item, Data) {

  $scope.student = angular.copy(item);
        
        $scope.cancel = function () {
            $modalInstance.dismiss('Close');
        };
        $scope.title = (item.id > 0) ? 'Edit Batch' : 'Add Batch';
        $scope.buttonText = (item.id > 0) ? 'Update Batch' : 'Add New Batch';

        var original = item;
        $scope.isClean = function() {
            return angular.equals(original, $scope.student);
        }
        $scope.saveStudent = function (student) {
            console.log('1');
            student.uid = $scope.uid;
            console.log(student);
            if(student.id > 0){
                Data.put('students/'+student.id, student).then(function (result) {
                    if(result.status != 'error'){
                        var x = angular.copy(student);
                        x.save = 'update';
                        $modalInstance.close(x);
                    }else{
                        console.log(result);
                    }
                });
            }else{
                Data.post('students', student).then(function (result) {
                    if(result.status != 'error'){
                        var x = angular.copy(student);
                        x.save = 'insert';
                        x.id = result.data;
                        $modalInstance.close(x);
                    }else{
                        console.log(result);
                    }
                });
            }
        };
});
