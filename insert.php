<?php
      require_once __DIR__ . '/vendor/autoload.php';

    $connection= new MongoDB\Client("mongodb://localhost:27017");
//database is selected
$db=$connection->schools_list;
//create or select a collection
$table=$db->school_list_data;
echo "<table border = '1'><th>STATE</th><th>SCHOOL Name</th><th>BOARD</th>";



$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];




echo "<br>";

$document=array(
  "STATE"=>"$a",
  "SCHOOLNAME"=>"$b",
  "BOARD"=>"$c",
  

);

echo "documnet inserted successfully";

echo "<br>";

$table->insertone($document);

$cursor=$table->find();

foreach($cursor as $documnet){
    echo'"STATE": '.$document["STATE"]."<br/>";
    echo'"SCHOOLNAME": '.$document["SCHOOLNAME"]."<br/>";
    echo'"BOARD": '.$document["BOARD"]."<br/>";
    
    
}



?>