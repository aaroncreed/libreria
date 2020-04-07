<div class="modal" tabindex="-1" role="dialog" id="pagar">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pagar ticket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row col-md-12">
     <label for="condiciones" class="col-md-1 control-label">Pago</label>
              <div class="col-md-6">
                <select class="form-control " id="condiciones">
                  @if(!empty($tipocobro))
                @foreach($tipocobro as $tipoco)

      <option value="{{$tipoco->id_tipoCobro}}">{{$tipoco->Desccobro}}</option>

     @endforeach
     @endif
                </select>
              </div>
</div>
        <div class="row form-group col-sm-12 " id="datosdePago">

          <div class="row col-sm-12 h-50">
             <div id="numeroTar" class="col-sm-8 collapse ">
            <label for="numeroTar" class="col-md-12 control-label" >No. Tarjeta, Cheque o Vale</label>
              <div class="col-md-12">
                <input type="text" class="form-control numeroTar" id="numeroTarjetacheque" name="numeroTar"  value="" >
              </div>
         </div>
         <div id="mesVencimiento" class="col-sm-6 collapse ">
           <label for="mesVencimiento" class="col-md-4 control-label">Mes Vencimiento</label>
              <div class="col-md-12">
                <input type="number" class="form-control mesVencimiento" id="mesVenci" name="mesVencimiento"  value="" >
              </div>
         </div>
         <div id="anoVencimiento" class="col-sm-6 collapse ">
           <label for="anoVencimiento" class="col-md-4 control-label">Año Vencimiento</label>
              <div class="col-md-12">
                <input type="number" class="form-control anoVencimiento" id="anoVenci" name="anoVencimiento"  value="" >
              </div>
         </div>

          </div>
            <div class="row col-sm-12 h-50">
              <div id="CantidadPagar" class="col-sm-4 collapse show">
              <label for="CanditadPagar" class="col-md-4 control-label ">Candidad</label>
              <div class="col-md-12">
                <input type="number" class="form-control CantidadPagar " name="CanditadPagar" value="" required="" pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$">
              </div>
          </div>
          </div>
          <div class="row col-sm-12 h-50 pl-5 pt-4 ">
            <button class="btn btn-info" id="agregarPago">agregar pago</button>

          </div>


         </div>

 <form class="form-horizontal" method="post" id="guardar_producto" name="guardar_producto">
<div id="resultados" class=" table-responsive">
      <table class="table">
      <thead>
        <tr>
  <th class="text-left">Tipo Cobro</th>
  <th class="text-left">Monto</th>
  <th class="text-left">Detalle de pago</th>
  <th class="text-left">Fecha Vencimiento</th>
  <th></th>
</tr>
      </thead>
<tbody id="pagosNuevos">


</tbody>

</table>

<div class="row">
  <div class="col-sm-6">
     <label  class="text-right" > Se Cobra $</label>
  <p class="text-right" id="seCobra"></p>
  </div>
    <div class="col-sm-6">
       <label  class="text-right" > Total Pagado </label>
  <p class="text-right" id="totalPagado"></p>
  </div>



</div>

<div class="row">
    <div class="col-sm-6">

    <label  class="text-right" > Cambio</label>
  <p class="text-right" id="cambio"></p>
  </div>
    <div class="col-sm-6">


    <label  class="text-right" > Resta</label>
  <p class="text-right" id="resta"></p>
  </div>
</div>


</div>



       </form>
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button type="submit" class="btn btn-primary" id="guardar_datos" disabled="true">Cobrar</button>
       <button type="button" class="btn btn-default">
              <span class="glyphicon glyphicon-print"></span> Imprimir
            </button>
      </div>
    </div>
  </div>
</div>


