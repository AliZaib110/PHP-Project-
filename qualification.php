<?php
include("connectionPakServe.php");
error_reporting(0);



if ($_SERVER['REQUEST_METHOD'] === 'POST')
   
    {
    
    $nm     = $_POST['language'];
    $dgre   = $_POST['degree'];
    $inst   = $_POST['institute'];
    $drtn   = $_POST['duration'];
    

     
    if($nm!="" && $dgre!=""  && $inst!="" && $drtn!="")
    {
        try{
        $query = "INSERT INTO qualification (language, degree, institute, duration) VALUE ('$nm','$dgre','$inst' ,'$drtn') ";
       
        $data  = mysqli_query($conn, $query);
        }

        catch(Exception $er)
        {
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
            echo"All fields required";
        }

    }
    else
  {
      echo"eroor";
  }

    

    ?>
    
    
    
    
    
    