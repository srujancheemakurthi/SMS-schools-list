<?php
      require_once __DIR__ . '/vendor/autoload.php';

    $connection= new MongoDB\Client("mongodb://localhost:27017");
    $db=$connection->schools_list;
    $table=$db->school_list_data;
    echo "<table border = '1'><th>STATE</th><th>SCHOOL Name</th><th>BOARD</th>";
    $criteria = array("BOARD" => "NIOS");
    $data_info=$table->find($criteria); 
    $count=0;
    echo "<tr>"; 
foreach($data_info as $b)
    {
        $count++;  
        echo "<td>" .$b['STATE']. "</td>";
        echo "<td>" .$b['SCHOOLNAME']. "</td>";
        echo "<td>" .$b['BOARD']. "</td>";
        echo "</tr>";
}
?>
