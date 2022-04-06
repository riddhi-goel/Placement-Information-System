<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=placement information system", "root", "");

$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT CNAME, CTC_UG FROM  company
 WHERE CTC_UG >=$search
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



