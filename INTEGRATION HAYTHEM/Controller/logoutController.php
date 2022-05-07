<?php
include'userC.php';
session_start();
$customer=new ClientC();
$customer->userDeconnecter($_SESSION["id_client"]);
session_destroy();
header('location:http://localhost/Alliance/View/Front/index.php');
?>