<?php
$password;
$salt;

$passwordFirstPartLength = floor(strlen($password)/2)+(strlen($password)%2);
$passwordSecondPartLength = ceil(strlen($password)/2);

$passwordFirstPart= substr($password,0,$passwordFirstPartLength);
$passwordSecondPart=substr($password,$passwordFirstPartLength,$passwordSecondPartLength);

$saltedPassword = $passwordFirstPart. $salt. $passwordSecondPart;
echo $saltedPassword;
