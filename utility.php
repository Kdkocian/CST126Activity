<?php
require_once 'myfuncs.php';
class utility{
    function getAllusers(){
            $db = new myfuncs();
                $conn = $db->dbConnect();
                       $sql = "SELECT * FROM users";
                       $users = array();  
                       $result = mysqli_query($conn, $sql);
                       
                           while ($row = mysqli_fetch_array($result))
                           {
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
                    while($row = mysqli_fetch_array($result))
                    {
                        $users[] = array($row['ID'], $row['First_Name'], $row['Last_Name']);
                    }
                    mysqli_close($conn);
                    return $users;
                }
                function insertUsers()
                {
                    $db = new myfuncs();
                    
                    $moreusers = array([Jekyll, Hyde, Halfandhalf, Evil],
                                      [Azathoth, Destroyer, Oldone, Ancient],
                                      [Cookie, Monster, Cookies4ever, Lovethem],
                                      [Bashful, shy, Danger, Noodle],
                                     );
                    
                    $conn = $db->dbConnect();
                    for($int = 0; $int < count($moreusers); $int++)
                    {
                        $fname = mysqli_real_escape_string($conn, $moreusers [$int][0]);
                        $lname = mysqli_real_escape_string($conn, $moreusers [$int][1]);
                        $uname = mysqli_real_escape_string($conn, $moreusers [$int][2]);
                        $pword = mysqli_real_escape_string($conn, $moreusers [$int][3]);
                    
                    $sql = "INSERT INTO users(First_Name, Last_Name, USERNAME, PASSWORD) VALUES ('$fname', '$lname', '$uname', '$pword')";
                    mysqli_query($conn, $sql);
                    }
                    
                    mysqli_close($conn);
            }   
          }
?>