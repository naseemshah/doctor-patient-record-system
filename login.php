<?php 
    include 'assets/php/config.php';
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
  <style>
    #doctorButton:hover,#patientButton:hover{background-color: #0062cc;}
  </style>
</head>
<body class="bg-secondary">
  <div class="container">
    <form method="post">
      <div class="row">
        <div class="col-10 col-lg-6 col-md-8 mx-auto mt-5">
          <div class="card bg-dark">
            <div class="row m-4">
              <div class="col">
                <div class="row bg-secondary">
                  <a class="col bg-primary p-2 text-center" id="doctorButton">Doctor</a>
                  <a class="col p-2 text-center" id="patientButton">Patient</a>
                </div>
                <div class="row">
                  <h1 class="mx-auto">Login</h1>
                </div>
                <div class="row">
                  <img src="assets/img/doc.svg" class="mx-auto mb-3" id="icon" alt="">
                </div>
                <div class="row">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Type your username" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                </div>
                <div class="row">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Type your password" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                </div>
                <div class="row">
                  <div class="col p-0">
                    <button class="col bg-primary p-2 text-center border-0" type="submit">Login</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>

<script>
  var icon = document.getElementById("icon");
  const button1 = document.getElementById("doctorButton");
  const button2 = document.getElementById("patientButton");
  button1.addEventListener("click",function(){
    icon.src = "assets/img/doc.svg";
    button1.classList.add("bg-primary");
    button2.classList.remove("bg-primary");
  });
  button2.addEventListener("click",function(){
    icon.src = "assets/img/patient.svg";
    button2.classList.add("bg-primary");
    button1.classList.remove("bg-primary");
  });
</script>

</html>