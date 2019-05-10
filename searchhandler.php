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
include '_displayUser.php';
?>
</body>
</html>