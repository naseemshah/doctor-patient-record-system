
<?php
         include 'assets/php/config.php';
         include 'assets/php/logincheck.php';
      
        $PID=$NAME=$AGE=$GENDER=$DOB=$PHONE_NUMBER="";
         if($_SESSION["isDoc"]!=true){
            die ("You have no acess!");
          }
        
        
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
    <link rel="stylesheet" href="assets/css/dashstyle.css">
    <title>Add patient</title>

    
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <p class="font-weight-bold text-light govtText" >Doctor X's Clinic</p>
                
                <h3 class="text-center">Doctor's Dashboard</h3>
            </div>
    
            <ul class="list-unstyled components">
                
                <li>
                    <a href="doctordash.php">Doctor's Dashboard</a>
                </li>
                
                <li class="active">
                    <a href="add patient.php">Add Patients</a>
                </li>
                <li>
                    <a href="logout">Logout</a>
                </li>
                
            </ul>
        </nav>
        
        <div class="container-fluid dashboard-content" style="padding :0%;">
            <div id="sidebarCollapse">
                <img src="assets/img/menu.svg" alt="">
            </div>
            
            <div class="container-fluid navbar navbar-dark bg-primary pb-3 pt-3">
                <h1 class="text-light">Add patient</h1>
            </div> 
          
        


        
        <form action="add-patient.php" method="post" >     
            
            <div class="form-group row" style="padding-left:20px; padding-top: 20px; padding-right: 20px ;">
                <label for="P_id" class="col-sm-2 col-form-label">Patient ID</label>
                <div class="col-sm-5">
                <input disabled type="number" name="P_id" class="form-control" placeholder="Auto Generated" id="pid">                        
                </div>
            </div>
            <div class="form-group row" style="padding-left:20px; padding-top: 30px; padding-right: 20px ;">
                <label for="name" class="col-sm-2 col-form-label">Name </label>
                <div class="col-sm-5">
                    <input type="text" name="name"   class="form-control" id="name"  >
                </div>
            </div>
                    
            <div class="form-group row" style="padding-left:20px; padding-top: 20px; padding-right: 20px ;">
                <label for="Age" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-5">
                <input type="number" name="Age" class="form-control"  id="age">                
                </div>
            </div>
            
            <fieldset class="form-group" style="padding-left:20px; padding-top: 20px; padding-right: 20px ;" >
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    <div class="col-sm-5">
                        <div class="form-check">
                            <input class="form-check-input" name="gender" type="radio" name="gridRadios" id="gridRadios1" value="male" checked>
                            <label class="form-check-label" for="gridRadios1">
                            Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="gender" type="radio" name="gridRadios" id="gridRadios2" value="female">
                            <label class="form-check-label" for="gridRadios2">
                            Female
                            </label>
                        
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row" style="padding-left:20px; padding-top: 20px; padding-right: 20px ;">
                <label for="Dateofbirth" class="col-sm-2 col-form-label">Date of birth</label>
                <div class="col-sm-5">
                <input type="date" name = "dateofbirth" class="form-control" id="dob" >                
                </div>
            </div>
    
    
            <div class="form-group row" style="padding-left:20px; padding-top: 20px; padding-right: 20px ;">
                <label for="phoneno" class="col-sm-2 col-form-label">Mobile Number</label>
                <div class="col-sm-5">
                    <input type="number" name="phoneno" class="form-control" id="mob" >
                </div>
            </div>

            <div class="btn" style="padding-left:20px; padding-top: 20px; padding-right: 20px ;">
                <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                <a href="doctordash.php" class="btn btn-link btn-lg active"role="button" aria-pressed="true">Back</a>
            </div>
    
    </form>
         
                    
      <script>
        $(document).ready(function () {

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

        });
      </script>
</body>
</html>

<?php

            
            if(isset($_POST["name"])){
                $NAME=$_POST["name"];
          
                $AGE=$_POST["Age"];
           
                $GENDER=$_POST["gender"];
            
                $DOB=$_POST["dateofbirth"];
           
                $PHONE_NUMBER=$_POST["phoneno"];
                
                $sql = "INSERT INTO `patient` (`name`, `gender`, `dob`, `username`, `password`, `age`, `mob`) VALUES ('{$NAME}', '{$GENDER}', '{$DOB}', '{$NAME}{$DOB}', 'pass', '{$AGE}', '{$PHONE_NUMBER}')";
                // $sql = "INSERT INTO `patient` (`p_id`, `name`, `gender`, `dob`, `age`,`mob`) VALUES ($PID,$NAME,$GENDER, $DOB,$AGE ,$PHONE_NUMBER)";        
                if(mysqli_query($conn, $sql)){
                    echo "<div class='alert alert-success shadow' style='position: fixed; top: 50px; left: 50%; transform: translate(-50%);' role='aler'>
                    User Added Sucessfully
                    </div>";
                } else{
                    echo "<div class='alert alert-danger shadow' style='position: fixed; top: 50px; left: 50%; transform: translate(-50%);' role='aler'>
                   <strong>Error!</strong> ". mysqli_error($conn) . "</div>"; 
                }   
                
            }
        
        
          
     
    
        ?>

