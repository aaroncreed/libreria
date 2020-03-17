@extends('dashboard.main')

@section('content')
<div class="container">
	<div class="card-deck mb-3 text-center">
      
        <div class="container content-area">
            <div class="row">

                <div class="col-12">
              

<ul class="nav nav-pills justify-content-center">
<li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#casaeditorial">casaeditorial</a></li>
  
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#clientes">clientes</a></li>
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#descuentos">descuentos</a></li>
   
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#medidas">medidas</a></li>
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#proveedor">proveedor</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tipocliente">tipo de cliente</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tipocobro">tipo de cobro</a></li>
         <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tipoentrada">tipo de entrada</a></li>
    
        
   
</ul>



            </div>
        </div>
            <!--  -->
  <article>

  <div class="container" style="width: 100% !important;">
  <h2>Configuracion</h2>


 
  <div class="tab-content">

    <div id="casaeditorial" class="tab-pane fade in active show">
      
      

      
     <button class="btn btn-primary btn-lg new" value="casaeditorial_" id="new_casaeditorial"  data-toggle="modal" data-target=".casaeditorial_modal"> Ingresar nueva casaeditorial</button>
      <div class="panel panel-default">
  <!-- Default panel contents -->
    @include('ingresarLibro/modalConfiguracion/casaeditorial_modal')
  <div class="panel-heading">casaeditorial</div>
  <div class="panel-body">
    <div class="table-responsive">

      <table  class="usuariot table display cell-border compact" id="usuariot" >
    <thead>
 
<!-- <th>id_casaEditorial</th> -->
<th data-priority="1">Alias casaeditorial</th>
<th data-priority="1">Descripcion</th>
    </thead>
    <tbody>
  @if(!empty($casaeditorial))@foreach($casaeditorial as $mwn)
  
    <tr>
    <!-- <td>{{$mwn->id_casaEditorial}}</td> -->
    <td>{{$mwn->Clavecasedit}}</td>  
    <td>{{$mwn->Desccasedit}}</td>
    <td>@if($mwn->estatusm==1)Activo @else Inactiva @endif</td>  
 
  
            <td>

              <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="id_casaEditorialMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    opciones
  </button>
  <div class="dropdown-menu" aria-labelledby="id_casaEditorialMenuButton">
       <a value="{{$mwn->id_casaEditorial}}" id="casaeditorial_" class="vn dropdown-item" data-toggle="modal" data-target="#casaeditorial_modal">Editar</a>
           <a value="{{$mwn->id_casaEditorial}}" id="eli_casaeditorial" class="vne dropdown-item" data-toggle="modal" data-target="#elimu">Baja</a> 
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
  <div id="clientes" class="tab-pane fade in">
      
  
        <button class="btn btn-primary btn-lg new" value="clientes_" id="new_clientes" data-toggle="modal" data-target="#clientes_alta"> Ingresar clientes</button>
       <div class="panel panel-default">
  <!-- Default panel contents -->
   @include('ingresarLibro/modalConfiguracion/clientes_modal')
  <div class="panel-heading">Clientes</div>
  <div class="panel-body">
  	<div class="table-responsive">
      <table  class="proveemt table display cell-border compact" id="proveemt">
    <thead>
<!-- <th>idmenu</th> -->
<th>#</th>
<th>Estatus</th>
<th>Razsocial</th>
<th>Apepat</th>
<th>Apemat</th>
<th>Nombre</th>
<th>Domicilio</th>
<th>Codpostal</th>
<th>Municipio</th>
<th>Colonia</th>
<th>Estado</th>
<th>Telefono</th>
<th>RFC</th>
<th>Email</th>
<th>Fecalta</th>
<th>Fecultventa</th>
<th>Diascre</th>
<th>Limitecre</th>

    </thead>
    <tbody>
  @if(!empty($clientes))@foreach($clientes as $mwn)
  
    <tr>
    <!-- <td>{{$mwn->idmenu}}</td> -->
     <td>
              <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="clientesMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    opciones
  </button>
  <div class="dropdown-menu" aria-labelledby="clientesMenuButton">
     <a value="{{$mwn->id_claveCliente }}" id="clientes_" class="vn dropdown-item" data-toggle="modal" data-target="#clientes_modal">Editar</a>
           <a value="{{$mwn->id_claveCliente }}" id="eli_clientes" class="vne dropdown-item" data-toggle="modal" data-target="#elimu">Baja</a>  
  </div>
