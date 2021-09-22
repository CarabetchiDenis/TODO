<?php

$dbb = new PDO('mysql:host=localhost;dbname=TODOO;', 'root','');
$recupMessages = $dbb->query('SELECT * FROM  messages');
while($message = $recupMessages->fetch()){
    ?>
    <div class="message">
        <h4><?=$message['message']; ?></h4>
    </div>

    <?php
     echo $row['message']; 
}
$dbb->close();

?>