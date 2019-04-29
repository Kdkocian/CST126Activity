<?php
$blank = "";
$Uname = "";
$Pword = "";
include 'myfuncs.php';
$db = new myfuncs();
$conn = $db -> dbConnect();
$Uname = mysqli_real_escape_string($conn, $_POST['Uname']);
$Pword = mysqli_real_escape_string($conn, $_POST['Pword']);
if ($Uname == ($blank or NULL)){
    echo " The First Name cannot be empty";
}
if ($Pword == ($blank or NULL)){
    echo " The Password field is empty";
}
// checks to match username and password and logs in the users
    $result = mysqli_query($conn, "SELECT * From users Where USERNAME = '$Uname' and PASSWORD = '$Pword';")
        or die ("Failed to query database". mysqli_connect_error());
    $row = mysqli_fetch_array($result);
    if ($row['USERNAME'] == $Uname && $row['PASSWORD'] == $Pword ){
        $db->saveUserId($row['ID']);
        include 'loginResponse.php';
    } else{
        $message = 'Login Failed';
        include 'loginFailed.php';
    }
    ?>
<a href="index.html">Main Menu</a>