<?php
    session_start();
    require_once 'connect.php';

    $connection = @new mysqli($host , $db_user , $db_password , $db_name);

        if ($connection->connect_errno !== 0)
        {
        echo "Error " . $connection->connect_errno;
        
        } else {

            $name = $_POST["character"];
            $username = $_SESSION['username'];
            $sentence = $_POST['bingo'];

        

            $find_id = "SELECT id FROM users WHERE username = '$username'";

            if($result1 = @$connection->query($find_id)){
                $record = $result1->fetch_assoc();
                $user_id = $record["id"];

            }
            $creating_bingo = "INSERT INTO bingos VALUES (NULL,'$user_id','$sentence','$name');";
            if($result2 = @$connection->query($creating_bingo)){
                $_SESSION["completed_character"] = 1;
            }
        }
    
    $connection->close();

    header("Location: index.php");
?>