<?php
include '../../entities/Evenement.php';
include '../../controller/EvenementC.php';

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
/*$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));*/
$file_tmp =$_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp,$target_file);


$Evenement1=new Evenement(1,$_POST['nom'],$_POST['adresse'],$_POST['numero'],$_POST['information'],$_POST['nombre'],$_POST['date_debut'],$_POST['date_fin'],$_POST['prix'],$target_file );
$Evenement1C=new EvenementC();
if($Evenement1C->ajoutEvent($Evenement1)){
    ?>
    <script>
        document.location.replace("Evenements.php") ;
    </script>
    <?php
}

?>
