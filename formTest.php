<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .error{
        color:red;
    }
</style>
<body>
<!--                                                                        to enshure that key is exixt-->

<!--<form action="" method="post">-->
<!--    <label for="title">idel title </label>-->
<!--    <input type="text" name="title" value= "--><?php // if(isset($_POST['title'])) echo $_POST['title']; else  echo "enter your title"?><!--" >-->
<!--    <hr>-->
<!--    <label for="title">idel text</label>-->
<!--    <textarea name="text" id="" cols="30" rows="10">--><?php // if(isset($_POST['text'])) echo $_POST['text']; else  echo "enter idea"?><!--</textarea>-->
<!--    <hr>-->
<!--    <input type="submit" name="submit" value="save your idea">-->






    <?php

    /*
if(isset($_POST['title'])) {
    echo $_POST['title'];
}
echo"<br>";
if(isset($_POST['text'])) {
    echo $_POST['text'];
}

    */

                                                                      #PHP Form Validation && Validate E-mail and URL && Required Fields

// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = " * Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "* Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
        }
    }
    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }
    if (empty($_POST["gender"])) {
        $genderErr = "* Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 Name: <input type="text" name="name">
    <span class="error"> <?php echo $nameErr;?></span>
<br><br>
 E-mail: <input type="text" name="email">
    <span class="error"> <?php echo $emailErr;?></span>
 <br><br>
 Website: <input type="text" name="website">

 <br><br>
 Comment: <textarea name="comment" rows="5" cols="40"></textarea>

 <br><br>
 Gender:
 <input type="radio" name="gender" value="female">Female
 <input type="radio" name="gender" value="male">Male
 <input type="radio" name="gender" value="other">Other
    <span class="error"> <?php echo $genderErr;?></span>
<br><br>
 <input type="submit" name="submit" value="Submit">
</form>

<?php

echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;

?>

</body>
</html>









