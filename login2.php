<?php 
    include 'assets/php/config.php';
        
        if(isset($_POST["username"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            //for Patient check
            $sql = "SELECT * FROM patient WHERE username=".'"'.$username.'"'." AND password=".'"'.$password.'"'.";";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            //for Doctor Check
            $sql2 = "SELECT * FROM doctor WHERE username=".'"'.$username.'"'." AND password=".'"'.$password.'"'.";";
            $result2 = mysqli_query($conn, $sql2);
            $resultCheck2 = mysqli_num_rows($result2);
            //if Patient
            if($resultCheck>0){
                $row = mysqli_fetch_assoc($result);
                $_SESSION["p_id"] = $row["p_id"];
                $_SESSION["isDoc"] = false;
                $_SESSION["isLogin"] = true;
                
                    header('Location:/patient-dash');    
               
                            
            }elseif($resultCheck2>0){ //else if doctor

                $row = mysqli_fetch_assoc($result);
                $_SESSION["isLogin"] = true;
                $_SESSION["p_id"] = false;
                $_SESSION["isDoc"] = true;
               
                header('Location:/doctordash');
                
            }            
            else{
                echo '<div class="col col-4 mt-3 mx-auto alert alert-danger" role="alert"><strong>No User Found!</strong> Please Try Again! </div>';
            }
        }
        
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--Bootstrap Dependencies-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--   -->
</head>
<body class="bg-secondary">
    
    <div class="container">
        <form action="" method="post">
            <div class="row">
                <div class="mt-5 mx-auto col-12">
                <h1 class="text-center text-white">Login</h1>
                </div>            
            </div>
            <div class="row">
                <div class="col-10 col-lg-6 col-md-8 mx-auto ">
                <div class="card bg-dark">
                    <form action="" method="post">

                        <div class="row">
                            <div class="col col-8  mx-auto">
                                <div class="input-group mb-3 mt-5">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"></span>
                                </div>
                                <input type="text" name="username" class="form-control" placeholder="Type your Username here" aria-label="Username " aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col col-8 mx-auto">
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2"></span>
                            </div>
                            <input type="password" name="password" class="form-control" placeholder="Type your Password here" aria-label="Username " aria-describedby="basic-addon1" required>
                            </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col col-8 mx-auto mb-5" >
                                <button class="btn btn-primary float-right" type="submit">Login</button>
                            </div>
                        </div>

                    </form>
                </div>
    
                </div>
            </div>
        </form>
            
    </div>
</html>