</div>
          
      </td>
      <td>{{$mwn->estatusm == 1 ? "Activo" : "Baja"}}</td>  
   <td>{{$mwn->Razsocial}}</td>
<td>{{$mwn->Apepat}}</td>
<td>{{$mwn->Apemat}}</td>
<td>{{$mwn->Nombre}}</td>
<td>{{$mwn->Domicilio}}</td>
<td>{{$mwn->Codpostal}}</td>
<td>{{$mwn->Municipio}}</td>
<td>{{$mwn->Colonia}}</td>
<td>{{$mwn->Estado}}</td>
<td>{{$mwn->Telefono}}</td>
<td>{{$mwn->RFC}}</td>
<td>{{$mwn->Email}}</td>
<td>{{$mwn->Fecalta}}</td>
<td>{{$mwn->Fecultventa}}</td>
<td>{{$mwn->Diascre}}</td>
<td>{{$mwn->Limitecre}}</td>

         

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
  <!-- marca -->
  <div id="descuentos" class="tab-pane fade in">
      
   
        <button class="btn btn-primary btn-lg new" value="descuentos_" id="new_descuentos" data-toggle="modal" data-target=".descuentos_modal"> descuentos new</button>
       <div class="panel panel-default">
  <!-- Default panel contents -->
  @include('ingresarLibro/modalConfiguracion/descuentos_modal')
  <div class="panel-heading">descuentos</div>
  <div class="panel-body">
      <table  class="marcat table display cell-border compact" id="marcat">
    <thead>
<!-- <th>id_descuento</th> -->
<th>TipoDesc</th>
 <th>Tipocli</th>
 <th>Descuento</th>
 <th>Usralta</th>

    </thead>
    <tbody>
    @if(!empty($descuentos))
    @foreach($descuentos as $tipop)
  
    <tr>
      

<td>{{$tipop->TipoDesc}}</td>
<td>{{$tipop->Tipocli}}</td>
<td>{{$tipop->Descuento}}</td>
<td>{{$tipop->Usralta}}</td>
  <td>{{$tipop->estatusm == 1 ? "Activo" : "Baja"}}</td>  	

 
  
            <td>
              <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="id_descuentoMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    opciones
  </button>
  <div class="dropdown-menu" aria-labelledby="id_descuentoMenuButton">
   <a value="{{$tipop->id_descuento}}" id="descuentos_" class="vn dropdown-item" data-toggle="modal" data-target="#descuentos_modal">Editar</a>
           <a value="{{$tipop->id_descuento}}" id="eli_descuento" class="vne dropdown-item" data-toggle="modal" data-target="#elimu">Baja</a>  
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
  <div id="medidas" class="tab-pane fade in">
     
  
        <button class="btn btn-primary btn-lg new" value="medidas_" id="new_medidas" data-toggle="modal" data-target=".medidas_modal"> Ingresar medidas</button>
       <div class="panel panel-default">
  <!-- Default panel contents -->
  @include('ingresarLibro/modalConfiguracion/medidas_modal')
  <div class="panel-heading">medidas</div>
  <div class="panel-body">
      <table  class="vehiculot table display cell-border compact" id="vehiculot">
    <thead>
<!-- <th>id_medidas</th> -->
<th>Clavemed</th>
<th>Descmed</th>
<th></th>
<th></th>

    </thead>
    <tbody>

     @if(!empty($medidas))@foreach($medidas as $sene)
  
    <tr>
    <!-- <td>{{$sene->id_medidas}}</td> -->
    <td>{{$sene->Clavemed}}</td> 
    <td>{{$sene->Descmed}}</td>  
     <td>{{$sene->estatusm == 1 ? "Activo" : "Baja"}}</td>  	
     
            <td>
              <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="idmedidasMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    opciones
  </button>
  <div class="dropdown-menu" aria-labelledby="idmedidasMenuButton">
   <a value="{{$sene->id_medida }}" id="medidas_" class="vn dropdown-item" data-toggle="modal" data-target="#medidas_modal">Editar</a>
           <a value="{{$sene->id_medida }}" id="eli_medidas" class="vne dropdown-item" data-toggle="modal" data-target="#elimu">Baja</a>  
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
 


