<?php 
include 'utility.php';
$user = new utility;
$user->insertUsers();
$user->getAllusers();


?>
<html>
<head>
</head>
<body>
<h2>Login was successful: <?php echo "" . $Uname ?></h2>
<?php include ('_displayUser.php');?>
<a href="whoAmI.php">Who Am I</a>
</body>
</html>