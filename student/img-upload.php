<?php

define('DB_USERNAME', 'bookfoxi_product');
define('DB_PASSWORD', 'product@2015');
define('DB_HOST', 'localhost');
define('DB_NAME', 'bookfoxi_products');

$filename = $_FILES['file']['name'];
$name = $_POST['name'];
$ext = end((explode(".", $filename)));
echo  $name . '.' . $ext;
$destination = 'img/' . $name . '.' . $ext;
if (move_uploaded_file( $_FILES['file']['tmp_name'] , $destination )){
  echo "The file ". $filename . " has been uploaded.";
} else {
  echo $name . "Sorry, there was an error uploading your file.";
};

// Create connection
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE students SET img='" . $name . "." . $ext . "' WHERE id='" . $name . "'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>
