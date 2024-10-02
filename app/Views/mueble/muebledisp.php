<?php echo $this->extend('layout/layout.php'); ?>
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
            <!-- Basic Example -->
            <div class="row clearfix">
                <?php foreach ($lista as $i) : ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-cyan">
                            <h2>
                                $ <?= $i['total']?><small><?= $i['nombre_mueble']?></small>
                            </h2>
                            <ul class="header-dropdown m-r-0">
                                <li>
                                    <a href="<?php echo base_url('vermueble')."/".$i['id_detalle']?>" title="Ver">
                                      <i class="material-icons">visibility</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <img class="img-respon otro" src="<?= $i['imagen']?>">
                        </div>
                    </div>
                </div>
                <?php endforeach?>
            </div>
    <!-- FINAL DEL CUERPO DE CADA PAGINA -->
    <?php echo $this->endSection();?>