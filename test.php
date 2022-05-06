<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];

    $conn = mysqli_connect('localhost', 'root', '', 'task');
    $sql = "INSERT INTO test values ('$fname','$lname','$age')";
    mysqli_query($conn, $sql);
?>