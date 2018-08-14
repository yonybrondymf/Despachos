<section class="content-header">
    <h1>
        Conductores <small>Editar</small>
    </h1>

</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-solid">
    
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <form action="<?php echo base_url();?>ingresos/conductores/update" method="POST" enctype="multipart/form-data">
                        <?php if ($this->session->flashdata("success")): ?>
                            <script>
                                swal("Registro Actualizado!", "Haz click en el botón para continuar actualizando.", "success");
                            </script>
                        <?php endif ?>
                        <?php if ($this->session->flashdata("error")): ?>
                            <script>
                                swal("Error al Registrar!", "Haz click en el botón para volver intentarlo.", "error");
                            </script>
                        <?php endif ?>
                        <input type="hidden" name="idConductor" value="<?php echo $conductor->id;?>">
                        <div class="form-group">
                            <label for="">Documento de Identidad:</label>
                            <input type="text" name="documento" class="form-control" required="required" value="<?php echo !empty(set_value('documento')) ? set_value('documento'): $conductor->documento; ?>">
                            <?php echo form_error('documento', '<span class="help-block errorValidation">', '</span>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Nombres:</label>
                            <input type="text" name="nombres" class="form-control" required="required" value="<?php echo !empty(set_value('nombres')) ? set_value('nombres'): $conductor->nombres; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Apellidos:</label>
                            <input type="text" name="apellidos" class="form-control" required="required" value="<?php echo !empty(set_value('apellidos')) ? set_value('apellidos'): $conductor->apellidos; ?>">
                        </div >
                        <div class="form-group">
                            <label for="">Dirección:</label>
                            <input type="text" name="direccion" class="form-control" required="required" value="<?php echo !empty(set_value('direccion')) ? set_value('direccion'): $conductor->direccion; ?>">
                        </div >
                        <div class="form-group">
                            <label for="">Telefono:</label>
                            <input type="text" name="telefono" class="form-control" value="<?php echo !empty(set_value('telefono')) ? set_value('telefono'): $conductor->telefono; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Correo:</label>
                            <input type="text" name="correo" class="form-control" value="<?php echo !empty(set_value('correo')) ? set_value('correo'): $conductor->correo; ?>">
                            <?php echo form_error('correo', '<span class="help-block errorValidation">', '</span>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="num_licencia">Numero de Licencia de Conducir:</label>
                            <input type="text" name="num_licencia" class="form-control" id="num_licencia" value="<?php echo !empty(set_value('num_licencia')) ? set_value('num_licencia'): $conductor->num_licencia; ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label for="cat_licencia">Categoria de Licencia de Conducir:</label>
                            <input type="text" name="cat_licencia" class="form-control" id="cat_licencia" value="<?php echo !empty(set_value('cat_licencia')) ? set_value('cat_licencia'): $conductor->cat_licencia; ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha de Vencimiento de Licencia:</label>
                            <input type="date" name="fec_licencia" class="form-control" id="fecha" value="<?php echo !empty(set_value('fec_licencia')) ? set_value('fec_licencia'): $conductor->fec_licencia; ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label for="">Foto:</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Hoja de Vida:</label>
                            <input type="file" name="hoja" class="form-control">
                        </div>
                        <?php if ($conductor->estado == 0): ?>
                            <div class="form-group">
                                <label for="">Estado:</label>
                                <select name="estado" id="estado" required class="form-control">
                                    <option value="1">Activo</option>
                                    <option value="2" selected>Inactivo</option>
                                </select>
                            </div>
                        <?php endif ?>
                        <div class="form-group">
                            <input type="submit" name="guardar" class="btn btn-success btn-flat" value="Guardar">
                            <a href="<?php echo base_url();?>reportes/conductores" class="btn btn-danger btn-flat">Volver</a>
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