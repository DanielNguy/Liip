<?php
/**
 * Created by PhpStorm.
 * User: danie
 * Date: 07.12.2018
 * Time: 14:15
 */
session_start();


$Vorname = $_POST['firstName'];
$Nachname = $_POST['lastName'];
$_SESSION['Login'] = true;
header("Location: index.html");
?>

