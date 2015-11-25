  <div class="row">
    <div class="col-lg-12">
  <h3>Student's Test</h3>
  <a class="btn btn-default btn-large pull-right" href="/panel/test/#/view">View Test</a>
    </div>
  </div>

  <div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel vertical-center"  style="padding:20px; margin:-2px;">
        <form class="form-inline" role="form">
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Name</label><br>
            <div class="col-sm-10">
              <input type="text" class="form-control input-sm" ng-model="name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Class</label><br>
            <div class="col-sm-10">
              <select class="form-control input-sm" ng-model="class" required="">
                <option value="">None</option>
               <option ng-repeat="class in classes | orderBy:'name'" value="{{class.name}}">{{class.name}}</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Subject</label><br>
            <div class="col-sm-10">
              <select class="form-control input-sm" ng-model="subject" required="">
                <option value="">None</option>
                <option ng-repeat="subject in subjects | orderBy:'name'" value="{{subject.shortform}}">{{subject.name}}</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Batch</label><br>
            <div class="col-sm-10">
              <select class="form-control input-sm" ng-model="batch" required="">
                <option value="">None</option>
                <option ng-repeat="batch in batches | orderBy:'name'" value="{{batch.name}}">{{batch.name}}</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Date</label><br>
            <div class="col-sm-10">
              <input type="date" class="form-control input-sm" ng-model="date"  value="<?php echo date('Y-m-d'); ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Maximum Marks</label><br>
            <div class="col-sm-10">
              <input type="number" class="form-control input-sm" ng-model="mm">
            </div>
          </div>
          <br>
          <button class="btn  btn-success" ng-click="do()">Submit</button>
        </form>
      </div><!-- /form-panel -->
    </div><!-- /col-lg-12 -->
  </div><!-- /row -->

  <div class="row mt">
    <div class="col-lg-12">
      <div class="content-panel" style="padding:20px;">
        <h4>Add Test</h4>
        <section id="unseen">
          <br /><br />
          <table class="table table-bordered table-striped table-condensed">
            <thead>
              <tr>
                <th>S.No.</th>
                <th>Name Of the Student</th>
                <th class="numeric">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr ng-repeat="student in students | orderBy :'name'">
                <td >{{student.id}}</td>
                <td>{{student.name}}</td>
                <td><input type="text" ng-model="marks[student.id]"/></td>
              </tr>
            </tbody>
          </table>
          <button class="btn btn-primary" ng-click="send()">Submit</button>
        </section>
      </div><!-- /content-panel -->
    </div><!-- /col-lg-4 -->
  </div><!-- /row -->
