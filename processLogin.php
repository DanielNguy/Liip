<?php
/**
 * Created by PhpStorm.
 * User: danie
 * Date: 07.12.2018
 * Time: 14:15
 */

session_start();

$db = new SQLite3("Logindaten.db");

$email = $_POST["inputEmail"];
$password = $_POST["inputPassword"];

$query ="SELECT * from TLogindaten where email = '$email' and password = '$password'";
$result = $db->query($query);

$matchingRecords = $result->fetchArray(SQLITE3_ASSOC);

if ($matchingRecords){
    $_SESSION['email'] = $email;
    $_SESSION['Login'] = true;
    header("Location: index.php");
}else{
    echo "Invalid Login Credentials.";
}
?>

