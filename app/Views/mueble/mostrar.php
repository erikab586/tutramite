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
           
            <?php foreach($lista as $i){?>
                <!-- Badges -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?=$i['nombre_mueble']?> <img src="../<?= $i['imagen']?>" width="48" height="48" alt="User" />
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                      <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Comprar</a></li>
                                    </ul>
                                </li>
                            </ul>
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
                                <li class="list-group-item">Total  <span class="badge bg-purple"><?='$ '.$i['total']?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Badges -->
            <?php } ?>
        </div>
    </section>
    <?php echo $this->endSection();?>