<div id="proveedor" class="tab-pane fade in">
      
     
      <button class="btn btn-primary btn-lg new" value="proveedor_" id="new_proveedor" data-toggle="modal" data-target=".proveedor_modal"> Ingresar nuevo proveedor</button>
   
    

       <div class="panel panel-default">
  <!-- Default panel contents -->
    @include('ingresarLibro/modalConfiguracion/proveedor_modal')
  <div class="panel-heading">Proveedor</div>
  <div class="panel-body">
    <div class="table-responsive">
      <table  class="sucurll table display cell-border compact" id="sucurll" >
      <thead>
<!-- <th>id_proveedor</th> -->
<th></th>
<th></th>
<th>"Claveprov"</th>
<th>"Empresa"</th>
<th>"Contacto"</th>
<th>"Domicilio"</th>
<th>"Codpostal"</th>
<th>"Municipio"</th>
<th>"Ciudad"</th>
<th>"Estado"</th>
<th>"Telefono"</th>
<th>"RFC"</th>
<th>"Curp"</th>
<th>"Email"</th>
<th>"Fecultcomp"</th>
<th>"Montoactual"</th>
<th>"Fecalta"</th>
<th></th>
    </thead>
    <tbody>
        @if(!empty($proveedor))@foreach($proveedor as $tipopr)
  
    <tr>
   
 
            <td>
              <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="id_proveedorMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    opciones
  </button>
  <div class="dropdown-menu" aria-labelledby="id_proveedorMenuButton">
    <a value="{{$tipopr->id_proveedor}}" id="proveedor_" class="vn dropdown-item" data-toggle="modal" data-target="#proveedor_modal">Editar</a>
           <a value="{{$tipopr->id_proveedor}}" id="eli_proveedor" class="vne dropdown-item" data-toggle="modal" data-target="#elimu">Baja</a>  
  </div>
</div>
           
      </td>
<td>{{$tipopr->estatusm==1 ? "Activo" : "Baja"}}</td>
<td>{{$tipopr->Claveprov}}</td>
<td>{{$tipopr->Empresa}}</td>
<td>{{$tipopr->Contacto}}</td>
<td>{{$tipopr->Domicilio}}</td>
<td>{{$tipopr->Codpostal}}</td>
<td>{{$tipopr->Municipio}}</td>
<td>{{$tipopr->Ciudad}}</td>
<td>{{$tipopr->Estado}}</td>
<td>{{$tipopr->Telefono}}</td>
<td>{{$tipopr->RFC}}</td>
<td>{{$tipopr->Curp}}</td>
<td>{{$tipopr->Email}}</td>
<td>{{$tipopr->Fecultcomp}}</td>
<td>{{$tipopr->Montoactual}}</td>
<td>{{$tipopr->Fecalta}}</td>

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


<div id="tipocliente" class="tab-pane fade in">
      
     
      <button class="btn btn-primary btn-lg new" value="tipocliente_" id="new_tipocliente" data-toggle="modal" data-target=".tipocliente_modal"> Ingresar nuevo tipo de cliente</button>
   
    

       <div class="panel panel-default">
  <!-- Default panel contents -->
    @include('ingresarLibro/modalConfiguracion/tipocliente_modal')
  <div class="panel-heading">Tipo Cliente</div>
  <div class="panel-body">
    <div class="table-responsive">
      <table  class="sucurll table display cell-border compact" id="sucurll" >
      <thead>
<!-- <th>id_proveedor</th> -->

<th>'TipoCli'</th>
<th>'Desctipo'</th>
<th>'Usralta'</th>
<th></th>
<th></th>
    </thead>
    <tbody>
        @if(!empty($tipoCliente))@foreach($tipoCliente as $tipoclient)
  
    <tr>
   <td>{{$tipoclient->TipoCli}}</td>
<td>{{$tipoclient->Desctipo}}</td>
<td>{{$tipoclient->Usralta}}</td>

 <td>{{$tipoclient->estatusm==1 ? "Activo" : "Baja"}}</td>

            <td>
              <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="id_tipoclienteMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    opciones
  </button>
  <div class="dropdown-menu" aria-labelledby="id_tipoclienteMenuButton">
    <a value="{{$tipoclient->id_tipoCliente}}" id="tipocliente_" class="vn dropdown-item" data-toggle="modal" data-target="#tipocliente_modal">Editar</a>
           <a value="{{$tipoclient->id_tipoCliente}}" id="eli_tipocliente" class="vne dropdown-item" data-toggle="modal" data-target="#elimu">Baja</a>  
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


