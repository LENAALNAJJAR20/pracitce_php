<?php

//Validating data = Determine if the data is in proper form.

//Sanitizing data = Remove any illegal character from the data.

                                        // Validating Filters
$bool = "lena";
var_dump(filter_var($bool,FILTER_VALIDATE_BOOLEAN,FILTER_NULL_ON_FAILURE));
 echo "<br>";

$url = "https://www.w3schools.com/?=100";
var_dump(filter_var($url, FILTER_VALIDATE_URL,
    ["flags"=> FILTER_FLAG_QUERY_REQUIRED|FILTER_NULL_ON_FAILURE|FILTER_FLAG_PATH_REQUIRED]));
echo "<br>";

$ip = "192.168.2.1";
var_dump(filter_var($ip, FILTER_VALIDATE_IP,
    ["flags"=>  FILTER_FLAG_IPV6|FILTER_NULL_ON_FAILURE]));

echo "<br>";

$mac = "00-B0-D0-63-C2-26";
var_dump(filter_var($mac,FILTER_VALIDATE_MAC,FILTER_NULL_ON_FAILURE));
echo "<br>";


$email = "lenaalnajjar@yahoo.com";
var_dump(filter_var($email,FILTER_VALIDATE_EMAIL,FILTER_NULL_ON_FAILURE));
echo "<br>";


//$int = "999g";
$int = "999";
var_dump(filter_var($int,
    FILTER_VALIDATE_INT,
    ["flags"=> FILTER_NULL_ON_FAILURE,"options" =>["min_range"=> 100, "max_range"=>2000]]
));
echo "<br>";

$float = "999.88";
var_dump(filter_var($float,
    FILTER_VALIDATE_FLOAT,
    ["flags"=> FILTER_NULL_ON_FAILURE,"options" =>["min_range"=> 100, "max_range"=>2000]]
));
echo "<br>";

                                                        // Sanitizing Filters

$email = "lenaalnajjar@yahoo.com";//remove all but letters , digits , spical characher
var_dump(filter_var($email,FILTER_SANITIZE_EMAIL));
echo "<br>";

$int = "100+99 hhhh-77"; // remove any thing expect + - and return as string
var_dump(filter_var($int,FILTER_SANITIZE_NUMBER_INT));
echo "<br>";


$float = "1,950,150.564www3"; // remove any thing expect + -
var_dump(filter_var($float,FILTER_SANITIZE_NUMBER_FLOAT,
["flags"=>FILTER_FLAG_ALLOW_FRACTION|FILTER_FLAG_ALLOW_THOUSAND]));

echo "<br>";

$url = "http://       zer }}}";//remove all but letters , digits , spical characher
var_dump(filter_var($url,FILTER_SANITIZE_URL));
echo "<br>";


                                                 //  filter_input




// echo $_GET["num"];

echo filter_input(INPUT_POST, "num", FILTER_SANITIZE_NUMBER_INT);

?>

<form action="" method="POST">
 <input type="text" name="num">
 <input type="submit" value="Send">
</form>






