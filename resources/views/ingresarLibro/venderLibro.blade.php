@extends('dashboard.main')

@section('content')
<div class="container">
    @include('ingresarLibro/modal/buscarProducto')
     @include('ingresarLibro/modal/pagar')



<div class="card ">
  <div class="card-header text-center">
    Mostrador
  </div>
  <div class="card-body">
  
   <form class="form-horizontal" role="form" id="datos_factura">
        <div class="form-group row">
   
          <div class="col-md-6">
                   <label for="nombre_cliente" class=" control-label">Tipo Cliente</label>
          <select class="form-control " name="tipocliente" id="tipocliente">
               <option value="0" selected="true" disabled="true">escoger una opcion</option>
             @if(!empty($tipocliente))
                @foreach($tipocliente as $tipocl)

      <option value="{{$tipocl->id_tipoCliente }}">{{$tipocl->Desctipo}}</option>

     @endforeach
     @endif
                </select>
          </div>

         </div>
         <div class="row form-group col-sm-12 h-50" id="datosCliente">
          <div class="row  h-50">
              <div id="Credencial" class="col-sm-12 collapse show">
              <label for="Credencial" class=" control-label">Credencial</label>
    
                <input type="text" class="form-control " name="Credencial" value="" >
          
          </div>
          </div>
          <div class="pl-5 h-50 form-group">
             <div id="Nombrecli" class="col-sm-8 collapse ">
            <label for="Nombrecli" class=" control-label" >Nombre</label>
            
                <input type="text" class="form-control " name="Nombrecli"  value="" >
            
         </div>
         <div id="Dependencia" class="col-sm-8 collapse ">
           <label for="Dependencia" class=" control-label">Dependencia</label>
  
                <input type="text" class="form-control " name="Dependencia"  value="" >
            
         </div>

          </div>


         </div>
         <div class="row col-sm-12">
            <div class="form-group row col-md-2">

            
             
                  <label for="fecha" class="control-label">Fecha</label>
                <input type="text" class="form-control " name="fecha" id="fecha" value="{{ Carbon\Carbon::today('America/Mexico_City')->format('Y-m-d')}}" readonly="">
       

            </div>


          </div>
             <div class="form-group row col-md-5">

           
              
                   <label for="prod" class=" control-label">Producto</label>
                <input type="text" class="form-control " name="prod" id="prod" value="" >
              

            </div>
            <div class="form-group row col-md-5">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal" style="
    margin-top: 22px;
">
             <span class="glyphicon glyphicon-search"></span> Agregar productos
            </button>
          </div>

        <div class="col-md-12">

          <div class="pull-right">
            <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoProducto">
             <span class="glyphicon glyphicon-plus"></span> Nuevo productobootstrap.js
bootstrap.min.js
            </button> -->
            <button type="button" class="btn btn-primary disabled" data-toggle="modal" data-target="#pagar" id="Cobrar">
            Pagar
            </button>
    

          </div>
        </div>
      </form>

    <div id="resultados" class="col-md-12" style="margin-top:10px">

      <table class="table">
      <thead>
        <tr>
  <th class="text-center">CODIGO</th>
  <th class="text-center">CANT.</th>
  <th>DESCRIPCION</th>
  <th class="text-right">PRECIO UNIT.</th>
  <th class="text-left">Descuento.</th>
  <th class="text-left">PRECIO TOTAL</th>
  <th>Accion</th>
</tr>
      </thead>
<tbody id="ProductosNuevos">


</tbody>
<tr>
  <td class="text-right" colspan="4">SUBTOTAL $</td>
  <td class="text-right" id="subtotal">0.00</td>
  <td></td>
</tr>
<tr>
  <td class="text-right" colspan="4">IVA </td>
  <td class="text-right" ><input type="number" disabled name="iva" id="iva" value="16"></td>
  <td></td>
</tr>
<tr>
  <td class="text-right" colspan="4">TOTAL $</td>
  <td class="text-right" id="totalCompleto">0.00</td>
  <td></td>
</tr>

</table>
</div><!-- Carga los datos ajax -->

  </div>
  <div class="card-footer text-muted">
   
  </div>
</div>




  
</div>
<script type="text/javascript">
let descuentoActual=0;

    var data =  {!! json_encode(!empty($libros)? $libros: "" ) !!};
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });





    // console.log(data);

