<?php
include 'utility.php';
$utility = new utility();
$user = $utility->getUsersbyFirstNAME($_POST['Search Bar']);

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