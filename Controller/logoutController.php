<?php

session_start();
session_destroy();
header('location:../View/Front/index.php');
?>