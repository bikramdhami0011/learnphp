<?php
$Conn = mysqli_connect("localhost", "root", "", "student") or die("connection failed");
$sqls = "SELECT * FROM `class`";
$result = mysqli_query($Conn, $sqls) or die("sql failed");
if (mysqli_num_rows($result) > 0) {

    echo '<table border="1px">  
         <tr> 
         <th>id</th>
         <th>name</th>
         </tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>{$row["id"]}</td><td>{$row["name"]}</td></tr>";
    }
    echo '</table>';
    mysqli_close($Conn);
} else {
    echo "No records found";
}
?>
