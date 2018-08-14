<div class="row">
	<div class="col-xs-12">
		<h4 class="text-center"><strong><?php echo strtoupper($conductor->nombres." ".$conductor->apellidos);?></strong></h4>
		<p>
			<strong>Documento:</strong> <?php echo $conductor->documento;?> <br>	
			<strong>Direccion:</strong> <?php echo $conductor->direccion;?> <br>
			<strong>Telefono:</strong> <?php echo $conductor->telefono;?> <br>
			<strong>Correo Electronico:</strong> <?php echo $conductor->correo;?> <br>
			<strong>Numero de Licencia de Conducir:</strong> <?php echo $conductor->num_licencia;?> <br>
			<strong>Categoria de Licencia de Conducir:</strong> <?php echo $conductor->cat_licencia;?> <br>
			<strong>Fecha de Vencimiento de Licencia de Conducir:</strong> <?php echo $conductor->fec_licencia;?> <br>

		</p>
	</div>
</div>