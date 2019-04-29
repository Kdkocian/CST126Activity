
<?php
    //Open a connection
    require('myfuncs.php');
    $funcs = new myfuncs;
    $conn = $funcs->dbConnect();
    if(mysqli_error($conn))
    die("Connection Failed: " . mysqli_connect_error());
    
    $username = $_POST["Uname"];
    if($username == null)
    {
        echo 'You must fill out username';
        exit;
    }
    $password = $_POST["Pword"];
    if($password == null)
    {
        echo 'You must fill out the password';
        exit;
    }
    $sql = "SELECT * FROM user WHERE username='$username'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if($row["username"] == $username && $row["password"] == $password)
    {
        saveUserId($row["id"]);
        include('loginResponse.php');
    }
        
    else 
    {
        $message = "Login Failed";
        include('loginFailed.php');
    }

    mysqli_close($conn)
?>
<a href="index.html">Main Menu</a>