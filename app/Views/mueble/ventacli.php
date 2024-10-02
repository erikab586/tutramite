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
        <script src="https://www.paypal.com/sdk/js?client-id=AYGIHt7_LkaTraUAShy0ST1_HhLTnyBoh02XvlsR0gyVvtvWayPxRQLXr3lnwwyhb-R67VNtyvV0ykCN&currency=USD"></script>
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
                            <ul class="header-dropdown m-r--5">
                               <li><div id="paypal-button-container"></div></li>
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
                                <li class="list-group-item">Total  <span id="total" class="badge bg-purple"><?='$ '.$i['total']?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Badges -->
            <?php } ?>
    <!-- FINAL DEL CUERPO DE CADA PAGINA -->
    <script>
			var t=0;
			var select = document.getElementById('total');
            select.addEventListener('change',
            function(){
             var selectedOption = this.options[select.selectedIndex];
             var total=selectedOption.value;
             t= parseInt(total);
             console.log(t);
             });
			paypal.Buttons({
				style:{
					layout:'horizontal',
					color:'blue',
					shape:'pill',
					label: 'pay'
				},
				createOrder: function(data,actions){
					return actions.order.create({
						purchase_units:[{amount:{ value:t
						}
					}]
					});
				},
				onApprove: function(data, actions){
					actions.order.capture().then(function(detalles){
						console.log(detalles);
						let url='captura.php';
						return fetch(url,{
							method:'post',
							headers:{
								'content-type':'application/json'
							},
							body: JSON.stringify({
								detalles:detalles
							})
						})
                        alert("Pago Exitoso");
						/*window.location.href="completado.php"*/
					});
				},
				onCancel:function(data){
					alert("Pago Cancelado");
					console.log(data); /*windows.location.href"completado."*/
				},
				
			}).render('#paypal-button-container')
	</script>
    <?php echo $this->endSection();?>