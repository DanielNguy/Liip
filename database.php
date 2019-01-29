<?php
/**
 * Created by PhpStorm.
 * User: danie
 * Date: 21.12.2018
 * Time: 13:23
 */

$vorname = $_POST["firstName"];
$nachname = $_POST["lastName"];
$email = $_POST["inputEmail"];
$password = $_POST["inputPassword"];


$db = new SQLite3("Logindaten.db");

/* Tabelle mit Primärschlüssel erzeugen */
$db->exec("CREATE TABLE IF NOT EXISTS TLogindaten (id INTEGER PRIMARY KEY AUTOINCREMENT, vorname, nachname, email, password);");

/* Datlen einlese */
$db->query("INSERT INTO TLogindaten (id, vorname, nachname, email, password) VALUES (null, '".$vorname."', '".$nachname."', '".$email."', '".$password."')");

$db->close();

header('Location: login.html');

