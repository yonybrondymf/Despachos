<section class="content-header">
    <h1>
        Alistamientos <small> Listado</small>
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
                            <a href="<?php echo base_url();?>reportes/empresas" class="btn btn-danger btn-flat">Reestablecer</a>
                        </div>
                    </div>
                </div>
                <hr>
            </form>
                

            
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="tbalistamiento" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Ruta</th>
                                    <th>Nro Bus</th>
                                    <th>Conductor</th>
                                    <th>Fecha y Hora</th>
                                    <th>Observacion</th>
                                    <th>Estado</th>
                                    <th>Despachador</th>
   
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($alistamientos as $alistamiento): ?>
                                    <tr>
                                        <td><?php echo $alistamiento->ruta?></td>
                                        <td><?php echo $alistamiento->numero;?></td>
                                        <td><?php echo $alistamiento->nombres." ". $alistamiento->apellidos;?></td>
                                        <td><?php echo $alistamiento->fch_registro;?></td>
                                        <td><?php echo $alistamiento->final_obs?></td>

                                        <?php 
                                            if ($alistamiento->estado == 0){
                                                $msjEstado = "Pendiente"; 
                                            } else if($alistamiento->estado == 1){
                                                $msjEstado = "Aprobado"; 
                                            } else{
                                                $msjEstado = "No Aprobado"; 
                                            }
                                        ?>
                                        <td><?php echo $msjEstado?></td>
                                        <td><?php echo $alistamiento->inspector?></td>
                                        
                                        <td>
                                            <button type="button" class="btn btn-primary btn-flat btn-view-alistamiento" data-toggle="modal" data-target="#modal-default" value="<?php echo $alistamiento->id;?>"><span class="fa fa-eye"></span></button>
                                            <?php if ($alistamiento->estado == 0): ?>
                                                <div class="btn-group">
                                                    <button type="button"  class="btn btn-flat btn-success btn-aprobar" value="<?php echo $alistamiento->id;?>*1">Aprobar</button>
                                                    <button type="button"  class="btn btn-flat btn-danger btn-aprobar" value="<?php echo $alistamiento->id;?>*2">No Aprobar</button>
                                                </div>
                                            <?php endif ?>
                                        </td>

                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-success btn-flat" id="btn-aprobar-todo">
                        <span class="fa fa-check"></span> Aprobar todos
                    </button>
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
        <h4 class="modal-title">Informacion del Alistamiento</h4>
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
