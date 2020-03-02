<html lang="en"><head></head><body><br>
 
    
    <meta charset="UTF-8">
    <title>Admin página de inicio    </title>
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
  
  
      <header id="header">
      <div class="logo pull-left"> OSWA - Inventory </div>
      <div class="header-content">
      <div class="header-date pull-left">
        <strong>01/03/2020  1:20 am</strong>
      </div>
      <div class="pull-right clearfix">
        <ul class="info-menu list-inline list-unstyled">
          <li class="profile">
            <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
              <img src="uploads/users/pzg9wa7o1.jpg" alt="user-image" class="img-circle img-inline">
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
    <a href="admin.php">
      <i class="glyphicon glyphicon-home"></i>
      <span>Panel de control</span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-user"></i>
      <span>Accesos</span>
    </a>
    <ul class="nav submenu">
      <li><a href="group.php">Administrar grupos</a> </li>
      <li><a href="users.php">Administrar usuarios</a> </li>
   </ul>
  </li>
  <li>
    <a href="categorie.php">
      <i class="glyphicon glyphicon-indent-left"></i>
      <span>Categorías</span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-large"></i>
      <span>Productos</span>
    </a>
    <ul class="nav submenu">
       <li><a href="product.php">Administrar libros</a> </li>
       <li><a href="add_product.php">Agregar libro</a> </li>
   </ul>
  </li>
  <li>
    <a href="media.php">
      <i class="glyphicon glyphicon-picture"></i>
      <span>Media</span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-list"></i>
       <span>Ventas</span>
      </a>
      <ul class="nav submenu">
         <li><a href="sales.php">Administrar ventas</a> </li>
         <li><a href="add_sale.php">Agregar venta</a> </li>
     </ul>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-signal"></i>
       <span>Reporte de ventas</span>
      </a>
      <ul class="nav submenu">
        <li><a href="sales_report.php">Ventas por fecha </a></li>
        <li><a href="monthly_sales.php">Ventas mensuales</a></li>
        <li><a href="daily_sales.php">Ventas diarias</a> </li>
      </ul>
  </li>
</ul>

      
   </div>

<div class="page">
  <div class="container-fluid">

<div class="row">
   <div class="col-md-6">
        </div>
</div>
  <!-- <div class="row">
    <div class="col-md-3">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-green">
          <i class="glyphicon glyphicon-user"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> 3 </h2>
          <p class="text-muted">Usuarios</p>
        </div>
       </div>
    </div>
    <div class="col-md-3">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-red">
          <i class="glyphicon glyphicon-list"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> 1 </h2>
          <p class="text-muted">Categorías</p>
        </div>
       </div>
    </div>
    <div class="col-md-3">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-blue">
          <i class="glyphicon glyphicon-shopping-cart"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> 1 </h2>
          <p class="text-muted">Productos</p>
        </div>
       </div>
    </div>
    <div class="col-md-3">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-yellow">
          <i class="glyphicon glyphicon-usd"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> 0</h2>
          <p class="text-muted">Ventas</p>
        </div>
       </div>
    </div>
</div> -->

  <div class="row">
   <div class="col-md-4">
     <div class="panel panel-default">
       <div class="panel-heading">
         <strong>
           <span class="glyphicon glyphicon-th"></span>
           <span>Productos más vendidos</span>
         </strong>
       </div>
       <div class="panel-body">
         <table class="table table-striped table-bordered table-condensed">
          <thead>
           <tr>
             <th>Título</th>
             <th>Total vendido</th>
             <th>Cantidad total</th>
           </tr><tr>
          </tr></thead>
          <tbody>
                      </tbody><tbody>
         </tbody></table>
       </div>
     </div>
   </div>
   <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>ÚLTIMAS VENTAS</span>
          </strong>
        </div>
        <div class="panel-body">
          <table class="table table-striped table-bordered table-condensed">
       <thead>
         <tr>
           <th class="text-center" style="width: 50px;">#</th>
           <th>Producto</th>
           <th>Fecha</th>
           <th>Venta total</th>
         </tr>
       </thead>
       <tbody>
                </tbody>
     </table>
    </div>
   </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Productos recientemente añadidos</span>
        </strong>
      </div>
      <div class="panel-body">

        <div class="list-group">
                  <a class="list-group-item clearfix" href="edit_product.php?id=1">
                <h4 class="list-group-item-heading">
                                   <img class="img-avatar img-circle" src="uploads/products/filter.jpg" alt="">
                                Filtro de gasolina                  <span class="label label-warning pull-right">
                 $10                  </span>
                </h4>
                <span class="list-group-item-text pull-right">
                Repuestos              </span>
          </a>
          </div>
  </div>
 </div>
</div>
 </div>
  <div class="row">

  </div>



     </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
  <!-- <script type="text/javascript" src="libs/js/functions.js"></script> -->
  


</body></html>