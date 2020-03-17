<div class="modal descuentos_modal" tabindex="-1" role="dialog" id="descuentos_alta">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Casa Editorial</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <form id="descuentos_add">
      <input type="hidden" name="iden" class="iden" value="">
      <input type="text" name="descuentos_dide" id="descuentos_dide" class="d-none" value="">
      <input type="text" class="d-none" name="id_descuento" id="id_descuento">
 <div class="form-group col-sm-6">
<label for="TipoDesc">Descripcion</label>
<input id="TipoDesc" name="TipoDesc" class="form-control">
</div>
  <div class="form-group col-sm-6">
 <label for="Tipocli">Tipo de Cliente</label>
 <select id="Tipocli" name="Tipocli" class="form-control">
   @if(!empty($tipoCliente))
    @foreach($tipoCliente as $tipoc)
<option value="{{$tipoc->id_tipoCliente}}">{{$tipoc->TipoCli}}-{{$tipoc->Desctipo}}</option>
    @endforeach
   @endif
 </select> 
</div>
  <div class="form-group col-sm-12">
 <label for="Descuento">"Descuento"</label>
 <input type="number" id="Descuento" name="Descuento" class="form-control">
</div>
 <div class="form-group col-sm-6 d-none">
<label for="Usralta">"Usralta"</label>
 <input id="Usralta" name="Usralta" class="form-control">
</div>
   <button type="button" class="btn btn-primary pedi">guardar cambios</button>
     </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
     
      </div>
    </div>
  </div>
</div>