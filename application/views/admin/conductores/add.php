<section class="content-header">
    <h1>
        Conductores <small>Registro</small>
    </h1>

</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-solid">
    
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <form action="<?php echo base_url();?>ingresos/conductores/store" method="POST" enctype="multipart/form-data">
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
                            <label for="">Documento de Identidad:</label>
                            <input type="text" name="documento" class="form-control" required="required" value="<?php echo set_value('documento'); ?>">
                            <?php echo form_error('documento', '<span class="help-block errorValidation">', '</span>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Nombres:</label>
                            <input type="text" name="nombres" class="form-control" required="required" value="<?php echo set_value('nombres'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Apellidos:</label>
                            <input type="text" name="apellidos" class="form-control" required="required" value="<?php echo set_value('apellidos'); ?>">
                        </div >
                        <div class="form-group">
                            <label for="">Dirección:</label>
                            <input type="text" name="direccion" class="form-control" required="required" value="<?php echo set_value('direccion'); ?>">
                        </div >
                        <div class="form-group">
                            <label for="">Telefono:</label>
                            <input type="text" name="telefono" class="form-control" value="<?php echo set_value('telefono'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Correo:</label>
                            <input type="text" name="correo" class="form-control" value="<?php echo set_value('correo'); ?>">
                            <?php echo form_error('correo', '<span class="help-block errorValidation">', '</span>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="num_licencia">Numero de Licencia de Conducir:</label>
                            <input type="text" name="num_licencia" class="form-control" id="num_licencia" required="required">
                        </div>
                        <div class="form-group">
                            <label for="cat_licencia">Categoria de Licencia de Conducir:</label>
                            <input type="text" name="cat_licencia" class="form-control" id="cat_licencia" required="required">
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha de Vencimiento de Licencia:</label>
                            <input type="date" name="fec_licencia" class="form-control" id="fecha" value="<?php echo date("Y-m-d");?>">
                        </div>
                        <div class="form-group">
                            <label for="">Foto:</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Hoja de Vida:</label>
                            <input type="file" name="hoja" class="form-control">
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