<?php
$db = new SQLite3("Logindaten.db");
$res = $db->query("SELECT * FROM TLogindaten");
/* Abfrageergebnis ausgeben */
while ($dsatz = $res->fetchArray(SQLITE3_ASSOC)) {
    echo $dsatz["vorname"] . ", "
        . $dsatz["nachname"] . ", "
        . $dsatz["email"] . ", "
        . $dsatz["password"] .  "<br>";
}
/* Verbindung zur Datenbankdatei wieder lösen */
$db->close();
?>