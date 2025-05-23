<?php

$connect = mysqli_connect("localhost", "root", "", "rekam_medis");



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kd_user = mysqli_real_escape_string($connect, $_POST['kode']);
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);



    $query = "INSERT INTO login (kode_user, username, password) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($connect, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $kd_user, $username, $password);

        if (mysqli_stmt_execute($stmt)) {
            echo "New record created successfully.";
        } else {
            echo "Error executing statement: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($connect);
    }
}
mysqli_close($connect);