$("#prod").on("blur",function(e){

let producto=$(this).val();

agregar(producto,null);

})



function agregar(producto,elemento)
    {

  console.log("entre",producto)

let tabla=$("#ProductosNuevos").get();
let rowss=tabla[0].rows;
let agregarNuevo=true;

  for (var i = 0; i < data.length; i++) {
   
if(data[i].Codbarras==producto)
{
 for (var ia = rowss.length - 1; ia >= 0; ia--) {
   
    if(rowss[ia].cells[1].innerText==data[i].Codbarras)
    {
        agregarNuevo=false;
        let actual=parseInt(rowss[ia].cells[2].innerText)

      if( actual < parseInt(data[i].Existencia))
      {
        
       actual+=1
       rowss[ia].cells[2].innerText=actual
 let descuento=(data[i].Preciolista*(data[i].Descuento * .01)).toFixed(2);
    let final =(data[i].Preciolista-descuento).toFixed(2)

      let precioActual=actual* final

      rowss[ia].cells[6].innerText=precioActual
      
      }else{
          mensaje();
      }
}
// 4
// 1

// rowss[ia].cells[4].innerText=data[i].Preciolista*cantidad

    }
}
 



        if(agregarNuevo==true && data[i].Codbarras==producto && data[i].Existencia>0)
{
    let descuento=(data[i].Preciolista*(data[i].Descuento * .01)).toFixed(2);
    let final =(data[i].Preciolista-descuento).toFixed(2)
    $("#ProductosNuevos").append(




    ' <tr class="productosVender">'+
        '  <td class="id_libro d-none" >'+data[i].id_libro+'</td>'+
          '  <td >'+data[i].Codbarras+'</td>'+
          '  <td>'+1+'</td>'+
     '  <td>'+data[i].Titulo+'</td>'+
       '  <td>'+data[i].Preciolista+'</td>'+
        '<td>'+descuento+'</td>'+
       '  <td class="cantidadProducto" >'+final+'</td>'+
        '     <td class="text-center"><a href="#" onclick="eliminar(this)"><i class="btn btn-warning">Eliminar</i></a></td>'+
          '</tr>'


            );



}else if(data[i].Existencia==0 && data[i].Codbarras==producto){
mensaje();
}

  }

let productosTabla=$("#ProductosNuevos")
productosTabla[0].rows.length >0 ? $("#Cobrar").removeClass("disabled") : ""


let productos=$(".cantidadProducto")
let iva=$("#iva").val()!="" ?  parseFloat($("#iva").val() * .010) : 0;
let summar=0.00;

for (var ib = productos.length - 1; ib >= 0; ib--) {
    summar+= parseFloat(productos[ib].innerText);

}
console.log(iva,
summar)
$("#subtotal").text(parseFloat(summar))

let cantid = iva==0 ? summar : (iva*summar) + summar
let canti=parseFloat(cantid - (cantid *(descuentoActual * .010)))

$("#totalCompleto").text(canti.toFixed(2) );
$("#seCobra").text(canti.toFixed(2) )
$(".CantidadPagar").val(canti.toFixed(2));
    }


    function mensaje(error)
    {
      Swal.fire({
  icon: 'error',
  title: 'Aviso',
  text: 'no se cuenta con la existencia del libro escogido',
  // footer: '<a href>Why do I have this issue?</a>'
})

    }


    function eliminar(elemento)
    {
  elemento.parentElement.parentElement.remove();
let tabla=$("#ProductosNuevos").get();
console.log();
let rowss=tabla[0].rows;
let cantidad=0;
let total=0;

rowss.length >0 ? $("#Cobrar").removeClass("disabled") : $("#Cobrar").addClass("disabled")
for (var ia = rowss.length - 1; ia >= 0; ia--) {

// 4
// 1
cantidad=rowss[ia].cells[1].innerText
total+=parseFloat(rowss[ia].cells[4].innerText);


}
let iva=$("#iva").val()!="" ?  parseFloat($("#iva").val() * .010) : 0;
$("#subtotal").text(total.toFixed(2))

        let completoConIva=iva==0 ? total.toFixed(2) : parseFloat(iva*total) + parseFloat(total)

       let completocondescuento= parseFloat(completoConIva - (completoConIva *(descuentoActual * .010)))
        $("#totalCompleto").text(completocondescuento.toFixed(2));
$("#seCobra").text(completocondescuento.toFixed(2)  )
$(".CantidadPagar").val(completocondescuento.toFixed(2));
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


// $("#seCobra").text(total)
// $("#totalPagado").text(summar)


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
     '       <input type="number" readonly class="form-control cantidad" style="text-align:right"  value="'+data[i].Descuento+'">'+
 '           </div></td>'+
          '  <td class="col-ms-6"><div class="pull-right">'+
        '    <input type="text" class="form-control precio_venta" style="text-align:right" value="'+data[i].Preciolista+'">'+
           ' </div></td>'+
        '    <td class="text-center"><a class="btn btn-info" href="#" onclick="agregar('+"'"+data[i].Codbarras+"'"+',this)"><i class="glyphicon glyphicon-plus">+</i></a></td>'+
          '</tr>'




            );
    }
}




    }


 // $(document).ready(function () {
      $('select').selectize({
          sortField: 'value'
      });

      $('#tipocliente').on("change",function(e){


          

        var request = $.ajax({
            url: "/obetnerDescuento/"+$(this).val()+"",
            method: "get",       
            dataType: "json",
            cache: false,
            async: true,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
        });

        request.done(function( msg ) {

          // modal id = myModal
   
      console.log(msg.uss[0].Descuento);
      descuentoActual=msg.uss[0].Descuento
  

let iva=$("#iva").val()!="" ?  parseFloat($("#iva").val() * .010) : 0;

let summar=parseFloat($("#subtotal").text());

let cantid = iva==0 ? summar : (iva*summar) + summar
let canti=parseFloat(cantid - (cantid *(descuentoActual * .010)))

$("#totalCompleto").text(canti.toFixed(2) );
$("#seCobra").text(canti.toFixed(2) )
$(".CantidadPagar").val(canti.toFixed(2));




        });

        request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
        });


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
$(".CantidadPagar").val('')
$("#numeroTarjetacheque").val('')
            $(".mesVencimiento").val('')
              $(".anoVencimiento").val('')

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
let condicion = $("#condiciones").val();
let numeroTar=$(".numeroTar").val();
let mesVencimiento=$(".mesVencimiento").val();
let anoVencimiento=$(".anoVencimiento").val();
let CantidadPagar =$(".CantidadPagar").val();
let numeroTarjetacheque =$("#numeroTarjetacheque").val();
let mesVenci =$("#mesVenci").val();
let anoVenci =$("#anoVenci").val();
// console.log(condicioness,
// numeroTar,
// mesVencimiento,
// anoVencimiento,
// CantidadPagar);

