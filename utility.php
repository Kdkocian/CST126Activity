<?php
require_once 'myfuncs.php';
function getAllusers(){
    $db = new myfuncs();
    $conn = $db->dbConnect();
       $sql = "SELECT ID, First_Name, Last_Name FROM users";
         $users = array();  
       $result = mysqli_query($conn, $sql);
       
           while ($row = mysqli_fetch_array($result)){
               $users[] = array($row['ID'], $row['First_Name'], $row['Last_Name']);
           }
       close();
       return $users;
 }
?>