<?php
/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 29/10/15
 * Time: 15:17
 */

$monfichier = fopen('contact.txt', 'a+');

fputs($monfichier, 'nom: '.$_POST['name']."\n");
fputs($monfichier, 'telephone: '.$_POST['tel']."\n");
fputs($monfichier, 'email: '.$_POST['email']."\n");
fputs($monfichier, 'question: '.$_POST['ask']."\n");
fputs($monfichier, '    '."\n");
fputs($monfichier, '   --  '."\n");
fputs($monfichier, '     '."\n");

fclose($monfichier);

header('Location: ../index.html');

