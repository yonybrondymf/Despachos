<section class="content-header">
    <h1>
        Conductores <small> Listado</small>
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
                            <a href="<?php echo base_url();?>reportes/empresas" class="btn btn-danger btn-flat">Reestablecer</a>
                        </div>
                    </div>
                </div>
                <hr>
            </form>
                

            
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="tbconductor" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Documento</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($conductores as $conductor): ?>
                                    <tr>
                                        <td><?php echo $conductor->id?></td>
                                        <td><?php echo $conductor->documento?></td>
                                        <td><?php echo $conductor->nombres?></td>
                                        <td><?php echo $conductor->apellidos;?></td>
                                        <td><?php echo $conductor->direccion?></td>
                                        <td><?php echo $conductor->telefono?></td>
                                        <td><?php echo $conductor->correo?></td>
                                        <td><?php echo $conductor->fecha?></td>
                                        <td><?php echo $conductor->estado == 0 ?"Inactivo":"Activo";?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-flat btn-view-conductor" data-toggle="modal" data-target="#modal-default" value="<?php echo $conductor->id;?>">
                                                    <span class="fa fa-eye"></span>
                                                </button>
                                                <a href="<?php echo base_url();?>ingresos/conductores/edit/<?php echo $conductor->id?>" class="btn btn-warning btn-flat"><span class="fa fa-pencil"></span></a>
                                                <button type="button" class="btn btn-danger btn-flat btn-delete-conductor" value="<?php echo $conductor->id;?>">
                                                    <span class="fa fa-times"></span>
                                                </button>
                                            </div>
                                        </td>

                                    </tr>
                                <?php endforeach ?>
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
        <h4 class="modal-title">Informacion del Conductor</h4>
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