<?php

if(isset($_GET['id'])){
    session_start();

include '../../controller/EvenementC.php';
$Event1C=new EvenementC();
$list=$Event1C->trouverEvent($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ticket</title>
        <link href="css/ticket.css" rel="stylesheet" />
        </head>
        <div class="alert alert-success" role="alert">
            <?php
            foreach ($list as $row) {


                ?>
                <div class="ticket ticket-1" style=" background-image: url(<?php echo $row['photo_event']; ?>);">

                    <div class="date">
                        <?php $yrdata = strtotime($row['date_debut']); ?>
                        <span class="day"><?php echo date('D', $yrdata); ?></span>
                        <!--<span class="month-and-time">OCT</br><span class="small">8PM</span></span>-->
                        <span class="month-and-time"><?php echo date('M', $yrdata); ?></br><span class="small">8PM</span></span>
                    </div>

                    <div class="artist">
                        <span class="name"><?php echo $row['nom_event']; ?></span>
                        </br>

                    </div>

                    <div class="location" style="margin: 60px 60% 20px 40%;">
                        <span><?php echo $row['prix']; ?> DT</span>
                        </br>
                        <span class="small"><span><?php echo $row['adresse_event']; ?></span>
                    </div>

                    <div class="rip">
                    </div>

                    <form method="post">

                    <div class="cta">
                        <button type="submit" class="buy" name="reserver">Reserver</button>
                    </div>
                    </form>

                </div>


                <?php
            }
            ?>


  </div>
  </html>
<?php
    $_SESSION['idTalent']=1;
    if(isset($_POST['reserver'])){
        include '../../entities/Ticket.php';
        include '../../controller/TicketC.php';
        $date = date_create()->format('Y-m-d H:i:s');
        $Ticket1=new Ticket($date,"",$_GET['id'],$_SESSION['idTalent']);
        $Ticket1C=new TicketC();
        if($Ticket1C->ajoutTicket($Ticket1)){
            ?>
            <script>
                document.location.replace("reservation.php") ;
            </script>
            <?php


        }
    }

}
    ?>
