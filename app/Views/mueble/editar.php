<?php echo $this->extend('layout/layoutwo.php'); ?>
    <?php echo $this->section('contenido'); ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Muebles</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">MUEBLES</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CREAR MUEBLES
                            </h2>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Datos de Presupuesto</h2>
                            <form id="form_validation_stats" method="POST" action="<?=base_url('guardarmueble')?>" enctype="multipart/form-data">
                                <?php foreach($lista as $i){?>
                                <div class="row clearfix">
                                    <input type="hidden" name="mueble" value="<?= $i['id_detalle']?>">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="presupuesto" value="<?= $i['id_presupuesto']?>" readonly="true">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="form-line">
                                            <input type="text" class="form-control date" name="uso" value="<?= $i['nombre']?>.' '.<?= $i['apellido']?>" readonly="true">
                                            <input type="hidden" class="form-control date" name="usuario" value="<?= $i['id_usuario']?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="condiciones" value="<?= $i['cond_pago']?>">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="card-inside-title">Detalles</h2>
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="transporte" value="<?= $i['transporte']?>">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="descuento" value="<?= $i['descuento']?>">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="nombre_mueble" placeholder="Nombre del mueble">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="date" class="form-control date" name="tentrega" value="<?= $i['tentrega']?>">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="garantia" value="<?= $i['garantia']?>">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="card-inside-title">Precio y Estatus</h2>
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="subtotal" value="<?= $i['subtotal']?>">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="total" value="<?= $i['total']?>">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="form-line">
                                                <select name="estatus">
                                                   <?php if ($i['statusmueble']==1) {?>
                                                    <option value="1" >Habilitado</option>
                                                    <?php } else{?>
                                                        <option value="0">Inhabilitado</option>
                                                    <?php } ?>
                                                    <option value="1">Habilitado</option>
                                                    <option value="0">Inhabilitado</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <?php } ?>
                                <button class="btn btn-primary waves-effect" type="submit">Guardar</button>
                          
                            </form>
                        </div>
                    </div>
                <!-- #END# Task Info -->
            </div>
        </div>
    </section>
    <?php echo $this->endSection();?>


