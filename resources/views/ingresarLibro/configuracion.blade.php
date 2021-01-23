@extends('dashboard.main')

@section('content')
<div class="container">
    <h2 class="text-center">Configuracion</h2>
	<div class="card-deck mb-3 text-center">
      

<!-- chales -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="casaeditorial-tab" data-toggle="tab" href="#casaeditorial" role="tab" aria-controls="home" aria-selected="true">Home</a>
  </li>
 
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="clientes-tab" data-toggle="tab"  role="tab" aria-controls="contact" aria-selected="false" href="#clientes" >clientes</a>
   </li>
   <li class="nav-item" role="presentation">
   <a class="nav-link" id="descuentos-tab" data-toggle="tab"  role="tab" aria-controls="contact" aria-selected="false" href="#descuentos" >descuentos</a>
   </li>
   <li class="nav-item" role="presentation">
   <a class="nav-link" id="medidas-tab" data-toggle="tab"  role="tab" aria-controls="contact" aria-selected="false" href="#medidas" >medidas</a>
   </li>
   <li class="nav-item" role="presentation">
    <a class="nav-link" id="proveedor-tab" data-toggle="tab"  role="tab" aria-controls="contact" aria-selected="false" href="#proveedor" >proveedor</a>
   </li>
   <li class="nav-item" role="presentation">
    <a class="nav-link" id="tipocliente-tab" data-toggle="tab"  role="tab" aria-controls="contact" aria-selected="false" href="#tipocliente" >tipocliente</a>
   </li>
   <li class="nav-item" role="presentation">
    <a class="nav-link" id="tipocobro-tab" data-toggle="tab"  role="tab" aria-controls="contact" aria-selected="false" href="#tipocobro" >tipocobro</a>
   </li>
   <li class="nav-item" role="presentation">
   <a class="nav-link" id="tipoentrada-tab" data-toggle="tab"  role="tab" aria-controls="contact" aria-selected="false" href="#tipoentrada" >tipoentrada</a>
  </li>
</ul>
<!-- <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade  show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div> -->
<!--  -->


  <div  class="tab-content container" id="myTabContent" style="width: 100% !important;">



 


    <div id="casaeditorial" class="tab-pane active"  role="tabpanel" aria-labelledby="casaeditorial-tab">
      
      

      
     <button class="btn btn-primary btn-lg new" tabla-actual="usuariot" value="casaeditorial_" id="new_casaeditorial"  data-toggle="modal" data-target=".casaeditorial_modal"> Ingresar nueva casaeditorial</button>
      <div class="panel panel-default">
  <!-- Default panel contents -->
    @include('ingresarLibro/modalConfiguracion/casaeditorial_modal')
  <div class="panel-heading">casaeditorial</div>
  <div class="panel-body">
    <div class="table-responsive" >

      <table data-toggle="table" data-pagination="true"   data-page-size="5"  data-height="428"
  data-search="true" data-locale="es-MX"  class="usuariot table display cell-border compact" id="usuariot" 
   data-url="/obtenerEditorialTabla">
    <thead>
 
<!-- <th></th> -->
<th data-field="Clavecasedit">Alias casaeditorial</th>
<th data-field="Desccasedit">Descripcion</th>
<th data-field="estatusm">Estatus</th>
<th data-field="id_casaEditorial" data-formatter="operateFormatter" data-events="operateEvents"></th>
    </thead>
    <tbody>
  @if(!empty($casaeditorial))@foreach($casaeditorial as $mwn)
  
<!--     <tr>

    <td>{{$mwn->Clavecasedit}}</td>  
    <td>{{$mwn->Desccasedit}}</td>
    <td>@if($mwn->estatusm==1)Activo @else Inactiva @endif</td>  
 
  
            <td>

   
  
       <a value="{{$mwn->id_casaEditorial}}" tipo="casaeditorial_" class="vn btn btn-info " data-toggle="modal" data-target="#casaeditorial_modal">Editar</a>
           <a value="{{$mwn->id_casaEditorial}}" tipo="eli_casaeditorial" class="vne btn btn-info " data-toggle="modal" data-target="#elimu">Baja</a> 

      </td>

      </tr> -->
      
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
  <div id="clientes" class="tab-pane " role="tabpanel" aria-labelledby="clientes-tab">
      
  
        <button class="btn btn-primary btn-lg new" value="clientes_" tabla-actual="proveemt" id="new_clientes" data-toggle="modal" data-target="#clientes_alta"> Ingresar clientes</button>
       <div class="panel panel-default">
  <!-- Default panel contents -->
   @include('ingresarLibro/modalConfiguracion/clientes_modal')
  <div class="panel-heading">Clientes</div>
  <div class="panel-body">
  	<div class="table-responsive" >
      <table data-toggle="table" data-pagination="true"   data-page-size="5"  data-height="428"
  data-search="true" data-locale="es-MX"  data-url="/clientes_get_all" class="proveemt table display cell-border compact" id="proveemt" >
    <thead>