<div id="tipocobro" class="tab-pane fade in">
      
     
      <button class="btn btn-primary btn-lg new" value="tipocobro_" id="new_tipocobro" data-toggle="modal" data-target=".tipocobro_modal"> Ingresar nuevo tipo de cliente</button>
   
    

       <div class="panel panel-default">
  <!-- Default panel contents -->
    @include('ingresarLibro/modalConfiguracion/tipocobro_modal')
  <div class="panel-heading">Tipo Cliente</div>
  <div class="panel-body">
    <div class="table-responsive">
      <table  class="sucurll table display cell-border compact" id="sucurll" >
      <thead>
<!-- <th>id_proveedor</th> -->

<th>'TipoCobro'</th>
<th>'Desccobro'</th>
<th>'Usralta'</th>
<th></th>
<th></th>
    </thead>
    <tbody>
        @if(!empty($tipocobro))@foreach($tipocobro as $tipoco)
  
    <tr>
   <td>{{$tipoco->TipoCobro}}</td>
<td>{{$tipoco->Desccobro}}</td>
<td>{{$tipoco->Usralta}}</td>

 <td>{{$tipoco->estatusm==1 ? "Activo" : "Baja"}}</td>

            <td>
              <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="id_tipoCobroMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    opciones
  </button>
  <div class="dropdown-menu" aria-labelledby="id_tipoCobroMenuButton">
    <a value="{{$tipoco->id_tipoCobro}}" id="tipocobro_" class="vn dropdown-item" data-toggle="modal" data-target="#tipocobro_modal">Editar</a>
           <a value="{{$tipoco->id_tipoCobro}}" id="eli_tipocobro" class="vne dropdown-item" data-toggle="modal" data-target="#elimu">Baja</a>  
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
<div id="tipoentrada" class="tab-pane fade in">
      
     
      <button class="btn btn-primary btn-lg new" value="tipoentrada_" id="new_tipoentrada" data-toggle="modal" data-target=".tipoentrada_modal"> Ingresar nuevo tipo de cliente</button>
   
    

       <div class="panel panel-default">
  <!-- Default panel contents -->
    @include('ingresarLibro/modalConfiguracion/tipoentrada_modal')
  <div class="panel-heading">Tipo Cliente</div>
  <div class="panel-body">
    <div class="table-responsive">
      <table  class="sucurll table display cell-border compact" id="sucurll" >
      <thead>
<!-- <th>id_proveedor</th> -->

<th>'Tipoent'</th>
<th>'Desctipent'</th>
<th>'Usralta'</th>
<th></th>
<th></th>
    </thead>
    <tbody>
        @if(!empty($tipoentrada))@foreach($tipoentrada as $tipocos)
  
    <tr>
   <td>{{$tipocos->Tipoent}}</td>
<td>{{$tipocos->Desctipent}}</td>
<td>{{$tipocos->Usralta}}</td>

 <td>{{$tipocos->estatusm==1 ? "Activo" : "Baja"}}</td>

            <td>
              <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="id_tipoEntradaMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    opciones
  </button>
  <div class="dropdown-menu" aria-labelledby="id_tipoEntradaMenuButton">
    <a value="{{$tipocos->id_tipoEntrada}}" id="tipoentrada_" class="vn dropdown-item" data-toggle="modal" data-target="#tipoentrada_modal">Editar</a>
           <a value="{{$tipocos->id_tipoEntrada}}" id="eli_tipoentrada" class="vne dropdown-item" data-toggle="modal" data-target="#elimu">Baja</a>  
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
<script type="text/javascript">
$(document).ready(function() {
	 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  console.log("crear el select2");
   $('#menupre').selectize({
    sortField:'text',
   });
});
      
      // Holder.addTheme('thumb', {
      //   bg: '#55595c',
      //   fg: '#eceeef',
      //   text: 'Thumbnail'
      // });

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
//       if (a=="idmedidas") 
//       {
//         $("#medidaspre").val(b);
//       }
//       if (a=="idmenu") 
//       {
//         $('#menupre').val(b); // Select the option with a value of '1'
// $('#menupre').trigger('change'); 
     
//       }
    }

   
});
     $('#'+viaje+'alta').modal("show");
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

	@endsection
