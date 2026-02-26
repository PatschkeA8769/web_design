<?php
$day = "Mon";
switch ($day)
{
    case "Mon":
        echo "<p>The day is Monday</p>";
    break;
    case "Tue":
        echo "<p>The day is Tuesday</p>";
    break;
    case "Wed":
        echo "<p>The day is Wednesday</p>";
    break;
    case "Thu":
        echo "<p>The day is Thursday</p>";
    break;
    case "Fri":
        echo "<p>The day is Friday</p>";
    break;
    case "Sat":
        echo "<p>The day is Saturday</p>";
    break;
    case "Sun":
        echo "<p>The day is Sunday</p>";
    break;
    default:
        echo "<p>Please enter the first three letter of the day.</p>";
    break;
}
?>