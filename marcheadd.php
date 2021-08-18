
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
            
           
           <li class="nav-item active">
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
            <li class="nav-item">
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
                    <h1 class="h3 mb-2 text-gray-800">Marchee
                      <span style="float: right;">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#ProvinceModal"><i class="fas fa-plus-square mr-2"></i>Province</button>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#LieuModal"><i class="fas fa-plus-square mr-2"></i>Lieux</button>
                    </span>
                    </h1>

                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="border:1px solid lightgray;">
                        <div class="card-header py-3" style="border-bottom:1px solid lightgray;">
                            <h6 class="m-0 font-weight-bold text-primary">Marchee details</h6>
                        </div>
                        <div class="card-body table-responsive">
                            
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <form class="form-group w-75" method="post">
                                        <tr>
                                            <th>ID Marche</th>
                                            <td><input type="text" name="id" class="form-control w-75" required></td>
                                        </tr>
                                        <tr>
                                            <th>Nom</th>
                                            <td><input type="text" name="nom" class="form-control w-75" required></td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <th>Lieux</th>
                                            <td>
                                                <select name="id_lieux" class="form-control">
                                             <?php 
            $sql_province = "select ID_Lieu,Nom_Lieu from lieux";
                        $res_province = mysqli_query($con, $sql_province);
                        while($row = mysqli_fetch_assoc($res_province)){$lieux = true;
                                        ?>   
                                         <option value="<?php echo $row['ID_Lieu'];?>"><?php echo $row['Nom_Lieu'];?></option>
                                     <?php }?>
                                            </td>
                                        </tr>
                                        
                                    
                                        <tr><td></td>
                                         <td>
                                <!-- Checking if province is set -->
                                <?php if($lieux){?>
                                        <button class="btn btn-primary" type="submit" name="marche_submit"> Enregistre</button>
                                 <?php }else{echo '<button class="btn btn-primary" data-toggle="modal" data-target="#LieuModal"><i class="fas fa-plus-square mr-2"></i>Lieux</button>';}?>
                                    </td>
                                        </tr>
                                    </thead>
                                </table>
                            </form>
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

<!-- Logout Modal-->
    <div class="modal fade" id="ProvinceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-square mr-2"></i>Ajoute province</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" class="form-group" >
                                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Province</th>
                                            <td><input type="text" name="id" class="form-control w-75" required></td>
                                        </tr>
                                        <tr>
                                            <th>Province</th>
                                            <td><input type="text" name="province" class="form-control w-75" required></td>
                                        </tr>
                                    
                                        <tr><td></td>
                                         <td><button class="btn btn-primary" type="submit" name="prov_submit"> Enregistre</button></td>
                                        </tr>
                                    </thead>
                                </table>
                            </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Anuler</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->

   <!-- Logout Modal-->
    <div class="modal fade" id="LieuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-square mr-2"></i>Ajoute lieux</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <form class="form-group w-75" method="post">
                                        <tr>
                                            <th>ID Lieux</th>
                                            <td><input type="text" name="id" class="form-control w-75" required></td>
                                        </tr>
                                        <tr>
                                            <th>Nom</th>
                                            <td><input type="text" name="nom" class="form-control w-75" required></td>
                                        </tr>
                                        <tr>
                                            <th>Type</th>
                                            <td><input type="text" name="type" class="form-control w-75" required></td>
                                        </tr>
                                        <tr>
                                            <th>Territoire</th>
                                            <td><input type="text" name="territoire" class="form-control w-75" required></td>
                                        </tr>
                                        <tr>
                                            <th>Province</th>
                                            <td>
                                                <select name="id_prov" class="form-control w-75">
                                             <?php 
            $sql_province = "select * from provinces";
                        $res_province = mysqli_query($con, $sql_province);
                        while($row = mysqli_fetch_assoc($res_province)){$province = true;
                                        ?>   
                                         <option value="<?php echo $row['ID_Prov'];?>"><?php echo $row['Province'];?></option>
                                     <?php }?>
                                 </select>
                                            </td>
                                        </tr>
                                        
                                    
                                        <tr><td></td>
                                         <td>
                                <!-- Checking if province is set -->
                                <?php if($province){?>
                                        <button class="btn btn-primary" type="submit" name="lieu_submit"> Enregistre</button>
                                 <?php }else{echo '<button class="btn btn-primary" data-toggle="modal" data-target="#ProvinceModal"><i class="fas fa-plus-square mr-2"></i>Province</button>';}?>
                                    </td>
                                        </tr>
                                    </thead>
                                </table>
                            </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Anuler</button>
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

</body>

</html>

<?php
if (isset($_POST['prov_submit'])) {
    $id_pro = mysqli_escape_string($con, $_POST['id']);
    $province = mysqli_escape_string($con, $_POST['province']);
    $sql_prov = "insert into provinces values('$id_pro','$province')";
    $res_pro = mysqli_query($con, $sql_prov);
    if ($res_pro) {
        echo "<script>alert('Province ajouter avec success')</script>";
    }
}

if (isset($_POST['lieu_submit'])) {
    $id = mysqli_escape_string($con, $_POST['id']);
    $nom = mysqli_escape_string($con, $_POST['nom']);
    $type = mysqli_escape_string($con, $_POST['type']);
    $territoire = mysqli_escape_string($con, $_POST['territoire']);
    $id_pro = mysqli_escape_string($con, $_POST['id_prov']);
    
    $sql_lieu = "insert into lieux values('$id','$nom','$type','$territoire','$id_pro')";
    $res_lieu = mysqli_query($con, $sql_lieu);
    if ($res_lieu) {
        echo "<script>alert('Lieux ajouter avec success')</script>";
    }
}

if (isset($_POST['marche_submit'])) {
    $id = mysqli_escape_string($con, $_POST['id']);
    $nom = mysqli_escape_string($con, $_POST['nom']);
    $id_lieux = mysqli_escape_string($con, $_POST['id_lieux']);
    
    $sql_lieu = "insert into marches values('$id','$nom','$id_lieux')";
    $res_lieu = mysqli_query($con, $sql_lieu);
    if ($res_lieu) {
        echo "<script>alert('marches ajouter avec success')
        window.location = 'marche.php'
        </script>";
    }
}

?>