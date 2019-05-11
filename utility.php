<?php
require_once 'myfuncs.php';
class utility{
function getAllusers(){
    $db = new myfuncs();
    $conn = $db->dbConnect();
       $sql = "SELECT ID, First_Name, Last_Name FROM users";
         $users = array();  
       $result = mysqli_query($conn, $sql);
       
           while ($row = mysqli_fetch_array($result)){
               $users[] = array($row['ID'], $row['First_Name'], $row['Last_Name']);
           }
       mysqli_close($conn);
       return $users;
 }
function getUsersbyFirstNAME($searchbar){
    $db = new myfuncs();
    $conn = $db -> dbConnect();
    $searchresult = mysqli_real_escape_string($conn, $searchbar);
    $sql = "SELECT * FROM users WHERE First_Name LIKE '%$searchresult%'";
    $users = array();
    $result= mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
        $users[] = array($row['ID'], $row['First_Name'], $row['Last_Name']);
    }
    mysqli_close($conn);
    return $users;
}
}
?>