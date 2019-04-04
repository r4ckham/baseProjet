<?php
/**
 * Sample layout.
 */
use Helpers\Assets;
use Helpers\Hooks;
use Helpers\Url;
use Helpers\Session;

//initialise hooks
$hooks = Hooks::get();
?>
<!DOCTYPE html>
<head lang="<?php echo LANGUAGE_CODE; ?>">

<title>BaseProjet</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon"                   type="image/x-icon" href="<?= Url::templatePath() . "pictures/gear.ico" ?>" />
<link rel="apple-touch-icon-precomposed"    sizes="57x57"       href="<?= Url::templatePath() . "pictures/gear.ico" ?>" />

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<!-- CSS -->
<?php 
    Assets::css([
        Url::templatePath() . "plugins/bs3/css/bootstrap.css",
        Url::templatePath() . "css/w3c.css",
        Url::templatePath() . "plugins/font-awesome/css/font-awesome.css",
        Url::templatePath() . "plugins/fontawesome/css/all.css",
        Url::templatePath() . "plugins/jqueryUi/jquery-ui.min.css",
        Url::templatePath() . "plugins/timePicker/jquery-ui-timepicker-addon.css",
        
        // Datatable
        Url::templatePath() . "plugins/datatable/datatables.min.css",
        Url::templatePath() . "plugins/datatable/css/dataTables.bootstrap4.css",
        Url::templatePath() . "plugins/datatable/responsive/css/responsive.dataTables.css",
        Url::templatePath() . "plugins/datatable/responsive/css/responsive.bootstrap.css",
        
        // Admin LTE
        Url::templatePath() . "plugins/AdminLTE/dist/css/AdminLTE.min.css",
        Url::templatePath() . "plugins/AdminLTE/plugins/bootstrap-slider/slider.css",
        Url::templatePath() . "plugins/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css",
        Url::templatePath() . "plugins/AdminLTE/plugins/iCheck/all.css",
        Url::templatePath() . "plugins/AdminLTE/dist/css/skins/_all-skins.min.css",

        // Site
        Url::templatePath() . "css/style.css",
    ]);

    // hook for plugging in css
    $hooks->run('css');
?>
    
<!-- JS -->
<?php 
    Assets::js([
        Url::templatePath() . "js/jQuery-V3.js",
        Url::templatePath() . "plugins/bs3/js/bootstrap.js",
        Url::templatePath() . "plugins/fontawesome/js/all.js",
        Url::templatePath() . "plugins/jqueryUi/jquery-ui.min.js",
        Url::templatePath() . "plugins/snap-svg/snap.svg-min.js",
        Url::templatePath() . "plugins/panzoom/panzoom.js",
        Url::templatePath() . "plugins/timePicker/jquery-ui-timepicker-addon.js",
        Url::templatePath() . "plugins/timePicker/jquery-ui-timepicker-addon.js",
        Url::templatePath() . "plugins/timePicker/jquery.set.french.js",
        Url::templatePath() . "plugins/timePicker/touch.punch.js",
        
        // Datatable
        Url::templatePath() . "plugins/datatable/datatables.min.js",
        Url::templatePath() . "plugins/datatable/js/dataTables.bootstrap.min.js",
        Url::templatePath() . "plugins/datatable/responsive/js/dataTables.responsive.js",
        Url::templatePath() . "plugins/datatable/responsive/js/responsive.bootstrap4.js",
        
        // Admin LTE
        Url::templatePath() . "plugins/AdminLTE/dist/js/adminlte.min.js",
        Url::templatePath() . "plugins/AdminLTE/plugins/bootstrap-slider/bootstrap-slider.js",
        Url::templatePath() . "plugins/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js",
        Url::templatePath() . "plugins/AdminLTE/plugins/iCheck/icheck.js",
        
        // Socket.io
        Url::templatePath() . "plugins/AdminLTE/plugins/iCheck/icheck.js",
        
        // Site
        Url::templatePath() . "js/site.js",
    ]);
?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php if(true == true):?>
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>B</b>PRJ</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">BaseProjet</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-envelope-open"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the messages -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <!-- User Image -->
                                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Support Team
                                                <small><i class="far fa-bell"></i> 5 mins</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                                <!-- /.menu -->
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- /.messages-menu -->

                    <!-- Notifications Menu -->
                    <li class="dropdown notifications-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="far fa-bell"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- Inner Menu: contains the notifications -->
                                <ul class="menu">
                                    <li><!-- start notification -->
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <!-- end notification -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks Menu -->
                    <li class="dropdown tasks-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="far fa-flag"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- Inner menu: contains the tasks -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <!-- Task title and progress text -->
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <!-- The progress bar -->
                                            <div class="progress xs">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <p>
                                    <?php //TODO USER HELPER ?>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar">
                            <i class="fas fa-cogs"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <?php if(\Helpers\hUser::isConnected()): ?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="control-sidebar main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?= Url::templatePath() ."plugins/AdminLTE/dist/img/user2-160x160.jpg"?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <!-- Status -->
                    <i class="fa fa-circle text-success"></i>
                    <span>Bonjour  <strong><?= \Helpers\hUser::getPrenom()  ?></strong> ! </span>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu tree" data-widget="tree">
                <li class="header">HEADER</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="">
                    <a href="<?php //TODO redirect ?>">
                        <i class="fa fa-map fa-fw"></i>  <span> Accueil </span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php //TODO redirect ?>">
                        <i class="fas fa-tasks"></i> <span> Demandes </span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php //TODO redirect ?>">
                        <i class="fas fa-cog fa-spin"></i> <span> Profil </span>
                    </a>
                </li>
                <?php //TODO redirect ?>
                    <li class="">
                        <a href="<?php //TODO redirect ?>">
                            <i class="fa fa-users fa-fw"></i> <span> Aministration </span>
                        </a>
                    </li>
                <?php //endif; ?>
                <li class="bg-red-active">
                    <a href="<?= DIR . Url::URL_LOGOUT ?>">
                        <i class="fas fa-sign-out-alt"></i> <span> Déconnexion </span>
                    </a>
                </li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <?php endif; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content container-fluid" style="padding-top: 0px">

            <div class="container"> <?= Session::message("danger"); ?></div>
            <div class="container"> <?= Session::message("success"); ?></div>

<?php endif;?>
<?php
//hook for running code after body tag
$hooks->run('afterBody');
?>
