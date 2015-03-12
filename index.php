<?php 
  include('class/conexion.php');
?>	
  <!DOCTYPE hmtl>
  <html>
	<head>
  	  <title> Plan de Vuelo </title>	
	</head>
	<body>
	  <form name="consulta_sku" action="<?php echo $PHP_SELF; ?>"  enctype="multipart/form-data" >
	    <?php
              echo "Selecciona la Sucursal de Origen :"; 
                $query_sc = "SELECT ClaveSucursal, NombreSucursal from Sucursales order by IdSucursal asc"; 
                $resultado = mssql_query($query_sc,$link); 
                  if(!$resultado){ 
                    echo " fallo"; 
                  }
                  else{ 
                    echo "<select name='select1' id='select1' >"; 
                    echo "<option>",'Seleccione',"</option>"; 
                      while ($row=mssql_fetch_row($resultado)){ 
                        echo "<option value='$row[0]'>", $row[0],' ',$row[1], "</option>"; 
                      }                    
                  } 
                    echo"</select>"; 
            ?>
            <input type="text" name="inp_sku"/>
	  </form>
	</body>
  </hmtl>
			
