
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
          <th>Devolver</th>
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
      <td>
        <!-- <a class="btn btn-info" href="/devolverEntradaEspecifica/{{$entr->Claveent}}/{{$entr->id_detallleEntrada}}">Devolver</a> -->
<div class="form-check">
  <input class="form-check-input devolverEntrada" type="checkbox" value="{{$entr->id_detallleEntrada}}" name="devolverEntrada">

</div>
      </td>
       <td>{{$entr->Claveent}}</td>
       <td>{{$entr->libro->Codbarras}}</td>
       <td>
<input type="number" 
onkeypress="return isNumeric(event,this)"
    oninput="maxLengthCheck(this)"
    onchange="cambiarTotal()" 
name="existenciaDevolver" max="{{$entr->libro->Existencia}}" min="0" value="{{$entr->libro->Existencia}}" disabled="true">
       </td>
       <td>{{$entr->Cantidad}}</td>
       <td>{{$entr->Preciolista}}</td>
          <td class="d-none">
         <input type="number"  name="precio" value="{{$entr->Preciolista}}" disabled="true">
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
  <td class="text-right" colspan="4">SUBTOTAL $</td>
  <td class="text-right" id="subtotal">0.00</td>
  <td></td>
</tr>

<tr>
  <td class="text-right" colspan="4">TOTAL $</td>
  <td class="text-right" id="totalCompleto">0.00</td>
  <td></td>
</tr>

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

   let cantidad=parseFloat( articulos["precio"][i]) * parseFloat(articulos["existenciaDevolver"][i]);
 let subtotal=parseFloat($("#subtotal").text());
 $("#subtotal").text((subtotal+cantidad).toFixed(2));


 // console.log( articulos[art][i])
}

// }



}

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



$(".devolverEntrada").on("change",function(e){

// $(this).val();
// $(this).cheked

if ($(this)[0].checked) 
{
  // $(this).val()

 let fila=   $(this).parent().parent().parent().children();
 console.log(fila[3])
 fila[3].firstElementChild.removeAttribute("disabled");
 fila[6].firstElementChild.removeAttribute("disabled");
 let cantidad=parseFloat(fila[3].firstElementChild.value) * parseFloat(fila[5].innerText);
 let subtotal=parseFloat($("#subtotal").text());
 $("#subtotal").text((subtotal+cantidad).toFixed(2));

}else{
   let fila=   $(this).parent().parent().parent().children();
 console.log(fila[3])

 let cantidad=parseFloat(fila[3].firstElementChild.value) * parseFloat(fila[5].innerText);
 fila[3].firstElementChild.setAttribute("disabled",true);
  fila[6].firstElementChild.setAttribute("disabled",true);
 let subtotal=parseFloat($("#subtotal").text());
 if (subtotal-cantidad >0) 
 {
  $("#subtotal").text((subtotal-cantidad).toFixed(2));
 }
 
}


})



    console.log(data);

