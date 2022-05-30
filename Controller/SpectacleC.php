<?php

include_once '../../config.php';
include_once '../../Model/spectacleModelB.php';
//include_once 'notificationC.php';

class SpectacleC{

    function afficherSpectacle(){
            $db = config::getconnexion();
    
            try {
                $query = $db->prepare(
                
                'SELECT * FROM Spectacles'
                );
                $query->execute();
                $result=$query->fetchALL();
                return $result;
               
    
            } catch (PDOException $e) {
                $e->getMessage();
            }
    }
}
?>