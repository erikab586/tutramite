<?php echo $this->extend('layout/layout.php'); ?>
    <?php echo $this->section('contenido'); ?>   
   <!-- ESTE ES EL CUERPO DE CADA PAGINA INICIO-->
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
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>LISTADO DE  MUEBLES</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="<?= base_url('presupuestos')?>">Crear Mueble</a></li>
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
                                            <th>Mueble</th>
                                            <th>Usuario </th>
                                            <th>Entrega</th>
                                            <th>SubTotal</th>
                                            <th>Total</th>
                                            <th>Estatus</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($lista as $i) : ?>
                                        <tr>
                                            <td><?= $i['id_detalle']?></td>
                                            <td> <img src="<?= $i['imagen']?>" width="48" height="48" alt="User" /></td>
                                            <td><?= $i['nombre'].' '.$i['apellido']?></td>
                                            <td><?= $i['tentrega']?></td>
                                            <td><?= $i['subtotal']?></td>
                                            <td><?= $i['total']?></td>
                                            <?php if($i['statusmueble']==1){?>
                                                <td><span class="label bg-green">Habilitado</span></td>
                                            <?php }?>
                                            <?php if($i['statusmueble']==0){?>
                                                <td><span class="label bg-red">Inabilitado</span></td>
                                            <?php }?>
                                            <td>
                                                <a href="<?php echo base_url('vermueble')."/".$i['id_detalle']?>" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">remove_red_eye</i>
                                                </a>
                                                <a href="<?php echo base_url('editarmueble')."/".$i['id_detalle']?>" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="<?php echo base_url('/eliminarmueble')."/".$i['id_detalle']?>" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
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