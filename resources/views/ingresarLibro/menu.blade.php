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
            <td><button class="btn btn-primary" onclick ="imprimir('{{$as->id_venta}}')">{{$as->id_venta}}</button> </td>
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
 <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>VENTAS historico</span>
          </strong>
        </div>
        <div class="panel-body">
          <table class="table table-striped table-bordered table-condensed" data-toggle="table" data-pagination="true"
  data-search="true" data-locale="es-MX">
       <thead>
         <tr>
           <th class="text-center" style="width: 50px;"># venta</th>
      
           <th>Fecha</th>
           <th>Venta total</th>
         </tr>
       </thead>
       <tbody>
        @foreach($ventash as $veh=>$ash )


            <tr>
            <td><button class="btn btn-primary" onclick ="imprimir('{{$ash->id_venta}}')">{{$ash->id_venta}}</button> </td>
            <td>{{$ash->Fecventa}}</td>
            <td>{{$ash->Totalventa}}</td>
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
            <span>Reporte</span>
          </strong>
        </div>
        <div class="panel-body">
        <form id="reporte">
           <div class="form-group col-md-6">
            <label for="inicio">Fecha inicio</label>
          <input type="date" id="inicio" class="form-control" name="inicio">
        </div>
         <div class="form-group col-md-6">
          <label for="fin">Fecha fin</label>
          <input type="date" id="fin" class="form-control" name="fin">
        </div>
         <div class="form-group col-md-12">
          <select name="proveedores" class="form-control" id="proveedores">
            <option value="0">escoger una opcion</option>
            @foreach($casaeditorial as $casa=>$edi)
               <option value="{{$edi->id_casaEditorial}}">{{$edi->Desccasedit}}</option>
            @endforeach
          </select>
         </div>
        <div class="form-group col-md-12">
<button class="btn btn-primary">Buscar</button>
        </div>
        </form>

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
       
         function imprimir(id)
  {
let name="imprimir"

let configuracion_ventana = "menubar=bo,location=yes,resizable=yes,scrollbars=yes,status=yes,height=500,width=516";
 window.open("/generarTicket/"+id+"",name,configuracion_ventana);

// setTimeout(function () { location.reload(); }, 500);
  }

  $("#reporte").on("submit",function(e){

e.preventDefault();

let inicio=$("#inicio").val();
let fin=$("#fin").val();
let proveedores=$("#proveedores").val();
    
 let cadenaInicio=inicio.split("-");
 let cadenaFin=   fin.split("-");

 let fechainicio= new Date(cadenaInicio[0],parseInt(cadenaInicio[1])-1,cadenaInicio[2]);
 let fechafin= new Date(cadenaFin[0],parseInt(cadenaFin[1])-1,cadenaFin[2]);
    difference = dateDiffInDays(fechainicio, fechafin);
 console.log("post",fechainicio,fechafin,difference);
if (difference<0 || isNaN(difference)) 
{
        Swal.fire({
  icon: 'error',
  title: 'Aviso',
  text: 'la fecha de inicio no puede ser mayor a la fecha fin, y se deben escoger los dos',
  // footer: '<a href>Why do I have this issue?</a>'
})
}else{


  let formData= new FormData();






        // let formData= new FormData();
        formData.append("fechainicio", inicio);
        formData.append("fechafin", fin);
        formData.append("proveedor", proveedores);
          var a = document.createElement('a');
            var url = "/reporteVenta/"+inicio+"/"+fin+"/"+proveedores+"";
            a.href = url;

            // a.download = 'reporte.pdf';
            document.body.append(a);
            a.click();
            a.remove();
   

}


  })









     </script>
@endsection