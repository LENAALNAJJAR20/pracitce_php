<?php
function callch($str) {
    return $str . "! ";
}

function ask($str) {
    return $str . "? ";
}

function printFormatted($str, $format) {
    // Calling the $format callback function
    echo $format($str);
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Are you here", "callch");
echo "<br>";
printFormatted("How are you", "ask");
?>