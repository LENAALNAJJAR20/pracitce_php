<?php

/*
  Cookies
  - Modify -- modify the value of cookies
  - Delete -- when time end to the cookies
  - Add Array -- below example
*/

setcookie("style[color]", "red",time() + (86400 * 30), "/");
setcookie("style[font]", "Tahoma",time() + (86400 * 30), "/");
setcookie("style[layout]", "boxed",time() + (86400 * 30), "/");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

if (isset($_COOKIE["style"])) {
    echo $_COOKIE["style"]["font"];
}



                                                            //Practice




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("background", $_POST["bg-color"], strtotime("+1 year"));
   header("Location: " . $_SERVER["REQUEST_URI"]);

}
if (isset($_COOKIE["background"])) {
    echo "<style>body { background-color: " . $_COOKIE["background"] . " }</style>";
}
?>

<form action="" method="POST">
    <input type="color" name="bg-color">
    <input type="submit" value="Choose Color">
</form>
