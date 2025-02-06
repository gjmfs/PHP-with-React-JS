<?php
    include "./config.php";
    header("Access-Control-Allow-Origin:*");
    header("Access-Control-Allow-Headers:*");
    
    $method= $_SERVER["REQUEST_METHOD"];
    switch($method){
        case "POST":
            $user=json_decode(file_get_contents("php://input"));
            $sql="insert into user(name,email)values(?,?)";
            $stmt= $conn->prepare($sql);
            $stmt->bind_param("ss",$user->name,$user->email);

            if($stmt->execute()){
                $response = ['status' => 1, 'message' => "User Record added successfully"];
            }else{
                $response=['status'=> 0 , 'message' => "Failed to create an recode"];
            }
            break;
    }
?>