<?php 
require_once __DIR__ . '/vendor/autoload.php';

$connection= new MongoDB\Client("mongodb://localhost:27017");
//database is selected
$db=$connection->schools_list;
$table=$db->school_list_data;
echo "<table border = '1'><th>STATE</th><th>SCHOOL Name</th><th>BOARD</th>";
//create or select a collection

//updating a document


$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];





echo "<br>";


     $table->updateOne(array("STATE"=>"$a"),
     array('$set'=>array(
      
     "STATE"=>"$a",
     "SCHOOLNAME"=>"$b",
     "BOARD"=>"$c",
     )));

     echo "data is updated is successfully"






?>