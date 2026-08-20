<?php

$gusion_data_structures = 85;

$gusion_database_management = 80;

$gusion_web_development = 88;

$gusion_system_analysis = 89;

$gusion_networking = 86;

$gusion_average = (
    $gusion_data_structures +
    $gusion_database_management +
    $gusion_web_development +
    $gusion_system_analysis +
    $gusion_networking
) / 5;

if ($gusion_average >= 74.5) {
    $gusion_remarks = "Passed";
} else {
    $gusion_remarks = "Failed";
}

if ($gusion_average >= 90) {
    $gusion_letter_grade = "A";
} elseif ($gusion_average >= 80) {
    $gusion_letter_grade = "B";
} elseif ($gusion_average >= 70) {
    $gusion_letter_grade = "C";
} elseif ($gusion_average >= 60) {
    $gusion_letter_grade = "D";
} else {
    $gusion_letter_grade = "F";
}

echo "Average Grade: " . $gusion_average . "<br>";
echo "Remarks: " . $gusion_remarks . "<br>";
echo "Letter Grade: " . $gusion_letter_grade;

?>