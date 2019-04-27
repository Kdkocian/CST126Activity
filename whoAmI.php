<?php
require_once 'myfuncs.php';
$VariableName = new myfuncs();
$id = $VariableName -> getUserId();
?>

<!DOCTYPE html>
<html lang ="en">
<head>
<meta charset="UTF-8">
<title>Who Am I</title>
</head>
<body>
<h2>Hello My User ID Is: <?php echo $id; ?></h2><br>
</body>
</html>