let fecha=mesVencimiento!="" && anoVencimiento!="" ? anoVencimiento+'-'+mesVencimiento+'-1' :"";


let productos=$(".cantiPagoTipo")

let summar=0;

  summar=parseFloat(CantidadPagar)


for (var ib = productos.length - 1; ib >= 0; ib--) {
    summar+=parseFloat(productos[ib].innerText);

}

let total=parseFloat($("#totalCompleto").text())



let accion =(total-summar) >=0 || condicion==1  ? true : false;

let result=total-summar;


let reultadoCondicion =  condicion != 1 && condicion!=4 && total < CantidadPagar ? false : true;
let noSePusoCheque=condicion != 1 && condicion!=4 && condicion==5 && numeroTarjetacheque=="" && numeroTarjetacheque.length<3 ? false : true;


let noSePusoTC=condicion != 1 && condicion!=4 && condicion!=5  && numeroTarjetacheque=="" && numeroTarjetacheque.length<3 && mesVenci=="" && anoVenci=="" && mesVenci.length<1 && anoVenci.length<4  ? false : true;




if( !noSePusoCheque || !noSePusoTC)
{
      Swal.fire({
  icon: 'error',
  title: 'Aviso',
  text: 'falta informacion del pago',
  // footer: '<a href>Why do I have this issue?</a>'
})
$("#guardar_datos").attr("disabled",true)
}else if (accion && reultadoCondicion)
{




  $("#seCobra").text(total)
$("#totalPagado").text(summar)
$("#cambio").text((summar-total) <0 ? summar-total : summar-total);
$("#resta").text(result.toFixed(2));

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
// let newpago=parseFloat(CantidadPagar) + parseFloat(summar)
//     $("#totalPagado").text(newpago)


// let resulta=total-newpago;

// $("#cambio").text(parseFloat(newpago-total) > 0 ? parseFloat(newpago-total) : 0);
// $("#resta").text(resulta.toFixed(2));

// console.log(CantidadPagar + summar,CantidadPagar, summar,total-newpago,total,newpago)

// let productos2=$(".cantiPagoTipo")

// let summar2=0;

// for (var ib = productos2.length - 1; ib >= 0; ib--) {
//     summar2+=parseFloat(productos2[ib].innerText);

// }

$("#guardar_datos").attr("disabled",false)


}else{
  $("#guardar_datos").attr("disabled",true)
   
        Swal.fire({
  icon: 'error',
  title: 'Aviso',
  text: 'no puedes poner la forma de pago, ya se cubrio o debes poner la cantidad exacta',
  // footer: '<a href>Why do I have this issue?</a>'
})
}







})

  function imprimir(venta,productos)
  {
let name="imprimir"

let configuracion_ventana = "menubar=bo,location=yes,resizable=yes,scrollbars=yes,status=yes,height=500,width=516";
 window.open("/ticket/"+window.btoa(JSON.stringify(productos))+"/"+window.btoa(JSON.stringify(venta))+"",name,configuracion_ventana);

setTimeout(function () { location.reload(); }, 500);
  }

    function verificar(ruta)
    {
      $("#guardar_datos").attr("disabled",true)
        let productos=$(".productosVender")
        let summar=1;
        let arreglo=[];
        let unico=[];
        let venta=[]
        for (var ib = productos.length - 1; ib >= 0; ib--) {
            let index=productos[ib].cells[0].innerText;
            // console.log(index);
            // if(arreglo.hasOwnProperty(index+"-"+productos[ib].cells[1].innerText))
            // {
            //     arreglo[index+"-"+productos[ib].cells[1].innerText] =parseInt(arreglo[index+"-"+productos[ib].cells[1].innerText]) + parseInt(summar);

            // }else{
                arreglo[index+"-"+productos[ib].cells[1].innerText] = {"cantidad":productos[ib].cells[2].innerText,"precio":productos[ib].cells[4].innerText,"descuento":productos[ib].cells[5].innerText,"total":productos[ib].cells[6].innerText};

            // }
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

          if (ruta=="verificarExistenciaFinal") 
            {
              let iva=$("#iva").val()
              let subtotal=$("#subtotal").text()
              let totalCompleto=$("#totalCompleto").text();


let pagos=$("#pagosNuevos");

let rows=pagos[0].rows
let rowcontenido=[]

for (var i = rows.length - 1; i >= 0; i--) {  
 
  rowcontenido.push({"tipoPago": rows[i].cells[0].innerText,"monto":  rows[i].cells[1].innerText,"tarjetaChequeNumero":rows[i].cells[2].innerText,"fechaVencimiento": rows[i].cells[3].innerText})
}
let convertido=JSON.stringify(rowcontenido);
formData.append("pagos",convertido)

let cl=$("#tipocliente").val()
let cr=$("#Credencial").val()
let nombrecl=            $("#Nombrecli").val()
let depen=              $("#Dependencia").val()
let subt=              $("#subtotal").text()
let tot=              $("#totalCompleto").text()
let cam=              $("#cambio").text()
              venta.push({
            "tipocliente":    cl,
            "credencial": cr,
            "nombrecliente":nombrecl,
            "dependencia":depen,
            "subtotal": subt,
            "total":tot,
            "cambio":cam,
            "descuento":descuentoActual,

              })
formData.append("venta",JSON.stringify(venta));




            }

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

          // modal id = myModal
          if(!Array.isArray(msg.resultado))
          {

                      Swal.fire({
  icon: 'error',
  title: 'Aviso',
  text:  ' '+msg.resultado+' ',
  // footer:
})
                        $("#guardar_datos").attr("disabled",true)

                      $('#pagar').modal('hide')

          }else{
           $("#guardar_datos").attr("disabled",true)
            if (ruta=="verificarExistenciaFinal") 
            {
                     // $('#pagar').modal('hide')
                     imprimir(msg.venta,unico)
            }
               
          }

    
      

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


  // });
// $('.my-select').selectpicker();
    </script>
@endsection
