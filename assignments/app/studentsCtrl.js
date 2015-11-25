app.controller('studentsCtrl', function ($scope,Upload,$timeout, $modal, $filter, Data) {
    $scope.student = {};
    Data.get('students').then(function(data){
        $scope.students = data.data;
    });
    $scope.changeStudentstatus = function(student){
        student.status = (student.status=="Active" ? "Inactive" : "Active");
        Data.put("students/"+student.id,{status:student.status});
    };
    $scope.deleteFtudent = function(student){
        if(confirm("Are you sure to remove the student")){
            Data.delete("students/"+student.id).then(function(result){
                $scope.students = _.without($scope.students, _.findWhere($scope.students, {id:student.id}));
            });
        }
    };
      $scope.uploadPic = function(file,id) {
      
    console.log("Something is happening.");
    console.log(id);
    file.upload = Upload.upload({
      url: 'http://malhotrasclasses.in/panel/assignments/img-upload.php',
      method: 'POST',
      sendFieldsAs: 'form',
      fields: {name: id},
      file: file
    });

    file.upload.then(function (response) {
      $timeout(function () {
        file.result = response.data;
      });
    }, function (response) {
      if (response.status > 0)
        $scope.errorMsg = response.status + ': ' + response.data;
      });

      file.upload.progress(function (evt) {
        // Math.min is to fix IE which reports 200% sometimes
        file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
      });
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
                p.phone = selectedObject.phone;
                p.eid = selectedObject.eid;
                p.fn = selectedObject.fn;
                p.mn = selectedObject.mn;
                p.class = selectedObject.class;
                p.cn = selectedObject.cn;
                p.bn = selectedObject.bn;
            }
        });
    };
    
 $scope.columns = [
                    {text:"ID",predicate:"id",sortable:true,dataType:"number"},
                    {text:"Name",predicate:"name",sortable:true},
                    {text:"Class",predicate:"eid",sortable:true},
                    {text:"HASH",predicate:"batch",sortable:true},
                    {text:"Action",predicate:"",sortable:false}
                ];

});


app.controller('studentEditCtrl', function ($scope, $modalInstance, item, Data) {

  $scope.student = angular.copy(item);
        Data.get('classes').then(function(data){
        $scope.classes = data.data;
    });
        $scope.cancel = function () {
            $modalInstance.dismiss('Close');
        };
        $scope.title = (item.id > 0) ? 'Edit Assignment' : 'Add Assignment';
        $scope.buttonText = (item.id > 0) ? 'Update Assignment' : 'Add New Assignment';

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