<th data-field="id_claveCliente" data-formatter="clienteFormatter" data-events="clienteFormatterEvent"></th>
<th data-field="estatusm">Estatus</th>
<th data-field="Razsocial">Razsocial</th>
<th data-field='Apemat'>Apemat</th>
<th data-field='Nombre'>Nombre</th>
<th data-field='Domicilio'>Domicilio</th>
<th data-field='Codpostal'>Codpostal</th>
<th data-field='Municipio'>Municipio</th>
<th data-field='Colonia'>Colonia</th>
<th data-field='Estado'>Estado</th>
<th data-field='Telefono'>Telefono</th>
<th data-field='RFC'>RFC</th>
<th data-field='Email'>Email</th>
<th data-field='Fecalta'>Fecalta</th>
<th data-field='Fecultventa'>Fecultventa</th>
<th data-field='Diascre'>Diascre</th>
<th data-field='Limitecre'>Limitecre</th>



    </thead>
    <tbody>
  @if(!empty($clientes))@foreach($clientes as $mwn)
  
    <tr>
    <!-- <td>{{$mwn->idmenu}}</td> -->
<!--      <td>
        


          
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
       -->
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
  <div id="descuentos" class="tab-pane " role="tabpanel" aria-labelledby="descuentos-tab">
      
   
        <button class="btn btn-primary btn-lg new" tabla-actual="marcat" value="descuentos_" id="new_descuentos" data-toggle="modal" data-target=".descuentos_modal"> descuentos new</button>
       <div class="panel panel-default">
  <!-- Default panel contents -->
  @include('ingresarLibro/modalConfiguracion/descuentos_modal')
  <div class="panel-heading">descuentos</div>
  <div class="panel-body" >
      <table data-toggle="table" data-pagination="true"   data-page-size="5"  data-height="428"
  data-search="true" data-locale="es-MX"  class="marcat table display cell-border compact"  data-url="/todosDescuentos"  id="marcat" >
    <thead>
<!-- "id_descuento"
"TipoDesc", "Tipocli", "Descuento", "Usralta","estatusm" -->
  <th data-field="TipoDesc">TipoDesc</th>
 <th data-field="Tipocli">Tipocli</th>
 <th data-field="Descuento">Descuento</th>
 <th data-field="Usralta">Usralta</th>
 <th data-field="estatusm">estatusm</th>
 <th data-field="id_descuento" data-formatter="descuentosFormatter" data-events="descuentosFormatterEvent"></th>

    </thead>
    <tbody>
    @if(!empty($descuentos))
    @foreach($descuentos as $tipop)
  
 <!--    <tr>
      

<td>{{$tipop->TipoDesc}}</td>
<td>{{$tipop->Tipocli}}</td>
<td>{{$tipop->Descuento}}</td>
<td>{{$tipop->Usralta}}</td>
  <td>{{$tipop->estatusm == 1 ? "Activo" : "Baja"}}</td>  	

 
  
            <td>

   <a value="{{$tipop->id_descuento}}" tipo="descuentos_" class="vn btn btn-info " data-toggle="modal" data-target="#descuentos_modal">Editar</a>
           <a value="{{$tipop->id_descuento}}" tipo="eli_descuento" class="vne btn btn-info " data-toggle="modal" data-target="#elimu">Baja</a>  

        
      </td>

      </tr> -->
      
      @endforeach
      @endif
    </tbody>
  </table>
    </div>
  </div>
</div>
<!-- end -->
  
  <!-- menu 2 -->
  <div id="medidas" class="tab-pane " role="tabpanel" aria-labelledby="medidas-tab">
     
  
        <button class="btn btn-primary btn-lg new" tabla-actual="vehiculot" value="medidas_" id="new_medidas" data-toggle="modal" data-target=".medidas_modal"> Ingresar medidas</button>
       <div class="panel panel-default">
  <!-- Default panel contents -->
  @include('ingresarLibro/modalConfiguracion/medidas_modal')
  <div class="panel-heading">medidas</div>
  <div class="panel-body" >
      <table data-toggle="table" data-pagination="true"   data-page-size="5"  data-height="428"
  data-search="true" data-locale="es-MX"   data-url="/medidasTodas" class="vehiculot table display cell-border compact" id="vehiculot" >
    <thead>

