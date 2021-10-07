 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Post Card</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs.font-awesome/5.13.0/css/all.min.css">
     <!-- <link rel="stylesheet" href="style.c"> -->

     <style>
         body {
             font-size: 14px;
         }
     </style>
 </head>

 <body>

     <div class="container">
         <h3 class="text-center mt-5">PakServe Jobs</h3>
     </div>
     <div class="container mt-5">

         <?php

            $server = "localhost";
            $user = "root";
            $pass = "";
            $database = "pakserve";

            $conn = mysqli_connect($server, $user, $pass, $database);
            // Check connection
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $result = mysqli_query($conn, "SELECT * FROM Post");

            echo "<table class='table table-dark'>
           <thead>
         <tr>
         <th scope='col'>Title</th>
         <th scope='col'>Description</th>
         <th scope='col'>Due Date</th>
         <th scope='col'>Price</th>
         <th scope='col'>Location</th>
         <th scope='col'>Apply</th>



          </tr>";

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['task_title'] . "</td>";

                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['due_date'] . "</td>";

                echo "<td>" . $row['budget'] . "</td>";

                echo "<td>" . $row['task_location'] . "</td>";
                echo "<td>" . "     <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#ModalLoginForm'>
           Apply
            </button>" . "</td>";

                echo "</tr>";
            }
            echo "</table>";

            mysqli_close($conn);


            ?>


         <!-- Modal HTML Markup -->
         <div id="ModalLoginForm" class="modal fade">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                      </div>
                     <div class="modal-body">
                    
                         <h1>Job Application</h1>
                         <form role="form" method="POST" action="">
                             <input type="hidden" name="_token" value="">
                             <div class="form-group">
                                 <label class="control-label">Username</label>
                                 <div>
                                     <input type="text" class="form-control input-lg" name="name" value="">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label class="control-label">E-Mail Address</label>
                                 <div>
                                     <input type="email" class="form-control input-lg" name="email" value="">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label class="control-label">Password</label>
                                 <div>
                                     <input type="password" class="form-control input-lg" name="password">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label class="control-label">Confirm Password</label>
                                 <div>
                                     <input type="password" class="form-control input-lg" name="password_confirmation">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div>
                                     <button type="submit" class="btn btn-success">
                                         Register
                                     </button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div><!-- /.modal-content -->
             </div><!-- /.modal-dialog -->
         </div><!-- /.modal -->



     </div>


     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


 </body>

 </html>