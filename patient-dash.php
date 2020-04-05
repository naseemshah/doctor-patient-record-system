<?php
        include 'assets/php/config.php';

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
    <title>Dashboard</title>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <p class="font-weight-bold text-light govtText" >Doctor X's Clinic</p>
                
                <h3 class="text-center"><?php echo $_SESSION["p_id"] ?>'s Dashboard</h3>
            </div>
    
            <ul class="list-unstyled components">
                <li>
                    <a href="">John Doe's Dashboard</a>
                </li>
                <li class="active">
                    <a href="logout">Log out</a>
                </li>
            </ul>
        </nav>
        
        <div class="container-fluid p-0 dashboard-content">
            <div id="sidebarCollapse">
                <img src="assets/img/menu.svg" alt="">
            </div>
            <h1 class="bg-primary text-light p-3">John Doe</h1>
            <div class="row p-3">
                <div class="col col-12 col-md-11 col-lg-10 mx-auto mb-3">
                    <div class="card">
                        <div class="row">
                            <div class="col-12 col-lg-4 border-right">
                                <div class="col-10 mx-auto p-3">
                                    <img src="assets/img/naseem.jpg" alt="" class="dp rounded-circle img-thumbnail">
                                    <h4 class="mx-auto font-weight-bold text-center">Naseem Shah</h4>
                                    <p class="name text-dark my-2 mx-auto text-center">@ns4k_tv</p>
                                </div>
                            </div>
                            <div class="col-lg-8 border-left">
                                <div class="row mt-3">
                                    <div class="col-md-6 col-lg-4 py-3 my-3 mx-auto text-center text-lg-left">
                                        <h5>Gender</h5>
                                        <p>Male</p>
                                    </div>
                                    <div class="col-md-6 col-lg-4 py-3 my-3 mx-auto text-center text-lg-left">
                                        <h5>DOB</h5>
                                        <p>21/03/1999</p>
                                    </div>
                                    <div class="col-md-6 col-lg-4 py-3 my-3 mx-auto text-center text-lg-left">
                                        <h5>Phone</h5>
                                        <p>2389798237</p>
                                    </div>
                                    <div class="col-md-6 col-lg-4 py-3 my-3 mx-auto text-center text-lg-left">
                                        <h5>Patient ID</h5>
                                        <p>4563</p>
                                    </div>
                                    <div class="col-md-6 col-lg-4 py-3 my-3 mx-auto text-center text-lg-left">
                                        <h5>Status</h5>
                                        <p>Active</p>
                                    </div>
                                    <div class="col-md-6 col-lg-4 py-3 my-3 mx-auto text-center text-lg-left">
                                        <h5>Age</h5>
                                        <p>21</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-3">
            <div class="col col-12 col-lg-6 col-md-6 mx-auto mt-3 mb-3">
                    <div class="card">
                        <h2 class="m-1 p-2 text-center font-weight-bold">Last Precription</h2>
                        <hr>
                        <div class="row">
                            <div class="col ml-3 p-2 col-11 col-sm-11 col-md-5 flex">
                                <h5 class="p-1 m-1 bg-dark rounded text-white">12/03/2020</h5>
                            </div>
                            <div class="col p-2 m-1   col-lg-10  flex ">
                                
                                <p class="font-weight-bold text-dark p-3 m-1 text-break">sjnjsnzjn,sahdbasbkdb,sadbkjaszjkdn,slzdnlkasnz,skjjbdcj,sdbckjsd
                                    dskfclksdlknclksndlkc,
                                    sdkclskdzlkfcs,
                                    'dzxckjskjdnvkjsn'
                                </p>
                            </div>  
                        </div>
                        <div class="row collapse" id="collapsePrescription">
                            <div class="col ml-3 p-2 col-11 col-sm-11 col-md-5 flex">
                                <h5 class="p-1 m-1 bg-dark rounded text-white">12/03/2020</h5>
                            </div>
                            <div class="col p-2 m-1   col-lg-10  flex ">
                                
                                <p class="font-weight-bold text-dark p-3 m-1 text-break">sjnjsnzjn,sahdbasbkdb,sadbkjaszjkdn,slzdnlkasnz,skjjbdcj,sdbckjsd
                                    dskfclksdlknclksndlkc,
                                    sdkclskdzlkfcs,
                                    'dzxckjskjdnvkjsn'
                                </p>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-primary m-2 float-right" id="prescriptionButton" data-toggle="collapse" href="#collapsePrescription" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Show all prescriptions
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-lg-6 col-md-6 mx-auto mt-3 mb-3">
                    <div class="card">
                        <h2 class="m-1 p-2 text-center font-weight-bold">Last Medical Report</h2>
                        <hr>
                        <div class="row">
                            <div class="col ml-3 p-2 col-11 col-sm-11 col-md-5 flex">
                                <h5 class="p-1 m-1 bg-dark rounded text-white">12/03/2020</h5>
                            </div>
                            <div class="col p-2 m-1   col-lg-10  flex ">
                                
                                <p class="font-weight-bold text-dark p-3 m-1 text-break">sjnjsnzjn,sahdbasbkdb,sadbkjaszjkdn,slzdnlkasnz,skjjbdcj,sdbckjsd
                                    dskfclksdlknclksndlkc,
                                    sdkclskdzlkfcs,
                                    'dzxckjskjdnvkjsn'
                                </p>
                            </div>  
                        </div>
                        <div class="row collapse" id="collapseReport">
                            <div class="col ml-3 p-2 col-11 col-sm-11 col-md-5 flex">
                                <h5 class="p-1 m-1 bg-dark rounded text-white">12/03/2020</h5>
                            </div>
                            <div class="col p-2 m-1   col-lg-10  flex ">
                                
                                <p class="font-weight-bold text-dark p-3 m-1 text-break">sjnjsnzjn,sahdbasbkdb,sadbkjaszjkdn,slzdnlkasnz,skjjbdcj,sdbckjsd
                                    dskfclksdlknclksndlkc,
                                    sdkclskdzlkfcs,
                                    'dzxckjskjdnvkjsn'
                                </p>
                            </div>  
                        </div>
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