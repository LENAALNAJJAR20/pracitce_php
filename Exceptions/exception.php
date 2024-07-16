<?php
//function divide($num1, $num2) {
//    if($num2 == 0) {
//        throw new Exception("Division by zero");
//    }
//    return $num1 / $num2;
//}
//
//echo divide(5, 1);
//echo "<br>";
//echo divide(5, 1);
//echo "<br>";
//echo divide(5, 3);
//
//

echo "<br>";

function divide2($dividend, $divisor) {
    if($divisor == 0) {
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}
try {
    echo divide2(5, 0);
} catch(Exception $e) {
    echo "Unable to divide.";
} finally {
    echo "<br>";
    echo "code done !";
}
?>
