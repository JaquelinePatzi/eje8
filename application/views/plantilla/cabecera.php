</head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Sistema de Ventas</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <!--<div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>-->
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Juan Perez <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <!--<li><a href="profile.html">Profile</a></li>-->
	                          <li><a href="login.html">Salir</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2"><!--Inicio de Menu-->
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="<?= base_url(); ?>"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
                    
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Producto
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="<?= base_url(); ?>producto/nuevo">Nuevo Producto</a></li>
                            <li><a href="<?= base_url(); ?>producto/listar">Listar Productos</a></li>
                        </ul>
					</li>
					
					<li class="submenu">
                            <a href="#">
                                <i class="glyphicon glyphicon-list"></i> Compras
                                <span class="caret pull-right"></span>
                            </a>
                            <!-- Sub menu -->
                            <ul>
                                <li><a href="<?= base_url(); ?>compra/nuevo">Nuevo Compra</a></li>
                                <li><a href="<?= base_url(); ?>compra/listar">Listar Compras</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <i class="glyphicon glyphicon-list"></i> Venta
                                <span class="caret pull-right"></span>
                            </a>
                            <!-- Sub menu -->
                            <ul>
                                <li><a href="<?= base_url(); ?>venta/nuevo">Nueva Venta</a></li>
                                <li><a href="<?= base_url(); ?>venta/listar">Listar Ventas</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <i class="glyphicon glyphicon-file"></i> Reporte
                                <span class="caret pull-right"></span>
                            </a>
                            <!-- Sub menu -->
                            <ul>
                                <li><a href="<?= base_url(); ?>reporte/venta">Reporte de Venta</a></li>
                                <!-- <li><a href="<?= base_url(); ?>venta/listar">Listar Ventas</a></li> -->
                            </ul>
                        </li>

					<li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-user"></i> Usuario
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="<?= base_url(); ?>usuario/nuevo">Nuevo Usuario</a></li>
                            <li><a href="<?= base_url(); ?>usuario/listar">Listar Usuarios</a></li>
                        </ul> 
                    </li>
                </ul>
             </div>
		  </div><!--Fin de Menu-->
		  <div class="col-md-10">
		  	<div class="row">
				<div class="col-md-12">
                    <div class="content-box-header">
                        <div class="panel-title"><?= $titulo ?? 'Página Principal'; ?></div>
					</div>
                    <div class="content-box-large box-with-header"><!--Inicio del Contenido-->