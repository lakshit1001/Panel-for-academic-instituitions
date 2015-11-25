<?php
require '.././libs/Slim/Slim.php';
require_once 'dbHelper.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app = \Slim\Slim::getInstance();
$db = new dbHelper();

/**
 * Database Helper Function templates
 */
/*
select(table name, where clause as associative array)
insert(table name, data as associative array, mandatory column names as array)
update(table name, column names as associative array, where clause as associative array, required columns as array)
delete(table name, where clause as array)
*/


// students
$app->get('/students', function() {
  global $db;
  $rows = $db->select("students","id,name,eid,phone,class,batch",array());
  echoResponse(200, $rows);
});
$app->get('/subjects', function() {
  global $db;
  $rows = $db->select("subjects","id,name,shortform",array());
  echoResponse(200, $rows);
});
$app->get('/batches', function() {
  global $db;
  $rows = $db->select("batches","id,name",array());
  echoResponse(200, $rows);
});

$app->get('/classes', function() {
  global $db;
  $rows = $db->select("classes","id,name",array());
  echoResponse(200, $rows);
});
$app->get('/attendance', function() {
  global $db;
  $rows = $db->select2("attendance","attendanceid,batch,date,subject,class,percent",array(), "ORDER BY attendanceid DESC");
  echoResponse(200, $rows);
});

$app->get('/attendetails/:attendanceid', function($attendanceid) {
  global $db;
  $rows = $db->select("attenda","id,studentid,name,attendance",array('attendanceid' => $attendanceid));
  echoResponse(200, $rows);
});

$app->get('/studentsBatch/:class/:batch/:subject', function($class, $batch, $subject) {
    global $db;
    $rows = $db->select("students","id,name,eid,phone,class,batch",array('class' => $class, 'batch' => $batch, sub5 =>'%'.$subject.'%'));
    echoResponse(200, $rows);
});

$app->get('/lastid/:class/:batch/:subject', function($class, $batch, $subject) {
  global $db;
  $rows = $db->select2("attendance","attendanceid",array('class' => $class, 'batch' => $batch, 'subject' => $subject), "ORDER BY attendanceid DESC
  LIMIT 1");
  echoResponse(200, $rows);
});


$app->post('/attendance', function() use ($app) {
    $data = json_decode($app->request->getBody());
    $mandatory = array();
    global $db;
    $rows = $db->insert("attendance", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Student added successfully.";
    echoResponse(200, $rows);
});

$app->post('/attendetails', function() use ($app) {
  $data = json_decode($app->request->getBody());
  $mandatory = array();
  global $db;
  $rows = $db->insert("attenda", $data, $mandatory);
  if($rows["status"]=="success")
  $rows["message"] = "Student added successfully.";
  echoResponse(200, $rows);
});


$app->put('/students/:id', function($id) use ($app) {
    $data = json_decode($app->request->getBody());
    $condition = array('id'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("students", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Student information updated successfully.";
    echoResponse(200, $rows);
});

$app->delete('/students/:id', function($id) {
    global $db;
    $rows = $db->delete("students", array('id'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Student removed successfully.";
    echoResponse(200, $rows);
});

function echoResponse($status_code, $response) {
    global $app;
    $app->status($status_code);
    $app->contentType('application/json');
    echo json_encode($response,JSON_NUMERIC_CHECK);
}

$app->run();
?>