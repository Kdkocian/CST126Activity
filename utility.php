<?php
session_start();
require_once 'myfuncs.php';
$db = new myfuncs();
$conn = $db -> dbConnect();
$arr = array();
$query = mysqli_query($conn, $sql);
function getAllusers(){
 if (mysqli_num_rows($result) > 0){
     while ($row = mysqli_fetch_assoc($result)){
         $data[] = $row;
 }
}
foreach ($data as $datas){
  echo $datas['ID']. " " .$datas['First_Name']. " ".$datas['Last_NAME'];
    }
}
close();
?>