<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Ventas</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/boo/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('selec/css/select2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/pricing.css')}}" rel="stylesheet">
    <style type="text/css">
      .modal-lg {
    max-width: 90% !important;
}
.articulotipo
{
  display: inline-flex;
}
.Logotipo
{
width: 10%;
}
    </style>
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <!-- <h5 class="my-0 mr-md-auto font-weight-normal">La Casa del Panucho</h5> -->
      <img src="{{asset('img/cpa.png')}}" class="my-0 mr-md-auto Logotipo">
      <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-2 text-dark" href="/venta">venta</a>
          <a class="p-2 text-dark caja" >Corte de Caja</a>
       <!--  <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a> -->
      </nav>
      <!-- <a class="btn btn-outline-primary" href="#">Sign up</a> -->
    </div>



    <div class="container">
      <div class="card-deck mb-3 text-center">
      
        <div class="container content-area">
            <div class="row">

                <div class="col-12">
              

<ul class="nav nav-pills justify-content-center">
<li class="active"><a class="nav-link active show" data-toggle="tab" href="#mesas">mesas</a></li>
  
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu">menu</a></li>
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tipopre">Platillos Precios</a></li>
   
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#senesp">Ingredientes extras</a></li>
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tipoartb">Platillo o bebida</a></li>
    
        
   
</ul>



            </div>
        </div>
            <!--  -->
  <article>

  <div class="container" style="width: 100% !important;">
  <h2>Configuracion</h2>


 
  <div class="tab-content">

    <div id="mesas" class="tab-pane fade in active show">
      
      

      
     <button class="btn btn-primary btn-lg new" value="mesa_" id="new_mesa"  data-toggle="modal" data-target=".mesas_modal"> Ingresar nueva mesa</button>
      <div class="panel panel-default">
  <!-- Default panel contents -->
  @include('modal.conf.mesas_modal')
  <div class="panel-heading">Mesas</div>
  <div class="panel-body">
    <div class="table-responsive">

      <table  class="usuariot table display cell-border compact" id="usuariot" >
    <thead>
 
<!-- <th>id_mesa</th> -->
<th data-priority="1">Alias mesa</th>
<th data-priority="1">Estatus</th>
    </thead>
    <tbody>
  @if(!empty($mesas))@foreach($mesas as $mwn)
  
    <tr>
    <!-- <td>{{$mwn->id_mesa}}</td> -->
    <td>{{$mwn->n_mesa}}</td>  
    <td>@if($mwn->estatusm==1)Activo @else Inactiva @endif</td>  
 
  
            <td>

              <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="id_mesaMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    opciones
  </button>
  <div class="dropdown-menu" aria-labelledby="id_mesaMenuButton">
       <a value="{{$mwn->id_mesa}}" id="mesa_" class="vn dropdown-item" data-toggle="modal" data-target="#mesas_modal">Editar</a>
           <a value="{{$mwn->id_mesa}}" id="eli_mesa" class="vne dropdown-item" data-toggle="modal" data-target="#elimu">Baja</a> 
  </div>
</div>
         
      </td>

      </tr>
      
      @endforeach
      @endif
 
    </tbody>
  </table>
</div><!--tabla responsiva div  -->
</div>
</div>

<!-- div home-->
    </div>
      <!-- provee -->
  <div id="menu" class="tab-pane fade in">
      
   @include('modal.conf.menu_modal')
        <button class="btn btn-primary btn-lg new" value="idmenu_" id="new_menu" data-toggle="modal" data-target="#menu_modal"> Ingresar menu</button>
       <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">menu</div>
  <div class="panel-body">
      <table  class="proveemt table display cell-border compact" id="proveemt">
    <thead>
<!-- <th>idmenu</th> -->

<th>Platillo</th>
<th>de</th>

    </thead>
    <tbody>
  @if(!empty($menu))@foreach($menu as $mwn)
  
    <tr>
    <!-- <td>{{$mwn->idmenu}}</td> -->
  
    <td>{{$mwn->tipoa->n_tipoart}}</td>  
   <td>{{$mwn->narticulo}}</td>  
  
            <td>
              <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="idmenuMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    opciones
  </button>
  <div class="dropdown-menu" aria-labelledby="idmenuMenuButton">
     <a value="{{$mwn->idmenu}}" id="idmenu_" class="vn dropdown-item" data-toggle="modal" data-target="#menu_modal">Editar</a>
           <a value="{{$mwn->idmenu}}" id="eli_idmenu" class="vne dropdown-item" data-toggle="modal" data-target="#elimu">Baja</a>  
  </div>
</div>
          
      </td>

      </tr>
      
      @endforeach
      @endif
    </tbody>
  </table>
    </div>
  </div>
