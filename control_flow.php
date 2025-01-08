<div>If else</div>
<?php
    $x = 10;

    if ($x > 0) {
        echo"Positive";
    }else{
        echo"Negetive";
    }
?>

<div>Switch</div>
<?php

switch ($x) {

    case 1:
        echo "one";
        break;
    case 2:
        echo "two";
        break;
    case 3:
        echo "tree";
        break;
    default:
        echo "Unknown";
    }
?>