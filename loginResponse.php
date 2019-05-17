
<html>
<head>
</head>
<body>
<h2>Login was successful: <?php echo "" . $Uname ?></h2>
<?php include ('_displayUser.php');?>
<?php 
include 'utility.php';
$utility = new utility();
$utility->insertUsers();
?>
<a href="whoAmI.php">Who Am I</a>
</body>
</html>7