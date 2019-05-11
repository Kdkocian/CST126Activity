<?php
include 'utility.php';
$utility = new utility();
$searchresult = $_POST['Search Bar'];
$user = $utility->getUsersbyFirstNAME($searchresult);
?>

<html>
<head>
<title>Search Results</title>
</head>
<body>
<?php 
echo "<p>".$_POST['Search Bar']."</p>";
include '_displayUser.php';
?>
</body>
</html>