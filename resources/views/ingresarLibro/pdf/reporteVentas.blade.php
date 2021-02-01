<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>{{ $title }}</title>
</head>
<style type="text/css">
  th{
    text-align: left;
  }
  table{
    padding-top: 20px;
  }
</style>
<body>
  <h3 style="width: 100%; text-align: center;">{{ $heading}}</h3>
  
  <table width="100%" style="width:100%" border="0">
    <tr>
      <td>Fecha: {{Carbon\Carbon::now("America/Mexico_city")}}</td>

    </tr>
    <tr>
 
    </tr>
   

    </table>
<table width="100%" style="width:100%" border="0">
  <thead>
    <tr>
      <th>Ticket venta</th>
      <th>Precio Lista</th>
      <th>Cantidad</th>
      <th>Titulo</th>
      <th>Descuento</th>   

      
                
    </tr>
  </thead>
<tbody>
  @foreach($content as $ke=>$val)
  
<!--    <tr>
    <td colspan="6"><strong>Libros: </strong></td>
   </tr> -->
        @foreach($val->detalleVentaLibro as $detalle=>$valordetalle)
        <tr>
         <td>{{$val->id_venta}}</td>
         <td>{{$valordetalle->Precioventa}}</td>
   
             <td>{{$valordetalle->Cantidad}}</td>
             <td>{{$valordetalle->libro[0]->Titulo}} </td>
            <td>{{$valordetalle->Descuento}} </td>
           </tr>
        @endforeach
    

        <!-- <td>{{$val->Fecventa}}</td> -->
        <tr style="display: none;">
        <td colspan="6" align=Right><strong>Subtotal:</strong> {{$subtotal+=$val->Subtotal}}</td>
        </tr>
  <!--       <tr>
        <td colspan="6" align=Right><strong>IVA:</strong> {{$val->IVA}}</td>
        </tr>
        <tr> -->
    <!--     <td colspan="6" align=Right><strong>Descuento:</strong> {{$val->Descuento}}</td>
        </tr> -->
        <tr style="display: none;">
        <td colspan="6" align=Right><strong>Total Venta:</strong> {{$totalVenta+=$val->Totalventa}}</td>
        </tr>
        <tr style="display: none;">
        <td colspan="6" align=Right><strong>Cambio:</strong> {{$totaldevuelto+=$val->Cobrado}}</td>
       </tr>
       <!-- <td>c: {{$cantidad==$ke+1}} b: {{$cantidad}}  a: {{$ke+1}}</td> -->
       @if($cantidad==$ke+1)
        <tr >
        <td colspan="6" align=Right><strong>Subtotal:</strong> {{$subtotal}}</td>
        </tr>
  <!--       <tr>
        <td colspan="6" align=Right><strong>IVA:</strong> {{$val->IVA}}</td>
        </tr>
        <tr> -->
    <!--     <td colspan="6" align=Right><strong>Descuento:</strong> {{$val->Descuento}}</td>
        </tr> -->
        <tr >
        <td colspan="6" align=Right><strong>Total Venta:</strong> {{$totalVenta}}</td>
        </tr>
        <tr >
        <td colspan="6" align=Right><strong>Cambio:</strong> {{$totaldevuelto}}</td>
       </tr>
       @endif
     
      @endforeach

</tbody>
    
  </table>


</body>
</body>
</html>