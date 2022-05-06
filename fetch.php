<?php
    $conn = mysqli_connect('localhost', 'root', '', 'task');
    $sql = 'SELECT * FROM test WHERE lname="mali" ORDER BY age';
    $result = mysqli_query($conn, $sql);
    while($a = mysqli_fetch_assoc($result)) {
            if($a['age'] == '12') {
            echo "<h1 style='text-decoration: line-through;'>".$a['fname']." ".$a['lname']." ".$a['age']."</h1>";
            }
            else {
                echo "<h1 >".$a['fname']." ".$a['lname']." ".$a['age']."</h1>";
  
            }
    }
?>