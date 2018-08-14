<section class="content-header">
    <h1>
        Asignaciones <small>Registro</small>
    </h1>

</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-solid">
    
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <form action="<?php echo base_url();?>ingresos/asignaciones/store" method="POST">
                        <?php if ($this->session->flashdata("success")): ?>
                            <script>
                                swal("Registro Exitoso!", "Haz click en el botón para continuar registrando.", "success");
                            </script>
                        <?php endif ?>
                        <?php if ($this->session->flashdata("error")): ?>
                            <script>
                                swal("Error al Registrar!", "Haz click en el botón para volver intentarlo.", "error");
                            </script>
                        <?php endif ?>
                        <div class="form-group">
                            <label for="">NIT:</label>
                            <select name="vehiculo_id" id="vehiculo_id" class="form-control" required="required">
                                <option value="">Seleccione vehiculo...</option>
                                <?php foreach ($vehiculos as $vehiculo): ?>
                                    <option value="<?php echo $vehiculo->id; ?>"><?php echo $vehiculo->numero; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Identificacion:</label>
                            <select name="conductores" id="conductores" class="form-control" required="required">
                                <option value="">Seleccione vehiculo...</option>
                                <?php foreach ($conductores as $conductor): ?>
                                    <?php $dataconductor = $conductor->id."*".$conductor->nombres." ".$conductor->apellidos;?>
                                    <option value="<?php echo $dataconductor; ?>"><?php echo $conductor->documento; ?></option>
                                <?php endforeach ?>
                            </select>
                            <input type="hidden" name="conductor_id" id="conductor_id">
                        </div>
                        <div class="form-group">
                            <label for="">Conductor:</label>
                            <input type="text" id="nombres" class="form-control" readonly="readonly">
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="guardar" class="btn btn-success btn-flat" value="Guardar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->