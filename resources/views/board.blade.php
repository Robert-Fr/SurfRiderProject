<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Responsive admin dashboard and web application ui kit. ">
      <meta name="keywords" content="blank, starter">
      <title>Mounts &mdash; Manager</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">
      <link href="css/popup_view.css" rel="stylesheet">
      <!-- Styles -->
      <link href="assets/css/core.min.css" rel="stylesheet">
      <link href="assets/css/app.min.css" rel="stylesheet">
      <link href="assets/css/style.min.css" rel="stylesheet">
      <!-- Favicons -->
      <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
      <link rel="icon" href="assets/img/favicon.png">
   </head>
   <body >
      <style type="text/css">
         .overlay {
         /* Height & width depends on how you want to reveal the overlay (see JS below) */   
         height: 100%;
         width: 0;
         position: fixed; /* Stay in place */
         z-index: 1; /* Sit on top */
         left: 17%;
         top: 0;
         background-color: rgb(0,0,0); /* Black fallback color */
         background-color: rgba(0,0,0, 0.9); /* Black w/opacity */
         overflow-x: hidden; /* Disable horizontal scroll */
         transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
         }
         /* Position the content inside the overlay */
         .overlay-content {
         position: relative;
         top: 10%;
         width: 82%;/* 100% width */
         text-align: center; /* Centered text/links */
         margin-top: 30px; /* 30px top margin to avoid conflict with the close button on smaller screens */
         }
         .overlay-img {
         position: relative;
         top: 20%;
         width: 10%;/* 100% width */
         left: 5%;
         text-align: center; /* Centered text/links */
         margin-top: 30px; 
         margin-right: 12px;/* 30px top margin to avoid conflict with the close button on smaller screens */
         }
         /* The navigation links inside the overlay */
         .overlay a {
         padding: 8px;
         text-decoration: none;
         font-size: 36px;
         color: #818181;
         display: block; /* Display block instead of inline */
         transition: 0.3s; /* Transition effects on hover (color) */
         }
         /* When you mouse over the navigation links, change their color */
         .overlay a:hover, .overlay a:focus {
         color: #f1f1f1;
         }
         /* Position the close button (top right corner) */
         .overlay .closebtn {
         position: absolute;
         top: 73px;
         left: 77%;
         font-size: 60px;
         }
         /* When the height of the screen is less than 450 pixels, change the font-size of the links and position the close button again, so they don't overlap */
         @media screen and (max-height: 450px) {
         .overlay a {font-size: 20px}
         .overlay .closebtn {
         font-size: 40px;
         top: 15px;
         right: 35px;
         }
         }
      </style>
      <div id="myNav" class="overlay">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <div class="overlay-content">
            <h1  style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;"><strong>Monture actuellement en enclos</strong> </h1>
             <h1  style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;"><strong>Personnage : Elco-up</strong> </h1>
         </div>
         <div style ="display: flex;
            flex-flow: row wrap;
            position: relative;
    top: 20%;">
            <div style =" flex-basis: 33%;border: 1px solid white;
               border-radius: 18px; " class="overlay-img">
               <img 
                  src="assets/img/avatar/1.png"> <br>  <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Amour</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Maturité</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Endurance</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
            </div>
            <div style =" flex-basis: 33%;border: 1px solid white;
               border-radius: 18px; " class="overlay-img">
               <img 
                  src="assets/img/avatar/1.png"> <br>  <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Amour</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Maturité</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Endurance</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
            </div>
            <div style =" flex-basis: 33%;border: 1px solid white;
               border-radius: 18px; " class="overlay-img">
               <img 
                  src="assets/img/avatar/1.png"> <br>  <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Amour</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Maturité</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Endurance</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
            </div>
            <div style ="flex-basis: 33%; border: 1px solid white;
               border-radius: 18px; " class="overlay-img">
               <img 
                  src="assets/img/avatar/1.png"> <br>  <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Amour</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 55%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Maturité</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Endurance</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
            </div>
            <div style =" flex-basis: 33%;border: 1px solid white;
               border-radius: 18px; " class="overlay-img">
               <img 
                  src="assets/img/avatar/1.png"> <br>  <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Amour</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Maturité</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Endurance</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
            </div>

                    <div style ="flex-basis: 33%; border: 1px solid white;
               border-radius: 18px; " class="overlay-img">
               <img 
                  src="assets/img/avatar/1.png"> <br>  <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Amour</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Maturité</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Endurance</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
            </div>

                       <div style =" flex-basis: 33%;border: 1px solid white;
               border-radius: 18px; " class="overlay-img">
               <img 
                  src="assets/img/avatar/1.png"> <br>  <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Amour</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Maturité</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Endurance</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
            </div>

                       <div style ="flex-basis: 33%; border: 1px solid white;
               border-radius: 18px; " class="overlay-img">
               <img 
                  src="assets/img/avatar/1.png"> <br>  <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Amour</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Maturité</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <strong style ="text-shadow: 0.1em 0.1em 1.2em white;    color: #ffffff;" >Endurance</strong>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
            </div>
         </div>
      </div>
      
      <!-- Preloader -->
      <div class="preloader">
         <div class="spinner-dots">
            <span class="dot1"></span>
            <span class="dot2"></span>
            <span class="dot3"></span>
         </div>
      </div>
      <!-- Sidebar -->
      <aside style ="z-index: 1004;" class="sidebar sidebar-icons-right sidebar-icons-boxed sidebar-expand-lg">
         <header style ="    background-color: #ffffff;" class="sidebar-header">
            <a class="logo-icon" ><img src="assets/img/logomount.png" alt="logo icon"></a>
            <span class="logo">
               <a href="../index.html"><img src="assets/img/logo2.png" alt="logo"></a>
         </header>
         <ul class="menu"> 
         <nav class="sidebar-navigation">
         <li class="menu-category "> </li>
         <li class="menu-item ">
         <a class="menu-link" href="../dashboard/general.html">
         <span class="icon fa fa-home"></span>
         <span class="title">Tableau de Bord</span>
         </a>
         </li>
         <li class="menu-category "><span class="icon fa fa-server"></span> Serveurs </li>
         <li class="menu-item">
         <a class="menu-link" href="#">
         <span class="icon fa fa-user"></span>
         <span class="title">Brumen</span>
         <span class="arrow"></span>
         </a>
         <ul class="menu-submenu ">
         <li class="menu-item">
         <a class="popup_full popup_hide menu-link" id="popup_wrapper"  href="javascript:void(0)">
         <img style = " height: 80%;border-radius: 18px; " src="assets/img/avatar/10_2.png">
         <span style  = "color: #00fd00;     text-shadow: 0 0 1.2em #52dc3f;" class="icon fa fa-circle"></span>
         <spano onclick="openNav()" class="title">Mounttestdeux</span>
         </a>
         </li>
         <li class="menu-item">
         <a class="menu-link" href="#">
         <img style = " height: 80%;border-radius: 18px; " src="assets/img/avatar/51_1.png">
         <span style  = "color: #00fd00;     text-shadow: 0 0 1.2em #52dc3f;" class="icon fa fa-circle"></span>
         <span class="title">Mounttestun</span>
         </a>
         </li>
         <li class="menu-item">
         <a class="menu-link" href="#">
         <img style = " height: 80%;border-radius: 18px; " src="assets/img/avatar/60_1.png">
         <span style  = "color: #00fd00;     text-shadow: 0 0 1.2em #52dc3f;" class="icon fa fa-circle"></span>
         <span class="title">Mounttestun</span>
         </a>
         </li>
         <li class="menu-item">
         <a class="menu-link" href="#">
         <img style = " height: 80%;border-radius: 18px; " src="assets/img/avatar/70_1.png">
         <span style  = "color: #00fd00;     text-shadow: 0 0 1.2em #52dc3f;" class="icon fa fa-circle"></span>
         <span class="title">Mounttestun</span>
         </a>
         </li>
         <li class="menu-item">
         <a class="menu-link" href="#">
         <img style = " height: 80%;border-radius: 18px; " src="assets/img/avatar/91_1.png">
         <span style  = "color: #00fd00;     text-shadow: 0 0 1.2em #52dc3f;" class="icon fa fa-circle"></span>
         <span class="title">Mounttestun</span>
         </a>
         </li>
         <li class="menu-item">
         <a class="menu-link" href="#">
         <img style = " height: 80%;border-radius: 18px; " src="assets/img/avatar/110_1.png">
         <span style  = "color: #00fd00;     text-shadow: 0 0 1.2em #52dc3f;" class="icon fa fa-circle"></span>
         <span class="title">Mounttestun</span>
         </a>
         </li>
         <li class="menu-item">
         <a class="menu-link" href="#">
         <img style = " height: 80%;border-radius: 18px; " src="assets/img/avatar/120_1.png">
         <span style  = "color: #00fd00;     text-shadow: 0 0 1.2em #52dc3f;" class="icon fa fa-circle"></span>
         <span class="title">Mounttestun</span>
         </a>
         </li>
         <li class="menu-item">
         <a class="menu-link" href="#">
         <img style = " height: 80%;border-radius: 18px; " src="assets/img/avatar/140_1.png">
         <span style  = "color: #00fd00;     text-shadow: 0 0 1.2em #52dc3f;" class="icon fa fa-circle"></span>
         <span class="title">Mounttestun</span>
         </a>
         </li>
         <li class="menu-item">
         <a class="menu-link" href="#">
         <img style = " height: 80%;border-radius: 18px; " src="assets/img/avatar/160_1.png">
         <span style  = "color: #00fd00;     text-shadow: 0 0 1.2em #52dc3f;" class="icon fa fa-circle"></span>
         <span class="title">Mounttestun</span>
         </a>
         </li>
         <li class="menu-item">
         <a class="menu-link" href="#">
         <img style = " height: 80%;border-radius: 18px; " src="assets/img/avatar/171_5.png">
         <span style  = "color: #00fd00;     text-shadow: 0 0 1.2em #52dc3f;" class="icon fa fa-circle"></span>
         <span class="title">Mounttestun</span>
         </a>
         </li>
         <li class="menu-item">
         <a class="menu-link" href="#">
         <img style = " height: 80%;border-radius: 18px; " src="assets/img/avatar/11_1.png">
         <span style  = "color: #00fd00;     text-shadow: 0 0 1.2em #52dc3f;" class="icon fa fa-circle"></span>
         <span class="title">Mounttestun</span>
         </a>
         <li class="menu-item">
         <a class="menu-link" href="#">
         <img style = " height: 80%;border-radius: 18px; " src="assets/img/avatar/131_5.png">
         <span style  = "color: #00fd00;     text-shadow: 0 0 1.2em #52dc3f;" class="icon fa fa-circle"></span>
         <span class="title">Mounttestun</span>
         </a>
         </li>
         <li class="menu-item">
         <a class="menu-link" href="#">
         <img style = " height: 80%;border-radius: 18px; " src="assets/img/avatar/21_1.png">
         <span style  = "color: #00fd00;     text-shadow: 0 0 1.2em #52dc3f;" class="icon fa fa-circle"></span>
         <span class="title">Mounttestun</span>
         </a>
         </li>
         <li class="menu-item">
         <a class="menu-link" href="#">
         <img style = " height: 80%;border-radius: 18px; " src="assets/img/avatar/111_5.png">
         <span style  = "color: #00fd00;     text-shadow: 0 0 1.2em #52dc3f;" class="icon fa fa-circle"></span>
         <span class="title">Mounttestun</span>
         </a>
         </li>
         </li>
         </ul>
         </li>
         <li class="menu-category"><span class="icon fa fa-cogs"></span> Parametres ( a venir ) </li>
         </ul>
         </nav>
      </aside>
      <!-- END Sidebar -->
      <!-- Topbar -->
      <header class="topbar">
         <div class="topbar-left">
            <span class="topbar-btn sidebar-toggler"><i>&#9776;</i></span>
         </div>
         <div class="topbar-right">
            <ul class="topbar-btns">
               <!-- Notifications -->
               <li class="dropdown d-none d-md-block">
                  <span class="icon fa fa-sign-out topbar-btn has-new" data-toggle="dropdown">Déconnexion</span>
                  <div class="dropdown-menu dropdown-menu-right">
                     <div class="right">
                        <a href="#" data-provide="tooltip" title="Mark all as read"><i class="fa fa-circle-o"></i></a>
                        <a href="#" data-provide="tooltip" title="Update"><i class="fa fa-repeat"></i></a>
                        <a href="#" data-provide="tooltip" title="Settings"><i class="fa fa-gear"></i></a>
                     </div>
                  </div>
         </div>
         </li>
         <!-- END Notifications -->
         </ul>
      </header>
      <!-- END Topbar -->
      <!-- Main container -->
      <main class="main-container ">
         <div class="main-content">
            <div class="card">
               <h4 class="card-title"><strong>Recensement</strong> total des montures</h4>
               <h6 class="card-title">Les dragodindes en inventaire seront prise en compte a partir de la prochaine MAJ </h6>
               <table class="table table-striped table-bordered" cellspacing="0" >
                  <thead>
                     <tr>
                        <th>Type de Dragodinde</th>
                        <th>Male</th>
                        <th>Femelle</th>
                        <th>Feconde</th>
                        <th>Derniere Fécondation</th>
                        <th>Prochain Accouchement</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td><img style = " height: 80%;
                           border: 2px solid white;
                           border-radius: 18px; " src="assets/img/avatar/1.png">Emeraude</td>
                        <td>250</td>
                        <td>250</td>
                        <td>100%</td>
                        <td>24/09/2020:16:00:01</td>
                        <td>24/09/2020:16:00:01</td>
                     </tr>
                     <tr>
                        <td><img style = " height: 80%;
                           border: 2px solid white;
                           border-radius: 18px; " src="assets/img/avatar/2.png">Prune</td>
                        <td>250</td>
                        <td>250</td>
                        <td>100%</td>
                        <td>24/09/2020:16:00:01</td>
                        <td>24/09/2020:16:00:01</td>
                     </tr>
                     <tr>
                        <td><img style = " height: 80%;
                           border: 2px solid white;
                           border-radius: 18px; " src="assets/img/avatar/3.png">Emeraude Dorée</td>
                        <td>250</td>
                        <td>250</td>
                        <td>100%</td>
                        <td>24/09/2020:16:00:01</td>
                        <td>24/09/2020:16:00:01</td>
                     </tr>
                     <tr>
                        <td><img style = " height: 80%;
                           border: 2px solid white;
                           border-radius: 18px; " src="assets/img/avatar/47.png">Emeraude Turquoise</td>
                        <td>250</td>
                        <td>250</td>
                        <td>100%</td>
                        <td>24/09/2020:16:00:01</td>
                        <td>24/09/2020:16:00:01</td>
                     </tr>
                     <tr>
                        <td><img style = " height: 80%;
                           border: 2px solid white;
                           border-radius: 18px; " src="assets/img/avatar/77.png">Prune Ivoire</td>
                        <td>250</td>
                        <td>250</td>
                        <td>100%</td>
                        <td>24/09/2020:16:00:01</td>
                        <td>24/09/2020:16:00:01</td>
                     </tr>
                     <tr>
                        <td><img style = " height: 80%;
                           border: 2px solid white;
                           border-radius: 18px; " src="assets/img/avatar/57.png">Emeraude Rousse</td>
                        <td>250</td>
                        <td>250</td>
                        <td>100%</td>
                        <td>24/09/2020:16:00:01</td>
                        <td>24/09/2020:16:00:01</td>
                     </tr>
                     <tr>
                        <td><img style = " height: 80%;
                           border: 2px solid white;
                           border-radius: 18px; " src="assets/img/avatar/4.png">Amande</td>
                        <td>191</td>
                        <td>185</td>
                        <td>64%</td>
                        <td>24/09/2020:16:00:01</td>
                        <td>24/09/2020:16:00:01</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
         </div>
         </div><!--/.main-content -->
         <!-- Footer -->
         <footer class="site-footer">
            <div class="row">
               <div class="col-md-6">
                  <p class="text-center text-md-left">Copyright © 2020 <a href="http://thetheme.io/theadmin">Blackun</a></p>
               </div>
            </div>
         </footer>
         <!-- END Footer -->
      </main>
      <!-- END Main container -->
      <!-- Global quickview -->
      <div id="qv-global" class="quickview" data-url="assets/data/quickview-global.html">
         <div class="spinner-linear">
            <div class="line"></div>
         </div>
      </div>
      <!-- END Global quickview -->
      <!-- Scripts -->
      <script src="assets/js/core.min.js"></script>
      <script src="assets/js/app.min.js"></script>
      <script src="assets/js/script.min.js"></script>
      <script>
         function openNav() {
         document.getElementById("myNav").style.width = "100%";
         }
         
         /* Close when someone clicks on the "x" symbol inside the overlay */
         function closeNav() {
         document.getElementById("myNav").style.width = "0%";
         }
         
         
                     $(document).ready(function(){
                         $(".selectServerPopup .closeServerPopup").click(function(){
                             $(".selectServerPopup").fadeOut('fast');
                         });
                         $(".selectServerPopup .serverimg").click(function(){
                             var id = $(this).data('serverid');
                             $.cookie('display_server', id);
                             $(".selectServerPopup").fadeOut('fast', function(){
                                 window.location.reload(true);
                             });
                         });
                         $(".openselectServerPopup").click(function(){
                             $(".selectServerPopup").fadeIn('fast');
                         });
                     });
                     
      </script>
   </body>
</html>