<?php
require_once 'myfuncs.php';
$funcs = new myfuncs;
?>

<!DOCTYPE html>
<html lang ="en">
<head>
<meta charset="UTF-8">
<title>Who Am I</title>
</head>
<body>
<h2>Hello My User ID Is: <?php echo " ".$funcs->getUserId(); ?></h2><br>
</body>
</html>