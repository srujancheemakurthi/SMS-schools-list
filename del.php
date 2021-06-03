<?php 
require_once __DIR__ . '/vendor/autoload.php';

$connection= new MongoDB\Client("mongodb://localhost:27017");
//database is selected
$db=$connection->schools_list;
$table=$db->school_list_data;


//create or select a collection



$a=$_POST['a'];

echo "<br>";



//remove a document
$document=array("STATE"=>"$a");

$table->deleteOne($document);

echo "documnet deleted successfully";






?>