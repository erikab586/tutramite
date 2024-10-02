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
                                PRESUPUESTO
                            </h2>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Datos de Presupuesto</h2>
                               <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" value="<?= "ID Presupuesto: ". "#0000".$lista?>">
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
                                                <input type="text" class="form-control date" placeholder="<?= "Cliente: ". $presupuesto['cliente_id']?>">
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
                                                <input type="text" class="form-control date"  placeholder="<?= "Material: ". $presupuesto['material']?>">
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
                                                <input type="text" class="form-control date"  placeholder="<?= "Color: ". $presupuesto['color']?>">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="card-inside-title">Detalles</h2>
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" placeholder="<?= "Acabado: ". $presupuesto['acabado']?>">
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
                                                <input type="text" class="form-control date" placeholder="<?= "Alto(mts): ". $presupuesto['alto']?>">
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
                                                <input type="text" class="form-control"  placeholder="<?= "Ancho(mts): ". $presupuesto['ancho']?>">
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
                                                <input type="text" class="form-control date"  placeholder="<?= "Profundidad(mts): ". $presupuesto['profundidad']?>">
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
                                                <input type="text" class="form-control date" placeholder="<?= "Material I: ". $presupuesto['id_madera']?>">
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
                                                <input type="text" class="form-control date" placeholder="<?= "Material II: ". $presupuesto['id_tela']?>">
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
                                                <input type="text" class="form-control date" placeholder="<?= "Material III: ". $presupuesto['id_cuero']?>">
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
                                                <input type="text" class="form-control date" placeholder="Ubicación:">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    
                                </div>
                        </div>
                    </div>
                <!-- #END# Task Info -->
            </div>
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
                            <form id="form_validation_stats" method="POST" action="<?=base_url('formmueble')?>" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="presupuesto" id="presupuesto" value="<?= $lista?>">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <div class="form-line">
                                                <select name="usuario" id="usuario">
                                                    <option value="" disabled selected>Usuario</option>
                                                    <?php foreach ($usuario as $item){ ?>
                                                    <option value="<?= $item['id_usuario']?>"><?= $item['nombre']." ".$item['apellido']?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="card-inside-title">Información</h2>
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="nombre_mueble" id="nombre_mueble" placeholder="Nombre del Mueble">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="form-line">
                                                <select name="estatus" id="estatus">
                                                    <option value="" disabled selected>Estatus Mueble</option>
                                                    <option value="1">Habilitado</option>
                                                    <option value="0">Inhabilitado</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="card-inside-title">Materiales y servicios</h2>
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="unidad1" id="unidad1" placeholder="Unidad">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="form-line">
                                                <select name="producto1" id="producto1">
                                                    <option value="" disabled selected>Material</option>
                                                    <?php foreach ($madera as $item){ ?>
                                                    <option value="<?= $item['nombre_producto']?>"><?= $item['nombre_producto']." ".$item['precio_producto']?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="precio1" id="precio1" placeholder="Precio" readonly="true">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="unidad2" id="unidad2" placeholder="Unidad">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="form-line">
                                                <select name="producto2" id="producto2">
                                                    <option value="" disabled selected>Material</option>
                                                    <?php foreach ($madera as $item){ ?>
                                                    <option value="<?= $item['nombre_producto']?>"><?= $item['nombre_producto']." ".$item['precio_producto']?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="precio2" id="precio2" placeholder="Precio" readonly="true">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="unidad3" id="unidad3" placeholder="Unidad">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="form-line">
                                                <select name="producto3" id="producto3">
                                                    <option value="" disabled selected>Material</option>
                                                    <?php foreach ($madera as $item){ ?>
                                                    <option value="<?= $item['nombre_producto']?>"><?= $item['nombre_producto']." ".$item['precio_producto']?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="precio3" id="precio3" placeholder="Precio" readonly="true">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="unidad4" id="unidad4" placeholder="Unidad">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="form-line">
                                                <select name="producto4" id="producto4">
                                                    <option value="" disabled selected>Material</option>
                                                    <?php foreach ($madera as $item){ ?>
                                                    <option value="<?= $item['nombre_producto']?>"><?= $item['nombre_producto']." ".$item['precio_producto']?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="precio4" id="precio4" placeholder="Precio" readonly="true">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="unidad5" id="unidad5" placeholder="Unidad">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="form-line">
                                                <select name="producto5" id="producto5">
                                                    <option value="" disabled selected>Madera</option>
                                                    <?php foreach ($madera as $item){ ?>
                                                    <option value="<?= $item['nombre_producto']?>"><?= $item['nombre_producto']." ".$item['precio_producto']?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="precio5" id="precio5" placeholder="Precio" readonly="true">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="unidad6" id="unidad6" placeholder="Unidad">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="form-line">
                                                <select name="transporte" id="transporte">
                                                    <option value="" disabled selected>Precio Flete</option>
                                                    <option value="700.00">700.00</option>
                                                    <option value="750.00">750.00</option>
                                                    <option value="800.00">800.00</option>
                                                    <option value="850.00">850.00</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="precio6" id="precio6" placeholder="Precio" readonly="true">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="descuento" id="descuento" placeholder="Descuento">
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
                                                <input type="text" class="form-control date" name="subtotal" id="subtotal" placeholder="Subtotal">
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
                                                <input type="text" class="form-control date" name="total" id="total" placeholder="Total">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                    
                                </div>
                                <h2 class="card-inside-title">Observaciones</h2>
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="date" class="form-control date" name="tentrega" placeholder="Fecha Entrega">
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
                                                <input type="text" class="form-control date" name="garantia" placeholder="Garantía">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="cond_pago" placeholder="Condiciones de Pago">
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">send</i>
                                            </span>
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
    <script>
        let precio=0.0;
        let precio1=0.0;
        let precio2=0.0;
        let precio3=0.0;
        let precio4=0.0;
        let precio5=0.0;

        document.getElementById('producto1').addEventListener('change', function() {
            let unidad1 = document.getElementById('unidad1').value;
            const select = document.getElementById('producto1');
            const textProducto1 = select.selectedOptions[0].text;
            console.log(textProducto1);
            const cifra = textProducto1.match(/\d+(\.\d+)?/)[0];
            console.log(cifra);
            preciosin = parseFloat(cifra);
            const precio = preciosin.toFixed(2);
            console.log(precio); 
            let total = unidad1 * precio;
            document.getElementById('precio1').value = total;
            
        });

        document.getElementById('producto2').addEventListener('change', function() {
            let unidad1 = document.getElementById('unidad2').value;
            const select = document.getElementById('producto2');
            const textProducto1 = select.selectedOptions[0].text;
            console.log(textProducto1);
            // Extraer la cifra usando una expresión regular
            //const cifra = textProducto1.match(/\d+/)[0];
            const cifra = textProducto1.match(/\d+(\.\d+)?/)[0];
            console.log(cifra);
            // Convertir la cifra a formato decimal
            preciosin = parseFloat(cifra);
            const precio1 = preciosin.toFixed(2);
            console.log(precio); // Salida: 1478
            let total = unidad1 * precio1;
            document.getElementById('precio2').value = total;
            
        });

        document.getElementById('producto3').addEventListener('change', function() {
            let unidad1 = document.getElementById('unidad3').value;
            const select = document.getElementById('producto3');
            const textProducto1 = select.selectedOptions[0].text;
            console.log(textProducto1);
            // Extraer la cifra usando una expresión regular
            //const cifra = textProducto1.match(/\d+/)[0];
            const cifra = textProducto1.match(/\d+(\.\d+)?/)[0];
            console.log(cifra);
            preciosin = parseFloat(cifra);
            const precio2 = preciosin.toFixed(2);
            console.log(precio); 
            let total = unidad1 * precio2;
            document.getElementById('precio3').value = total;
            
        });

        document.getElementById('producto4').addEventListener('change', function() {
            let unidad1 = document.getElementById('unidad4').value;
            const select = document.getElementById('producto4');
            const textProducto1 = select.selectedOptions[0].text;
            console.log(textProducto1);
            // Extraer la cifra usando una expresión regular
            //const cifra = textProducto1.match(/\d+/)[0];
            const cifra = textProducto1.match(/\d+(\.\d+)?/)[0];
            console.log(cifra);
            // Convertir la cifra a formato decimal
            preciosin = parseFloat(cifra);
            const precio3 = preciosin.toFixed(2);
            console.log(precio); // Salida: 1478
            let total = unidad1 * precio3;
            document.getElementById('precio4').value = total;
            
        });

        document.getElementById('producto5').addEventListener('change', function() {
            let unidad1 = document.getElementById('unidad5').value;
            const select = document.getElementById('producto5');
            const textProducto1 = select.selectedOptions[0].text;
            console.log(textProducto1);
            // Extraer la cifra usando una expresión regular
            //const cifra = textProducto1.match(/\d+/)[0];
            const cifra = textProducto1.match(/\d+(\.\d+)?/)[0];
            console.log(cifra);
            // Convertir la cifra a formato decimal
            preciosin = parseFloat(cifra);
            const precio4 = preciosin.toFixed(2);
            console.log(precio); // Salida: 1478
            let total = unidad1 * precio4;
            document.getElementById('precio5').value = total;
            
        });

        document.getElementById('transporte').addEventListener('change', function() {
            let unidad1 = document.getElementById('unidad6').value;
            const select = document.getElementById('transporte');
            const textProducto1 = select.selectedOptions[0].text;
            console.log(textProducto1);
            // Extraer la cifra usando una expresión regular
            //const cifra = textProducto1.match(/\d+/)[0];
            const cifra = textProducto1.match(/\d+(\.\d+)?/)[0];
            console.log(cifra);
            // Convertir la cifra a formato decimal
            preciosin = parseFloat(cifra);
            const precio5 = preciosin.toFixed(2);
            console.log(precio); // Salida: 1478
            let total = unidad1 * precio5;
            document.getElementById('precio6').value = total;
            
        });

        document.getElementById('descuento').addEventListener('input', calcularDescuento);
        function calcularDescuento() {
            const precio1 = parseFloat(document.getElementById('precio1').value) || 0;     console.log(precio1)
            const precio2 = parseFloat(document.getElementById('precio2').value) || 0;     console.log(precio2)
            const precio3 = parseFloat(document.getElementById('precio3').value) || 0;     console.log(precio3)
            const precio4 = parseFloat(document.getElementById('precio4').value) || 0;     console.log(precio4)
            const precio5 = parseFloat(document.getElementById('precio5').value) || 0;     console.log(precio5)
            const precio6 = parseFloat(document.getElementById('precio6').value) || 0;     console.log(precio6)
            const descuento = parseFloat(document.getElementById('descuento').value) || 0; console.log(descuento)

            const subtotal = precio1 + precio2 + precio3+precio4+precio5+precio6;          console.log(subtotal)
            const total = subtotal - (subtotal * (descuento / 100));                       console.log(total)

            document.getElementById('subtotal').value = subtotal;
            document.getElementById('total').value = total;
        }
        
    </script>

    <?php echo $this->endSection();?>


