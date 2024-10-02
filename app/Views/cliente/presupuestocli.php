<?php echo $this->extend('layout/front.php'); ?>
    <?php echo $this->section('contenido'); ?>   
   <!-- ESTE ES EL CUERPO DE CADA PAGINA INICIO-->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Presupuesto</h2>
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
            </div>
            <!-- #END# Widgets -->
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>PRESUPUESTOS REALIZADOS</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="<?= base_url('formPresupuesto')?>">Crear</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Modelo</th>
                                            <th>Material</th>
                                            <th>Color</th>
                                            <th>Acabado</th>
                                            <th>Medidas</th>
                                            <th>Ubicación</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($lista as $i) : ?>
                                        <tr>
                                            <td><?= $i['id_presupuesto']?></td>
                                            <td> <img src="<?= $i['imagen']?>" width="48" height="48" alt="User" /></td>
                                            <td><?= $i['material']?></td>
                                            <td><?= $i['color']?></td>
                                            <td><?= $i['acabado']?></td>
                                            <td><?= $i['ancho']?>X<?= $i['alto']?>X<?= $i['profundidad']?></td>
                                            <td><?= $i['ubicacion']?></td>
                                            <td>
                                                <a type="button" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
            </div>
        </div>
    </section>
    <!-- FINAL DEL CUERPO DE CADA PAGINA -->
    <?php echo $this->endSection();?>