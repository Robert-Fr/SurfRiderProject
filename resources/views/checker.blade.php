<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Auto Suscriber Tool">
    <meta name="keywords" content="login, signin">

    <title>Auto &mdash; Subscriber</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="assets/css/core.min.css" rel="stylesheet">
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.png">
  </head>
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

  <body>


<?php
session_start();
$mykey =htmlspecialchars_decode($_GET['key']);
$_SESSION['key'] = htmlspecialchars_decode($_GET['key']);
$verif = DB::select("SELECT COUNT(id) as verifkey FROM `key` WHERE tokken = '$mykey' LIMIT 1")[0];


$verification = $verif->verifkey;


if ($verification == 1 )
{
  $redirect = "truekey";
} 

else {
  $redirect = "falsekey";
}

?>






    <div class="row min-h-fullscreen center-vh p-20 m-0">
      <div class="col-12">
        <div class="card card-shadowed px-50 py-30 w-400px mx-auto" style="max-width: 50%">
        	<h2 style = "    text-align: center;
">Verification de la Key</h2>
           <div class="px-50 py-30 w-400px mx-auto col-md-none col-lg-none">

                <hr class="d-lg-none">
                
                <div style ="    width: 201px;
    height: 210px;" class="spinner-ball"></div>
              </div>
          <p class="text-center text-muted fs-13 mt-20">Pas de Key ?<a class="text-primary fw-500" href="#">#Blackun#4317</a></p>

       
      </div>


    
    </div>

    <!-- Scripts -->
    <script src="../assets/js/core.min.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/js/script.min.js"></script>
    <script type="text/javascript">
      
            setTimeout(function () {

              <?php if($redirect == "truekey") {?>
                window.location = "dashboard";
                <?php }else{ ?>
                window.location = "login";
              <?php }?>

            },3000);
        
    </script>


  </body>

</html>

