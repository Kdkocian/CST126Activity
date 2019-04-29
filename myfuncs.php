<?php
class myfuncs{
function dbConnect()
{
    $host = 'us-cdbr-iron-east-02.cleardb.net';
    $user = 'bf8f2518ac88f5';
    $dbpassword = '7d31dba5';
    $database = 'heroku_ff4f00db4526749';
    $conn = mysqli_connect($host, $user, $dbpassword, $database);
    if(mysqli_error($conn))
        die("Connection Failed: " . mysqli_connect_error());
        return $conn;
}

function saveUserId($id)
{
    session_start();
    $_SESSION["USER_ID"] = $id;
}

function getUserId()
    {session_start();
    return $_SESSION["USER_ID"];
    }

}
?>