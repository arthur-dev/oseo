<?php
session_start();

$monfichier = fopen('signin.txt', 'a+');

fputs($monfichier, 'nom: '.$_POST['name']."\n");
fputs($monfichier, 'telephone: '.$_POST['tel']."\n");
fputs($monfichier, 'email: '.$_POST['email']."\n");

fputs($monfichier, 'date: '.$_POST['date']."\n");
fputs($monfichier, '    '."\n");
fputs($monfichier, '   --  '."\n");
fputs($monfichier, '     '."\n");

fclose($monfichier);



$_SESSION['msg']="Votre pré-inscription à bien été prise en compte";

header('Location: ../index.html');
