<?php
    $conn = mysqli_connect("localhost", "root", "", "BookStore");
    if ($conn-> connect_error) {
        die("Connection failed:". $conn-> connect_error);
    }

    $query = "UPDATE Books SET Quantity = Quantity - 1 where ID = 1111";
    $query_run = mysqli_query($conn,$query);
?>