<?php
//sorting arrays

//    sort() - sort arrays in ascending order
//    rsort() - sort arrays in descending order
//    asort() - sort associative arrays in ascending order, according to the value
//    ksort() - sort associative arrays in ascending order, according to the key
//    arsort() - sort associative arrays in descending order, according to the value
//    krsort() - sort associative arrays in descending order, according to the key
echo "<br>";


$cars= array("Volvo", "BMW", "Toyota");
rsort($cars);


echo "<br>";
echo "<b> <i> <u> sorting arrays</u></i></b>";
echo "<hr>";
$cars= array("Volvo", "BMW", "Toyota");
rsort ($cars);
$rlength= count($cars);
for ($r=0; $r< $rlength; $r++){
    echo $cars[$r];
    echo "</br>";


}
//asort
$cars= array("Volvo", "BMW", "Toyota");
arsort ($cars);

$arlength= count($cars);
echo $arlength;
for(
    $ar=0; $arlength < 3; $ar++){
    echo $cars[$ar];
    echo "<br>";
}






?>
