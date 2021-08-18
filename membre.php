
<?php 
include_once('db_conf.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/fevicon/favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="../../assets/fevicon/favicon.ico">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIMA ADMIN</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        ul li a span{
            font-size: 1.1rem !important;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-bars" style="font-size: 1.5rem"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SIMA Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

                        <!-- Nav Item - Pages Collapse Menu -->
            
           
           <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCom"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-sleigh"></i>
                    <span>Marchée</span>
                </a>
                <div id="collapseCom" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Marchée</h6>
                        <a class="collapse-item" href="marche.php">Accueil</a>
                        <a class="collapse-item" href="marchestat.php">Statistique</a>
                        <a class="collapse-item" href="marcheadd.php">Enregistrement</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-apple-alt"></i>
                    <span>Produits</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Produits</h6>
                        <a class="collapse-item" href="produit.php">Accueil</a>
                        <a class="collapse-item" href="produitstatic.php">Statistique</a>
                        <a class="collapse-item" href="produitadd.php">Enregistrement</a>
                    </div>
                </div>
            </li>
                        <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUssd"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-mobile-alt"></i>
                    <span>Notification</span>
                </a>
                <div id="collapseUssd" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Notification</h6>
                        <a class="collapse-item" href="smssend.php">Messages a envoyer</a>
                        <a class="collapse-item" href="smsreceive.php">Message recus</a>
                        <a class="collapse-item" href="ussd.php">USSD</a>
                    </div>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMembre"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-users"></i>
                    <span>Membres</span>
                </a>
                <div id="collapseMembre" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Client</h6>
                        <a class="collapse-item" href="membre.php">Accueil</a>
                        <a class="collapse-item" href="membrestat.php">Statistique</a>
                        <a class="collapse-item" href="membreadd.php">Enregistrement</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAgent"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-user"></i>
                    <span>Agents</span>
                </a>
                <div id="collapseAgent" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">SIMA Agent</h6>
                        <a class="collapse-item" href="agent.php">Accueil</a>
                        <a class="collapse-item" href="agentstat.php">Statistique</a>
                        <a class="collapse-item" href="agentadd.php">Enregistrement</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-wallet"></i>
                    <span>Finance</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Finance</h6>
                        <a class="collapse-item" href="compatibite.php">Accueil</a>
                        <a class="collapse-item" href="financestatic.php">Statistique</a>
                        <a class="collapse-item" href="spent.php">Enregistrement</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="post" action="search.php">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-1 small" placeholder="Membres ou agents..."
                                aria-label="Search" aria-describedby="basic-addon2" name="data">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" name="search">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search" action="search.php">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Cherche membre..." aria-label="Search"
                                            aria-describedby="basic-addon2" name="membre">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit" name="search">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter" id="notif"></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Notification
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                          <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">08/08/2021</div>
                                        <span class="font-weight-bold">Notification</span>
                                    </div>
                                </a>
                                
                                <a class="dropdown-item text-center small text-gray-500" href="notification.php">Tout affiche</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="setting.php" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- 
                                <i class="fas fa-cogs fa-fw"></i>
                                -->
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $name;?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo $avatar;?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="setting.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="partenariat.php">
                                    <i class="fas fa-truck-moving fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Tracking
                                </a>
                                <a class="dropdown-item" href="donateur.php">
                                    <i class="fas fa-chart-line fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Statistique
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Quitter
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Membres
                    <span style="float: right;">
                        <button class="btn btn-success"  data-toggle="modal" data-target="#ActeurModal"><i class="fas fa-user mr-1"></i>Acteurs</button>
                    </span>
                    </h1>
                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="border:1px solid lightgray;">
                        <div class="card-header py-3" style="border-bottom:1px solid lightgray;">
                            <h6 class="m-0 font-weight-bold text-primary">Membres details</h6>
                        </div>
                        <div class="card-body table-responsive"><table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID_Membre</th>
                                            <th>Nom_PostNom</th>
                                            <th>Prenom</th>
                                            <th>Sexe</th>
                                            <th>Niveau_Etude</th>
                                            <th>Date_Naissance</th>
                                            <th>Date_Enregistrement</th>
                                            <th>Num_Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 
            $sql_marche = "select * from MEMBRES order by ID_Membre";
                        $res_marche = mysqli_query($con, $sql_marche);
                        while($row = mysqli_fetch_assoc($res_marche)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['ID_Membre'];?></td>
                                            <td><?php echo $row['Nom_PostNom'];?></td>
                                            <td><?php echo $row['Prenom'];?></td>
                                            <td><?php echo $row['Sexe'];?></td>
                                            <td><?php echo $row['Niveau_Etude'];?></td>
                                            <td><?php echo $row['Date_Naissance'];?></td>
                                            <td><?php echo $row['Date_Enregistrement'];?></td>
                                            <td><?php echo $row['Num_Phone'];?></td>
                                            
                                            <td><a href="#"> <i class="fas fa-eye" style="font-size: 12px !important;color: #2F80BF;"></i></a>
                                        <a href="#"> 
                                           <i class="fas fa-edit" style="font-size: 12px !important;color: #2D488B;"></i></a>
                                           <a href="#"> 
                                           <i class="fas fa-trash-alt" style="color: #A31D28;font-size: 12px;"></i></a>

                                    </td>
                                        </tr>
                                       <?php }?> 
                                                                              
                                    </tbody>
                                </table>
                            
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white" style="border-top:1px solid lightgray;">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span style="font-size: 1rem;">Copyright &copy; SIMA <?php echo date('Y');?></span>

                    </div>
                </div>
            </footer>
            <!-- End of Footer -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


   <!-- Province Modal-->
    <div class="modal fade" id="ActeurModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ACTEURS</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="card shadow mb-4" style="border:1px solid lightgray;">
                        <div class="card-header py-3" style="border-bottom:1px solid lightgray;">
                            <h6 class="m-0 font-weight-bold text-primary">Acteurs details</h6>
                        </div>
                        <div class="card-body table-responsive">
                            
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                    <thead>
                                        <tr style="text-transform: uppercase;">
                                            <th>#</th>
                                            <th>Categorie</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 
                                         $sql_prov = "select * from ACTEURS order by ID_Cat";
                                         $res_prov = mysqli_query($con, $sql_prov);
                                         while($row_prov = mysqli_fetch_assoc($res_prov)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row_prov['ID_Cat'];?></td>
                                            <td><?php echo $row_prov['Categorie'];?></td>
                                            <td><a href="#"> <i class="fas fa-eye" style="font-size: 12px !important;color: #2F80BF;"></i></a>
                                        <a href="#"> 
                                           <i class="fas fa-edit" style="font-size: 12px !important;color: #2D488B;"></i></a>
                                           <a href="#"> 
                                           <i class="fas fa-trash-alt" style="color: #A31D28;font-size: 12px;"></i></a>

                                    </td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            
                        </div>
                    </div>
                <!-- /.container-fluid -->
    
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Ferme</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Quitter</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Voulez-vous vraiment quitter ?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Anuler</button>
                    <a class="btn btn-danger" href="logout.php">Quitter</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script>
     var ajax = new XMLHttpRequest();
     var notf = document.getElementById('notif');
    // Update notification 
    function info(){
      var url = 'ajax/notification.php';
      ajax.onreadystatechange = notifa;
      ajax.open('POST',url,true);
      ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoder'); //only use in case of POST
      ajax.send('name=josue');

      }
      function notifa(){
            if (ajax.readyState === 4) {
              if (ajax.status === 200) {
                var data = JSON.parse(ajax.responseText);
                if (data > 0) {
                  notf.style.display ='block';
                  notf.innerHTML = data;
                }else{
                  notf.style.display ='none';
                }
              }
            }
      }

      setInterval(function(){info()},300);
    </script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script>
      $(document).ready( function () {
    $('table').DataTable({
      "language": {
            "lengthMenu": "Afficher _MENU_ enregistrements par page",
            "zeroRecords": "Rien trouvé - désolé",
            "info": "Afficher la page _PAGE_ de _PAGES_ de _PAGES_ entrées",
            "infoEmpty": "Aucun enregistrement disponible",
            "infoFiltered": "(filtré de _MAX_ total des enregistrements)"
        }
    });
} );
    </script>

</body>

</html>