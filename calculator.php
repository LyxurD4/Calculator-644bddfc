<?php
echo "Rekenen zuigt, maar daar heb je mij voor neef. Pass me je operatie(+ , -)\n";
$a = readline();
echo "Sterk neef. Wats je eerste cijfer\n";
$b = readline();
echo "Je tweede getal?\n";
$c = readline();
if ($a == "+") {
    $berekening = $b + $c;
    echo "Je antwoord is : ". $berekening;
}
if ($a == "-")
    echo "Je antwoord is : ". ($b - $c);
?>