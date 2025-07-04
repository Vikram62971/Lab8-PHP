<?php
$grade = 'A';

switch ($grade) {
    case 'A':
        echo "Excellent";
        break;
    case 'B':
        echo "Good";
        break;
    case 'C':
        echo "Fair";
        break;
    case 'D':
        echo "Passed";
        break;
    case 'F':
        echo "Failed";
        break;
    default:
        echo "Invalid grade";
        break;
}
?>