<th data-field="Clavemed">Clavemed</th>
<th data-field="Descmed">Descmed</th>
 <th data-field="estatusm">estatusm</th>
<th data-field="id_medida" data-formatter="medidasFormatter" data-events="medidasFormatterEvent"></th>
    </thead>
    <tbody>

     @if(!empty($medidas))@foreach($medidas as $sene)
  
<!--     <tr>
    
    <td>{{$sene->Clavemed}}</td> 
    <td>{{$sene->Descmed}}</td>  
     <td>{{$sene->estatusm == 1 ? "Activo" : "Baja"}}</td>  	
     
            <td>
           
   <a value="{{$sene->id_medida }}" tipo="medidas_" class="vn btn btn-info " data-toggle="modal" data-target="#medidas_modal">Editar</a>
           <a value="{{$sene->id_medida }}" tipo="eli_medidas" class="vne btn btn-info " data-toggle="modal" data-target="#elimu">Baja</a>  

           
      </td>

      </tr> -->
      
      @endforeach
      @endif
    </tbody>
  </table>
    </div>
  </div>
</div>
<!-- end -->
 


<div id="proveedor" class="tab-pane " role="tabpanel" aria-labelledby="proveedor-tab">
      
     
      <button class="btn btn-primary btn-lg new" tabla-actual="sucurll" value="proveedor_" id="new_proveedor" data-toggle="modal" data-target=".proveedor_modal"> Ingresar nuevo proveedor</button>
   
    

       <div class="panel panel-default">
  <!-- Default panel contents -->
    @include('ingresarLibro/modalConfiguracion/proveedor_modal')
  <div class="panel-heading">Proveedor</div>
  <div class="panel-body">
    <div class="table-responsive" >
      <table data-toggle="table" data-pagination="true"   data-page-size="5"  data-height="428"
  data-search="true" data-locale="es-MX" data-url="/proveedorTodas"   class="sucurll table display cell-border compact" id="sucurll" >
      <thead>
<!-- <th>id_proveedor</th> -->
<th data-field="id_proveedor" data-formatter="proveedorFormatter" data-events="proveedorFormatterEvent"></th>
 <th data-field="estatusm">estatusm</th>
<th data-field="Claveprov" >"Claveprov"</th>
<th data-field="Empresa" >"Empresa"</th>
<th data-field="Contacto" >"Contacto"</th>
<th data-field="Domicilio" >"Domicilio"</th>
<th data-field="Codpostal" >"Codpostal"</th>
<th data-field="Municipio" >"Municipio"</th>
<th data-field="Ciudad" >"Ciudad"</th>
<th data-field="Estado" >"Estado"</th>
<th data-field="Telefono" >"Telefono"</th>
<th data-field="RFC" >"RFC"</th>
<th data-field="Curp" >"Curp"</th>
<th data-field="Email" >"Email"</th>
<th data-field="Fecultcomp" >"Fecultcomp"</th>
<th data-field="Montoactual" >"Montoactual"</th>
<th data-field="Fecalta" >"Fecalta"</th>

    </thead>
    <tbody>
        @if(!empty($proveedor))@foreach($proveedor as $tipopr)
  
<!--     <tr>
   
 
            <td>
    
    <a value="{{$tipopr->id_proveedor}}" tipo="proveedor_" class="vn btn btn-info " data-toggle="modal" data-target=".proveedor_modal">Editar</a>
           <a value="{{$tipopr->id_proveedor}}" tipo="eli_proveedor" class="vne btn btn-info " data-toggle="modal" data-target="#elimu">Baja</a>  

           
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

      </tr> -->
      
      @endforeach
      @endif
    </tbody>
  </table>
</div>
</div>
    </div>
   
</div>
<!-- end -->


<div id="tipocliente" class="tab-pane " role="tabpanel" aria-labelledby="tipocliente-tab">
      
     
      <button class="btn btn-primary btn-lg new"  tabla-actual="tipoClienteTabla" value="tipocliente_" id="new_tipocliente" data-toggle="modal" data-target=".tipocliente_modal"> Ingresar nuevo tipo de cliente</button>
   
    

       <div class="panel panel-default">
  <!-- Default panel contents -->
    @include('ingresarLibro/modalConfiguracion/tipocliente_modal')
  <div class="panel-heading">Tipo Cliente</div>
  <div class="panel-body">
    <div class="table-responsive" >
      <table data-toggle="table" data-pagination="true"   data-page-size="5"  data-height="428"
  data-search="true" data-locale="es-MX" data-url="/tipoClienteTablaTodas"  class="tipoClienteTabla table display cell-border compact" id="tipoClienteTabla"  >
      <thead>
