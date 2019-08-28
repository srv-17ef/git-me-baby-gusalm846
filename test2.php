<?php

$person = 'Peter';
$surn = 'Griffin';
$age = '48';
$iq = '25';
$weight = '233';
$car = 'fiat 500';
if($iq<$weight){
    $df = ' is dumb and fat';
}


echo '<h1>Family Guy</h1>';
echo $person.' '.$surn;
echo $df;

switch($iq){
    case 1;
        echo 'ge upp';
        break;
    case 30;
        echo 'still dumb <br>';

     case 25;
     echo '<br>hopeless';
     break;
}


