<?php
    session_start();
    if(!empty($_SESSION['sunm']))
    {
        $username =  $_SESSION['sunm'];
        $id       =  $_SESSION['sid'];
    } else
    {
        header("location: index.html");
    }
    include_once('includes/sidebar.php');
    include_once("includes/header.php");
    include('room.php');
?>