#1. Write a PHP program for print Previous semester Result using variables &
constants in PHP.

<?php
define("COLLEGE_NAME", "Marwadi University");

$name = "Vicky";
$semester = 5;
$marks = 450;
$total = 500;

$percentage = ($marks / $total) * 100;

echo "College: " . COLLEGE_NAME . "<br>";
echo "Student Name: $name <br>";
echo "Semester: $semester <br>";
echo "Marks: $marks / $total <br>";
echo "Percentage: $percentage%";
?>