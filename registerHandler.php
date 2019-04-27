<?php

$blank = "";
$servername = 'localhost';
$username = 'bubblepop';
$password = 'bubbles';
$dbname ="users";
$fname = "";
$lname = "";
$uname = "";
$pword = "";
$errors = false;

include 'myfuncs.php';
$db = new myfuncs();
$conn = $db -> dbConnect();

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$uname = mysqli_real_escape_string($conn, $_POST['uname']);
$pword = mysqli_real_escape_string($conn, $_POST['pword']);

if ("$fname" == ($blank or NULL)){
    echo " The First Name cannot be blank ";
}
if ("$lname" == ($blank or NULL)){
    echo " The Last Name cannot be blank ";
}

// first check the database to make sure
// a user does not already exist with the same username 
$user_check_query = "SELECT * FROM users WHERE USERNAME='$uname' LIMIT 1";
$result = mysqli_query($conn, $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) { // if user exists
    if ($user['USERNAME'] === $uname) {
        $errors = true;
        echo "Username is in the Database";
    }
}
    // Register user if there are no errors, table also creates a default current date for when all users are registered to track when they joined
    if ($errors == false){
        $sql = "INSERT INTO users(First_Name, Last_Name, USERNAME, PASSWORD) VALUES('$fname', '$lname', '$uname', '$pword')";

        if ($conn->query($sql) == TRUE) {
            echo "New record created successfully";
        } 
        else {    
            echo "Adding Entry to Database failed"; 
        }
    }
    ?>