<!DOCTYPE html>
<html>   
  <head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <title><?php echo $pageTitle; ?></title>
    <!-- <link href="<?php echo base_url()."assets/css/custom.min.css?"; ?>" rel="stylesheet" type="text/css" /> -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 --> 
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> 
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/ionicons-2.0.1/ionicons.css" rel="stylesheet" type="text/css" /> 
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- Metro Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/admin/css/metroCustom.css" rel="stylesheet">

    <style> 
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>

    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>

    <!-- Tab kategori navbar -->
    <script src="<?php echo base_url(); ?>assets/admin/js/metro.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $(function(){
            $("#tab-control").tabcontrol(); 
            });
      });  
    </script> 

     <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>

    <script src="<?php echo base_url('assets/admin/js/jquery.dataTables.min.js');?>"></script>
    
     <!-- CoutDown jquery  -->
  <!--  <script src="<?php echo base_url('assets/js/CountDown.js');?>"></script> -->
   <script src="<?php echo base_url('assets/js/CountDownRestart.js');?>"></script>

     <!-- ajax jquery dashboard delete, loadjsontodb  -->
     <!-- <script src="<?php echo base_url('assets/js/AjaxDashboard.js');?>"></script> -->

    <script src="<?php echo base_url('assets/angularjs/1.5.8/angular.js');?>"></script>
     <!-- ajax dashboard delete, loadjsontodb -->
    <script src="<?php echo base_url('assets/angularjs/Ajax.js');?>"></script>
     <!-- <script src="<?php echo base_url('assets/angularjs/Ajax-asyn.js');?>"></script> -->

     <!-- compile masterAPI db to local db  -->
     <script src="<?php echo base_url('assets/angularjs/equal.js');?>"></script>

  </head>
  
  <!-- <body class="sidebar-mini skin-black-light"> -->
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
       
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>DB</b>Syn</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Database Syn</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>


                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name; ?>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>loadChangePass" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Change Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu"> 
            <!-- <li class="header">MAIN NAVIGATION</li> -->
            <li class="treeview">
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo base_url(); ?>TblMaster/" >
                <i class="fa fa-database"></i>
                <span>Master Database</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>TblSlave/" >
                <i class="fa fa-database"></i>
                <span>Slave Databases</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>CompTbl/" >
                <i class="fa fa-refresh"></i>
                <span>Compile Database</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>userManagement">
                <i class="fa fa-users"></i>
                <span>Users</span>
              </a>
            </li>

          </ul>

        </section>
        <!-- /.sidebar -->
      </aside>