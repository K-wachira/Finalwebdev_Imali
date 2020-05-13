<?php
// print_r($_POST);
    $Username = $_POST['Username'];
    // $lname = $_POST['lname'];
    // $email = $_POST['email'];
    $password = $_POST['Password'];
    // $gender = $_POST['gender'];
    // mysql://bf3e8d75a985ac:7e4d6ba1@us-cdbr-east-06.cleardb.net/heroku_89def9d4932c331?reconnect=true
    if (!empty($Username) || !empty($password)) {
        // $host = "localhost";
        // $dbUsername = "id13523093_root";
        // $dbPassword = "PcwXcYTD1(n_3~}<";
        // $dbname = "id13523093_galore_database";
        $host = "us-cdbr-east-06.cleardb.net";
        $dbUsername = "bf3e8d75a985ac";
        $dbPassword = "7e4d6ba1";
        $dbname = "heroku_89def9d4932c331?";
        // create a connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if (mysqli_connect_error()) {
            die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());

        } else {
            $SELECT = "SELECT user_names, user_password from galore_table Where user_names = ? Limit 1";
            // $INSERT = "INSERT Into register (Username, userpassword) values(?, ?)";

            // Prepare statement
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $Username);
            $stmt->execute();
            $result = mysqli_stmt_get_result($stmt);
            // $rnum = $stmt->num_rows;
            if ($result->num_rows == 0) {
                header("Location: index.html");
                exit();
            } else {
                if ($data = $result->fetch_array(MYSQLI_BOTH)) {
            if($password == $data['user_password']){header("Location: index.html");

            }   
                }
            }
            // if ($rnum == 0) {
            //     $stmt->close();
            //     $stmt = $conn->prepare($INSERT);
            //     $stmt->bind_param("ssssii", $Username, $password);
            //     $stmt->excute();
            //     echo "New record inserted";
            // } else {
            // if ($password =

            // )
            // }
            $stmt->close();
            $conn->close();
        }

    } 
    else {
        echo "ALl fields are required";
        die();
    }
    



?>