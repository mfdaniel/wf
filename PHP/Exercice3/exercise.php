<?php
var_dump($input);

$aResult = 0;
$bResult = 0;

foreach($input as $turn){
    $cardA= $turn[0];
    $cardB= $turn[1];
    
    if($cardA>$cardB){
        $aResult++;
    }else if($bResult>$cardA){
        $bResult++;
    }
}  

if($aResult>$bResult){
    $winner = 'A';
}else{
    $winner = 'B'; 
}