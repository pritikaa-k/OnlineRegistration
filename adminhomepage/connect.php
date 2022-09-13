<?php
  $coursecode = $_POST['coursecode'];
  $coursename = $_POST['coursename'];
  $L = $_POST['L'];
  $T = $_POST['T'];
  $P = $_POST['P'];
  $J = $_POST['J'];
  $totalcredits = $_POST['totalcredits'];

  //Database Connection
  $conn = new mysqli('localhost','root','','test');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into addcourses(coursecode,coursename,L,T,P,J,totalcredits) values(?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssi",$coursecode,$coursename,$L,$T,$P,$J,$totalcredits);
    $stmt->execute();
    echo Registration Successful;
    $stmt->close();
    $conn->close();
  }
 ?>