<!-- <th>'TipoCli','Desctipo','Usralta',''</th> -->
<th data-field="id_tipoCliente" data-formatter="tipoClienteFormatter" data-events="tipoClienteFormatterEvent"></th>
<th data-field='TipoCli'>'TipoCli'</th>
<th data-field='Desctipo'>'Desctipo'</th>
<th data-field='Usralta'>'Usralta'</th>
<th data-field="estatusm">estatusm</th>

    </thead>
    <tbody>
        @if(!empty($tipoCliente))@foreach($tipoCliente as $tipoclient)
  
<!--     <tr>
   <td>{{$tipoclient->TipoCli}}</td>
<td>{{$tipoclient->Desctipo}}</td>
<td>{{$tipoclient->Usralta}}</td>

 <td>{{$tipoclient->estatusm==1 ? "Activo" : "Baja"}}</td>

            <td>
  
    <a value="{{$tipoclient->id_tipoCliente}}" tipo="tipocliente_" class="vn btn btn-info " data-toggle="modal" data-target="#tipocliente_modal">Editar</a>
           <a value="{{$tipoclient->id_tipoCliente}}" tipo="eli_tipocliente" class="vne btn btn-info " data-toggle="modal" data-target="#elimu">Baja</a>  

           
      </td>


      </tr> -->
      
      @endforeach
      @endif
    </tbody>
  </table>
</div>
</div>
    </div>
   
</div>
<!-- end -->


<div id="tipocobro" class="tab-pane " role="tabpanel" aria-labelledby="tipocobro-tab">
      
     
      <button class="btn btn-primary btn-lg new" tabla-actual="tipocobroTabla" value="tipocobro_" id="new_tipocobro" data-toggle="modal" data-target=".tipocobro_modal"> Ingresar nuevo tipo de cliente</button>
   
    

       <div class="panel panel-default">
  <!-- Default panel contents -->
    @include('ingresarLibro/modalConfiguracion/tipocobro_modal')
  <div class="panel-heading">Tipo Cobro</div>
  <div class="panel-body">
    <div class="table-responsive" >
      <table data-toggle="table" data-pagination="true"   data-page-size="5"  data-height="428"
  data-search="true" data-locale="es-MX" data-url="/tipocobroTablaTodas"   class="tipocobroTabla table display cell-border compact" id="tipocobroTabla"  >
      <thead>
<!-- <th>id_proveedor</th> -->

<th data-field="TipoCobro">'TipoCobro'</th>
<th data-field="Desccobro">'Desccobro'</th>
<th data-field="Usralta">'Usralta'</th>
<th data-field="estatusm">estatusm</th>
<th data-field="id_tipoCobro" data-formatter="tipoCobroFormatter" data-events="tipoCobroFormatterEvent"></th>
    </thead>
    <tbody>
        @if(!empty($tipocobro))@foreach($tipocobro as $tipoco)
  
<!--     <tr>
   <td>{{$tipoco->TipoCobro}}</td>
<td>{{$tipoco->Desccobro}}</td>
<td>{{$tipoco->Usralta}}</td>

 <td>{{$tipoco->estatusm==1 ? "Activo" : "Baja"}}</td>

            <td>
     

    <a value="{{$tipoco->id_tipoCobro}}" tipo="tipocobro_" class="vn btn btn-info " data-toggle="modal" data-target="#tipocobro_modal">Editar</a>
           <a value="{{$tipoco->id_tipoCobro}}" tipo="eli_tipocobro" class="vne btn btn-info " data-toggle="modal" data-target="#elimu">Baja</a>  

           
      </td>


      </tr> -->
      
      @endforeach
      @endif
    </tbody>
  </table>
</div>
</div>
    </div>
   
</div>
<!-- end -->
<div id="tipoentrada" class="tab-pane " role="tabpanel" aria-labelledby="tipoentrada-tab">
      
     
      <button class="btn btn-primary btn-lg new" tabla-actual="tipoentradaTabla" value="tipoentrada_" id="new_tipoentrada" data-toggle="modal" data-target=".tipoentrada_modal"> Ingresar nuevo tipo de cliente</button>
   
    

       <div class="panel panel-default">
  <!-- Default panel contents -->
    @include('ingresarLibro/modalConfiguracion/tipoentrada_modal')
  <div class="panel-heading">Tipo Entrada</div>
  <div class="panel-body">
    <div class="table-responsive" >
      <table data-toggle="table" data-pagination="true"   data-page-size="5"  data-height="428"
  data-search="true" data-locale="es-MX" data-url="/tipoentradaTablaTodas"  class="tipoentradaTabla table display cell-border compact" id="tipoentradaTabla" >
      <thead>