</div>
<!-- end -->
  <!-- marca -->
  <div id="tipopre" class="tab-pane fade in">
      
    @include('modal.conf.tipopre_modal')
        <button class="btn btn-primary btn-lg new" value="idtipoprecio_" id="new_tipopre" data-toggle="modal" data-target="#tipopre_modal"> tipopre new</button>
       <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">tipopre</div>
  <div class="panel-body">
      <table  class="marcat table display cell-border compact" id="marcat">
    <thead>
<!-- <th>id_tipoprecio</th> -->
<th>Platillo</th>
<th>Especial/Sencillo</th>
<th>Precio</th>

    </thead>
    <tbody>
    @if(!empty($tipopre))@foreach($tipopre as $tipop)
  
    <tr>
      

    <!-- <td>{{$tipop->id_tipoprecio}}</td> -->
    <td>{{$tipop->amenu->tipoa->n_tipoart}}-{{$tipop->amenu->narticulo}}</td>  
    <td>{{$tipop->pesp->n_senesp}}</td> 
     <td>{{$tipop->precio}}</td>
 
  
            <td>
              <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="id_tipoprecioMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    opciones
  </button>
  <div class="dropdown-menu" aria-labelledby="id_tipoprecioMenuButton">
   <a value="{{$tipop->id_tipoprecio}}" id="idtipoprecio_" class="vn dropdown-item" data-toggle="modal" data-target="#tipopre_modal">Editar</a>
           <a value="{{$tipop->id_tipoprecio}}" id="eli_idmenu" class="vne dropdown-item" data-toggle="modal" data-target="#elimu">Baja</a>  
  </div>
</div>
        
      </td>

      </tr>
      
      @endforeach
      @endif
    </tbody>
  </table>
    </div>
  </div>
</div>
<!-- end -->
  
  <!-- menu 2 -->
  <div id="senesp" class="tab-pane fade in">
      @include('modal.conf.senesp_modal')
  
        <button class="btn btn-primary btn-lg new" value="idsenesp_" id="new_senesp" data-toggle="modal" data-target="#senesp_modal"> Ingresar nueva especialidad o ingrediente extra</button>
       <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">senesp</div>
  <div class="panel-body">
      <table  class="vehiculot table display cell-border compact" id="vehiculot">
    <thead>
<!-- <th>id_senesp</th> -->
<th>Ingrediente extra nombre</th>
<th>Opcion</th>

    </thead>
    <tbody>

     @if(!empty($senesp))@foreach($senesp as $sene)
  
    <tr>
    <!-- <td>{{$sene->id_senesp}}</td> -->
    <td>{{$sene->n_senesp}}</td>  
     
            <td>
              <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="idsenespMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    opciones
  </button>
  <div class="dropdown-menu" aria-labelledby="idsenespMenuButton">
   <a value="{{$sene->id_senesp}}" id="idsenesp_" class="vn dropdown-item" data-toggle="modal" data-target="#senesp_modal">Editar</a>
           <a value="{{$sene->id_senesp}}" id="eli_idsenesp" class="vne dropdown-item" data-toggle="modal" data-target="#elimu">Baja</a>  
  </div>
</div>
           
      </td>

      </tr>
      
      @endforeach
      @endif
    </tbody>
  </table>
    </div>
  </div>
</div>
<!-- end -->
 


<div id="tipoartb" class="tab-pane fade in">
      
      @include('modal.conf.tipoart_modal')
      <button class="btn btn-primary btn-lg new" value="idtipoart_" id="new_tipoart" data-toggle="modal" data-target="#tipoart_modal"> Ingresar tipo de Platillo o bebida</button>
   
    

       <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Sucursal</div>
  <div class="panel-body">
    <div class="table-responsive">
      <table  class="sucurll table display cell-border compact" id="sucurll" >
      <thead>
<!-- <th>id_tipoart</th> -->
<th>Platillos o bebidas</th>
<th></th>
    </thead>
    <tbody>
        @if(!empty($tipoart))@foreach($tipoart as $tipoa)
  
    <tr>
    <!-- <td>{{$tipoa->id_tipoart}}</td> -->
    <td>{{$tipoa->n_tipoart}}</td>  
     
            <td>
              <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="id_tipoartMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    opciones
  </button>
  <div class="dropdown-menu" aria-labelledby="id_tipoartMenuButton">
    <a value="{{$tipoa->id_tipoart}}" id="idtipoart_" class="vn dropdown-item" data-toggle="modal" data-target="#tipoart_modal">Editar</a>
           <a value="{{$tipoa->id_tipoart}}" id="eli_idtipoart" class="vne dropdown-item" data-toggle="modal" data-target="#elimu">Baja</a>  
  </div>
