<?php

   require_once __DIR__ . '/vendor/autoload.php';

   $con= new MongoDB\Client("mongodb://localhost:27017");

   $db=$con->schools_list;

   $tb1=$db->newslist;
   ?>
   <html>
       <head>
           <title>
               SCHOOLS LIST
           </title>
           <body>
           <form action="#" method="POST">
               <label>
                   Select :
               </label>&nbsp;&nbsp;&nbsp;
               <select name="BOARD">
                   <option value="">--Select --</option>
                   <option value="CBSE">CBSE</option>
                   <option value="ICSE">ICSE</option>
               </select>
               <br><br>
               <input type="submit" name="submit" value="View" >
           </body>
           </head>
   
   <?php
   $BOARD=$_POST["BOARD"];
 

   
   echo "<table border = '1'><th>STATE</th><th>SCHOOL NAME</th><th>BOARD</th>";
   
   $criteria = array("BOARD" => $BOARD);
   
   $data_info=$tb1->find($criteria); 
   
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
   </body>
   
          </html>