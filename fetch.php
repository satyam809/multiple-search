<?php

//fetch.php;

$data = array();

if(isset($_GET["query"]))
{
 $connect = new PDO("mysql:host=localhost; dbname=tiqto_database", "root", "");

 $query = "
 SELECT service_name FROM service_table 
 WHERE service_name LIKE '".$_GET["query"]."%' 
 ORDER BY service_name ASC 
 LIMIT 15
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row["service_name"];
 }
}
echo json_encode($data);

?>