<?php
    $con = mysqli_connect("localhost", "root", "","getrooms");
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $response = array();
    $response["success"] = false;
    
    $query ="SELECT * from user where username= '$username' and password='$password' ";
   // mysql_select_db("getrooms");
    $sqlstatus =mysqli_query($con,$query);
    

    if(!$sqlstatus){
        die('Coul not query'.mysql_error());
    }

    $row=mysqli_fetch_array($sqlstatus,MYSQLI_ASSOC);

    if($row){
        //echo"success";
         $response["success"] = true;
         $response["user_id"] = $row["user_id"];
         $response["name"] = $row["name"];
        $response["username"] = $row["username"];
        $response["password"] = $row["password"];
        $response["contactnumber"] = $row["contactnumber"];
        $response["gender"] = $row["gender"];
        $response["dateofbirth"] = $row["dateofbirth"];


    }
    else{
       
        $response["success"] = false;  
    }
   
    
   echo json_encode($response);
?>
