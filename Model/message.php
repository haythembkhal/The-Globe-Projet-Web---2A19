<?php

class Message{

    private string $message;
    private int $etat;
    private int $client;
   
    

    public function __construct(string $message, int $etat, int $client){
        $this->message = $message;
        $this->etat = $etat;
        $this->client = $client;
        
    }

    public function getMessage():string{
        return $this->message;
    }

    public function getEtat():string{
        return $this->etat;
    }

    public function getClient():string{
        return $this->client;
    }
	
  /*


    //setters
    public function setville(string $ville):void{
        $this->ville = $ville;
    }

    public function setEmail(string $email):void{
        $this->email = $email;
    }

    public function setPassword(string $password):void{
        $this->password = $password;
    }

	
	 public function setFirstname(string $firstname):void{
        $this->firstname= $firstname;
    }
	
	 public function setLastname(string $lastname):void{
        $this->lastname = $lastname;
    }
    
}


class  Client extends User{

    private int $id_cleint;

    //getters

    public function getIdClient():int{
        return $this->id_client;
    }

    //setters

    public function setIdClient(int $id):void{
        $this->id_client = $id;
    }
     
}


class Employe extends User{

    private int $id_employe;

    //getters

    public function id_employe():int{
        return $this->id_employe;
    }

    //setters

    public function setIdEmploye(int $id):void{
        $this->id_employe = $id;
    }
}



class Administrateur extends User{
    private int $id_admin;

    //getters

    public function getIdAdmin():int{
        return $this->id_admin;
    }

    //setters

    public function setIdAdmin(int $id):void{
        $this->id_admin = $id;
    }
	*/
}

?>