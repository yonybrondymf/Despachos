<section class="content-header">
    <h1>
        Vehiculos <small> Listado</small>
    </h1>

</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-solid">
    
        <div class="box-body">

            
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="tbvehiculo" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nro. Bus</th>
                                    <th>Placa</th>
                                    <th>Empresa</th>
                                    <th>Tarjeta de Operacion</th>
                                    <th>Fecha</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($vehiculos)):?>
                                <?php foreach ($vehiculos as $vehiculo): ?>
                                    <tr>
                                        <td><?php echo $vehiculo->id?></td>
                                        <td><?php echo $vehiculo->numero?></td>
                                        <td><?php echo $vehiculo->placa?></td>
                                        <td><?php echo $vehiculo->empresa;?></td>
                                        <td><?php echo $vehiculo->tarjeta?></td>
           
                                        <td><?php echo $vehiculo->fecha?></td>
                                        <td>
                                            <div class="btn-group">
                                               
                                                <a href="<?php echo base_url();?>mantenimientos/vehiculos/<?php echo $vehiculo->id?>" class="btn btn-warning btn-flat">Ver Mantenimientos</a>
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