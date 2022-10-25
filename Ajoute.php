<?php 
    include 'Vue/navbar.php';
?>
<html>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="">
           <center>
           <h3>Ajoutez un Suivi</h3>
           </center> 
            <div class="form-group">
                <label><h6>Titre du Suivi :</h6></label>
                <input name="Titre" value="" class="form-control">
            </div>
            <div class="form-group">
                <label><h5>Information du Suivi :</h5></label>
                <br>
                <input type="button" value="G" style="font-weight: bold;" onclick="commande('bold');" />
                <input type="button" value="I" style="font-style: italic;" onclick="commande('italic');" />
                <input type="button" value="S" style="text-decoration: underline;" onclick="commande('underline');" />
                <textarea name="Text" rows="3" id="editeur"  class="form-control" contentEditable></textarea>
            </div>
            <br>
            <button class="btn btn-success" type="submit"  name="submit">Submit</button>
        </form>
    </div>
</html>
<?php
    
    if(isset($_POST['submit']))
    {
            $id = $_GET['id'].".json";
            $new_suivi = array(
                "suivi" =>[
                    "Titre" => $_POST['Titre'],
                    "Text" => $_POST['Text'],
                    "Date" => date('m-d-Y h:i:s',time()),
                    "Auteur" =>  shell_exec("echo %username%" )
                ]
            );
        if(filesize($id) == 0){
            $first_record = array($new_suivi);
            $save_data = $first_record;
        }else{
            $old_records = json_decode(file_get_contents($id));

            array_push($old_records,$new_suivi["suivi"]);
            $save_data = $old_records;
        }

        if(!file_put_contents($id, json_encode($save_data,JSON_PRETTY_PRINT), LOCK_EX)){
            echo "error creating";
        }else{
            echo "success";
        }
    }
?>
new std