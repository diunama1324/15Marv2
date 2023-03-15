<?php
  // Get login credentials from form
  $username = $_POST['username'];
  $password = $_POST['password'];

  print_r($_POST);

  echo "Hello world!"; 

  //$conn = mysqli_connect('localhost', 'test', 'tester123', 'test');
  $conn = mysqli_connect('sql300.epizy.com', 'epiz_33397383', 'RfojI04ZR9x7I', 'epiz_33397383_beosys');
  mysqli_autocommit($conn, TRUE);

  $query="SELECT * FROM 'User_Login_Table' WHERE Name='$username' AND Password='$password'";
  $result = mysqli_query($conn, $query);

  if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
  }

  if (mysqli_num_rows($result) = 1) {
    // Login successful, redirect to desired website
    //echo nl2br("\n參與者攞咗禮物!✔️"); 

    $output = "Hello World!";
    echo $output;

    //header('Location: http://www.example.com/');
  } else {

    $output = "Bye World";
    echo $output;
    
  }

mysqli_close($conn);

?> 
