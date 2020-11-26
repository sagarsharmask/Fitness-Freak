<?php
   $Name = $_POST['Name'];
   $Age = $_POST['Age'];
   $Gender = $_POST['Gender'];
   $Locality = $_POST['Locality'];
   $Email = $_POST['Email'];
   $Number = $_POST['Number'];
   
   $conn = mysqli_connect('127.0.0.1:3307','root','','bharatpurp');
   if(!$conn){
       die('Connection Failed  : '.mysqli_connect_error());
    //    console.log('test');
   }else{
       $stmt = $conn->prepare("insert into registration(Name,Age,gender,Locality,Email,Number)
       values(?,?,?,?,?,?)");
       $stmt->bind_param("sisssi",$Name,$Age,$Gender,$Locality,$Email,$Number);
       $stmt->execute();
       echo "registration successfully...";
       $stmt->close();
       $conn->close();
   }
?>