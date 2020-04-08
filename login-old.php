<?php 
    include 'assets/php/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="assets/img/title-icon.png">
    <!--Bootstrap Dependencies-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--   -->
</head>
<body class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="mt-5 mx-auto col-12">
            <h1 class="text-center text-white">Login</h1>
            </div>            
        </div>
        <div class="row">
            <div class="col-10 col-lg-6 col-md-8 mx-auto ">
            <div class="card bg-dark">
                    <div class="row">
                        <div class="col col-8  mx-auto">
                            <div class="input-group mb-3 mt-5">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Type your Username here" aria-label="Username " aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-8 mx-auto">
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon2"></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Type your Password here" aria-label="Username " aria-describedby="basic-addon1">
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-8 mx-auto mb-5" >
                            <button class="btn btn-primary float-right" type="submit">Login</button>
                        </div>
                    </div>
            </div>

            </div>
        </div>
            
    </div>
</html>