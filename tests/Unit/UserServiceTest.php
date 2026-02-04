<?php

require_once __DIR__ .'/../../app/Service/UserService.php';

use App\Service\UserService;

$serviceObj = new UserService();


// $service_result = $serviceObj->difference(2,5);
// $comparing_result = abs(2 - 9);

// if($service_result == $comparing_result){
//     echo "Service Class Difference method Working\n";
// } else {
//     echo "Service Class Difference Method Not working\n";
// }
   

// $var = "        testUser     ";
// echo"\n";
// echo $var;
// echo "\n";
// $resultOfTrimmed = $serviceObj->nameTrimming($var);

// if(!str_contains($resultOfTrimmed, " "))
//     {
//         echo $resultOfTrimmed;
//         echo "\nTrim Funtion working\n";
//     }
$word = "@#Nit$%hi*(n";
echo $word;
$name = $serviceObj->specialCharacterRemoving($word);
$name = "*&^%".$name.")(";
if (ctype_alnum($name)){
    echo "\nspecial chars removed";
} else{
    echo "not removed";
}
