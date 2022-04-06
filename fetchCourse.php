<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=placement information system", "root", "");

$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT CNAME, BTECH_CS, BTECH_IT, BTECH_EC, BTECH_EE, BTECH_EI, BTECH_MT, BTECH_BT, BTECH_CE, MCA, MSC_CS, MTECH_CS, MTECH_IT, MTECH_VLSI, MTECH_RS   FROM  eligible_students
 WHERE CNAME REGEXP '".$search."' 
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


