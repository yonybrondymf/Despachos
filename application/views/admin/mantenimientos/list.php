<section class="content-header">
    <h1>
        Empresas <small> Listado</small>
    </h1>

</section>

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
                            <a href="<?php echo base_url();?>reportes/mantenimientos" class="btn btn-danger btn-flat">Reestablecer</a>
                        </div>
                    </div>
                </div>
                <hr>
            </form>
                

            
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover tblista" id="tbmantenimiento">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Vehiculo</th>
                                    <th>Tipo Mantenimiento</th>

                                    <th>Num. Factura</th>
                                    <th>Proveedor</th>
                                    <th>Descripcion</th>
                                    <th>Fecha de Registro</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($mantenimientos as $mantenimiento): ?>
                                    <tr>
                                        <td><?php echo $mantenimiento->id?></td>
                                        <td><?php echo $mantenimiento->placa?></td>
                                        <td><?php echo $mantenimiento->nombre?></td>
                                        <td><?php echo $mantenimiento->numfac?></td>
                                        <td><?php echo $mantenimiento->proveedor?></td>
                                        <td><?php echo $mantenimiento->descripcion?></td>
                                        <td><?php echo $mantenimiento->fecha?></td>

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


