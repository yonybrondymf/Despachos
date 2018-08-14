<section class="content-header">
    <h1>
        Vehiculos <small>Editar</small>
    </h1>

</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-solid">
    
        <div class="box-body">

            <form action="<?php echo base_url();?>ingresos/vehiculos/update" method="POST">
                <?php if ($this->session->flashdata("success")): ?>
                    <script>
                        swal("Registro Guardado!", "Haz click en el botón para continuar actualizando.", "success");
                    </script>
                <?php endif ?>
                <?php if ($this->session->flashdata("error")): ?>
                    <script>
                        swal("Error al Registrar!", "Haz click en el botón para volver intentarlo.", "error");
                    </script>
                <?php endif ?>
                <div class="row">
                    <div class="col-md-6">
                        
                            
                                <input type="hidden" name="idVehiculo" value="<?php echo $vehiculo->id;?>">
                                <div class="form-group">
                                   
                                        <label for="">Placa:</label>
                                        <input type="text" name="placa" style="text-transform:uppercase;" class="form-control" value="<?php echo $vehiculo->placa?>">
                                </div>
                                <div class="form-group">
                                        <label for="">Nro Bus:</label>
                                        <input type="text" name="numero" class="form-control" value="<?php echo $vehiculo->numero?>">
                                </div>
                                <div class="form-group">
                                        <label for="">Kilometraje:</label>
                                        <input type="text" name="kilometraje" style="text-transform:uppercase;" class="form-control" value="<?php echo $vehiculo->kilometraje?>"> 
                                </div>
                                <div class="form-group">
                                        <label for="">Tarjeta de Operacion:</label>
                                        <input type="date" name="tarjeta" class="form-control" value="<?php echo $vehiculo->tarjeta?>">
                                </div>
                                
                                <div class="form-group">
                                    
                                        <label for="">Empresa:</label>
                                        <select name="empresa_id" id="empresa_id" class="form-control">
                                            <option value="">Seleccione empresa...</option>
                                            <?php foreach ($empresas as $empresa): ?>
                                                <option value="<?php echo $empresa->id;?>" <?php echo $empresa->id == $vehiculo->empresa_id ? "selected":"";?>><?php echo $empresa->nombre; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                </div>
                                <div class="form-group">
                                        <label for="">Chasis:</label>
                                        <input type="text" name="chasis" class="form-control" value="<?php echo $vehiculo->chasis;?>">
                                </div>
                                <div class="form-group">
                                        <label for="">Motor:</label>
                                        <input type="text" name="motor" class="form-control" value="<?php echo $vehiculo->motor;?>">
                                </div>
                                <div class="form-group">
                                        <label for="">Marca:</label>
                                        <input type="text" name="marca" class="form-control" value="<?php echo $vehiculo->marca;?>">
                                </div>
                                <div class="form-group">
                                        <label for="">Modelo:</label>
                                        <input type="text" name="modelo" class="form-control" value="<?php echo $vehiculo->modelo;?>">
                                </div>
                                <div class="form-group">
                                        <label for="">Ruta:</label>
                                        <input type="text" name="ruta" class="form-control" value="<?php echo $vehiculo->ruta;?>">
                                </div>
                                <?php if ($vehiculo->estado == 0): ?>
                                    <div class="form-group">
                                        <label for="">Estado:</label>
                                        <select name="estado" id="estado" required class="form-control">
                                            <option value="1">Activo</option>
                                            <option value="2" selected>Inactivo</option>
                                        </select>
                                    </div>
                                <?php endif ?>
                                <div class="form-group">
                                    <input type="submit" name="guardar" value="Guardar" class="btn btn-success btn-flat">
                                    <a href="<?php echo base_url();?>reportes/vehiculos" class="btn btn-danger btn-flat">Volver</a>
                                </div>

                                
                            
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">SOAT - Número:</label>
                            <input type="text" name="soat" class="form-control" value="<?php echo $vehiculo->soat;?>">
                        </div>
                        <div class="form-group">
                            <label for="">SOAT - Fecha de Vencimiento:</label>
                            <input type="date" name="fec_soat" class="form-control" value="<?php echo $vehiculo->fec_soat;?>">
                        </div>
                        <div class="form-group">
                            <label for="">Revision Tecnicomeanica - Fecha de Vencimiento:</label>
                            <input type="date" name="fec_revision" class="form-control" value="<?php echo $vehiculo->fec_revision;?>">
                        </div>
                        <div class="form-group">
                            <label for="">Seguros de Daños y RC - Número:</label>
                            <input type="text" name="num_seguros" class="form-control" value="<?php echo $vehiculo->num_seguros;?>">
                        </div>
                        <div class="form-group">
                            <label for="">Seguros de Daños y RC - Fecha de Vencimiento:</label>
                            <input type="date" name="fec_seguros" class="form-control" value="<?php echo $vehiculo->fec_seguros;?>">
                        </div>
                        <div class="form-group">
                            <label for="">Extintor - Fecha de Vencimiento:</label>
                            <input type="date" name="fec_extintor" class="form-control" value="<?php echo $vehiculo->fec_extintor;?>">
                        </div>
                        <div class="form-group">
                            <label for="">Propietario:</label>
                            <input type="text" name="propietario" class="form-control" value="<?php echo $vehiculo->propietario;?>">
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