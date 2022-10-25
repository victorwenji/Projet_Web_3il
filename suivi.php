<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suivi</title>
</head>
<body>
<?php
    $id = $_GET['id'].".json";
    if(!file_exists($id))
    {
        require_once('Etudiants.php');
    }
    else{
        require_once('Ajoute.php');
    }
?>
</body>
</html>