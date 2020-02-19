<?php
$cars = array(array("Volvo",22,18),array("BMW",15,13),array("Saab",5,2));
echo $cars[0][0].": In Stock :" .$cars[0][1]. ", sold: " .$cars[0][2]. "<br>";

echo $cars[1][0].": In Stock :" .$cars[1][1]. ", sold: " .$cars[1][2]. "<br>";

echo $cars[2][0].": In Stock :" .$cars[2][1]. ", sold: " .$cars[2][2]. "<br>";
echo "<br>";
for ($row = 0;$row < 3; $row++) {
    echo "<p><b>Row Number $row </b></p>";
    echo "<ul>";
    //loop through columns


    for ($col = 0; $col < 3; $col++) {
        echo "<li>". $cars[$row][$col] . "</li>";

    }
    echo "</ul>";
}
?>
