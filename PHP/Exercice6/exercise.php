<?php
function easterReverse($fileOrigin) {
    $fileContent = file_get_contents($fileOrigin);
    
    //Length of the second part
    $secondPart = substr($fileContent, floor(strlen($fileContent) / 2));
    
    //Length of the first part
    $firstPart = substr($fileContent, 0, strlen($secondPart)-1);
    
    
    $file = fopen($fileOrigin, 'r+');
    
    
    fseek($file, strlen($firstPart), SEEK_SET);
    
    
    fwrite($file, strrev($secondPart), strlen($secondPart));
    
    
    
    fclose($file);
    
}