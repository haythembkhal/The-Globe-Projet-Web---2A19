<?php



/*function generateUserId($userType):string{

    $db = config::getconnexion();

    $studentQuery = "SELECT * FROM student WHERE userId=(SELECT max(userId) FROM student)";
    $teacherQuery = "SELECT * FROM teacher WHERE userId=(SELECT max(userId) FROM teacher)";
    $administartorQuery = "SELECT * FROM administrator WHERE userId=(SELECT max(userId) FROM administrator)";

    if($userType=='Student'){

    try {
        $res = $db->query($studentQuery);
        $data = $res->fetch();
        if($data!=NULL){
            $nb = substr($data['userId'], 7);
            $nb+=1;
        }
        else
            $nb=0;

        //concatenation
        $userId = date("Y");
        $userId .= 'STU';
        $userId .= $nb;

        return $userId;

        } catch (Exception $e) {
            die('ERREUR'. $e->getMessage());
        }
    }

    elseif($userType=='Teacher'){

        try{
            $res = $db->query($teacherQuery);
        $data = $res->fetch();
        if($data!=NULL){
            $nb = substr($data['userId'], 7);
            $nb+=1;
        }
        else
            $nb=0;
        //concatenation
        $userId = date("Y");
        $userId .= 'TEA';
        $userId .= $nb;

        return $userId;
    
        } catch (Exception $e) {
                die('ERREUR'. $e->getMessage());
            }
    }

    elseif($userType=='Administrator'){

        try{
            $res = $db->query($teacherQuery);
        $data = $res->fetch();
        $nb = substr($data['userId'], 7);
        $nb+=1;

        //concatenation
        $userId = date("Y");
        $userId .= 'ADM';
        $userId .= $nb;

        return $userId;
    
        } catch (Exception $e) {
                die('ERREUR'. $e->getMessage());
            }
    }

}




*/


class User{

    private string $ville;
    private string $email;
    private string $password;
    private string $firstname;
	private string $lastname;
	private string $photo;
    

    public function __construct(string $firstname, string $lastname, string $ville, string $email,string $password,string $photo){
        $this->ville = $ville;
        $this->email = $email;
        $this->password = $password;
        $this->firstname = $firstname;
        $this->lastname= $lastname; //generateUserId($userType);
		$this->photo=$photo;
    }
	
//
/*
function ajouterEmploye($newEmploye){
        $db = config::getConnexion();

        try {
            $query = $db->prepare(
                'INSERT INTO employe (firstname,lastname,ville,email,password) 
                    VALUES (:firstname,:lastname,:ville,:email,:password) '
            );
            $query->execute([
                'firstname' => $newEmploye->getFirstname(),
				'lastname' => $newEmploye->getLastname(),
                'email' => $newEmploye->getEmail(),
                'ville' => $newEmploye->getville(),
                'password' => $newEmploye->getPassword(),
              
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }*/
    //getters
    public function getville():string{
        return $this->ville;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function getPassword():string{
        return $this->password;
    }
	
    public function getFirstname():string{
        return $this->firstname;
    }
	
	public function getlastname():string{
        return $this->lastname;
    }
	public function getPhoto():string{
        return $this->photo;
    }


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
}

?>