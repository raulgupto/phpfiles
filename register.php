<?php
    $con = mysqli_connect("localhost", "root", "", "getrooms");
    
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $contactnumber=$_POST["contactnumber"];
    $gender = $_POST["gender"];
    $dateofbirth = $_POST["dateofbirth"];

    $statement = mysqli_prepare($con, "INSERT INTO user (name,username, password, contactnumber,gender,dateofbirth) VALUES (?, ?, ?, ?,?,?)");
    mysqli_stmt_bind_param($statement, "ssssss", $name, $username, $password,$contactnumber,$gender,$dateofbirth);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
