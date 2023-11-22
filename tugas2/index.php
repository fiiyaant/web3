<?php

include "Models/Profile.php";
include "Controllers/Interested.php";
include "Controllers/Student.php";
include "Traits/Greet.php";

use Controllers\Interested;
use Controllers\Student;

$Insterested = new Interested("zizi", 21, "Game");
echo $Insterested->ME() . "<br>";

$Student = new Student("lili", 21, "Kpop");
echo $Student->ME() . "<br>";
