<?php
$bdd = new PDO('mysql:host=localhost;dbname=TODOO;', 'root','');

if(isset($_POST['valider'])){
    if(!empty($_POST['message'])){    

        $message = htmlspecialchars($_POST['message']);   

        $insererMessage = $bdd->prepare('INSERT INTO messages(message) VALUES (?)');
        $insererMessage->execute(array( $message,));
    } else {
        echo "Veuillez copmleter tous les champs...";
    }
}

$dbb->close();
?>