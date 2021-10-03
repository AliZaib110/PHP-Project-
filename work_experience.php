<?php
include("connectionPakServe.php");
error_reporting(0);


if ($_SERVER['REQUEST_METHOD'] === 'POST')
// if($_POST['submit'])
  {
    $titl   = $_POST['title'];
    $msg    = $_POST['message'];

    if($titl!="" && $msg!="")
    {
        try{
      $query ="INSERT INTO work (title, message) VALUE ('$titl','$msg')";
     
      $data  =mysqli_query($conn, $query);
           }
       catch(Exception $er){
       echo 
       $er;    
       }
           
      if($data)
      {
        echo "Data inserted into batabase";
      }

    }
    else 
    {
      echo "All field required";
    }
    
  }
  else
  {
      echo "eroor";
  }

  ?>
    
    