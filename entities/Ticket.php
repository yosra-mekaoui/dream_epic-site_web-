<?php
class ticket{
    private $id_ticket;
    private $date_achat;
    private $qr_code;
    private $id_event;
    private $idTalent;


    public function __construct( $date_achat, $qr_code, $id_event,$idTalent)
    {
        $this->date_achat = $date_achat;
        $this->qr_code = $qr_code;
        $this->id_event = $id_event;
        $this->idTalent=$idTalent;
    }


    public function getIdTicket()
    {
        return $this->id_ticket;
    }


    public function setIdTicket($id_ticket)
    {
        $this->id_ticket = $id_ticket;
    }


    public function getDateAchat()
    {
        return $this->date_achat;
    }


    public function setDateAchat($date_achat)
    {
        $this->date_achat = $date_achat;
    }


    public function getQrCode()
    {
        return $this->qr_code;
    }


    public function setQrCode($qr_code)
    {
        $this->qr_code = $qr_code;
    }

    public function getIdEvent()
    {
        return $this->id_event;
    }


    public function setIdEvent($id_event)
    {
        $this->id_event = $id_event;
    }


    public function getIdTalent()
    {
        return $this->idTalent;
    }


    public function setIdTalent($idTalent)
    {
        $this->idTalent = $idTalent;
    }

}


?>
