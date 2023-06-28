<?php
    if (isset($_POST['send'])) {
        $from = "test@hostinger-tutorials.fr";
        $to = "marlexapong90@gmail.com";
        $subject = $_POST['objet'];
        $message = '<h1>Message envoyé depuis la page Contact de My porfolio</h1>
        <p><b>Email : </b>' . $_POST['email'] . '<br>
        <p><b>Téléphone : </b>' . $_POST['phone'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';
        $headers = "De :" . $from;
        
        $retour = mail($to,$subject,$message, $headers);
        if($retour)
            header('location: index.php?id="thank"');
    }
?>