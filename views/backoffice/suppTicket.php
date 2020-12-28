<?php
include '../../controller/TicketC.php';
$Ticket1C=new TicketC();
if($Ticket1C->supprimerTicket($_GET['id'])){
    ?>
    <script>
        document.location.replace("Tickets.html") ;
    </script>
    <?php
}
?>
