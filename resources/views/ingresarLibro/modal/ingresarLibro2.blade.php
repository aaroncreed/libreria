
<div class="modal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Buscar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
             <form class="form-horizontal">
            <div class="form-group">
            <div class="col-sm-12">
              <!-- <input type="text" class="form-control" id="buscarLibro" placeholder="Buscar productos" onkeyup="load(1)"> -->
               <label for="nombre_cliente" class="col-md-1 control-label ">Libros</label>
          <div class="col-md-12">
          <select class="form-control col-sm-12 buscarLibro " name="libros" id="libros" data-live-search="true" onchange="ingresarlibro(this)">
             <option value="">Escoger un Libro</option>
             @if(!empty($libros))
                @foreach($libros as $libro)

      <option value="{{$libro->Codbarras }}">{{$libro->Codbarras}}-{{$libro->Titulo}}-{{$libro->Titulo}}</option>

     @endforeach
     @endif
                </select>
            </div>

            </div>
          </div>
          </form>
          <div id="loader" style="position: absolute; text-align: center; top: 55px; width: 100%;"></div><!-- Carga gif animado -->
          <div class="outer_div">     <div class="table-responsive">
        <table class="table" >
          <thead>
            <tr class="warning">
          <th>Código</th>
          <th>Producto</th>
          <th><span class="pull-right">cantidad</span></th>
          <th><span class="pull-right">Precio</span></th>
          <th class="text-center" style="width: 36px;">Agregar</th>
        </tr>
          </thead>
        <tbody id="productoEscogido">
          <!--         <tr>
            <td>asdasd</td>
            <td>asdasd</td>
            <td class="col-xs-1">
            <div class="pull-right">
            <input type="text" class="form-control" style="text-align:right" id="cantidad_1" value="1">
            </div></td>
            <td class="col-xs-2"><div class="pull-right">
            <input type="text" class="form-control" style="text-align:right" id="precio_venta_1" value="122.00">
            </div></td>
            <td class="text-center"><a class="btn btn-info" href="#" onclick="agregar('1')"><i class="glyphicon glyphicon-plus"></i></a></td>
          </tr>
     -->
        </tbody></table>
      </div>
      </div><!-- Datos ajax Final -->
      </div>
      <div class="modal-footer">
      <!--   <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      </div>
    </div>
  </div>
</div>

