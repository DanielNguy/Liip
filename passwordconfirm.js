 function check() {
     if (document.getElementById('inputPassword').value ===
         document.getElementById('confirmPassword').value) {
         document.getElementById('registerbutton').disabled = false;
     }else{
         document.getElementById('registerbutton').disabled = true;
     }
 }