<?php 

class SpectaclesC
{

    public ?string $specId = null;
    public ?string $titre= null;    
    public ?string $date = null;
    public ?string $duration = null;
    public ?string $adresse = null;
    public ?string $hotel = null;
    public ?string $resto = null;
    public ?string $gare= null;

    public ?string $description= null;
    public ?string $realisateurs= null;
    public ?string $video= null;
    public ?string $carte= null;
    public ?string $plan= null;
    public ?string $imgportrait= null;
    public ?string $imglandscape= null;

    function __construct($specId,$titre,$date,$duration,$adresse,$hotel,$resto,$gare,$description,$realisateurs,$plan,$video,$carte,$imglandscape,$imgportrait)
    {
        $this->specId = $specId;
        $this->titre = $titre;
        $this->date = $date;
        $this->hotel= $hotel;
        $this->duration= $duration;
        $this->adresse = $adresse;
        $this->resto = $resto;
        $this->gare = $gare;
        $this->description= $description;
        $this->realisateurs= $realisateurs;
        $this->plan= $plan;
        $this->carte = $carte;
        $this->video = $video;
        $this->imgportrait = $imgportrait;
        $this->imglandscape = $imglandscape;
    }

    public function getId()
    {
        return $this->specId;
    }
    
    public function getTitre()
    {
        return $this->titre;
    }
    public function getDate()
    {
        return $this->date;
    }
    
    public function getDuration()
    {
        return $this->duration;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function getGare()
    {
        return $this->gare;
    }
    
    public function getResto()
    {
        return $this->resto;
    }
    
    public function getHotel()
    {
        return $this->hotel;
    }
    
    public function getDesc()
    {
        return $this->description;
    }
    public function getReal()
    {
        return $this->realisateurs;
    }
    public function getPlan()
    {
        return $this->plan;
    }
    public function getCarte()
    {
        return $this->carte;
    }
    public function getVideo()
    {
        return $this->video;
    }
    public function getLand()
    {
        return $this->imglandscape;
    }

    public function getPort()
    {
        return $this->imgportrait;
    }

/////SETTER
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }
        public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
    public function setHotel($hotel)
    {
        $this->hotel= $hotel;

        return $this;
    }
    public function setDuration($duration)
    {
        $this->duration= $duration;

        return $this;
    }
public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }
    public function setResto($resto)
    {
        $this->resto = $resto;

        return $this;
    }
    public function setGare($gare)
    {
        $this->gare = $gare;

        return $this;
    }

    public function setDescription($description)
    {
        $this->description= $description;

        return $this;
    }
    

    public function setRealisateurs($realisateurs)
    {
        $this->realisateurs= $realisateurs;

        return $this;
    }
    

    public function setPlan($plan)
    {
        $this->plan= $plan;

        return $this;
    }
    

    public function setCarte($carte)
    {
        $this->carte = $carte;

        return $this;
    }
    

    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }
    

    public function setPort($imgportrait)
    {
        $this->imgportrait = $imgportrait;

        return $this;
    }
    

    public function setLand($imglandscape)
    {
        $this->imglandscape = $imglandscape;


        return $this;
    }
    
}
?>