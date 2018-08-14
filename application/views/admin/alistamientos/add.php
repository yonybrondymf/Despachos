

<section class="content-header">
    <h1>
        Alistamientos <small>Registro</small>
    </h1>

</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-solid">
    
        <div class="box-body">
            <div class="row">
                <form action="<?php echo base_url();?>ingresos/alistamientos/store" method="POST">
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">

                                        INFORMACION DEL BUS
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group">
                                            <div class="col-md-3" style="padding-top:5px;">
                                                <label for="">NUMERO DE BUS</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="vehiculo_id" id="vehiculo_id" class="form-control" required="required">
                                                    <option value="">Numero de Bus...</option>
                                                    <?php foreach ($vehiculos as $vehiculo): ?>
                                                        <option value="<?php echo $vehiculo->id;?>"><?php echo $vehiculo->numero;?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group">
                                            <div class="col-md-3" style="padding-top:5px;">
                                                <label for="">PLACA DE VEHICULO</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="placa" readonly="readonly">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group">
                                            <div class="col-md-3" style="padding-top:5px;">
                                                <label for="">Tarjeta de Operacion</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="tarjeta" readonly="readonly">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group">
                                            <div class="col-md-3" style="padding-top:5px;">
                                                <label for="">AREA/EMPRESA</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="empresa" readonly="readonly">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group">
                                            <div class="col-md-3" style="padding-top:5px;">
                                                <label for="">KILOMETRAJE</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="kilometraje" readonly="readonly">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3" style="padding-top:5px;">
                                                <label for="">CONDUCTOR</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="conductor_id" id="conductor_id" class="form-control" readonly>
                                                    <option value="">Seleccione conductor..</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group" id="accordion2">
                      	<div class="panel panel-primary">
	                        <div class="panel-heading">
	                            <h4 class="panel-title">
	                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
	                                CHEQUEO ANTES DE INICIAR LA MARCHA
                                    </a>
	                          	</h4>
	                        </div>
	                        <div id="collapse2" class="panel-collapse collapse in">
	                            <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>DOCUMENTOS</h4>
                                        <hr>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>LICENCIA DE CONDUCION</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_licencia">
                                                    Verificar que se encuentran y su fecha de vigencia sea la adecuada
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="licencia_chk" 
                                                id="licencia_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="licencia_obs" id="licencia_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>SOAT</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_soat">
                                                    Verificar que se encuentran y su fecha de vigencia sea la adecuada
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="soat_chk" 
                                                id="soat_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="soat_obs" id="soat_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>RTM</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_rtm">
                                                    Verificar que se encuentran y su fecha de vigencia sea la adecuada
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="rtm_chk" 
                                                id="rtm_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="rtm_obs" id="rtm_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>SEGUROS DE DAÑOS Y RC</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Verificar que se encuentran y su fecha de vigencia sea la adecuada
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="seguros_chk" 
                                                id="seguros_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="seguros_obs" id="seguros_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>DIRECCIONALES</h4>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>DELANTERAS</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Funcionamiento adecuado respuesta inmediata
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="direcdelante_chk" 
                                                id="direcdelante_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="direcdelante_obs" id="direcdelante_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>TRASERAS</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Funcionamiento adecuado respuesta inmediata
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="direcatras_chk" 
                                                id="direcatras_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="direcatras_obs" id="direcatras_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>LUCES</h4>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>ALTAS</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Funcionamiento de bombillas, cubierta, sin rotura, leds no fundidos
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="lucesaltas_chk" 
                                                id="lucesaltas_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="lucesaltas_obs" id="lucesaltas_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>BAJAS</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Funcionamiento de bombillas, cubierta, sin rotura, leds no fundidos
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="lucesbajas_chk" 
                                                id="lucesbajas_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="lucesbajas_obs" id="lucesbajas_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>STOPS</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Funcionamiento de bombillas, cubierta, sin rotura, leds no fundidos
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="lucesstops_chk" 
                                                id="lucesstops_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="lucesstops_obs" id="lucesstops_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>REVERSA</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Funcionamiento de bombillas, cubierta, sin rotura, leds no fundidos
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="lucesreversa_chk" 
                                                id="lucesreversa_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="lucesreversa_obs" id="lucesreversa_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>PARQUEO</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Funcionamiento de bombillas, cubierta, sin rotura, leds no fundidos
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="lucesparqueo_chk" 
                                                id="lucesparqueo_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="lucesparqueo_obs" id="lucesparqueo_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>LIMPIABRISAS</h4>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>DER/IZQ ATRAS</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Plumillas en buen estado (limpieza y estructura)
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="limpiabrizas_chk" 
                                                id="limpiabrizas_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="limpiabrizas_obs" id="limpiabrizas_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>FRENOS</h4>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>PRINCIPAL</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Verificar cada día al momento de comenzar la marcha
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="frenoprincipal_chk" 
                                                id="frenoprincipal_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="frenoprincipal_obs" id="frenoprincipal_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>EMERGENCIA</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Verificar cada día al momento de comenzar la marcha
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="frenoemergencia_chk" 
                                                id="frenoemergencia_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="frenoemergencia_obs" id="frenoemergencia_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>LLANTAS</h4>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>DELANTERAS</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Cada día antes de iniciar la marcha, verificar su estado. Profundidad del labrado y presión
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="llantadelante_chk" 
                                                id="llantadelante_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="llantadelante_obs" id="llantadelante_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>TRASERA</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Cada día antes de iniciar la marcha, verificar su estado. Profundidad del labrado y presión
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="llantaatras_chk" 
                                                id="llantaatras_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="llantaatras_obs" id="llantaatras_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>REPUESTOS</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Cada día antes de iniciar la marcha, verificar su estado. Profundidad del labrado y presión
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="llantarepuesto_chk" 
                                                id="llantarepuesto_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="llantarepuesto_obs" id="llantarepuesto_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>ESPEJOS</h4>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>LATERARELS DER/IZQ</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Verificar estado (limpieza, sin rotura, ni opacidad) ubicación acorde a la necesidad
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="espejolateral_chk" 
                                                id="espejolateral_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="espejolateral_obs" id="espejolateral_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>RETROVISOR</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Verificar estado (limpieza, sin rotura, ni opacidad) ubicación acorde a la necesidad
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="espejoretrovisor_chk" 
                                                id="espejoretrovisor_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="espejoretrovisor_obs" id="espejoretrovisor_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>PITO</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Accionar antes de iniciar la marcha debe responder de forma adecuada
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="pito_chk" 
                                                id="pito_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="pito_obs" id="pito_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>NIVELES DE FLUIDO</h4>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>FRENOS</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Verificar estado (limpieza, sin rotura, ni opacidad) ubicación acorde a la necesidad
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="fluidofrenos_chk" 
                                                id="fluidofrenos_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="fluidofrenos_obs" id="fluidofrenos_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>ACEITE</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Verificar estado (limpieza, sin rotura, ni opacidad) ubicación acorde a la necesidad
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="fluidoaceite_chk" 
                                                id="fluidoaceite_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="fluidoaceite_obs" id="fluidoaceite_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>REFRIGERANTES</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Verificar estado (limpieza, sin rotura, ni opacidad) ubicación acorde a la necesidad
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="fluidorefrigera_chk" 
                                                id="fluidorefrigera_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="fluidorefrigera_obs" id="fluidorefrigera_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>APOYA CABEZA</h4>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>DELANTERAS</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Graduar, ajuste al iniciarla marcha según indicaciones
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="apoyadelante_chk" 
                                                id="apoyadelante_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="apoyadelante_obs" id="apoyadelante_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>TRASERAS</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Graduar, ajuste al iniciarla marcha según indicaciones
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="apoyaatras_chk" 
                                                id="apoyaatras_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="apoyaatras_obs" id="apoyaatras_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>CINTURONES DE SEGURIDAD DEL/TRAS.</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                    Verificar estado de las partes (hebillas, parte textil, entre otras) y ajuste
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="cinturon_chk" 
                                                id="cinturon_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="cinturon_obs" id="cinturon_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>ULTIMA FECHA DE MANTENIMIENTO</h4>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>CAMBIO DE ACEITE.</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                   
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="mantenaceite_chk" 
                                                id="mantenaceite_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="mantenaceite_obs" id="mantenaceite_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>SINCRONIZACIÓN</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                   
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="mantensincro_chk" 
                                                id="mantensincro_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="mantensincro_obs" id="mantensincro_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>ALINEACIÓN-BALANCEO</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                   
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="mantenalinea_chk" 
                                                id="mantenalinea_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="mantenalinea_obs" id="mantenalinea_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>CAMBIO DE LLANTAS</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                   
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="mantenllantas_chk" 
                                                id="mantenllantas_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="mantenllantas_obs" id="mantenllantas_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>ULTIMA FECHA DE MANTENIMIENTO</h4>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>REVISIÓN TECNOMECÁNICA</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                   
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="tecnomecanica_chk" 
                                                id="tecnomecanica_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="tecnomecanica_obs" id="tecnomecanica_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>SOAT</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                   
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="soatvencimiento_chk" 
                                                id="soatvencimiento_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="soatvencimiento_obs" id="soatvencimiento_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
	                        </div>
	                      </div>
                    </div>
                    <div class="panel-group" id="accordion3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion3" href="#collapse3">
                                EQUIPO DE SEGURIDAD</a>
                              </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>EXTINTOR</h4>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>FECHA DE VENCIMIENTO</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                   
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="extintor_chk" 
                                                id="extintor_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="extintor_obs" id="extintor_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>CAPACIDAD</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                   
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="capaextintor_chk" 
                                                id="capaextintor_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="capaextintor_obs" id="capaextintor_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>HERRAMIENTAS</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                   Alicate, destornillador, llaves de expansión y llaves fijas
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="herramienta_chk" 
                                                id="herramienta_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="herramienta_obs" id="herramienta_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>CRUCETA</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                   Apto para el vehículo
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="cruceta_chk" 
                                                id="cruceta_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="cruceta_obs" id="cruceta_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>GATO</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                   Capacidad para elevar el vehículo
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="gato_chk" 
                                                id="gato_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="gato_obs" id="gato_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>TACO</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                   Dos tacos aptos para bloquear el vehículo
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="taco_chk" 
                                                id="taco_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="taco_obs" id="taco_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>SEÑALES</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                   Dos señales de carretera en forma de triángulo en material reflectivo y provista de soporte para ser colocada en forma vertical o lamparas de señal de luz amarilla intermitente o de destellos
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="senales_chk" 
                                                id="senales_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="senales_obs" id="senales_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>CHALECO</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                   Dede ser reflectivo
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="chaleco_chk" 
                                                id="chaleco_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="chaleco_obs" id="chaleco_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>BOTIQUÍN</strong></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p id="fecha_seguros">
                                                   Yodopividona solución anticéptico bolsa (120ml) jabón, gasas, curas, venda elásticas, micropore rollo, algodón paquete (25gr) acetaminofen tabletas, mareol tabletas, sales de rehidratación oral, baja lenguas, suero fisiológico bolsa (250ml), guantes de latex desechable, toallas higiénicas, tijeras y termometro oral, preservativos. 
                                                </p>
                                            </div>
                                            <div class="col-md-1">  
                                                <input type="checkbox" class="checks_alistamiento" checked="checked" name="botiquin_chk" 
                                                id="botiquin_chk" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <textarea name="botiquin_obs" id="botiquin_obs"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <p><strong>OBSERVACION</strong></p>
                                            </div>
                                            <div class="col-md-6">
                                                <textarea name="final_obs" id="final_obs" class="form-control"></textarea>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                      </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-3">
                                <label for="">RESPONSABLE</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" value="<?php echo $this->session->userdata("nombres");?>">
                                <input type="hidden" name="user_registro" value="<?php echo $this->session->userdata("id");?>">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" name="guardar" class="btn btn-success btn-flat" value="Guardar">
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <!-- /.box-body -->
        
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->