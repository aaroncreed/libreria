<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>{{ $title  }}</title>
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
  		<td>Fecha de fin de Finiquito: {{$content[0]->Fecfiniquito}}</td>
  	</tr>
  	<tr>
  		<td>#Entrada: {{$content[0]->id_entrada}}</td>
  	</tr>
   

    </table>
<table width="100%" style="width:100%" border="0">
	<thead>
		<tr>
			<th>Codigo Barra</th>
			<th>Interno</th>
			<th>Titulo</th>
			<th>Entraron</th>
			<th>Compraron</th>
			<th>Devolucion</th>
			<th>Precio Lista</th>		
			<th>Descuento</th>
			<th>Costo Uni.</th>
			<th>Impte.</th>
			<th>Pagar</th>
								
		</tr>
	</thead>
<tbody>
	@foreach($content[0]->detalleDevolucion as $ke=>$val)
	  <tr>
<!-- "id_detallleEntrada":4,"Claveent":23,"Codigobarr":2,"Cantidad":9,"Preciolista":"20.00","Descprov":"0.00","Claveprov":"0.00","Observaci\u00f3n":"","fechaColofon":null -->
        <td>{{$val->libro->Codbarras}}</td>
        <td>{{$val->libro->ClaveInterna}}</td>
        <td>{{$val->libro->Titulo}}</td>
        <td>{{$val->Cantidad}} <div style="display: none;">{{ $cantidad +=$val->Cantidad}}</div></td>
        <td>{{$val->Cantidad - $val->devolucion[0]->cantidad}}</td>
        <td> 
        	{{$val->devolucion[0]->cantidad}}

                    

        </td>
        <td>{{$val->Preciolista}}</td>
        <td>{{$val->Descprov}}</td>
        <td>{{ $val->Preciolista - ($val->Descprov >0 ? $val->Preciolista * ($val->Descprov * .010) : 0)}} <div style="display: none;"> {{$descuento  +=($val->Descprov >0 ? $val->Preciolista * ($val->Descprov * .010) : 0)}}</div> </td>
        <td>{{ $val->Cantidad * ($val->Preciolista - ($val->Descprov >0 ? $val->Preciolista * ($val->Descprov * .010) : 0))}} <div style="display: none;">{{ $total += ($val->Cantidad * ($val->Preciolista - ($val->Descprov >0 ? $val->Preciolista * ($val->Descprov * .010) : 0)))}}</div></td>
        <td>	{{$val->devolucion[0]->dinero}} <div style="display: none;"> {{$pagar += $val->devolucion[0]->dinero}}</div></td>
      </tr> 
      @endforeach

</tbody>
    
  </table>
   <table width="100%" style="width:100%" border="0">
  	<tr>
  		<td colspan="3">Observaciones:</td>
  		<td>Cantidad: {{$cantidad}}</td>
  		<td>IMPTE. : {{$total}}</td>
  	</tr>
  	<tr>
  		<td colspan="3"></td>
  		<td></td>
  		<td>Descuento: {{$descuento}}</td>
  	</tr>
  		<tr>
  		<td colspan="3"></td>
  		<td></td>
  		<td>SubTotal: {{$descuento + $total }}</td>
  	</tr>
  	</tr>
  		<tr>
  		<td colspan="3"></td>
  		<td></td>
  		<td>Total: {{ $total }}</td>
  	</tr>
</tr>
  		<tr>
  		<td colspan="3"></td>
  		<td></td>
  		<td>Pago a Proveedor Total: {{ $pagar }}</td>
  	</tr>
   

    </table>
       <table width="100%" style="width:100%" border="0">
       	  	<tr>
  		<td colspan="3"></td>
    <td></td>    
    <td></td>
  	</tr>
  	  	<tr>
  		<td colspan="3"></td>
    <td></td>    
    <td></td>
  	</tr>
  	  	<tr>
  		<td colspan="3"></td>
    <td></td>    
    <td></td>
  	</tr>
  	  	<tr>
  		<td colspan="3"></td>
    <td></td>    
    <td></td>
  	</tr>
  	  	<tr>
  		<td colspan="3"></td>
    <td></td>    
    <td></td>
  	</tr>
  	  	<tr>
  		<td colspan="3"></td>
    <td></td>    
    <td></td>
  	</tr>
  	  	<tr>
  		<td colspan="3"></td>
    <td></td>    
    <td></td>
  	</tr>
  	  	<tr>
  		<td colspan="3"></td>
    <td></td>    
    <td></td>
  	</tr>
  	 	  	<tr>
  		<td colspan="3"></td>
    <td></td>    
    <td></td>
  	</tr>
  	  	<tr>
  		<td colspan="3"></td>
    <td></td>    
    <td></td>
  	</tr>
  	  	<tr>
  		<td colspan="3"></td>
    <td></td>    
    <td></td>
  	</tr>
  	  	<tr>
  		<td colspan="3"></td>
    <td></td>    
    <td></td>
  	</tr>
  	  	<tr>
  		<td colspan="3"></td>
    <td></td>    
    <td></td>
  	</tr>
  	  	<tr>
  		<td colspan="3"></td>
    <td></td>    
    <td></td>
  	</tr>
  	  	<tr>
  		<td colspan="3"></td>
    <td></td>    
    <td></td>
  	</tr>
  	  	<tr>
  		<td colspan="3"></td>
    <td></td>    
    <td></td>
  	</tr>
  	<tr>
  		<td colspan="3"></td>
  		<td  style="border-bottom: 5px #607D8B;
    border-bottom-style: solid;
    width: 20%"></td>
    <td></td>
  	</tr>
  	<tr>
  		<td colspan="3"></td>
  		<td style="text-align: center;">LIBRERIA</td>
  		<td></td>
  	</tr>
  </table>
</body>
</body>
</html>