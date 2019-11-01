<?php
  session_start();

  if(!isset($_SESSION['loginADM'])){
      header("Location: login.php");
  }
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    

    
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">OrganizaçãoCastro</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        
        <!--Notification Menu-->
        
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="img/org.jpg" width=90 height=70 alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Área do</p>
          <p class="app-sidebar__user-designation">Administrador</p>
        </div>
      </div>
      <ul class="app-menu">
  
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Usuario</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="inserir_usuario.php"><i class="icon fa fa-circle-o"></i> inserir</a></li>
            <li><a class="treeview-item" href="listar_usuario.php" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Listar</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Categoria</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="inserir_categoria.php"><i class="icon fa fa-circle-o"></i> inserir</a></li>
            <li><a class="treeview-item" href="listar_categoria.php" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Listar</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Serviço</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="inserir_servico.php"><i class="icon fa fa-circle-o"></i> inserir</a></li>
            <li><a class="treeview-item" href="listar_servico.php" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Listar</a></li>
          </ul>
        </li>
        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Vendas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="inserir_vendas.php"><i class="icon fa fa-circle-o"></i> inserir</a></li>
            <li><a class="treeview-item" href="listar_vendas.php" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Listar</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Vendas_Serviço</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="inserir_vendas_servico.php"><i class="icon fa fa-circle-o"></i> inserir</a></li>
            <li><a class="treeview-item" href="listar_vendas_servico.php" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Listar</a></li>
          </ul>
        </li>
        <li>&nbsp&nbsp&nbsp&nbsp<a href="sair.php"> Sair</a></li>
      </ul>
    </aside>