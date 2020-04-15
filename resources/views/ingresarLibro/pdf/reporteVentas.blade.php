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
      <th>Fecha venta</th>
      <th>Subtotal</th>
      <th>IVA</th>
      <th>Descuento</th>
      <th>Total Venta</th>   
      <th>Cambio</th>
      <th>Tipo Cliente</th>
      
                
    </tr>
  </thead>
<tbody>
  @foreach($content as $ke=>$val)
    <tr>
<!-- "id_detallleEntrada":4,"Claveent":23,"Codigobarr":2,"Cantidad":9,"Preciolista":"20.00","Descprov":"0.00","Claveprov":"0.00","Observaci\u00f3n":"","fechaColofon":null -->
        <td>{{$val->Fecventa}}</td>
        <td>{{$val->Subtotal}}</td>
        <td>{{$val->IVA}}</td>
        <td>{{$val->Descuento}}</td>
        <td>{{$val->Totalventa}}</td>
     
        <td>{{$val->Cobrado}}</td>
       
       <td>{{$val->tipoCliente->Desctipo}}</td>
      </tr> 
      @endforeach

</tbody>
    
  </table>


</body>
</body>
</html>