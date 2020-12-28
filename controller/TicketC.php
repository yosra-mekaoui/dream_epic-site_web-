<?php
//include_once "../config.php";
require_once('config.php');
class TicketC{
    function ajoutTicket(Ticket $ticket){

        $db= config::getConnexion();
        $sql="insert into ticket (date_achat,qr_code,id_event,idTalent) values (:date_achat,:qr_code,:id_event,:idTalent) ";
        try{
            $req=$db->prepare($sql);
            $req->bindValue(":date_achat",$ticket->getDateAchat());
            $req->bindValue(":qr_code",$ticket->getQrCode());
            $req->bindValue(":id_event",$ticket->getIdEvent());
            $req->bindValue(":idTalent",$ticket->getIdTalent());

            $req->execute();

            require_once('TalentC.php');
            $talentc1=new TalentC();
            $list=$talentc1->recupererTalent(1);
            
            foreach($list as $row){
                $emailTalent=$row['emailTalent'];
            require_once('class.phpmailer.php');
            include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
            $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
            $mail->IsSMTP(); // telling the class to use SMTP
            $mail->SMTPAuth   = true;                  // enable SMTP authentication
            $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
            $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
            $mail->Port       = 465;
            $mail->isHTML(true);
            $mail->Username = "yosra.mekaoui@esprit.tn";
            $mail->Password = "191JFT4305";
            $mail->setFrom("yosra.mekaoui@esprit.tn");
            $mail->Subject = "Reservation";
            
            //$mail->Body= "Vous avez acheté une ticket";
            require_once('EvenementC.php');
            $evenement1C=new EvenementC();
            $list=$evenement1C->trouverEvent($ticket->getIdEvent());
            foreach($list as $row){
                $yrdata = strtotime($row['date_debut']);
                $nom=$row['nom_event'];
                $date_d=$row['date_debut'];
                $date_f=$row['date_fin'];
                $prix=$row['prix'];
                $mail->Body ="<html> 
	<body style='color: #000; font-size: 16px; text-decoration: none; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #efefef;'>

		<div id='wrapper' style='max-width: 600px; margin: auto auto; padding: 20px;'>

			<div id='logo' style=''>
				<center><h1 style='margin: 0px;'><a href='#' target='_blank'><img style='max-height: 75px;' src='#'></a></h1></center>
			</div>

			<div id='content' style='font-size: 16px; padding: 25px; background-color: #fff;
				moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; -khtml-border-radius: 10px;
				border-color: #A3D0F8; border-width: 4px 1px; border-style: solid;'>

				<h1 style='font-size: 22px;'><center></center></h1>

				<p>Evenement: $nom</p>

				<p> $prix DT</p>

				<p>from $date_d to $date_f </p>
				<br />
				<p><center><a href='#'><img style='max-height: 200px; max-width: 95%;' src='https://championsfl.files.wordpress.com/2017/09/welcome.png?w=800'></p>

				<p style='display: flex; justify-content: center; margin-top: 10px;'><center>
					
				</center></p>

			</div>
		</div>
	</body>
</html>";
            }
            $mail->AltBody =" ";
            

            
            $mail->AddAddress($emailTalent); //
            
            }

            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            if (!$mail->send())
            {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
            return true;
        
        }
        catch (Exception $e){
            return $e->getMessage();
        }


    }

    function afficherTicket(){
        $db= config::getConnexion();
        $sql="select id_ticket,nomTalent,date_achat,qr_code,nom_event from ticket inner join evenement on ticket.id_event=evenement.id_event inner join talent on ticket.idTalent=talent.idTalent";
        try {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

    function supprimerTicket($id){
        $db= config::getConnexion();
        $sql="delete from ticket where id_ticket=:id";
        try {
            $req=$db->prepare($sql);
            $req->bindValue(":id",$id);
            return $req->execute();
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

    function trouverTicket($id){
        $db= config::getConnexion();
        $sql="select * from ticket where id_ticket=".$id;
        try {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

    function modifierTicket($id,Ticket $ticket){
        $db= config::getConnexion();
        $sql="update ticket set date_achat=:date_achat,qr_code=:qr_code,id_event=:id_event where id_ticket=:id";
        try{
            $req=$db->prepare($sql);
            $req->bindValue(":date_achat",$ticket->getDateAchat());
            $req->bindValue(":qr_code",$ticket->getQrCode());
            $req->bindValue(":id_event",$ticket->getIdEvent());

            return $req->execute();
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

    function rechercherTicket($str){
        $sql="select id_ticket,nomTalent,date_achat,qr_code,nom_event from ticket inner join evenement on ticket.id_event=evenement.id_event inner join talent on ticket.idTalent=talent.idTalent where nom_event like '".$str."%' or nomTalent like '".$str."%'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

    function afficherTicketTalent($id_talent){
        $db= config::getConnexion();
        $sql="select evenement.id_event,adresse_event,photo_event,id_ticket,nomTalent,date_achat,qr_code,nom_event from ticket inner join evenement on ticket.id_event=evenement.id_event inner join talent on ticket.idTalent=talent.idTalent where talent.idTalent=".$id_talent;
        try {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
        function recupererTicketTalent($id_talent){
			$sql="SELECT * from ticket where idTalent=$id_talent";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$ticket=$query->fetch();
				return $ticket;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
    }
}
?>
