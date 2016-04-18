<?php
    $con = mysqli_connect("localhost", "root", "", "getrooms");
    
    $price = $_POST["price"];
    $bhk = $_POST["bhk"];
    $location = $_POST["location"];
    $balcony = $_POST["balcony"];
    // $mess=$_POST["mess"];

    $statement = mysqli_prepare($con, "INSERT INTO pg (price, bhk, location, balcony) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "issss", $price, $bhk, $location, $balcony);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
