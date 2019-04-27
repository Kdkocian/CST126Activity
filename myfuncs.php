<?php
class myfuncs{
function dbConnect() {
    $servername = 'localhost';
    $username = 'bubblepop';
    $password = 'bubbles';
    $dbname = 'users';
    //creates connection
   $conn =  new mysqli($servername, $username, $password, $dbname);
    //tests the connection
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
    function saveUserId($id){session_start();$_SESSION["USER_ID"] = $id;}
    function getUserId(){session_start();return $_SESSION["USER_ID"];}
}
?>