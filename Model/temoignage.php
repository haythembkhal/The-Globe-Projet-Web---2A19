<?php


class Temoignage{

    private string $message;
    private int $client;
   
    

    public function __construct(string $message, int $client){
        $this->message = $message;
        $this->client = $client;
    }

    public function getMessage():string{
        return $this->message;
    }

    public function getClient():string{
        return $this->client;
    }


    //setters
    public function setMessage(string $message):void{
        $this->message = $message;
    }

    public function setClient(string $client):void{
        $this->client = $client;
    }

}


?>