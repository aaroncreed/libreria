@extends('layouts.app')

@section('content')
<div class="container">
    @include('ingresarLibro/modal/buscarProducto')
     @include('ingresarLibro/modal/pagar')




    <div class="row justify-content-center">

        <div>
          <div class="panel panel-info">
    <div class="panel-heading">
      <h4><i class="glyphicon glyphicon-edit"></i> Nueva Factura</h4>
    </div>
    <div class="panel-body">

      <!-- Modal -->

      <!-- Modal -->

      <!-- Modal -->

        <form class="form-horizontal" role="form" id="datos_factura">
        <div class="form-group row">
          <label for="nombre_cliente" class="col-md-1 control-label">Tipo Cliente</label>
          <div class="col-md-6">
          <select class="form-control " name="tipocliente" id="tipocliente">
             @if(!empty($tipocliente))
                @foreach($tipocliente as $tipocl)

      <option value="{{$tipocl->id_tipoCliente }}">{{$tipocl->Desctipo}}</option>

     @endforeach
     @endif
                </select>
          </div>

         </div>
         <div class="row form-group col-sm-12 h-50" id="datosCliente">
          <div class="row col-sm-12 h-50">
              <div id="Credencial" class="col-sm-4 collapse show">
              <label for="Credencial" class="col-md-4 control-label">Credencial</label>
              <div class="col-md-12">
                <input type="text" class="form-control " name="Credencial" value="" >
              </div>
          </div>
          </div>
          <div class="row col-sm-12 h-50">
             <div id="Nombrecli" class="col-sm-4 collapse ">
            <label for="Nombrecli" class="col-md-4 control-label" >Nombre</label>
              <div class="col-md-12">
                <input type="text" class="form-control " name="Nombrecli"  value="" >
              </div>
         </div>
         <div id="Dependencia" class="col-sm-4 collapse ">
           <label for="Dependencia" class="col-md-4 control-label">Dependencia</label>
              <div class="col-md-12">
                <input type="text" class="form-control " name="Dependencia"  value="" >
              </div>
         </div>

          </div>


         </div>
            <div class="form-group row col-md-12">

              <label for="fecha" class="col-md-1 control-label">Fecha</label>
              <div class="col-md-4">
                <input type="text" class="form-control " name="fecha" id="fecha" value="{{ Carbon\Carbon::today('America/Mexico_City')->format('Y-m-d')}}" readonly="">
              </div>

            </div>




        <div class="col-md-12">

          <div class="pull-right">
            <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoProducto">
             <span class="glyphicon glyphicon-plus"></span> Nuevo productobootstrap.js
bootstrap.min.js
            </button> -->
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#pagar" id="Cobrar">
            Pagar
            </button>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
             <span class="glyphicon glyphicon-search"></span> Agregar productos
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
  </div>
        </div>
    </div>
</div>

@endsection
