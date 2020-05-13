<?php

    require_once('db.php');

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) )
    {   
        $first_name = $_POST['name'];
        $password =$_POST['password'];
        $email =$_POST['email'];
        $hashedpass = md5($password);
    }
  
    $query = "INSERT INTO galore_table(user_names, email, user_password) VALUES ('$first_name', '$email' ,'$hashedpass')";   
    echo $query;  
       
    $results = mysqli_query($connection, $query);
    


    if ($results)
    {
        // echo"Records have been successfully Added";
    header("Location: index.html");
    }
    
    else{
        echo "Not added".mysqli_error($connection);
    }

    // echo '<form name ="redirect_user"id = "redirect_user" method = "POST"'.  'action="'.$action_page.'">
    // <input type = text"text" name = "msg" value ="'.$msg.'"/>'
    // .' </form>';


    // // java script redirect

    // echo '<script language="Javascript" type = "text/javascript"> '
    // .'window.onload = function() { window.document.redirect_user.submit();}'. '</script>';


    

    

?>