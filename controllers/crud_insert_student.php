<?php

require_once '../model/query.php';

$database = new model_sql();
$data_career =$database->show_table("careers");
$data_gender =$database->show_table("genders");

    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $direction=$_POST['direction'];
    $height=$_POST['height'];
    $uk_dni=$_POST['uk_dni'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $birth_date=$_POST['birth_date'];
    $fk_career_id=$_POST['fk_career_id'];
    $fk_id_gender=$_POST['id_gender'];
   
    $keep=$_POST['submit'];

    if (isset($keep)) {
        $insert=$database->insertStudent($name,$last_name,$direction,$height,$uk_dni,$email,$phone,$fk_career_id,$birth_date,$fk_id_gender);
        if($insert){
            echo "se insertaron los datos correctamente";
            
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<a class="btn btn-secondary" href="../views/views_students.php">Regresar</a>
</body>
</html>