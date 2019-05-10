<table>
<tr><th>ID</th> <th>First Name</th> <th>Last Name</th></tr>
<?php
for($counter = 0; $counter<count($user); $counter++)
    echo "<tr><td>".$user[$counter][0]." </td><td> ".$user[$counter][1]." </td><td> ".$user[$counter][2]."</td></tr>";
?>
</table>