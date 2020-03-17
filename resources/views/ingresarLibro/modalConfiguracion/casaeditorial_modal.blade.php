<div class="modal casaeditorial_modal" tabindex="-1" role="dialog" id="casaeditorial_alta">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Casa Editorial</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <form action="/ingresarCasaEditorial" id="casaeditorial_add">
      <input type="hidden" name="iden" class="iden" value="">
      <input type="text" name="casaeditorial_dide" id="casaeditorial_dide" class="d-none" value="">

<input type="text" name="id_casaEditorial" id="id_casaEditorial" class="d-none" value="">
 <div class="form-group col-sm-6">
  <label for="Clavecasedit">Clave Editorial</label>
<input type="text" name="Clavecasedit" id="Clavecasedit" class="form-control" value="">
</div>
 <div class="form-group col-sm-6">
  <label for="Desccasedit">Descripcion</label>
<input type="text" name="Desccasedit" id="Desccasedit" class="form-control" value="">
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