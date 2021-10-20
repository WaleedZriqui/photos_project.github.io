<?php
$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo "connection success";
} else {
    echo "connection failed";
}

mysqli_select_db($con, 'photography');

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];

$query = "INSERT into users (name, email, number) values ('$name', '$email', '$number')";

mysqli_query($con, $query);

header('location: index.php #contact');
?>

// http get , post ,put , delete , patch
// get -> , facebook.com/bshodeh pathcvariable , update/user/1 , update?user=1
facebook.com?username=bshodeh url parameters ,
// post ->
// post --> json , formData