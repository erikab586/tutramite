<?php echo $this->extend('layout/layoutwo.php'); ?>
    <?php echo $this->section('contenido'); ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Productos</h2>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">Producto</div>
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
                                EDITAR PRODUCTO
                            </h2>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Datos de Productos</h2>
                            <form id="form_validation_stats" method="POST" action="<?=base_url('guardarproducto')?>" enctype="multipart/form-data">
                               <?php foreach($producto as $i){?>
                                <div class="row clearfix">
                                    <input type="hidden" class="form-control date" name="id" value="<?= $i['id_producto']?>">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="form-line">
                                                <select name="proveedor">
                                                    <option value="<?= $i['id_proveedor']?>" disabled selected><?= $i['nombre_empresa']?></option>
                                                    <?php foreach ($lista as $item){ ?>
                                                    <option value="<?= $item['id_proveedor']?>"><?= $item['nombre_empresa']?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="producto" value="<?= $i['nombre_producto']?>">
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
                                                <input type="file" name="imagen" class="form-control date" accept="image/jpg, image/jpeg, image/png">
                                            </div>
                                        </div>
                                    </div>
                                    
                                <h2 class="card-inside-title">Precio y disponibilidad</h2>
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="form-line">
                                                <select name="tipo">
                                                    <option value="<?= $i['tipo_producto']?>"><?= $i['tipo_producto']?></option>
                                                    <option value="Madera Maciza">Madera Maciza</option>
                                                    <option value="Madera Contrachapada">Madera Contrachapada</option>
                                                    <option value="Madera Melamina">Madera Melamina</option>
                                                    <option value="Madera MDF">Madera MDF</option>
                                                    <option value="Metal">Metal</option>
                                                    <option value="Vidrio">Vidrio</option>
                                                    <option value="Plástico">Plástico</option>
                                                    <option value="Ratán Y Mimbre">Ratán Y Mimbre</option>
                                                    <option value="Cuero">Cuero</option>
                                                    <option value="Telas">Telas</option>
                                                    <option value="Líquidos">Líquidos</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="precio" value="<?= $i['precio_producto']?>">
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
                                                    <?php if($i['status']==1){?>
                                                        <option value="1">Activo</option>
                                                    <?php }else {?>
                                                        <option value="0">Inactivo</option>
                                                    <?php } ?>
                                                    <option value="1">Activo</option>
                                                    <option value="0">Inactivo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="card-inside-title">Detalle de productos</h2>
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="color" value="<?= $i['color']?>">
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
                                                <input type="text" class="form-control date" name="ancho" value="<?= $i['ancho']?>">
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
                                                <input type="text" class="form-control date" name="alto" value="<?= $i['alto']?>">
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
                                                <input type="text" class="form-control date" name="profundidad" value="<?= $i['profundidad']?>">
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
                                                <input type="text" class="form-control date" name="peso" value="<?= $i['peso']?>">
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
                                                <input type="text" class="form-control date" name="observacion" value="<?= $i['observacion']?>">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                                <button class="btn btn-primary waves-effect" type="submit">Guardar</button>
                          
                            </form>
                        </div>
                    </div>
                <!-- #END# Task Info -->
            </div>
            
        </div>
    </section>       
           
    <?php echo $this->endSection();?>