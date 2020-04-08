<?php
        include 'assets/php/config.php';
        include 'assets/php/logincheck.php';
        //there is no get vairable
        if(!isset($_GET['id'])){
            die("This page does not exist");
        }
        elseif(($_SESSION['isDoc']!=true)){                 
                die('<strong>You have no Acess to this page!</strong> Please Try <a href="/login2">  Logging in Again!</a> with different account.');
            }
        $pid=$_GET['id'];
        $sql = "SELECT *  FROM `patient` WHERE `p_id` =".$pid.";";        
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck>0){
            $row = mysqli_fetch_assoc($result);
            $name= $row['name'];
            $age = $row['age'];            
            $gender = $row['gender'];  
        }
        $sql2 = "SELECT *  FROM `prescription` WHERE `pid` =".$pid." ORDER BY `date` DESC;";        
        $result2 = mysqli_query($conn, $sql2);
        $resultCheck2 = mysqli_num_rows($result2);
        
        
?>


<!-- 39th linil anu ningal coe ezhuthendath -->
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
    <style>
        .flex{
            display: flex;
        }
    </style>
    <title>Dashboard</title>
    <link rel="icon" href="assets/img/title-icon.png">
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
                
                <li class="active">
                    <a href="#">Patients</a>
                </li>
                
                <li>
                    <a href="logout">Log out</a>
                </li>
                
            </ul>
        </nav>
        
        <div class="container-fluid p-0 dashboard-content">
           
            <h1 class="p-3 bg-primary text-white">
            <div id="sidebarCollapse">
                <img src="assets/img/menu.svg" alt="">
            </div>
            <?php  echo $name ?>'s Details
            </h1>
            
            <div class="row p-3">
                <div class="col col-12 col-lg-8 col-md-10 mx-auto mb-3">
                    <a href="" class="btn btn-danger mb-3">Add precription</a>
                    <a href="" class="btn btn-primary mb-3">Add  Medical Report</a>
                    


                    <div class="card">
                        <h2 class="m-1 p-2 text-center font-weight-bold">Patient's details</h2>
                        <hr>
                        <div class="row">
                            <div class="col  p-2 col-11 col-sm-11 col-md-5 mx-auto flex">
                                <h5 class="p-1 m-1 bg-dark rounded text-white">Name: </h5>
                                <p class="p-1 m-1 font-weight-bold text-dark"><?php echo $name; ?></p>
                            </div>
                            <div class="col   p-2 col-11 col-sm-11 col-md-5 mx-auto flex">
                                <h5 class="p-1 m-1 bg-dark rounded text-white">Age: </h5>
                                <p class="p-1 m-1 font-weight-bold text-dark"><?php echo $age; ?></p>
                            </div>
                            <div class="col   p-2 col-11 col-sm-11 col-md-5 mx-auto flex">
                                <h5 class="p-1 m-1 bg-dark rounded text-white" >Gender: </h5>
                                <p class="p-1 m-1 font-weight-bold text-dark"><?php echo $gender; ?></p>
                            </div>
                            <div class="col   p-2 col-11 col-sm-11 col-md-5 mx-auto flex">
                                <h5 class="p-1 m-1 bg-dark rounded text-white">Patient ID:</h5>
                                <p class="p-1 m-1 font-weight-bold text-dark"><?php echo $pid; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-3">
            <div class="col col-12 col-lg-6 col-md-12 mx-auto mt-3 mb-3">
                    <div class="card">
                        <h2 class="m-1 p-2 text-center font-weight-bold">Last Precription</h2>
                        <hr>
                        <?php
                            if($resultCheck2>0){
                                
                                for ($x = 0; $x < $resultCheck2; $x++) {
                                    $row2 = mysqli_fetch_assoc($result2);
                                    
                                    if($x==0){
                                        echo "<div class='row rounded bg-light m-2 p-1  shadow'>
                                        <div class='col col-11 col-sm-11 col-md-5 flex'>
                                            <h5 class='p-1 m-2 bg-dark rounded text-white shadow'>{$row2['date']}</h5>
                                        </div>
                                        <div class='col col-12  flex '>
                                            <p class='font-weight-bold text-dark text-break'>
                                            {$row2['prescription']}
                                            </p>
                                        </div>  
                                    </div>";
                                    }else{
                                        echo "<div class='row rounded bg-light m-2 p-1 collapse shadow' id='collapsePrescription'>
                                        <div class='col col-11 col-sm-11 col-md-5 flex'>
                                            <h5 class='p-1 m-2 bg-dark rounded text-white shadow'>{$row2['date']}</h5>
                                            
                                        </div>
                                        <div class='col col-12 flex '>
                                            
                                            <p class='font-weight-bold text-dark text-break'>
                                            {$row2['prescription']}
                                            </p>
                                        </div>  
                                    </div>";
                                    }
                                    
                                }
                                $row2=null;
                                
                            } else{
                                echo '<div class="alert alert-secondary m-2" role="alert">
                                No prescriptions Found
                                </div>';
                            }
                        ?>
                        
                       

                       
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-primary m-2 float-right" id="prescriptionButton" data-toggle="collapse" href="#collapsePrescription" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Show all prescriptions
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-lg-6 col-md-12 mx-auto mt-3 mb-3">
                    <div class="card">
                        <h2 class="m-1 p-2 text-center font-weight-bold">Last Medical Report</h2>
                        <hr>
                        <?php
                            $result2 = mysqli_query($conn, $sql2);
                            $resultCheck2 = mysqli_num_rows($result2);

                            if($resultCheck2>0){
                                
                                for ($x = 0; $x < $resultCheck2; $x++) {
                                    
                                    $row2 = mysqli_fetch_assoc($result2);
                                    
                                    if($x==0){
                                        echo "<div class='row rounded bg-light m-2 p-1  shadow'>
                                        <div class='col col-11 col-sm-11 col-md-5 flex'>
                                            <h5 class='p-1 m-2 bg-dark rounded text-white shadow'>{$row2['date']}</h5>
                                        </div>
                                        <div class='col col-12  flex '>
                                            <p class='font-weight-bold text-dark text-break'>
                                            {$row2['report']}
                                            </p>
                                        </div>  
                                    </div>";
                                    }else{
                                        echo "<div class='row rounded bg-light m-2 p-1 collapse shadow' id='collapseReport'>
                                        <div class='col col-11 col-sm-11 col-md-5 flex'>
                                            <h5 class='p-1 m-2 bg-dark rounded text-white shadow'>{$row2['date']}</h5>
                                            
                                        </div>
                                        <div class='col col-12 flex '>
                                            
                                            <p class='font-weight-bold text-dark text-break'>
                                            {$row2['report']}
                                            </p>
                                        </div>  
                                    </div>";
                                    }
                                    
                                }
                                
                                
                            } else{
                                echo '<div class="alert alert-secondary m-2" role="alert">
                                No prescriptions Found
                                </div>';
                            }
                        ?>

                        <!-- <div class="row rounded bg-light m-2 p-1  shadow">
                            <div class="col col-11 col-sm-11 col-md-5 flex">
                                <h5 class="p-1 m-2 bg-dark rounded text-white shadow">12/03/2020</h5>
                                
                            </div>
                            <div class="col col-lg-10  flex ">
                                
                                <p class="font-weight-bold text-dark text-break">sjnjsnzjn,sahdbasbkdb,sadbkjaszjkdn,slzdnlkasnz,skjjbdcj,sdbckjsd
                                    dskfclksdlknclksndlkc,
                                    sdkclskdzlkfcs,
                                    'dzxckjskjdnvkjsn'
                                </p>
                            </div>  
                        </div>
                        <div class="row rounded bg-light m-2 p-1 collapse shadow" id="collapseReport">
                            <div class="col col-11 col-sm-11 col-md-5 flex">
                                <h5 class="p-1 m-2 bg-dark rounded text-white shadow">12/03/2020</h5>
                                
                            </div>
                            <div class="col col-lg-10  flex ">
                                
                                <p class="font-weight-bold text-dark text-break">sjnjsnzjn,sahdbasbkdb,sadbkjaszjkdn,slzdnlkasnz,skjjbdcj,sdbckjsd
                                    dskfclksdlknclksndlkc,
                                    sdkclskdzlkfcs,
                                    'dzxckjskjdnvkjsn'
                                </p>
                            </div>  
                        </div> -->
                        

                        
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-primary m-2 float-right" id="reportButton" data-toggle="collapse" href="#collapseReport" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Show all medical reports
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            </div>         
        </div>
            
            

        
    </div>
    
      <script>
        $(document).ready(function () {

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

        });

            //script to change button text
        const button1 = document.getElementById("prescriptionButton");
        button1.addEventListener('click', function () {
            console.log("Inside");
            const prescription = document.getElementById("collapsePrescription");
            if (prescription.classList.contains("show")) {
                button1.textContent = "Show all prescriptions";
            } else {
                button1.textContent = "Hide all prescriptions";
            }
        });
        const button2 = document.getElementById("reportButton");
        button2.addEventListener('click', function () {
            console.log("Inside");
            const prescription = document.getElementById("collapseReport");
            if (prescription.classList.contains("show")) {
                button2.textContent = "Show all medical reports";
            } else {
                button2.textContent = "Hide all medical reports";
            }
        });
      </script>
</body>
</html>