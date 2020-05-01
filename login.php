<?php

    $Username = $_POST['username'];
    // $lname = $_POST['lname'];
    // $email = $_POST['email'];
    $password = $_POST['password'];
    // $gender = $_POST['gender'];

    if (!empty($Username) || !empty($password)) {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "galore_database";

        // create a connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if (mysqli_connect_error()) {
            die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());

        } else {
            $SELECT = "SELECT email from register Where email = ? Limit 1";
            $INSERT = "INSERT Into register (Username, password) values(?, ?, ?, ?, ?)";

            // Prepare statement
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssssii", $Username, $password);
                $stmt->excute();
                echo "New record inserted";
            } else {
                echo "Email already registed";
            }
            $stmt->close();
            $conn->close();
        }

    } 
    else {
        echo "ALl fields are required";
        die()
    



?>