<!DOCTYPE html>
<html>
<head>
	<title>Libreria</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
  
<!--  mi parte-->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->



<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" /> -->

</head>
<body>


<header id="header">
      <div class="logo pull-left"> Libreria </div>
      <div class="header-content">
      <div class="header-date pull-left">
        <strong>01/03/2020  1:20 am</strong>
      </div>
      <div class="pull-right clearfix">
        <ul class="info-menu list-inline list-unstyled">
          <li class="profile">
            <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
              <img src="uploads/users/pzg9wa7o1.jpg" class="img-circle img-inline">
              <span>Admin Users <i class="caret"></i></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                  <a href="profile.php?id=1">
                      <i class="glyphicon glyphicon-user"></i>
                      Perfil
                  </a>
              </li>
             <li>
                 <a href="edit_account.php" title="edit account">
                     <i class="glyphicon glyphicon-cog"></i>
                     Configuración
                 </a>
             </li>
             <li class="last">
              <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                     <i class="glyphicon glyphicon-off"></i>
                     Salir
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                 </a>
             </li>
           </ul>
          </li>
        </ul>
      </div>
     </div>
    </header>
    <div class="sidebar">
              <!-- admin menu -->
      <ul>
  <li>
    <a href="/home">
      <i class="glyphicon glyphicon-home"></i>
      <span>Panel de control</span>
    </a>
  </li>
<!--   <li>
    <a href="/register" class="submenu-toggle">
      <i class="glyphicon glyphicon-user"></i>
      <span>Registrar Usuario</span>
    </a>
    <ul class="nav submenu">
      <li><a href="group.php">Administrar grupos</a> </li>
      <li><a href="users.php">Administrar usuarios</a> </li>
   </ul>
  </li> -->
  <li>
    <a href="/libro">
      <i class="glyphicon glyphicon-indent-left"></i>
      <span>Nuevo Libro</span>
    </a>
  </li>
  <li>
    <a href="/ingresar" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-large"></i>
      <span>Entradas</span>
    </a>
    <ul class="nav submenu">
       <li><a href="product.php">Administrar libros</a> </li>
       <li><a href="add_product.php">Agregar libro</a> </li>
   </ul>
  </li>
 <!--  <li>
    <a href="/vender">
      <i class="glyphicon glyphicon-picture"></i>
      <span>Vender</span>
    </a>
  </li> -->
  <li>
    <a href="/vender" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-list"></i>
       <span>Ventas</span>
      </a>
      <ul class="nav submenu">
         <li><a href="sales.php">Administrar ventas</a> </li>
         <li><a href="add_sale.php">Agregar venta</a> </li>
     </ul>
  </li>
  <!-- <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-signal"></i>
       <span>Reporte de ventas</span>
      </a>
      <ul class="nav submenu">
        <li><a href="sales_report.php">Ventas por fecha </a></li>
        <li><a href="monthly_sales.php">Ventas mensuales</a></li>
        <li><a href="daily_sales.php">Ventas diarias</a> </li>
      </ul>
  </li> -->
</ul>

      
   </div>


   


<div id="app" class="page">
	<v-app>
<!--   <v-navigation-drawer app>
   
  </v-navigation-drawer> -->

  <v-app-bar app>
    <!-- -->Ingresar Libro
  </v-app-bar>

  <!-- Sizes your content based upon application components -->
  <v-content>

    <!-- Provides the application the proper gutter -->
    <v-container fluid>
<libro></libro>

      <!-- If using vue-router -->
      <!-- <router-view></router-view> -->
    </v-container>
  </v-content>

  <v-footer app>
    <!-- -->
  </v-footer>
</v-app>
		

</div>

 <script src="{{ asset('js/app.js') }}" defer>
   

 </script>
</body>
</html>