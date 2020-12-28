<?php
include '../../entities/Ticket.php';
include '../../controller/TicketC.php';

$Ticket1=new Ticket(1,$_POST['prix'],$_POST['date_achat'],$_POST['qr_code'],"");
$Ticket1C=new TicketC();
if($Ticket1C->ajoutTicket($Ticket1)){
    ?>
    <script>
    document.location.replace("reservation.php") ;
    </script>
    <?php
}

?>
