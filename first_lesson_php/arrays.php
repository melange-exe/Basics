<?php
$cars=array("Volvo ","BMW ","Toyota ");
echo "I like $cars[0]",","," $cars[1]"," and"," $cars[2]","<br>";
$arraylength= count($cars);
for($x=0;$x<$arraylength;$x++){
 echo $cars[$x];
}

 echo "<br>";


echo "<br>";
echo "There are ",count($cars)," cars";
echo "<br>";
echo "<br>";
$fruits=array("banana","apple","lemon","melon","orange");
echo "The second fruit is $fruits[1]";
echo "<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
foreach($age as $x2 => $val) {
 echo "key=".$x2. ",Value=".$val;
 echo "<br>";
}
