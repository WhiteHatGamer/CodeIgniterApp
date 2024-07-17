<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Icons</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/dist/css/adminlte.min.css')?>">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><button class='btn bg-gradient-info'><i class="fas fa-bars"></i></button></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url()."admin/"?>frames/dashboard3" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <button class='btn bg-gradient-info'><i class="fas fa-search"></i></button>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <button class='btn bg-gradient-info'><i class="fas fa-search"></i></button>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <button class='btn bg-gradient-info'><i class="fas fa-times"></i></button>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <button class='btn bg-gradient-info'><i class="far fa-comments"></i></button>
          <span class="badge badge-danger navbar-badge">3</td></tr>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?=base_url('assets/dist/img/user1-128x128.jpg')?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><button class='btn bg-gradient-info'><i class="fas fa-star"></i></button></td></tr>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><button class='btn bg-gradient-info'><i class="far fa-clock mr-1"></i></button> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?=base_url('assets/dist/img/user8-128x128.jpg')?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><button class='btn bg-gradient-info'><i class="fas fa-star"></i></button></td></tr>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><button class='btn bg-gradient-info'><i class="far fa-clock mr-1"></i></button> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?=base_url('assets/dist/img/user3-128x128.jpg')?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><button class='btn bg-gradient-info'><i class="fas fa-star"></i></button></td></tr>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><button class='btn bg-gradient-info'><i class="far fa-clock mr-1"></i></button> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <button class='btn bg-gradient-info'><i class="far fa-bell"></i></button>
          <span class="badge badge-warning navbar-badge">15</td></tr>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</td></tr>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <button class='btn bg-gradient-info'><i class="fas fa-envelope mr-2"></i></button> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</td></tr>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <button class='btn bg-gradient-info'><i class="fas fa-users mr-2"></i></button> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</td></tr>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <button class='btn bg-gradient-info'><i class="fas fa-file mr-2"></i></button> 3 new reports
            <span class="float-right text-muted text-sm">2 days</td></tr>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <button class='btn bg-gradient-info'><i class="fas fa-expand-arrows-alt"></i></button>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <button class='btn bg-gradient-info'><i class="fas fa-th-large"></i></button>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url()."index.php/admin/"?>frames/dashboard3" class="brand-link">
      <img src="<?=base_url('assets/dist/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</td></tr>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url('assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2')?>" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <button class='btn bg-gradient-info'><i class="fas fa-search fa-fw"></i></button>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <button class='btn bg-gradient-info'><i class="nav-icon fas fa-tachometer-alt"></i></button>
              <p>
                Dashboard
                <button class='btn bg-gradient-info'><i class="right fas fa-angle-left"></i></button>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= adminUrl()."Travel_planner"?>" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Travel Planner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= adminUrl()?>" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()."index.php/admin/"?>frames/dashboard2" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()."index.php/admin/"?>frames/dashboard3" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?=adminViewsUrl()?>widgets" class="nav-link">
              <button class='btn bg-gradient-info'><i class="nav-icon fas fa-th"></i></button>
              <p>
                Widgets
                <span class="right badge badge-danger">New</td></tr>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <button class='btn bg-gradient-info'><i class="nav-icon fas fa-copy"></i></button>
              <p>
                Layout Options
                <button class='btn bg-gradient-info'><i class="fas fa-angle-left right"></i></button>
                <span class="badge badge-info right">6</td></tr>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>layout/top-nav.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>layout/top-nav-sidebar.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>layout/boxed.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>layout/fixed-sidebar.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>layout/fixed-sidebar-custom.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Fixed Sidebar <small>+ Custom Area</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>layout/fixed-topnav.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>layout/fixed-footer.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>layout/collapsed-sidebar.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <button class='btn bg-gradient-info'><i class="nav-icon fas fa-chart-pie"></i></button>
              <p>
                Charts
                <button class='btn bg-gradient-info'><i class="right fas fa-angle-left"></i></button>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= adminViewsUrl()."charts/chartjs.php"?>" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>charts/flot.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>charts/inline.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>charts/uplot.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <button class='btn bg-gradient-info'><i class="nav-icon fas fa-tree"></i></button>
              <p>
                UI Elements
                <button class='btn bg-gradient-info'><i class="fas fa-angle-left right"></i></button>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>UI/general.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>UI/icons.php" class="nav-link active">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>UI/buttons.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>UI/sliders.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>UI/modals.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>UI/navbar.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>UI/timeline.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>UI/ribbons.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <button class='btn bg-gradient-info'><i class="nav-icon fas fa-edit"></i></button>
              <p>
                Forms
                <button class='btn bg-gradient-info'><i class="fas fa-angle-left right"></i></button>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>forms/general.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>forms/advanced.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>forms/editors.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>forms/validation.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <button class='btn bg-gradient-info'><i class="nav-icon fas fa-table"></i></button>
              <p>
                Tables
                <button class='btn bg-gradient-info'><i class="fas fa-angle-left right"></i></button>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>tables/simple.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>tables/data.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>tables/jsgrid.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="<?=adminViewsUrl()?>calendar" class="nav-link">
              <button class='btn bg-gradient-info'><i class="nav-icon far fa-calendar-alt"></i></button>
              <p>
                Calendar
                <span class="badge badge-info right">2</td></tr>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=adminViewsUrl()?>gallery" class="nav-link">
              <button class='btn bg-gradient-info'><i class="nav-icon far fa-image"></i></button>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=adminViewsUrl()?>kanban" class="nav-link">
              <button class='btn bg-gradient-info'><i class="nav-icon fas fa-columns"></i></button>
              <p>
                Kanban Board
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <button class='btn bg-gradient-info'><i class="nav-icon far fa-envelope"></i></button>
              <p>
                Mailbox
                <button class='btn bg-gradient-info'><i class="fas fa-angle-left right"></i></button>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>mailbox/mailbox.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>mailbox/compose.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>mailbox/read-mail.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <button class='btn bg-gradient-info'><i class="nav-icon fas fa-book"></i></button>
              <p>
                Pages
                <button class='btn bg-gradient-info'><i class="fas fa-angle-left right"></i></button>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>examples/invoice.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>examples/profile.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>examples/e-commerce.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>examples/projects.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>examples/project-add.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>examples/project-edit.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>examples/project-detail.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>examples/contacts.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>examples/faq.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>examples/contact-us.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Contact us</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <button class='btn bg-gradient-info'><i class="nav-icon far fa-plus-square"></i></button>
              <p>
                Extras
                <button class='btn bg-gradient-info'><i class="fas fa-angle-left right"></i></button>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>
                    Login & Register v1
                    <button class='btn bg-gradient-info'><i class="fas fa-angle-left right"></i></button>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?=adminViewsUrl()?>examples/login.php" class="nav-link">
                      <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                      <p>Login v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=adminViewsUrl()?>examples/register.php" class="nav-link">
                      <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                      <p>Register v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=adminViewsUrl()?>examples/forgot-password.php" class="nav-link">
                      <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                      <p>Forgot Password v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=adminViewsUrl()?>examples/recover-password.php" class="nav-link">
                      <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                      <p>Recover Password v1</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>
                    Login & Register v2
                    <button class='btn bg-gradient-info'><i class="fas fa-angle-left right"></i></button>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?=adminViewsUrl()?>examples/login-v2.php" class="nav-link">
                      <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                      <p>Login v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=adminViewsUrl()?>examples/register-v2.php" class="nav-link">
                      <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                      <p>Register v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=adminViewsUrl()?>examples/forgot-password-v2.php" class="nav-link">
                      <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                      <p>Forgot Password v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=adminViewsUrl()?>examples/recover-password-v2.php" class="nav-link">
                      <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                      <p>Recover Password v2</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>examples/lockscreen.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>examples/legacy-user-menu.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>examples/language-menu.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>examples/404.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>examples/500.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>examples/pace.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>examples/blank.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()."index.php/admin/"?>frames/starter" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <button class='btn bg-gradient-info'><i class="nav-icon fas fa-search"></i></button>
              <p>
                Search
                <button class='btn bg-gradient-info'><i class="fas fa-angle-left right"></i></button>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>search/simple.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Simple Search</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=adminViewsUrl()?>search/enhanced.php" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Enhanced</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="<?= base_url()."index.php/admin/"?>frames/iframe" class="nav-link">
              <button class='btn bg-gradient-info'><i class="nav-icon fas fa-ellipsis-h"></i></button>
              <p>Tabbed frames/iframe Plugin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <button class='btn bg-gradient-info'><i class="nav-icon fas fa-file"></i></button>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <button class='btn bg-gradient-info'><i class="fas fa-circle nav-icon"></i></button>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <button class='btn bg-gradient-info'><i class="nav-icon fas fa-circle"></i></button>
              <p>
                Level 1
                <button class='btn bg-gradient-info'><i class="right fas fa-angle-left"></i></button>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>
                    Level 2
                    <button class='btn bg-gradient-info'><i class="right fas fa-angle-left"></i></button>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <button class='btn bg-gradient-info'><i class="far fa-dot-circle nav-icon"></i></button>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <button class='btn bg-gradient-info'><i class="far fa-dot-circle nav-icon"></i></button>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <button class='btn bg-gradient-info'><i class="far fa-dot-circle nav-icon"></i></button>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <button class='btn bg-gradient-info'><i class="far fa-circle nav-icon"></i></button>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <button class='btn bg-gradient-info'><i class="fas fa-circle nav-icon"></i></button>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <button class='btn bg-gradient-info'><i class="nav-icon far fa-circle text-danger"></i></button>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <button class='btn bg-gradient-info'><i class="nav-icon far fa-circle text-warning"></i></button>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <button class='btn bg-gradient-info'><i class="nav-icon far fa-circle text-info"></i></button>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Icons</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Icons</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Icons</h3>
          </div> <!-- /.card-body -->
          <div class="card-body">
            <p>You can use any font library you like with AdminLTE 3.</p>
            <strong>Recommendations</strong>
            <div>
              <a href="https://fontawesome.com/">Font Awesome</a><br>
              <a href="https://useiconic.com/open/">Iconic Icons</a><br>
              <a href="https://ionicons.com/">Ion Icons</a><br>
            </div>
          </div><!-- /.card-body -->
          <div class="col-md-5">
          <table class="table table-bordered">
            <tr><td><b>fa,.fab,.fad,.fal,.far,.fas</b> </td><td> <button class='btn bg-gradient-info'><i class='fa .fab .fad .fal .far .fas'></i></button></td></tr>

            <tr><td><b>fa-lg</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-lg'></i></button><button class='btn bg-gradient-info'><i class='fab fa-lg'></i></button><br></td></tr>

            <tr><td><b>fa-xs</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-xs'></i></button><button class='btn bg-gradient-info'><i class='fab fa-xs'></i></button></td></tr>

            <tr><td><b>fa-sm</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sm'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sm'></i></button></td></tr>

            <tr><td><b>fa-1x</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-1x'></i></button><button class='btn bg-gradient-info'><i class='fab fa-1x'></i></button></td></tr>

            <tr><td><b>fa-2x</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-2x'></i></button><button class='btn bg-gradient-info'><i class='fab fa-2x'></i></button></td></tr>

            <tr><td><b>fa-3x</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-3x'></i></button><button class='btn bg-gradient-info'><i class='fab fa-3x'></i></button></td></tr>

            <tr><td><b>fa-4x</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-4x'></i></button><button class='btn bg-gradient-info'><i class='fab fa-4x'></i></button></td></tr>

            <tr><td><b>fa-5x</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-5x'></i></button><button class='btn bg-gradient-info'><i class='fab fa-5x'></i></button></td></tr>

            <tr><td><b>fa-6x</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-6x'></i></button><button class='btn bg-gradient-info'><i class='fab fa-6x'></i></button></td></tr>

            <tr><td><b>fa-7x</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-7x'></i></button><button class='btn bg-gradient-info'><i class='fab fa-7x'></i></button></td></tr>

            <tr><td><b>fa-8x</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-8x'></i></button><button class='btn bg-gradient-info'><i class='fab fa-8x'></i></button></td></tr>

            <tr><td><b>fa-9x</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-9x'></i></button><button class='btn bg-gradient-info'><i class='fab fa-9x'></i></button></td></tr>

            <tr><td><b>fa-10x</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-10x'></i></button><button class='btn bg-gradient-info'><i class='fab fa-10x'></i></button></td></tr>

            <tr><td><b>fa-fw</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fw'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fw'></i></button></td></tr>

            <tr><td><b>fa-ul</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ul'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ul'></i></button></td></tr>

            <tr><td><b>fa-ul>li</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ul>li'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ul>li'></i></button></td></tr>

            <tr><td><b>fa-li</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-li'></i></button><button class='btn bg-gradient-info'><i class='fab fa-li'></i></button></td></tr>

            <tr><td><b>fa-border</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-border'></i></button><button class='btn bg-gradient-info'><i class='fab fa-border'></i></button></td></tr>

            <tr><td><b>fa-pull-left</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pull-left'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pull-left'></i></button></td></tr>

            <tr><td><b>fa-pull-right</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pull-right'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pull-right'></i></button></td></tr>

            <tr><td><b>fa.fa-pull-left,.fab.fa-pull-left,.fal.fa-pull-left,.far.fa-pull-left,.fas.fa-pull-left</b> </td><td> <button class='btn bg-gradient-info'><i class='fa.fa-pull-left,.fab.fa-pull-left,.fal.fa-pull-left,.far.fa-pull-left,.fas.fa-pull-left'></i></button></td></tr>

            <tr><td><b>fa.fa-pull-right,.fab.fa-pull-right,.fal.fa-pull-right,.far.fa-pull-right,.fas.fa-pull-right</b> </td><td> <button class='btn bg-gradient-info'><i class='fa.fa-pull-right,.fab.fa-pull-right,.fal.fa-pull-right,.far.fa-pull-right,.fas.fa-pull-right'></i></button></td></tr>

            <tr><td><b>fa-spin</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-spin'></i></button><button class='btn bg-gradient-info'><i class='fab fa-spin'></i></button></td></tr>

            <tr><td><b>fa-pulse</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pulse'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pulse'></i></button></td></tr>

            @-webkit-keyframes<tr><td><b>fa-spin</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-spin'></i></button><button class='btn bg-gradient-info'><i class='fab fa-spin'></i></button></td></tr>


            @keyframes<tr><td><b>fa-spin</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-spin'></i></button><button class='btn bg-gradient-info'><i class='fab fa-spin'></i></button></td></tr>

            to
            .fa-rotate-90

            .fa-rotate-180

            .fa-rotate-270

            .fa-flip-horizontal

            <tr><td><b>fa-flip-vertical</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-flip-vertical'></i></button><button class='btn bg-gradient-info'><i class='fab fa-flip-vertical'></i></button></td></tr>

            .fa-flip-both,.fa-flip-horizontal.fa-flip-vertical,.fa-flip-vertical

            <tr><td><b>fa-flip-both,.fa-flip-horizontal.fa-flip-vertical</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-flip-both,.fa-flip-horizontal.fa-flip-vertical'></i></button><button class='btn bg-gradient-info'><i class='fab fa-flip-both,.fa-flip-horizontal.fa-flip-vertical'></i></button></td></tr>

            :root <tr><td><b>fa-flip-both,:root .fa-flip-horizontal,:root .fa-flip-vertical,:root .fa-rotate-90,:root .fa-rotate-180,</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-flip-both,:root .fa-flip-horizontal,:root .fa-flip-vertical,:root .fa-rotate-90,:root .fa-rotate-180,'></i></button><button class='btn bg-gradient-info'><i class='fab fa-flip-both,:root .fa-flip-horizontal,:root .fa-flip-vertical,:root .fa-rotate-90,:root .fa-rotate-180,'></i></button></td></tr>

            <tr><td><b>fa-stack</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-stack'></i></button><button class='btn bg-gradient-info'><i class='fab fa-stack'></i></button></td></tr>

            <tr><td><b>fa-stack-1x,.fa-stack-2x</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-stack-1x,.fa-stack-2x'></i></button><button class='btn bg-gradient-info'><i class='fab fa-stack-1x,.fa-stack-2x'></i></button></td></tr>

            <tr><td><b>fa-stack-1x</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-stack-1x'></i></button><button class='btn bg-gradient-info'><i class='fab fa-stack-1x'></i></button></td></tr>

            <tr><td><b>fa-stack-2x</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-stack-2x'></i></button><button class='btn bg-gradient-info'><i class='fab fa-stack-2x'></i></button></td></tr>

            <tr><td><b>fa-inverse</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-inverse'></i></button><button class='btn bg-gradient-info'><i class='fab fa-inverse'></i></button></td></tr>

            <tr><td><b>fa-500px</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-500px'></i></button><button class='btn bg-gradient-info'><i class='fab fa-500px'></i></button></td></tr>

            <tr><td><b>fa-accessible-icon</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-accessible-icon'></i></button><button class='btn bg-gradient-info'><i class='fab fa-accessible-icon'></i></button></td></tr>

            <tr><td><b>fa-accusoft</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-accusoft'></i></button><button class='btn bg-gradient-info'><i class='fab fa-accusoft'></i></button></td></tr>

            <tr><td><b>fa-acquisitions-incorporated</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-acquisitions-incorporated'></i></button><button class='btn bg-gradient-info'><i class='fab fa-acquisitions-incorporated'></i></button></td></tr>

            <tr><td>fa-ad </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ad'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ad'></i></button></td></tr>

            <tr><td><b>fa-address-book</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-address-book'></i></button><button class='btn bg-gradient-info'><i class='fab fa-address-book'></i></button></td></tr>

            <tr><td><b>fa-address-card</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-address-card'></i></button><button class='btn bg-gradient-info'><i class='fab fa-address-card'></i></button></td></tr>

            <tr><td><b>fa-adjust</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-adjust'></i></button><button class='btn bg-gradient-info'><i class='fab fa-adjust'></i></button></td></tr>

            <tr><td><b>fa-adn</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-adn'></i></button><button class='btn bg-gradient-info'><i class='fab fa-adn'></i></button></td></tr>

            <tr><td><b>fa-adversal</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-adversal'></i></button><button class='btn bg-gradient-info'><i class='fab fa-adversal'></i></button></td></tr>

            <tr><td><b>fa-affiliatetheme</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-affiliatetheme'></i></button><button class='btn bg-gradient-info'><i class='fab fa-affiliatetheme'></i></button></td></tr>

            <tr><td><b>fa-air-freshener</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-air-freshener'></i></button><button class='btn bg-gradient-info'><i class='fab fa-air-freshener'></i></button></td></tr>

            <tr><td><b>fa-airbnb</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-airbnb'></i></button><button class='btn bg-gradient-info'><i class='fab fa-airbnb'></i></button></td></tr>

            <tr><td><b>fa-algolia</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-algolia'></i></button><button class='btn bg-gradient-info'><i class='fab fa-algolia'></i></button></td></tr>

            <tr><td><b>fa-align-center</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-align-center'></i></button><button class='btn bg-gradient-info'><i class='fab fa-align-center'></i></button></td></tr>

            <tr><td><b>fa-align-justify</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-align-justify'></i></button><button class='btn bg-gradient-info'><i class='fab fa-align-justify'></i></button></td></tr>

            <tr><td><b>fa-align-left</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-align-left'></i></button><button class='btn bg-gradient-info'><i class='fab fa-align-left'></i></button></td></tr>

            <tr><td><b>fa-align-right</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-align-right'></i></button><button class='btn bg-gradient-info'><i class='fab fa-align-right'></i></button></td></tr>

            <tr><td><b>fa-alipay</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-alipay'></i></button><button class='btn bg-gradient-info'><i class='fab fa-alipay'></i></button></td></tr>

            <tr><td><b>fa-allergies</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-allergies'></i></button><button class='btn bg-gradient-info'><i class='fab fa-allergies'></i></button></td></tr>

            <tr><td><b>fa-amazon</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-amazon'></i></button><button class='btn bg-gradient-info'><i class='fab fa-amazon'></i></button></td></tr>

            <tr><td><b>fa-amazon-pay</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-amazon-pay'></i></button><button class='btn bg-gradient-info'><i class='fab fa-amazon-pay'></i></button></td></tr>

            <tr><td><b>fa-ambulance</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ambulance'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ambulance'></i></button></td></tr>

            <tr><td><b>fa-american-sign-language-interpreting</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-american-sign-language-interpreting'></i></button><button class='btn bg-gradient-info'><i class='fab fa-american-sign-language-interpreting'></i></button></td></tr>

            <tr><td><b>fa-amilia</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-amilia'></i></button><button class='btn bg-gradient-info'><i class='fab fa-amilia'></i></button></td></tr>

            <tr><td><b>fa-anchor</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-anchor'></i></button><button class='btn bg-gradient-info'><i class='fab fa-anchor'></i></button></td></tr>

            <tr><td><b>fa-android</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-android'></i></button><button class='btn bg-gradient-info'><i class='fab fa-android'></i></button></td></tr>

            <tr><td><b>fa-angellist</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-angellist'></i></button><button class='btn bg-gradient-info'><i class='fab fa-angellist'></i></button></td></tr>

            <tr><td><b>fa-angle-double-down</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-angle-double-down'></i></button><button class='btn bg-gradient-info'><i class='fab fa-angle-double-down'></i></button></td></tr>

            <tr><td><b>fa-angle-double-left</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-angle-double-left'></i></button><button class='btn bg-gradient-info'><i class='fab fa-angle-double-left'></i></button></td></tr>

            <tr><td><b>fa-angle-double-right</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-angle-double-right'></i></button><button class='btn bg-gradient-info'><i class='fab fa-angle-double-right'></i></button></td></tr>

            <tr><td><b>fa-angle-double-up</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-angle-double-up'></i></button><button class='btn bg-gradient-info'><i class='fab fa-angle-double-up'></i></button></td></tr>

            <tr><td><b>fa-angle-down</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-angle-down'></i></button><button class='btn bg-gradient-info'><i class='fab fa-angle-down'></i></button></td></tr>

            <tr><td><b>fa-angle-left</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-angle-left'></i></button><button class='btn bg-gradient-info'><i class='fab fa-angle-left'></i></button></td></tr>

            <tr><td><b>fa-angle-right</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-angle-right'></i></button><button class='btn bg-gradient-info'><i class='fab fa-angle-right'></i></button></td></tr>

            <tr><td><b>fa-angle-up</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-angle-up'></i></button><button class='btn bg-gradient-info'><i class='fab fa-angle-up'></i></button></td></tr>

            <tr><td><b>fa-angry</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-angry'></i></button><button class='btn bg-gradient-info'><i class='fab fa-angry'></i></button></td></tr>

            <tr><td><b>fa-angrycreative</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-angrycreative'></i></button><button class='btn bg-gradient-info'><i class='fab fa-angrycreative'></i></button></td></tr>

            <tr><td><b>fa-angular</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-angular'></i></button><button class='btn bg-gradient-info'><i class='fab fa-angular'></i></button></td></tr>

            <tr><td><b>fa-ankh</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ankh'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ankh'></i></button></td></tr>

            <tr><td><b>fa-app-store</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-app-store'></i></button><button class='btn bg-gradient-info'><i class='fab fa-app-store'></i></button></td></tr>

            <tr><td><b>fa-app-store-ios</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-app-store-ios'></i></button><button class='btn bg-gradient-info'><i class='fab fa-app-store-ios'></i></button></td></tr>

            <tr><td><b>fa-apper</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-apper'></i></button><button class='btn bg-gradient-info'><i class='fab fa-apper'></i></button></td></tr>

            <tr><td><b>fa-apple</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-apple'></i></button><button class='btn bg-gradient-info'><i class='fab fa-apple'></i></button></td></tr>

            <tr><td><b>fa-apple-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-apple-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-apple-alt'></i></button></td></tr>

            <tr><td><b>fa-apple-pay</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-apple-pay'></i></button><button class='btn bg-gradient-info'><i class='fab fa-apple-pay'></i></button></td></tr>

            <tr><td><b>fa-archive</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-archive'></i></button><button class='btn bg-gradient-info'><i class='fab fa-archive'></i></button></td></tr>

            <tr><td><b>fa-archway</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-archway'></i></button><button class='btn bg-gradient-info'><i class='fab fa-archway'></i></button></td></tr>

            <tr><td><b>fa-arrow-alt-circle-down</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-arrow-alt-circle-down'></i></button><button class='btn bg-gradient-info'><i class='fab fa-arrow-alt-circle-down'></i></button></td></tr>

            <tr><td><b>fa-arrow-alt-circle-left</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-arrow-alt-circle-left'></i></button><button class='btn bg-gradient-info'><i class='fab fa-arrow-alt-circle-left'></i></button></td></tr>

            <tr><td><b>fa-arrow-alt-circle-right</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-arrow-alt-circle-right'></i></button><button class='btn bg-gradient-info'><i class='fab fa-arrow-alt-circle-right'></i></button></td></tr>

            <tr><td><b>fa-arrow-alt-circle-up</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-arrow-alt-circle-up'></i></button><button class='btn bg-gradient-info'><i class='fab fa-arrow-alt-circle-up'></i></button></td></tr>

            <tr><td><b>fa-arrow-circle-down</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-arrow-circle-down'></i></button><button class='btn bg-gradient-info'><i class='fab fa-arrow-circle-down'></i></button></td></tr>

            <tr><td><b>fa-arrow-circle-left</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-arrow-circle-left'></i></button><button class='btn bg-gradient-info'><i class='fab fa-arrow-circle-left'></i></button></td></tr>

            <tr><td><b>fa-arrow-circle-right</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-arrow-circle-right'></i></button><button class='btn bg-gradient-info'><i class='fab fa-arrow-circle-right'></i></button></td></tr>

            <tr><td><b>fa-arrow-circle-up</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-arrow-circle-up'></i></button><button class='btn bg-gradient-info'><i class='fab fa-arrow-circle-up'></i></button></td></tr>

            <tr><td><b>fa-arrow-down</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-arrow-down'></i></button><button class='btn bg-gradient-info'><i class='fab fa-arrow-down'></i></button></td></tr>

            <tr><td><b>fa-arrow-left</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-arrow-left'></i></button><button class='btn bg-gradient-info'><i class='fab fa-arrow-left'></i></button></td></tr>

            <tr><td><b>fa-arrow-right</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-arrow-right'></i></button><button class='btn bg-gradient-info'><i class='fab fa-arrow-right'></i></button></td></tr>

            <tr><td><b>fa-arrow-up</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-arrow-up'></i></button><button class='btn bg-gradient-info'><i class='fab fa-arrow-up'></i></button></td></tr>

            <tr><td><b>fa-arrows-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-arrows-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-arrows-alt'></i></button></td></tr>

            <tr><td><b>fa-arrows-alt-h</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-arrows-alt-h'></i></button><button class='btn bg-gradient-info'><i class='fab fa-arrows-alt-h'></i></button></td></tr>

            <tr><td><b>fa-arrows-alt-v</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-arrows-alt-v'></i></button><button class='btn bg-gradient-info'><i class='fab fa-arrows-alt-v'></i></button></td></tr>

            <tr><td><b>fa-artstation</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-artstation'></i></button><button class='btn bg-gradient-info'><i class='fab fa-artstation'></i></button></td></tr>

            <tr><td><b>fa-assistive-listening-systems</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-assistive-listening-systems'></i></button><button class='btn bg-gradient-info'><i class='fab fa-assistive-listening-systems'></i></button></td></tr>

            <tr><td><b>fa-asterisk</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-asterisk'></i></button><button class='btn bg-gradient-info'><i class='fab fa-asterisk'></i></button></td></tr>

            <tr><td><b>fa-asymmetrik</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-asymmetrik'></i></button><button class='btn bg-gradient-info'><i class='fab fa-asymmetrik'></i></button></td></tr>

            <tr><td><b>fa-at</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-at'></i></button><button class='btn bg-gradient-info'><i class='fab fa-at'></i></button></td></tr>

            <tr><td><b>fa-atlas</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-atlas'></i></button><button class='btn bg-gradient-info'><i class='fab fa-atlas'></i></button></td></tr>

            <tr><td><b>fa-atlassian</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-atlassian'></i></button><button class='btn bg-gradient-info'><i class='fab fa-atlassian'></i></button></td></tr>

            <tr><td><b>fa-atom</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-atom'></i></button><button class='btn bg-gradient-info'><i class='fab fa-atom'></i></button></td></tr>

            <tr><td><b>fa-audible</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-audible'></i></button><button class='btn bg-gradient-info'><i class='fab fa-audible'></i></button></td></tr>

            <tr><td><b>fa-audio-description</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-audio-description'></i></button><button class='btn bg-gradient-info'><i class='fab fa-audio-description'></i></button></td></tr>

            <tr><td><b>fa-autoprefixer</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-autoprefixer'></i></button><button class='btn bg-gradient-info'><i class='fab fa-autoprefixer'></i></button></td></tr>

            <tr><td><b>fa-avianex</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-avianex'></i></button><button class='btn bg-gradient-info'><i class='fab fa-avianex'></i></button></td></tr>

            <tr><td><b>fa-aviato</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-aviato'></i></button><button class='btn bg-gradient-info'><i class='fab fa-aviato'></i></button></td></tr>

            <tr><td><b>fa-award</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-award'></i></button><button class='btn bg-gradient-info'><i class='fab fa-award'></i></button></td></tr>

            <tr><td><b>fa-aws</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-aws'></i></button><button class='btn bg-gradient-info'><i class='fab fa-aws'></i></button></td></tr>

            <tr><td><b>fa-baby</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-baby'></i></button><button class='btn bg-gradient-info'><i class='fab fa-baby'></i></button></td></tr>

            <tr><td><b>fa-baby-carriage</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-baby-carriage'></i></button><button class='btn bg-gradient-info'><i class='fab fa-baby-carriage'></i></button></td></tr>

            <tr><td><b>fa-backspace</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-backspace'></i></button><button class='btn bg-gradient-info'><i class='fab fa-backspace'></i></button></td></tr>

            <tr><td><b>fa-backward</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-backward'></i></button><button class='btn bg-gradient-info'><i class='fab fa-backward'></i></button></td></tr>

            <tr><td><b>fa-bacon</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bacon'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bacon'></i></button></td></tr>

            <tr><td><b>fa-bacteria</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bacteria'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bacteria'></i></button></td></tr>

            <tr><td><b>fa-bacterium</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bacterium'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bacterium'></i></button></td></tr>

            <tr><td><b>fa-bahai</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bahai'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bahai'></i></button></td></tr>

            <tr><td><b>fa-balance-scale</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-balance-scale'></i></button><button class='btn bg-gradient-info'><i class='fab fa-balance-scale'></i></button></td></tr>

            <tr><td><b>fa-balance-scale-left</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-balance-scale-left'></i></button><button class='btn bg-gradient-info'><i class='fab fa-balance-scale-left'></i></button></td></tr>

            <tr><td><b>fa-balance-scale-right</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-balance-scale-right'></i></button><button class='btn bg-gradient-info'><i class='fab fa-balance-scale-right'></i></button></td></tr>

            <tr><td><b>fa-ban</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ban'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ban'></i></button></td></tr>

            <tr><td><b>fa-band-aid</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-band-aid'></i></button><button class='btn bg-gradient-info'><i class='fab fa-band-aid'></i></button></td></tr>

            <tr><td><b>fa-bandcamp</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bandcamp'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bandcamp'></i></button></td></tr>

            <tr><td><b>fa-barcode</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-barcode'></i></button><button class='btn bg-gradient-info'><i class='fab fa-barcode'></i></button></td></tr>

            <tr><td><b>fa-bars</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bars'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bars'></i></button></td></tr>

            <tr><td><b>fa-baseball-ball</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-baseball-ball'></i></button><button class='btn bg-gradient-info'><i class='fab fa-baseball-ball'></i></button></td></tr>

            <tr><td><b>fa-basketball-ball</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-basketball-ball'></i></button><button class='btn bg-gradient-info'><i class='fab fa-basketball-ball'></i></button></td></tr>

            <tr><td><b>fa-bath</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bath'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bath'></i></button></td></tr>

            <tr><td><b>fa-battery-empty</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-battery-empty'></i></button><button class='btn bg-gradient-info'><i class='fab fa-battery-empty'></i></button></td></tr>

            <tr><td><b>fa-battery-full</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-battery-full'></i></button><button class='btn bg-gradient-info'><i class='fab fa-battery-full'></i></button></td></tr>

            <tr><td><b>fa-battery-half</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-battery-half'></i></button><button class='btn bg-gradient-info'><i class='fab fa-battery-half'></i></button></td></tr>

            <tr><td><b>fa-battery-quarter</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-battery-quarter'></i></button><button class='btn bg-gradient-info'><i class='fab fa-battery-quarter'></i></button></td></tr>

            <tr><td><b>fa-battery-three-quarters</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-battery-three-quarters'></i></button><button class='btn bg-gradient-info'><i class='fab fa-battery-three-quarters'></i></button></td></tr>

            <tr><td><b>fa-battle-net</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-battle-net'></i></button><button class='btn bg-gradient-info'><i class='fab fa-battle-net'></i></button></td></tr>

            <tr><td><b>fa-bed</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bed'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bed'></i></button></td></tr>

            <tr><td><b>fa-beer</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-beer'></i></button><button class='btn bg-gradient-info'><i class='fab fa-beer'></i></button></td></tr>

            <tr><td><b>fa-behance</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-behance'></i></button><button class='btn bg-gradient-info'><i class='fab fa-behance'></i></button></td></tr>

            <tr><td><b>fa-behance-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-behance-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-behance-square'></i></button></td></tr>

            <tr><td><b>fa-bell</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bell'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bell'></i></button></td></tr>

            <tr><td><b>fa-bell-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bell-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bell-slash'></i></button></td></tr>

            <tr><td><b>fa-bezier-curve</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bezier-curve'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bezier-curve'></i></button></td></tr>

            <tr><td><b>fa-bible</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bible'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bible'></i></button></td></tr>

            <tr><td><b>fa-bicycle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bicycle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bicycle'></i></button></td></tr>

            <tr><td><b>fa-biking</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-biking'></i></button><button class='btn bg-gradient-info'><i class='fab fa-biking'></i></button></td></tr>

            <tr><td><b>fa-bimobject</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bimobject'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bimobject'></i></button></td></tr>

            <tr><td><b>fa-binoculars</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-binoculars'></i></button><button class='btn bg-gradient-info'><i class='fab fa-binoculars'></i></button></td></tr>

            <tr><td><b>fa-biohazard</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-biohazard'></i></button><button class='btn bg-gradient-info'><i class='fab fa-biohazard'></i></button></td></tr>

            <tr><td><b>fa-birthday-cake</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-birthday-cake'></i></button><button class='btn bg-gradient-info'><i class='fab fa-birthday-cake'></i></button></td></tr>

            <tr><td><b>fa-bitbucket</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bitbucket'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bitbucket'></i></button></td></tr>

            <tr><td><b>fa-bitcoin</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bitcoin'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bitcoin'></i></button></td></tr>

            <tr><td><b>fa-bity</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bity'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bity'></i></button></td></tr>

            <tr><td><b>fa-black-tie</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-black-tie'></i></button><button class='btn bg-gradient-info'><i class='fab fa-black-tie'></i></button></td></tr>

            <tr><td><b>fa-blackberry</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-blackberry'></i></button><button class='btn bg-gradient-info'><i class='fab fa-blackberry'></i></button></td></tr>

            <tr><td><b>fa-blender</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-blender'></i></button><button class='btn bg-gradient-info'><i class='fab fa-blender'></i></button></td></tr>

            <tr><td><b>fa-blender-phone</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-blender-phone'></i></button><button class='btn bg-gradient-info'><i class='fab fa-blender-phone'></i></button></td></tr>

            <tr><td><b>fa-blind</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-blind'></i></button><button class='btn bg-gradient-info'><i class='fab fa-blind'></i></button></td></tr>

            <tr><td><b>fa-blog</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-blog'></i></button><button class='btn bg-gradient-info'><i class='fab fa-blog'></i></button></td></tr>

            <tr><td><b>fa-blogger</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-blogger'></i></button><button class='btn bg-gradient-info'><i class='fab fa-blogger'></i></button></td></tr>

            <tr><td><b>fa-blogger-b</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-blogger-b'></i></button><button class='btn bg-gradient-info'><i class='fab fa-blogger-b'></i></button></td></tr>

            <tr><td><b>fa-bluetooth</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bluetooth'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bluetooth'></i></button></td></tr>

            <tr><td><b>fa-bluetooth-b</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bluetooth-b'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bluetooth-b'></i></button></td></tr>

            <tr><td><b>fa-bold</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bold'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bold'></i></button></td></tr>

            <tr><td><b>fa-bolt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bolt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bolt'></i></button></td></tr>

            <tr><td><b>fa-bomb</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bomb'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bomb'></i></button></td></tr>

            <tr><td><b>fa-bone</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bone'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bone'></i></button></td></tr>

            <tr><td><b>fa-bong</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bong'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bong'></i></button></td></tr>

            <tr><td><b>fa-book</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-book'></i></button><button class='btn bg-gradient-info'><i class='fab fa-book'></i></button></td></tr>

            <tr><td><b>fa-book-dead</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-book-dead'></i></button><button class='btn bg-gradient-info'><i class='fab fa-book-dead'></i></button></td></tr>

            <tr><td><b>fa-book-medical</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-book-medical'></i></button><button class='btn bg-gradient-info'><i class='fab fa-book-medical'></i></button></td></tr>

            <tr><td><b>fa-book-open</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-book-open'></i></button><button class='btn bg-gradient-info'><i class='fab fa-book-open'></i></button></td></tr>

            <tr><td><b>fa-book-reader</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-book-reader'></i></button><button class='btn bg-gradient-info'><i class='fab fa-book-reader'></i></button></td></tr>

            <tr><td><b>fa-bookmark</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bookmark'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bookmark'></i></button></td></tr>

            <tr><td><b>fa-bootstrap</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bootstrap'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bootstrap'></i></button></td></tr>

            <tr><td><b>fa-border-all</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-border-all'></i></button><button class='btn bg-gradient-info'><i class='fab fa-border-all'></i></button></td></tr>

            <tr><td><b>fa-border-none</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-border-none'></i></button><button class='btn bg-gradient-info'><i class='fab fa-border-none'></i></button></td></tr>

            <tr><td><b>fa-border-style</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-border-style'></i></button><button class='btn bg-gradient-info'><i class='fab fa-border-style'></i></button></td></tr>

            <tr><td><b>fa-bowling-ball</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bowling-ball'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bowling-ball'></i></button></td></tr>

            <tr><td><b>fa-box</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-box'></i></button><button class='btn bg-gradient-info'><i class='fab fa-box'></i></button></td></tr>

            <tr><td><b>fa-box-open</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-box-open'></i></button><button class='btn bg-gradient-info'><i class='fab fa-box-open'></i></button></td></tr>

            <tr><td><b>fa-box-tissue</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-box-tissue'></i></button><button class='btn bg-gradient-info'><i class='fab fa-box-tissue'></i></button></td></tr>

            <tr><td><b>fa-boxes</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-boxes'></i></button><button class='btn bg-gradient-info'><i class='fab fa-boxes'></i></button></td></tr>

            <tr><td><b>fa-braille</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-braille'></i></button><button class='btn bg-gradient-info'><i class='fab fa-braille'></i></button></td></tr>

            <tr><td><b>fa-brain</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-brain'></i></button><button class='btn bg-gradient-info'><i class='fab fa-brain'></i></button></td></tr>

            <tr><td><b>fa-bread-slice</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bread-slice'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bread-slice'></i></button></td></tr>

            <tr><td><b>fa-briefcase</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-briefcase'></i></button><button class='btn bg-gradient-info'><i class='fab fa-briefcase'></i></button></td></tr>

            <tr><td><b>fa-briefcase-medical</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-briefcase-medical'></i></button><button class='btn bg-gradient-info'><i class='fab fa-briefcase-medical'></i></button></td></tr>

            <tr><td><b>fa-broadcast-tower</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-broadcast-tower'></i></button><button class='btn bg-gradient-info'><i class='fab fa-broadcast-tower'></i></button></td></tr>

            <tr><td><b>fa-broom</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-broom'></i></button><button class='btn bg-gradient-info'><i class='fab fa-broom'></i></button></td></tr>

            <tr><td><b>fa-brush</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-brush'></i></button><button class='btn bg-gradient-info'><i class='fab fa-brush'></i></button></td></tr>

            <tr><td><b>fa-btc</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-btc'></i></button><button class='btn bg-gradient-info'><i class='fab fa-btc'></i></button></td></tr>

            <tr><td><b>fa-buffer</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-buffer'></i></button><button class='btn bg-gradient-info'><i class='fab fa-buffer'></i></button></td></tr>

            <tr><td><b>fa-bug</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bug'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bug'></i></button></td></tr>

            <tr><td><b>fa-building</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-building'></i></button><button class='btn bg-gradient-info'><i class='fab fa-building'></i></button></td></tr>

            <tr><td><b>fa-bullhorn</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bullhorn'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bullhorn'></i></button></td></tr>

            <tr><td><b>fa-bullseye</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bullseye'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bullseye'></i></button></td></tr>

            <tr><td><b>fa-burn</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-burn'></i></button><button class='btn bg-gradient-info'><i class='fab fa-burn'></i></button></td></tr>

            <tr><td><b>fa-buromobelexperte</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-buromobelexperte'></i></button><button class='btn bg-gradient-info'><i class='fab fa-buromobelexperte'></i></button></td></tr>

            <tr><td><b>fa-bus</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bus'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bus'></i></button></td></tr>

            <tr><td><b>fa-bus-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-bus-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-bus-alt'></i></button></td></tr>

            <tr><td><b>fa-business-time</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-business-time'></i></button><button class='btn bg-gradient-info'><i class='fab fa-business-time'></i></button></td></tr>

            <tr><td><b>fa-buy-n-large</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-buy-n-large'></i></button><button class='btn bg-gradient-info'><i class='fab fa-buy-n-large'></i></button></td></tr>

            <tr><td><b>fa-buysellads</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-buysellads'></i></button><button class='btn bg-gradient-info'><i class='fab fa-buysellads'></i></button></td></tr>

            <tr><td><b>fa-calculator</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-calculator'></i></button><button class='btn bg-gradient-info'><i class='fab fa-calculator'></i></button></td></tr>

            <tr><td><b>fa-calendar</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-calendar'></i></button><button class='btn bg-gradient-info'><i class='fab fa-calendar'></i></button></td></tr>

            <tr><td><b>fa-calendar-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-calendar-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-calendar-alt'></i></button></td></tr>

            <tr><td><b>fa-calendar-check</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-calendar-check'></i></button><button class='btn bg-gradient-info'><i class='fab fa-calendar-check'></i></button></td></tr>

            <tr><td><b>fa-calendar-day</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-calendar-day'></i></button><button class='btn bg-gradient-info'><i class='fab fa-calendar-day'></i></button></td></tr>

            <tr><td><b>fa-calendar-minus</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-calendar-minus'></i></button><button class='btn bg-gradient-info'><i class='fab fa-calendar-minus'></i></button></td></tr>

            <tr><td><b>fa-calendar-plus</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-calendar-plus'></i></button><button class='btn bg-gradient-info'><i class='fab fa-calendar-plus'></i></button></td></tr>

            <tr><td><b>fa-calendar-times</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-calendar-times'></i></button><button class='btn bg-gradient-info'><i class='fab fa-calendar-times'></i></button></td></tr>

            <tr><td><b>fa-calendar-week</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-calendar-week'></i></button><button class='btn bg-gradient-info'><i class='fab fa-calendar-week'></i></button></td></tr>

            <tr><td><b>fa-camera</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-camera'></i></button><button class='btn bg-gradient-info'><i class='fab fa-camera'></i></button></td></tr>

            <tr><td><b>fa-camera-retro</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-camera-retro'></i></button><button class='btn bg-gradient-info'><i class='fab fa-camera-retro'></i></button></td></tr>

            <tr><td><b>fa-campground</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-campground'></i></button><button class='btn bg-gradient-info'><i class='fab fa-campground'></i></button></td></tr>

            <tr><td><b>fa-canadian-maple-leaf</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-canadian-maple-leaf'></i></button><button class='btn bg-gradient-info'><i class='fab fa-canadian-maple-leaf'></i></button></td></tr>

            <tr><td><b>fa-candy-cane</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-candy-cane'></i></button><button class='btn bg-gradient-info'><i class='fab fa-candy-cane'></i></button></td></tr>

            <tr><td><b>fa-cannabis</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cannabis'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cannabis'></i></button></td></tr>

            <tr><td><b>fa-capsules</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-capsules'></i></button><button class='btn bg-gradient-info'><i class='fab fa-capsules'></i></button></td></tr>

            <tr><td><b>fa-car</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-car'></i></button><button class='btn bg-gradient-info'><i class='fab fa-car'></i></button></td></tr>

            <tr><td><b>fa-car-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-car-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-car-alt'></i></button></td></tr>

            <tr><td><b>fa-car-battery</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-car-battery'></i></button><button class='btn bg-gradient-info'><i class='fab fa-car-battery'></i></button></td></tr>

            <tr><td><b>fa-car-crash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-car-crash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-car-crash'></i></button></td></tr>

            <tr><td><b>fa-car-side</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-car-side'></i></button><button class='btn bg-gradient-info'><i class='fab fa-car-side'></i></button></td></tr>

            <tr><td><b>fa-caravan</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-caravan'></i></button><button class='btn bg-gradient-info'><i class='fab fa-caravan'></i></button></td></tr>

            <tr><td><b>fa-caret-down</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-caret-down'></i></button><button class='btn bg-gradient-info'><i class='fab fa-caret-down'></i></button></td></tr>

            <tr><td><b>fa-caret-left</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-caret-left'></i></button><button class='btn bg-gradient-info'><i class='fab fa-caret-left'></i></button></td></tr>

            <tr><td><b>fa-caret-right</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-caret-right'></i></button><button class='btn bg-gradient-info'><i class='fab fa-caret-right'></i></button></td></tr>

            <tr><td><b>fa-caret-square-down</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-caret-square-down'></i></button><button class='btn bg-gradient-info'><i class='fab fa-caret-square-down'></i></button></td></tr>

            <tr><td><b>fa-caret-square-left</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-caret-square-left'></i></button><button class='btn bg-gradient-info'><i class='fab fa-caret-square-left'></i></button></td></tr>

            <tr><td><b>fa-caret-square-right</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-caret-square-right'></i></button><button class='btn bg-gradient-info'><i class='fab fa-caret-square-right'></i></button></td></tr>

            <tr><td><b>fa-caret-square-up</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-caret-square-up'></i></button><button class='btn bg-gradient-info'><i class='fab fa-caret-square-up'></i></button></td></tr>

            <tr><td><b>fa-caret-up</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-caret-up'></i></button><button class='btn bg-gradient-info'><i class='fab fa-caret-up'></i></button></td></tr>

            <tr><td><b>fa-carrot</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-carrot'></i></button><button class='btn bg-gradient-info'><i class='fab fa-carrot'></i></button></td></tr>

            <tr><td><b>fa-cart-arrow-down</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cart-arrow-down'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cart-arrow-down'></i></button></td></tr>

            <tr><td><b>fa-cart-plus</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cart-plus'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cart-plus'></i></button></td></tr>

            <tr><td><b>fa-cash-register</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cash-register'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cash-register'></i></button></td></tr>

            <tr><td><b>fa-cat</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cat'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cat'></i></button></td></tr>

            <tr><td><b>fa-cc-amazon-pay</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cc-amazon-pay'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cc-amazon-pay'></i></button></td></tr>

            <tr><td><b>fa-cc-amex</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cc-amex'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cc-amex'></i></button></td></tr>

            <tr><td><b>fa-cc-apple-pay</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cc-apple-pay'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cc-apple-pay'></i></button></td></tr>

            <tr><td><b>fa-cc-diners-club</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cc-diners-club'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cc-diners-club'></i></button></td></tr>

            <tr><td><b>fa-cc-discover</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cc-discover'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cc-discover'></i></button></td></tr>

            <tr><td><b>fa-cc-jcb</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cc-jcb'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cc-jcb'></i></button></td></tr>

            <tr><td><b>fa-cc-mastercard</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cc-mastercard'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cc-mastercard'></i></button></td></tr>

            <tr><td><b>fa-cc-paypal</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cc-paypal'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cc-paypal'></i></button></td></tr>

            <tr><td><b>fa-cc-stripe</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cc-stripe'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cc-stripe'></i></button></td></tr>

            <tr><td><b>fa-cc-visa</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cc-visa'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cc-visa'></i></button></td></tr>

            <tr><td><b>fa-centercode</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-centercode'></i></button><button class='btn bg-gradient-info'><i class='fab fa-centercode'></i></button></td></tr>

            <tr><td><b>fa-centos</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-centos'></i></button><button class='btn bg-gradient-info'><i class='fab fa-centos'></i></button></td></tr>

            <tr><td><b>fa-certificate</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-certificate'></i></button><button class='btn bg-gradient-info'><i class='fab fa-certificate'></i></button></td></tr>

            <tr><td><b>fa-chair</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chair'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chair'></i></button></td></tr>

            <tr><td><b>fa-chalkboard</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chalkboard'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chalkboard'></i></button></td></tr>

            <tr><td><b>fa-chalkboard-teacher</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chalkboard-teacher'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chalkboard-teacher'></i></button></td></tr>

            <tr><td><b>fa-charging-station</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-charging-station'></i></button><button class='btn bg-gradient-info'><i class='fab fa-charging-station'></i></button></td></tr>

            <tr><td><b>fa-chart-area</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chart-area'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chart-area'></i></button></td></tr>

            <tr><td><b>fa-chart-bar</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chart-bar'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chart-bar'></i></button></td></tr>

            <tr><td><b>fa-chart-line</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chart-line'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chart-line'></i></button></td></tr>

            <tr><td><b>fa-chart-pie</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chart-pie'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chart-pie'></i></button></td></tr>

            <tr><td><b>fa-check</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-check'></i></button><button class='btn bg-gradient-info'><i class='fab fa-check'></i></button></td></tr>

            <tr><td><b>fa-check-circle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-check-circle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-check-circle'></i></button></td></tr>

            <tr><td><b>fa-check-double</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-check-double'></i></button><button class='btn bg-gradient-info'><i class='fab fa-check-double'></i></button></td></tr>

            <tr><td><b>fa-check-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-check-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-check-square'></i></button></td></tr>

            <tr><td><b>fa-cheese</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cheese'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cheese'></i></button></td></tr>

            <tr><td><b>fa-chess</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chess'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chess'></i></button></td></tr>

            <tr><td><b>fa-chess-bishop</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chess-bishop'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chess-bishop'></i></button></td></tr>

            <tr><td><b>fa-chess-board</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chess-board'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chess-board'></i></button></td></tr>

            <tr><td><b>fa-chess-king</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chess-king'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chess-king'></i></button></td></tr>

            <tr><td><b>fa-chess-knight</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chess-knight'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chess-knight'></i></button></td></tr>

            <tr><td><b>fa-chess-pawn</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chess-pawn'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chess-pawn'></i></button></td></tr>

            <tr><td><b>fa-chess-queen</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chess-queen'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chess-queen'></i></button></td></tr>

            <tr><td><b>fa-chess-rook</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chess-rook'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chess-rook'></i></button></td></tr>

            <tr><td><b>fa-chevron-circle-down</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chevron-circle-down'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chevron-circle-down'></i></button></td></tr>

            <tr><td><b>fa-chevron-circle-left</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chevron-circle-left'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chevron-circle-left'></i></button></td></tr>

            <tr><td><b>fa-chevron-circle-right</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chevron-circle-right'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chevron-circle-right'></i></button></td></tr>

            <tr><td><b>fa-chevron-circle-up</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chevron-circle-up'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chevron-circle-up'></i></button></td></tr>

            <tr><td><b>fa-chevron-down</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chevron-down'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chevron-down'></i></button></td></tr>

            <tr><td><b>fa-chevron-left</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chevron-left'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chevron-left'></i></button></td></tr>

            <tr><td><b>fa-chevron-right</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chevron-right'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chevron-right'></i></button></td></tr>

            <tr><td><b>fa-chevron-up</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chevron-up'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chevron-up'></i></button></td></tr>

            <tr><td><b>fa-child</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-child'></i></button><button class='btn bg-gradient-info'><i class='fab fa-child'></i></button></td></tr>

            <tr><td><b>fa-chrome</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chrome'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chrome'></i></button></td></tr>

            <tr><td><b>fa-chromecast</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-chromecast'></i></button><button class='btn bg-gradient-info'><i class='fab fa-chromecast'></i></button></td></tr>

            <tr><td><b>fa-church</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-church'></i></button><button class='btn bg-gradient-info'><i class='fab fa-church'></i></button></td></tr>

            <tr><td><b>fa-circle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-circle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-circle'></i></button></td></tr>

            <tr><td><b>fa-circle-notch</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-circle-notch'></i></button><button class='btn bg-gradient-info'><i class='fab fa-circle-notch'></i></button></td></tr>

            <tr><td><b>fa-city</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-city'></i></button><button class='btn bg-gradient-info'><i class='fab fa-city'></i></button></td></tr>

            <tr><td><b>fa-clinic-medical</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-clinic-medical'></i></button><button class='btn bg-gradient-info'><i class='fab fa-clinic-medical'></i></button></td></tr>

            <tr><td><b>fa-clipboard</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-clipboard'></i></button><button class='btn bg-gradient-info'><i class='fab fa-clipboard'></i></button></td></tr>

            <tr><td><b>fa-clipboard-check</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-clipboard-check'></i></button><button class='btn bg-gradient-info'><i class='fab fa-clipboard-check'></i></button></td></tr>

            <tr><td><b>fa-clipboard-list</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-clipboard-list'></i></button><button class='btn bg-gradient-info'><i class='fab fa-clipboard-list'></i></button></td></tr>

            <tr><td><b>fa-clock</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-clock'></i></button><button class='btn bg-gradient-info'><i class='fab fa-clock'></i></button></td></tr>

            <tr><td><b>fa-clone</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-clone'></i></button><button class='btn bg-gradient-info'><i class='fab fa-clone'></i></button></td></tr>

            <tr><td><b>fa-closed-captioning</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-closed-captioning'></i></button><button class='btn bg-gradient-info'><i class='fab fa-closed-captioning'></i></button></td></tr>

            <tr><td><b>fa-cloud</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cloud'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cloud'></i></button></td></tr>

            <tr><td><b>fa-cloud-download-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cloud-download-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cloud-download-alt'></i></button></td></tr>

            <tr><td><b>fa-cloud-meatball</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cloud-meatball'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cloud-meatball'></i></button></td></tr>

            <tr><td><b>fa-cloud-moon</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cloud-moon'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cloud-moon'></i></button></td></tr>

            <tr><td><b>fa-cloud-moon-rain</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cloud-moon-rain'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cloud-moon-rain'></i></button></td></tr>

            <tr><td><b>fa-cloud-rain</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cloud-rain'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cloud-rain'></i></button></td></tr>

            <tr><td><b>fa-cloud-showers-heavy</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cloud-showers-heavy'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cloud-showers-heavy'></i></button></td></tr>

            <tr><td><b>fa-cloud-sun</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cloud-sun'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cloud-sun'></i></button></td></tr>

            <tr><td><b>fa-cloud-sun-rain</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cloud-sun-rain'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cloud-sun-rain'></i></button></td></tr>

            <tr><td><b>fa-cloud-upload-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cloud-upload-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cloud-upload-alt'></i></button></td></tr>

            <tr><td><b>fa-cloudflare</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cloudflare'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cloudflare'></i></button></td></tr>

            <tr><td><b>fa-cloudscale</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cloudscale'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cloudscale'></i></button></td></tr>

            <tr><td><b>fa-cloudsmith</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cloudsmith'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cloudsmith'></i></button></td></tr>

            <tr><td><b>fa-cloudversify</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cloudversify'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cloudversify'></i></button></td></tr>

            <tr><td><b>fa-cocktail</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cocktail'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cocktail'></i></button></td></tr>

            <tr><td><b>fa-code</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-code'></i></button><button class='btn bg-gradient-info'><i class='fab fa-code'></i></button></td></tr>

            <tr><td><b>fa-code-branch</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-code-branch'></i></button><button class='btn bg-gradient-info'><i class='fab fa-code-branch'></i></button></td></tr>

            <tr><td><b>fa-codepen</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-codepen'></i></button><button class='btn bg-gradient-info'><i class='fab fa-codepen'></i></button></td></tr>

            <tr><td><b>fa-codiepie</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-codiepie'></i></button><button class='btn bg-gradient-info'><i class='fab fa-codiepie'></i></button></td></tr>

            <tr><td><b>fa-coffee</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-coffee'></i></button><button class='btn bg-gradient-info'><i class='fab fa-coffee'></i></button></td></tr>

            <tr><td><b>fa-cog</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cog'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cog'></i></button></td></tr>

            <tr><td><b>fa-cogs</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cogs'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cogs'></i></button></td></tr>

            <tr><td><b>fa-coins</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-coins'></i></button><button class='btn bg-gradient-info'><i class='fab fa-coins'></i></button></td></tr>

            <tr><td><b>fa-columns</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-columns'></i></button><button class='btn bg-gradient-info'><i class='fab fa-columns'></i></button></td></tr>

            <tr><td><b>fa-comment</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-comment'></i></button><button class='btn bg-gradient-info'><i class='fab fa-comment'></i></button></td></tr>

            <tr><td><b>fa-comment-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-comment-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-comment-alt'></i></button></td></tr>

            <tr><td><b>fa-comment-dollar</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-comment-dollar'></i></button><button class='btn bg-gradient-info'><i class='fab fa-comment-dollar'></i></button></td></tr>

            <tr><td><b>fa-comment-dots</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-comment-dots'></i></button><button class='btn bg-gradient-info'><i class='fab fa-comment-dots'></i></button></td></tr>

            <tr><td><b>fa-comment-medical</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-comment-medical'></i></button><button class='btn bg-gradient-info'><i class='fab fa-comment-medical'></i></button></td></tr>

            <tr><td><b>fa-comment-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-comment-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-comment-slash'></i></button></td></tr>

            <tr><td><b>fa-comments</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-comments'></i></button><button class='btn bg-gradient-info'><i class='fab fa-comments'></i></button></td></tr>

            <tr><td><b>fa-comments-dollar</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-comments-dollar'></i></button><button class='btn bg-gradient-info'><i class='fab fa-comments-dollar'></i></button></td></tr>

            <tr><td><b>fa-compact-disc</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-compact-disc'></i></button><button class='btn bg-gradient-info'><i class='fab fa-compact-disc'></i></button></td></tr>

            <tr><td><b>fa-compass</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-compass'></i></button><button class='btn bg-gradient-info'><i class='fab fa-compass'></i></button></td></tr>

            <tr><td><b>fa-compress</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-compress'></i></button><button class='btn bg-gradient-info'><i class='fab fa-compress'></i></button></td></tr>

            <tr><td><b>fa-compress-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-compress-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-compress-alt'></i></button></td></tr>

            <tr><td><b>fa-compress-arrows-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-compress-arrows-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-compress-arrows-alt'></i></button></td></tr>

            <tr><td><b>fa-concierge-bell</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-concierge-bell'></i></button><button class='btn bg-gradient-info'><i class='fab fa-concierge-bell'></i></button></td></tr>

            <tr><td><b>fa-confluence</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-confluence'></i></button><button class='btn bg-gradient-info'><i class='fab fa-confluence'></i></button></td></tr>

            <tr><td><b>fa-connectdevelop</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-connectdevelop'></i></button><button class='btn bg-gradient-info'><i class='fab fa-connectdevelop'></i></button></td></tr>

            <tr><td><b>fa-contao</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-contao'></i></button><button class='btn bg-gradient-info'><i class='fab fa-contao'></i></button></td></tr>

            <tr><td><b>fa-cookie</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cookie'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cookie'></i></button></td></tr>

            <tr><td><b>fa-cookie-bite</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cookie-bite'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cookie-bite'></i></button></td></tr>

            <tr><td><b>fa-copy</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-copy'></i></button><button class='btn bg-gradient-info'><i class='fab fa-copy'></i></button></td></tr>

            <tr><td><b>fa-copyright</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-copyright'></i></button><button class='btn bg-gradient-info'><i class='fab fa-copyright'></i></button></td></tr>

            <tr><td><b>fa-cotton-bureau</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cotton-bureau'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cotton-bureau'></i></button></td></tr>

            <tr><td><b>fa-couch</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-couch'></i></button><button class='btn bg-gradient-info'><i class='fab fa-couch'></i></button></td></tr>

            <tr><td><b>fa-cpanel</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cpanel'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cpanel'></i></button></td></tr>

            <tr><td><b>fa-creative-commons</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-creative-commons'></i></button><button class='btn bg-gradient-info'><i class='fab fa-creative-commons'></i></button></td></tr>

            <tr><td><b>fa-creative-commons-by</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-creative-commons-by'></i></button><button class='btn bg-gradient-info'><i class='fab fa-creative-commons-by'></i></button></td></tr>

            <tr><td><b>fa-creative-commons-nc</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-creative-commons-nc'></i></button><button class='btn bg-gradient-info'><i class='fab fa-creative-commons-nc'></i></button></td></tr>

            <tr><td><b>fa-creative-commons-nc-eu</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-creative-commons-nc-eu'></i></button><button class='btn bg-gradient-info'><i class='fab fa-creative-commons-nc-eu'></i></button></td></tr>

            <tr><td><b>fa-creative-commons-nc-jp</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-creative-commons-nc-jp'></i></button><button class='btn bg-gradient-info'><i class='fab fa-creative-commons-nc-jp'></i></button></td></tr>

            <tr><td><b>fa-creative-commons-nd</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-creative-commons-nd'></i></button><button class='btn bg-gradient-info'><i class='fab fa-creative-commons-nd'></i></button></td></tr>

            <tr><td><b>fa-creative-commons-pd</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-creative-commons-pd'></i></button><button class='btn bg-gradient-info'><i class='fab fa-creative-commons-pd'></i></button></td></tr>

            <tr><td><b>fa-creative-commons-pd-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-creative-commons-pd-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-creative-commons-pd-alt'></i></button></td></tr>

            <tr><td><b>fa-creative-commons-remix</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-creative-commons-remix'></i></button><button class='btn bg-gradient-info'><i class='fab fa-creative-commons-remix'></i></button></td></tr>

            <tr><td><b>fa-creative-commons-sa</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-creative-commons-sa'></i></button><button class='btn bg-gradient-info'><i class='fab fa-creative-commons-sa'></i></button></td></tr>

            <tr><td><b>fa-creative-commons-sampling</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-creative-commons-sampling'></i></button><button class='btn bg-gradient-info'><i class='fab fa-creative-commons-sampling'></i></button></td></tr>

            <tr><td><b>fa-creative-commons-sampling-plus</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-creative-commons-sampling-plus'></i></button><button class='btn bg-gradient-info'><i class='fab fa-creative-commons-sampling-plus'></i></button></td></tr>

            <tr><td><b>fa-creative-commons-share</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-creative-commons-share'></i></button><button class='btn bg-gradient-info'><i class='fab fa-creative-commons-share'></i></button></td></tr>

            <tr><td><b>fa-creative-commons-zero</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-creative-commons-zero'></i></button><button class='btn bg-gradient-info'><i class='fab fa-creative-commons-zero'></i></button></td></tr>

            <tr><td><b>fa-credit-card</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-credit-card'></i></button><button class='btn bg-gradient-info'><i class='fab fa-credit-card'></i></button></td></tr>

            <tr><td><b>fa-critical-role</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-critical-role'></i></button><button class='btn bg-gradient-info'><i class='fab fa-critical-role'></i></button></td></tr>

            <tr><td><b>fa-crop</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-crop'></i></button><button class='btn bg-gradient-info'><i class='fab fa-crop'></i></button></td></tr>

            <tr><td><b>fa-crop-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-crop-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-crop-alt'></i></button></td></tr>

            <tr><td><b>fa-cross</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cross'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cross'></i></button></td></tr>

            <tr><td><b>fa-crosshairs</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-crosshairs'></i></button><button class='btn bg-gradient-info'><i class='fab fa-crosshairs'></i></button></td></tr>

            <tr><td><b>fa-crow</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-crow'></i></button><button class='btn bg-gradient-info'><i class='fab fa-crow'></i></button></td></tr>

            <tr><td><b>fa-crown</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-crown'></i></button><button class='btn bg-gradient-info'><i class='fab fa-crown'></i></button></td></tr>

            <tr><td><b>fa-crutch</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-crutch'></i></button><button class='btn bg-gradient-info'><i class='fab fa-crutch'></i></button></td></tr>

            <tr><td><b>fa-css3</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-css3'></i></button><button class='btn bg-gradient-info'><i class='fab fa-css3'></i></button></td></tr>

            <tr><td><b>fa-css3-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-css3-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-css3-alt'></i></button></td></tr>

            <tr><td><b>fa-cube</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cube'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cube'></i></button></td></tr>

            <tr><td><b>fa-cubes</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cubes'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cubes'></i></button></td></tr>

            <tr><td><b>fa-cut</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cut'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cut'></i></button></td></tr>

            <tr><td><b>fa-cuttlefish</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-cuttlefish'></i></button><button class='btn bg-gradient-info'><i class='fab fa-cuttlefish'></i></button></td></tr>

            <tr><td><b>fa-d-and-d</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-d-and-d'></i></button><button class='btn bg-gradient-info'><i class='fab fa-d-and-d'></i></button></td></tr>

            <tr><td><b>fa-d-and-d-beyond</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-d-and-d-beyond'></i></button><button class='btn bg-gradient-info'><i class='fab fa-d-and-d-beyond'></i></button></td></tr>

            <tr><td><b>fa-dailymotion</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dailymotion'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dailymotion'></i></button></td></tr>

            <tr><td><b>fa-dashcube</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dashcube'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dashcube'></i></button></td></tr>

            <tr><td><b>fa-database</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-database'></i></button><button class='btn bg-gradient-info'><i class='fab fa-database'></i></button></td></tr>

            <tr><td><b>fa-deaf</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-deaf'></i></button><button class='btn bg-gradient-info'><i class='fab fa-deaf'></i></button></td></tr>

            <tr><td><b>fa-deezer</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-deezer'></i></button><button class='btn bg-gradient-info'><i class='fab fa-deezer'></i></button></td></tr>

            <tr><td><b>fa-delicious</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-delicious'></i></button><button class='btn bg-gradient-info'><i class='fab fa-delicious'></i></button></td></tr>

            <tr><td><b>fa-democrat</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-democrat'></i></button><button class='btn bg-gradient-info'><i class='fab fa-democrat'></i></button></td></tr>

            <tr><td><b>fa-deploydog</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-deploydog'></i></button><button class='btn bg-gradient-info'><i class='fab fa-deploydog'></i></button></td></tr>

            <tr><td><b>fa-deskpro</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-deskpro'></i></button><button class='btn bg-gradient-info'><i class='fab fa-deskpro'></i></button></td></tr>

            <tr><td><b>fa-desktop</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-desktop'></i></button><button class='btn bg-gradient-info'><i class='fab fa-desktop'></i></button></td></tr>

            <tr><td><b>fa-dev</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dev'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dev'></i></button></td></tr>

            <tr><td><b>fa-deviantart</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-deviantart'></i></button><button class='btn bg-gradient-info'><i class='fab fa-deviantart'></i></button></td></tr>

            <tr><td><b>fa-dharmachakra</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dharmachakra'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dharmachakra'></i></button></td></tr>

            <tr><td><b>fa-dhl</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dhl'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dhl'></i></button></td></tr>

            <tr><td><b>fa-diagnoses</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-diagnoses'></i></button><button class='btn bg-gradient-info'><i class='fab fa-diagnoses'></i></button></td></tr>

            <tr><td><b>fa-diaspora</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-diaspora'></i></button><button class='btn bg-gradient-info'><i class='fab fa-diaspora'></i></button></td></tr>

            <tr><td><b>fa-dice</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dice'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dice'></i></button></td></tr>

            <tr><td><b>fa-dice-d20</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dice-d20'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dice-d20'></i></button></td></tr>

            <tr><td><b>fa-dice-d6</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dice-d6'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dice-d6'></i></button></td></tr>

            <tr><td><b>fa-dice-five</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dice-five'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dice-five'></i></button></td></tr>

            <tr><td><b>fa-dice-four</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dice-four'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dice-four'></i></button></td></tr>

            <tr><td><b>fa-dice-one</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dice-one'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dice-one'></i></button></td></tr>

            <tr><td><b>fa-dice-six</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dice-six'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dice-six'></i></button></td></tr>

            <tr><td><b>fa-dice-three</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dice-three'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dice-three'></i></button></td></tr>

            <tr><td><b>fa-dice-two</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dice-two'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dice-two'></i></button></td></tr>

            <tr><td><b>fa-digg</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-digg'></i></button><button class='btn bg-gradient-info'><i class='fab fa-digg'></i></button></td></tr>

            <tr><td><b>fa-digital-ocean</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-digital-ocean'></i></button><button class='btn bg-gradient-info'><i class='fab fa-digital-ocean'></i></button></td></tr>

            <tr><td><b>fa-digital-tachograph</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-digital-tachograph'></i></button><button class='btn bg-gradient-info'><i class='fab fa-digital-tachograph'></i></button></td></tr>

            <tr><td><b>fa-directions</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-directions'></i></button><button class='btn bg-gradient-info'><i class='fab fa-directions'></i></button></td></tr>

            <tr><td><b>fa-discord</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-discord'></i></button><button class='btn bg-gradient-info'><i class='fab fa-discord'></i></button></td></tr>

            <tr><td><b>fa-discourse</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-discourse'></i></button><button class='btn bg-gradient-info'><i class='fab fa-discourse'></i></button></td></tr>

            <tr><td><b>fa-disease</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-disease'></i></button><button class='btn bg-gradient-info'><i class='fab fa-disease'></i></button></td></tr>

            <tr><td><b>fa-divide</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-divide'></i></button><button class='btn bg-gradient-info'><i class='fab fa-divide'></i></button></td></tr>

            <tr><td><b>fa-dizzy</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dizzy'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dizzy'></i></button></td></tr>

            <tr><td><b>fa-dna</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dna'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dna'></i></button></td></tr>

            <tr><td><b>fa-dochub</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dochub'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dochub'></i></button></td></tr>

            <tr><td><b>fa-docker</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-docker'></i></button><button class='btn bg-gradient-info'><i class='fab fa-docker'></i></button></td></tr>

            <tr><td><b>fa-dog</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dog'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dog'></i></button></td></tr>

            <tr><td><b>fa-dollar-sign</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dollar-sign'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dollar-sign'></i></button></td></tr>

            <tr><td><b>fa-dolly</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dolly'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dolly'></i></button></td></tr>

            <tr><td><b>fa-dolly-flatbed</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dolly-flatbed'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dolly-flatbed'></i></button></td></tr>

            <tr><td><b>fa-donate</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-donate'></i></button><button class='btn bg-gradient-info'><i class='fab fa-donate'></i></button></td></tr>

            <tr><td><b>fa-door-closed</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-door-closed'></i></button><button class='btn bg-gradient-info'><i class='fab fa-door-closed'></i></button></td></tr>

            <tr><td><b>fa-door-open</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-door-open'></i></button><button class='btn bg-gradient-info'><i class='fab fa-door-open'></i></button></td></tr>

            <tr><td><b>fa-dot-circle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dot-circle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dot-circle'></i></button></td></tr>

            <tr><td><b>fa-dove</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dove'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dove'></i></button></td></tr>

            <tr><td><b>fa-download</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-download'></i></button><button class='btn bg-gradient-info'><i class='fab fa-download'></i></button></td></tr>

            <tr><td><b>fa-draft2digital</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-draft2digital'></i></button><button class='btn bg-gradient-info'><i class='fab fa-draft2digital'></i></button></td></tr>

            <tr><td><b>fa-drafting-compass</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-drafting-compass'></i></button><button class='btn bg-gradient-info'><i class='fab fa-drafting-compass'></i></button></td></tr>

            <tr><td><b>fa-dragon</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dragon'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dragon'></i></button></td></tr>

            <tr><td><b>fa-draw-polygon</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-draw-polygon'></i></button><button class='btn bg-gradient-info'><i class='fab fa-draw-polygon'></i></button></td></tr>

            <tr><td><b>fa-dribbble</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dribbble'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dribbble'></i></button></td></tr>

            <tr><td><b>fa-dribbble-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dribbble-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dribbble-square'></i></button></td></tr>

            <tr><td><b>fa-dropbox</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dropbox'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dropbox'></i></button></td></tr>

            <tr><td><b>fa-drum</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-drum'></i></button><button class='btn bg-gradient-info'><i class='fab fa-drum'></i></button></td></tr>

            <tr><td><b>fa-drum-steelpan</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-drum-steelpan'></i></button><button class='btn bg-gradient-info'><i class='fab fa-drum-steelpan'></i></button></td></tr>

            <tr><td><b>fa-drumstick-bite</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-drumstick-bite'></i></button><button class='btn bg-gradient-info'><i class='fab fa-drumstick-bite'></i></button></td></tr>

            <tr><td><b>fa-drupal</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-drupal'></i></button><button class='btn bg-gradient-info'><i class='fab fa-drupal'></i></button></td></tr>

            <tr><td><b>fa-dumbbell</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dumbbell'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dumbbell'></i></button></td></tr>

            <tr><td><b>fa-dumpster</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dumpster'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dumpster'></i></button></td></tr>

            <tr><td><b>fa-dumpster-fire</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dumpster-fire'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dumpster-fire'></i></button></td></tr>

            <tr><td><b>fa-dungeon</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dungeon'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dungeon'></i></button></td></tr>

            <tr><td><b>fa-dyalog</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-dyalog'></i></button><button class='btn bg-gradient-info'><i class='fab fa-dyalog'></i></button></td></tr>

            <tr><td><b>fa-earlybirds</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-earlybirds'></i></button><button class='btn bg-gradient-info'><i class='fab fa-earlybirds'></i></button></td></tr>

            <tr><td><b>fa-ebay</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ebay'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ebay'></i></button></td></tr>

            <tr><td><b>fa-edge</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-edge'></i></button><button class='btn bg-gradient-info'><i class='fab fa-edge'></i></button></td></tr>

            <tr><td><b>fa-edge-legacy</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-edge-legacy'></i></button><button class='btn bg-gradient-info'><i class='fab fa-edge-legacy'></i></button></td></tr>

            <tr><td><b>fa-edit</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-edit'></i></button><button class='btn bg-gradient-info'><i class='fab fa-edit'></i></button></td></tr>

            <tr><td><b>fa-egg</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-egg'></i></button><button class='btn bg-gradient-info'><i class='fab fa-egg'></i></button></td></tr>

            <tr><td><b>fa-eject</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-eject'></i></button><button class='btn bg-gradient-info'><i class='fab fa-eject'></i></button></td></tr>

            <tr><td><b>fa-elementor</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-elementor'></i></button><button class='btn bg-gradient-info'><i class='fab fa-elementor'></i></button></td></tr>

            <tr><td><b>fa-ellipsis-h</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ellipsis-h'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ellipsis-h'></i></button></td></tr>

            <tr><td><b>fa-ellipsis-v</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ellipsis-v'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ellipsis-v'></i></button></td></tr>

            <tr><td><b>fa-ello</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ello'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ello'></i></button></td></tr>

            <tr><td><b>fa-ember</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ember'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ember'></i></button></td></tr>

            <tr><td><b>fa-empire</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-empire'></i></button><button class='btn bg-gradient-info'><i class='fab fa-empire'></i></button></td></tr>

            <tr><td><b>fa-envelope</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-envelope'></i></button><button class='btn bg-gradient-info'><i class='fab fa-envelope'></i></button></td></tr>

            <tr><td><b>fa-envelope-open</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-envelope-open'></i></button><button class='btn bg-gradient-info'><i class='fab fa-envelope-open'></i></button></td></tr>

            <tr><td><b>fa-envelope-open-text</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-envelope-open-text'></i></button><button class='btn bg-gradient-info'><i class='fab fa-envelope-open-text'></i></button></td></tr>

            <tr><td><b>fa-envelope-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-envelope-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-envelope-square'></i></button></td></tr>

            <tr><td><b>fa-envira</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-envira'></i></button><button class='btn bg-gradient-info'><i class='fab fa-envira'></i></button></td></tr>

            <tr><td><b>fa-equals</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-equals'></i></button><button class='btn bg-gradient-info'><i class='fab fa-equals'></i></button></td></tr>

            <tr><td><b>fa-eraser</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-eraser'></i></button><button class='btn bg-gradient-info'><i class='fab fa-eraser'></i></button></td></tr>

            <tr><td><b>fa-erlang</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-erlang'></i></button><button class='btn bg-gradient-info'><i class='fab fa-erlang'></i></button></td></tr>

            <tr><td><b>fa-ethereum</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ethereum'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ethereum'></i></button></td></tr>

            <tr><td><b>fa-ethernet</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ethernet'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ethernet'></i></button></td></tr>

            <tr><td><b>fa-etsy</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-etsy'></i></button><button class='btn bg-gradient-info'><i class='fab fa-etsy'></i></button></td></tr>

            <tr><td><b>fa-euro-sign</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-euro-sign'></i></button><button class='btn bg-gradient-info'><i class='fab fa-euro-sign'></i></button></td></tr>

            <tr><td><b>fa-evernote</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-evernote'></i></button><button class='btn bg-gradient-info'><i class='fab fa-evernote'></i></button></td></tr>

            <tr><td><b>fa-exchange-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-exchange-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-exchange-alt'></i></button></td></tr>

            <tr><td><b>fa-exclamation</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-exclamation'></i></button><button class='btn bg-gradient-info'><i class='fab fa-exclamation'></i></button></td></tr>

            <tr><td><b>fa-exclamation-circle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-exclamation-circle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-exclamation-circle'></i></button></td></tr>

            <tr><td><b>fa-exclamation-triangle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-exclamation-triangle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-exclamation-triangle'></i></button></td></tr>

            <tr><td><b>fa-expand</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-expand'></i></button><button class='btn bg-gradient-info'><i class='fab fa-expand'></i></button></td></tr>

            <tr><td><b>fa-expand-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-expand-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-expand-alt'></i></button></td></tr>

            <tr><td><b>fa-expand-arrows-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-expand-arrows-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-expand-arrows-alt'></i></button></td></tr>

            <tr><td><b>fa-expeditedssl</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-expeditedssl'></i></button><button class='btn bg-gradient-info'><i class='fab fa-expeditedssl'></i></button></td></tr>

            <tr><td><b>fa-external-link-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-external-link-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-external-link-alt'></i></button></td></tr>

            <tr><td><b>fa-external-link-square-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-external-link-square-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-external-link-square-alt'></i></button></td></tr>

            <tr><td><b>fa-eye</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-eye'></i></button><button class='btn bg-gradient-info'><i class='fab fa-eye'></i></button></td></tr>

            <tr><td><b>fa-eye-dropper</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-eye-dropper'></i></button><button class='btn bg-gradient-info'><i class='fab fa-eye-dropper'></i></button></td></tr>

            <tr><td><b>fa-eye-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-eye-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-eye-slash'></i></button></td></tr>

            <tr><td><b>fa-facebook</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-facebook'></i></button><button class='btn bg-gradient-info'><i class='fab fa-facebook'></i></button></td></tr>

            <tr><td><b>fa-facebook-f</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-facebook-f'></i></button><button class='btn bg-gradient-info'><i class='fab fa-facebook-f'></i></button></td></tr>

            <tr><td><b>fa-facebook-messenger</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-facebook-messenger'></i></button><button class='btn bg-gradient-info'><i class='fab fa-facebook-messenger'></i></button></td></tr>

            <tr><td><b>fa-facebook-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-facebook-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-facebook-square'></i></button></td></tr>

            <tr><td><b>fa-fan</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fan'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fan'></i></button></td></tr>

            <tr><td><b>fa-fantasy-flight-games</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fantasy-flight-games'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fantasy-flight-games'></i></button></td></tr>

            <tr><td><b>fa-fast-backward</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fast-backward'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fast-backward'></i></button></td></tr>

            <tr><td><b>fa-fast-forward</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fast-forward'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fast-forward'></i></button></td></tr>

            <tr><td><b>fa-faucet</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-faucet'></i></button><button class='btn bg-gradient-info'><i class='fab fa-faucet'></i></button></td></tr>

            <tr><td><b>fa-fax</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fax'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fax'></i></button></td></tr>

            <tr><td><b>fa-feather</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-feather'></i></button><button class='btn bg-gradient-info'><i class='fab fa-feather'></i></button></td></tr>

            <tr><td><b>fa-feather-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-feather-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-feather-alt'></i></button></td></tr>

            <tr><td><b>fa-fedex</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fedex'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fedex'></i></button></td></tr>

            <tr><td><b>fa-fedora</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fedora'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fedora'></i></button></td></tr>

            <tr><td><b>fa-female</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-female'></i></button><button class='btn bg-gradient-info'><i class='fab fa-female'></i></button></td></tr>

            <tr><td><b>fa-fighter-jet</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fighter-jet'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fighter-jet'></i></button></td></tr>

            <tr><td><b>fa-figma</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-figma'></i></button><button class='btn bg-gradient-info'><i class='fab fa-figma'></i></button></td></tr>

            <tr><td><b>fa-file</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file'></i></button></td></tr>

            <tr><td><b>fa-file-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-alt'></i></button></td></tr>

            <tr><td><b>fa-file-archive</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-archive'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-archive'></i></button></td></tr>

            <tr><td><b>fa-file-audio</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-audio'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-audio'></i></button></td></tr>

            <tr><td><b>fa-file-code</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-code'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-code'></i></button></td></tr>

            <tr><td><b>fa-file-contract</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-contract'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-contract'></i></button></td></tr>

            <tr><td><b>fa-file-csv</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-csv'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-csv'></i></button></td></tr>

            <tr><td><b>fa-file-download</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-download'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-download'></i></button></td></tr>

            <tr><td><b>fa-file-excel</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-excel'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-excel'></i></button></td></tr>

            <tr><td><b>fa-file-export</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-export'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-export'></i></button></td></tr>

            <tr><td><b>fa-file-image</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-image'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-image'></i></button></td></tr>

            <tr><td><b>fa-file-import</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-import'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-import'></i></button></td></tr>

            <tr><td><b>fa-file-invoice</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-invoice'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-invoice'></i></button></td></tr>

            <tr><td><b>fa-file-invoice-dollar</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-invoice-dollar'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-invoice-dollar'></i></button></td></tr>

            <tr><td><b>fa-file-medical</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-medical'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-medical'></i></button></td></tr>

            <tr><td><b>fa-file-medical-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-medical-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-medical-alt'></i></button></td></tr>

            <tr><td><b>fa-file-pdf</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-pdf'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-pdf'></i></button></td></tr>

            <tr><td><b>fa-file-powerpoint</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-powerpoint'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-powerpoint'></i></button></td></tr>

            <tr><td><b>fa-file-prescription</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-prescription'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-prescription'></i></button></td></tr>

            <tr><td><b>fa-file-signature</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-signature'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-signature'></i></button></td></tr>

            <tr><td><b>fa-file-upload</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-upload'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-upload'></i></button></td></tr>

            <tr><td><b>fa-file-video</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-video'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-video'></i></button></td></tr>

            <tr><td><b>fa-file-word</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-file-word'></i></button><button class='btn bg-gradient-info'><i class='fab fa-file-word'></i></button></td></tr>

            <tr><td><b>fa-fill</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fill'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fill'></i></button></td></tr>

            <tr><td><b>fa-fill-drip</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fill-drip'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fill-drip'></i></button></td></tr>

            <tr><td><b>fa-film</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-film'></i></button><button class='btn bg-gradient-info'><i class='fab fa-film'></i></button></td></tr>

            <tr><td><b>fa-filter</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-filter'></i></button><button class='btn bg-gradient-info'><i class='fab fa-filter'></i></button></td></tr>

            <tr><td><b>fa-fingerprint</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fingerprint'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fingerprint'></i></button></td></tr>

            <tr><td><b>fa-fire</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fire'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fire'></i></button></td></tr>

            <tr><td><b>fa-fire-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fire-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fire-alt'></i></button></td></tr>

            <tr><td><b>fa-fire-extinguisher</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fire-extinguisher'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fire-extinguisher'></i></button></td></tr>

            <tr><td><b>fa-firefox</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-firefox'></i></button><button class='btn bg-gradient-info'><i class='fab fa-firefox'></i></button></td></tr>

            <tr><td><b>fa-firefox-browser</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-firefox-browser'></i></button><button class='btn bg-gradient-info'><i class='fab fa-firefox-browser'></i></button></td></tr>

            <tr><td><b>fa-first-aid</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-first-aid'></i></button><button class='btn bg-gradient-info'><i class='fab fa-first-aid'></i></button></td></tr>

            <tr><td><b>fa-first-order</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-first-order'></i></button><button class='btn bg-gradient-info'><i class='fab fa-first-order'></i></button></td></tr>

            <tr><td><b>fa-first-order-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-first-order-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-first-order-alt'></i></button></td></tr>

            <tr><td><b>fa-firstdraft</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-firstdraft'></i></button><button class='btn bg-gradient-info'><i class='fab fa-firstdraft'></i></button></td></tr>

            <tr><td><b>fa-fish</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fish'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fish'></i></button></td></tr>

            <tr><td><b>fa-fist-raised</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fist-raised'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fist-raised'></i></button></td></tr>

            <tr><td><b>fa-flag</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-flag'></i></button><button class='btn bg-gradient-info'><i class='fab fa-flag'></i></button></td></tr>

            <tr><td><b>fa-flag-checkered</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-flag-checkered'></i></button><button class='btn bg-gradient-info'><i class='fab fa-flag-checkered'></i></button></td></tr>

            <tr><td><b>fa-flag-usa</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-flag-usa'></i></button><button class='btn bg-gradient-info'><i class='fab fa-flag-usa'></i></button></td></tr>

            <tr><td><b>fa-flask</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-flask'></i></button><button class='btn bg-gradient-info'><i class='fab fa-flask'></i></button></td></tr>

            <tr><td><b>fa-flickr</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-flickr'></i></button><button class='btn bg-gradient-info'><i class='fab fa-flickr'></i></button></td></tr>

            <tr><td><b>fa-flipboard</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-flipboard'></i></button><button class='btn bg-gradient-info'><i class='fab fa-flipboard'></i></button></td></tr>

            <tr><td><b>fa-flushed</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-flushed'></i></button><button class='btn bg-gradient-info'><i class='fab fa-flushed'></i></button></td></tr>

            <tr><td><b>fa-fly</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fly'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fly'></i></button></td></tr>

            <tr><td><b>fa-folder</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-folder'></i></button><button class='btn bg-gradient-info'><i class='fab fa-folder'></i></button></td></tr>

            <tr><td><b>fa-folder-minus</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-folder-minus'></i></button><button class='btn bg-gradient-info'><i class='fab fa-folder-minus'></i></button></td></tr>

            <tr><td><b>fa-folder-open</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-folder-open'></i></button><button class='btn bg-gradient-info'><i class='fab fa-folder-open'></i></button></td></tr>

            <tr><td><b>fa-folder-plus</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-folder-plus'></i></button><button class='btn bg-gradient-info'><i class='fab fa-folder-plus'></i></button></td></tr>

            <tr><td><b>fa-font</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-font'></i></button><button class='btn bg-gradient-info'><i class='fab fa-font'></i></button></td></tr>

            <tr><td><b>fa-font-awesome</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-font-awesome'></i></button><button class='btn bg-gradient-info'><i class='fab fa-font-awesome'></i></button></td></tr>

            <tr><td><b>fa-font-awesome-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-font-awesome-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-font-awesome-alt'></i></button></td></tr>

            <tr><td><b>fa-font-awesome-flag</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-font-awesome-flag'></i></button><button class='btn bg-gradient-info'><i class='fab fa-font-awesome-flag'></i></button></td></tr>

            <tr><td><b>fa-font-awesome-logo-full</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-font-awesome-logo-full'></i></button><button class='btn bg-gradient-info'><i class='fab fa-font-awesome-logo-full'></i></button></td></tr>

            <tr><td><b>fa-fonticons</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fonticons'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fonticons'></i></button></td></tr>

            <tr><td><b>fa-fonticons-fi</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fonticons-fi'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fonticons-fi'></i></button></td></tr>

            <tr><td><b>fa-football-ball</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-football-ball'></i></button><button class='btn bg-gradient-info'><i class='fab fa-football-ball'></i></button></td></tr>

            <tr><td><b>fa-fort-awesome</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fort-awesome'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fort-awesome'></i></button></td></tr>

            <tr><td><b>fa-fort-awesome-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fort-awesome-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fort-awesome-alt'></i></button></td></tr>

            <tr><td><b>fa-forumbee</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-forumbee'></i></button><button class='btn bg-gradient-info'><i class='fab fa-forumbee'></i></button></td></tr>

            <tr><td><b>fa-forward</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-forward'></i></button><button class='btn bg-gradient-info'><i class='fab fa-forward'></i></button></td></tr>

            <tr><td><b>fa-foursquare</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-foursquare'></i></button><button class='btn bg-gradient-info'><i class='fab fa-foursquare'></i></button></td></tr>

            <tr><td><b>fa-free-code-camp</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-free-code-camp'></i></button><button class='btn bg-gradient-info'><i class='fab fa-free-code-camp'></i></button></td></tr>

            <tr><td><b>fa-freebsd</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-freebsd'></i></button><button class='btn bg-gradient-info'><i class='fab fa-freebsd'></i></button></td></tr>

            <tr><td><b>fa-frog</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-frog'></i></button><button class='btn bg-gradient-info'><i class='fab fa-frog'></i></button></td></tr>

            <tr><td><b>fa-frown</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-frown'></i></button><button class='btn bg-gradient-info'><i class='fab fa-frown'></i></button></td></tr>

            <tr><td><b>fa-frown-open</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-frown-open'></i></button><button class='btn bg-gradient-info'><i class='fab fa-frown-open'></i></button></td></tr>

            <tr><td><b>fa-fulcrum</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-fulcrum'></i></button><button class='btn bg-gradient-info'><i class='fab fa-fulcrum'></i></button></td></tr>

            <tr><td><b>fa-funnel-dollar</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-funnel-dollar'></i></button><button class='btn bg-gradient-info'><i class='fab fa-funnel-dollar'></i></button></td></tr>

            <tr><td><b>fa-futbol</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-futbol'></i></button><button class='btn bg-gradient-info'><i class='fab fa-futbol'></i></button></td></tr>

            <tr><td><b>fa-galactic-republic</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-galactic-republic'></i></button><button class='btn bg-gradient-info'><i class='fab fa-galactic-republic'></i></button></td></tr>

            <tr><td><b>fa-galactic-senate</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-galactic-senate'></i></button><button class='btn bg-gradient-info'><i class='fab fa-galactic-senate'></i></button></td></tr>

            <tr><td><b>fa-gamepad</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-gamepad'></i></button><button class='btn bg-gradient-info'><i class='fab fa-gamepad'></i></button></td></tr>

            <tr><td><b>fa-gas-pump</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-gas-pump'></i></button><button class='btn bg-gradient-info'><i class='fab fa-gas-pump'></i></button></td></tr>

            <tr><td><b>fa-gavel</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-gavel'></i></button><button class='btn bg-gradient-info'><i class='fab fa-gavel'></i></button></td></tr>

            <tr><td><b>fa-gem</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-gem'></i></button><button class='btn bg-gradient-info'><i class='fab fa-gem'></i></button></td></tr>

            <tr><td><b>fa-genderless</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-genderless'></i></button><button class='btn bg-gradient-info'><i class='fab fa-genderless'></i></button></td></tr>

            <tr><td><b>fa-get-pocket</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-get-pocket'></i></button><button class='btn bg-gradient-info'><i class='fab fa-get-pocket'></i></button></td></tr>

            <tr><td><b>fa-gg</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-gg'></i></button><button class='btn bg-gradient-info'><i class='fab fa-gg'></i></button></td></tr>

            <tr><td><b>fa-gg-circle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-gg-circle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-gg-circle'></i></button></td></tr>

            <tr><td><b>fa-ghost</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ghost'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ghost'></i></button></td></tr>

            <tr><td><b>fa-gift</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-gift'></i></button><button class='btn bg-gradient-info'><i class='fab fa-gift'></i></button></td></tr>

            <tr><td><b>fa-gifts</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-gifts'></i></button><button class='btn bg-gradient-info'><i class='fab fa-gifts'></i></button></td></tr>

            <tr><td><b>fa-git</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-git'></i></button><button class='btn bg-gradient-info'><i class='fab fa-git'></i></button></td></tr>

            <tr><td><b>fa-git-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-git-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-git-alt'></i></button></td></tr>

            <tr><td><b>fa-git-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-git-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-git-square'></i></button></td></tr>

            <tr><td><b>fa-github</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-github'></i></button><button class='btn bg-gradient-info'><i class='fab fa-github'></i></button></td></tr>

            <tr><td><b>fa-github-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-github-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-github-alt'></i></button></td></tr>

            <tr><td><b>fa-github-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-github-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-github-square'></i></button></td></tr>

            <tr><td><b>fa-gitkraken</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-gitkraken'></i></button><button class='btn bg-gradient-info'><i class='fab fa-gitkraken'></i></button></td></tr>

            <tr><td><b>fa-gitlab</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-gitlab'></i></button><button class='btn bg-gradient-info'><i class='fab fa-gitlab'></i></button></td></tr>

            <tr><td><b>fa-gitter</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-gitter'></i></button><button class='btn bg-gradient-info'><i class='fab fa-gitter'></i></button></td></tr>

            <tr><td><b>fa-glass-cheers</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-glass-cheers'></i></button><button class='btn bg-gradient-info'><i class='fab fa-glass-cheers'></i></button></td></tr>

            <tr><td><b>fa-glass-martini</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-glass-martini'></i></button><button class='btn bg-gradient-info'><i class='fab fa-glass-martini'></i></button></td></tr>

            <tr><td><b>fa-glass-martini-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-glass-martini-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-glass-martini-alt'></i></button></td></tr>

            <tr><td><b>fa-glass-whiskey</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-glass-whiskey'></i></button><button class='btn bg-gradient-info'><i class='fab fa-glass-whiskey'></i></button></td></tr>

            <tr><td><b>fa-glasses</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-glasses'></i></button><button class='btn bg-gradient-info'><i class='fab fa-glasses'></i></button></td></tr>

            <tr><td><b>fa-glide</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-glide'></i></button><button class='btn bg-gradient-info'><i class='fab fa-glide'></i></button></td></tr>

            <tr><td><b>fa-glide-g</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-glide-g'></i></button><button class='btn bg-gradient-info'><i class='fab fa-glide-g'></i></button></td></tr>

            <tr><td><b>fa-globe</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-globe'></i></button><button class='btn bg-gradient-info'><i class='fab fa-globe'></i></button></td></tr>

            <tr><td><b>fa-globe-africa</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-globe-africa'></i></button><button class='btn bg-gradient-info'><i class='fab fa-globe-africa'></i></button></td></tr>

            <tr><td><b>fa-globe-americas</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-globe-americas'></i></button><button class='btn bg-gradient-info'><i class='fab fa-globe-americas'></i></button></td></tr>

            <tr><td><b>fa-globe-asia</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-globe-asia'></i></button><button class='btn bg-gradient-info'><i class='fab fa-globe-asia'></i></button></td></tr>

            <tr><td><b>fa-globe-europe</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-globe-europe'></i></button><button class='btn bg-gradient-info'><i class='fab fa-globe-europe'></i></button></td></tr>

            <tr><td><b>fa-gofore</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-gofore'></i></button><button class='btn bg-gradient-info'><i class='fab fa-gofore'></i></button></td></tr>

            <tr><td><b>fa-golf-ball</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-golf-ball'></i></button><button class='btn bg-gradient-info'><i class='fab fa-golf-ball'></i></button></td></tr>

            <tr><td><b>fa-goodreads</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-goodreads'></i></button><button class='btn bg-gradient-info'><i class='fab fa-goodreads'></i></button></td></tr>

            <tr><td><b>fa-goodreads-g</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-goodreads-g'></i></button><button class='btn bg-gradient-info'><i class='fab fa-goodreads-g'></i></button></td></tr>

            <tr><td><b>fa-google</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-google'></i></button><button class='btn bg-gradient-info'><i class='fab fa-google'></i></button></td></tr>

            <tr><td><b>fa-google-drive</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-google-drive'></i></button><button class='btn bg-gradient-info'><i class='fab fa-google-drive'></i></button></td></tr>

            <tr><td><b>fa-google-pay</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-google-pay'></i></button><button class='btn bg-gradient-info'><i class='fab fa-google-pay'></i></button></td></tr>

            <tr><td><b>fa-google-play</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-google-play'></i></button><button class='btn bg-gradient-info'><i class='fab fa-google-play'></i></button></td></tr>

            <tr><td><b>fa-google-plus</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-google-plus'></i></button><button class='btn bg-gradient-info'><i class='fab fa-google-plus'></i></button></td></tr>

            <tr><td><b>fa-google-plus-g</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-google-plus-g'></i></button><button class='btn bg-gradient-info'><i class='fab fa-google-plus-g'></i></button></td></tr>

            <tr><td><b>fa-google-plus-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-google-plus-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-google-plus-square'></i></button></td></tr>

            <tr><td><b>fa-google-wallet</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-google-wallet'></i></button><button class='btn bg-gradient-info'><i class='fab fa-google-wallet'></i></button></td></tr>

            <tr><td><b>fa-gopuram</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-gopuram'></i></button><button class='btn bg-gradient-info'><i class='fab fa-gopuram'></i></button></td></tr>

            <tr><td><b>fa-graduation-cap</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-graduation-cap'></i></button><button class='btn bg-gradient-info'><i class='fab fa-graduation-cap'></i></button></td></tr>

            <tr><td><b>fa-gratipay</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-gratipay'></i></button><button class='btn bg-gradient-info'><i class='fab fa-gratipay'></i></button></td></tr>

            <tr><td><b>fa-grav</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grav'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grav'></i></button></td></tr>

            <tr><td><b>fa-greater-than</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-greater-than'></i></button><button class='btn bg-gradient-info'><i class='fab fa-greater-than'></i></button></td></tr>

            <tr><td><b>fa-greater-than-equal</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-greater-than-equal'></i></button><button class='btn bg-gradient-info'><i class='fab fa-greater-than-equal'></i></button></td></tr>

            <tr><td><b>fa-grimace</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grimace'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grimace'></i></button></td></tr>

            <tr><td><b>fa-grin</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grin'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grin'></i></button></td></tr>

            <tr><td><b>fa-grin-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grin-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grin-alt'></i></button></td></tr>

            <tr><td><b>fa-grin-beam</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grin-beam'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grin-beam'></i></button></td></tr>

            <tr><td><b>fa-grin-beam-sweat</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grin-beam-sweat'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grin-beam-sweat'></i></button></td></tr>

            <tr><td><b>fa-grin-hearts</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grin-hearts'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grin-hearts'></i></button></td></tr>

            <tr><td><b>fa-grin-squint</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grin-squint'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grin-squint'></i></button></td></tr>

            <tr><td><b>fa-grin-squint-tears</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grin-squint-tears'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grin-squint-tears'></i></button></td></tr>

            <tr><td><b>fa-grin-stars</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grin-stars'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grin-stars'></i></button></td></tr>

            <tr><td><b>fa-grin-tears</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grin-tears'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grin-tears'></i></button></td></tr>

            <tr><td><b>fa-grin-tongue</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grin-tongue'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grin-tongue'></i></button></td></tr>

            <tr><td><b>fa-grin-tongue-squint</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grin-tongue-squint'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grin-tongue-squint'></i></button></td></tr>

            <tr><td><b>fa-grin-tongue-wink</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grin-tongue-wink'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grin-tongue-wink'></i></button></td></tr>

            <tr><td><b>fa-grin-wink</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grin-wink'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grin-wink'></i></button></td></tr>

            <tr><td><b>fa-grip-horizontal</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grip-horizontal'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grip-horizontal'></i></button></td></tr>

            <tr><td><b>fa-grip-lines</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grip-lines'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grip-lines'></i></button></td></tr>

            <tr><td><b>fa-grip-lines-vertical</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grip-lines-vertical'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grip-lines-vertical'></i></button></td></tr>

            <tr><td><b>fa-grip-vertical</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grip-vertical'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grip-vertical'></i></button></td></tr>

            <tr><td><b>fa-gripfire</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-gripfire'></i></button><button class='btn bg-gradient-info'><i class='fab fa-gripfire'></i></button></td></tr>

            <tr><td><b>fa-grunt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-grunt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-grunt'></i></button></td></tr>

            <tr><td><b>fa-guilded</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-guilded'></i></button><button class='btn bg-gradient-info'><i class='fab fa-guilded'></i></button></td></tr>

            <tr><td><b>fa-guitar</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-guitar'></i></button><button class='btn bg-gradient-info'><i class='fab fa-guitar'></i></button></td></tr>

            <tr><td><b>fa-gulp</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-gulp'></i></button><button class='btn bg-gradient-info'><i class='fab fa-gulp'></i></button></td></tr>

            <tr><td><b>fa-h-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-h-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-h-square'></i></button></td></tr>

            <tr><td><b>fa-hacker-news</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hacker-news'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hacker-news'></i></button></td></tr>

            <tr><td><b>fa-hacker-news-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hacker-news-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hacker-news-square'></i></button></td></tr>

            <tr><td><b>fa-hackerrank</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hackerrank'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hackerrank'></i></button></td></tr>

            <tr><td><b>fa-hamburger</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hamburger'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hamburger'></i></button></td></tr>

            <tr><td><b>fa-hammer</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hammer'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hammer'></i></button></td></tr>

            <tr><td><b>fa-hamsa</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hamsa'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hamsa'></i></button></td></tr>

            <tr><td><b>fa-hand-holding</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hand-holding'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hand-holding'></i></button></td></tr>

            <tr><td><b>fa-hand-holding-heart</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hand-holding-heart'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hand-holding-heart'></i></button></td></tr>

            <tr><td><b>fa-hand-holding-medical</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hand-holding-medical'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hand-holding-medical'></i></button></td></tr>

            <tr><td><b>fa-hand-holding-usd</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hand-holding-usd'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hand-holding-usd'></i></button></td></tr>

            <tr><td><b>fa-hand-holding-water</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hand-holding-water'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hand-holding-water'></i></button></td></tr>

            <tr><td><b>fa-hand-lizard</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hand-lizard'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hand-lizard'></i></button></td></tr>

            <tr><td><b>fa-hand-middle-finger</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hand-middle-finger'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hand-middle-finger'></i></button></td></tr>

            <tr><td><b>fa-hand-paper</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hand-paper'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hand-paper'></i></button></td></tr>

            <tr><td><b>fa-hand-peace</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hand-peace'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hand-peace'></i></button></td></tr>

            <tr><td><b>fa-hand-point-down</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hand-point-down'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hand-point-down'></i></button></td></tr>

            <tr><td><b>fa-hand-point-left</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hand-point-left'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hand-point-left'></i></button></td></tr>

            <tr><td><b>fa-hand-point-right</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hand-point-right'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hand-point-right'></i></button></td></tr>

            <tr><td><b>fa-hand-point-up</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hand-point-up'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hand-point-up'></i></button></td></tr>

            <tr><td><b>fa-hand-pointer</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hand-pointer'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hand-pointer'></i></button></td></tr>

            <tr><td><b>fa-hand-rock</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hand-rock'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hand-rock'></i></button></td></tr>

            <tr><td><b>fa-hand-scissors</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hand-scissors'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hand-scissors'></i></button></td></tr>

            <tr><td><b>fa-hand-sparkles</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hand-sparkles'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hand-sparkles'></i></button></td></tr>

            <tr><td><b>fa-hand-spock</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hand-spock'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hand-spock'></i></button></td></tr>

            <tr><td><b>fa-hands</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hands'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hands'></i></button></td></tr>

            <tr><td><b>fa-hands-helping</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hands-helping'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hands-helping'></i></button></td></tr>

            <tr><td><b>fa-hands-wash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hands-wash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hands-wash'></i></button></td></tr>

            <tr><td><b>fa-handshake</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-handshake'></i></button><button class='btn bg-gradient-info'><i class='fab fa-handshake'></i></button></td></tr>

            <tr><td><b>fa-handshake-alt-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-handshake-alt-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-handshake-alt-slash'></i></button></td></tr>

            <tr><td><b>fa-handshake-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-handshake-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-handshake-slash'></i></button></td></tr>

            <tr><td><b>fa-hanukiah</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hanukiah'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hanukiah'></i></button></td></tr>

            <tr><td><b>fa-hard-hat</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hard-hat'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hard-hat'></i></button></td></tr>

            <tr><td><b>fa-hashtag</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hashtag'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hashtag'></i></button></td></tr>

            <tr><td><b>fa-hat-cowboy</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hat-cowboy'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hat-cowboy'></i></button></td></tr>

            <tr><td><b>fa-hat-cowboy-side</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hat-cowboy-side'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hat-cowboy-side'></i></button></td></tr>

            <tr><td><b>fa-hat-wizard</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hat-wizard'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hat-wizard'></i></button></td></tr>

            <tr><td><b>fa-hdd</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hdd'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hdd'></i></button></td></tr>

            <tr><td><b>fa-head-side-cough</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-head-side-cough'></i></button><button class='btn bg-gradient-info'><i class='fab fa-head-side-cough'></i></button></td></tr>

            <tr><td><b>fa-head-side-cough-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-head-side-cough-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-head-side-cough-slash'></i></button></td></tr>

            <tr><td><b>fa-head-side-mask</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-head-side-mask'></i></button><button class='btn bg-gradient-info'><i class='fab fa-head-side-mask'></i></button></td></tr>

            <tr><td><b>fa-head-side-virus</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-head-side-virus'></i></button><button class='btn bg-gradient-info'><i class='fab fa-head-side-virus'></i></button></td></tr>

            <tr><td><b>fa-heading</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-heading'></i></button><button class='btn bg-gradient-info'><i class='fab fa-heading'></i></button></td></tr>

            <tr><td><b>fa-headphones</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-headphones'></i></button><button class='btn bg-gradient-info'><i class='fab fa-headphones'></i></button></td></tr>

            <tr><td><b>fa-headphones-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-headphones-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-headphones-alt'></i></button></td></tr>

            <tr><td><b>fa-headset</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-headset'></i></button><button class='btn bg-gradient-info'><i class='fab fa-headset'></i></button></td></tr>

            <tr><td><b>fa-heart</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-heart'></i></button><button class='btn bg-gradient-info'><i class='fab fa-heart'></i></button></td></tr>

            <tr><td><b>fa-heart-broken</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-heart-broken'></i></button><button class='btn bg-gradient-info'><i class='fab fa-heart-broken'></i></button></td></tr>

            <tr><td><b>fa-heartbeat</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-heartbeat'></i></button><button class='btn bg-gradient-info'><i class='fab fa-heartbeat'></i></button></td></tr>

            <tr><td><b>fa-helicopter</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-helicopter'></i></button><button class='btn bg-gradient-info'><i class='fab fa-helicopter'></i></button></td></tr>

            <tr><td><b>fa-highlighter</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-highlighter'></i></button><button class='btn bg-gradient-info'><i class='fab fa-highlighter'></i></button></td></tr>

            <tr><td><b>fa-hiking</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hiking'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hiking'></i></button></td></tr>

            <tr><td><b>fa-hippo</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hippo'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hippo'></i></button></td></tr>

            <tr><td><b>fa-hips</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hips'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hips'></i></button></td></tr>

            <tr><td><b>fa-hire-a-helper</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hire-a-helper'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hire-a-helper'></i></button></td></tr>

            <tr><td><b>fa-history</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-history'></i></button><button class='btn bg-gradient-info'><i class='fab fa-history'></i></button></td></tr>

            <tr><td><b>fa-hive</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hive'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hive'></i></button></td></tr>

            <tr><td><b>fa-hockey-puck</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hockey-puck'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hockey-puck'></i></button></td></tr>

            <tr><td><b>fa-holly-berry</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-holly-berry'></i></button><button class='btn bg-gradient-info'><i class='fab fa-holly-berry'></i></button></td></tr>

            <tr><td><b>fa-home</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-home'></i></button><button class='btn bg-gradient-info'><i class='fab fa-home'></i></button></td></tr>

            <tr><td><b>fa-hooli</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hooli'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hooli'></i></button></td></tr>

            <tr><td><b>fa-hornbill</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hornbill'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hornbill'></i></button></td></tr>

            <tr><td><b>fa-horse</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-horse'></i></button><button class='btn bg-gradient-info'><i class='fab fa-horse'></i></button></td></tr>

            <tr><td><b>fa-horse-head</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-horse-head'></i></button><button class='btn bg-gradient-info'><i class='fab fa-horse-head'></i></button></td></tr>

            <tr><td><b>fa-hospital</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hospital'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hospital'></i></button></td></tr>

            <tr><td><b>fa-hospital-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hospital-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hospital-alt'></i></button></td></tr>

            <tr><td><b>fa-hospital-symbol</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hospital-symbol'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hospital-symbol'></i></button></td></tr>

            <tr><td><b>fa-hospital-user</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hospital-user'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hospital-user'></i></button></td></tr>

            <tr><td><b>fa-hot-tub</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hot-tub'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hot-tub'></i></button></td></tr>

            <tr><td><b>fa-hotdog</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hotdog'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hotdog'></i></button></td></tr>

            <tr><td><b>fa-hotel</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hotel'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hotel'></i></button></td></tr>

            <tr><td><b>fa-hotjar</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hotjar'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hotjar'></i></button></td></tr>

            <tr><td><b>fa-hourglass</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hourglass'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hourglass'></i></button></td></tr>

            <tr><td><b>fa-hourglass-end</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hourglass-end'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hourglass-end'></i></button></td></tr>

            <tr><td><b>fa-hourglass-half</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hourglass-half'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hourglass-half'></i></button></td></tr>

            <tr><td><b>fa-hourglass-start</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hourglass-start'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hourglass-start'></i></button></td></tr>

            <tr><td><b>fa-house-damage</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-house-damage'></i></button><button class='btn bg-gradient-info'><i class='fab fa-house-damage'></i></button></td></tr>

            <tr><td><b>fa-house-user</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-house-user'></i></button><button class='btn bg-gradient-info'><i class='fab fa-house-user'></i></button></td></tr>

            <tr><td><b>fa-houzz</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-houzz'></i></button><button class='btn bg-gradient-info'><i class='fab fa-houzz'></i></button></td></tr>

            <tr><td><b>fa-hryvnia</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hryvnia'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hryvnia'></i></button></td></tr>

            <tr><td><b>fa-html5</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-html5'></i></button><button class='btn bg-gradient-info'><i class='fab fa-html5'></i></button></td></tr>

            <tr><td><b>fa-hubspot</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-hubspot'></i></button><button class='btn bg-gradient-info'><i class='fab fa-hubspot'></i></button></td></tr>

            <tr><td><b>fa-i-cursor</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-i-cursor'></i></button><button class='btn bg-gradient-info'><i class='fab fa-i-cursor'></i></button></td></tr>

            <tr><td><b>fa-ice-cream</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ice-cream'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ice-cream'></i></button></td></tr>

            <tr><td><b>fa-icicles</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-icicles'></i></button><button class='btn bg-gradient-info'><i class='fab fa-icicles'></i></button></td></tr>

            <tr><td><b>fa-icons</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-icons'></i></button><button class='btn bg-gradient-info'><i class='fab fa-icons'></i></button></td></tr>

            <tr><td><b>fa-id-badge</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-id-badge'></i></button><button class='btn bg-gradient-info'><i class='fab fa-id-badge'></i></button></td></tr>

            <tr><td><b>fa-id-card</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-id-card'></i></button><button class='btn bg-gradient-info'><i class='fab fa-id-card'></i></button></td></tr>

            <tr><td><b>fa-id-card-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-id-card-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-id-card-alt'></i></button></td></tr>

            <tr><td><b>fa-ideal</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ideal'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ideal'></i></button></td></tr>

            <tr><td><b>fa-igloo</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-igloo'></i></button><button class='btn bg-gradient-info'><i class='fab fa-igloo'></i></button></td></tr>

            <tr><td><b>fa-image</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-image'></i></button><button class='btn bg-gradient-info'><i class='fab fa-image'></i></button></td></tr>

            <tr><td><b>fa-images</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-images'></i></button><button class='btn bg-gradient-info'><i class='fab fa-images'></i></button></td></tr>

            <tr><td><b>fa-imdb</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-imdb'></i></button><button class='btn bg-gradient-info'><i class='fab fa-imdb'></i></button></td></tr>

            <tr><td><b>fa-inbox</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-inbox'></i></button><button class='btn bg-gradient-info'><i class='fab fa-inbox'></i></button></td></tr>

            <tr><td><b>fa-indent</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-indent'></i></button><button class='btn bg-gradient-info'><i class='fab fa-indent'></i></button></td></tr>

            <tr><td><b>fa-industry</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-industry'></i></button><button class='btn bg-gradient-info'><i class='fab fa-industry'></i></button></td></tr>

            <tr><td><b>fa-infinity</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-infinity'></i></button><button class='btn bg-gradient-info'><i class='fab fa-infinity'></i></button></td></tr>

            <tr><td><b>fa-info</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-info'></i></button><button class='btn bg-gradient-info'><i class='fab fa-info'></i></button></td></tr>

            <tr><td><b>fa-info-circle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-info-circle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-info-circle'></i></button></td></tr>

            <tr><td><b>fa-innosoft</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-innosoft'></i></button><button class='btn bg-gradient-info'><i class='fab fa-innosoft'></i></button></td></tr>

            <tr><td><b>fa-instagram</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-instagram'></i></button><button class='btn bg-gradient-info'><i class='fab fa-instagram'></i></button></td></tr>

            <tr><td><b>fa-instagram-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-instagram-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-instagram-square'></i></button></td></tr>

            <tr><td><b>fa-instalod</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-instalod'></i></button><button class='btn bg-gradient-info'><i class='fab fa-instalod'></i></button></td></tr>

            <tr><td><b>fa-intercom</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-intercom'></i></button><button class='btn bg-gradient-info'><i class='fab fa-intercom'></i></button></td></tr>

            <tr><td><b>fa-internet-explorer</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-internet-explorer'></i></button><button class='btn bg-gradient-info'><i class='fab fa-internet-explorer'></i></button></td></tr>

            <tr><td><b>fa-invision</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-invision'></i></button><button class='btn bg-gradient-info'><i class='fab fa-invision'></i></button></td></tr>

            <tr><td><b>fa-ioxhost</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ioxhost'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ioxhost'></i></button></td></tr>

            <tr><td><b>fa-italic</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-italic'></i></button><button class='btn bg-gradient-info'><i class='fab fa-italic'></i></button></td></tr>

            <tr><td><b>fa-itch-io</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-itch-io'></i></button><button class='btn bg-gradient-info'><i class='fab fa-itch-io'></i></button></td></tr>

            <tr><td><b>fa-itunes</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-itunes'></i></button><button class='btn bg-gradient-info'><i class='fab fa-itunes'></i></button></td></tr>

            <tr><td><b>fa-itunes-note</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-itunes-note'></i></button><button class='btn bg-gradient-info'><i class='fab fa-itunes-note'></i></button></td></tr>

            <tr><td><b>fa-java</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-java'></i></button><button class='btn bg-gradient-info'><i class='fab fa-java'></i></button></td></tr>

            <tr><td><b>fa-jedi</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-jedi'></i></button><button class='btn bg-gradient-info'><i class='fab fa-jedi'></i></button></td></tr>

            <tr><td><b>fa-jedi-order</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-jedi-order'></i></button><button class='btn bg-gradient-info'><i class='fab fa-jedi-order'></i></button></td></tr>

            <tr><td><b>fa-jenkins</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-jenkins'></i></button><button class='btn bg-gradient-info'><i class='fab fa-jenkins'></i></button></td></tr>

            <tr><td><b>fa-jira</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-jira'></i></button><button class='btn bg-gradient-info'><i class='fab fa-jira'></i></button></td></tr>

            <tr><td><b>fa-joget</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-joget'></i></button><button class='btn bg-gradient-info'><i class='fab fa-joget'></i></button></td></tr>

            <tr><td><b>fa-joint</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-joint'></i></button><button class='btn bg-gradient-info'><i class='fab fa-joint'></i></button></td></tr>

            <tr><td><b>fa-joomla</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-joomla'></i></button><button class='btn bg-gradient-info'><i class='fab fa-joomla'></i></button></td></tr>

            <tr><td><b>fa-journal-whills</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-journal-whills'></i></button><button class='btn bg-gradient-info'><i class='fab fa-journal-whills'></i></button></td></tr>

            <tr><td><b>fa-js</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-js'></i></button><button class='btn bg-gradient-info'><i class='fab fa-js'></i></button></td></tr>

            <tr><td><b>fa-js-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-js-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-js-square'></i></button></td></tr>

            <tr><td><b>fa-jsfiddle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-jsfiddle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-jsfiddle'></i></button></td></tr>

            <tr><td><b>fa-kaaba</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-kaaba'></i></button><button class='btn bg-gradient-info'><i class='fab fa-kaaba'></i></button></td></tr>

            <tr><td><b>fa-kaggle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-kaggle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-kaggle'></i></button></td></tr>

            <tr><td><b>fa-key</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-key'></i></button><button class='btn bg-gradient-info'><i class='fab fa-key'></i></button></td></tr>

            <tr><td><b>fa-keybase</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-keybase'></i></button><button class='btn bg-gradient-info'><i class='fab fa-keybase'></i></button></td></tr>

            <tr><td><b>fa-keyboard</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-keyboard'></i></button><button class='btn bg-gradient-info'><i class='fab fa-keyboard'></i></button></td></tr>

            <tr><td><b>fa-keycdn</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-keycdn'></i></button><button class='btn bg-gradient-info'><i class='fab fa-keycdn'></i></button></td></tr>

            <tr><td><b>fa-khanda</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-khanda'></i></button><button class='btn bg-gradient-info'><i class='fab fa-khanda'></i></button></td></tr>

            <tr><td><b>fa-kickstarter</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-kickstarter'></i></button><button class='btn bg-gradient-info'><i class='fab fa-kickstarter'></i></button></td></tr>

            <tr><td><b>fa-kickstarter-k</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-kickstarter-k'></i></button><button class='btn bg-gradient-info'><i class='fab fa-kickstarter-k'></i></button></td></tr>

            <tr><td><b>fa-kiss</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-kiss'></i></button><button class='btn bg-gradient-info'><i class='fab fa-kiss'></i></button></td></tr>

            <tr><td><b>fa-kiss-beam</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-kiss-beam'></i></button><button class='btn bg-gradient-info'><i class='fab fa-kiss-beam'></i></button></td></tr>

            <tr><td><b>fa-kiss-wink-heart</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-kiss-wink-heart'></i></button><button class='btn bg-gradient-info'><i class='fab fa-kiss-wink-heart'></i></button></td></tr>

            <tr><td><b>fa-kiwi-bird</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-kiwi-bird'></i></button><button class='btn bg-gradient-info'><i class='fab fa-kiwi-bird'></i></button></td></tr>

            <tr><td><b>fa-korvue</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-korvue'></i></button><button class='btn bg-gradient-info'><i class='fab fa-korvue'></i></button></td></tr>

            <tr><td><b>fa-landmark</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-landmark'></i></button><button class='btn bg-gradient-info'><i class='fab fa-landmark'></i></button></td></tr>

            <tr><td><b>fa-language</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-language'></i></button><button class='btn bg-gradient-info'><i class='fab fa-language'></i></button></td></tr>

            <tr><td><b>fa-laptop</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-laptop'></i></button><button class='btn bg-gradient-info'><i class='fab fa-laptop'></i></button></td></tr>

            <tr><td><b>fa-laptop-code</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-laptop-code'></i></button><button class='btn bg-gradient-info'><i class='fab fa-laptop-code'></i></button></td></tr>

            <tr><td><b>fa-laptop-house</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-laptop-house'></i></button><button class='btn bg-gradient-info'><i class='fab fa-laptop-house'></i></button></td></tr>

            <tr><td><b>fa-laptop-medical</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-laptop-medical'></i></button><button class='btn bg-gradient-info'><i class='fab fa-laptop-medical'></i></button></td></tr>

            <tr><td><b>fa-laravel</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-laravel'></i></button><button class='btn bg-gradient-info'><i class='fab fa-laravel'></i></button></td></tr>

            <tr><td><b>fa-lastfm</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-lastfm'></i></button><button class='btn bg-gradient-info'><i class='fab fa-lastfm'></i></button></td></tr>

            <tr><td><b>fa-lastfm-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-lastfm-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-lastfm-square'></i></button></td></tr>

            <tr><td><b>fa-laugh</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-laugh'></i></button><button class='btn bg-gradient-info'><i class='fab fa-laugh'></i></button></td></tr>

            <tr><td><b>fa-laugh-beam</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-laugh-beam'></i></button><button class='btn bg-gradient-info'><i class='fab fa-laugh-beam'></i></button></td></tr>

            <tr><td><b>fa-laugh-squint</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-laugh-squint'></i></button><button class='btn bg-gradient-info'><i class='fab fa-laugh-squint'></i></button></td></tr>

            <tr><td><b>fa-laugh-wink</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-laugh-wink'></i></button><button class='btn bg-gradient-info'><i class='fab fa-laugh-wink'></i></button></td></tr>

            <tr><td><b>fa-layer-group</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-layer-group'></i></button><button class='btn bg-gradient-info'><i class='fab fa-layer-group'></i></button></td></tr>

            <tr><td><b>fa-leaf</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-leaf'></i></button><button class='btn bg-gradient-info'><i class='fab fa-leaf'></i></button></td></tr>

            <tr><td><b>fa-leanpub</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-leanpub'></i></button><button class='btn bg-gradient-info'><i class='fab fa-leanpub'></i></button></td></tr>

            <tr><td><b>fa-lemon</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-lemon'></i></button><button class='btn bg-gradient-info'><i class='fab fa-lemon'></i></button></td></tr>

            <tr><td><b>fa-less</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-less'></i></button><button class='btn bg-gradient-info'><i class='fab fa-less'></i></button></td></tr>

            <tr><td><b>fa-less-than</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-less-than'></i></button><button class='btn bg-gradient-info'><i class='fab fa-less-than'></i></button></td></tr>

            <tr><td><b>fa-less-than-equal</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-less-than-equal'></i></button><button class='btn bg-gradient-info'><i class='fab fa-less-than-equal'></i></button></td></tr>

            <tr><td><b>fa-level-down-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-level-down-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-level-down-alt'></i></button></td></tr>

            <tr><td><b>fa-level-up-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-level-up-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-level-up-alt'></i></button></td></tr>

            <tr><td><b>fa-life-ring</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-life-ring'></i></button><button class='btn bg-gradient-info'><i class='fab fa-life-ring'></i></button></td></tr>

            <tr><td><b>fa-lightbulb</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-lightbulb'></i></button><button class='btn bg-gradient-info'><i class='fab fa-lightbulb'></i></button></td></tr>

            <tr><td><b>fa-line</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-line'></i></button><button class='btn bg-gradient-info'><i class='fab fa-line'></i></button></td></tr>

            <tr><td><b>fa-link</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-link'></i></button><button class='btn bg-gradient-info'><i class='fab fa-link'></i></button></td></tr>

            <tr><td><b>fa-linkedin</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-linkedin'></i></button><button class='btn bg-gradient-info'><i class='fab fa-linkedin'></i></button></td></tr>

            <tr><td><b>fa-linkedin-in</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-linkedin-in'></i></button><button class='btn bg-gradient-info'><i class='fab fa-linkedin-in'></i></button></td></tr>

            <tr><td><b>fa-linode</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-linode'></i></button><button class='btn bg-gradient-info'><i class='fab fa-linode'></i></button></td></tr>

            <tr><td><b>fa-linux</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-linux'></i></button><button class='btn bg-gradient-info'><i class='fab fa-linux'></i></button></td></tr>

            <tr><td><b>fa-lira-sign</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-lira-sign'></i></button><button class='btn bg-gradient-info'><i class='fab fa-lira-sign'></i></button></td></tr>

            <tr><td><b>fa-list</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-list'></i></button><button class='btn bg-gradient-info'><i class='fab fa-list'></i></button></td></tr>

            <tr><td><b>fa-list-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-list-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-list-alt'></i></button></td></tr>

            <tr><td><b>fa-list-ol</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-list-ol'></i></button><button class='btn bg-gradient-info'><i class='fab fa-list-ol'></i></button></td></tr>

            <tr><td><b>fa-list-ul</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-list-ul'></i></button><button class='btn bg-gradient-info'><i class='fab fa-list-ul'></i></button></td></tr>

            <tr><td><b>fa-location-arrow</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-location-arrow'></i></button><button class='btn bg-gradient-info'><i class='fab fa-location-arrow'></i></button></td></tr>

            <tr><td><b>fa-lock</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-lock'></i></button><button class='btn bg-gradient-info'><i class='fab fa-lock'></i></button></td></tr>

            <tr><td><b>fa-lock-open</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-lock-open'></i></button><button class='btn bg-gradient-info'><i class='fab fa-lock-open'></i></button></td></tr>

            <tr><td><b>fa-long-arrow-alt-down</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-long-arrow-alt-down'></i></button><button class='btn bg-gradient-info'><i class='fab fa-long-arrow-alt-down'></i></button></td></tr>

            <tr><td><b>fa-long-arrow-alt-left</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-long-arrow-alt-left'></i></button><button class='btn bg-gradient-info'><i class='fab fa-long-arrow-alt-left'></i></button></td></tr>

            <tr><td><b>fa-long-arrow-alt-right</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-long-arrow-alt-right'></i></button><button class='btn bg-gradient-info'><i class='fab fa-long-arrow-alt-right'></i></button></td></tr>

            <tr><td><b>fa-long-arrow-alt-up</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-long-arrow-alt-up'></i></button><button class='btn bg-gradient-info'><i class='fab fa-long-arrow-alt-up'></i></button></td></tr>

            <tr><td><b>fa-low-vision</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-low-vision'></i></button><button class='btn bg-gradient-info'><i class='fab fa-low-vision'></i></button></td></tr>

            <tr><td><b>fa-luggage-cart</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-luggage-cart'></i></button><button class='btn bg-gradient-info'><i class='fab fa-luggage-cart'></i></button></td></tr>

            <tr><td><b>fa-lungs</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-lungs'></i></button><button class='btn bg-gradient-info'><i class='fab fa-lungs'></i></button></td></tr>

            <tr><td><b>fa-lungs-virus</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-lungs-virus'></i></button><button class='btn bg-gradient-info'><i class='fab fa-lungs-virus'></i></button></td></tr>

            <tr><td><b>fa-lyft</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-lyft'></i></button><button class='btn bg-gradient-info'><i class='fab fa-lyft'></i></button></td></tr>

            <tr><td><b>fa-magento</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-magento'></i></button><button class='btn bg-gradient-info'><i class='fab fa-magento'></i></button></td></tr>

            <tr><td><b>fa-magic</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-magic'></i></button><button class='btn bg-gradient-info'><i class='fab fa-magic'></i></button></td></tr>

            <tr><td><b>fa-magnet</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-magnet'></i></button><button class='btn bg-gradient-info'><i class='fab fa-magnet'></i></button></td></tr>

            <tr><td><b>fa-mail-bulk</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mail-bulk'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mail-bulk'></i></button></td></tr>

            <tr><td><b>fa-mailchimp</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mailchimp'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mailchimp'></i></button></td></tr>

            <tr><td><b>fa-male</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-male'></i></button><button class='btn bg-gradient-info'><i class='fab fa-male'></i></button></td></tr>

            <tr><td><b>fa-mandalorian</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mandalorian'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mandalorian'></i></button></td></tr>

            <tr><td><b>fa-map</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-map'></i></button><button class='btn bg-gradient-info'><i class='fab fa-map'></i></button></td></tr>

            <tr><td><b>fa-map-marked</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-map-marked'></i></button><button class='btn bg-gradient-info'><i class='fab fa-map-marked'></i></button></td></tr>

            <tr><td><b>fa-map-marked-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-map-marked-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-map-marked-alt'></i></button></td></tr>

            <tr><td><b>fa-map-marker</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-map-marker'></i></button><button class='btn bg-gradient-info'><i class='fab fa-map-marker'></i></button></td></tr>

            <tr><td><b>fa-map-marker-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-map-marker-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-map-marker-alt'></i></button></td></tr>

            <tr><td><b>fa-map-pin</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-map-pin'></i></button><button class='btn bg-gradient-info'><i class='fab fa-map-pin'></i></button></td></tr>

            <tr><td><b>fa-map-signs</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-map-signs'></i></button><button class='btn bg-gradient-info'><i class='fab fa-map-signs'></i></button></td></tr>

            <tr><td><b>fa-markdown</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-markdown'></i></button><button class='btn bg-gradient-info'><i class='fab fa-markdown'></i></button></td></tr>

            <tr><td><b>fa-marker</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-marker'></i></button><button class='btn bg-gradient-info'><i class='fab fa-marker'></i></button></td></tr>

            <tr><td><b>fa-mars</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mars'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mars'></i></button></td></tr>

            <tr><td><b>fa-mars-double</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mars-double'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mars-double'></i></button></td></tr>

            <tr><td><b>fa-mars-stroke</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mars-stroke'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mars-stroke'></i></button></td></tr>

            <tr><td><b>fa-mars-stroke-h</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mars-stroke-h'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mars-stroke-h'></i></button></td></tr>

            <tr><td><b>fa-mars-stroke-v</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mars-stroke-v'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mars-stroke-v'></i></button></td></tr>

            <tr><td><b>fa-mask</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mask'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mask'></i></button></td></tr>

            <tr><td><b>fa-mastodon</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mastodon'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mastodon'></i></button></td></tr>

            <tr><td><b>fa-maxcdn</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-maxcdn'></i></button><button class='btn bg-gradient-info'><i class='fab fa-maxcdn'></i></button></td></tr>

            <tr><td><b>fa-mdb</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mdb'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mdb'></i></button></td></tr>

            <tr><td><b>fa-medal</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-medal'></i></button><button class='btn bg-gradient-info'><i class='fab fa-medal'></i></button></td></tr>

            <tr><td><b>fa-medapps</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-medapps'></i></button><button class='btn bg-gradient-info'><i class='fab fa-medapps'></i></button></td></tr>

            <tr><td><b>fa-medium</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-medium'></i></button><button class='btn bg-gradient-info'><i class='fab fa-medium'></i></button></td></tr>

            <tr><td><b>fa-medium-m</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-medium-m'></i></button><button class='btn bg-gradient-info'><i class='fab fa-medium-m'></i></button></td></tr>

            <tr><td><b>fa-medkit</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-medkit'></i></button><button class='btn bg-gradient-info'><i class='fab fa-medkit'></i></button></td></tr>

            <tr><td><b>fa-medrt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-medrt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-medrt'></i></button></td></tr>

            <tr><td><b>fa-meetup</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-meetup'></i></button><button class='btn bg-gradient-info'><i class='fab fa-meetup'></i></button></td></tr>

            <tr><td><b>fa-megaport</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-megaport'></i></button><button class='btn bg-gradient-info'><i class='fab fa-megaport'></i></button></td></tr>

            <tr><td><b>fa-meh</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-meh'></i></button><button class='btn bg-gradient-info'><i class='fab fa-meh'></i></button></td></tr>

            <tr><td><b>fa-meh-blank</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-meh-blank'></i></button><button class='btn bg-gradient-info'><i class='fab fa-meh-blank'></i></button></td></tr>

            <tr><td><b>fa-meh-rolling-eyes</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-meh-rolling-eyes'></i></button><button class='btn bg-gradient-info'><i class='fab fa-meh-rolling-eyes'></i></button></td></tr>

            <tr><td><b>fa-memory</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-memory'></i></button><button class='btn bg-gradient-info'><i class='fab fa-memory'></i></button></td></tr>

            <tr><td><b>fa-mendeley</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mendeley'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mendeley'></i></button></td></tr>

            <tr><td><b>fa-menorah</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-menorah'></i></button><button class='btn bg-gradient-info'><i class='fab fa-menorah'></i></button></td></tr>

            <tr><td><b>fa-mercury</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mercury'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mercury'></i></button></td></tr>

            <tr><td><b>fa-meteor</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-meteor'></i></button><button class='btn bg-gradient-info'><i class='fab fa-meteor'></i></button></td></tr>

            <tr><td><b>fa-microblog</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-microblog'></i></button><button class='btn bg-gradient-info'><i class='fab fa-microblog'></i></button></td></tr>

            <tr><td><b>fa-microchip</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-microchip'></i></button><button class='btn bg-gradient-info'><i class='fab fa-microchip'></i></button></td></tr>

            <tr><td><b>fa-microphone</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-microphone'></i></button><button class='btn bg-gradient-info'><i class='fab fa-microphone'></i></button></td></tr>

            <tr><td><b>fa-microphone-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-microphone-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-microphone-alt'></i></button></td></tr>

            <tr><td><b>fa-microphone-alt-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-microphone-alt-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-microphone-alt-slash'></i></button></td></tr>

            <tr><td><b>fa-microphone-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-microphone-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-microphone-slash'></i></button></td></tr>

            <tr><td><b>fa-microscope</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-microscope'></i></button><button class='btn bg-gradient-info'><i class='fab fa-microscope'></i></button></td></tr>

            <tr><td><b>fa-microsoft</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-microsoft'></i></button><button class='btn bg-gradient-info'><i class='fab fa-microsoft'></i></button></td></tr>

            <tr><td><b>fa-minus</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-minus'></i></button><button class='btn bg-gradient-info'><i class='fab fa-minus'></i></button></td></tr>

            <tr><td><b>fa-minus-circle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-minus-circle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-minus-circle'></i></button></td></tr>

            <tr><td><b>fa-minus-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-minus-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-minus-square'></i></button></td></tr>

            <tr><td><b>fa-mitten</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mitten'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mitten'></i></button></td></tr>

            <tr><td><b>fa-mix</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mix'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mix'></i></button></td></tr>

            <tr><td><b>fa-mixcloud</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mixcloud'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mixcloud'></i></button></td></tr>

            <tr><td><b>fa-mixer</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mixer'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mixer'></i></button></td></tr>

            <tr><td><b>fa-mizuni</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mizuni'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mizuni'></i></button></td></tr>

            <tr><td><b>fa-mobile</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mobile'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mobile'></i></button></td></tr>

            <tr><td><b>fa-mobile-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mobile-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mobile-alt'></i></button></td></tr>

            <tr><td><b>fa-modx</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-modx'></i></button><button class='btn bg-gradient-info'><i class='fab fa-modx'></i></button></td></tr>

            <tr><td><b>fa-monero</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-monero'></i></button><button class='btn bg-gradient-info'><i class='fab fa-monero'></i></button></td></tr>

            <tr><td><b>fa-money-bill</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-money-bill'></i></button><button class='btn bg-gradient-info'><i class='fab fa-money-bill'></i></button></td></tr>

            <tr><td><b>fa-money-bill-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-money-bill-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-money-bill-alt'></i></button></td></tr>

            <tr><td><b>fa-money-bill-wave</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-money-bill-wave'></i></button><button class='btn bg-gradient-info'><i class='fab fa-money-bill-wave'></i></button></td></tr>

            <tr><td><b>fa-money-bill-wave-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-money-bill-wave-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-money-bill-wave-alt'></i></button></td></tr>

            <tr><td><b>fa-money-check</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-money-check'></i></button><button class='btn bg-gradient-info'><i class='fab fa-money-check'></i></button></td></tr>

            <tr><td><b>fa-money-check-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-money-check-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-money-check-alt'></i></button></td></tr>

            <tr><td><b>fa-monument</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-monument'></i></button><button class='btn bg-gradient-info'><i class='fab fa-monument'></i></button></td></tr>

            <tr><td><b>fa-moon</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-moon'></i></button><button class='btn bg-gradient-info'><i class='fab fa-moon'></i></button></td></tr>

            <tr><td><b>fa-mortar-pestle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mortar-pestle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mortar-pestle'></i></button></td></tr>

            <tr><td><b>fa-mosque</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mosque'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mosque'></i></button></td></tr>

            <tr><td><b>fa-motorcycle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-motorcycle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-motorcycle'></i></button></td></tr>

            <tr><td><b>fa-mountain</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mountain'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mountain'></i></button></td></tr>

            <tr><td><b>fa-mouse</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mouse'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mouse'></i></button></td></tr>

            <tr><td><b>fa-mouse-pointer</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mouse-pointer'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mouse-pointer'></i></button></td></tr>

            <tr><td><b>fa-mug-hot</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-mug-hot'></i></button><button class='btn bg-gradient-info'><i class='fab fa-mug-hot'></i></button></td></tr>

            <tr><td><b>fa-music</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-music'></i></button><button class='btn bg-gradient-info'><i class='fab fa-music'></i></button></td></tr>

            <tr><td><b>fa-napster</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-napster'></i></button><button class='btn bg-gradient-info'><i class='fab fa-napster'></i></button></td></tr>

            <tr><td><b>fa-neos</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-neos'></i></button><button class='btn bg-gradient-info'><i class='fab fa-neos'></i></button></td></tr>

            <tr><td><b>fa-network-wired</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-network-wired'></i></button><button class='btn bg-gradient-info'><i class='fab fa-network-wired'></i></button></td></tr>

            <tr><td><b>fa-neuter</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-neuter'></i></button><button class='btn bg-gradient-info'><i class='fab fa-neuter'></i></button></td></tr>

            <tr><td><b>fa-newspaper</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-newspaper'></i></button><button class='btn bg-gradient-info'><i class='fab fa-newspaper'></i></button></td></tr>

            <tr><td><b>fa-nimblr</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-nimblr'></i></button><button class='btn bg-gradient-info'><i class='fab fa-nimblr'></i></button></td></tr>

            <tr><td><b>fa-node</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-node'></i></button><button class='btn bg-gradient-info'><i class='fab fa-node'></i></button></td></tr>

            <tr><td><b>fa-node-js</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-node-js'></i></button><button class='btn bg-gradient-info'><i class='fab fa-node-js'></i></button></td></tr>

            <tr><td><b>fa-not-equal</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-not-equal'></i></button><button class='btn bg-gradient-info'><i class='fab fa-not-equal'></i></button></td></tr>

            <tr><td><b>fa-notes-medical</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-notes-medical'></i></button><button class='btn bg-gradient-info'><i class='fab fa-notes-medical'></i></button></td></tr>

            <tr><td><b>fa-npm</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-npm'></i></button><button class='btn bg-gradient-info'><i class='fab fa-npm'></i></button></td></tr>

            <tr><td><b>fa-ns8</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ns8'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ns8'></i></button></td></tr>

            <tr><td><b>fa-nutritionix</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-nutritionix'></i></button><button class='btn bg-gradient-info'><i class='fab fa-nutritionix'></i></button></td></tr>

            <tr><td><b>fa-object-group</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-object-group'></i></button><button class='btn bg-gradient-info'><i class='fab fa-object-group'></i></button></td></tr>

            <tr><td><b>fa-object-ungroup</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-object-ungroup'></i></button><button class='btn bg-gradient-info'><i class='fab fa-object-ungroup'></i></button></td></tr>

            <tr><td><b>fa-octopus-deploy</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-octopus-deploy'></i></button><button class='btn bg-gradient-info'><i class='fab fa-octopus-deploy'></i></button></td></tr>

            <tr><td><b>fa-odnoklassniki</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-odnoklassniki'></i></button><button class='btn bg-gradient-info'><i class='fab fa-odnoklassniki'></i></button></td></tr>

            <tr><td><b>fa-odnoklassniki-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-odnoklassniki-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-odnoklassniki-square'></i></button></td></tr>

            <tr><td><b>fa-oil-can</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-oil-can'></i></button><button class='btn bg-gradient-info'><i class='fab fa-oil-can'></i></button></td></tr>

            <tr><td><b>fa-old-republic</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-old-republic'></i></button><button class='btn bg-gradient-info'><i class='fab fa-old-republic'></i></button></td></tr>

            <tr><td><b>fa-om</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-om'></i></button><button class='btn bg-gradient-info'><i class='fab fa-om'></i></button></td></tr>

            <tr><td><b>fa-opencart</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-opencart'></i></button><button class='btn bg-gradient-info'><i class='fab fa-opencart'></i></button></td></tr>

            <tr><td><b>fa-openid</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-openid'></i></button><button class='btn bg-gradient-info'><i class='fab fa-openid'></i></button></td></tr>

            <tr><td><b>fa-opera</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-opera'></i></button><button class='btn bg-gradient-info'><i class='fab fa-opera'></i></button></td></tr>

            <tr><td><b>fa-optin-monster</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-optin-monster'></i></button><button class='btn bg-gradient-info'><i class='fab fa-optin-monster'></i></button></td></tr>

            <tr><td><b>fa-orcid</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-orcid'></i></button><button class='btn bg-gradient-info'><i class='fab fa-orcid'></i></button></td></tr>

            <tr><td><b>fa-osi</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-osi'></i></button><button class='btn bg-gradient-info'><i class='fab fa-osi'></i></button></td></tr>

            <tr><td><b>fa-otter</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-otter'></i></button><button class='btn bg-gradient-info'><i class='fab fa-otter'></i></button></td></tr>

            <tr><td><b>fa-outdent</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-outdent'></i></button><button class='btn bg-gradient-info'><i class='fab fa-outdent'></i></button></td></tr>

            <tr><td><b>fa-page4</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-page4'></i></button><button class='btn bg-gradient-info'><i class='fab fa-page4'></i></button></td></tr>

            <tr><td><b>fa-pagelines</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pagelines'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pagelines'></i></button></td></tr>

            <tr><td><b>fa-pager</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pager'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pager'></i></button></td></tr>

            <tr><td><b>fa-paint-brush</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-paint-brush'></i></button><button class='btn bg-gradient-info'><i class='fab fa-paint-brush'></i></button></td></tr>

            <tr><td><b>fa-paint-roller</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-paint-roller'></i></button><button class='btn bg-gradient-info'><i class='fab fa-paint-roller'></i></button></td></tr>

            <tr><td><b>fa-palette</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-palette'></i></button><button class='btn bg-gradient-info'><i class='fab fa-palette'></i></button></td></tr>

            <tr><td><b>fa-palfed</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-palfed'></i></button><button class='btn bg-gradient-info'><i class='fab fa-palfed'></i></button></td></tr>

            <tr><td><b>fa-pallet</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pallet'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pallet'></i></button></td></tr>

            <tr><td><b>fa-paper-plane</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-paper-plane'></i></button><button class='btn bg-gradient-info'><i class='fab fa-paper-plane'></i></button></td></tr>

            <tr><td><b>fa-paperclip</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-paperclip'></i></button><button class='btn bg-gradient-info'><i class='fab fa-paperclip'></i></button></td></tr>

            <tr><td><b>fa-parachute-box</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-parachute-box'></i></button><button class='btn bg-gradient-info'><i class='fab fa-parachute-box'></i></button></td></tr>

            <tr><td><b>fa-paragraph</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-paragraph'></i></button><button class='btn bg-gradient-info'><i class='fab fa-paragraph'></i></button></td></tr>

            <tr><td><b>fa-parking</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-parking'></i></button><button class='btn bg-gradient-info'><i class='fab fa-parking'></i></button></td></tr>

            <tr><td><b>fa-passport</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-passport'></i></button><button class='btn bg-gradient-info'><i class='fab fa-passport'></i></button></td></tr>

            <tr><td><b>fa-pastafarianism</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pastafarianism'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pastafarianism'></i></button></td></tr>

            <tr><td><b>fa-paste</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-paste'></i></button><button class='btn bg-gradient-info'><i class='fab fa-paste'></i></button></td></tr>

            <tr><td><b>fa-patreon</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-patreon'></i></button><button class='btn bg-gradient-info'><i class='fab fa-patreon'></i></button></td></tr>

            <tr><td><b>fa-pause</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pause'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pause'></i></button></td></tr>

            <tr><td><b>fa-pause-circle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pause-circle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pause-circle'></i></button></td></tr>

            <tr><td><b>fa-paw</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-paw'></i></button><button class='btn bg-gradient-info'><i class='fab fa-paw'></i></button></td></tr>

            <tr><td><b>fa-paypal</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-paypal'></i></button><button class='btn bg-gradient-info'><i class='fab fa-paypal'></i></button></td></tr>

            <tr><td><b>fa-peace</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-peace'></i></button><button class='btn bg-gradient-info'><i class='fab fa-peace'></i></button></td></tr>

            <tr><td><b>fa-pen</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pen'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pen'></i></button></td></tr>

            <tr><td><b>fa-pen-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pen-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pen-alt'></i></button></td></tr>

            <tr><td><b>fa-pen-fancy</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pen-fancy'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pen-fancy'></i></button></td></tr>

            <tr><td><b>fa-pen-nib</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pen-nib'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pen-nib'></i></button></td></tr>

            <tr><td><b>fa-pen-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pen-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pen-square'></i></button></td></tr>

            <tr><td><b>fa-pencil-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pencil-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pencil-alt'></i></button></td></tr>

            <tr><td><b>fa-pencil-ruler</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pencil-ruler'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pencil-ruler'></i></button></td></tr>

            <tr><td><b>fa-penny-arcade</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-penny-arcade'></i></button><button class='btn bg-gradient-info'><i class='fab fa-penny-arcade'></i></button></td></tr>

            <tr><td><b>fa-people-arrows</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-people-arrows'></i></button><button class='btn bg-gradient-info'><i class='fab fa-people-arrows'></i></button></td></tr>

            <tr><td><b>fa-people-carry</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-people-carry'></i></button><button class='btn bg-gradient-info'><i class='fab fa-people-carry'></i></button></td></tr>

            <tr><td><b>fa-pepper-hot</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pepper-hot'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pepper-hot'></i></button></td></tr>

            <tr><td><b>fa-perbyte</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-perbyte'></i></button><button class='btn bg-gradient-info'><i class='fab fa-perbyte'></i></button></td></tr>

            <tr><td><b>fa-percent</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-percent'></i></button><button class='btn bg-gradient-info'><i class='fab fa-percent'></i></button></td></tr>

            <tr><td><b>fa-percentage</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-percentage'></i></button><button class='btn bg-gradient-info'><i class='fab fa-percentage'></i></button></td></tr>

            <tr><td><b>fa-periscope</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-periscope'></i></button><button class='btn bg-gradient-info'><i class='fab fa-periscope'></i></button></td></tr>

            <tr><td><b>fa-person-booth</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-person-booth'></i></button><button class='btn bg-gradient-info'><i class='fab fa-person-booth'></i></button></td></tr>

            <tr><td><b>fa-phabricator</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-phabricator'></i></button><button class='btn bg-gradient-info'><i class='fab fa-phabricator'></i></button></td></tr>

            <tr><td><b>fa-phoenix-framework</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-phoenix-framework'></i></button><button class='btn bg-gradient-info'><i class='fab fa-phoenix-framework'></i></button></td></tr>

            <tr><td><b>fa-phoenix-squadron</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-phoenix-squadron'></i></button><button class='btn bg-gradient-info'><i class='fab fa-phoenix-squadron'></i></button></td></tr>

            <tr><td><b>fa-phone</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-phone'></i></button><button class='btn bg-gradient-info'><i class='fab fa-phone'></i></button></td></tr>

            <tr><td><b>fa-phone-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-phone-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-phone-alt'></i></button></td></tr>

            <tr><td><b>fa-phone-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-phone-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-phone-slash'></i></button></td></tr>

            <tr><td><b>fa-phone-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-phone-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-phone-square'></i></button></td></tr>

            <tr><td><b>fa-phone-square-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-phone-square-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-phone-square-alt'></i></button></td></tr>

            <tr><td><b>fa-phone-volume</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-phone-volume'></i></button><button class='btn bg-gradient-info'><i class='fab fa-phone-volume'></i></button></td></tr>

            <tr><td><b>fa-photo-video</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-photo-video'></i></button><button class='btn bg-gradient-info'><i class='fab fa-photo-video'></i></button></td></tr>

            <tr><td><b>fa-php</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-php'></i></button><button class='btn bg-gradient-info'><i class='fab fa-php'></i></button></td></tr>

            <tr><td><b>fa-pied-piper</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pied-piper'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pied-piper'></i></button></td></tr>

            <tr><td><b>fa-pied-piper-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pied-piper-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pied-piper-alt'></i></button></td></tr>

            <tr><td><b>fa-pied-piper-hat</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pied-piper-hat'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pied-piper-hat'></i></button></td></tr>

            <tr><td><b>fa-pied-piper-pp</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pied-piper-pp'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pied-piper-pp'></i></button></td></tr>

            <tr><td><b>fa-pied-piper-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pied-piper-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pied-piper-square'></i></button></td></tr>

            <tr><td><b>fa-piggy-bank</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-piggy-bank'></i></button><button class='btn bg-gradient-info'><i class='fab fa-piggy-bank'></i></button></td></tr>

            <tr><td><b>fa-pills</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pills'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pills'></i></button></td></tr>

            <tr><td><b>fa-pinterest</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pinterest'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pinterest'></i></button></td></tr>

            <tr><td><b>fa-pinterest-p</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pinterest-p'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pinterest-p'></i></button></td></tr>

            <tr><td><b>fa-pinterest-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pinterest-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pinterest-square'></i></button></td></tr>

            <tr><td><b>fa-pizza-slice</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pizza-slice'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pizza-slice'></i></button></td></tr>

            <tr><td><b>fa-place-of-worship</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-place-of-worship'></i></button><button class='btn bg-gradient-info'><i class='fab fa-place-of-worship'></i></button></td></tr>

            <tr><td><b>fa-plane</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-plane'></i></button><button class='btn bg-gradient-info'><i class='fab fa-plane'></i></button></td></tr>

            <tr><td><b>fa-plane-arrival</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-plane-arrival'></i></button><button class='btn bg-gradient-info'><i class='fab fa-plane-arrival'></i></button></td></tr>

            <tr><td><b>fa-plane-departure</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-plane-departure'></i></button><button class='btn bg-gradient-info'><i class='fab fa-plane-departure'></i></button></td></tr>

            <tr><td><b>fa-plane-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-plane-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-plane-slash'></i></button></td></tr>

            <tr><td><b>fa-play</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-play'></i></button><button class='btn bg-gradient-info'><i class='fab fa-play'></i></button></td></tr>

            <tr><td><b>fa-play-circle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-play-circle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-play-circle'></i></button></td></tr>

            <tr><td><b>fa-playstation</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-playstation'></i></button><button class='btn bg-gradient-info'><i class='fab fa-playstation'></i></button></td></tr>

            <tr><td><b>fa-plug</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-plug'></i></button><button class='btn bg-gradient-info'><i class='fab fa-plug'></i></button></td></tr>

            <tr><td><b>fa-plus</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-plus'></i></button><button class='btn bg-gradient-info'><i class='fab fa-plus'></i></button></td></tr>

            <tr><td><b>fa-plus-circle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-plus-circle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-plus-circle'></i></button></td></tr>

            <tr><td><b>fa-plus-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-plus-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-plus-square'></i></button></td></tr>

            <tr><td><b>fa-podcast</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-podcast'></i></button><button class='btn bg-gradient-info'><i class='fab fa-podcast'></i></button></td></tr>

            <tr><td><b>fa-poll</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-poll'></i></button><button class='btn bg-gradient-info'><i class='fab fa-poll'></i></button></td></tr>

            <tr><td><b>fa-poll-h</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-poll-h'></i></button><button class='btn bg-gradient-info'><i class='fab fa-poll-h'></i></button></td></tr>

            <tr><td><b>fa-poo</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-poo'></i></button><button class='btn bg-gradient-info'><i class='fab fa-poo'></i></button></td></tr>

            <tr><td><b>fa-poo-storm</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-poo-storm'></i></button><button class='btn bg-gradient-info'><i class='fab fa-poo-storm'></i></button></td></tr>

            <tr><td><b>fa-poop</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-poop'></i></button><button class='btn bg-gradient-info'><i class='fab fa-poop'></i></button></td></tr>

            <tr><td><b>fa-portrait</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-portrait'></i></button><button class='btn bg-gradient-info'><i class='fab fa-portrait'></i></button></td></tr>

            <tr><td><b>fa-pound-sign</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pound-sign'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pound-sign'></i></button></td></tr>

            <tr><td><b>fa-power-off</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-power-off'></i></button><button class='btn bg-gradient-info'><i class='fab fa-power-off'></i></button></td></tr>

            <tr><td><b>fa-pray</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pray'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pray'></i></button></td></tr>

            <tr><td><b>fa-praying-hands</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-praying-hands'></i></button><button class='btn bg-gradient-info'><i class='fab fa-praying-hands'></i></button></td></tr>

            <tr><td><b>fa-prescription</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-prescription'></i></button><button class='btn bg-gradient-info'><i class='fab fa-prescription'></i></button></td></tr>

            <tr><td><b>fa-prescription-bottle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-prescription-bottle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-prescription-bottle'></i></button></td></tr>

            <tr><td><b>fa-prescription-bottle-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-prescription-bottle-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-prescription-bottle-alt'></i></button></td></tr>

            <tr><td><b>fa-print</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-print'></i></button><button class='btn bg-gradient-info'><i class='fab fa-print'></i></button></td></tr>

            <tr><td><b>fa-procedures</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-procedures'></i></button><button class='btn bg-gradient-info'><i class='fab fa-procedures'></i></button></td></tr>

            <tr><td><b>fa-product-hunt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-product-hunt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-product-hunt'></i></button></td></tr>

            <tr><td><b>fa-project-diagram</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-project-diagram'></i></button><button class='btn bg-gradient-info'><i class='fab fa-project-diagram'></i></button></td></tr>

            <tr><td><b>fa-pump-medical</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pump-medical'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pump-medical'></i></button></td></tr>

            <tr><td><b>fa-pump-soap</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pump-soap'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pump-soap'></i></button></td></tr>

            <tr><td><b>fa-pushed</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-pushed'></i></button><button class='btn bg-gradient-info'><i class='fab fa-pushed'></i></button></td></tr>

            <tr><td><b>fa-puzzle-piece</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-puzzle-piece'></i></button><button class='btn bg-gradient-info'><i class='fab fa-puzzle-piece'></i></button></td></tr>

            <tr><td><b>fa-python</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-python'></i></button><button class='btn bg-gradient-info'><i class='fab fa-python'></i></button></td></tr>

            <tr><td><b>fa-qq</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-qq'></i></button><button class='btn bg-gradient-info'><i class='fab fa-qq'></i></button></td></tr>

            <tr><td><b>fa-qrcode</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-qrcode'></i></button><button class='btn bg-gradient-info'><i class='fab fa-qrcode'></i></button></td></tr>

            <tr><td><b>fa-question</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-question'></i></button><button class='btn bg-gradient-info'><i class='fab fa-question'></i></button></td></tr>

            <tr><td><b>fa-question-circle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-question-circle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-question-circle'></i></button></td></tr>

            <tr><td><b>fa-quidditch</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-quidditch'></i></button><button class='btn bg-gradient-info'><i class='fab fa-quidditch'></i></button></td></tr>

            <tr><td><b>fa-quinscape</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-quinscape'></i></button><button class='btn bg-gradient-info'><i class='fab fa-quinscape'></i></button></td></tr>

            <tr><td><b>fa-quora</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-quora'></i></button><button class='btn bg-gradient-info'><i class='fab fa-quora'></i></button></td></tr>

            <tr><td><b>fa-quote-left</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-quote-left'></i></button><button class='btn bg-gradient-info'><i class='fab fa-quote-left'></i></button></td></tr>

            <tr><td><b>fa-quote-right</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-quote-right'></i></button><button class='btn bg-gradient-info'><i class='fab fa-quote-right'></i></button></td></tr>

            <tr><td><b>fa-quran</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-quran'></i></button><button class='btn bg-gradient-info'><i class='fab fa-quran'></i></button></td></tr>

            <tr><td><b>fa-r-project</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-r-project'></i></button><button class='btn bg-gradient-info'><i class='fab fa-r-project'></i></button></td></tr>

            <tr><td><b>fa-radiation</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-radiation'></i></button><button class='btn bg-gradient-info'><i class='fab fa-radiation'></i></button></td></tr>

            <tr><td><b>fa-radiation-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-radiation-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-radiation-alt'></i></button></td></tr>

            <tr><td><b>fa-rainbow</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-rainbow'></i></button><button class='btn bg-gradient-info'><i class='fab fa-rainbow'></i></button></td></tr>

            <tr><td><b>fa-random</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-random'></i></button><button class='btn bg-gradient-info'><i class='fab fa-random'></i></button></td></tr>

            <tr><td><b>fa-raspberry-pi</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-raspberry-pi'></i></button><button class='btn bg-gradient-info'><i class='fab fa-raspberry-pi'></i></button></td></tr>

            <tr><td><b>fa-ravelry</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ravelry'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ravelry'></i></button></td></tr>

            <tr><td><b>fa-react</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-react'></i></button><button class='btn bg-gradient-info'><i class='fab fa-react'></i></button></td></tr>

            <tr><td><b>fa-reacteurope</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-reacteurope'></i></button><button class='btn bg-gradient-info'><i class='fab fa-reacteurope'></i></button></td></tr>

            <tr><td><b>fa-readme</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-readme'></i></button><button class='btn bg-gradient-info'><i class='fab fa-readme'></i></button></td></tr>

            <tr><td><b>fa-rebel</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-rebel'></i></button><button class='btn bg-gradient-info'><i class='fab fa-rebel'></i></button></td></tr>

            <tr><td><b>fa-receipt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-receipt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-receipt'></i></button></td></tr>

            <tr><td><b>fa-record-vinyl</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-record-vinyl'></i></button><button class='btn bg-gradient-info'><i class='fab fa-record-vinyl'></i></button></td></tr>

            <tr><td><b>fa-recycle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-recycle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-recycle'></i></button></td></tr>

            <tr><td><b>fa-red-river</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-red-river'></i></button><button class='btn bg-gradient-info'><i class='fab fa-red-river'></i></button></td></tr>

            <tr><td><b>fa-reddit</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-reddit'></i></button><button class='btn bg-gradient-info'><i class='fab fa-reddit'></i></button></td></tr>

            <tr><td><b>fa-reddit-alien</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-reddit-alien'></i></button><button class='btn bg-gradient-info'><i class='fab fa-reddit-alien'></i></button></td></tr>

            <tr><td><b>fa-reddit-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-reddit-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-reddit-square'></i></button></td></tr>

            <tr><td><b>fa-redhat</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-redhat'></i></button><button class='btn bg-gradient-info'><i class='fab fa-redhat'></i></button></td></tr>

            <tr><td><b>fa-redo</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-redo'></i></button><button class='btn bg-gradient-info'><i class='fab fa-redo'></i></button></td></tr>

            <tr><td><b>fa-redo-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-redo-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-redo-alt'></i></button></td></tr>

            <tr><td><b>fa-registered</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-registered'></i></button><button class='btn bg-gradient-info'><i class='fab fa-registered'></i></button></td></tr>

            <tr><td><b>fa-remove-format</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-remove-format'></i></button><button class='btn bg-gradient-info'><i class='fab fa-remove-format'></i></button></td></tr>

            <tr><td><b>fa-renren</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-renren'></i></button><button class='btn bg-gradient-info'><i class='fab fa-renren'></i></button></td></tr>

            <tr><td><b>fa-reply</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-reply'></i></button><button class='btn bg-gradient-info'><i class='fab fa-reply'></i></button></td></tr>

            <tr><td><b>fa-reply-all</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-reply-all'></i></button><button class='btn bg-gradient-info'><i class='fab fa-reply-all'></i></button></td></tr>

            <tr><td><b>fa-replyd</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-replyd'></i></button><button class='btn bg-gradient-info'><i class='fab fa-replyd'></i></button></td></tr>

            <tr><td><b>fa-republican</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-republican'></i></button><button class='btn bg-gradient-info'><i class='fab fa-republican'></i></button></td></tr>

            <tr><td><b>fa-researchgate</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-researchgate'></i></button><button class='btn bg-gradient-info'><i class='fab fa-researchgate'></i></button></td></tr>

            <tr><td><b>fa-resolving</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-resolving'></i></button><button class='btn bg-gradient-info'><i class='fab fa-resolving'></i></button></td></tr>

            <tr><td><b>fa-restroom</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-restroom'></i></button><button class='btn bg-gradient-info'><i class='fab fa-restroom'></i></button></td></tr>

            <tr><td><b>fa-retweet</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-retweet'></i></button><button class='btn bg-gradient-info'><i class='fab fa-retweet'></i></button></td></tr>

            <tr><td><b>fa-rev</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-rev'></i></button><button class='btn bg-gradient-info'><i class='fab fa-rev'></i></button></td></tr>

            <tr><td><b>fa-ribbon</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ribbon'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ribbon'></i></button></td></tr>

            <tr><td><b>fa-ring</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ring'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ring'></i></button></td></tr>

            <tr><td><b>fa-road</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-road'></i></button><button class='btn bg-gradient-info'><i class='fab fa-road'></i></button></td></tr>

            <tr><td><b>fa-robot</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-robot'></i></button><button class='btn bg-gradient-info'><i class='fab fa-robot'></i></button></td></tr>

            <tr><td><b>fa-rocket</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-rocket'></i></button><button class='btn bg-gradient-info'><i class='fab fa-rocket'></i></button></td></tr>

            <tr><td><b>fa-rocketchat</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-rocketchat'></i></button><button class='btn bg-gradient-info'><i class='fab fa-rocketchat'></i></button></td></tr>

            <tr><td><b>fa-rockrms</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-rockrms'></i></button><button class='btn bg-gradient-info'><i class='fab fa-rockrms'></i></button></td></tr>

            <tr><td><b>fa-route</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-route'></i></button><button class='btn bg-gradient-info'><i class='fab fa-route'></i></button></td></tr>

            <tr><td><b>fa-rss</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-rss'></i></button><button class='btn bg-gradient-info'><i class='fab fa-rss'></i></button></td></tr>

            <tr><td><b>fa-rss-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-rss-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-rss-square'></i></button></td></tr>

            <tr><td><b>fa-ruble-sign</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ruble-sign'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ruble-sign'></i></button></td></tr>

            <tr><td><b>fa-ruler</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ruler'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ruler'></i></button></td></tr>

            <tr><td><b>fa-ruler-combined</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ruler-combined'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ruler-combined'></i></button></td></tr>

            <tr><td><b>fa-ruler-horizontal</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ruler-horizontal'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ruler-horizontal'></i></button></td></tr>

            <tr><td><b>fa-ruler-vertical</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ruler-vertical'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ruler-vertical'></i></button></td></tr>

            <tr><td><b>fa-running</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-running'></i></button><button class='btn bg-gradient-info'><i class='fab fa-running'></i></button></td></tr>

            <tr><td><b>fa-rupee-sign</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-rupee-sign'></i></button><button class='btn bg-gradient-info'><i class='fab fa-rupee-sign'></i></button></td></tr>

            <tr><td><b>fa-rust</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-rust'></i></button><button class='btn bg-gradient-info'><i class='fab fa-rust'></i></button></td></tr>

            <tr><td><b>fa-sad-cry</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sad-cry'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sad-cry'></i></button></td></tr>

            <tr><td><b>fa-sad-tear</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sad-tear'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sad-tear'></i></button></td></tr>

            <tr><td><b>fa-safari</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-safari'></i></button><button class='btn bg-gradient-info'><i class='fab fa-safari'></i></button></td></tr>

            <tr><td><b>fa-salesforce</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-salesforce'></i></button><button class='btn bg-gradient-info'><i class='fab fa-salesforce'></i></button></td></tr>

            <tr><td><b>fa-sass</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sass'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sass'></i></button></td></tr>

            <tr><td><b>fa-satellite</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-satellite'></i></button><button class='btn bg-gradient-info'><i class='fab fa-satellite'></i></button></td></tr>

            <tr><td><b>fa-satellite-dish</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-satellite-dish'></i></button><button class='btn bg-gradient-info'><i class='fab fa-satellite-dish'></i></button></td></tr>

            <tr><td><b>fa-save</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-save'></i></button><button class='btn bg-gradient-info'><i class='fab fa-save'></i></button></td></tr>

            <tr><td><b>fa-schlix</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-schlix'></i></button><button class='btn bg-gradient-info'><i class='fab fa-schlix'></i></button></td></tr>

            <tr><td><b>fa-school</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-school'></i></button><button class='btn bg-gradient-info'><i class='fab fa-school'></i></button></td></tr>

            <tr><td><b>fa-screwdriver</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-screwdriver'></i></button><button class='btn bg-gradient-info'><i class='fab fa-screwdriver'></i></button></td></tr>

            <tr><td><b>fa-scribd</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-scribd'></i></button><button class='btn bg-gradient-info'><i class='fab fa-scribd'></i></button></td></tr>

            <tr><td><b>fa-scroll</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-scroll'></i></button><button class='btn bg-gradient-info'><i class='fab fa-scroll'></i></button></td></tr>

            <tr><td><b>fa-sd-card</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sd-card'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sd-card'></i></button></td></tr>

            <tr><td><b>fa-search</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-search'></i></button><button class='btn bg-gradient-info'><i class='fab fa-search'></i></button></td></tr>

            <tr><td><b>fa-search-dollar</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-search-dollar'></i></button><button class='btn bg-gradient-info'><i class='fab fa-search-dollar'></i></button></td></tr>

            <tr><td><b>fa-search-location</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-search-location'></i></button><button class='btn bg-gradient-info'><i class='fab fa-search-location'></i></button></td></tr>

            <tr><td><b>fa-search-minus</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-search-minus'></i></button><button class='btn bg-gradient-info'><i class='fab fa-search-minus'></i></button></td></tr>

            <tr><td><b>fa-search-plus</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-search-plus'></i></button><button class='btn bg-gradient-info'><i class='fab fa-search-plus'></i></button></td></tr>

            <tr><td><b>fa-searchengin</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-searchengin'></i></button><button class='btn bg-gradient-info'><i class='fab fa-searchengin'></i></button></td></tr>

            <tr><td><b>fa-seedling</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-seedling'></i></button><button class='btn bg-gradient-info'><i class='fab fa-seedling'></i></button></td></tr>

            <tr><td><b>fa-sellcast</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sellcast'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sellcast'></i></button></td></tr>

            <tr><td><b>fa-sellsy</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sellsy'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sellsy'></i></button></td></tr>

            <tr><td><b>fa-server</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-server'></i></button><button class='btn bg-gradient-info'><i class='fab fa-server'></i></button></td></tr>

            <tr><td><b>fa-servicestack</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-servicestack'></i></button><button class='btn bg-gradient-info'><i class='fab fa-servicestack'></i></button></td></tr>

            <tr><td><b>fa-shapes</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-shapes'></i></button><button class='btn bg-gradient-info'><i class='fab fa-shapes'></i></button></td></tr>

            <tr><td><b>fa-share</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-share'></i></button><button class='btn bg-gradient-info'><i class='fab fa-share'></i></button></td></tr>

            <tr><td><b>fa-share-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-share-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-share-alt'></i></button></td></tr>

            <tr><td><b>fa-share-alt-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-share-alt-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-share-alt-square'></i></button></td></tr>

            <tr><td><b>fa-share-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-share-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-share-square'></i></button></td></tr>

            <tr><td><b>fa-shekel-sign</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-shekel-sign'></i></button><button class='btn bg-gradient-info'><i class='fab fa-shekel-sign'></i></button></td></tr>

            <tr><td><b>fa-shield-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-shield-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-shield-alt'></i></button></td></tr>

            <tr><td><b>fa-shield-virus</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-shield-virus'></i></button><button class='btn bg-gradient-info'><i class='fab fa-shield-virus'></i></button></td></tr>

            <tr><td><b>fa-ship</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ship'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ship'></i></button></td></tr>

            <tr><td><b>fa-shipping-fast</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-shipping-fast'></i></button><button class='btn bg-gradient-info'><i class='fab fa-shipping-fast'></i></button></td></tr>

            <tr><td><b>fa-shirtsinbulk</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-shirtsinbulk'></i></button><button class='btn bg-gradient-info'><i class='fab fa-shirtsinbulk'></i></button></td></tr>

            <tr><td><b>fa-shoe-prints</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-shoe-prints'></i></button><button class='btn bg-gradient-info'><i class='fab fa-shoe-prints'></i></button></td></tr>

            <tr><td><b>fa-shopify</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-shopify'></i></button><button class='btn bg-gradient-info'><i class='fab fa-shopify'></i></button></td></tr>

            <tr><td><b>fa-shopping-bag</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-shopping-bag'></i></button><button class='btn bg-gradient-info'><i class='fab fa-shopping-bag'></i></button></td></tr>

            <tr><td><b>fa-shopping-basket</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-shopping-basket'></i></button><button class='btn bg-gradient-info'><i class='fab fa-shopping-basket'></i></button></td></tr>

            <tr><td><b>fa-shopping-cart</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-shopping-cart'></i></button><button class='btn bg-gradient-info'><i class='fab fa-shopping-cart'></i></button></td></tr>

            <tr><td><b>fa-shopware</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-shopware'></i></button><button class='btn bg-gradient-info'><i class='fab fa-shopware'></i></button></td></tr>

            <tr><td><b>fa-shower</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-shower'></i></button><button class='btn bg-gradient-info'><i class='fab fa-shower'></i></button></td></tr>

            <tr><td><b>fa-shuttle-van</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-shuttle-van'></i></button><button class='btn bg-gradient-info'><i class='fab fa-shuttle-van'></i></button></td></tr>

            <tr><td><b>fa-sign</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sign'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sign'></i></button></td></tr>

            <tr><td><b>fa-sign-in-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sign-in-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sign-in-alt'></i></button></td></tr>

            <tr><td><b>fa-sign-language</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sign-language'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sign-language'></i></button></td></tr>

            <tr><td><b>fa-sign-out-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sign-out-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sign-out-alt'></i></button></td></tr>

            <tr><td><b>fa-signal</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-signal'></i></button><button class='btn bg-gradient-info'><i class='fab fa-signal'></i></button></td></tr>

            <tr><td><b>fa-signature</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-signature'></i></button><button class='btn bg-gradient-info'><i class='fab fa-signature'></i></button></td></tr>

            <tr><td><b>fa-sim-card</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sim-card'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sim-card'></i></button></td></tr>

            <tr><td><b>fa-simplybuilt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-simplybuilt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-simplybuilt'></i></button></td></tr>

            <tr><td><b>fa-sink</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sink'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sink'></i></button></td></tr>

            <tr><td><b>fa-sistrix</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sistrix'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sistrix'></i></button></td></tr>

            <tr><td><b>fa-sitemap</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sitemap'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sitemap'></i></button></td></tr>

            <tr><td><b>fa-sith</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sith'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sith'></i></button></td></tr>

            <tr><td><b>fa-skating</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-skating'></i></button><button class='btn bg-gradient-info'><i class='fab fa-skating'></i></button></td></tr>

            <tr><td><b>fa-sketch</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sketch'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sketch'></i></button></td></tr>

            <tr><td><b>fa-skiing</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-skiing'></i></button><button class='btn bg-gradient-info'><i class='fab fa-skiing'></i></button></td></tr>

            <tr><td><b>fa-skiing-nordic</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-skiing-nordic'></i></button><button class='btn bg-gradient-info'><i class='fab fa-skiing-nordic'></i></button></td></tr>

            <tr><td><b>fa-skull</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-skull'></i></button><button class='btn bg-gradient-info'><i class='fab fa-skull'></i></button></td></tr>

            <tr><td><b>fa-skull-crossbones</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-skull-crossbones'></i></button><button class='btn bg-gradient-info'><i class='fab fa-skull-crossbones'></i></button></td></tr>

            <tr><td><b>fa-skyatlas</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-skyatlas'></i></button><button class='btn bg-gradient-info'><i class='fab fa-skyatlas'></i></button></td></tr>

            <tr><td><b>fa-skype</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-skype'></i></button><button class='btn bg-gradient-info'><i class='fab fa-skype'></i></button></td></tr>

            <tr><td><b>fa-slack</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-slack'></i></button><button class='btn bg-gradient-info'><i class='fab fa-slack'></i></button></td></tr>

            <tr><td><b>fa-slack-hash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-slack-hash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-slack-hash'></i></button></td></tr>

            <tr><td><b>fa-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-slash'></i></button></td></tr>

            <tr><td><b>fa-sleigh</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sleigh'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sleigh'></i></button></td></tr>

            <tr><td><b>fa-sliders-h</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sliders-h'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sliders-h'></i></button></td></tr>

            <tr><td><b>fa-slideshare</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-slideshare'></i></button><button class='btn bg-gradient-info'><i class='fab fa-slideshare'></i></button></td></tr>

            <tr><td><b>fa-smile</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-smile'></i></button><button class='btn bg-gradient-info'><i class='fab fa-smile'></i></button></td></tr>

            <tr><td><b>fa-smile-beam</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-smile-beam'></i></button><button class='btn bg-gradient-info'><i class='fab fa-smile-beam'></i></button></td></tr>

            <tr><td><b>fa-smile-wink</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-smile-wink'></i></button><button class='btn bg-gradient-info'><i class='fab fa-smile-wink'></i></button></td></tr>

            <tr><td><b>fa-smog</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-smog'></i></button><button class='btn bg-gradient-info'><i class='fab fa-smog'></i></button></td></tr>

            <tr><td><b>fa-smoking</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-smoking'></i></button><button class='btn bg-gradient-info'><i class='fab fa-smoking'></i></button></td></tr>

            <tr><td><b>fa-smoking-ban</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-smoking-ban'></i></button><button class='btn bg-gradient-info'><i class='fab fa-smoking-ban'></i></button></td></tr>

            <tr><td><b>fa-sms</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sms'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sms'></i></button></td></tr>

            <tr><td><b>fa-snapchat</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-snapchat'></i></button><button class='btn bg-gradient-info'><i class='fab fa-snapchat'></i></button></td></tr>

            <tr><td><b>fa-snapchat-ghost</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-snapchat-ghost'></i></button><button class='btn bg-gradient-info'><i class='fab fa-snapchat-ghost'></i></button></td></tr>

            <tr><td><b>fa-snapchat-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-snapchat-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-snapchat-square'></i></button></td></tr>

            <tr><td><b>fa-snowboarding</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-snowboarding'></i></button><button class='btn bg-gradient-info'><i class='fab fa-snowboarding'></i></button></td></tr>

            <tr><td><b>fa-snowflake</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-snowflake'></i></button><button class='btn bg-gradient-info'><i class='fab fa-snowflake'></i></button></td></tr>

            <tr><td><b>fa-snowman</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-snowman'></i></button><button class='btn bg-gradient-info'><i class='fab fa-snowman'></i></button></td></tr>

            <tr><td><b>fa-snowplow</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-snowplow'></i></button><button class='btn bg-gradient-info'><i class='fab fa-snowplow'></i></button></td></tr>

            <tr><td><b>fa-soap</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-soap'></i></button><button class='btn bg-gradient-info'><i class='fab fa-soap'></i></button></td></tr>

            <tr><td><b>fa-socks</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-socks'></i></button><button class='btn bg-gradient-info'><i class='fab fa-socks'></i></button></td></tr>

            <tr><td><b>fa-solar-panel</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-solar-panel'></i></button><button class='btn bg-gradient-info'><i class='fab fa-solar-panel'></i></button></td></tr>

            <tr><td><b>fa-sort</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sort'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sort'></i></button></td></tr>

            <tr><td><b>fa-sort-alpha-down</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sort-alpha-down'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sort-alpha-down'></i></button></td></tr>

            <tr><td><b>fa-sort-alpha-down-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sort-alpha-down-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sort-alpha-down-alt'></i></button></td></tr>

            <tr><td><b>fa-sort-alpha-up</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sort-alpha-up'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sort-alpha-up'></i></button></td></tr>

            <tr><td><b>fa-sort-alpha-up-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sort-alpha-up-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sort-alpha-up-alt'></i></button></td></tr>

            <tr><td><b>fa-sort-amount-down</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sort-amount-down'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sort-amount-down'></i></button></td></tr>

            <tr><td><b>fa-sort-amount-down-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sort-amount-down-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sort-amount-down-alt'></i></button></td></tr>

            <tr><td><b>fa-sort-amount-up</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sort-amount-up'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sort-amount-up'></i></button></td></tr>

            <tr><td><b>fa-sort-amount-up-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sort-amount-up-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sort-amount-up-alt'></i></button></td></tr>

            <tr><td><b>fa-sort-down</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sort-down'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sort-down'></i></button></td></tr>

            <tr><td><b>fa-sort-numeric-down</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sort-numeric-down'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sort-numeric-down'></i></button></td></tr>

            <tr><td><b>fa-sort-numeric-down-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sort-numeric-down-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sort-numeric-down-alt'></i></button></td></tr>

            <tr><td><b>fa-sort-numeric-up</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sort-numeric-up'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sort-numeric-up'></i></button></td></tr>

            <tr><td><b>fa-sort-numeric-up-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sort-numeric-up-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sort-numeric-up-alt'></i></button></td></tr>

            <tr><td><b>fa-sort-up</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sort-up'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sort-up'></i></button></td></tr>

            <tr><td><b>fa-soundcloud</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-soundcloud'></i></button><button class='btn bg-gradient-info'><i class='fab fa-soundcloud'></i></button></td></tr>

            <tr><td><b>fa-sourcetree</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sourcetree'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sourcetree'></i></button></td></tr>

            <tr><td><b>fa-spa</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-spa'></i></button><button class='btn bg-gradient-info'><i class='fab fa-spa'></i></button></td></tr>

            <tr><td><b>fa-space-shuttle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-space-shuttle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-space-shuttle'></i></button></td></tr>

            <tr><td><b>fa-speakap</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-speakap'></i></button><button class='btn bg-gradient-info'><i class='fab fa-speakap'></i></button></td></tr>

            <tr><td><b>fa-speaker-deck</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-speaker-deck'></i></button><button class='btn bg-gradient-info'><i class='fab fa-speaker-deck'></i></button></td></tr>

            <tr><td><b>fa-spell-check</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-spell-check'></i></button><button class='btn bg-gradient-info'><i class='fab fa-spell-check'></i></button></td></tr>

            <tr><td><b>fa-spider</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-spider'></i></button><button class='btn bg-gradient-info'><i class='fab fa-spider'></i></button></td></tr>

            <tr><td><b>fa-spinner</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-spinner'></i></button><button class='btn bg-gradient-info'><i class='fab fa-spinner'></i></button></td></tr>

            <tr><td><b>fa-splotch</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-splotch'></i></button><button class='btn bg-gradient-info'><i class='fab fa-splotch'></i></button></td></tr>

            <tr><td><b>fa-spotify</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-spotify'></i></button><button class='btn bg-gradient-info'><i class='fab fa-spotify'></i></button></td></tr>

            <tr><td><b>fa-spray-can</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-spray-can'></i></button><button class='btn bg-gradient-info'><i class='fab fa-spray-can'></i></button></td></tr>

            <tr><td><b>fa-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-square'></i></button></td></tr>

            <tr><td><b>fa-square-full</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-square-full'></i></button><button class='btn bg-gradient-info'><i class='fab fa-square-full'></i></button></td></tr>

            <tr><td><b>fa-square-root-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-square-root-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-square-root-alt'></i></button></td></tr>

            <tr><td><b>fa-squarespace</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-squarespace'></i></button><button class='btn bg-gradient-info'><i class='fab fa-squarespace'></i></button></td></tr>

            <tr><td><b>fa-stack-exchange</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-stack-exchange'></i></button><button class='btn bg-gradient-info'><i class='fab fa-stack-exchange'></i></button></td></tr>

            <tr><td><b>fa-stack-overflow</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-stack-overflow'></i></button><button class='btn bg-gradient-info'><i class='fab fa-stack-overflow'></i></button></td></tr>

            <tr><td><b>fa-stackpath</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-stackpath'></i></button><button class='btn bg-gradient-info'><i class='fab fa-stackpath'></i></button></td></tr>

            <tr><td><b>fa-stamp</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-stamp'></i></button><button class='btn bg-gradient-info'><i class='fab fa-stamp'></i></button></td></tr>

            <tr><td><b>fa-star</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-star'></i></button><button class='btn bg-gradient-info'><i class='fab fa-star'></i></button></td></tr>

            <tr><td><b>fa-star-and-crescent</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-star-and-crescent'></i></button><button class='btn bg-gradient-info'><i class='fab fa-star-and-crescent'></i></button></td></tr>

            <tr><td><b>fa-star-half</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-star-half'></i></button><button class='btn bg-gradient-info'><i class='fab fa-star-half'></i></button></td></tr>

            <tr><td><b>fa-star-half-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-star-half-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-star-half-alt'></i></button></td></tr>

            <tr><td><b>fa-star-of-david</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-star-of-david'></i></button><button class='btn bg-gradient-info'><i class='fab fa-star-of-david'></i></button></td></tr>

            <tr><td><b>fa-star-of-life</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-star-of-life'></i></button><button class='btn bg-gradient-info'><i class='fab fa-star-of-life'></i></button></td></tr>

            <tr><td><b>fa-staylinked</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-staylinked'></i></button><button class='btn bg-gradient-info'><i class='fab fa-staylinked'></i></button></td></tr>

            <tr><td><b>fa-steam</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-steam'></i></button><button class='btn bg-gradient-info'><i class='fab fa-steam'></i></button></td></tr>

            <tr><td><b>fa-steam-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-steam-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-steam-square'></i></button></td></tr>

            <tr><td><b>fa-steam-symbol</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-steam-symbol'></i></button><button class='btn bg-gradient-info'><i class='fab fa-steam-symbol'></i></button></td></tr>

            <tr><td><b>fa-step-backward</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-step-backward'></i></button><button class='btn bg-gradient-info'><i class='fab fa-step-backward'></i></button></td></tr>

            <tr><td><b>fa-step-forward</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-step-forward'></i></button><button class='btn bg-gradient-info'><i class='fab fa-step-forward'></i></button></td></tr>

            <tr><td><b>fa-stethoscope</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-stethoscope'></i></button><button class='btn bg-gradient-info'><i class='fab fa-stethoscope'></i></button></td></tr>

            <tr><td><b>fa-sticker-mule</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sticker-mule'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sticker-mule'></i></button></td></tr>

            <tr><td><b>fa-sticky-note</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sticky-note'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sticky-note'></i></button></td></tr>

            <tr><td><b>fa-stop</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-stop'></i></button><button class='btn bg-gradient-info'><i class='fab fa-stop'></i></button></td></tr>

            <tr><td><b>fa-stop-circle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-stop-circle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-stop-circle'></i></button></td></tr>

            <tr><td><b>fa-stopwatch</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-stopwatch'></i></button><button class='btn bg-gradient-info'><i class='fab fa-stopwatch'></i></button></td></tr>

            <tr><td><b>fa-stopwatch-20</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-stopwatch-20'></i></button><button class='btn bg-gradient-info'><i class='fab fa-stopwatch-20'></i></button></td></tr>

            <tr><td><b>fa-store</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-store'></i></button><button class='btn bg-gradient-info'><i class='fab fa-store'></i></button></td></tr>

            <tr><td><b>fa-store-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-store-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-store-alt'></i></button></td></tr>

            <tr><td><b>fa-store-alt-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-store-alt-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-store-alt-slash'></i></button></td></tr>

            <tr><td><b>fa-store-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-store-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-store-slash'></i></button></td></tr>

            <tr><td><b>fa-strava</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-strava'></i></button><button class='btn bg-gradient-info'><i class='fab fa-strava'></i></button></td></tr>

            <tr><td><b>fa-stream</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-stream'></i></button><button class='btn bg-gradient-info'><i class='fab fa-stream'></i></button></td></tr>

            <tr><td><b>fa-street-view</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-street-view'></i></button><button class='btn bg-gradient-info'><i class='fab fa-street-view'></i></button></td></tr>

            <tr><td><b>fa-strikethrough</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-strikethrough'></i></button><button class='btn bg-gradient-info'><i class='fab fa-strikethrough'></i></button></td></tr>

            <tr><td><b>fa-stripe</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-stripe'></i></button><button class='btn bg-gradient-info'><i class='fab fa-stripe'></i></button></td></tr>

            <tr><td><b>fa-stripe-s</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-stripe-s'></i></button><button class='btn bg-gradient-info'><i class='fab fa-stripe-s'></i></button></td></tr>

            <tr><td><b>fa-stroopwafel</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-stroopwafel'></i></button><button class='btn bg-gradient-info'><i class='fab fa-stroopwafel'></i></button></td></tr>

            <tr><td><b>fa-studiovinari</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-studiovinari'></i></button><button class='btn bg-gradient-info'><i class='fab fa-studiovinari'></i></button></td></tr>

            <tr><td><b>fa-stumbleupon</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-stumbleupon'></i></button><button class='btn bg-gradient-info'><i class='fab fa-stumbleupon'></i></button></td></tr>

            <tr><td><b>fa-stumbleupon-circle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-stumbleupon-circle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-stumbleupon-circle'></i></button></td></tr>

            <tr><td><b>fa-subscript</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-subscript'></i></button><button class='btn bg-gradient-info'><i class='fab fa-subscript'></i></button></td></tr>

            <tr><td><b>fa-subway</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-subway'></i></button><button class='btn bg-gradient-info'><i class='fab fa-subway'></i></button></td></tr>

            <tr><td><b>fa-suitcase</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-suitcase'></i></button><button class='btn bg-gradient-info'><i class='fab fa-suitcase'></i></button></td></tr>

            <tr><td><b>fa-suitcase-rolling</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-suitcase-rolling'></i></button><button class='btn bg-gradient-info'><i class='fab fa-suitcase-rolling'></i></button></td></tr>

            <tr><td><b>fa-sun</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sun'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sun'></i></button></td></tr>

            <tr><td><b>fa-superpowers</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-superpowers'></i></button><button class='btn bg-gradient-info'><i class='fab fa-superpowers'></i></button></td></tr>

            <tr><td><b>fa-superscript</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-superscript'></i></button><button class='btn bg-gradient-info'><i class='fab fa-superscript'></i></button></td></tr>

            <tr><td><b>fa-supple</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-supple'></i></button><button class='btn bg-gradient-info'><i class='fab fa-supple'></i></button></td></tr>

            <tr><td><b>fa-surprise</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-surprise'></i></button><button class='btn bg-gradient-info'><i class='fab fa-surprise'></i></button></td></tr>

            <tr><td><b>fa-suse</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-suse'></i></button><button class='btn bg-gradient-info'><i class='fab fa-suse'></i></button></td></tr>

            <tr><td><b>fa-swatchbook</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-swatchbook'></i></button><button class='btn bg-gradient-info'><i class='fab fa-swatchbook'></i></button></td></tr>

            <tr><td><b>fa-swift</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-swift'></i></button><button class='btn bg-gradient-info'><i class='fab fa-swift'></i></button></td></tr>

            <tr><td><b>fa-swimmer</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-swimmer'></i></button><button class='btn bg-gradient-info'><i class='fab fa-swimmer'></i></button></td></tr>

            <tr><td><b>fa-swimming-pool</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-swimming-pool'></i></button><button class='btn bg-gradient-info'><i class='fab fa-swimming-pool'></i></button></td></tr>

            <tr><td><b>fa-symfony</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-symfony'></i></button><button class='btn bg-gradient-info'><i class='fab fa-symfony'></i></button></td></tr>

            <tr><td><b>fa-synagogue</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-synagogue'></i></button><button class='btn bg-gradient-info'><i class='fab fa-synagogue'></i></button></td></tr>

            <tr><td><b>fa-sync</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sync'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sync'></i></button></td></tr>

            <tr><td><b>fa-sync-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-sync-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-sync-alt'></i></button></td></tr>

            <tr><td><b>fa-syringe</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-syringe'></i></button><button class='btn bg-gradient-info'><i class='fab fa-syringe'></i></button></td></tr>

            <tr><td><b>fa-table</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-table'></i></button><button class='btn bg-gradient-info'><i class='fab fa-table'></i></button></td></tr>

            <tr><td><b>fa-table-tennis</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-table-tennis'></i></button><button class='btn bg-gradient-info'><i class='fab fa-table-tennis'></i></button></td></tr>

            <tr><td><b>fa-tablet</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tablet'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tablet'></i></button></td></tr>

            <tr><td><b>fa-tablet-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tablet-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tablet-alt'></i></button></td></tr>

            <tr><td><b>fa-tablets</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tablets'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tablets'></i></button></td></tr>

            <tr><td><b>fa-tachometer-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tachometer-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tachometer-alt'></i></button></td></tr>

            <tr><td><b>fa-tag</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tag'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tag'></i></button></td></tr>

            <tr><td><b>fa-tags</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tags'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tags'></i></button></td></tr>

            <tr><td><b>fa-tape</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tape'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tape'></i></button></td></tr>

            <tr><td><b>fa-tasks</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tasks'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tasks'></i></button></td></tr>

            <tr><td><b>fa-taxi</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-taxi'></i></button><button class='btn bg-gradient-info'><i class='fab fa-taxi'></i></button></td></tr>

            <tr><td><b>fa-teamspeak</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-teamspeak'></i></button><button class='btn bg-gradient-info'><i class='fab fa-teamspeak'></i></button></td></tr>

            <tr><td><b>fa-teeth</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-teeth'></i></button><button class='btn bg-gradient-info'><i class='fab fa-teeth'></i></button></td></tr>

            <tr><td><b>fa-teeth-open</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-teeth-open'></i></button><button class='btn bg-gradient-info'><i class='fab fa-teeth-open'></i></button></td></tr>

            <tr><td><b>fa-telegram</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-telegram'></i></button><button class='btn bg-gradient-info'><i class='fab fa-telegram'></i></button></td></tr>

            <tr><td><b>fa-telegram-plane</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-telegram-plane'></i></button><button class='btn bg-gradient-info'><i class='fab fa-telegram-plane'></i></button></td></tr>

            <tr><td><b>fa-temperature-high</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-temperature-high'></i></button><button class='btn bg-gradient-info'><i class='fab fa-temperature-high'></i></button></td></tr>

            <tr><td><b>fa-temperature-low</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-temperature-low'></i></button><button class='btn bg-gradient-info'><i class='fab fa-temperature-low'></i></button></td></tr>

            <tr><td><b>fa-tencent-weibo</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tencent-weibo'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tencent-weibo'></i></button></td></tr>

            <tr><td><b>fa-tenge</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tenge'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tenge'></i></button></td></tr>

            <tr><td><b>fa-terminal</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-terminal'></i></button><button class='btn bg-gradient-info'><i class='fab fa-terminal'></i></button></td></tr>

            <tr><td><b>fa-text-height</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-text-height'></i></button><button class='btn bg-gradient-info'><i class='fab fa-text-height'></i></button></td></tr>

            <tr><td><b>fa-text-width</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-text-width'></i></button><button class='btn bg-gradient-info'><i class='fab fa-text-width'></i></button></td></tr>

            <tr><td><b>fa-th</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-th'></i></button><button class='btn bg-gradient-info'><i class='fab fa-th'></i></button></td></tr>

            <tr><td><b>fa-th-large</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-th-large'></i></button><button class='btn bg-gradient-info'><i class='fab fa-th-large'></i></button></td></tr>

            <tr><td><b>fa-th-list</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-th-list'></i></button><button class='btn bg-gradient-info'><i class='fab fa-th-list'></i></button></td></tr>

            <tr><td><b>fa-the-red-yeti</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-the-red-yeti'></i></button><button class='btn bg-gradient-info'><i class='fab fa-the-red-yeti'></i></button></td></tr>

            <tr><td><b>fa-theater-masks</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-theater-masks'></i></button><button class='btn bg-gradient-info'><i class='fab fa-theater-masks'></i></button></td></tr>

            <tr><td><b>fa-themeco</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-themeco'></i></button><button class='btn bg-gradient-info'><i class='fab fa-themeco'></i></button></td></tr>

            <tr><td><b>fa-themeisle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-themeisle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-themeisle'></i></button></td></tr>

            <tr><td><b>fa-thermometer</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-thermometer'></i></button><button class='btn bg-gradient-info'><i class='fab fa-thermometer'></i></button></td></tr>

            <tr><td><b>fa-thermometer-empty</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-thermometer-empty'></i></button><button class='btn bg-gradient-info'><i class='fab fa-thermometer-empty'></i></button></td></tr>

            <tr><td><b>fa-thermometer-full</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-thermometer-full'></i></button><button class='btn bg-gradient-info'><i class='fab fa-thermometer-full'></i></button></td></tr>

            <tr><td><b>fa-thermometer-half</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-thermometer-half'></i></button><button class='btn bg-gradient-info'><i class='fab fa-thermometer-half'></i></button></td></tr>

            <tr><td><b>fa-thermometer-quarter</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-thermometer-quarter'></i></button><button class='btn bg-gradient-info'><i class='fab fa-thermometer-quarter'></i></button></td></tr>

            <tr><td><b>fa-thermometer-three-quarters</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-thermometer-three-quarters'></i></button><button class='btn bg-gradient-info'><i class='fab fa-thermometer-three-quarters'></i></button></td></tr>

            <tr><td><b>fa-think-peaks</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-think-peaks'></i></button><button class='btn bg-gradient-info'><i class='fab fa-think-peaks'></i></button></td></tr>

            <tr><td><b>fa-thumbs-down</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-thumbs-down'></i></button><button class='btn bg-gradient-info'><i class='fab fa-thumbs-down'></i></button></td></tr>

            <tr><td><b>fa-thumbs-up</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-thumbs-up'></i></button><button class='btn bg-gradient-info'><i class='fab fa-thumbs-up'></i></button></td></tr>

            <tr><td><b>fa-thumbtack</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-thumbtack'></i></button><button class='btn bg-gradient-info'><i class='fab fa-thumbtack'></i></button></td></tr>

            <tr><td><b>fa-ticket-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ticket-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ticket-alt'></i></button></td></tr>

            <tr><td><b>fa-tiktok</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tiktok'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tiktok'></i></button></td></tr>

            <tr><td><b>fa-times</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-times'></i></button><button class='btn bg-gradient-info'><i class='fab fa-times'></i></button></td></tr>

            <tr><td><b>fa-times-circle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-times-circle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-times-circle'></i></button></td></tr>

            <tr><td><b>fa-tint</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tint'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tint'></i></button></td></tr>

            <tr><td><b>fa-tint-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tint-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tint-slash'></i></button></td></tr>

            <tr><td><b>fa-tired</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tired'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tired'></i></button></td></tr>

            <tr><td><b>fa-toggle-off</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-toggle-off'></i></button><button class='btn bg-gradient-info'><i class='fab fa-toggle-off'></i></button></td></tr>

            <tr><td><b>fa-toggle-on</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-toggle-on'></i></button><button class='btn bg-gradient-info'><i class='fab fa-toggle-on'></i></button></td></tr>

            <tr><td><b>fa-toilet</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-toilet'></i></button><button class='btn bg-gradient-info'><i class='fab fa-toilet'></i></button></td></tr>

            <tr><td><b>fa-toilet-paper</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-toilet-paper'></i></button><button class='btn bg-gradient-info'><i class='fab fa-toilet-paper'></i></button></td></tr>

            <tr><td><b>fa-toilet-paper-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-toilet-paper-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-toilet-paper-slash'></i></button></td></tr>

            <tr><td><b>fa-toolbox</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-toolbox'></i></button><button class='btn bg-gradient-info'><i class='fab fa-toolbox'></i></button></td></tr>

            <tr><td><b>fa-tools</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tools'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tools'></i></button></td></tr>

            <tr><td><b>fa-tooth</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tooth'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tooth'></i></button></td></tr>

            <tr><td><b>fa-torah</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-torah'></i></button><button class='btn bg-gradient-info'><i class='fab fa-torah'></i></button></td></tr>

            <tr><td><b>fa-torii-gate</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-torii-gate'></i></button><button class='btn bg-gradient-info'><i class='fab fa-torii-gate'></i></button></td></tr>

            <tr><td><b>fa-tractor</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tractor'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tractor'></i></button></td></tr>

            <tr><td><b>fa-trade-federation</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-trade-federation'></i></button><button class='btn bg-gradient-info'><i class='fab fa-trade-federation'></i></button></td></tr>

            <tr><td><b>fa-trademark</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-trademark'></i></button><button class='btn bg-gradient-info'><i class='fab fa-trademark'></i></button></td></tr>

            <tr><td><b>fa-traffic-light</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-traffic-light'></i></button><button class='btn bg-gradient-info'><i class='fab fa-traffic-light'></i></button></td></tr>

            <tr><td><b>fa-trailer</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-trailer'></i></button><button class='btn bg-gradient-info'><i class='fab fa-trailer'></i></button></td></tr>

            <tr><td><b>fa-train</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-train'></i></button><button class='btn bg-gradient-info'><i class='fab fa-train'></i></button></td></tr>

            <tr><td><b>fa-tram</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tram'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tram'></i></button></td></tr>

            <tr><td><b>fa-transgender</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-transgender'></i></button><button class='btn bg-gradient-info'><i class='fab fa-transgender'></i></button></td></tr>

            <tr><td><b>fa-transgender-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-transgender-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-transgender-alt'></i></button></td></tr>

            <tr><td><b>fa-trash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-trash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-trash'></i></button></td></tr>

            <tr><td><b>fa-trash-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-trash-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-trash-alt'></i></button></td></tr>

            <tr><td><b>fa-trash-restore</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-trash-restore'></i></button><button class='btn bg-gradient-info'><i class='fab fa-trash-restore'></i></button></td></tr>

            <tr><td><b>fa-trash-restore-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-trash-restore-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-trash-restore-alt'></i></button></td></tr>

            <tr><td><b>fa-tree</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tree'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tree'></i></button></td></tr>

            <tr><td><b>fa-trello</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-trello'></i></button><button class='btn bg-gradient-info'><i class='fab fa-trello'></i></button></td></tr>

            <tr><td><b>fa-trophy</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-trophy'></i></button><button class='btn bg-gradient-info'><i class='fab fa-trophy'></i></button></td></tr>

            <tr><td><b>fa-truck</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-truck'></i></button><button class='btn bg-gradient-info'><i class='fab fa-truck'></i></button></td></tr>

            <tr><td><b>fa-truck-loading</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-truck-loading'></i></button><button class='btn bg-gradient-info'><i class='fab fa-truck-loading'></i></button></td></tr>

            <tr><td><b>fa-truck-monster</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-truck-monster'></i></button><button class='btn bg-gradient-info'><i class='fab fa-truck-monster'></i></button></td></tr>

            <tr><td><b>fa-truck-moving</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-truck-moving'></i></button><button class='btn bg-gradient-info'><i class='fab fa-truck-moving'></i></button></td></tr>

            <tr><td><b>fa-truck-pickup</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-truck-pickup'></i></button><button class='btn bg-gradient-info'><i class='fab fa-truck-pickup'></i></button></td></tr>

            <tr><td><b>fa-tshirt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tshirt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tshirt'></i></button></td></tr>

            <tr><td><b>fa-tty</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tty'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tty'></i></button></td></tr>

            <tr><td><b>fa-tumblr</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tumblr'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tumblr'></i></button></td></tr>

            <tr><td><b>fa-tumblr-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tumblr-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tumblr-square'></i></button></td></tr>

            <tr><td><b>fa-tv</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-tv'></i></button><button class='btn bg-gradient-info'><i class='fab fa-tv'></i></button></td></tr>

            <tr><td><b>fa-twitch</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-twitch'></i></button><button class='btn bg-gradient-info'><i class='fab fa-twitch'></i></button></td></tr>

            <tr><td><b>fa-twitter</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-twitter'></i></button><button class='btn bg-gradient-info'><i class='fab fa-twitter'></i></button></td></tr>

            <tr><td><b>fa-twitter-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-twitter-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-twitter-square'></i></button></td></tr>

            <tr><td><b>fa-typo3</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-typo3'></i></button><button class='btn bg-gradient-info'><i class='fab fa-typo3'></i></button></td></tr>

            <tr><td><b>fa-uber</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-uber'></i></button><button class='btn bg-gradient-info'><i class='fab fa-uber'></i></button></td></tr>

            <tr><td><b>fa-ubuntu</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ubuntu'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ubuntu'></i></button></td></tr>

            <tr><td><b>fa-uikit</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-uikit'></i></button><button class='btn bg-gradient-info'><i class='fab fa-uikit'></i></button></td></tr>

            <tr><td><b>fa-umbraco</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-umbraco'></i></button><button class='btn bg-gradient-info'><i class='fab fa-umbraco'></i></button></td></tr>

            <tr><td><b>fa-umbrella</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-umbrella'></i></button><button class='btn bg-gradient-info'><i class='fab fa-umbrella'></i></button></td></tr>

            <tr><td><b>fa-umbrella-beach</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-umbrella-beach'></i></button><button class='btn bg-gradient-info'><i class='fab fa-umbrella-beach'></i></button></td></tr>

            <tr><td><b>fa-uncharted</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-uncharted'></i></button><button class='btn bg-gradient-info'><i class='fab fa-uncharted'></i></button></td></tr>

            <tr><td><b>fa-underline</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-underline'></i></button><button class='btn bg-gradient-info'><i class='fab fa-underline'></i></button></td></tr>

            <tr><td><b>fa-undo</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-undo'></i></button><button class='btn bg-gradient-info'><i class='fab fa-undo'></i></button></td></tr>

            <tr><td><b>fa-undo-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-undo-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-undo-alt'></i></button></td></tr>

            <tr><td><b>fa-uniregistry</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-uniregistry'></i></button><button class='btn bg-gradient-info'><i class='fab fa-uniregistry'></i></button></td></tr>

            <tr><td><b>fa-unity</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-unity'></i></button><button class='btn bg-gradient-info'><i class='fab fa-unity'></i></button></td></tr>

            <tr><td><b>fa-universal-access</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-universal-access'></i></button><button class='btn bg-gradient-info'><i class='fab fa-universal-access'></i></button></td></tr>

            <tr><td><b>fa-university</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-university'></i></button><button class='btn bg-gradient-info'><i class='fab fa-university'></i></button></td></tr>

            <tr><td><b>fa-unlink</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-unlink'></i></button><button class='btn bg-gradient-info'><i class='fab fa-unlink'></i></button></td></tr>

            <tr><td><b>fa-unlock</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-unlock'></i></button><button class='btn bg-gradient-info'><i class='fab fa-unlock'></i></button></td></tr>

            <tr><td><b>fa-unlock-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-unlock-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-unlock-alt'></i></button></td></tr>

            <tr><td><b>fa-unsplash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-unsplash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-unsplash'></i></button></td></tr>

            <tr><td><b>fa-untappd</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-untappd'></i></button><button class='btn bg-gradient-info'><i class='fab fa-untappd'></i></button></td></tr>

            <tr><td><b>fa-upload</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-upload'></i></button><button class='btn bg-gradient-info'><i class='fab fa-upload'></i></button></td></tr>

            <tr><td><b>fa-ups</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ups'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ups'></i></button></td></tr>

            <tr><td><b>fa-usb</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-usb'></i></button><button class='btn bg-gradient-info'><i class='fab fa-usb'></i></button></td></tr>

            <tr><td><b>fa-user</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user'></i></button></td></tr>

            <tr><td><b>fa-user-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-alt'></i></button></td></tr>

            <tr><td><b>fa-user-alt-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-alt-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-alt-slash'></i></button></td></tr>

            <tr><td><b>fa-user-astronaut</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-astronaut'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-astronaut'></i></button></td></tr>

            <tr><td><b>fa-user-check</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-check'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-check'></i></button></td></tr>

            <tr><td><b>fa-user-circle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-circle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-circle'></i></button></td></tr>

            <tr><td><b>fa-user-clock</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-clock'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-clock'></i></button></td></tr>

            <tr><td><b>fa-user-cog</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-cog'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-cog'></i></button></td></tr>

            <tr><td><b>fa-user-edit</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-edit'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-edit'></i></button></td></tr>

            <tr><td><b>fa-user-friends</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-friends'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-friends'></i></button></td></tr>

            <tr><td><b>fa-user-graduate</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-graduate'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-graduate'></i></button></td></tr>

            <tr><td><b>fa-user-injured</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-injured'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-injured'></i></button></td></tr>

            <tr><td><b>fa-user-lock</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-lock'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-lock'></i></button></td></tr>

            <tr><td><b>fa-user-md</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-md'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-md'></i></button></td></tr>

            <tr><td><b>fa-user-minus</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-minus'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-minus'></i></button></td></tr>

            <tr><td><b>fa-user-ninja</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-ninja'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-ninja'></i></button></td></tr>

            <tr><td><b>fa-user-nurse</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-nurse'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-nurse'></i></button></td></tr>

            <tr><td><b>fa-user-plus</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-plus'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-plus'></i></button></td></tr>

            <tr><td><b>fa-user-secret</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-secret'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-secret'></i></button></td></tr>

            <tr><td><b>fa-user-shield</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-shield'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-shield'></i></button></td></tr>

            <tr><td><b>fa-user-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-slash'></i></button></td></tr>

            <tr><td><b>fa-user-tag</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-tag'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-tag'></i></button></td></tr>

            <tr><td><b>fa-user-tie</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-tie'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-tie'></i></button></td></tr>

            <tr><td><b>fa-user-times</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-user-times'></i></button><button class='btn bg-gradient-info'><i class='fab fa-user-times'></i></button></td></tr>

            <tr><td><b>fa-users</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-users'></i></button><button class='btn bg-gradient-info'><i class='fab fa-users'></i></button></td></tr>

            <tr><td><b>fa-users-cog</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-users-cog'></i></button><button class='btn bg-gradient-info'><i class='fab fa-users-cog'></i></button></td></tr>

            <tr><td><b>fa-users-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-users-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-users-slash'></i></button></td></tr>

            <tr><td><b>fa-usps</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-usps'></i></button><button class='btn bg-gradient-info'><i class='fab fa-usps'></i></button></td></tr>

            <tr><td><b>fa-ussunnah</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-ussunnah'></i></button><button class='btn bg-gradient-info'><i class='fab fa-ussunnah'></i></button></td></tr>

            <tr><td><b>fa-utensil-spoon</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-utensil-spoon'></i></button><button class='btn bg-gradient-info'><i class='fab fa-utensil-spoon'></i></button></td></tr>

            <tr><td><b>fa-utensils</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-utensils'></i></button><button class='btn bg-gradient-info'><i class='fab fa-utensils'></i></button></td></tr>

            <tr><td><b>fa-vaadin</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-vaadin'></i></button><button class='btn bg-gradient-info'><i class='fab fa-vaadin'></i></button></td></tr>

            <tr><td><b>fa-vector-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-vector-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-vector-square'></i></button></td></tr>

            <tr><td><b>fa-venus</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-venus'></i></button><button class='btn bg-gradient-info'><i class='fab fa-venus'></i></button></td></tr>

            <tr><td><b>fa-venus-double</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-venus-double'></i></button><button class='btn bg-gradient-info'><i class='fab fa-venus-double'></i></button></td></tr>

            <tr><td><b>fa-venus-mars</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-venus-mars'></i></button><button class='btn bg-gradient-info'><i class='fab fa-venus-mars'></i></button></td></tr>

            <tr><td><b>fa-vest</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-vest'></i></button><button class='btn bg-gradient-info'><i class='fab fa-vest'></i></button></td></tr>

            <tr><td><b>fa-vest-patches</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-vest-patches'></i></button><button class='btn bg-gradient-info'><i class='fab fa-vest-patches'></i></button></td></tr>

            <tr><td><b>fa-viacoin</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-viacoin'></i></button><button class='btn bg-gradient-info'><i class='fab fa-viacoin'></i></button></td></tr>

            <tr><td><b>fa-viadeo</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-viadeo'></i></button><button class='btn bg-gradient-info'><i class='fab fa-viadeo'></i></button></td></tr>

            <tr><td><b>fa-viadeo-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-viadeo-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-viadeo-square'></i></button></td></tr>

            <tr><td><b>fa-vial</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-vial'></i></button><button class='btn bg-gradient-info'><i class='fab fa-vial'></i></button></td></tr>

            <tr><td><b>fa-vials</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-vials'></i></button><button class='btn bg-gradient-info'><i class='fab fa-vials'></i></button></td></tr>

            <tr><td><b>fa-viber</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-viber'></i></button><button class='btn bg-gradient-info'><i class='fab fa-viber'></i></button></td></tr>

            <tr><td><b>fa-video</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-video'></i></button><button class='btn bg-gradient-info'><i class='fab fa-video'></i></button></td></tr>

            <tr><td><b>fa-video-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-video-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-video-slash'></i></button></td></tr>

            <tr><td><b>fa-vihara</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-vihara'></i></button><button class='btn bg-gradient-info'><i class='fab fa-vihara'></i></button></td></tr>

            <tr><td><b>fa-vimeo</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-vimeo'></i></button><button class='btn bg-gradient-info'><i class='fab fa-vimeo'></i></button></td></tr>

            <tr><td><b>fa-vimeo-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-vimeo-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-vimeo-square'></i></button></td></tr>

            <tr><td><b>fa-vimeo-v</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-vimeo-v'></i></button><button class='btn bg-gradient-info'><i class='fab fa-vimeo-v'></i></button></td></tr>

            <tr><td><b>fa-vine</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-vine'></i></button><button class='btn bg-gradient-info'><i class='fab fa-vine'></i></button></td></tr>

            <tr><td><b>fa-virus</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-virus'></i></button><button class='btn bg-gradient-info'><i class='fab fa-virus'></i></button></td></tr>

            <tr><td><b>fa-virus-slash</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-virus-slash'></i></button><button class='btn bg-gradient-info'><i class='fab fa-virus-slash'></i></button></td></tr>

            <tr><td><b>fa-viruses</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-viruses'></i></button><button class='btn bg-gradient-info'><i class='fab fa-viruses'></i></button></td></tr>

            <tr><td><b>fa-vk</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-vk'></i></button><button class='btn bg-gradient-info'><i class='fab fa-vk'></i></button></td></tr>

            <tr><td><b>fa-vnv</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-vnv'></i></button><button class='btn bg-gradient-info'><i class='fab fa-vnv'></i></button></td></tr>

            <tr><td><b>fa-voicemail</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-voicemail'></i></button><button class='btn bg-gradient-info'><i class='fab fa-voicemail'></i></button></td></tr>

            <tr><td><b>fa-volleyball-ball</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-volleyball-ball'></i></button><button class='btn bg-gradient-info'><i class='fab fa-volleyball-ball'></i></button></td></tr>

            <tr><td><b>fa-volume-down</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-volume-down'></i></button><button class='btn bg-gradient-info'><i class='fab fa-volume-down'></i></button></td></tr>

            <tr><td><b>fa-volume-mute</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-volume-mute'></i></button><button class='btn bg-gradient-info'><i class='fab fa-volume-mute'></i></button></td></tr>

            <tr><td><b>fa-volume-off</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-volume-off'></i></button><button class='btn bg-gradient-info'><i class='fab fa-volume-off'></i></button></td></tr>

            <tr><td><b>fa-volume-up</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-volume-up'></i></button><button class='btn bg-gradient-info'><i class='fab fa-volume-up'></i></button></td></tr>

            <tr><td><b>fa-vote-yea</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-vote-yea'></i></button><button class='btn bg-gradient-info'><i class='fab fa-vote-yea'></i></button></td></tr>

            <tr><td><b>fa-vr-cardboard</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-vr-cardboard'></i></button><button class='btn bg-gradient-info'><i class='fab fa-vr-cardboard'></i></button></td></tr>

            <tr><td><b>fa-vuejs</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-vuejs'></i></button><button class='btn bg-gradient-info'><i class='fab fa-vuejs'></i></button></td></tr>

            <tr><td><b>fa-walking</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-walking'></i></button><button class='btn bg-gradient-info'><i class='fab fa-walking'></i></button></td></tr>

            <tr><td><b>fa-wallet</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wallet'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wallet'></i></button></td></tr>

            <tr><td><b>fa-warehouse</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-warehouse'></i></button><button class='btn bg-gradient-info'><i class='fab fa-warehouse'></i></button></td></tr>

            <tr><td><b>fa-watchman-monitoring</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-watchman-monitoring'></i></button><button class='btn bg-gradient-info'><i class='fab fa-watchman-monitoring'></i></button></td></tr>

            <tr><td><b>fa-water</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-water'></i></button><button class='btn bg-gradient-info'><i class='fab fa-water'></i></button></td></tr>

            <tr><td><b>fa-wave-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wave-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wave-square'></i></button></td></tr>

            <tr><td><b>fa-waze</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-waze'></i></button><button class='btn bg-gradient-info'><i class='fab fa-waze'></i></button></td></tr>

            <tr><td><b>fa-weebly</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-weebly'></i></button><button class='btn bg-gradient-info'><i class='fab fa-weebly'></i></button></td></tr>

            <tr><td><b>fa-weibo</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-weibo'></i></button><button class='btn bg-gradient-info'><i class='fab fa-weibo'></i></button></td></tr>

            <tr><td><b>fa-weight</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-weight'></i></button><button class='btn bg-gradient-info'><i class='fab fa-weight'></i></button></td></tr>

            <tr><td><b>fa-weight-hanging</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-weight-hanging'></i></button><button class='btn bg-gradient-info'><i class='fab fa-weight-hanging'></i></button></td></tr>

            <tr><td><b>fa-weixin</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-weixin'></i></button><button class='btn bg-gradient-info'><i class='fab fa-weixin'></i></button></td></tr>

            <tr><td><b>fa-whatsapp</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-whatsapp'></i></button><button class='btn bg-gradient-info'><i class='fab fa-whatsapp'></i></button></td></tr>

            <tr><td><b>fa-whatsapp-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-whatsapp-square'></i></button><button class='btn bg-gradient-info'><i class='fab fa-whatsapp-square'></i></button></td></tr>

            <tr><td><b>fa-wheelchair</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wheelchair'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wheelchair'></i></button></td></tr>

            <tr><td><b>fa-whmcs</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-whmcs'></i></button><button class='btn bg-gradient-info'><i class='fab fa-whmcs'></i></button></td></tr>

            <tr><td><b>fa-wifi</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wifi'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wifi'></i></button></td></tr>

            <tr><td><b>fa-wikipedia-w</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wikipedia-w'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wikipedia-w'></i></button></td></tr>

            <tr><td><b>fa-wind</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wind'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wind'></i></button></td></tr>

            <tr><td><b>fa-window-close</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-window-close'></i></button><button class='btn bg-gradient-info'><i class='fab fa-window-close'></i></button></td></tr>

            <tr><td><b>fa-window-maximize</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-window-maximize'></i></button><button class='btn bg-gradient-info'><i class='fab fa-window-maximize'></i></button></td></tr>

            <tr><td><b>fa-window-minimize</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-window-minimize'></i></button><button class='btn bg-gradient-info'><i class='fab fa-window-minimize'></i></button></td></tr>

            <tr><td><b>fa-window-restore</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-window-restore'></i></button><button class='btn bg-gradient-info'><i class='fab fa-window-restore'></i></button></td></tr>

            <tr><td><b>fa-windows</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-windows'></i></button><button class='btn bg-gradient-info'><i class='fab fa-windows'></i></button></td></tr>

            <tr><td><b>fa-wine-bottle</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wine-bottle'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wine-bottle'></i></button></td></tr>

            <tr><td><b>fa-wine-glass</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wine-glass'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wine-glass'></i></button></td></tr>

            <tr><td><b>fa-wine-glass-alt</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wine-glass-alt'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wine-glass-alt'></i></button></td></tr>

            <tr><td><b>fa-wix</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wix'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wix'></i></button></td></tr>

            <tr><td><b>fa-wizards-of-the-coast</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wizards-of-the-coast'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wizards-of-the-coast'></i></button></td></tr>

            <tr><td><b>fa-wodu</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wodu'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wodu'></i></button></td></tr>

            <tr><td><b>fa-wolf-pack-battalion</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wolf-pack-battalion'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wolf-pack-battalion'></i></button></td></tr>

            <tr><td><b>fa-won-sign</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-won-sign'></i></button><button class='btn bg-gradient-info'><i class='fab fa-won-sign'></i></button></td></tr>

            <tr><td><b>fa-wordpress</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wordpress'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wordpress'></i></button></td></tr>

            <tr><td><b>fa-wordpress-simple</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wordpress-simple'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wordpress-simple'></i></button></td></tr>

            <tr><td><b>fa-wpbeginner</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wpbeginner'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wpbeginner'></i></button></td></tr>

            <tr><td><b>fa-wpexplorer</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wpexplorer'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wpexplorer'></i></button></td></tr>

            <tr><td><b>fa-wpforms</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wpforms'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wpforms'></i></button></td></tr>

            <tr><td><b>fa-wpressr</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wpressr'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wpressr'></i></button></td></tr>

            <tr><td><b>fa-wrench</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-wrench'></i></button><button class='btn bg-gradient-info'><i class='fab fa-wrench'></i></button></td></tr>

            <tr><td><b>fa-x-ray</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-x-ray'></i></button><button class='btn bg-gradient-info'><i class='fab fa-x-ray'></i></button></td></tr>

            <tr><td><b>fa-xbox</b> </td><td> <button class='btn bg-gradient-info'><i class='fab fa-xbox'></i></button></td></tr>

            <tr><td><b>fa-xing</b> </td><td> <button class='btn bg-gradient-info'><i class='fab fa-xing'></i></button></td></tr>

            <tr><td><b>fa-xing-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fab fa-xing-square'></i></button></td></tr>

            <tr><td><b>fa-y-combinator</b> </td><td> <button class='btn bg-gradient-info'><i class='fab fa-y-combinator'></i></button></td></tr>

            <tr><td><b>fa-yahoo</b> </td><td> <button class='btn bg-gradient-info'><i class='fab fa-yahoo'></i></button></td></tr>

            <tr><td><b>fa-yammer</b> </td><td> <button class='btn bg-gradient-info'><i class='fab fa-yammer'></i></button></td></tr>

            <tr><td><b>fa-yandex</b> </td><td> <button class='btn bg-gradient-info'><i class='fab fa-yandex'></i></button></td></tr>

            <tr><td><b>fa-yandex-international</b> </td><td> <button class='btn bg-gradient-info'><i class='fab fa-yandex-international'></i></button></td></tr>

            <tr><td><b>fa-yarn</b> </td><td> <button class='btn bg-gradient-info'><i class='fab fa-yarn'></i></button></td></tr>

            <tr><td><b>fa-yelp</b> </td><td> <button class='btn bg-gradient-info'><i class='fab fa-yelp'></i></button></td></tr>

            <tr><td><b>fa-yen-sign</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-yen-sign'></i></button><button class='btn bg-gradient-info'><i class='fab fa-yen-sign'></i></button></td></tr>

            <tr><td><b>fa-yin-yang</b> </td><td> <button class='btn bg-gradient-info'><i class='fas fa-yin-yang'></i></button><button class='btn bg-gradient-info'><i class='fab fa-yin-yang'></i></button></td></tr>

            <tr><td><b>fa-yoast</b> </td><td> <button class='btn bg-gradient-info'><i class='fab fa-yoast'></i></button></td></tr>

            <tr><td><b>fa-youtube</b> </td><td> <button class='btn bg-gradient-info'><i class='fab fa-youtube'></i></button></td></tr>

            <tr><td><b>fa-youtube-square</b> </td><td> <button class='btn bg-gradient-info'><i class='fab fa-youtube-square'></i></button></td></tr>

            <tr><td><b>fa-zhihu</b> </td><td> <button class='btn bg-gradient-info'><i class='fab fa-zhihu'></i></button></td></tr>

            @font<tr><td><b>face</b> </td><td> <button class='btn bg-gradient-info'><i class='face'>abc ABC</i></button></td></tr>

            <tr><td><b>fab</b> </td><td> <button class='btn bg-gradient-info'><i class='fab'></i></button></td></tr>

            <tr><td><b>fab,.far</b> </td><td> <button class='btn bg-gradient-info'><i class='fab far'></i></button></td></tr>

            <tr><td><b>fa,.far,.fas</b> </td><td> <button class='btn bg-gradient-info'><i class='fa far fas'></i></button></td></tr>

            <tr><td><b>fa,.fas</b> </td><td> <button class='btn bg-gradient-info'><i class='fa fas'></i></button></td></tr>
          </table>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/dist/js/adminlte.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('assets/dist/js/demo.js')?>"></script>
</body>
</html>