<!-- Desctipent: "Solicitud Especial"
Tipoent: "7"
Usralta: "6"
estatusm: "Baja"
id_tipoEntrada: 6 -->
<!-- <th data-field="id_tipoEntrada" data-formatter="tipoentradaFormatter" data-events="tipoentradaFormatterEvent"> </th> -->
<th data-field="id_tipoEntrada" data-formatter="tipoEntradasFormatter" data-events="tipoEntradasFormatterEvent"></th>
<th  data-field="Tipoent">'Tipoent'</th>
<th  data-field="Desctipent">'Desctipent'</th>
<th  data-field="Usralta">'Usralta'</th>
<th data-field="estatusm">estatusm</th>

    </thead>
    <tbody>
        @if(!empty($tipoentrada))
        @foreach($tipoentrada as $tipocos)
  
 <!--    <tr>
   <td>{{$tipocos->Tipoent}}</td>
<td>{{$tipocos->Desctipent}}</td>
<td>{{$tipocos->Usralta}}</td>

 <td>{{$tipocos->estatusm==1 ? "Activo" : "Baja"}}</td>

            <td>

    <a value="{{$tipocos->id_tipoEntrada}}" tipo="tipoentrada_" class="vn btn btn-info " data-toggle="modal" data-target="#tipoentrada_modal">Editar</a>
           <a value="{{$tipocos->id_tipoEntrada}}" tipo="eli_tipoentrada" class="vne btn btn-info " data-toggle="modal" data-target="#elimu">Baja</a>  

           
      </td>


      </tr> -->
      
      @endforeach
      @endif
    </tbody>
  </table>
</div>
</div>
    </div>
   
</div>
<!-- end -->





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
  const baseUrl = window.location.origin;
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



$('.vn').on('click',function(e){
// alert("aqui");
e.preventDefault();
var val=$(this).attr("value");
      var tipo=$(this).attr("tipo");
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
      if ($('#'+a+'p').length > 0 ) 
       {
         $('#'+a+'p').val(b);
       }
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
      var tipo=$(this).attr("tipo");
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
       if ($('#'+a+'p').length > 0 ) 
       {
         $('#'+a+'p').val(b);
       }
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


    $(".pedi").on("click",function(e){
var user_id = $(this).closest("form").attr('id');
           var  formData = new FormData($('#'+user_id+'')[0]);
           var que=$(".iden").val();
           var url="";
           let tablaActual=$(".iden").attr("tabla-actual")
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
  // $( "#log" ).html( msg );
  $('.modal').modal('hide');
  $("#"+tablaActual).bootstrapTable('refresh')

});
 
request.fail(function( jqXHR, textStatus ) {
  alert( "Request failed: " + textStatus );
});

      });

      $(".new").on("click",function(e){

        val=$(this).attr("value");
         let tablaActual=   $(this).attr("tabla-actual")
         $(".iden").attr("tabla-actual",tablaActual)
        $('#'+val+'dide').val("");
        console.log('#'+val+'add');
        $('#'+val+'add')[0].reset();
   $('.iden').val(1).trigger('true');
         $("#menupre").val(null).trigger('change');
      })


});
      
      // Holder.addTheme('thumb', {
      //   bg: '#55595c',
      //   fg: '#eceeef',
      //   text: 'Thumbnail'
      // });

