<?php
    include 'assets/php/config.php';
    include 'assets/php/logincheck.php';
    if($_SESSION["isDoc"]!=true){
      die ("<h1>YOU HAVE NO ACCESS</h1>");
      
    }

    $sql = "SELECT * FROM `doctor`";
    $result=mysqli_query($conn,$sql);
    $resultCheck= mysqli_num_rows($result);
   
    
    if($resultCheck>0){
      $row = mysqli_fetch_assoc($result);
      $name = $row['name'];
      $age = $row['age'];
      $phone = $row['phone'];
    }


    $sqlp = "SELECT * FROM `patient`";
    $resultp = mysqli_query($conn,$sqlp);
    $resultCheck = mysqli_num_rows($resultp);


    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/dashboardstyle.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <p class="font-weight-bold text-light govtText" >Dr.Me's Clinic</p>
                
                <h3 class="text-center ">Doctor's Dashboard</h3>
            </div>

            <div style="margin-left: 60px;"> 
                <img src="assets/img/doctor.jpg" alt=" doctor" class="dp rounded-circle img-thumbnail" style="width: 70%;">
            </div>
    
            <ul class="list-unstyled components">
                
                <li class="active">
                    <p style="background-color:blue; padding-left: 15px;">Dashboard</p>
                    <p class="sidedoc"><?php echo $name; ?> <br> <br> <?php echo $phone; ?> <br> <br><?php echo $age; ?></p>
                    

                     
                </li>
                
                <li class="addpat">
                    <a href="/form" style="padding-left: 15px;">Add Patients +</a>
                </li>
                <div>
                <br>
                </div>
                <li class="addpat">    
                    <a href="/logout" style="padding-left: 15px;">Logout</a>
                </li>
                
            </ul>
              
           
            
        
          </nav>
        
        

        <div class="container-fluid dashboard-content" style="padding: 0%;">
            <div id="sidebarCollapse">
                <img src="assets/img/menu.svg" alt="">
            </div>
            <!-- evide ningale code ezhuthuka -->
            <div class=" container-fluid " style="background-color: blue; padding-top: 25px; padding-bottom: 20px;" >
                <h1 style="color:aliceblue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"> WELCOME DOCTOR</h1>
            </div>
            
             
            <!--Evide nammal logined usere name kodukka-->
            <br>
            <br>
            <br>
            <ul>
                <li style="font-family: monospace; list-style-type: square; font-size: 20pt; font-weight: 900; "> Patients list</li>
            </ul>

            <div class="row row-cols-1 row-cols-md-3" style="padding-left: 10px; padding-right: 15px;">
            
            <?php
               if($resultCheck>0){
                 while($row=mysqli_fetch_assoc($resultp)){
                   echo "<div class='col mb-4'>
                            <div class='card'>
                              
                              <div class='card-body' id='rcorners' style='background-color: white;'>
                                 <h5 class='card-title'><u>{$row['name']}</u></h5>
                                 <p class='card-text' id='pid' style='color: grey; font-family: monospace; font-size:16pt;'>Patient Id:{$row['p_id']}</p>
                                 <p class='card-text' style='color: grey; font-family: monospace; font-size:16pt;'>{$row['gender']}<br>{$row['dob']}<br>{$row['age']}</p>
                                 <a href='/patient?id={$row['p_id']}'>
                                     <div class='btn-btn-primary'>more</div>
                                 </a>
                                 
                                 </div>
                            </div>
                          </div>";
                         
                 }
               }
            ?>  
            


            <?php
if (isset($_POST['submit'])){
  header("Location: /login2");
}
?>



                
                
           


            



        </div>
    </div>

    



      <script>
        $(document).ready(function () {

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

        });


       
    });
      </script>
</body>
</html>