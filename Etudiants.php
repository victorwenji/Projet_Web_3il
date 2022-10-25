
<?php
    $user=shell_exec("echo %username%")
?>
<?php 
    include 'Vue/navbar.php';
?>
    <div class="container">
    <br>
    <div class="card ">
        <br>
        <div class="card-header ml-5">
            <br>
            <center>
            <h3 class="ms-5">
               Ajouter etudiant
            </h3>
            </center>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="">
                <div class="form-group">
                    <label><h5>Nom :</h5></label>
                    <input name="Nom" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label><h5>PreNom :</h5></label>
                    <input name="PreNom" value="" class="form-control ">
                </div>
                <br>
                <button class="btn btn-success" type="submit"  name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php

    if(isset($_POST['submit'])){
    //    ' if (!is_dir(__DIR__ . "/Modele/Etudiants")) 
    //     {
    //         mkdir(__DIR__ . "/Modele/Etudiants");
            $id = $_GET['id'];
            $new_suivi = array
            (
                "Nom"=>$_POST['Nom'],
                "PreNom"=>$_POST['PreNom'],
                "id"=> $id,
                // $suivi => 
                // [
                // //    ' "Titre" => $_POST['Titre'],
                // //     "Date" => date('m-d-Y h:i:s',time()),
                // //     "Text" => $_POST['Text'],
                // //     "Auteur" =>  shell_exec("echo %username%" )'
                // ]
            );
            $file_name =  $new_suivi['id'] . '.json';
            if(filesize($file_name) == 0)
            {
                $first_record = array($new_suivi);
                $save_data = $first_record;
            }
            else
            {
                $old_records = json_decode(file_get_contents($file_name));
                array_push($old_records, $new_suivi);
                $save_data = $old_records;
            }

            if(!file_put_contents($file_name, json_encode($save_data,JSON_PRETTY_PRINT), LOCK_EX))
            {
                echo "error creating";
            }
            else
            {
                echo "success";
            }
        }
    // }
?>

    