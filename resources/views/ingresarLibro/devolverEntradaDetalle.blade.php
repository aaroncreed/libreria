
@extends('dashboard.main')

@section('content')
<div class="container">

<div class="card text-center">
  <div class="card-header">
    Ingresar Factura
  </div>
  <div class="card-body">
    <h5 class="card-title">Detalle de Factura</h5>
  <form class="form-horizontal" role="form" id="datos_factura">
                 @if(!empty($entrada))
                @foreach($entrada as $tipocl)

        <div class="form-group row col-md-12">
          <label for="Proveedor" class="col-md-2 control-label">Proveedor</label>
          <div class="col-md-6">
          <input class="form-control " name="Proveedor" id="Proveedor"  value="{{$tipocl->catalogoProveedor->Empresa }}" readonly="true">



              
          </div>

         </div>
     
         <div class="row form-group col-sm-12 h-50" id="datosCliente">
         	          <div class="form-group row col-sm-12">
          <label for="tipoEntrada" class="col-md-2 control-label">Tipo de Entrada</label>
          <div class="col-md-6">

          <input class="form-control " name="tipoEntrada" id="tipoEntrada" value="{{$tipocl->catalogoTipoEntrada->Desctipent}}" readonly="true">
         

   

  
             
          </div>

         </div>
          <div class="row col-sm-12 h-50">
              <div id="fechaConsignacionMostrar" class="col-sm-6 collapse show">
               <label for="fechaConsignacion" class="col-md-6 control-label">Fecha consignacion</label>
              <div class="col-md-6">

                <input type="input" class="form-control " name="fechaConsignacion" id="fechaConsignacion" value="{{$tipocl->fecfinconsigna}}" readonly="true">
              </div>
          </div>
          </div>
         </div>


            <div class="form-group row col-md-12">

              <label for="fechaEnvio" class="col-md-2 control-label">Fecha Envio</label>
              <div class="col-md-4">
                <input type="date" class="form-control " name="fechaEnvio" id="fechaEnvio" value="{{ $tipocl->Fecenvio}}" readonly="true">
              </div>

               <label for="fechaRecepcion" class="col-md-2 control-label">Fecha Recepcion</label>
              <div class="col-md-4">
                <input type="date" class="form-control " name="fechaRecepcion" id="fechaRecepcion" value="{{ $tipocl->Fecrecepcion}}" readonly="true">
              </div>

<label for="totalFactura" class="col-md-2 control-label">Total Factura</label>
              <div class="col-md-4">
                <input type="number" class="form-control " name="totalFactura" id="totalFactura" value="{{$tipocl->Totalfac}}" readonly="true">
              </div>

<label for="Referencia" class="col-md-2 control-label">Referencia</label>
              <div class="col-md-4">
                <input type="text" class="form-control " name="Referencia" id="Referencia" value="{{$tipocl->Referencia}}" maxlength="30" readonly="true">
              </div>

            </div>
<div class="form-group row col-md-12">
	<label for="Observacion" class="col-md-2 control-label">Observacion</label>
              <div class="col-md-4">
           
                <textarea class="form-control " name="Observacion" id="Observacion" value="{{$tipocl->Observaciones}}" maxlength="60" readonly="true">{{$tipocl->Observaciones}}</textarea>
              </div>
</div>




        <div class="col-md-12">

          <div class="pull-right">

          <button id="ingresarProducto" class="btn btn-primary">Salida de libros</button>
  

          </div>
        </div>
              @endforeach
     @endif
      </form>

  </div>
       
  <div class="card-footer text-muted">
    <div id="resultados" class="col-md-12 table-responsive " style="margin-top:10px">
<form id="articulosFacturaForm">
      <table class="table" id="articulosFactura">
      <thead>
        <tr>
 <!--          <th>Devolver</th> -->
  <th class="text-center">Claveent</th>
  <th class="text-center">Codigobarr</th>
  <th>Existencia actual</th>
  <th>Cantidad de entrada</th>
    <th>Preciolista</th>
  <th>Descprovedor</th>
  <th class="text-right">descuento Venta</th>
  <th class="text-left">OBSERVACIONES</th>

  <th class="text-left">FECHA COLOFON libro</th>
  <th class="text-left">FECHA COLOFON entrada</th>

</tr>
      </thead>
<tbody id="ProductosNuevos">
 @if(!empty($detalles))
     @foreach($detalles as $entr)
     
     <tr>
  <!--     <td>

<div class="form-check">
  <input class="form-check-input devolverEntrada" type="checkbox" value="{{$entr->id_detallleEntrada}}" name="devolverEntrada">

</div>
      </td> -->
       <td>{{$entr->Claveent}}</td>
       <td>{{$entr->libro->Codbarras}}</td>
       <td>
{{$entr->libro->Existencia}}
       </td>
       <td>{{$entr->Cantidad}}</td>
       <td>{{$entr->Preciolista}}</td>
          <td class="d-none">
              <input type="number" value="{{$entr->id_detallleEntrada}}" name="devolverEntrada">
         <input type="number"  name="precio" value="{{$entr->Preciolista}}" >
          <input type="number"  name="entrada" value="{{$entr->Cantidad}}" >
          <input type="number" 
onkeypress="return isNumeric(event,this)"
    oninput="maxLengthCheck(this)"
    onchange="cambiarTotal()" 
name="existenciaDevolver" max="{{$entr->libro->Existencia}}" min="0" value="{{$entr->libro->Existencia}}" >
       </td>
       <td>{{$entr->Descprov}}</td> 
       <td>{{$entr->Claveprov}}</td>
       <td>{{$entr->Observación}}</td>
       <td>{{$entr->libro->fechaColofon}}</td>
       <td>{{$entr->fechaColofon}}</td>
     
      
     </tr>
     @endforeach
     @endif