function pedido(dato,total)
{


}



  function operateFormatter(value, row, index) {
    return [
      // '<a class="like" href="javascript:void(0)" title="Like">',
      // '<i class="fa fa-heart"></i>',
      // '</a>  ',
      // '<a class="remove" href="javascript:void(0)" title="Remove">',
      // '<i class="fa fa-trash"></i>',
      // '</a>'
      ' <a value="" tipo="casaeditorial_" class="vn btn btn-info " data-toggle="modal" data-target="#casaeditorial_modal">Editar</a>',
           '<a value="" tipo="eli_casaeditorial" class="vne btn btn-info " data-toggle="modal" data-target="#elimu">Baja</a> '
    ].join('')
  }
  function clienteFormatter(value, row, index) {
    return [
      // '<a class="like" href="javascript:void(0)" title="Like">',
      // '<i class="fa fa-heart"></i>',
      // '</a>  ',
      // '<a class="remove" href="javascript:void(0)" title="Remove">',
      // '<i class="fa fa-trash"></i>',
      // '</a>'
           '<a value="" tipo="clientes_" class="vn btn btn-info " data-toggle="modal" data-target="#clientes_modal">Editar</a>',
           '<a value="" tipo="eli_clientes" class="vne btn btn-info " data-toggle="modal" data-target="#elimu">Baja</a> ' 
      
    ].join('')
  }

  function descuentosFormatter(value, row, index) {
    return [
      // '<a class="like" href="javascript:void(0)" title="Like">',
      // '<i class="fa fa-heart"></i>',
      // '</a>  ',
      // '<a class="remove" href="javascript:void(0)" title="Remove">',
      // '<i class="fa fa-trash"></i>',
      // '</a>'
      // ' <a value="" tipo="casaeditorial_" class="vn btn btn-info " data-toggle="modal" data-target="#casaeditorial_modal">Editar</a>',
      //      '<a value="" tipo="eli_casaeditorial" class="vne btn btn-info " data-toggle="modal" data-target="#elimu">Baja</a> '
             '<a value="" tipo="descuentos_" class="vn btn btn-info " data-toggle="modal" data-target="#descuentos_modal">Editar</a>',
           '<a value="" tipo="eli_descuento" class="vne btn btn-info " data-toggle="modal" data-target="#elimu">Baja</a>'  
    ].join('')
  }
  function medidasFormatter(value, row, index) {
    return [
      // '<a class="like" href="javascript:void(0)" title="Like">',
      // '<i class="fa fa-heart"></i>',
      // '</a>  ',
      // '<a class="remove" href="javascript:void(0)" title="Remove">',
      // '<i class="fa fa-trash"></i>',
      // '</a>'
    '<a value="" tipo="medidas_" class="vn btn btn-info " data-toggle="modal" data-target="#medidas_modal">Editar</a>',
           '<a value="" tipo="eli_medidas" class="vne btn btn-info " data-toggle="modal" data-target="#elimu">Baja</a>'  
    ].join('')
  }
  function proveedorFormatter(value, row, index) {
    return [
      // '<a class="like" href="javascript:void(0)" title="Like">',
      // '<i class="fa fa-heart"></i>',
      // '</a>  ',
      // '<a class="remove" href="javascript:void(0)" title="Remove">',
      // '<i class="fa fa-trash"></i>',
      // '</a>'
    '<a value="" tipo="proveedor_" class="vn btn btn-info " data-toggle="modal" data-target=".proveedor_modal">Editar</a>',
           '<a value="" tipo="eli_proveedor" class="vne btn btn-info " data-toggle="modal" data-target="#elimu">Baja</a>'  
    ].join('')
  }
  function tipoClienteFormatter(value, row, index) {
    return [
      // '<a class="like" href="javascript:void(0)" title="Like">',
      // '<i class="fa fa-heart"></i>',
      // '</a>  ',
      // '<a class="remove" href="javascript:void(0)" title="Remove">',
      // '<i class="fa fa-trash"></i>',
      // '</a>'
       '<a value="" tipo="tipocliente_" class="vn btn btn-info " data-toggle="modal" data-target="#tipocliente_modal">Editar</a>',
           '<a value="" tipo="eli_tipocliente" class="vne btn btn-info " data-toggle="modal" data-target="#elimu">Baja</a>'  
    ].join('')
  }
  function tipoCobroFormatter(value, row, index) {
    return [
      // '<a class="like" href="javascript:void(0)" title="Like">',
      // '<i class="fa fa-heart"></i>',
      // '</a>  ',
      // '<a class="remove" href="javascript:void(0)" title="Remove">',
      // '<i class="fa fa-trash"></i>',
      // '</a>'
      '<a value="" tipo="tipocobro_" class="vn btn btn-info " data-toggle="modal" data-target="#tipocobro_modal">Editar</a>',
           '<a value="" tipo="eli_tipocobro" class="vne btn btn-info " data-toggle="modal" data-target="#elimu">Baja</a>'  
    ].join('')
  }
    function tipoEntradasFormatter(value, row, index) {
    return [
      // '<a class="like" href="javascript:void(0)" title="Like">',
      // '<i class="fa fa-heart"></i>',
      // '</a>  ',
      // '<a class="remove" href="javascript:void(0)" title="Remove">',
      // '<i class="fa fa-trash"></i>',
      // '</a>'
      '<a value="" tipo="tipoentrada_" class="vn btn btn-info " data-toggle="modal" data-target="#tipoentrada_modal">Editar</a>',
           '<a value="" tipo="eli_tipoentrada" class="vne btn btn-info " data-toggle="modal" data-target="#elimu">Baja</a>'  
    ].join('')
  }
  // function tipoEntradaFormatter(value, row, index) {
  //   return [
  //     // '<a class="like" href="javascript:void(0)" title="Like">',
  //     // '<i class="fa fa-heart"></i>',
  //     // '</a>  ',
  //     // '<a class="remove" href="javascript:void(0)" title="Remove">',
  //     // '<i class="fa fa-trash"></i>',
  //     // '</a>'
  //     '<a value="" tipo="tipoentrada_" class="vn btn btn-info " data-toggle="modal" data-target="#tipoentrada_modal">Editar</a>',
  //          '<a value="" tipo="eli_tipoentrada" class="vne btn btn-info " data-toggle="modal" data-target="#elimu">Baja</a>'  
  //   ].join('')
  // }

