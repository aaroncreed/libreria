@extends('dashboard.main')

@section('content')

<ul class="nav nav-pills justify-content-center">
<li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#devolucionesPendientes">Devoluciones Pendientes</a></li>
  
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#devolucionesTerminadas">Devoluciones Terminadas</a></li>

        
   
</ul>
<div class="tab-content">

    <div id="devolucionesPendientes" class="tab-pane fade in active show">
   <div class="container">



<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Devoluciones</h1>
    <div class="table-responsive">
  <table class="table" data-toggle="table" data-pagination="true"   data-page-size="10"
  data-search="true" data-locale="es-MX" >
   <thead>
    <th>Escoger</th>
     <th>Clave Entrada</th>
<th> Fecha de Recepcion</th>
<th> Fecha de envio</th>
<th> Total de factura</th>
<th> Referencia</th>
<th> Clave tipo de entrada</th>
<th> Observaciones</th>
<th> Clave proveedor</th>
<th> Usuario de recibio</th>
<th> Fecha de finiquito</th>
<th> Fecha de fin de consigna</th>
<th> Usuario alta</th>
   </thead>
   <tbody>
     @if(!empty($entradas))
     @foreach($entradas as $entr)
     @if($entr->estatusEntrada==0)
     <tr>
      <td>
@if(Auth::User()->Nivel!=3)
        <a class="btn btn-info" href="/devolverEntrada/{{$entr->id_entrada}}">Devolver</a>
                 <a class="btn btn-info" href="/reporteEntrada/{{$entr->id_entrada}}">Reporte de Entrada</a>

@endif
      </td>
       <td>{{$entr->ClaveEnt}}</td>
       <td>{{$entr->Fecrecepcion}}</td>
       <td>{{$entr->Fecenvio}}</td>
       <td>{{$entr->Totalfac}}</td>
       <td>{{$entr->Referencia}}</td>
       <td>{{ isset($entr->catalogoTipoEntrada->Desctipent) ? $entr->catalogoTipoEntrada->Desctipent : "" }}</td>
       <td>{{$entr->Observaciones}}</td>
       <td>{{isset($entr->catalogoProveedor->Empresa) ? $entr->catalogoProveedor->Empresa : ""}}</td>
       <td>{{$entr->Usrrecibio}}</td>
       <td>{{$entr->Fecfiniquito}}</td>
       <td>{{$entr->fecfinconsigna}}</td>
        <td>{{$entr->Usralta}}</td>
      
     </tr>
     @endif
     @endforeach
     @endif
   </tbody>
  </table>
</div>

  </div>
</div>


  
</div>
    </div>

       <div id="devolucionesTerminadas" class="tab-pane fade in">
   <div class="container">



<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Devoluciones</h1>
    <div class="table-responsive">
  <table class="table"  class="table" data-toggle="table" data-pagination="true"   data-page-size="10"
  data-search="true" data-locale="es-MX">
   <thead>
    <th>Escoger</th>
     <th>Clave Entrada</th>
<th> Fecha de recepcion</th>
<th> Fecha de envio</th>
<th> Total de factura</th>
<th> Referencia</th>
<th> Clave tipo entrada</th>
<th> Observaciones</th>
<th> Clave proveedores</th>
<th> Ususario que recibio</th>
<th> Fecha de finiquito</th>
<th> Fecha de fin de consigna</th>
<th> Usuario alta</th>
   </thead>
   <tbody>
     @if(!empty($entradas))
     @foreach($entradas as $entr)
     @if($entr->estatusEntrada==1)
     <tr>
      <td>
@if(Auth::User()->Nivel!=3)
        <a class="btn btn-info" href="/reporteSalida/{{$entr->id_entrada}}">Reporte de Devolucion</a>
         <a class="btn btn-info" href="/reporteEntrada/{{$entr->id_entrada}}">Reporte de Entrada</a>
  <a class="btn btn-info" href="/reporteSalidaProvedor/{{$entr->id_entrada}}">Reporte de Devolucion provedor</a>
@endif
      </td>
       <td>{{$entr->ClaveEnt}}</td>
       <td>{{$entr->Fecrecepcion}}</td>
       <td>{{$entr->Fecenvio}}</td>
       <td>{{$entr->Totalfac}}</td>
       <td>{{$entr->Referencia}}</td>
       <td>{{ isset($entr->catalogoTipoEntrada->Desctipent) ? $entr->catalogoTipoEntrada->Desctipent : "" }}</td>
       <td>{{$entr->Observaciones}}</td>
       <td>{{isset($entr->catalogoProveedor->Empresa) ? $entr->catalogoProveedor->Empresa : ""}}</td>
       <td>{{$entr->Usrrecibio}}</td>
       <td>{{$entr->Fecfiniquito}}</td>
       <td>{{$entr->fecfinconsigna}}</td>
        <td>{{$entr->Usralta}}</td>
      
     </tr>
     @endif
     @endforeach
     @endif
   </tbody>
  </table>
</div>

  </div>
</div>


  
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



let formData = new FormData();
     formData.append("factura", JSON.stringify(unico));
     formData.append("partes", JSON.stringify(articulos));
console.log("click",JSON.stringify(unico,formData),JSON.stringify(articulos));
 let request = $.ajax({
            url: "guardarEntrada",
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
         console.log("todoCorrecto",msg);
            $("#ProductosNuevos").children().remove();
            $("#subtotal").text(0);
             $("#totalCompleto").text(0);
               $("#datos_factura")[0].reset();

               $('input[type=date]')[0].valueAsDate = '';
               

        });

        request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
        });

});
   

  // });
// $('.my-select').selectpicker();
    </script>
@endsection