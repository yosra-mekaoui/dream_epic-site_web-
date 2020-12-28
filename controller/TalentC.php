<?php
//include_once "../config.php";
require_once('config.php');
class TalentC{

        function recupererTalent($id_talent){
			$sql="SELECT * from talent where idTalent=$id_talent";
			$db = config::getConnexion();
			try{
				$list=$db->query($sql);
                return $list;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
    }

?>
