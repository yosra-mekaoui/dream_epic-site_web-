<?PHP
class Evenement{
    private $id_event;
    private $nom_event;
	private $address_event;
    private $num_tel;
    private $information_event;
    private $nombre_participants;
    private $date_debut;
    private $date_Fin;
    private $prix;
    private $photo_event;

    public function __construct($id_event, $nom_event, $address_event, $num_tel, $information_event, $nombre_participants, $date_debut, $date_Fin,$prix, $photo_event)
    {
        $this->id_event = $id_event;
        $this->nom_event = $nom_event;
        $this->address_event = $address_event;
        $this->num_tel = $num_tel;
        $this->information_event = $information_event;
        $this->nombre_participants = $nombre_participants;
        $this->date_debut = $date_debut;
        $this->date_Fin = $date_Fin;
        $this->prix=$prix;
        $this->photo_event = $photo_event;
    }


    public function getIdEvent()
    {
        return $this->id_event;
    }


    public function setIdEvent($id_event)
    {
        $this->id_event = $id_event;
    }


    public function getNomEvent()
    {
        return $this->nom_event;
    }


    public function setNomEvent($nom_event)
    {
        $this->nom_event = $nom_event;
    }


    public function getAddressEvent()
    {
        return $this->address_event;
    }


    public function setAddressEvent($address_event)
    {
        $this->address_event = $address_event;
    }


    public function getNumTel()
    {
        return $this->num_tel;
    }


    public function setNumTel($num_tel)
    {
        $this->num_tel = $num_tel;
    }


    public function getInformationEvent()
    {
        return $this->information_event;
    }


    public function setInformationEvent($information_event)
    {
        $this->information_event = $information_event;
    }


    public function getNombreParticipants()
    {
        return $this->nombre_participants;
    }


    public function setNombreParticipants($nombre_participants)
    {
        $this->nombre_participants = $nombre_participants;
    }


    public function getDateDebut()
    {
        return $this->date_debut;
    }


    public function setDateDebut($date_debut)
    {
        $this->date_debut = $date_debut;
    }


    public function getDateFin()
    {
        return $this->date_Fin;
    }


    public function setDateFin($date_Fin)
    {
        $this->date_Fin = $date_Fin;
    }


    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }


    public function getPhotoEvent()
    {
        return $this->photo_event;
    }


    public function setPhotoEvent($photo_event)
    {
        $this->photo_event = $photo_event;
    }



}

?>
