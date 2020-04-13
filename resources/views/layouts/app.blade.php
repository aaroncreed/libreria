<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
 
<!-- <script src="{{asset('js/jquery-3.3.1.min.js')}}" ></script>

<link rel="stylesheet" type="text/css" href="{{asset('selec/css/selectize.bootstrap4.css')}}">

<script src="{{asset('selec/js/standalone/selectize.js')}}" ></script>
 -->
 <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> -->
<!--  <link href="{{asset('selec/css/select2.css')}}" rel="stylesheet">
   <script src="{{asset('selec/js/select2.full.js')}}" ></script> -->


<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" /> -->


<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->

    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />


    <style type="text/css">

        .bootstrap-select[class*=col-] .dropdown-toggle {
    width: 221px !important;
}
/*.select2-dropdown*/

.increasezindex {
    z-index:99999;
}
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                      
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script type="text/javascript">
    var data =  {!! json_encode(!empty($libros)? $libros: "" ) !!};
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
  console.log("se encunetra ya agregado: ",rowss[ia].cells[1].innerText,data[i].Codbarras);
    if(rowss[ia].cells[1].innerText==data[i].Codbarras)
    {
// 4
// 1
let cantidadActual=parseFloat( rowss[ia].cells[2].innerText =="" ? 0 :  rowss[ia].cells[2].innerText )
let cantidadMostrar=parseFloat(cantidad)+cantidadActual;
console.log( rowss[ia].cells[2].innerText ,parseFloat(cantidad));
rowss[ia].cells[2].innerText=cantidadMostrar
rowss[ia].cells[6].innerText=data[i].Preciolista*cantidadMostrar
agregarNuevo=false;
    }
}

if(agregarNuevo==true)
{
    let descuento=(data[i].Preciolista*(data[i].Descuento * .01)).toFixed(2);
    let final =(data[i].Preciolista-descuento).toFixed(2)
    $("#ProductosNuevos").append(




    ' <tr class="productosVender">'+
        '  <td class="id_libro d-none" >'+data[i].id_libro+'</td>'+
          '  <td >'+data[i].Codbarras+'</td>'+
          '  <td>'+cantidad+'</td>'+
     '  <td>'+data[i].Titulo+'</td>'+
       '  <td>'+data[i].Preciolista+'</td>'+
        '<td>'+descuento+'</td>'+
       '  <td class="cantidadProducto" >'+final+'</td>'+
        '     <td class="text-center"><a href="#" onclick="eliminar(this)"><i class="btn btn-warning">Eliminar</i></a></td>'+
          '</tr>'


            );

}

   }
}


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
let canti=parseFloat(cantid)

$("#totalCompleto").text(canti.toFixed(2) );
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
     '       <input type="number" disabled class="form-control cantidad" style="text-align:right"  value="'+data[i].Descuento+'">'+
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
            $( "#log" ).html( msg );

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
</body>
</html>
