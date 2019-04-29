<?php
require_once 'myfuncs.php';
function getAllusers(){
    $db = new myfuncs();
    $conn = $db -> dbConnect();
       $sql = "SELECT ID, First_Name, Last_Name FROM users";
         $users = array();  
       $result = $conn->query($sql);
       
           while ($row = $result->fetch_assoc()){
               $users[] = array($row['ID'], $row['First_Name'], $row['Last_Name']);
           }
       close();
       return $users;
 }
?>