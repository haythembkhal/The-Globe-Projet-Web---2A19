<?php
    include '../../config.php';
    $db = config::getConnexion();
    $sql = "SELECT *, CURDATE() FROM conges WHERE MONTH(date_fin) >= MONTH(CURDATE())";
    function dateDiff ($d1, $d2) {

        // Return the number of days between the two dates:
        $interval = round((strtotime($d1) - strtotime($d2))/86400);
        if ($interval < 0) {
            $interval = 0;
        }    
        return $interval;
    
    } // end function dateDiff
    $items = $db->query($sql);    

    class Task {}

    $result = array();

    foreach($items as $conge) {
    $r = new Task();

    
    // rows
    $r->id = $conge['id_conge'];
    $r->text = $conge['employes'];
    $r->start = $conge['date_deb'];
    $r->end = $conge['date_fin'];
    if (((dateDiff($conge['CURDATE()'], $conge['date_deb'])) / dateDiff($conge['date_fin'], $conge['date_deb'])*100) > 100) {
        $r->complete = 100;
    }
    else {
        $r->complete = intval((dateDiff($conge['CURDATE()'], $conge['date_deb'])) / dateDiff($conge['date_fin'], $conge['date_deb'])*100);
    
    }
    $result[] = $r;
    }

    header('Content-Type: application/json');
    echo json_encode($result);
?>