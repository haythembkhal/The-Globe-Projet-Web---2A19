<?php

include 'C:/xampp/htdocs/Projet/config.php';
include 'C:/xampp/htdocs/Projet/Model/user.php';


/*function notifyAdministrator($type,$userName,$userId,$userType){
    $db = config::getConnexion();
    $date = date('y-m-d-H-i-s');
    
    if($type=='registration')
        $message = "New User Registration. ";
    else if($type=='delatedAccount')
        $message = "User Account Delated. ";
    
    $message.=" ".$userType.", ".$userName." with User Id: ".$userId;
    if($type=='registration')
        $message .= " has registered to EduEasy.";
    else if($type=='delatedAccount')
        $message .= " has deleted his EduEasy Account.";
        
        try {
            $query = $db->prepare(
                'INSERT INTO notification (number,type,message,dateReceived) 
                    VALUES (:number,:type,:message,:dateReceived) '
            );
            $query->execute([
                'number' => 0,
                'type' => $type,
                'message' => $message,
                'dateReceived' => $date
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
}

*/

class ClientC{

function afficherClient(){
        $db = config::getconnexion();

        try {
            $query = $db->prepare(
			
            'SELECT * FROM client'
            );
			$query->execute();
			$result=$query->fetchALL();
			return $result;
           

        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
function rechercherClient($userID){
	 $db = config::getconnexion();

        try {
            $query = $db->prepare(
			
            'SELECT * FROM client where id_client= :userID'
            );
			$query->execute(['userID'=>$userID]);
			$result=$query->fetchALL();
			return $result;
           

        } catch (PDOException $e) {
            $e->getMessage();
        }
}
//une fonction rechercher Email afin d'assurer l'unicité des adresse Email
function rechercherEmail($email){
	 $db = config::getconnexion();

        try {
            $query = $db->prepare(
			
            'SELECT * FROM client where email= :email'
            );
			$query->execute(['email'=>$email]);
			$result=$query->fetchALL();
			return $result;
           

        } catch (PDOException $e) {
            $e->getMessage();
        }
}
    function ajouterClient($newClient){
        $db = config::getConnexion();

        try {
            
            $query = $db->prepare(
                'INSERT INTO client (firstname,lastname,username,email,password) 
                    VALUES (:firstname,:lastname,:username,:email,:password)'
            );
            $query->execute([
                'email' => $newClient->getEmail(),
                'username' => $newClient->getUserName(),
                'password' => $newClient->getPassword(),
                'firstname' => $newClient->getFirstname(),
				'lastname' => $newClient->getLastname()
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
function updateClient($user,$userId){

        $db = config::getConnexion();
        try{
            $query = $db->prepare(
                'UPDATE client SET firstname= :firstname, lastname = :lastname,  username= :username, email = :email, password= :password where id_client = :userId'
            );
            $query = $query->execute([
				'firstname'=> $user->getFirstname(),
				'lastname'=> $user->getLastname(),
                'username' => $user->getUsername(),
				'email'=> $user->getEmail(),
				'password' => $user->getPassword(),
                'userId' => $userId
            ]);
           // $_SESSION['userName'] = $newUserName;
        }catch(PDOException $e){
            $e->getMessage();
        }
    }
    
    function supprimerClient($userId){

        $db = config::getConnexion();
        try {
            $query = $db->prepare(
                'DELETE FROM client WHERE id_client = :userId'
            );
            $query->execute([
                'userId' => $userId
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
	function rechercheAvancee($mot){
		 $db = config::getConnexion();
        try {
            $query = $db->query(
			
            "SELECT * FROM client WHERE firstname like '%$mot%' || lastname like '%$mot%' || username like '%$mot%'"
            );
			$query->execute(['firstname'=>$mot]);
			$result=$query->fetchALL();
			return $result;
           
        } catch (PDOException $e) {
            $e->getMessage();
        }
	}

    
}

class EmployeC{

function rechercherEmploye($userID){
	 $db = config::getconnexion();

        try {
            $query = $db->prepare(
			
            'SELECT * FROM employe where id_employe= :userID'
            );
			$query->execute(['userID'=>$userID]);
			$result=$query->fetchALL();
			return $result;
           

        } catch (PDOException $e) {
            $e->getMessage();
        }
}
function afficherEmploye(){
        $db = config::getconnexion();

        try {
            $query = $db->prepare(
			
            'SELECT * FROM employe'
            );
			$query->execute();
			$result=$query->fetchALL();
			return $result;
           

        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

function ajouterEmploye($newEmploye){
        $db = config::getConnexion();

        try {
			
            $query = $db->prepare(
                'INSERT INTO employe (firstname,lastname,username,email,password) 
                    VALUES (:firstname,:lastname,:username,:email,:password) '
            );
			
            $query->execute([
                'firstname' => $newEmploye->getFirstname(),
				'lastname'  => $newEmploye->getLastname(),
                'username'  => $newEmploye->getUserName(),
				'email'     => $newEmploye->getEmail(),
                'password'  => $newEmploye->getPassword()             
            ]);
			
        } catch (PDOException $e) {
            $e->getMessage();
			//var_dump($e);
        }
		
    }
 function supprimerEmploye($userId){

        $db = config::getConnexion();
        try {
            $query = $db->prepare(
                'DELETE FROM employe WHERE id_employe = :userId'
            );
            $query->execute([
                'userId' => $userId
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
	
   function updateEmploye($user,$userId){

        $db = config::getConnexion();
        try{
            $query = $db->prepare(
                'UPDATE employe SET firstname= :firstname, lastname = :lastname,  username= :username, email = :email, password= :password where id_employe = :userId'
            );
            $query = $query->execute([
				'firstname'=> $user->getFirstname(),
				'lastname'=> $user->getLastname(),
                'username' => $user->getUsername(),
				'email'=> $user->getEmail(),
				'password' => $user->getPassword(),
                'userId' => $userId
            ]);
           // $_SESSION['userName'] = $newUserName;
        }catch(PDOException $e){
            $e->getMessage();
        }
    }
	function rechercheAvancee($mot){
		 $db = config::getConnexion();
        try {
            $query = $db->query(
			
            "SELECT * FROM employe WHERE firstname like '%$mot%' || lastname like '%$mot%' || username like '%$mot%'"
            );
			$query->execute(['firstname'=>$mot]);
			$result=$query->fetchALL();
			return $result;
           
        } catch (PDOException $e) {
            $e->getMessage();
        }
	}


}


class AdministratorC{

    function ajouterAdministrateur($newAdministrator){
        $db = config::getConnexion();

        try {
            $query = $db->prepare(
                'INSERT INTO administrateur (firstname,lastname,username,email,password) 
                    VALUES (:firstname,:lastname,:username,:email,:password) '
            );
            $query->execute([
                'firstname' => $newAdministrator->getFirstname(),
                'lastname' => $newAdministrator->getLastname(),
                'username' => $newAdministrator->getUsername(),
                'email' => $newAdministrator->getEmail(),
                'password' => $newAdministrator->getPassword()
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function deleteAdministrator($userId){

        $db = config::getConnexion();
        try {
            $query = $db->prepare(
                'DELETE FROM administrator WHERE userId = :userId'
            );
            $query->execute([
                'userId' => $userId
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function updateAdministratorUserName($newUserName,$userId){

        $db = config::getConnexion();
        try{
            $query = $db->prepare(
                'UPDATE administrator SET userName= :userName where userId = :userId'
            );
            $query = $query->execute([
                'userName' => $newUserName,
                'userId' => $userId
            ]);
            $_SESSION['userName'] = $newUserName;
        }catch(PDOException $e){
            $e->getMessage();
        }
    }

    function updateAdministratorEmail($newEmail,$userId){
        
        $db = config::getConnexion();
        try{
            $query = $db->prepare(
                'UPDATE administrator SET email= :email where userId = :userId'
            );
            $query = $query->execute([
                'email' => $newEmail,
                'userId' => $userId
            ]);
            $_SESSION['email'] = $newEmail;
        }catch(PDOException $e){
            $e->getMessage();
        }
    }


    function updateAdministratorPassword($newPassword,$userId){
        $db = config::getConnexion();
        try{
            $query = $db->prepare(
                'UPDATE administrator SET password= :password where userId = :userId'
            );
            $query = $query->execute([
                'password' => $newPassword,
                'userId' => $userId
            ]);
        }catch(PDOException $e){
            $e->getMessage();
        }
    }

}

?>