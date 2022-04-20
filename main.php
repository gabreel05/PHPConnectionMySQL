<?php
    $connection = mysqli_connect("localhost:3306", "root", "puc2022", "project");

    $result = mysqli_query($connection, "SELECT * FROM users");

    $counter = 0;

    $return = [];

    while($row = mysqli_fetch_assoc($result)) {
        $return[$counter] = $row['user_name'];
        $counter++;
    }

    print_r($return);
?>
