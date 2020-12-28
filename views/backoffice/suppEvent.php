<?php
include '../../controller/EvenementC.php';
$Evenement1C=new EvenementC();
if($Evenement1C->supprimerEvent($_GET['id'])){
?>
<script>
    document.location.replace("Evenements.php") ;
</script>
<?php
}
?>
