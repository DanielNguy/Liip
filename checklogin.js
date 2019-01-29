var email = "<?php echo $email?>";

function checklogin(){
    if (document.getElementById('inputEmail').value !== email) {
        document.getElementById('loginbutton').disabled = true;
    }
}

