<?php
function writeMsg(){
    echo "hello World";
}

writeMsg();
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

function familyName($fname){
    echo "$fname Koech. <br>";
}
familyName("Jane");
familyName("Harry");
familyName("Stacy");
familyName("Kai");
familyName("Kip");
echo "<br>";
echo "<br>";
echo "<br>";

function familyName2($fname,$year){
    echo "$fname Refsnes.Born in $year<br>";
}
familyName2("Hege","1975.");
familyName2("Stale","1978.");
familyName2("Kai Jim","1983.");
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
function myCars($car,$location,$prices,$number,$bids){
    echo "I have a $car in $location going for $prices.Conatct me on $number.Bidding starts at $bids <br>";
    echo "<br>";
}
myCars("BMW","Nakuru","Ksh. 1.9M","0722556155","Ksh. 1.5M");
myCars("TOYOTA Corolla","Alabama","Ksh. 2M","0721477889","Ksh. 1.8M");
myCars("V8","Nyeri","Ksh. 8.9M","0789111234","Ksh. 8M");
?>