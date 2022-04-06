<?php


//fetchEl.php


$connect = new PDO("mysql:host=localhost;dbname=PCELL", "root", "");


$output = '';


$query = '';


if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM eligible_students
 WHERE CNAME REGEXP '".$search."'
 OR Test_Date REGEXP '".$search."'
 OR Interview_S_Date REGEXP '".$search."'
 OR Interview_E_Date REGEXP '".$search."'
 OR Result_Date REGEXP '".$search."'
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