</tbody>
<tr>
  <td class="text-right" colspan="4">TOTAL A DEVOLVER</td>
  <td class="text-right" id="subtotal">0.00</td>
  <td></td>
</tr>

<!-- <tr>
  <td class="text-right" colspan="4">TOTAL $</td>
  <td class="text-right" id="totalCompleto">0.00</td>
  <td></td>
</tr> -->

</table>
</form>
</div><!-- Carga los datos ajax -->
  </div>
</div>
</div>
<script type="text/javascript">
    var data =  {!! json_encode(!empty($libros)? $libros: "" ) !!};
   var proveedor =  {!! json_encode(!empty($proveedor)? $proveedor: "" ) !!};
      var tipoentrada =  {!! json_encode(!empty($tipoentrada)? $tipoentrada: "" ) !!};
const baseurl=window.location.origin;


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

function cambiarTotal()
{
 //  console.log(elemento.value,elemento.parentElement.parentElement.cells[5].innerText);
 //   let cantidad=parseFloat(fila[3].firstElementChild.value) * parseFloat(fila[5].innerText);
 // let subtotal=parseFloat($("#subtotal").text());
 // $("#subtotal").text((subtotal+cantidad).toFixed(2));
console.log("entre a cambiar total");

let partes=$("#articulosFacturaForm").serializeArray()
console.log(partes);
let articulos={};



for (ar in partes) {


      if(articulos.hasOwnProperty(""+partes[ar].name+""))        
      {
      
           articulos[""+partes[ar].name+""].push(partes[ar].value)
        }else{
                  articulos[""+partes[ar].name+""]=[partes[ar].value]
        }
       
            // formData.append("productos", "Groucho");
        }

        console.log(articulos);
let sumar=0;
 $("#subtotal").text(0);
// for (art in articulos) {
// console.log(articulos["precio"],art);
for (var i = articulos["precio"].length - 1; i >= 0; i--) {
  // articulos["precio"][i]
  // articulos["existenciaDevolver"][i]

   let cantidad=parseFloat( articulos["precio"][i]) * parseFloat(articulos["entrada"][i]);
 let subtotal=parseFloat($("#subtotal").text());
 $("#subtotal").text((subtotal+cantidad).toFixed(2));


 // console.log( articulos[art][i])
}

// }



}

cambiarTotal();

  function maxLengthCheck(object) {
    if (object.value.length > object.max.length && object.value > object.max)
      object.value = object.value.slice(0, object.max.length)
  }    
  function isNumeric (evt,element) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode (key);
    var regex = /[0-9]|\./;
     let valor=element.value+""+key;
    console.log(element.max,valor , regex.test(key));

    if ( !regex.test(key) || (regex.test(key) && (parseInt(valor) > element.max || parseInt(valor) < element.min)) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }



// $(".devolverEntrada").on("change",function(e){

// // $(this).val();
// // $(this).cheked

// if ($(this)[0].checked) 
// {
//   // $(this).val()

//  let fila=   $(this).parent().parent().parent().children();
//  console.log(fila[3])
//  fila[3].firstElementChild.removeAttribute("disabled");
//  fila[6].firstElementChild.removeAttribute("disabled");
//  let cantidad=parseFloat(fila[3].firstElementChild.value) * parseFloat(fila[5].innerText);
//  let subtotal=parseFloat($("#subtotal").text());
//  $("#subtotal").text((subtotal+cantidad).toFixed(2));

// }else{
//    let fila=   $(this).parent().parent().parent().children();
//  console.log(fila[3])

//  let cantidad=parseFloat(fila[3].firstElementChild.value) * parseFloat(fila[5].innerText);
//  fila[3].firstElementChild.setAttribute("disabled",true);
//   fila[6].firstElementChild.setAttribute("disabled",true);
//  let subtotal=parseFloat($("#subtotal").text());
//  if (subtotal-cantidad >0) 
//  {
//   $("#subtotal").text((subtotal-cantidad).toFixed(2));
//  }
 
// }


// })



    console.log(data);


















$("#ingresarProducto").on("click",function(e){
e.preventDefault();

let partes=$("#articulosFacturaForm").serializeArray()
let formulario=$("#datos_factura").serializeArray()

let unico={};
let articulos={};



for (ar in partes) {


			if(articulos.hasOwnProperty(""+partes[ar].name+""))        
			{
			
				   articulos[""+partes[ar].name+""].push(partes[ar].value)
				}else{
					        articulos[""+partes[ar].name+""]=[partes[ar].value]
				}
       
            // formData.append("productos", "Groucho");
        }




 for (arr in formulario) {

        
            unico[""+formulario[arr].name+""]=formulario[arr].value
            // formData.append("productos", "Groucho");
        }

 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

let sub= $("#subtotal").text();
let formData = new FormData();
     formData.append("factura", JSON.stringify(unico));
     formData.append("partes", JSON.stringify(articulos));
     formData.append("cantidad",sub);
console.log("click",JSON.stringify(unico,formData),JSON.stringify(articulos));
 let request = $.ajax({
            url: "/realizarDevolucion",
            method: "POST",
            data: formData,
            dataType: "json",
            cache: false,
            async: true,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
        });

        request.done(function( msg ) {
         console.log("todoCorrecto",msg);
            // $("#ProductosNuevos").children().remove();
            // $("#subtotal").text(0);
            //  $("#totalCompleto").text(0);
            //    $("#datos_factura")[0].reset();

            //    $('input[type=date]')[0].valueAsDate = '';
               
location.href=baseurl+"/devoluciones";
        });

        request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
        });

});
   

  // });
// $('.my-select').selectpicker();
    </script>
@endsection