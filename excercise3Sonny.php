<?php

$month = date("M");


if ($month == "9")
{
    echo "It's" . $month . ", This is Month-name so i don't have any holidays.";
}
else
{
    echo "Not August, this is " . $month . " so i don't have any holidays.";
}

#1

$color = "red";

if ($color == "red")
{
    echo "<br>" . "The color is red";
}
else
{
    echo "<br>" . "The color is not red";
}

#2

$StudentsGrade = 50;

if($StudentsGrade >= 80)
{
    echo "<br>" . "Excellent";
}
else if($StudentsGrade >= 70)
{
    echo "<br>" . "Great";
}
else if($StudentsGrade >= 60)
{
    echo "<br>" . "Good";
}
else if($StudentsGrade >= 50)
{
    echo "<br>" . "Pass";
}
else if($StudentsGrade < 50)
{
    echo "<br>" . "Fail";
}

#3



?>