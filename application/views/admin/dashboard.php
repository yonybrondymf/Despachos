<section class="content-header">
    <h1>
        Tablero Principal
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo count($tarjetas);?></h3>

              <p>Tarjeta de Operación</p>
            </div>
            <div class="icon">
              <i class="ion ion-card"></i>
            </div>
            <a href="#" class="small-box-footer" id="show-tarjetas">Ver Información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo count($revisiones);?></h3>

              <p>Revisión Tecnicomecánica</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-compose"></i>
            </div>
            <a href="#" class="small-box-footer" id="show-revisiones">Ver Información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo count($soats);?></h3>

              <p>SOAT</p>
            </div>
            <div class="icon">
              <i class="ion ion-closed-captioning"></i>
            </div>
            <a href="#" class="small-box-footer" id="show-soats">Ver Información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo count($licencias);?></h3>

              <p>Licencias de Conducir</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-car"></i>
            </div>
            <a href="#" class="small-box-footer" id="show-licencias">Ver Información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-light-blue">
            <div class="inner">
              <h3><?php echo count($extintores);?></h3>

              <p>Extintores</p>
            </div>
            <div class="icon">
              <i class="ion ion-fireball"></i>
            </div>
            <a href="#" class="small-box-footer" id="show-extintores">Ver Información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo count($aprobados);?></h3>

              <p>Alistamientos Aprobados</p>
            </div>
            <div class="icon">
              <i class="ion ion-checkmark-circled"></i>
            </div>
            <a href="#" class="small-box-footer" id="show-aprobados">Ver Información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?php echo count($desaprobados);?></h3>

              <p>Alistamientos Desaprobados</p>
            </div>
            <div class="icon">
              <i class="ion ion-close-circled"></i>
            </div>
            <a href="#" class="small-box-footer" id="show-desaprobados">Ver Información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
    </div>


    <div class="row" id="aprobados" style="display: none;">
        <div class="col-md-12">
            <div class="box box-solid">

                <div class="box-header with-border">
                    <h3 class="box-title">Número de alistamientos aprobados del día</h3>
                    <div class="box-tools pull-right">
                        
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
            
                <div class="box-body">
                    <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nro Bus</th>
                                    <th>Conductor</th>
                                    <th>Fecha y Hora</th>
                                    <th>Observacion</th>
                                    <th>Despachador</th>
                                    <th>Jefe de Área</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($aprobados as $aprobado): ?>
                                    
                                        <tr>
                                            <td><?php echo $aprobado->id?></td>
                                            <td><?php echo $aprobado->numero;?></td>
                                            <td><?php echo $aprobado->nombres." ". $aprobado->apellidos;?></td>
                                            <td><?php echo $aprobado->fch_registro;?></td>
                                            <td><?php echo $aprobado->final_obs?></td>

                                            <td><?php echo $aprobado->inspector?></td>
                                            <td><?php echo $aprobado->aprueba?></td>

                                        </tr>
                                    
                                    
                                <?php endforeach ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="desaprobados" style="display: none;">
        <div class="col-md-12">
            <div class="box box-solid">

                <div class="box-header with-border">
                    <h3 class="box-title">Número de alistamientos no aprobados del día</h3>
                    <div class="box-tools pull-right">
                        
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
            
                <div class="box-body">
                    <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nro Bus</th>
                                    <th>Conductor</th>
                                    <th>Fecha y Hora</th>
                                    <th>Observacion</th>
                                    <th>Despachador</th>
                                    <th>Jefe de Área</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($desaprobados as $desaprobado): ?>
                                    
                                        <tr>
                                            <td><?php echo $desaprobado->id?></td>
                                            <td><?php echo $desaprobado->numero;?></td>
                                            <td><?php echo $desaprobado->nombres." ". $desaprobado->apellidos;?></td>
                                            <td><?php echo $desaprobado->fch_registro;?></td>
                                            <td><?php echo $desaprobado->final_obs?></td>

                                            <td><?php echo $desaprobado->inspector?></td>
                                            <td><?php echo $desaprobado->aprueba?></td>

                                        </tr>
                                    
                                    
                                <?php endforeach ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="tarjetas" style="display: none;">
        <div class="col-md-12">
            <div class="box box-solid">

                <div class="box-header with-border">
                    <h3 class="box-title">Tarjetas de Operacion que caduquen en los proximos 30 dias</h3>
                    <div class="box-tools pull-right">
                        
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
            
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Placa</th>
                                <th>Número</th>
                                <th>Fecha de Vencimiento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($tarjetas)): ?>
                                <?php $i = 1;?>
                                <?php foreach ($tarjetas as $tarjeta): ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $tarjeta->placa; ?></td>
                                        <td><?php echo $tarjeta->numero; ?></td>
                                        <td><?php echo $tarjeta->tarjeta; ?></td>
                                    </tr>
                                    <?php $i++;?>
                                <?php endforeach ?>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="revisiones" style="display: none;">
        <div class="col-md-12">
            <div class="box box-solid">

                <div class="box-header with-border">
                    <h3 class="box-title">Revisión Tecnicomecánicas que caduquen en los proximos 30 dias</h3>
                    <div class="box-tools pull-right">
                        
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
            
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Placa</th>
                                <th>Número</th>
                                <th>Fecha de Vencimiento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($revisiones)): ?>
                                <?php $i = 1;?>
                                <?php foreach ($revisiones as $revision): ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $revision->placa; ?></td>
                                        <td><?php echo $revision->numero; ?></td>
                                        <td><?php echo $revision->fec_revision; ?></td>
                                    </tr>
                                    <?php $i++;?>
                                <?php endforeach ?>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="soats" style="display: none;">
        <div class="col-md-12">
            <div class="box box-solid">

                <div class="box-header with-border">
                    <h3 class="box-title">SOAT que caduquen en los proximos 30 dias</h3>
                    <div class="box-tools pull-right">
                        
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
            
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Placa</th>
                                <th>Número</th>
                                <th>Fecha de Vencimiento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($soats)): ?>
                                <?php $i = 1;?>
                                <?php foreach ($soats as $soat): ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $soat->placa; ?></td>
                                        <td><?php echo $soat->numero; ?></td>
                                        <td><?php echo $soat->fec_soat; ?></td>
                                    </tr>
                                    <?php $i++;?>
                                <?php endforeach ?>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="licencias" style="display: none;">
        <div class="col-md-12">
            <div class="box box-solid">

                <div class="box-header with-border">
                    <h3 class="box-title">Licencias de conducir que caduquen en los proximos 30 dias</h3>
                    <div class="box-tools pull-right">
                        
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
            
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Cédula</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Fecha de Vencimiento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($licencias)): ?>
                                <?php $i = 1;?>
                                <?php foreach ($licencias as $licencia): ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $licencia->documento; ?></td>
                                        <td><?php echo $licencia->nombres; ?></td>
                                        <td><?php echo $licencia->apellidos; ?></td>
                                        <td><?php echo $licencia->fec_licencia; ?></td>
                                    </tr>
                                    <?php $i++;?>
                                <?php endforeach ?>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="extintores" style="display: none;">
        <div class="col-md-12">
            <div class="box box-solid">

                <div class="box-header with-border">
                    <h3 class="box-title">Extintores que caduquen en los proximos 30 dias</h3>
                    <div class="box-tools pull-right">
                        
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
            
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Placa</th>
                                <th>Número</th>
                                <th>Fecha de Vencimiento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($extintores)): ?>
                                <?php $i = 1;?>
                                <?php foreach ($extintores as $extintor): ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $extintor->placa; ?></td>
                                        <td><?php echo $extintor->numero; ?></td>
                                        <td><?php echo $extintor->fec_extintor; ?></td>
                                    </tr>
                                    <?php $i++;?>
                                <?php endforeach ?>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</section>
<!-- /.content -->