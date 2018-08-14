<div class="row">
	<div class="col-xs-12">
		<h4 class="text-center"><?php echo $alistamiento->empresa;?></h4>
		<img src="<?php echo base_url();?>assets/images/empresas/<?php echo $alistamiento->logo;?>" alt="logo empresa" class="img-responsive" style="margin:0px auto;width:200px; height: 100px;">
		<p class="text-center">
			<strong>Formulario </strong> <br>
			<strong>Fecha y hora:</strong> <?php echo $alistamiento->fch_registro;?>
		</p>

		<table class="table table-bordered tb-alistamiento">
			<tbody>
				<tr>
					<td>NUMERO DE BUS</td>
					<td><?php echo $alistamiento->numero;?></td>
					<td>KILOMETRAJE</td>
					<td><?php echo $alistamiento->kilometraje;?></td>
				</tr>
				<tr>
					<td>PLACA VEHICULO</td>
					<td><?php echo $alistamiento->placa;?></td>
					<td>EMPRESA</td>
					<td><?php echo $alistamiento->empresa;?></td>
				</tr>
				<tr>
					<td>TARJETA DE OPERACION</td>
					<td><?php echo $alistamiento->tarjeta;?></td>
					<td>C.C</td>
					<td><?php echo $alistamiento->documento;?></td>
				</tr>
				<tr>
					<td>LIC. DE CONDUCCION</td>
					<td><?php echo $alistamiento->fec_licencia;?></td>
					<td>SOAT</td>
					<td><?php echo $alistamiento->fec_soat;?></td>
				</tr>
				<tr>
					<td>RTM</td>
					<td><?php echo $alistamiento->fec_revision;?></td>
					<td>SEG. DE DAÑOS Y RC</td>
					<td><?php echo $alistamiento->fec_seguros;?></td>
				</tr>
				<tr>
					<th colspan="4">Direccionales</th>
				</tr>
				<tr>
					<td>Delanteras</td>
					<td><?php echo $alistamiento->direcdelante_chk == 1 ? "SI":"NO";?></td>
					<td>traseras</td>
					<td><?php echo $alistamiento->direcatras_chk == 1 ? "SI":"NO";?></td>
				</tr>
				<tr>
					<th colspan="4">Luces</th>
				</tr>
				<tr>
					<td>Altas</td>
					<td><?php echo $alistamiento->lucesaltas_chk == 1 ? "SI":"NO";?></td>
					<td>stops</td>
					<td><?php echo $alistamiento->lucesstops_chk == 1 ? "SI":"NO";?></td>
				</tr>
				<tr>
					<td>Bajas</td>
					<td><?php echo $alistamiento->lucesbajas_chk == 1 ? "SI":"NO";?></td>
					<td>reversa</td>
					<td><?php echo $alistamiento->lucesreversa_chk == 1 ? "SI":"NO";?></td>
				</tr>
				<tr>
					<th colspan="4">Limpia Brisas</th>
				</tr>
				<tr>
					<td>Izquierda</td>
					<td><?php echo $alistamiento->limpiabrizas_chk == 1 ? "SI":"NO";?></td>
					<td>Derecha</td>
					<td><?php echo $alistamiento->limpiabrizas_chk == 1 ? "SI":"NO";?></td>
				</tr>
				<tr>
					<th colspan="4">Llantas</th>
				</tr>
				<tr>
					<td>Delanteras</td>
					<td><?php echo $alistamiento->llantadelante_chk == 1 ? "SI":"NO";?></td>
					<td>Traseras</td>
					<td><?php echo $alistamiento->llantaatras_chk == 1 ? "SI":"NO";?></td>
				</tr>
				<tr>
					<td>Repuestos</td>
					<td><?php echo $alistamiento->llantarepuesto_chk == 1 ? "SI":"NO";?></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<th colspan="4">Espejos</th>
				</tr>
				<tr>
					<td>Izquierdo</td>
					<td><?php echo $alistamiento->espejolateral_chk == 1 ? "SI":"NO";?></td>
					<td>Derecho</td>
					<td><?php echo $alistamiento->espejolateral_chk == 1 ? "SI":"NO";?></td>
				</tr>
				<tr>
					<td>Retrovisor</td>
					<td><?php echo $alistamiento->espejoretrovisor_chk == 1 ? "SI":"NO";?></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<th colspan="4">Niveles fluido</th>
				</tr>
				<tr>
					<td>Frenos</td>
					<td><?php echo $alistamiento->fluidofrenos_chk == 1 ? "SI":"NO";?></td>
					<td>Aceite</td>
					<td><?php echo $alistamiento->fluidoaceite_chk == 1 ? "SI":"NO";?></td>
				</tr>
				<tr>
					<td>Refrigerantes</td>
					<td><?php echo $alistamiento->fluidorefrigera_chk == 1 ? "SI":"NO";?></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<th colspan="4">Apoya Cabezas</th>
				</tr>
				<tr>
					<td>Delanteras</td>
					<td><?php echo $alistamiento->apoyadelante_chk == 1 ? "SI":"NO";?></td>
					<td>Traseras</td>
					<td><?php echo $alistamiento->apoyaatras_chk == 1 ? "SI":"NO";?></td>
				</tr>
				<tr>
					<td>Cinturón de Seguridad</td>
					<td><?php echo $alistamiento->cinturon_chk == 1 ? "SI":"NO";?></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<th colspan="4">Mantenimiento</th>
				</tr>
				<tr>
					<td>Cambio de Aceite</td>
					<td><?php echo $alistamiento->mantenaceite_chk == 1 ? "SI":"NO";?></td>
					<td>Sincronización</td>
					<td><?php echo $alistamiento->mantensincro_chk == 1 ? "SI":"NO";?></td>
				</tr>
				<tr>
					<td>Alineacion y Balanceo</td>
					<td><?php echo $alistamiento->mantenalinea_chk == 1 ? "SI":"NO";?></td>
					<td>Cambio de Llantas</td>
					<td><?php echo $alistamiento->mantenllantas_chk == 1 ? "SI":"NO";?></td>
				</tr>
				<tr>
					<td>Revisión Tecno. Mec</td>
					<td><?php echo $alistamiento->lucesaltas_chk == 1 ? "SI":"NO";?></td>
					<td>SOAT</td>
					<td><?php echo $alistamiento->lucesaltas_chk == 1 ? "SI":"NO";?></td>
				</tr>
				<tr>
					<td>Extintor</td>
					<td></td>
					<td>Capacidad</td>
					<td></td>
				</tr>
				<tr>
					<td>Alicates</td>
					<td></td>
					<td>Destornillador</td>
					<td></td>
				</tr>
				<tr>
					<td>Llaves exp.</td>
					<td></td>
					<td>Llaves fijas</td>
					<td></td>
				</tr>
				<tr>
					<td>Cruceta</td>
					<td><?php echo $alistamiento->cruceta_chk == 1 ? "SI":"NO";?></td>
					<td>Gato</td>
					<td><?php echo $alistamiento->gato_chk == 1 ? "SI":"NO";?></td>
				</tr>
				<tr>
					<td>Taco</td>
					<td><?php echo $alistamiento->taco_chk == 1 ? "SI":"NO";?></td>
					<td>Señales</td>
					<td></td>
				</tr>
				<tr>
					<td>Señales</td>
					<td></td>
					<td>Chaleco</td>
					<td></td>
				</tr>
				<tr>
					<td>Botiquín</td>
					<td><?php echo $alistamiento->botiquin_chk == 1 ? "SI":"NO";?></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>Observaciones</td>
					<td colspan="3"><?php echo $alistamiento->final_obs;?></td>
				</tr>
				<tr>
					<th colspan="4">Responsables</th>
				</tr>
				<tr>
					<td>Conductor</td>
					<td><?php echo $alistamiento->nombres." ".$alistamiento->apellidos;?></td>
					<td>C.C</td>
					<td><?php echo $alistamiento->documento;?></td>
				</tr>
				<tr>
					<td>Inspector</td>
					<td><?php echo $alistamiento->inspector;?></td>
					<td><?php echo $alistamiento->cedula_i;?></td>
					<td>
						<img src="<?php echo base_url();?>assets/images/firmas/<?php echo $alistamiento->firma_i;?>" style="height: 120px !important; width: 120px;">
					</td>
				</tr>

				<tr>
					<td>Aprueba</td>
					<td><?php echo $alistamiento->aprueba;?></td>
					<td><?php echo $alistamiento->cedula_a;?></td>
					<td>
						<img src="<?php echo base_url();?>assets/images/firmas/<?php echo $alistamiento->firma_a;?>" class="img-responsive" style="height: 120px !important; width: 120px;">
					</td>
				</tr>

			</tbody>
		</table>
	</div>
</div>
