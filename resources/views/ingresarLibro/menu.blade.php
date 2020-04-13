@extends('dashboard.main')

@section('content')
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
<!-- elMasvendido
ventas
librosNuevos -->
  <div class="row">
   <div class="col-md-4">
     <div class="panel panel-default">
       <div class="panel-heading">
         <strong>
           <span class="glyphicon glyphicon-th"></span>
           <span>Producto más vendido</span>
         </strong>
       </div>
       <div class="panel-body">
         <table class="table table-striped table-bordered table-condensed">
          <thead>
           <tr>
             <th>Título</th>
             <th>Total vendido</th>
             <th>codigo</th>
           </tr>
         </thead>
          <tbody>
       

          <tr>
            <td>{{$elMasvendido->Titulo}}</td>
            <td>{{$elMasvendido->Cantidad}}</td>
            <td>{{$elMasvendido->Codbarras}}</td>
          </tr>
    
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
            <span>ÚLTIMAS VENTAS</span>
          </strong>
        </div>
        <div class="panel-body">
          <table class="table table-striped table-bordered table-condensed">
       <thead>
         <tr>
           <th class="text-center" style="width: 50px;"># venta</th>
      
           <th>Fecha</th>
           <th>Venta total</th>
         </tr>
       </thead>
       <tbody>
        @foreach($ventas as $ve=>$as )


            <tr>
            <td>{{$as->id_venta}}</td>
            <td>{{$as->Fecventa}}</td>
            <td>{{$as->Totalventa}}</td>
          </tr>
        @endforeach

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

      <table class="table table-striped table-bordered table-condensed">
       <thead>
         <tr>
           <th class="text-center" style="width: 50px;">CodigoBarras</th>
      
           <th>Titulo</th>
           <th>Fecha</th>
                      <th>Portada</th>
         </tr>
       </thead>
       <tbody>
        @foreach($librosNuevos as $lb=>$lbb )

<!--  "id_libro" => 2
        "Codbarras" => "asdasd"
        "Clavecasedit" => 1
        "Titulo" => "asdasd"
        "Autor" => "asdasd"
        "ClaveInterna" => "asdasd"
        "ISBN" => "asdasdasd"
        "Inventariable" => 1
        "Claveunimed" => 2
        "Existencia" => 0
        "Puntoreorden" => 33
        "Costo" => "0.00"
        "Preciolista" => "400.00"
        "Peso" => "121.22"
        "Numeropag" => 222
        "fecedicion" => null
        "Tema" => "222"
        "fecalta" => "2020-02-12"
        "Descuento" => "0.00"
        "Ultimoprov" => null
        "Sinopsis" => "21212"
        "Ubicacion" => "22"
        "Usralta" => null
        "fotoportada" => "portadas/asdasd/0e1214e07e0cf0341f7d8d62e8bf48f5.jpg"
        "fechaColofon" => "2020-02-05" -->
            <tr>
            <td>{{$lbb->Codbarras}}</td>
            <td>{{$lbb->Titulo}}</td>
            <td>{{$lbb->fecalta}}</td>
               <td>
             
<img src="{{asset('storage/'.$lbb->fotoportada.'')}}" style="
    width: 60%;
">
                </td>
          </tr>
        @endforeach

                </tbody>
     </table>
  </div>
 </div>
</div>
 </div>
  <div class="row">

  </div>



     </div>
@endsection