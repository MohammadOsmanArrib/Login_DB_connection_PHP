<?php
        require_once('db_connection.php');
        //require_once('Login.php');
        
        $user_input = $_POST['username'];
        $pass_input = $_POST['password'];
        //get user from users table of Money transfer database
        $q_users = "select User_Name, Password from users where User_Name= '$user_input' and Password= '$pass_input' ";
        $result = $conn->query($q_users);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc())
            {
                echo "User Name: " . $row['User_Name'] . "<br>" . "Password: " . $row['Password'] . "<br>";
            }
        } 
        else 
        {
            echo "Login Faild!";
        }
        // $conn->close();
    
    ?>
