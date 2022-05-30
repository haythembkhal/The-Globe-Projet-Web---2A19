<?php



class Panier{

    private string $nom;
    private string $image;
    private  int   $prix;
    private  int   $client;
	
    

    public function __construct(string $nom, string $image, int $prix, int $client){
        $this->nom = $nom;
        $this->image = $image;
        $this->prix = $prix;
        $this->client = $client;
       
    }
//

    public function getNom():string{
        return $this->nom;
    }

    public function getImage():string{
        return $this->image;
    }

    public function getPrix():int{
        return $this->prix;
    }
	
    public function getClient():int{
        return $this->client;
    }
	
	


    //setters
    /*public function set(string $ville):void{
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
    }*/
    
}




?>