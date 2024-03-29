
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin página de inicio    </title>
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
  
<!--  mi parte-->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
    <style type="text/css">

        .bootstrap-select[class*=col-] .dropdown-toggle {
    width: 221px !important;
}
/*.select2-dropdown*/

.increasezindex {
    z-index:99999;
}

    </style>
  <!--  -->
</head><body><br>
 
    
 

  
      <header id="header">
      <div class="logo pull-left ">  
    <div style="width: 95%">
           <img src="{{asset('img/logo.png')}}" style="width: 100%">
         
        </div>
   
        
      </div>
      <div class="header-content">
  
        <div class="header-date pull-left ">
        <!-- <strong>01/03/2020  1:20 am</strong> -->
 
    

      </div>


      <div class="pull-right clearfix d-flex justify-content-end">
           <H1  style="    position: absolute;
    left: 43%;">Sistema de libreria CEPHCIS</H1>  
        <ul class="info-menu list-inline list-unstyled">
          <li class="profile">
            <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
              <!-- <img src="uploads/users/pzg9wa7o1.jpg" alt="user-image" class="img-circle img-inline"> -->
              <span>{{Auth::User()->Nombre }} <i class="caret"></i></span>
            </a>
            <ul class="dropdown-menu">
            <!--   <li>
                  <a href="profile.php?id=1">
                      <i class="glyphicon glyphicon-user"></i>
                      Perfil
                  </a>
              </li> -->
            <!--  <li>
                 <a href="edit_account.php" title="edit account">
                     <i class="glyphicon glyphicon-cog"></i>
                     Configuración
                 </a>
             </li> -->
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
         <div style="width:17%">
                  <img src="{{asset('img/escudo.png')}}" style="width: 100%">
        </div>
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
    <li>
    <a href="/devoluciones" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-large"></i>
      <span>Devoluciones</span>
    </a>

  </li>
  @if(Auth::User()->Nivel==1)
    <li>
    <a href="/register" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-list"></i>
       <span>Registrar Usuarios</span>
      </a>
  
  </li>
    <li>
    <a href="/Utilerias" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-list"></i>
       <span>Utilerias</span>
      </a>
  
  </li>
  <li>
    <a href="/configuracion">
      <i class="glyphicon glyphicon-picture"></i>
      <span>configuracion</span>
    </a>
  </li>
  @endif
  @if(Auth::User()->Nivel!=3)
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
  @endif
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

<div class="page">
    @yield('content')
    </div>
   <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script> -->
  <!-- <script type="text/javascript" src="libs/js/functions.js"></script> -->
  


</body>
</html>

