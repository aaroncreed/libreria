<link rel="stylesheet" type="text/css" href="{{asset('css/ticket.css')}}">


<div class="ticket">
    <img class="img" src="{{asset('img/logo.png')}}" alt="Logotipo">
    <p class="centrado">TICKET DE VENTA
        <br>LIBRERIA UNAM
        <br>{{Carbon\Carbon::now("America/Mexico_City")}}</p>



 
    <table>
        <thead>
        <tr class="nuevoTabla">
           <th class="nuevoTabla  cantidad">#</th>
           <th class="nuevoTabla  producto">Libros</th>
           <th class="nuevoTabla  precio">$$</th>
        </tr>
        </thead>
        <tbody>
             @foreach($producto as $pro=>$duc)
           
        <tr class="nuevoTabla">
            <td class="nuevoTabla  cantidad">  {{$duc->cantidad->cantidad}}</td>
            <td class="nuevoTabla  producto">  {{$duc->titulo}}</td>
            <td class="nuevoTabla  precio">  {{$duc->cantidad->total}}</td>
        </tr>
   
@endforeach
        @foreach($venta as $ven=>$ta)
    
        <tr class="nuevoTabla">
            <td class="nuevoTabla  cantidad"></td>
            <td class="nuevoTabla  producto">TOTAL</td>
            <td class="nuevoTabla  precio">    {{$ta->total}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <p class="centrado">¡GRACIAS POR SU COMPRA!
        <!-- <br>parzibyte.me</p> -->
      </p>
        <button onclick="imprimir()" class="oculto-impresion" style="margin-left: 25%;">Imprimir</button>
</div>
<script type="text/javascript">
    function imprimir()
    {
        setTimeout(function () { window.print(); }, 500);
        window.onclick = function () { setTimeout(function () { window.close(); }, 5000); }
    }
</script>