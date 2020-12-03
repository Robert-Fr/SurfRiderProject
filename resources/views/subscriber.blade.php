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


  <body>
<?php
session_start();
if(isset($_SESSION['key'])) {
  $verif = DB::select("SELECT COUNT(id) as verifkey,`use` FROM `key` WHERE tokken ='{$_SESSION['key']}' GROUP BY `use` LIMIT 1 ")[0];


  $verification = $verif->verifkey;
  $usage = $verif->use;

  if ($verification == 1 )
  {
    $redirect = "truekey";
  } 

  else {
    header('Location: login');
   exit();
  }

}
else {
  header('Location: login');
  exit();
}





?>
    <!-- Preloader -->
    <div class="preloader">
      <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
      </div>
    </div>


    
    <!-- END Sidebar -->


    <!-- Topbar -->
    <header class="topbar">
      <div class="topbar-left">
       <a style="    max-width: 19%;" class="logo-icon" ><img src="assets/img/l.jpg" alt="logo icon"></a>

      </div>


      

      <div class="topbar-right">
            <ul class="topbar-btns">
               <!-- Notifications -->
               <li class="dropdown d-none d-md-block">
                  <a href ="login"><span class="icon fa fa-sign-out topbar-btn has-new"  > <b style="font-family: Roboto,sans-serif;">Déconnexion</b></span> </a>
                </li>
      
         </div>
    </header>
    <!-- END Topbar -->


    <!-- Main container -->
    <main class="main-container">
      <div class="main-content">


        <div class="card">
          <h4 class="card-title">Tableau de bord</h4>
           <ul class="nav nav-process nav-process-iconic">
  <li class="nav-item complete">
    <a class="nav-link" href="#"><i class="fa fa-user"></i></a>
  </li>
  <li class="nav-item complete">
    <a class="nav-link" href="#"><i class="fa fa-cogs"></i></a>
  </li>
  <li class="nav-item complete">
    <a class="nav-link" href="#"><i class="fa fa-unlock"></i></a>
  </li>
</ul>
           <p class="text-center fs-35 text-muted">Crédit : <strong class="text-primary"><?php echo $usage ?></strong></p>

        <div class="col-12">
           

              <div class="card-body">


                <div class="table-responsive-sm">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nom de Compte</th>
                        <th>Mot de Passe</th>
                        <th>Serveur</th>
                        <th>Statut</th>
                        <th>Achat</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $alldata =  json_decode($_COOKIE['element'])[0];

                    $ndc = $alldata[0];
                    $mdp = $alldata[1];
                    $serv = $alldata[2];
                  // dd($alldata);
                

                    for ($i=0; $i < count($ndc); $i++) { 
                        # code...
                    

                     ?>

                      <tr>
                        <th scope="row"> <?php echo $i+1;?> </th>
                        <td><?php echo  $ndc[$i]; ?></td>
                        <td><?php echo $mdp[$i]; ?></td>
                        <td><?php echo $serv[$i]; ?></td>
                        <td id ="status"><svg class="spinner-circle-material-svg" viewBox="0 0 50 50">
                  <circle class="circle" cx="25" cy="25" r="20"></circle>
                </svg>
                <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_iwqqimkp.json"  background="transparent"  speed="1" style=" display:none ;width: 54px; height: 54px;"     autoplay></lottie-player>
                 <lottie-player  src="https://assets8.lottiefiles.com/private_files/lf30_jq4i7W.json" background="transparent"  speed="1" style=" display:none ;width: 54px; height: 54px;"     autoplay></lottie-player>



            </td>
                <td><a class="btn btn-float btn-sm btn-info" onclick ="xmlhttp(<?php echo "'".$_SESSION['key']."'" ?>,<?php echo "'".$ndc[$i]."'" ?>,<?php echo "'".$mdp[$i]."'"?>,<?php echo "'".$serv[$i]."'"?>,this)"><i class="fa fa-shopping-basket"></i></a></td>
                      </tr>
                  <?php } ?>

                
                    </tbody>
                  </table>
                </div>


              </div>
            </div>
          </div>

        </div>

         

      <div class="card-body text-left">
                   <form class="form-type-material" action="dashboard" method="get"  >

              <button class="btn btn-primary" type="submit"> <i class="fa fa-hand-o-left "></i> Précédent
