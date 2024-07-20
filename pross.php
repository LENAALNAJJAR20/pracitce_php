<?php
require_once('config.php');
?>

<?php
if (isset($_POST)) {

$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email= $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$password= sha1($_POST['password']);

$sql = "INSERT INTO people(firstname, lastname, email, phonenumber, password) VALUES (?,?,?,?,?)";
$inset = $db->prepare($sql);
$result = $inset->execute([$firstname,$lastname,$email,$phonenumber,$password]);
if ($result) {
echo "New record created successfully";
}else{
echo "error in inserting record";
}

}
else{
    echo 'no data';
}
?>