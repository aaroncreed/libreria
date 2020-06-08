<link rel="stylesheet" type="text/css" href="{{asset('css/ticket.css')}}">


<div class="ticket">
    <!-- <img class="img" src="{{asset('img/logo.png')}}" alt="Logotipo"> -->
    <p class="centrado tama">UNIVERSIDAD NACIONAL</p>
    <p class="centrado tama">AUTONOMA DE MEXICO</p>
    <p class="centrado tama">RFC: UNA2907227Y5</p>
    <p class="centrado tama">AV. UNIVERSIDAD #3000</p>
    <p class="centrado tama">COL. UNAM C.U. COYOACAN</p>

    <p class="centrado">TICKET DE VENTA 
        <br>LIBRERIA CEPHCIS
        <br></p>

<p class="centrado tama">CALLE 60 NO. 469 ENTRE 53 Y 55</p>
<p class="centrado tama">CENTRO MERIDA YUCATAN MEXICO 97000</p>
<p class="centrado tama">{{Carbon\Carbon::now("America/Mexico_City")}}</p>
 <p class="centrado">No. venta: {{$venta[0]->id_venta}}</p>
    <table>
        <thead>
        <tr class="nuevoTabla">
           <th class="nuevoTabla  cantidad">#</th>
           <th class="nuevoTabla  producto">Libros</th>
           <th class="nuevoTabla  producto">Codigo Barra</th>

           <th class="nuevoTabla  precio">$$</th>
        </tr>
        </thead>
        <tbody>
             @foreach($producto as $pro=>$duc)
           
        <tr class="nuevoTabla">
            <td class="nuevoTabla  cantidad">  {{$duc->Cantidad}}</td>
            <td class="nuevoTabla  producto">  {{$duc->libro[0]->Titulo}}</td>
             <td class="nuevoTabla  producto">  {{$duc->libro[0]->Codbarras}}</td>
            <td class="nuevoTabla  precio">  {{$duc->Precioventa}}</td>
        </tr>
   
@endforeach
<P></P>
        @foreach($venta as $ven=>$ta)
    
        <tr class="nuevoTabla">
            <td class="nuevoTabla  cantidad"></td>
              <td class="nuevoTabla  producto"></td>
            <td class="nuevoTabla  producto">TOTAL</td>
            <td class="nuevoTabla  precio">    {{$ta->Totalventa}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <!--  -->
      <p class="centrado"> si requiere factura solicitela el mismo dia de compra</p>
      <p class="centrado"> no hay cambios ni devoluciones</p>
      <p class="centrado"> para cambios por defectos es necesario presentar su ticket de compra</p>
      <p class="centrado"> www.cephcis.unam.mx</p>
      <p class="centrado"> gracias por su compra</p>
        <button onclick="imprimir()" class="oculto-impresion" style="margin-left: 25%;">Imprimir</button>
</div>
<script type="text/javascript">
    function imprimir()
    {
        setTimeout(function () { window.print(); }, 500);
        window.onclick = function () { setTimeout(function () { window.close(); }, 5000); }
    }
</script>