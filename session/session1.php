<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// the value come with session2
//echo "my name is " . $_SESSION["name"] . ".<br>";
//echo " my id is " . $_SESSION["id"] . ".";



//$_SESSION['name']= "layan";
//isset($_SESSION['views'])?$_SESSION['views']++ :$_SESSION['views']=1;
//echo" welcome  " .$_SESSION['name'] . " view count is ". $_SESSION['views'];
//echo '<a href="views.php">about</a>';



if($_SERVER["REQUEST_METHOD"] == "POST"){
    if ($_POST['user'] === 'lena alnajjar'){
        $_SESSION['username'] = 'lena';
        $_SESSION['id'] = 20399;
    }
}
//echo '<pre>';
//print_r($_SESSION);
//echo '<pre>';
if (isset($_SESSION['id'])){
    echo" hello your id " .$_SESSION['id'] ;

}else{ // start else

    ?>
    <form action="#" method="post">
        <input type="text" name="user">
        <input type="submit" value="login">
    </form>
<?php } //end else
?>

<a href="logout.php">LOGOUT</a>



</body>
</html>



