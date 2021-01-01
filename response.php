<?php

if (isset($_post['submit'])) {
    $Name = $_Post['Name'];
    $Email = $_Post['Email'];
    $Message = $_Post['Message'];

    $mailTo () = "ubhatt00@leeu.edu"
    $headers = "From: " .$mailFrom;
    $txt = "You have a Message".$name.".\n\n".$message;

    mail($mailTo, $Message, $Name );
    header('Location: index.php?mailsend');
}