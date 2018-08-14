<section class="content-header">
    <h1>
        Vehiculos <small>Registro</small>
    </h1>

</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-solid">
    
        <div class="box-body">

            <form action="<?php echo base_url();?>ingresos/vehiculos/store" method="POST">
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
                <div class="row">
                    <div class="col-md-6">
                        
                                <div class="form-group">
                                    
                                        <label for="">Placa:</label>
                                        <input type="text" name="placa" style="text-transform:uppercase;" class="form-control">
                                </div>
                                <div class="form-group">
                                        <label for="">Nro Bus:</label>
                                        <input type="text" name="numero" class="form-control">
                                </div>
                                <div class="form-group">
                                        <label for="">Kilometraje:</label>
                                        <input type="text" name="kilometraje" style="text-transform:uppercase;" class="form-control"> 
                                </div>
                                <div class="form-group">
                                        <label for="">Tarjeta de Operacion:</label>
                                        <input type="date" name="tarjeta" class="form-control">
                                </div>
                                 
                                <div class="form-group">
                                    
                                        <label for="">Empresa:</label>
                                        <select name="empresa_id" id="empresa_id" class="form-control">
                                            <option value="">Seleccione empresa...</option>
                                            <?php foreach ($empresas as $empresa): ?>
                                                <option value="<?php echo $empresa->id;?>"><?php echo $empresa->nombre; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                </div>
                                <div class="form-group">
                                        <label for="">Chasis:</label>
                                        <input type="text" name="chasis" class="form-control">
                                </div>
                                <div class="form-group">
                                        <label for="">Motor:</label>
                                        <input type="text" name="motor" class="form-control">
                                </div>
                                <div class="form-group">
                                        <label for="">Marca:</label>
                                        <input type="text" name="marca" class="form-control">
                                </div>
                                <div class="form-group">
                                        <label for="">Modelo:</label>
                                        <input type="text" name="modelo" class="form-control">
                                </div>
                                <div class="form-group">
                                        <label for="">Ruta:</label>
                                        <input type="text" name="ruta" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="guardar" value="Guardar" class="btn btn-success">
                                </div>

                             
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">SOAT - Número:</label>
                            <input type="text" name="soat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">SOAT - Fecha de Vencimiento:</label>
                            <input type="date" name="fec_soat" class="form-control" value="<?php echo date("Y-m-d");?>">
                        </div>
                        <div class="form-group">
                            <label for="">Revision Tecnicomeanica - Fecha de Vencimiento:</label>
                            <input type="date" name="fec_revision" class="form-control" value="<?php echo date("Y-m-d");?>">
                        </div>
                        <div class="form-group">
                            <label for="">Seguros de Daños y RC - Número:</label>
                            <input type="text" name="num_seguros" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Seguros de Daños y RC - Fecha de Vencimiento:</label>
                            <input type="date" name="fec_seguros" class="form-control" value="<?php echo date("Y-m-d");?>">
                        </div>
                        <div class="form-group">
                            <label for="">Extintor - Fecha de Vencimiento:</label>
                            <input type="date" name="fec_extintor" class="form-control" value="<?php echo date("Y-m-d");?>">
                        </div>
                        <div class="form-group">
                            <label for="">Propietario:</label>
                            <input type="text" name="propietario" class="form-control">
                        </div>

                    </div>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->