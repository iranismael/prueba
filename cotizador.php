<?php require 'conexion.php' ?>
<html lang="es">
<html>
<head>
	<meta charset="utf-8">
	<title>Cotizador</title>
	<meta charset="utf-8">
	<meta name="description" content="Venta de lotes residenciales en Mérida Yucatán">
	<meta name="author" content="Ismael Flores dev" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Lato|Poppins&display=swap" rel="stylesheet">

	<!--Font awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-all.css">

	<!--Bootstrab Css-->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!--Estilos cotizador Css-->
	<link rel="stylesheet" href="css/cotizador.css">

</head>
<body>
	<header>
		
	</header>

	<section class="lotes-ubicaciones">
		<h1>CONOCE Y COTIZA NUESTROS LOTES<br> DE ALTA PLUSVALÍA</h1>
		<!--<img src="images/Mapa.svg" alt="Mapa svg">-->

		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 643 1103.5" style="enable-background:new 0 0 643 1103.5;" xml:space="preserve">
		<g id="terreno">
			<g id="1" class="disponible">
				<path class="st5" d="M317.4,30.9l15.3,2.3l1.3,79.7l-18.1-3.1c-4.7-1.2-8.9-2.1-13.4-8.8l-1.1-55
					C303.2,32.6,311.5,30.9,317.4,30.9"></path>
				<text transform="matrix(1 0 0 1 309.4896 80.0922)" class="st6 st7 st8" fill="white">01</text>
			</g>
			<g id="2" class="disponible">
				<path class="st5" d="M364.3,38.2l1.1,79.8l-31.3-5.1l-1.3-79.7C342.5,35.2,350.9,36.8,364.3,38.2"></path>
				<text transform="matrix(1 0 0 1 339.0062 80.0922)" class="st6 st7 st8" fill="white">02</text>
			</g>
			<g id="3" class="disponible">
				<path class="st5" d="M396,37.7l0.7,79.8c-9.6,0.9-20.1,1.7-31.3,0.4l-1.1-79.8C374.3,39.8,387.3,39,396,37.7"></path>
				<text transform="matrix(1 0 0 1 371.266 80.0922)" class="st6 st7 st8" fill="white">03</text>
			</g>
			
		</g>
		</svg>
	</section>
	
	<!-- Modal boostrab -->
	<div class="modal fade" id="modalCotizador" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">COTIZA LOTE <span id="titulo_lote"></span></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	 <div class="container-fluid">
	      	 	<div class="row">
	      	 	     <div class="col-md-5 info-lote">
	      	 	     	<img class="localizacion" src="images/localizar.svg">
	      	 	     	<div class="lote-medida"></div>
	      	 	     	<p><b>Medidas</b></p>
	      	 	     	<p><i class="fa fa-angle-right"></i> Largo: <span id="largo"></span> mts</p>
	      	 	     	<p><i class="fa fa-angle-right"></i> Ancho: <span id="ancho"></span> mts</p>
	      	 	     </div>
	      	 	     <div class="col-md-7">
	      	 	     	<form id="form-contador">
	      	 	     		<div class="row">
	      	 	     			<div class="col-md-6">
	      	 	     				<div class="form-group">
	      	 	     				  <label for="recipient-name" class="col-form-label">Precio:</label>
	      	 	     				  <input type="text" class="form-control desabilitaInput" id="preciom2" name="precio">
	      	 	     				</div>
	      	 	     			</div>
	      	 	     			<div class="col-md-6">
	      	 	     				<div class="form-group">
	      	 	     				  <label for="recipient-name" class="col-form-label">M2 totales:</label>
	      	 	     				  <input type="text" class="form-control desabilitaInput" id="mtotales" name="mtales">
	      	 	     				</div>
	      	 	     				
	      	 	     			</div>
	      	 	     		</div>
	      	 	     		<div class="row">
	      	 	     			<div class="col-md-6">
	      	 	     				<div class="form-group">
	      	 	     				  <label for="recipient-name" class="col-form-label">Plazos:</label>
	      	 	     				<select class="form-control" id="plazos">
	      	 	     				  <option value="1">Contado</option>
	      	 	     				  <option value="6">6 meses</option>
	      	 	     				  <option value="12">12 meses</option>
	      	 	     				  <option value="18">18 meses</option>
	      	 	     				</select>
	      	 	     				</div>
	      	 	     			</div>
	      	 	     			<div class="col-md-6">
	      	 	     				<div class="form-group">
	      	 	     				  <label for="recipient-name" class="col-form-label">Enganche:</label>
	      	 	     				  <input type="text" class="form-control desabilitaInput" id="enganche" name="enganche">
	      	 	     				</div>
	      	 	     			</div>
	      	 	     		</div>
	      	 	     		<div class="row">
	      	 	     			<div class="col-md-6">
	      	 	     				<div class="form-group">
	      	 	     				  <label for="recipient-name" class="col-form-label">Mensualidad:</label>
	      	 	     				  <input type="text" class="form-control desabilitaInput" id="mensualidad" name="mensualidad">
	      	 	     				</div>
	      	 	     			</div>
	      	 	     			<div class="col-md-6">
	      	 	     				<div class="form-group">
	      	 	     				  <label for="recipient-name" class="col-form-label">C. Enganche:</label>
	      	 	     				  <input type="text" class="form-control desabilitaInput" id="costo-enganche" name="costo-enganche">
	      	 	     				</div>
	      	 	     			</div>
	      	 	     			
	      	 	     		</div>
				          
				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Precio total:</label>
				            <input type="text" class="form-control desabilitaInput" id="precio-total" name="precio-total">
				          </div>

        				</form>
	      	 	     	
	      	 	     </div>
	      	 	     
	      	 	   </div>
	      	 </div>
	        
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <button type="button" class="btn btn-primary">Hablar con asesor</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!------- Jquery  Js---------------------->
	<script src="js/jquery-3.3.1.min.js"></script>

	<!------- Bostrap Js --------------------->
	<script defer src="js/bootstrap.min.js"></script>
	

	<script type="text/javascript">

		/*Variables*/
		var total_metros2
		var precio_metros2
		var seismeses;
		var docemeses;
		var diesiochomeses;


		$(document).ready(function(){
			var id_lote;
		    $('#terreno g').on('click',function(){
		    	id_lote = $(this).attr('id');
		    	parseInt(id_lote);//convertir cadena a numero
		        
		        $.ajax({
		            type:'POST',
		            url:'consulta.php',
		            dataType: "json",
		            data:{id_lote:id_lote},
		            success:function(data){

		                if(data.status == 'ok'){

		                	total_metros2  = data.result.total_metros2; 
		                	precio_metros2 = data.result.precio_metros2;
		                	seismeses      = data.result.seismeses;
		                	docemeses      = data.result.docemeses;
		                	diesiochomeses = data.result.diesiochomeses;

		                	precioTotalContado(total_metros2,precio_metros2);

		                	$('#titulo_lote').text(data.result.num_lote);
		                    $('#largo').text(data.result.largo);
		                    $('#ancho').text(data.result.ancho);
		                    $('#mtotales').val(data.result.total_metros2);
		                    $('#preciom2').val(data.result.precio_metros2);
		                    
		                    $('#modalCotizador').modal('show');
		                }else{
		                    alert("Lote no encontrado...");
		                } 
		            }
		        });
		    });
		});

		/*Mostrar precio de contado*/
		function precioTotalContado( totalm2, preciom2){
			var preciototal = totalm2 * preciom2;
			console.log(preciototal);
			$('#precio-total').val(formatNumber(preciototal));//precio total terrero
			$('#mensualidad').val(formatNumber(preciototal));//1 solo pago
			$('#plazos').val('1');			
		}

		/*Validar plazos a meses y aumentar el precio total*/
		$('#plazos').on('change', function() {
  			//alert( this.value );
  			var plazo = this.value;

  			switch(plazo) {
  			  case '1':	
  			  		$('#preciom2').val(precio_metros2);//cambiar el precio
  			  		precioTotalMeses(precio_metros2);
  			    	//console.log("contado");
  			    break;
  			  case '6':
	  			  	$('#preciom2').val(seismeses);//cambiar el precio
	  			  	precioTotalMeses(seismeses);
  			    	//console.log("6 meses");
  			    break;

  			  case '12':
  			  		$('#preciom2').val(docemeses);//cambiar el precio
  			  		precioTotalMeses(docemeses);
  			    	//console.log("12 meses");
  			    break;

  			  case '18':
  			  		$('#preciom2').val(diesiochomeses);//cambiar el precio
  			  		precioTotalMeses(diesiochomeses);
  			    	//console.log("18 meses");
  			    break;

  			  default:
  			  		console.log("default");
  			}
		});

		//Funcion para obtener el precio total 6, 12, 18 meses
		function precioTotalMeses(preciomeses){
			var preciototal = total_metros2 * preciomeses;
			$('#precio-total').val(formatNumber(preciototal));//precio total terrero
			$('#mensualidad').val(0);//1 solo pago
			//$('#plazos').val('1');			
		}


		//Funcion para agregar comas a las cantidades
		function formatNumber(n) {
		  n = n.toString()
		  while (true) {
		    var n2 = n.replace(/(\d)(\d{3})($|,|\.)/g, '$1,$2$3')
		    if (n == n2) break
		    n = n2
		  }
		  return n
		}
		
	</script>


</body>
</html>