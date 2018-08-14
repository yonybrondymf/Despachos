<section class="content-header">
    <h1>
        Mantenimiento <small> Listado</small>
    </h1>

</section>

<?php if ($this->session->flashdata("success")): ?>
    <script>
        swal("Registro Exitoso!", "<?php echo $this->session->flashdata("success"); ?>", "success");
    </script>
<?php endif ?>
<?php if ($this->session->flashdata("error")): ?>
    <script>
        swal("Error al Registrar!", "<?php echo $this->session->flashdata("error"); ?>", "error");
    </script>
<?php endif ?>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-solid">
    
        <div class="box-body">
            <div class="row">
                <div class="col-md-12 text-right">
                     <button id="btn-agregar-mantenimiento" class="btn btn-primary btn-flat " data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i> Agregar Mantenimiento</button> 
                     <button type="button" class="btn btn-success btn-flat " data-toggle="modal" data-target="#modal-add-tipo"><i class="fa fa-plus"></i> Agregar Tipo Mantenimiento</button> 
                     <a href="<?php echo base_url();?>mantenimientos/vehiculos" class="btn btn-danger btn-flat">Volver</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>Vehiculo con placa: <?php echo $vehiculo->placa;?></h2>

                    <?php if (!empty($mantenimientos)): ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover tblista">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tipo Mantenimiento</th>
                                        <th>Numero Factura</th>
                                        <th>Proveedor</th>
                                        <th>Descripcion</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($mantenimientos as $mantenimiento): ?>
                                        <tr>
                                            <td><?php echo $mantenimiento->id?></td>
                                            <td><?php echo $mantenimiento->nombre;?></td>
                                            <td><?php echo $mantenimiento->numfac?></td>
                                           
                                            <td><?php echo $mantenimiento->proveedor?></td>
                                            <td><?php echo $mantenimiento->descripcion?></td>
                                            
                                            <td>
                                                <button class="btn btn-warning btn-flat btn-edit-mantenimiento" data-toggle="modal" data-target="#modal-default" value="<?php echo $mantenimiento->id;?>"><span class="fa fa-pencil"></span></button>
                                                
                                            </td>

                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                    <?php else:?>
                        <p>No se ha realizado mantenimiento alguno para este vehiculo</p>
                    <?php endif ?>

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
        <h4 class="modal-title">Informacion del Mantenimiento</h4>
      </div>
      <form action="<?php echo base_url();?>mantenimientos/vehiculos/store" method="POST" id="form-mantenimiento">
        <input type="hidden" name="idVehiculo" value="<?php echo $this->uri->segment(3);?>">
        <input type="hidden" name="idMantenimiento" id="idMantenimiento">
      <div class="modal-body">
        <div class="form-group">
            <label for="tipomantenimiento">Tipo Mantenimiento</label>
            <select name="tipomantenimiento" id="tipomantenimiento" class="form-control">
                <?php foreach ($tipomantenimientos as $tipomantenimiento): ?>
                    <option value="<?php echo $tipomantenimiento->id;?>"><?php echo $tipomantenimiento->nombre;?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="numfac">Numero de Factura:</label>
            <input type="text" name="numfac" id="numfac" class="form-control">
        </div>
        <div class="form-group">
            <label for="proveedor">Proveedor:</label>

            <select name="proveedor" id="proveedor" class="form-control">
                <?php foreach ($proveedores as $proveedor): ?>
                    <option value="<?php echo $proveedor->id;?>"><?php echo $proveedor->nombre;?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<div class="modal fade" id="modal-add-tipo">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Registro de Tipo de Mantenimiento</h4>
      </div>
      <form action="<?php echo base_url();?>mantenimientos/vehiculos/savetipo" method="POST">
        
      <div class="modal-body">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

