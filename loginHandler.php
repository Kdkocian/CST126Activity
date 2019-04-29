
<?php
require ('myfuncs.php');
$conn =  dbConnect();

$Uname = mysqli_real_escape_string($conn, $_POST['Uname']);
$Pword = mysqli_real_escape_string($conn, $_POST['Pword']);
if ($Uname == (NULL)){
    echo " The First Name cannot be empty";
}
if ($Pword == (NULL)){
    echo " The Password field is empty";
}

// checks to match username and password and logs in the users
$sql = "SELECT * From users Where USERNAME = '$Uname' and PASSWORD = '$Pword';";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($row['USERNAME'] == $Uname && $row['PASSWORD'] == $Pword ){
        saveUerId($row["ID"]);
        include 'loginResponse.php';
    } else{
        $message = 'Login Failed';
        include 'loginFailed.php';
    }
?>