<?php
class myfuncs{
    function dbConnect() {
        $servername = 'us-cdbr-iron-east-02.cleardb.net';
        $username = 'bf8f2518ac88f5';
        $password = '7d31dba5';
        $dbname = 'heroku_ff4f00db4526749';
        //creates connection
        $conn =  new mysqli($servername, $username, $password, $dbname);
        //tests the connection
        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
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