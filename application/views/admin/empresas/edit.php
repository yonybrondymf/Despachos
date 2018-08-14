<section class="content-header">
    <h1>
        Empresas <small>Editar</small>
    </h1>

</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-solid">
    
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <form action="<?php echo base_url();?>ingresos/empresas/update" method="POST" enctype="multipart/form-data">
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
                        <input type="hidden" name="idEmpresa" value="<?php echo $empresa->id;?>">
                        <div class="form-group">
                            <label for="">NIT:</label>
                            <input type="text" name="nit" class="form-control" required="required" value="<?php echo !empty(set_value('nit')) ? set_value('nit'):$empresa->nit; ?>">
                            <?php echo form_error('nit', '<span class="help-block errorValidation">', '</span>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" required="required" value="<?php echo !empty(set_value('nombre')) ? set_value('nombre'):$empresa->nombre; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Dirección:</label>
                            <input type="text" name="direccion" class="form-control" required="required" value="<?php echo !empty(set_value('direccion')) ? set_value('direccion'):$empresa->direccion; ?>">
                        </div >
                        <div class="form-group">
                            <label for="">Telefono:</label>
                            <input type="text" name="telefono" class="form-control" value="<?php echo !empty(set_value('telefono')) ? set_value('telefono'):$empresa->telefono; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Correo:</label>
                            <input type="text" name="correo" class="form-control" value="<?php echo !empty(set_value('correo')) ? set_value('correo'):$empresa->correo; ?>">
                        </div>
                        <?php if ($this->session->userdata("rol") == "1"):?>
                            <div class="form-group">
                                <label for="imagen">Actualizar Logo:</label>
                                <input type="file" name="file" class="form-control" id="imagen">
                            </div>
                        <?php endif ?>
                        <?php if ($empresa->estado == 0): ?>
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
                            <a href="<?php echo base_url();?>reportes/empresas" class="btn btn-danger btn-flat">Volver</a>
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