function ponerBaja(val,tipo,e,tabla)
{


      
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
       tabla.bootstrapTable('refresh')
   $.each(response.uss[0], function(a,b) {
    console.log(a+':'+b);
    console.log('#'+a+'');

    if ($('#'+a+'').length > 0 ) 
    {
      console.log("entre a ingresar el valor");
       $('#'+a+'').val(b);

    }else
    {
       if ($('#'+a+'p').length > 0 ) 
       {
         $('#'+a+'p').val(b);
       }
      console.log("entre al else");
    }
   
});
     
// console.log("se supone que termino el for");
          

          // console.log(response);
          //   console.log("entre response"+response.uss[0]);
         
        
          
        
        },
        error:function (response){
        console.log(response);
        $('#mmos').hide();
              $('#mmosm').show();
        }
    });


}
  function llenarEditar(val,tipo,e,tabla)
  {

    $('.iden').val(2).trigger('true');
    $(".iden").attr("tabla-actual",tabla)
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
      if ($('#'+a+'p').length > 0 ) 
       {
         $('#'+a+'p').val(b);
       }
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
     // tabla.bootstrapTable('refresh')
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

    }
    window.tipoEntradasFormatterEvent={
               'click .vn': function (e, value, row, index) {
      // alert('You click like action, row: ' + JSON.stringify(row))
      console.log(value, row, index);
            let thisElement=e.currentTarget;
var val=$(thisElement).attr("value");
      var tipo=$(thisElement).attr("tipo");
      let tabla="tipoentradaTabla"
     llenarEditar(value,tipo,e,tabla);



$('.iden').val(2).trigger('true');

    },
    'click .vne': function (e, value, row, index) {
      // $usuariot.bootstrapTable('remove', {
      //   field: 'id',
      //   values: [row.id]
      // })
      let thisElement=e.currentTarget;
var val=$(thisElement).attr("value");
      var tipo=$(thisElement).attr("tipo");
      let tabla=$("#tipoentradaTabla")
     ponerBaja(value,tipo,e,tabla);


      console.log(value, row, index);
    }
    }
    window.tipoClienteFormatterEvent={
               'click .vn': function (e, value, row, index) {
      // alert('You click like action, row: ' + JSON.stringify(row))
      console.log(value, row, index);
            let thisElement=e.currentTarget;
var val=$(thisElement).attr("value");
      var tipo=$(thisElement).attr("tipo");
      let tabla="tipoClienteTabla"
     llenarEditar(value,tipo,e,tabla);



$('.iden').val(2).trigger('true');

    },
    'click .vne': function (e, value, row, index) {
      // $usuariot.bootstrapTable('remove', {
      //   field: 'id',
      //   values: [row.id]
      // })
      let thisElement=e.currentTarget;
var val=$(thisElement).attr("value");
      var tipo=$(thisElement).attr("tipo");
      let tabla=$("#tipoClienteTabla")
     ponerBaja(value,tipo,e,tabla);


      console.log(value, row, index);
    }
    }

    window.proveedorFormatterEvent={

            'click .vn': function (e, value, row, index) {
      // alert('You click like action, row: ' + JSON.stringify(row))
      console.log(value, row, index);
            let thisElement=e.currentTarget;
var val=$(thisElement).attr("value");
      var tipo=$(thisElement).attr("tipo");
      let tabla="sucurll"
     llenarEditar(value,tipo,e,tabla);



$('.iden').val(2).trigger('true');

    },
    'click .vne': function (e, value, row, index) {
      // $usuariot.bootstrapTable('remove', {
      //   field: 'id',
      //   values: [row.id]
      // })
      let thisElement=e.currentTarget;
var val=$(thisElement).attr("value");
      var tipo=$(thisElement).attr("tipo");
      let tabla=$("#sucurll")
     ponerBaja(value,tipo,e,tabla);


      console.log(value, row, index);
    }
    }

    window.tipoCobroFormatterEvent ={
         'click .vn': function (e, value, row, index) {
      // alert('You click like action, row: ' + JSON.stringify(row))
      console.log(value, row, index);
            let thisElement=e.currentTarget;
var val=$(thisElement).attr("value");
      var tipo=$(thisElement).attr("tipo");
      let tabla="tipocobroTabla"
     llenarEditar(value,tipo,e,tabla);



$('.iden').val(2).trigger('true');

    },
    'click .vne': function (e, value, row, index) {
      // $usuariot.bootstrapTable('remove', {
      //   field: 'id',
      //   values: [row.id]
      // })
      let thisElement=e.currentTarget;
var val=$(thisElement).attr("value");
      var tipo=$(thisElement).attr("tipo");
      let tabla=$("#tipocobroTabla")
     ponerBaja(value,tipo,e,tabla);


      console.log(value, row, index);
    }
    }

    window.medidasFormatterEvent ={

            'click .vn': function (e, value, row, index) {
      // alert('You click like action, row: ' + JSON.stringify(row))
      console.log(value, row, index);
            let thisElement=e.currentTarget;
var val=$(thisElement).attr("value");
      var tipo=$(thisElement).attr("tipo");
      let tabla="vehiculot"
     llenarEditar(value,tipo,e,tabla);



$('.iden').val(2).trigger('true');

    },
    'click .vne': function (e, value, row, index) {
      // $usuariot.bootstrapTable('remove', {
      //   field: 'id',
      //   values: [row.id]
      // })
      let thisElement=e.currentTarget;
var val=$(thisElement).attr("value");
      var tipo=$(thisElement).attr("tipo");
      let tabla=$("#vehiculot")
     ponerBaja(value,tipo,e,tabla);


      console.log(value, row, index);
    }
    }

    window.descuentosFormatterEvent ={
            'click .vn': function (e, value, row, index) {
      // alert('You click like action, row: ' + JSON.stringify(row))
      console.log(value, row, index);
            let thisElement=e.currentTarget;
var val=$(thisElement).attr("value");
      var tipo=$(thisElement).attr("tipo");
      let tabla="marcat"
     llenarEditar(value,tipo,e,tabla);



$('.iden').val(2).trigger('true');

    },
    'click .vne': function (e, value, row, index) {
      // $usuariot.bootstrapTable('remove', {
      //   field: 'id',
      //   values: [row.id]
      // })
      let thisElement=e.currentTarget;
var val=$(thisElement).attr("value");
      var tipo=$(thisElement).attr("tipo");
      let tabla=$("#marcat")
     ponerBaja(value,tipo,e,tabla);


      console.log(value, row, index);
    }
    }
   window.clienteFormatterEvent ={
         'click .vn': function (e, value, row, index) {
      // alert('You click like action, row: ' + JSON.stringify(row))
      console.log(value, row, index);
            let thisElement=e.currentTarget;
var val=$(thisElement).attr("value");
      var tipo=$(thisElement).attr("tipo");
      let tabla="proveemt"
     llenarEditar(value,tipo,e,tabla);



$('.iden').val(2).trigger('true');

    },
    'click .vne': function (e, value, row, index) {
      // $usuariot.bootstrapTable('remove', {
      //   field: 'id',
      //   values: [row.id]
      // })
      let thisElement=e.currentTarget;
var val=$(thisElement).attr("value");
      var tipo=$(thisElement).attr("tipo");
      let tabla=$("#proveemt")
     ponerBaja(value,tipo,e,tabla);


      console.log(value, row, index);
    }
   } 
  window.operateEvents = {
    'click .vn': function (e, value, row, index) {
      // alert('You click like action, row: ' + JSON.stringify(row))
      console.log(value, row, index);
            let thisElement=e.currentTarget;
var val=$(thisElement).attr("value");
      var tipo=$(thisElement).attr("tipo");
      let tabla="usuariot"
     llenarEditar(value,tipo,e,tabla);



$('.iden').val(2).trigger('true');

    },
    'click .vne': function (e, value, row, index) {
      // $usuariot.bootstrapTable('remove', {
      //   field: 'id',
      //   values: [row.id]
      // })
      let thisElement=e.currentTarget;
var val=$(thisElement).attr("value");
      var tipo=$(thisElement).attr("tipo");
      let tabla=$("#usuariot")
     ponerBaja(value,tipo,e,tabla);


      console.log(value, row, index);
    }
  }

  

// let as=$('.vn');
// for (var i = as.length - 1; i >= 0; i--) {
//   as[i].addEventListener("click", console.log("hola"), false); 

// }




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
