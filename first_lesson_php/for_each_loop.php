<?php
$colors=array("red","green","yellow","blue");
foreach($colors as $value){
    echo "$value <br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);
foreach($age as $x => $val){
    echo "$x = $val <br>";
}
?>
