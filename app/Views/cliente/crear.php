<?php echo $this->extend('layout/layout.php'); ?>
    <?php echo $this->section('contenido'); ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Clientes</h2>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">Clientes</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
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
                                CREAR CLIENTE
                            </h2>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Datos Personales</h2>
                            <form id="form_validation_stats" method="POST" action="<?=base_url('formcliente')?>" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="nombre" placeholder="Nombre">
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
                                                <input type="text" class="form-control date" name="apellido" placeholder="Apellido">
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
                                                <input type="text" class="form-control date" name="telefono" placeholder="Telefono">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="card-inside-title">Credenciales</h2>
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="email" placeholder="Email">
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
                                                <input type="password" class="form-control date" name="password" placeholder="Password">
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
                                                    <option value="" disabled selected>Estatus Cliente</option>
                                                    <option value="0">Activo</option>
                                                    <option value="1">Inactivo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Guardar</button>
                          
                            </form>
                        </div>
                    </div>
                <!-- #END# Task Info -->
            </div>
            
        </div>
    </section>       
           
    <?php echo $this->endSection();?>