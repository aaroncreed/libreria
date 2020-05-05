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
     
          <span>Libros</span>
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
        @foreach($libros as $lb=>$lbb )


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
 



     </div>
     <script type="text/javascript">
      const _MS_PER_DAY = 1000 * 60 * 60 * 24;


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

// a and b are javascript Date objects
function dateDiffInDays(a, b) {
  // Discard the time and time-zone information.
  const utc1 = Date.UTC(a.getFullYear(), a.getMonth(), a.getDate());
  const utc2 = Date.UTC(b.getFullYear(), b.getMonth(), b.getDate());

  return Math.floor((utc2 - utc1) / _MS_PER_DAY);
}
       

     </script>
@endsection