</button>
</form>
            </div>




      </div><!--/.main-content -->


      <!-- Footer -->
      <footer class="site-footer">
        <div class="row">
          <div class="col-md-6">
            <p class="text-center text-md-left">Copyright © 2020 <a href="http://thetheme.io/theadmin">Blackun</a>. All rights reserved.</p>
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
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


  </body>

   <script>
  

    function xmlhttp(k,n,m,s,t) {
   
    var xhr = new XMLHttpRequest();
      t.style.backgroundColor  = "rgb(190 197 189)";
      t.style.borderColor =  "#ffffff";
      t.style.pointerEvents = "none";
    xhr.open("POST", "http://185.223.30.227:8888", true);
     xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     //alert(this.responseText);
       // alert(String(t));
    
      var p = t.parentNode.parentNode.getElementsByTagName('td')[3];
      //alert(p.children[0].nodeName);
      //alert(p.children.nodeName);

      p.children[0].style.display = "none";
      if(this.responseText == "true") {
        p.children[1].style.display = "";
         document.evaluate('/html/body/main/div[1]/div/p/strong', document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue.innerHTML = document.evaluate('/html/body/main/div[1]/div/p/strong', document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue.innerHTML - 1;

      }
      else {
         p.children[2].style.display = "";
        
 
 
      }
      
      
    }
  };

  
var lp = true;
switch (s) {
    case 'Agride':
        s = 36;
        break;
    case 'Atcham':
        s = 204 ;
        break;
    case 'Brumen':
        s = 212;
        break;
    case 'Crocabulia':
        s = 202;
        break;
    case 'Echo':
        s = 201 ;
        break;
    case 'Furye':
         s = 211;
        break;
    case 'Julith':
         s = 208 ;
        break;
    case 'Meriana':
         s = 205 ;
        break;
    case 'Merkator':
        s = 210;
        break;
    case 'Nidas':
         s = 209;
        break;
    case 'Pandore':
        s = 206;
        break;
    case 'Rubilax':
        s = 203;
        break;
    case 'Ush':
         s = 207 ;
        break;
    case 'Ilyzaelle':
         s = 222;
        break;
    case 'Jahash':
        s = 240;
        break;
    default:
        lp = false;
        alert("Serveur non reconnu")
        break;

}

    if(lp == true){
        xhr.send(k.concat('=',n.concat('=',m.concat('=',s))));
    }
   

}

      app.ready(function(){


        /*
        |--------------------------------------------------------------------------
        | jsGrid - Getting started
        |--------------------------------------------------------------------------
        */
        var clients = [
            { "Compte": "Account1", "Mot de passe": "Motdepass1", "Serveur": "Brumen" }
            ];

        $("#jsgrid-start").jsGrid({
            width: "100%",
            height: "314px",

            inserting: true,
            editing: true,
            sorting: true,
            paging: true,

            data: clients,

            fields: [
                { name: "Compte", type: "text", width: 150 },
                { name: "Mot de passe", type: "text", width: 50 },
                { name: "Serveur", type: "text", width: 100 },
                { type: "control" }
            ]
        });




        /*
        |--------------------------------------------------------------------------
        | jsGrid - Basic
        |--------------------------------------------------------------------------
        */

        $("#jsgrid-basic").jsGrid({
            height: "500px",
            width: "100%",
            filtering: true,
            editing: true,
            inserting: true,
            sorting: true,
            paging: true,
            autoload: true,
            pageSize: 15,
            pageButtonCount: 5,
            deleteConfirm: "Supression du compte ? ",
            controller: db,
            fields: [
                { name: "Compte", type: "text", width: 150 },
                { name: "Mot de passe", type: "text", width: 50 },
                { name: "Serveur", type: "text", width: 200 },
                { type: "control" }
            ]
        });




        /*
        |--------------------------------------------------------------------------
        | jsGrid - Static data
        |--------------------------------------------------------------------------
        */

        $("#jsgrid-static").jsGrid({
            height: "500px",
            width: "100%",
            sorting: true,
            paging: true,
            fields: [
               { name: "Nom de Compte", type: "text", width: 150 },
                { name: "Mot de Passe", type: "number", width: 50 },
                { name: "Serveur", type: "text", width: 200 },
            ],
            data: db.clients
        });




        /*
        |--------------------------------------------------------------------------
        | jsGrid - OData service
        |--------------------------------------------------------------------------
        */

        $("#jsgrid-odata").jsGrid({
            height: "500px",
            width: "100%",
            sorting: true,
            paging: false,
            autoload: true,
            controller: {
                loadData: function() {
                    var d = $.Deferred();

                    $.ajax({
                        url: "http://services.odata.org/V3/(S(3mnweai3qldmghnzfshavfok))/OData/OData.svc/Products",
                        dataType: "json"
                    }).done(function(response) {
                        d.resolve(response.value);
                    });

                    return d.promise();
                }
            },
            fields: [
                { name: "Name", type: "text", width: 100 },
                { name: "Description", type: "textarea", width: 200 },
                { name: "Rating", type: "number", width: 150, align: "center",
                    itemTemplate: function(value) {
                        return $("<div>").addClass("text-yellow fs-18").append(Array(value + 1).join("&#9733;"));
                    }
                },
                { name: "Price", type: "number", width: 100,
                    itemTemplate: function(value) {
                        return value.toFixed(2) + "$"; }
                }
            ]
        });









        /*
        |--------------------------------------------------------------------------
        | jsGrid - Custom view
        |--------------------------------------------------------------------------
        */

        $("#jsgrid-view").jsGrid({
            height: "500px",
            width: "100%",
            filtering: true,
            editing: true,
            sorting: true,
            paging: true,
            autoload: true,
            pageSize: 15,
            pageButtonCount: 5,
            controller: db,
            fields: [
                { name: "Nom de Compte", type: "text", width: 150 },
                { name: "Mot de Passe", type: "number", width: 50 },
                { name: "Serveur", type: "text", width: 200 },
    
            ]
        });

        $("#view-controller input[type=checkbox]").on("change", function() {
            var $cb = $(this);
            $("#jsgrid-view").jsGrid("option", $cb.attr("id"), $cb.is(":checked"));
        });






        /*
        |--------------------------------------------------------------------------
        | jsGrid - Batch delete
        |--------------------------------------------------------------------------
        */

        $("#jsgrid-delete").jsGrid({
            height: "400px",
            width: "100%",
            autoload: true,
            confirmDeleting: false,
            paging: true,
            controller: {
                loadData: function() {
                    return db.clients;
                }
            },
            fields: [
                {
                    headerTemplate: function() {
                        return $("<button>").attr("type", "button").addClass('btn btn-xs btn-danger').text("Delete")
                                .on("click", function () {
                                    deleteSelectedItems();
                                });
                    },
                    itemTemplate: function(_, item) {
                        return $("<input>").attr("type", "checkbox")
                                .prop("checked", $.inArray(item, selectedItems) > -1)
                                .on("change", function () {
                                    $(this).is(":checked") ? selectItem(item) : unselectItem(item);
                                });
                    },
                    align: "center",
                    width: 50
                },
                { name: "Name", type: "text", width: 150 },
                { name: "Age", type: "number", width: 50 },
                { name: "Address", type: "text", width: 200 }
            ]
        });


        var selectedItems = [];

        var selectItem = function(item) {
            selectedItems.push(item);
        };

        var unselectItem = function(item) {
            selectedItems = $.grep(selectedItems, function(i) {
                return i !== item;
            });
        };

        var deleteSelectedItems = function() {
            if(!selectedItems.length || !confirm("Supression du compte ?"))
                return;

            deleteClientsFromDb(selectedItems);

            var $grid = $("#jsgrid-delete");
            $grid.jsGrid("option", "pageIndex", 1);
            $grid.jsGrid("loadData");

            selectedItems = [];
        };

        var deleteClientsFromDb = function(deletingClients) {
            db.clients = $.map(db.clients, function(client) {
                return ($.inArray(client, deletingClients) > -1) ? null : client;
            });
        };



        /*
        |--------------------------------------------------------------------------
        | jsGrid - Rows reordering
        |--------------------------------------------------------------------------
        */

        $("#jsgrid-reordering").jsGrid({
            height: "500px",
            width: "100%",
            autoload: true,

            rowClass: function(item, itemIndex) {
                return "client-" + itemIndex;
            },

            controller: {
                loadData: function() {
                    return db.clients.slice(0, 15);
                }
            },

            fields: [
                { name: "Name", type: "text", width: 150 },
                { name: "Age", type: "number", width: 50 },
                { name: "Address", type: "text", width: 200 },
                { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
                { name: "Married", type: "checkbox", title: "Is Married", sorting: false }
            ],

            onRefreshed: function() {
                var $gridData = $("#jsgrid-reordering .jsgrid-grid-body tbody");

                $gridData.sortable({
                    update: function(e, ui) {
                        // array of indexes
                        var clientIndexRegExp = /\s*client-(\d+)\s*/;
                        var indexes = $.map($gridData.sortable("toArray", { attribute: "class" }), function(classes) {
                            return clientIndexRegExp.exec(classes)[1];
                        });
                        alert("Reordered indexes: " + indexes.join(", "));

                        // arrays of items
                        var items = $.map($gridData.find("tr"), function(row) {
                            return $(row).data("JSGridItem");
                        });
                        console && console.log("Reordered items", items);
                    }
                });
            }
        });




      });
    </script>

</html>
