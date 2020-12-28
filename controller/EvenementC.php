<?php
//include_once "../config.php";
require_once('config.php');
class EvenementC{
    function ajoutEvent(Evenement $Evenement){

        $db= config::getConnexion();
        $sql="insert into evenement (nom_event,adresse_event,num_tel,information_event,nombre_participants,date_debut,date_fin,prix,photo_event) values (:nom_event,:adresse_event,:num_tel,:information_event,:nombre_participants,:date_debut,:date_fin,:prix,:photo_event)";
        try{
            $req=$db->prepare($sql);
            $req->bindValue(":nom_event",$Evenement->getNomEvent());
            $req->bindValue(":adresse_event",$Evenement->getAddressEvent());
            $req->bindValue(":num_tel",$Evenement->getNumTel());
            $req->bindValue(":information_event",$Evenement->getInformationEvent());
            $req->bindValue(":nombre_participants",$Evenement->getNombreParticipants());
            $req->bindValue(":date_debut",$Evenement->getDateDebut());
            $req->bindValue(":date_fin",$Evenement->getDateFin());
            $req->bindValue(":prix",$Evenement->getPrix());
            $req->bindValue(":photo_event",$Evenement->getPhotoEvent());

            return $req->execute();
        }
        catch (Exception $e){
            return $e->getMessage();
        }


    }

    function afficherEvent(){
        $db= config::getConnexion();
        $sql="select * from evenement";
        try {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

    function supprimerEvent($id){
        $db= config::getConnexion();
        $sql="delete from evenement where id_event=:id";
        try {
            $req=$db->prepare($sql);
            $req->bindValue(":id",$id);
            return $req->execute();
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

    function trouverEvent($id){
        $db= config::getConnexion();
        $sql="select * from evenement where id_event=".$id;
        try {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

    function modifierEvent($id,Evenement $Evenement){
        $db= config::getConnexion();
        $sql="update evenement set nom_event=:nom_event,adresse_event=:adresse_event,num_tel=:num_tel,information_event=:information_event,nombre_participants=:nombre_participants,date_debut=:date_debut,date_fin=:date_fin,prix=:prix,photo_event=:photo_event where id_event=:id";
        try{
            $req=$db->prepare($sql);
            $req->bindValue(":nom_event",$Evenement->getNomEvent());
            $req->bindValue(":adresse_event",$Evenement->getAddressEvent());
            $req->bindValue(":num_tel",$Evenement->getNumTel());
            $req->bindValue(":information_event",$Evenement->getInformationEvent());
            $req->bindValue(":nombre_participants",$Evenement->getNombreParticipants());
            $req->bindValue(":date_debut",$Evenement->getDateDebut());
            $req->bindValue(":date_fin",$Evenement->getDateFin());
            $req->bindValue(":prix",$Evenement->getPrix());
            $req->bindValue(":photo_event",$Evenement->getPhotoEvent());
            $req->bindValue(":id",$id);

            return $req->execute();
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

    function NombreTicket($id_event){
        $sql="SELECT  * from ticket where id_event=".$id_event;
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            $nombre=$liste->rowCount();
            return $nombre;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


}
?>