function agregar(arreglo,elemento)
    {
console.log("click",elemento.parentElement.previousSibling.previousSibling.previousSibling.previousSibling.childNodes[1].childNodes[1].value)

// elemento.parentElement.previousSibling.previousSibling.previousSibling.previousSibling.childNodes[1].childNodes[1].value cantidad
// elemento.parentElement.previousSibling.previousSibling precio
console.log(elemento.parentElement.previousSibling.previousSibling.childNodes[0].childNodes[1].value);
let pu=elemento.parentElement.previousSibling.previousSibling.childNodes[0].childNodes[1].value
let precioUnitario=pu =="" || NaN ? 0 : pu;
let cr=elemento.parentElement.previousSibling.previousSibling.previousSibling.previousSibling.childNodes[1].childNodes[1].value;
let cantidad=cr =="" || NaN ? 0 : cr;
// elemento.parentElement.previousSibling.previousSibling.previousSibling.previousSibling.childNodes[1].childNodes[1].value;
let agregarNuevo=true;
for (var i = data.length - 1; i >= 0; i--) {

    if(data[i].id_libro==arreglo){
let tabla=$("#ProductosNuevos").get();
console.log();
let rowss=tabla[0].rows;

for (var ia = rowss.length - 1; ia >= 0; ia--) {
	console.log("se encunetra ya agregado: ",rowss[ia].cells[2].innerText,data[i].Codbarras);
    if(rowss[ia].cells[2].innerText==data[i].Codbarras)
    {
// 4
// 1
let cantidadActual=parseFloat( rowss[ia].cells[3].childNodes[0].value =="" ? 0 :  rowss[ia].cells[3].childNodes[0].value )
let cantidadMostrar=parseFloat(cantidad)+cantidadActual;
console.log( rowss[ia].cells[3].childNodes[0].value ,parseFloat(cantidad));
rowss[ia].cells[3].childNodes[0].value =cantidadMostrar

let des=rowss[ia].cells[5].childNodes[0].value 
let descuentoCompra=des=="" || des==NaN || des<0 ? 0 : parseFloat(des);
let valorConDescuento=(descuentoCompra*.01)* pu 
let valorFinal=pu - valorConDescuento  
rowss[ia].cells[7].innerText=pu
console.log(rowss[ia].cells[1].childNodes[0]);
rowss[ia].cells[1].childNodes[0].value=pu

rowss[ia].cells[9].innerText=valorFinal*cantidadMostrar
agregarNuevo=false;
    }
}

if(agregarNuevo==true)
{
    let descuento=(pu*(data[i].Descuento * .01)).toFixed(2);
    let final =parseFloat(pu).toFixed(2)
    $("#ProductosNuevos").append(




    ' <tr class="productosVender">'+
        '  <td class="id_libro d-none" ><input type="number" class="form-control id_libro d-none" style="text-align:right" name="pk_libro"  value="'+data[i].id_libro+'">'+data[i].id_libro+'</td>'+

        '<td class=" d-none" ><input type="number" class="form-control id_libro d-none" style="text-align:right" name="precioUnitarioProducto"  value="'+pu+'">'+
        '</td>">'+

          '  <td >'+data[i].Codbarras+'</td>'+
          '  <td><input type="number" class="form-control cantidad" name="cantidadArticulo" style="text-align:right" value="'+cantidad+'"></td>'+
     '  <td>'+data[i].Titulo+'</td>'+
     '  <td><input type="number" step="1" class="form-control cantidad" name="descuentoCompraArticulo" style="text-align:right" value="'+""+'"></td>'+
     '  <td><input type="number" step="1" class="form-control cantidad" name="descuentoVentaArticulo" style="text-align:right" value="'+""+'"></td>'+

       '  <td>'+pu+'</td>'+
        '<td><textarea class="form-control " name="ObservacionArticulo"  value="" maxlength="30"></textarea></td>'+
       '  <td class="cantidadProducto" ><input type="number" class="form-control id_libro d-none" style="text-align:right" name="finalProducto"  value="'+final+'">'+final+'</td>'+
        '  <td><input type="date" class="form-control cantidad" name="fechaColofonArticulo" style="text-align:right"></td>'+
        '     <td class="text-center"><a href="#" onclick="eliminar(this)"><i class="btn btn-warning">Eliminar</i></a></td>'+
          '</tr>'


            );

}

   }
}


let productos=$(".cantidadProducto")
let iva=0
// $("#iva").val()!="" ?  parseFloat($("#iva").val() * .010) : 0;
let summar=0.00;

for (var ib = productos.length - 1; ib >= 0; ib--) {
    summar+= parseFloat(productos[ib].innerText);

}
console.log(iva,
summar)
$("#subtotal").text(parseFloat(summar))

let cantid = iva==0 ? summar : (iva*summar) + summar
let canti=parseFloat(cantid)

$("#totalCompleto").text(canti.toFixed(2) );
$("#totalFactura").val(canti.toFixed(2));
$("#seCobra").text(canti.toFixed(2) )
    }
    function eliminar(elemento)
    {
  elemento.parentElement.parentElement.remove();
let tabla=$("#ProductosNuevos").get();
console.log();
let rowss=tabla[0].rows;
let cantidad=0;
let total=0;

for (var ia = rowss.length - 1; ia >= 0; ia--) {

// 4
// 1
cantidad=rowss[ia].cells[1].innerText
total+=parseFloat(rowss[ia].cells[4].innerText);


}
let iva=$("#iva").val()!="" ?  parseFloat($("#iva").val() * .010) : 0;
$("#subtotal").text(total.toFixed(2))

        let completoConIva=iva==0 ? total.toFixed(2) : parseFloat(iva*total) + parseFloat(total)
        $("#totalCompleto").text(completoConIva.toFixed(2));
$("#seCobra").text(completoConIva.toFixed(2)  )

        console.log(elemento.parentElement.parentElement,"click")
    }


 function eliminarPago(elemento)
    {
  elemento.parentElement.parentElement.remove();


let productos=$(".cantiPagoTipo")

let summar=0;

for (var ib = productos.length - 1; ib >= 0; ib--) {
    summar+=parseFloat(productos[ib].innerText);

}

let total=parseFloat($("#totalCompleto").text()).toFixed(2)


$("#seCobra").text(total)
$("#totalPagado").text(summar)


  let newpago=parseFloat(summar)
    $("#totalPagado").text(newpago)


let resulta=total-newpago;

$("#cambio").text(parseFloat(newpago-total) > 0 ? parseFloat(newpago-total) : 0);
$("#resta").text(resulta.toFixed(2));


    }


    function ingresarlibro(select)
    {
        console.log("escogi libro",select.value,select.id)
// id_libro: 1
// Codbarras: "asdasd"
// Clavecasedit: 1
// Titulo: "asdas"
// Autor: "asd"
// ClaveInterna: "asd"
// ISBN: "asd"
// Inventariable: 1
// Claveunimed: 2
// Existencia: 123
// Puntoreorden: 123
// Costo: "123.00"
// Preciolista: "123.00"
// Peso: "123.00"
// Numeropag: 123
// fecedicion: null
// Tema: "asd"
// fecalta: "2020-02-13"
// Descuento: "123.00"
// Ultimoprov: null
// Sinopsis: "asd"
// Ubicacion: "asd"
// Usralta: null
// fotoportada: "portadas/asdasd/02a78975bd89601f92bb9e6d8f6fb5bf.png"
// fechaColofon: "2020-02-12"
// descatalogado: null

for (var i = data.length - 1; i >= 0; i--) {

    if(data[i].Codbarras==select.value){
        $("#productoEscogido").empty();
                    $("#productoEscogido").append(


    ' <tr>'+

          '  <td>'+data[i].Codbarras+'</td>'+
          '  <td>'+data[i].Titulo+'</td>'+
            '<td class="col-ms-6">'+
           ' <div>'+
     '       <input type="number" class="form-control cantidad" style="text-align:right"  value="">'+
 '           </div></td>'+
          '  <td class="col-ms-6"><div class="pull-right">'+
        '    <input type="text" class="form-control precio_venta" style="text-align:right" value="'+data[i].Preciolista+'">'+
           ' </div></td>'+
        '    <td class="text-center"><a class="btn btn-info" href="#" onclick="agregar('+data[i].id_libro+',this)"><i class="glyphicon glyphicon-plus">+</i></a></td>'+
          '</tr>'




            );
    }
}




    }


 // $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });

      $('#tipocliente').on("change",function(e){

       if($(this).val()==5 || $(this).val()==4)
       {
            $("#Credencial").collapse('hide')
            $("#Nombrecli").collapse('show')
              $("#Dependencia").collapse('show')
       }
        if($(this).val()==1 || $(this).val()==2
            || $(this).val()==3 || $(this).val()==6 || $(this).val()==7)
       {
            $("#Credencial").collapse('show')
             $("#Nombrecli").collapse('hide')
              $("#Dependencia").collapse('hide')
       }
       if($(this).val()==8)
       {
        $("#Credencial").collapse('hide')
             $("#Nombrecli").collapse('hide')
              $("#Dependencia").collapse('hide')
       }





      })
      $('#condiciones').on("change",function(e){



       if($(this).val()==5 )
       {
            $("#numeroTar").collapse('show')
            $("#mesVencimiento").collapse('hide')
              $("#anoVencimiento").collapse('hide')
       }
        if($(this).val()==2
            || $(this).val()==3 ||  $(this).val()==4 || $(this).val()==6 || $(this).val()==7 || $(this).val()==8)
       {
           $("#numeroTar").collapse('show')
            $("#mesVencimiento").collapse('show')
              $("#anoVencimiento").collapse('show')
       }
       if($(this).val()==1)
       {
        $("#numeroTar").collapse('hide')
             $("#mesVencimiento").collapse('hide')
              $("#anoVencimiento").collapse('hide')
       }





      })

