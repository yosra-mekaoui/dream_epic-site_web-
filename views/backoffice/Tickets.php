<?php

include '../../controller/TicketC.php';

$Ticket1C = new TicketC();
if(!isset($_POST['str'])){
    $liste = $Ticket1C->afficherTicket();
}
else{
    $liste = $Ticket1C->rechercherTicket($_POST['str']);
}

    foreach ($liste as $ligne) {
        ?>
    <tr>
        <td><?php echo $ligne['nomTalent']; ?></td>
        <td><?php echo $ligne['date_achat'] ?></td>
        <td><?php echo $ligne['nom_event'] ?></td>
        <td><a href="suppTicket.php?id=<?php echo $ligne['id_ticket']; ?>">Supprimer</a></td>
    </tr>
        <?php
    }
?>
