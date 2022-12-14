<!DOCTYPE html>
<html>
  <head>
    <title>php practice</title>
  </head>

  <body>
  
  <form action="php file.php" method="post">

Enter name of student to find out their grades:
  
<br>  <br>

Student Name: <input type="text" name="studentName">

<br> <br>

<input type="submit">

<br>

<?php 

$grades = array("julia"=>"A+", "max"=>"B+", "susan"=> "C+" );

$studentName = $_POST["studentName"];

echo $grades[$studentName];



?>


</body>
</html>
