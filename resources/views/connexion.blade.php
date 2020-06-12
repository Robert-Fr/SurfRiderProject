<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Domus Divium</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">



    <!--
    Product Admin CSS Template
    https://templatemo.com/tm-524-product-admin
    -->
</head>


<?php


$myusername = $_GET['username'];
$mypassword = $_GET['password'];

$verif = DB::select("SELECT COUNT(id) as compte FROM account WHERE login = '$myusername' and pass = '$mypassword' LIMIT 1")[0];
$verification = $verif->compte;



if ($verification == 1 ) {
$sql = DB::select("SELECT id FROM account WHERE login = '$myusername' and pass = '$mypassword' LIMIT 1")[0];
?>


<body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
           <div class="container h-100">
          <a class="navbar-brand" href="index.html">
            <img style ="width: 128px;
height: 128px;" class="tm-site-title mb-0" src="logo.png">
            
          </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tachometer-alt"></i>
                                Tableau de bord
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-film"></i>
                                <span>
                                    Animes <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Daily Report</a>
                                <a class="dropdown-item" href="#">Weekly Report</a>
                                <a class="dropdown-item" href="#">Yearly Report</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.html">
                                <i class="fa fa-file-video"></i>
                                Films
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="accounts.html">
                                <i class="far fa-user"></i>
                                Mon compte
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                    Parametres <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Billing</a>
                                <a class="dropdown-item" href="#">Customize</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="login.html">
                                <?php echo $myusername?>, <b>Déconnexion</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        <div class="container">
            <div class="row">


<div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                        <h2 class="tm-block-title">Update</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">SERIE</th>
                                    <th scope="col">EPISODE</th>
                                    <th scope="col">DATE DE SORTIE</th>
                                    <th scope="col">MIS A JOUR LE </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><b>#122349</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>En Ligne
                                    </td>
                                    <td><b>One Piece</b></td>
                                    <td><b>929</b></td>
                                    <td>22:00, 07 JUIN 2020</td>
                                    <td>22:00, 07 JUIN 2020</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122348</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>En Ligne
                                    </td>
                                    <td><b>Food Wars S5</b></td>
                                    <td><b>2</b></td>
                                    <td>22:10, 07 JUIN 2020</td>
                                    <td>22:19, 07 JUIN 2020</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122347</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>En Ligne
                                    </td>
                              <td><b>Black Clover</b></td>
                                    <td><b>132</b></td>
                                    <td>22:10, 07 JUIN 2020</td>
                                    <td>22:08, 07 JUIN 2020</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122346</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>En Ligne
                                    </td>
                                   <td><b>Fruits Basket S2</b></td>
                                    <td><b>9</b></td>
                                    <td>22:30, 07 JUIN 2020</td>
                                    <td>22:31, 07 JUIN 2020</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122345</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>En Ligne
                              <td><b>Natsunagu!</b></td>
                                    <td><b>4</b></td>
                                    <td>22:45, 07 JUIN 2020</td>
                                    <td>22:45, 07 JUIN 2020</td>
                                <tr>
                                    <th scope="row"><b>#122344</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>En Ligne
                                    </td>
                                   <td><b>Tsugumomo</b></td>
                                    <td><b>9</b></td>
                                    <td>22:48, 07 JUIN 2020</td>
                                    <td>22:49, 07 JUIN 2020</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122343</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>Moving
                                    </td>
                                    <td><b>One Piece</b></td>
                                    <td><b>929</b></td>
                                    <td>22:00, 07 JUIN 2020</td>
                                    <td>22:00, 07 JUIN 2020</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122342</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>Moving
                                    </td>
                                    <td><b>One Piece</b></td>
                                    <td><b>929</b></td>
                                    <td>22:00, 07 JUIN 2020</td>
                                    <td>22:00, 07 JUIN 2020</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122341</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>Moving
                                    </td>
                                    <td><b>One Piece</b></td>
                                    <td><b>929</b></td>
                                    <td>22:00, 07 JUIN 2020</td>
                                    <td>22:00, 07 JUIN 2020</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122340</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>En Ligne
                                    </td>
                                    <td><b>One Piece</b></td>
                                    <td><b>929</b></td>
                                    <td>22:00, 07 JUIN 2020</td>
                                    <td>22:00, 07 JUIN 2020</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122339</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>Moving
                                    </td>
                                    <td><b>One Piece</b></td>
                                    <td><b>929</b></td>
                                    <td>22:00, 07 JUIN 2020</td>
                                    <td>22:00, 07 JUIN 2020</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>












































                <div class="col">
                    <p class="text-white mt-5 mb-5">
Black Clover 91 VOSTFR
</p>

                </div>
                <div class="col" ></div>
                <div  class="row" >
                    
  <div class="video-container" style="text-align: center;"><iframe src="https://www.ggsplayer.xyz/v/rylq0sej7kp00n6" width="800" height="500" frameborder="0" allowfullscreen="allowfullscreen"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span></iframe></div>
                </div>
              

            </div>
            <!-- row -->
         
        </div>
        <footer class="tm-footer row tm-mt-small">
            <div class="col-12 font-weight-light">
                <p class="text-center text-white mb-0 px-4 small">
                    Copyright &copy; <b>2020</b> All rights reserved. 
                    
                    Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Yast</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
</body>

}
<?php
}
else
echo "Connexion impossible";


?>

</html>