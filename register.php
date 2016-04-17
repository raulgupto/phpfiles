<?php
    $con = mysqli_connect("localhost", "root", "", "getrooms");
    
    $name = $_POST["name"];
    $age = $_POST["age"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $contactnumber=$_POST["contactnumber"];

    $statement = mysqli_prepare($con, "INSERT INTO user (name, age, username, password, contactnumber) VALUES (?, ?, ?, ?,?)");
    mysqli_stmt_bind_param($statement, "sisss", $name, $age, $username, $password,$contactnumber);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
