<?php echo $this->extend('layout/frontwo.php'); ?>
    <?php echo $this->section('contenido'); ?>   
   <!-- ESTE ES EL CUERPO DE CADA PAGINA INICIO-->
    <style>
        .img-respon {
            width: 100%; /* Ajusta la imagen al ancho del contenedor */
            height: auto; /* Mantiene la proporción de la imagen */
        }

        .otro {
            width: 380px; /* Ancho estándar */
            height: 360px; /* Alto estándar */
            object-fit: cover; /* Ajusta la imagen para cubrir el área del contenedor */
            border: 1px solid #ddd; /* Opcional: añade un borde */
            border-radius: 4px; /* Opcional: añade bordes redondeados */
            padding: 5px; /* Opcional: añade un padding */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Opcional: añade una sombra */
        }
    </style>
   <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Confirmar Compra</h2>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">PRESUPUESTOS</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">MUEBLES</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">PROVEEDORES</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">CLIENTES</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <?php foreach($lista as $i){?>
                <!-- Badges -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?=$i['nombre_mueble']?> <img src="../<?= $i['imagen']?>" width="48" height="48" alt="User" />
                            </h2>
                            
                        </div>
                        <div class="body">
                            <ul class="list-group">
                                <li class="list-group-item">Código de Presupuesto <span class="badge "> <?='#0000-'.$i['id_presupuesto']?></span></li>
                                <li class="list-group-item">Realizado por:  <span class="badge "> <?=$i['nombre'].' '.$i['apellido']?> </span></li>
                                <li class="list-group-item">Detalle de Medidas:  <span class="badge "> <?=$i['alto'].'mts X '.$i['ancho'].'mts X '.$i['profundidad'].'mts'?> </span></li>
                                <li class="list-group-item">Detalle de Acabado:  <span class="badge "> <?=$i['acabado']?> </span></li>
                                <li class="list-group-item">Detallede Color y Material:  <span class="badge "> <?=$i['color'].' '.$i['material']?> </span></li>
                                <li class="list-group-item">Costo de transporte <span class="badge "> <?='$ '.$i['transporte']?></span></li>
                                <li class="list-group-item">Descuento  <span class="badge "> <?=$i['descuento'].'%'?></span></li>
                                <li class="list-group-item">Condiciones de Pago  <span class="badge "> <?=$i['cond_pago']?></span></li>
                                <li class="list-group-item">Fecha de Entrega  <span class="badge "> <?=$i['tentrega']?></span></li>
                                <li class="list-group-item">Tiempo de garantia en años  <span class="badge "> <?=$i['garantia'].' Años'?> </span></li>
                                <li class="list-group-item">Subtotal<span class="badge "><?='$ '.$i['subtotal']?></span></li>
                                <li class="list-group-item">Total  <span id="total" class="badge bg-purple"><?='$ '.$i['total']?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                PRESUPUESTO DE MUEBLES
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
                                    
                                </div>
                                <?php } ?>
                            </form>
                        </div>
                    </div>
                <!-- #END# Task Info -->
            </div>
                <!-- #END# Badges -->
            <?php } ?>
    <!-- FINAL DEL CUERPO DE CADA PAGINA -->
    <?php echo $this->endSection();?>