</div>
           
      </td>

      </tr>
      
      @endforeach
      @endif
    </tbody>
  </table>
</div>
</div>
    </div>
   
</div>
<!-- end -->





</div>
</article>



<!--  -->
                
            </div>

     
          
      
      
      </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
   <!--      <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="{{asset('brand/bootstrap-solid.svg')}}" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div> -->
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}" ></script>
    <script src="{{asset('js/boo/bootstrap.bundle.js')}}" ></script>
      <script src="{{asset('js/boo/popper.min.js')}}" ></script>
       <script src="{{asset('selec/js/select2.full.min.js')}}" ></script>
    
 
    <script src="{{asset('js/boo/holder.min.js')}}"></script>
    <script>
$(document).ready(function() {
  console.log("crear el select2");
   $('#menupre').select2({
    width:"100%",
   });
});
      
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });

function pedido(dato,total)
{


}





      $(".pedi").on("click",function(e){
var user_id = $(this).closest("form").attr('id');
           var  formData = new FormData($('#'+user_id+'')[0]);
           var que=$(".iden").val();
           var url="";
           if(que==1)
           {
            url="/"+user_id;
           }else{
            url="/"+user_id+"update";
           }

var data=$('#menuenv').serialize();

          var request = $.ajax({
  url: url,
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

      });

      $(".new").on("click",function(e){

        val=$(this).attr("value");

        $('#'+val+'dide').val("");
        console.log('#'+val+'add');
        $('#'+val+'add')[0].reset();
   $('.iden').val(1).trigger('true');
         $("#menupre").val(null).trigger('change');
      })

$('.vn').on('click',function(e){

e.preventDefault();
var val=$(this).attr("value");
      var tipo=$(this).attr("id");
      console.log(val,tipo);
$('.iden').val(2).trigger('true');
  var viaje =tipo; 
  var url="/"+viaje+"get/"+val+"";

 $( '#tipo' ).val("2"); 
 $('#'+tipo+'dide').val(val);
 var values = {};
 console.log("entrando a "+'#'+viaje+'alta');
console.log(url);
console.log(tipo);
/// ajax
   $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
   $.ajax({
       
        type: "GET",
            url: url,
            data: false,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
        // async:false, //<------This is the option you must add
        success:function(response){
      
      console.log(response);
   $.each(response.uss[0], function(a,b) {
    // console.log(a+':'+b);
    // console.log('#'+a+'');

    if ($('#'+a+'').length > 0 ) 
    {
      console.log("entre a ingresar el valor: #"+a+"");
       $('#'+a+'').val(b);

    }else
    {
      console.log("entre al else: #"+a+'');
      if (a=="idsenesp") 
      {
        $("#senesppre").val(b);
      }
      if (a=="idmenu") 
      {
        $('#menupre').val(b); // Select the option with a value of '1'
$('#menupre').trigger('change'); 
     
      }
    }
   
});
     
console.log("se supone que termino el for");
          

          // console.log(response);
          //   console.log("entre response"+response.uss[0]);
         
          
          
        
        },
        error:function (response){
        console.log(response);
        $('#mmos').hide();
              $('#mmosm').show();
        }
    });

});
    
$('.vne').on('click',function(e){

e.preventDefault();
var val=$(this).attr("value");
      var tipo=$(this).attr("id");
      console.log(val,tipo);
$('.iden').val(2).trigger('true');
  var viaje =tipo; 
  var url="/"+viaje+"/"+val+"";

 $( '#tipo' ).val("2"); 
 $('#'+tipo+'dide').val(val);
 var values = {};
 console.log("entrando a "+'#'+viaje+'alta');
console.log(url);
/// ajax
   $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
   $.ajax({
       
        type: "GET",
            url: url,
            data: false,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
        // async:false, //<------This is the option you must add
        success:function(response){
      
      console.log(response);
   $.each(response.uss[0], function(a,b) {
    console.log(a+':'+b);
    console.log('#'+a+'');

    if ($('#'+a+'').length > 0 ) 
    {
      console.log("entre a ingresar el valor");
       $('#'+a+'').val(b);

    }else
    {
      console.log("entre al else");
    }
   
});
     
console.log("se supone que termino el for");
          

          // console.log(response);
          //   console.log("entre response"+response.uss[0]);
         
          
          
        
        },
        error:function (response){
        console.log(response);
        $('#mmos').hide();
              $('#mmosm').show();
        }
    });

});

$(".caja").on("click",function(e){

  var id=$(this).val();
  var url = "/corte";
                    var windowName = id;//$(this).attr("name");
                    var windowSize = "width=58mm";
 
                    window.open(url, windowName, "toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=500,width=190mm,height=600mm");
 
                    event.preventDefault();



      });
    </script>
  </body>
</html>
