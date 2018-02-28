<?php
function getAllMondaysOfMonth(int $year, int $month):array {
    
    //Creat an array $mondays = []
    $mondays= [];
    
    //Get first monday
    $currentMonth = DateTime::createFromFormat('Ym', $year.$month);
    $firstMonday = new DateTime('first monday of' . $currentMonth->format('F Y'));
    
    //create interval to hold next mondays
    $interval = DateInterval::createFromDateString('next monday');
    
    //get last monday    
    $lastMonday = new DateTime('last monday of' . $currentMonth->format('F Y'));
    
    //Condition while monday is not in array then I add the first monday to the array
    while($firstMonday <= $lastMonday){
        $mondays[] = $firstMonday->format('l j, M Y');
        $firstMonday -> add($interval);
    }
    var_dump($mondays);
    return $mondays;
}