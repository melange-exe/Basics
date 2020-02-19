<?php
$kiswahili=80;
$english=56;
$maths=40;
$total=$kiswahili+$english+$maths;
$average=$total/3;
if($average>60){
    echo "You got 1st Division";
}else if ($average>50){
    echo "You got  2nd Division";
}else if ($average>35){
    echo "You got 3rd Division";
}else{
    echo "Failed";
}