$("#agregarPago").on("click",function(e){


let condicioness = $("#condiciones").text();
let numeroTar=$(".numeroTar").val();
let mesVencimiento=$(".mesVencimiento").val();
let anoVencimiento=$(".anoVencimiento").val();
let CantidadPagar =$(".CantidadPagar").val();

console.log(condicioness,
numeroTar,
mesVencimiento,
anoVencimiento,
CantidadPagar);

let fecha=mesVencimiento!="" && anoVencimiento!="" ? '1/'+mesVencimiento+'/'+anoVencimiento :"";


let productos=$(".cantiPagoTipo")

let summar=0;

for (var ib = productos.length - 1; ib >= 0; ib--) {
    summar+=parseFloat(productos[ib].innerText);

}

let total=parseFloat($("#totalCompleto").text()).toFixed(2)


$("#seCobra").text(total)
$("#totalPagado").text(summar)
let accion =(total-summar) >0 ? true : false;

let result=total-summar;

$("#cambio").text((summar-total) <0 ? summar-total : 0);
$("#resta").text(result.toFixed(2));

if (accion)
{
    $("#pagosNuevos").append(


    ' <tr>'+
          '  <td>'+condicioness+'</td>'+
          '  <td class="cantiPagoTipo">'+CantidadPagar+'</td>'+
            '<td class="col-ms-6">'+
        numeroTar+
            '</td>'+
          '  <td class="col-ms-6">'+fecha+'</td>'+
        '<td><button class="btn btn-info" onclick="eliminarPago(this)">Eliminar</button></td>'+
          '</tr>'




            );
let newpago=parseFloat(CantidadPagar) + parseFloat(summar)
    $("#totalPagado").text(newpago)


let resulta=total-newpago;

$("#cambio").text(parseFloat(newpago-total) > 0 ? parseFloat(newpago-total) : 0);
$("#resta").text(resulta.toFixed(2));

console.log(CantidadPagar + summar,CantidadPagar, summar,total-newpago,total,newpago)

// let productos2=$(".cantiPagoTipo")

// let summar2=0;

// for (var ib = productos2.length - 1; ib >= 0; ib--) {
//     summar2+=parseFloat(productos2[ib].innerText);

// }




}else{
    alert("no puedes poner mas de lo que estas cobrando");
}







})

    function verificar(ruta)
    {
        let productos=$(".productosVender")
        let summar=1;
        let arreglo=[];
        let unico=[];
        for (var ib = productos.length - 1; ib >= 0; ib--) {
            let index=productos[ib].cells[0].innerText;
            // console.log(index);
            if(arreglo.hasOwnProperty(index+"-"+productos[ib].cells[1].innerText))
            {
                arreglo[index+"-"+productos[ib].cells[1].innerText] =parseInt(arreglo[index+"-"+productos[ib].cells[1].innerText]) + parseInt(summar);

            }else{
                arreglo[index+"-"+productos[ib].cells[1].innerText] = summar;

            }
            // var unique = arreglo.filter(function(elem, index, self) {
            //     return index === self.indexOf(elem);
            // })


        }

        let formData= new FormData();
        for (arr in arreglo) {

            console.log(arreglo[arr],arreglo,arr)
            unico.push({"cantidad":arreglo[arr],"articulo":arr})
            // formData.append("productos", "Groucho");
        }



        console.log(unico);

        // let formData= new FormData();
        formData.append("productos", JSON.stringify(unico));
        var request = $.ajax({
            url: ruta,
            method: "Post",
            data: formData,
            dataType: "json",
            cache: false,
            async: true,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
        });

        request.done(function( msg ) {
            // $( "#log" ).html( msg );


        });

        request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
        });
    }

    // Cobrar
$("#Cobrar").on("click",function (e) {

    verificar('verificarExistencia')

})

$("#guardar_datos").on("click",function (e) {
    verificar('verificarExistenciaFinal')
})


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
               
location.reload();
        });

        request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
        });

});
   

  // });
// $('.my-select').selectpicker();
    </script>
@endsection