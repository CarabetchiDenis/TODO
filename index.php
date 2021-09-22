<?php
$bdd = new PDO('mysql:host=localhost;dbname=TODOO;', 'root','');
if(isset($_POST['valider'])){
    if(!empty($_POST['message'])){        
        $message = htmlspecialchars($_POST['message']);   

        $insererMessage = $bdd->prepare('INSERT INTO messages(message) VALUES (?)');
        $insererMessage->execute(array( $message));
    } else {
        echo "Veuillez copmleter tous les champs...";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="#">
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Messagerie</title>
</head>
<body>
    <form action="" method="post" align="center">
        <div id="formulaire">                
        <textarea name="message" id="message" placeholder="écrire qqch..."></textarea>
        <br><br>
        <input type="submit"  onclick="get_insert()" name="valider">
        <button onclick="show_afficher()">Afficher</button>
        </div>
    </form>
    <section id="messages"  style="background:#ec4343;" ></section>


     <!-------INSERT------>
    <script>/*

        function get_insert() {
               
          document.getElementById("formulaire").innerHTML = loader;
   
           var message = $("#message").value();
              
           var xhttp = new XMLHttpRequest();
           xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
              document.getElementById("formulaire").innerHTML = this.responseText;
             }
            };
   
            xhttp.open("POST", "insertm.php", true);            
            xhttp.send();
        }  */

    </script>
    <!-----AFFICHER-------->
     <script>
        /*
        function get_afficher() {
            var loader =  '<div class="lds-ring"><div></div><div></div><div></div><div></div></div>';  
            document.getElementById("messages").innerHTML = loader;

            var m_message = document.getElementById("message").value;
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
             document.getElementById("message").innerHTML = this.responseText;
             }
            };

            xhttp.open("POST", "affm.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("submit=true&Message=" + m_message);
        }     */

    </script> 
     
    
</body>
</html>