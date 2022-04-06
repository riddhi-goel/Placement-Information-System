
<?php

$con= new mysqli('localhost', 'root', '', 'PCELL');
if(!$con){
    die(mysqli_error($con));
}
session_start();
if(!isset($_SESSION["TPC"])){
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
  <script src="https://kit.fontawesome.com/1a705ea4f1.js" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome</title>
  </head>
  <style>
      <body>
  margin:0;
  padding:0;</body></style>
  <body>
      <?php include 'partials/tpcnav.php' ?>
      <div style="margin-top:3%; margin-left:25%; margin-right: 25%; color: black;">
    <h2 class="text-center p-3" style="font-size: 35px; color: black;"><u> ABOUT BANASTHALI VIDYAPITH</u></h2>
   
  <p class="lead">
  The origin of Banasthali is unique in more ways than one. Banasthali Vidyapith owes its existence neither to the zeal of an educationist, nor to that of a social reformer. It is also not the creation of a philanthropist's purse. It has arisen like the fabled phoenix from the ashes of a blossoming flower Shanta Bai that had withered before its bloom. It is a spontaneous filling up of the vacuum caused by Shantabai's death. Here, love, eternal love has been the fountain head of all the thinking and action and this spirit has been the motivating force.

It was on October 6, 1935, Smt. Ratan Shastri and Pandit Hiralal Shastri (former secretary in the home and foreign department) found Banasthali to fill up the vacuum caused by the sudden death of their highly talented and promising daughter Shantabai. They had high expectations that she would work for women's cause when on  growing up.

From its establishment in 1935, Banasthali has aimed at providing the girls with an education, which would enable them to secure a place of honour and equality in the society.

The vision and mission of Banasthali is to provide the girls not simply with general education but to enable them to compete on equal terms in a society.
Banasthali's work in the field of women's education has been of a special type. It can neither be classified as routine type of work nor a social type of work but a unique blending of the two. 
Banasthali is deeply conscious of the crisis of values that marks the modern society. In its view, education is one of the potent instrument for trying to meet this crisis. Hence Banasthali's entire educational effort and program is focused on the need of creating a proper sense of values among the students. In this context it emphasizes a harmonious balance of the spiritual and scientific values of the East and the West. Simple and natural living and an attempt to strike a balance between individual freedom and social responsibility designed to achieve the above objectives.

</p>
</div>
  </body>
</html>
</body>
</html>