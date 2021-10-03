<?php
include("connectionPakServe.php");
 
error_reporting(0);

    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
      
      $tn  = $_POST['taskname'];
      $des = $_POST['description'];
      $ol  = $_POST['online'];
      $lc  = $_POST['location'];
      $dt  = $_POST['date'];
      $nm  = $_POST['tskr'];
      $nbr = $_POST['bdgt'];
  
 
      if($tn!="" && $des!="" && $ol!="" && $lc!="" && $dt!="" && $nm!="" && $nbr!="")
      {
        echo $dt;
        try
        {
        $query ="INSERT INTO post(	task_title , description , post_type, task_location , due_date , tasker , budget  ) 
        VALUE ('$tn' , '$des' , '$ol' , '$lc' , '$dt' , '$nm' , '$nbr')";
        
        $data  =mysqli_query($conn, $query);
        }
        catch(Exception $er)
        {
 echo 
 $er;
        }
        // var_dump("hjiio");
        if($data)
        {
          header('Location: http://localhost/pakServe/post.html');

         

        }
  
      
      else 
      {
        echo "All field required";
      }
      
    }
  }
  else
  {
    echo "form error";
  }

  
    
    ?> 

