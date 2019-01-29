<?php
/**
 * Created by PhpStorm.
 * User: danie
 * Date: 07.12.2018
 * Time: 14:15
 */

session_start();

$db = new SQLite3("Logindaten.db");

$email = $_POST['inputEmail'];
$password = $_POST['password'];
$emailcheck = $db->query("SELECT * email from TLogindaten where email = $email && password = $password");
while ($row = $emailcheck->fetchArray()){
    var_dump($row);
}


$Vorname = $_POST['firstName'];
$Nachname = $_POST['lastName'];
$_SESSION['Login'] = true;
header("Location: index.html");
?>

