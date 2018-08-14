<div class="row">
	<div class="col-xs-12">
		<h4 class="text-center"><strong><?php echo strtoupper($vehiculo->placa);?></strong></h4>
		<p>
			<strong>Número:</strong> <?php echo $vehiculo->numero;?> <br>	
			<strong>Tarjeta de Operación:</strong> <?php echo $vehiculo->tarjeta;?> <br>
			<strong>Kilometraje:</strong> <?php echo $vehiculo->kilometraje;?> <br>
			<strong>Empresa:</strong> <?php echo $vehiculo->empresa;?> <br>
			<strong>Chasis:</strong> <?php echo $vehiculo->chasis;?> <br>
			<strong>Motor:</strong> <?php echo $vehiculo->motor;?> <br>
			<strong>Marca:</strong> <?php echo $vehiculo->marca;?> <br>
			<strong>Modelo:</strong> <?php echo $vehiculo->modelo;?> <br>
			<strong>Ruta:</strong> <?php echo $vehiculo->ruta;?> <br>
			<strong>Propietario:</strong> <?php echo $vehiculo->propietario;?> <br>

		</p>

		<table class="table table-bordered tb-vehiculo">
			<tbody>
				<tr>
					<th colspan="4">SOAT</th>
				</tr>
				<tr>
					<td>Número :</td>
					<td><?php echo isset($vehiculo->soat) ? $vehiculo->soat:"";?></td>
					<td>Fecha Vencimiento:</td>
					<td><?php echo isset($vehiculo->fec_soat) ? $vehiculo->fec_soat:"";?></td>
				</tr>
				<tr>
					<th colspan="4">REVISION TÉCNICOMECÁNICA</th>
				</tr>
				
					
					<td>Fecha de Vencimiento</td>
					<td colspan="3"><?php echo isset($vehiculo->fec_revision) ? $vehiculo->fec_revision : "";?></td>
				</tr>
				<tr>
					<th colspan="4">SEGUROS DAÑOS Y RC</th>
				</tr>
				
				<tr>
					<td>Numero:</td>
					<td><?php echo isset($vehiculo->num_seguros) ? $vehiculo->num_seguros : "";?></td>
					<td>Fecha de Vencimiento</td>
					<td><?php echo isset($vehiculo->fec_seguros) ? $vehiculo->fec_seguros : "";?></td>
				</tr>
				
				<tr>
					<th colspan="4">EXTINTOR</th>
				</tr>
				<tr>
					<td>Fecha de Vencimiento</td>
					<td colspan="3"><?php echo isset($vehiculo->fec_extintor) ? $vehiculo->fec_extintor : "";?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>