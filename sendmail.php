<?php
function sendmail()
{

    $empfaenger = "daniel.nguy@stud.kftg.ch";
    $nachname = $_POST['nachname'];
    $vorname = $_POST['vorname'];
    $from = $_POST['email'];
    $text = $_POST['nachricht'];
    $msg = wordwrap($text, 70);
    mail($empfaenger, $msg, $from);


}

function sendenerfolgreich()
{
    exit();
}

if (array_key_exists('Abschicken', $_POST)) {
    sendmail();
    echo '<script type="text/javascript">';
    echo 'document.getElementById("sendsuccess").style.display = "block";';
    echo '</script>';
}
?>