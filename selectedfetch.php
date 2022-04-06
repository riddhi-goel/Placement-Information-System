<?php


//fetch.php


$connect = new PDO("mysql:host=localhost;dbname=PCELL", "root", "");


$output = '';


$query = '';


if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM selected_students
 WHERE CNAME REGEXP '".$search."'
 AND COURSENAME REGEXP '".$search."'
 OR FULLTIMEEMP REGEXP '".$search."'
 OR SIXMI REGEXP '".$search."'
 OR PPO_FTE REGEXP '".$search."'
 ";
}
else
{
 
}


$statement = $connect->prepare($query);
$statement->execute();


while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
 $data[] = $row;
}


echo json_encode($data);


?>