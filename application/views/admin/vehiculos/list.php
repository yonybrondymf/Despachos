<section class="content-header">
    <h1>
        Vehiculos <small> Listado</small> 
    </h1>
</section>

<?php if ($this->session->flashdata("success")): ?>
    <script>
        swal("Registro Actualizado!","<?php echo $this->session->flashdata("success"); ?>", "success");
    </script>
<?php endif ?>
<?php if ($this->session->flashdata("error")): ?>
    <script>
        swal("Error al Registrar!", "Haz click en el botón para volver intentarlo.", "error");
    </script>
<?php endif ?>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-solid">
    
        <div class="box-body">
            
                
            <form action="<?php echo current_url();?>" method="POST">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group" style="padding-top: 5px;">
                            <label for="">Rango de fechas:</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="date" name="fechainicio" class="form-control" value="<?php echo isset($fechainicio) ? $fechainicio:date("Y-m-d");?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="date" name="fechafinal" class="form-control" value="<?php echo isset($fechafinal) ? $fechafinal:date("Y-m-d");?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="submit" name="buscar" class="btn btn-success btn-flat" value="Buscar">
                            <a href="<?php echo base_url();?>reportes/vehiculos" class="btn btn-danger btn-flat">Reestablecer</a>
                        </div>
                    </div>
                </div>
                
            </form>
                
            <div class="callout callout-warning">
                <h3><strong>TOTAL DE REGISTROS: <span id="cantidad"><?php echo count($vehiculos);?></span></strong></h3>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="tbvehiculo" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Ruta</th>
                                    <th>Propietario</th>
                                    <th>Nro. Bus</th>
                                    <th>Placa</th>
                                    <th>Empresa</th>
                                    <th>Tarjeta de Operacion</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($vehiculos)):?>
                                <?php foreach ($vehiculos as $vehiculo): ?>
                                    <tr>
                                        <td><?php echo $vehiculo->ruta?></td>
                                        <td><?php echo $vehiculo->propietario?></td>
                                        <td><?php echo $vehiculo->numero?></td>
                                        <td><?php echo $vehiculo->placa?></td>
                                        <td><?php echo $vehiculo->empresa;?></td>
                                        <td><?php echo $vehiculo->tarjeta?></td>
                                        
                                        <td><?php echo $vehiculo->fecha?></td>
                                     
                                        <td><?php echo $vehiculo->estado == "1" ? "Activo":"Inactivo";?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-flat btn-view-vehiculo" data-toggle="modal" data-target="#modal-default" value="<?php echo $vehiculo->id;?>">
                                                    <span class="fa fa-eye"></span>
                                                </button>
                                                <a href="<?php echo base_url();?>ingresos/vehiculos/edit/<?php echo $vehiculo->id?>" class="btn btn-warning btn-flat"><span class="fa fa-pencil"></span></a>
                                                <button type="button" class="btn btn-danger btn-flat btn-delete-vehiculo" value="<?php echo $vehiculo->id;?>">
                                                    <span class="fa fa-times"></span>
                                                </button>
                                            </div>
                                            
                                        </td>

                                    </tr>
                                <?php endforeach ?>
                            <?php endif?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->


<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion del Vehiculo</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary btn-print"><span class="fa fa-print"> </span>Imprimir</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->