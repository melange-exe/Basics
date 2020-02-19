<?php
$array1=array("BMW"=>"Car","WaterMelon"=>"Fruits","Michael"=>"Student","eMobilis"=>"School","Kenya"=>"Country");
ksort($array1);
foreach ($array1 as $item1 => $item2 ){
    echo "$item1 --- $item2 <br>";
}
?>
