<?php
include 'utility.php';
$utility = new utility();
$searchresult = $_POST['SearchBar'];
$user = $utility->getUsersbyFirstNAME($searchresult);
?>

<html>
<head>
<title>Search Results</title>
</head>
<body>
<?php 
echo "<p>".$_POST['SearchBar']."</p>";
include '_displayUser.php';
?>
</body>
</html>