<?php
$favcolor = "blue";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br>";
$day=1 ;
switch ($day){
    case "1":
        echo "Today is Monday";
        break;
    case "2":
        echo "Today is Tuesday";
        break;
    case "3":
        echo "Today is Wednesday";
        break;
    case "4":
        echo "Today is Thursday";
        break;
    case "5":
        echo "Today is Friday";
        break;
    case "6":
        echo "Today is Saturday";
        break;
    default:
        echo "Your day is not the calendar";
}



?>