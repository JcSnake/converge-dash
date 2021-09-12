<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once('template/head.php') ?>
    <link rel="apple-touch-icon" sizes="57x57" href="./assets/images/favicon2/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./assets/images/favicon2/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/images/favicon2/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/images/favicon2/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/images/favicon2/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/images/favicon2/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./assets/images/favicon2/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/images/favicon2/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon2/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./assets/images/favicon2/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon2/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/images/favicon2/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon2/favicon-16x16.png">
    <link rel="manifest" href="./assets/images/favicon2/manifest.json">
</head>
<body id="Salamander">
    <?php include_once('template/header.php') ?>
    <?php include_once('template/sidebar.php') ?>
	<div id="sb-site">
		<div id="page-wrapper">
			<div id="page-content-wrapper">
				<div id="page-content">
					<div class="container">
						<div id="page-title">
							<h2>Converge 360 CPL 2020</h2>
						</div>
						<!-- Contenido -->
						<div class="row">
							<div class="col-sm-12">
								<div class="example-box-wrapper tabs-detcamp">
									<div class="w100 overf-h bg-white">
										<ul class="nav-responsive nav nav-tabs tabs-camp">
											<li class=" active">
												<a href="#analytics" data-toggle="tab" class="list-group-item">
													Analytics
												</a>
											</li>
											<li>
												<a href="#kpis" data-toggle="tab" class="list-group-item">
													Kpi´s
												</a>
											</li>
											<li>
												<a href="#micrositios" data-toggle="tab" class="list-group-item">
													Micrositios
												</a>
											</li>
											<li>
												<a href="#databasemanagement" data-toggle="tab" class="list-group-item">
													Data Base Management
												</a>
											</li>
											<li>
												<a href="#ventas" data-toggle="tab" class="list-group-item">
													Ventas
												</a>
											</li>
											<li>
												<a href="#inversionenmedios" data-toggle="tab" class="list-group-item">
												Inversión en medios
												</a>
											</li>
											<li>
												<a href="#perfilcampania" data-toggle="tab" class="list-group-item">
												Perfil de campaña
												</a>
											</li>
											<li>
												<a href="#legal" data-toggle="tab" class="list-group-item">
												Legal
												</a>
											</li>
										</ul>
										<div class="tipo-usuario">
											<label class="col-sm-6 text-right mrg0A">Vista usuario</label>
											<div class="col-sm-6">
												<div class="mrg0A">
													<input type="checkbox" data-on-color="success" data-size="mini" name="checkbox-example-1" class="input-switch" checked data-on-text="On" data-off-text="Off">
												</div>
											</div>
										</div>
									</div>
									<div class="tab-content w100">
										<div class="tab-pane fade active in" id="analytics">
											<div class="panel">
												<div class="panel-body">
													<div class="row">
														<div class="col-sm-12">
															<form class="form-horizontal">
																<div class="row mrg0B">
																	<div class="col-md-4 offset-md-7">
																		<div class="input-prepend input-group">
																			<label>Rango</label>
																			<span class="add-on input-group-addon">
																				<i class="glyph-icon icon-calendar"></i>
																			</span>
																			<input type="text" name="rango1" id="rango1" class="form-control" value="03/18/2013 - 03/23/2013">
																		</div>
																	</div>
																	<div class="col-md-1 text-right">
																		<a href="#" class="btn btn-default">PDF</a>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
											<div class="row mrg25B">
												<div class="col-md-2">
													<div class="content-box h100p">
														<h3 class="content-box-header text-center bg-white font-size-14 pad5A">
															CPA
														</h3>
														<div class="content-box-wrapper cost-plead df-center">
															<canvas id="pie-chart" width="200" height="250"></canvas>
														</div>
													</div>
												</div>
												<div class="col-md-10 mrg0B">
													<ul class="nav nav-tabs tabs-grafica">
														<li class="active"><a href="#grafica1" data-toggle="tab"><i class="glyph-icon icon-bar-chart"></i></a></li>
														<li class=""><a href="#grafica2" data-toggle="tab"><i class="glyph-icon icon-area-chart"></i></a></li>
													</ul>
													<div class="tab-content">
														<div class="tab-pane fade active in" id="grafica1">
														<div class="content-box pad10R pad10L pad20B h100p mrg0B">
																<div class="row pad5R pad5L">
																	<div class="col-sm-12 text-center">
																		<h2 class="bg_grisl pad10A mrg20T font-bold">InverC: $100,000</h2>
																	</div>
																</div>
																<div class="row pad15R pad15L">
																	<div class="col-md-3 pad0A">
																		<div class="panel-layout row border-0 mrg0A">
																			<div class="panel-box col-xs-6 bg-blue border-0">
																				<div class="panel-content">
																					<h2>1.692</h2>
																					<p class="font-white">Sesiones</p>
																				</div>
																			</div>
																			<div class="panel-box col-xs-6 border-0">
																				<div class="panel-content  bg-green border-0">
																					<h3>3.37%</h3>
																				</div>
																				<div class="panel-content bg-white pad5A">
																					<div class="center-vertical">
																						<ul class="center-content nav nav-justified">
																							<li>
																								<p class="font-black font-size-12">De sesiones a leads</p>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-3 pad0A">
																		<div class="panel-layout row border-0 mrg0A">
																			<div class="panel-box col-xs-6 bg-orange border-0 mrg0A">
																				<div class="panel-content">
																					<h2>57</h2>
																					<p class="font-white">Leads</p>
																				</div>
																			</div>
																			<div class="panel-box col-xs-6 border-0 mrg0A">
																				<div class="panel-content  bg-green border-0">
																					<h3>38.60%</h3>
																				</div>
																				<div class="panel-content bg-white pad5A">
																					<div class="center-vertical">
																						<ul class="center-content nav nav-justified">
																							<li>
																								<p class="font-black font-size-12">De leads a llamadas</p>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-3 pad0A">
																		<div class="panel-layout row border-0 mrg0A">
																			<div class="panel-box col-xs-6 bg-red border-0 mrg0A">
																				<div class="panel-content">
																					<h2>1.692</h2>
																					<p class="font-white">Llamadas<br/> contestadas</p>
																				</div>
																			</div>
																			<div class="panel-box col-xs-6 border-0 mrg0A">
																				<div class="panel-content  bg-green border-0">
																					<h3>3.37%</h3>
																				</div>
																				<div class="panel-content bg-white pad5A">
																					<div class="center-vertical">
																						<ul class="center-content nav nav-justified">
																							<li>
																								<p class="font-black font-size-12">De sesiones a leads</p>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-3 pad0A">
																		<div class="panel-layout row h111p border-0 mrg0A">
																			<div class="panel-box col-xs-12 bg_verde2 border-0">
																				<div class="panel-content font-white">
																					<h2>3</h2>
																					<p>ventas</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="tab-pane fade" id="grafica2">
															<div class="content-box pad10R pad10L h100p mrg0B">
																<div id="chartdiv" style="height: 250px;"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<div class="row">
														<div class="col-md-12">
															<div class="panel">
																<div class="panel-body">
																	<h3 class="title-hero">
																	Estadísticas del día
																	</h3>
																	<canvas id="line-chart" width="800" height="450"></canvas>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="panel">
																<div class="panel-body">
																	<h3 class="title-hero">
																		CPA campaña
																	</h3>
																	<div class="example-box-wrapper clearfix">
																		<canvas id="line-chart-2" width="800" height="350"></canvas>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade " id="kpis">
											<div class="panel">
												<div class="panel-body">
													<div class="row mrg20B">
														<div class="col-sm-12">
															<form class="form-horizontal">
																<div class="row mrg0B">
																	<div class="col-md-3 offset-md-8">
																		<div class="input-prepend input-group">
																			<span class="add-on input-group-addon">
																				<i class="glyph-icon icon-calendar"></i>
																			</span>
																			<input type="text" name="rango2" id="rango2" class="form-control date-pick" value="03/18/2013 - 03/23/2013">
																		</div>
																	</div>
																	<div class="col-md-1 text-right">
																		<a href="#" class="btn btn-default">CSV</a>
																	</div>
																</div>
															</form>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-12">
															<div class="bx_table">
																<table id="datatable-responsive" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
																	<thead>
																		<tr>
																			<th>Fecha</th>
																			<th>Inversión Estimada</th>
																			<th>InveR</th>
																			<th>Sesiones</th>
																			<th>CPS</th>
																			<th>Leads</th>
																			<th>CPL</th>
																			<th>Porcentaje de sesiones a Leads</th>
																			<th>Llamadas contestadas</th>
																			<th>Total de minutos de llamadas contestadas</th>
																			<th>Costo total de llamadas contestadas</th>
																			<th>Tiempo promedio de llamada</th>
																			<th>Conversión Lead To call</th>
																			<th>No. Ventas</th>
																			<th>Costo facturado Por Lead</th>
																			<th>Facturación Lead total</th>
																			<th>CPA</th>
																			<th>CPA EOS</th>
																			<th>Costo Total</th>
																			<th>Utilidad en porcentaje</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php for($x = 1; $x <= 50; $x++):?>
																		<tr>
																			<td>01/2020</td>
																			<td>$0.00</td>
																			<td>$9,366.00</td>
																			<td>1,692</td>
																			<td>$5.54</td>
																			<td>57</td>
																			<td>$164.32</td>
																			<td>3.37%</td>
																			<td>22</td>
																			<td>29</td>
																			<td>29</td>
																			<td>$21.75</td>
																			<td>1.32</td>
																			<td>0.39%</td>
																			<td>2</td>
																			<td>3.51%</td>
																			<td>3.51%</td>
																			<td>$90.00</td>
																			<td>$90.00</td>
																			<td>$90.00</td>
																		</tr>
																		<?php endfor?>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="micrositios">
											<div class="row">
												<div class="col-sm-12">
													<div class="panel">
														<div class="panel-body" id="listaMicrositio" style="display: block;">
															<div class="row">
																<div class="col-sm-12 ">
																	<form class="form-horizontal">
																		<div class="form-group">
																			<div class="col-md-3 offset-md-8 text-right">
																				<input type="text" class="form-control" id="" placeholder="Buscar…">
																			</div>
																			<div class="col-md-1 text-right">
																				<a href="#!" class="btn btn-default crearMS">
																					<i class="glyph-icon icon-plus"></i>
																				</a>
																			</div>
																		</div>
																	</form>
																</div>
															</div>
															<table id="datatable-micrositios" class="table table-striped table-bordered" cellspacing="0" width="100%">
																<thead>
																	<tr>
																		<th>Nombre</th>
																		<th>Url</th>
																		<th>Data Base</th>
																		<th>Acciones</th>
																	</tr>
																</thead>

																<tbody>
																	<?php for($x = 1; $x <= 50; $x++):?>
																	<tr>
																		<td>Converge 360 CPL1</td>
																		<td>www.salamander_commerce.com</td>
																		<td>Salamander DM</td>
																		<td class="text-center">
																			<a href="#!" class="btn btn-default editMS">
																				<i class="glyph-icon icon-pencil"></i>
																			</a>
																			<a href="#!" class="btn btn-default">
																				<i class="glyph-icon icon-trash"></i>
																			</a>
																		</td>
																	</tr>
																	<?php endfor?>
																</tbody>
															</table>
														</div>
														<div class="panel-body subCat" id="editarMicrositio" style="display: none;">
															<div class="row">
																<div class="col-sm-12 ">
																	<form class="form-horizontal">
																		<div class="row mrg20B">
																			<div class="col-md-12">
																				<h4>Editar micrositio</h4>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<label>Nombre del Micrositio</label>
																				<input type="text" class="form-control" id="" placeholder="Converge 360 CPL1">
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<label>URL</label>
																				<input type="text" class="form-control" id="" placeholder="www.salamander_commerce.com">
																			</div>
																		</div>
																		<div class="form-group pad5L pad5R">
																			<div class="col-sm-12 mrg10B text-right">
																				<button class="btn btn-alt btn-hover btn-default mrg15R returnMS"><span>Cancelar</span><i class="glyph-icon icon-close"></i></button>
																				<a class="btn btn-alt btn-hover btn-success font-white returnMS"><span>Guardar</span> <i class="glyph-icon icon-arrow-right"></i></a>
																			</div>
																		</div>
																	</form>
																</div>
															</div>
														</div>
														<div class="panel-body subCat" id="crearMicrositio" style="display: none;">
															<div class="row">
																<div class="col-sm-12 ">
																	<form class="form-horizontal">
																		<div class="row mrg20B">
																			<div class="col-md-12">
																				<h4>Agregar micrositio</h4>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<label>Nombre del Micrositio</label>
																				<input type="text" class="form-control" id="" placeholder="Nombre del micrositio">
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<label>URL</label>
																				<input type="text" class="form-control" id="" placeholder="Url">
																			</div>
																		</div>
																		<div class="form-group pad5L pad5R">
																			<div class="col-sm-12 mrg10B text-right">
																				<button class="btn btn-alt btn-hover btn-default mrg15R returnMS"><span>Cancelar</span><i class="glyph-icon icon-close"></i></button>
																				<a class="btn btn-alt btn-hover btn-success font-white returnMS" data-toggle="modal" data-target="#mssUserNot"><span>Guardar</span> <i class="glyph-icon icon-arrow-right"></i></a>
																			</div>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="databasemanagement">
											<div class="row">
												<div class="col-sm-12">
													<div class="panel">
														<div class="panel-body" id="listaDB" style="display: block;">
															<div class="row">
																<div class="col-sm-12 ">
																	<form class="form-horizontal">
																		<div class="form-group">
																			<div class="col-md-3 offset-md-9 text-right">
																				<input type="text" class="form-control" id="" placeholder="Buscar…">
																			</div>
																		</div>
																	</form>
																</div>
															</div>
															<table id="datatable-databases" class="table table-striped table-bordered" cellspacing="0" width="100%">
																<thead>
																	<tr>
																		<th>Nombre</th>
																		<th>Campaña</th>
																		<th>País</th>
																		<th>Fecha de creación</th>
																		<th>Micrositios</th>
																		<th>Acciones</th>
																	</tr>
																</thead>
																<tbody>
																	<?php for($x = 1; $x <= 50; $x++):?>
																	<tr>
																		<td><i class="glyph-icon icon-database mrg10R"></i>Salamander DM</td>
																		<td>Converge 360 2020</td>
																		<td>México</td>
																		<td>Fecha de creación</td>
																		<td>www.salamander_commerce.com</td>
																		<td class="text-center">
																			<a href="#!" class="btn btn-default verDB">
																				<i class="glyph-icon icon-eye"></i>
																			</a>
																			<a href="#!" class="btn btn-default">
																				<i class="glyph-icon icon-trash"></i>
																			</a>
																		</td>
																	</tr>
																	<?php endfor?>
																</tbody>
															</table>
														</div>
														<div class="panel-body" id="detalleDB" style="display: none;">
															<div class="row">
																<div class="col-sm-12 ">
																	<form class="form-horizontal">
																		<div class="form-group">
																			<div class="col-md-1">
																				<a href="#!" class="btn btn-default returnDB">
																					<i class="glyph-icon icon-mail-reply"></i>
																				</a>
																			</div>
																			<div class="col-md-3">
																				<h4 class="mrg10T"><i class="glyph-icon icon-database mrg5R"></i>Salamander DM <span class="font-size-12">( 15000 registros )</span></h4>
																			</div>
																			<div class="col-md-4">
																				<div class="input-prepend input-group">
																					<label>Rango</label>
																					<span class="add-on input-group-addon">
																						<i class="glyph-icon icon-calendar"></i>
																					</span>
																					<input type="text" name="rango3" id="rango8" class="form-control" value="03/18/2013 - 03/23/2013">
																				</div>
																			</div>
																			<div class="col-md-3 text-right">
																				<input type="text" class="form-control" id="" placeholder="Buscar…">
																			</div>
																			<div class="col-md-1 text-right">
																				<a href="#!" class="btn btn-default">CSV</a>
																			</div>
																		</div>
																	</form>
																</div>
															</div>
															<table id="datatable-databases2" class="table table-striped table-bordered" cellspacing="0" width="100%">
																<thead>
																	<tr>
																		<th>ID</th>
																		<th>Nombre</th>
																		<th>Email</th>
																		<th>Día de registro</th>
																		<th>Teléfono</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>2332452345</td>
																		<td>Juan Perez</td>
																		<td>correo@mail.com</td>
																		<td>15 / 01 / 2020</td>
																		<td>55876954</td>
																	</tr>
																	<?php for($x = 1; $x <= 50; $x++):?>
																	<tr>
																		<td>2332452345</td>
																		<td>Juan Perez</td>
																		<td>correo@mail.com</td>
																		<td>15 / 01 / 2020</td>
																		<td>55876954</td>
																	</tr>
																	<?php endfor?>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="ventas">
											<div class="row">
												<div class="col-sm-12">
													<div class="panel">
														<div class="panel-body" id="listaVentas" style="display: block">
															<div class="row">
																<div class="col-sm-12 ">
																	<form class="form-horizontal">
																		<div class="form-group">
																			<div class="col-md-4 offset-md-4">
																				<div class="input-prepend input-group">
																					<label>Rango</label>
																					<span class="add-on input-group-addon">
																						<i class="glyph-icon icon-calendar"></i>
																					</span>
																					<input type="text" name="rango4" id="rango4" class="form-control" value="03/18/2013 - 03/23/2013">
																				</div>
																			</div>
																			<div class="col-md-3 text-right">
																				<input type="text" class="form-control" id="" placeholder="Buscar…">
																			</div>
																			<div class="col-md-1 text-right">
																				<a href="#!" class="btn btn-default crearVentas">
																					<i class="glyph-icon icon-plus"></i>
																				</a>
																			</div>
																		</div>
																	</form>
																</div>
															</div>
															<table id="datatable-ventas" class="table table-striped table-bordered" cellspacing="0" width="100%">
																<thead>
																	<tr>
																		<th>ID</th>
																		<th>Nombre</th>
																		<th>Fecha de creación</th>
																		<th>Usuario</th>
																		<th>Acciones</th>
																	</tr>
																</thead>
																<tbody>
																	<?php for($x = 1; $x <= 50; $x++):?>
																	<tr>
																		<td>176537</td>
																		<td>salamander.csv</td>
																		<td>15 / 01 / 2020</td>
																		<td>Maya</td>
																		<td class="text-center">
																			<a href="#!" class="btn btn-default verVentas">
																				<i class="glyph-icon icon-eye"></i>
																			</a>
																			<a href="#!" class="btn btn-default">
																				<i class="glyph-icon icon-trash"></i>
																			</a>
																		</td>
																	</tr>
																	<?php endfor?>
																</tbody>
															</table>
														</div>
														<div class="panel-body subCat" id="detalleVentas" style="display: none;">
															<div class="row">
																<div class="col-sm-12 ">
																	<form class="form-horizontal">
																		<div class="form-group">
																			<div class="col-md-1">
																				<a href="#!" class="btn btn-default returnVentas">
																					<i class="glyph-icon icon-mail-reply"></i>
																				</a>
																			</div>
																			<div class="col-md-3">
																				<h4 class="mrg10T"><i class="glyph-icon icon-database mrg5R"></i>Salamander DM <span class="font-size-12">( 15000 registros )</span></h4>
																			</div>
																			<div class="col-md-3 offset-md-5 text-right">
																				<input type="text" class="form-control" id="" placeholder="Buscar…">
																			</div>
																		</div>
																	</form>
																</div>
															</div>
															<table id="datatable-ventas2" class="table table-striped table-bordered" cellspacing="0" width="100%">
																<thead>
																	<tr>
																		<th>Fecha</th>
																		<th>Nombre</th>
																		<th>Correo</th>
																		<th>Teléfono</th>
																		<th>Póliza</th>
																		<th>Monto</th>
																	</tr>
																</thead>
																<tbody>
																	<?php for($x = 1; $x <= 50; $x++):?>
																	<tr>
																		<td>15 / 01 / 2020</td>
																		<td>Juan Perez</td>
																		<td>correo@mail.com</td>
																		<td>55876954</td>
																		<td>2332452345</td>
																		<td>$2,156</td>
																	</tr>
																	<?php endfor?>
																</tbody>
															</table>
														</div>
														<div class="panel-body subCat" id="crearVentas" style="display: none;">
															<div class="row">
																<div class="col-sm-12 ">
																	<form class="form-horizontal">
																		<div class="form-group">
																			<div class="col-md-4">
																				<label class="col-md-12">Subir archivo</label>
																				<div class="input-group input-file" name="Fichier1">
																					<input type="text" class="form-control" placeholder='Selecionar archivo' />			
																					<span class="input-group-btn">
																						<button class="btn btn-default btn-choose" type="button"><i class="glyph-icon icon-plus"></i></button>
																					</span>
																				</div>
																			</div>
																			<div class="col-md-4">
																				<label>Descarga aquí el formato</label>
																				<div class="input-group">
																					<a href="#!" class="btn btn-default crearVentas">CSV</a>
																				</div>
																			</div>
																			<div class="col-md-4 text-right">
																				<button class="btn btn-alt btn-hover btn-default mrg15R returnVentas mrg25T"><span>Cancelar</span><i class="glyph-icon icon-close"></i></button>
																				<a class="btn btn-alt btn-hover btn-success font-white returnVentas mrg25T"><span>Guardar</span> <i class="glyph-icon icon-arrow-right"></i></a>
																			</div>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="inversionenmedios">
											<div class="row">
												<div class="col-sm-12">
													<div class="panel">
														<div class="panel-body">
															<form class="form-horizontal">
																<div class="row mrg20B">
																	<div class="col-sm-12">
																		<h4>Seleccionar fecha</h4>
																	</div>
																</div>
																<div class="form-group pad5L pad5R">
																	<div class="col-sm-4 mrg10B">
																		<div class="input-prepend input-group">
																			<span class="add-on input-group-addon">
																				<i class="glyph-icon icon-calendar"></i>
																			</span>
																			<input type="text" class="bootstrap-datepicker form-control" value="02/16/12" data-date-format="mm/dd/yy">
																		</div>
																	</div>
																</div>
																<div class="row mrg20B">
																	<div class="col-sm-12">
																		<h4>Métricas</h4>
																	</div>
																</div>
																<div class="form-group pad5L pad5R">
																	<div class="col-sm-2 mrg10B">
																		<label>InveIR</label>
																		<input type="text" class="form-control" id="" placeholder="InveIR">
																	</div>
																	<div class="col-sm-2 mrg10B input-group">
																		<label>Sesiones</label>
																		<input type="text" class="form-control" placeholder="Sesiones">
																	</div>
																</div>
																<div class="form-group pad5L pad5R">
																	<div class="col-sm-12 mrg10B text-right">
																		<a class="btn btn-alt btn-hover btn-success font-white" data-toggle="modal" data-target="#mssUserNot"><span>Actualizar</span> <i class="glyph-icon icon-arrow-right"></i></a>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="perfilcampania">
											<div class="row">
												<div class="col-sm-12">
													<div class="panel">
														<div class="panel-body">
															<form class="form-horizontal">
																<div class="row mrg20B">
																	<div class="col-sm-10">
																		<h4>Editar Campaña <a href="#!" class="btn btn-default mrg10L editPerfilc">
																			<i class="glyph-icon icon-pencil "></i>
																		</a></h4>
																	</div>
																</div>
																<div id="fichaPerfilc" style="display: block;">
																	<div class="row mrg10B">
																		<div class="col-md-2">
																			<p class="mrg5T">Converge 360 CPL 2020</p>
																		</div>
																	</div>
																	<div class="row mrg10B">
																		<div class="col-md-2">
																			<p class="mrg5T">Cliente</p>
																		</div>
																	</div>
																	<div class="row mrg20B">
																		<div class="col-md-2">
																			<p class="mrg5T">Base de datos</p>
																		</div>
																	</div>
																	<div class="row mrg20B">
																	<div class="col-sm-12">
																		<h4>Fechas de campaña</h4>
																	</div>
																</div>
																<div class="form-group pad5L pad5R">
																	<div class="col-sm-4 mrg10B">
																		<p><i class="glyph-icon icon-calendar"></i> 03/18/2013 - 03/23/2013</p>
																	</div>
																</div>
																<div class="row mrg20B">
																	<div class="col-sm-12">
																		<h4>Métricas</h4>
																	</div>
																</div>
																<div class="form-group pad5L pad5R">
																	<div class="col-sm-2 mrg10B">
																		<p class="mrg25T">InveIR</p>
																	</div>
																	<div class="col-sm-2 mrg10B input-group text-center">
																		<p class="mrg25T">Inver IE</p>
																	</div>
																	<div class="col-md-1">
																		<div class="bg-green font-bold pad5A mrg25T"><i class="glyph-icon icon-sort-desc mrg5R"></i> 50%</div>
																	</div>
																</div>
																<div class="form-group pad5L pad5R">
																	<div class="col-sm-2 mrg10B input-group">
																		<p class="mrg25T">InverCR</p>
																	</div>
																	<div class="col-sm-2 mrg10B input-group text-center">
																		<p class="mrg10T mrg25T">Inver CE</p>
																	</div>
																	<div class="col-md-1">
																		<div class="bg-red font-bold pad5A mrg25T"><i class="glyph-icon icon-sort-asc mrg5R"></i> 30%</div>
																	</div>
																</div>
																<div class="form-group pad5L pad5R">
																	<div class="col-sm-2 mrg10B input-group">
																		<p class="mrg25T">Sesiones</p>
																	</div>
																	<div class="col-sm-2 mrg10B input-group text-center">
																		<p class="mrg25T">InverEI</p>
																	</div>
																	<div class="col-md-1 mrg10B input-group text-center">
																		<p class="mrg25T">InverCES</p>
																	</div>
																</div>
																</div>
																<div class="subCat" id="editPerfilc" style="display: none;">
																	<div class="form-group pad5L pad5R">
																		<div class="col-sm-6 mrg10B input-group">
																			<label>Nombre de campaña</label>
																			<input type="text" class="form-control" placeholder="Converge 360 CPL 2020">
																		</div>
																		<div class="col-sm-6 mrg10B">
																			<label>Cliente</label>
																			<select name="" class="form-control h35">
																				<option selected disabled>Cliente</option>
																				<option>Option 1</option>
																				<option>Option 2</option>
																				<option>Option 3</option>
																				<option>Option 4</option>
																			</select>
																		</div>
																	</div>
																	<div class="form-group pad5L pad5R">
																		<div class="col-sm-6 mrg10B input-group">
																			<label>Base de datos</label>
																			<input type="text" name="" placeholder="Base de datos" class="form-control autocomplete-input">
																		</div>
																	</div>
																	<div class="row mrg20B">
																		<div class="col-sm-12">
																			<h4>Fechas de campaña</h4>
																		</div>
																	</div>
																	<div class="form-group pad5L pad5R">
																		<div class="col-sm-4 mrg10B">
																			<div class="input-prepend input-group">
																				<span class="add-on input-group-addon">
																					<i class="glyph-icon icon-calendar"></i>
																				</span>
																				<input type="text" name="rango6" id="rango6" class="form-control " value="03/18/2013 - 03/23/2013">
																			</div>
																		</div>
																	</div>
																	<div class="row mrg20B">
																		<div class="col-sm-12">
																			<h4>Métricas</h4>
																		</div>
																	</div>
																	<div class="form-group pad5L pad5R">
																		<div class="col-sm-2 mrg10B">
																			<label>InveIR</label>
																			<input type="text" class="form-control" id="" placeholder="InveIR">
																		</div>
																		<div class="col-sm-2 mrg10B input-group text-center">
																			<p class="mrg25T">Inver IE</p>
																		</div>
																		<div class="col-md-1">
																			<div class="bg-green font-bold pad5A mrg25T"><i class="glyph-icon icon-sort-desc mrg5R"></i> 50%</div>
																		</div>
																	</div>
																	<div class="form-group pad5L pad5R">
																		<div class="col-sm-2 mrg10B input-group">
																			<label>InverCR</label>
																			<input type="text" class="form-control" id="" placeholder="InverCR">
																		</div>
																		<div class="col-sm-2 mrg10B input-group text-center">
																			<p class="mrg10T mrg25T">Inver CE</p>
																		</div>
																		<div class="col-md-1">
																			<div class="bg-red font-bold pad5A mrg25T"><i class="glyph-icon icon-sort-asc mrg5R"></i> 30%</div>
																		</div>
																	</div>
																	<div class="form-group pad5L pad5R">
																		<div class="col-sm-2 mrg10B input-group">
																			<label>Sesiones</label>
																			<input type="text" class="form-control" placeholder="Sesiones">
																		</div>
																		<div class="col-sm-2 mrg10B input-group text-center">
																			<label>InverEI</label>
																			<input type="text" class="form-control" placeholder="Sesiones">
																		</div>
																		<div class="col-md-2 mrg10B input-group text-center">
																			<label>InverCES</label>
																			<input type="text" class="form-control" placeholder="Sesiones">
																		</div>
																	</div>
																	<div class="form-group pad5L pad5R">
																		<div class="col-sm-12 mrg10B text-right">
																			<button class="btn btn-alt btn-hover btn-default mrg15R returnPerfilc"><span>Cancelar</span><i class="glyph-icon icon-close"></i></button>
																			<a class="btn btn-alt btn-hover btn-success font-white returnPerfilc"><span>Guardar</span> <i class="glyph-icon icon-arrow-right"></i></a>
																		</div>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="legal">
											<div class="row">
												<div class="col-sm-12">
													<div class="panel">
														<div class="panel-body">
															<form class="form-horizontal">
																<div class="row mrg20B">
																	<div class="col-sm-12">
																		<h4>Términos y Condiciones</h4>
																	</div>
																</div>
																<div class="wmd-panel mrg20B">
																	<textarea class="wmd-input form-control textarea-md" id="wmd-input"></textarea>
																</div>
																<div class="row mrg20B">
																	<div class="col-sm-12">
																		<h4>Aviso de Privacidad</h4>
																	</div>
																</div>
																<div class="wmd-panel mrg20B">
																	<textarea class="wmd-input form-control textarea-md" id="wmd-input"></textarea>
																</div>
																<div class="form-group pad5L pad5R">
																	<div class="col-sm-12 mrg10B text-right">
																		<button class="btn btn-alt btn-hover btn-default mrg15R returnVentas"><span>Cancelar</span><i class="glyph-icon icon-close"></i></button>
																		<a class="btn btn-alt btn-hover btn-success font-white returnVentas"><span>Guardar</span> <i class="glyph-icon icon-arrow-right"></i></a>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Fin Contenido -->
					</div>
					<p class="text-center legales mt-5">Converge 360 2020 | Términos y condiciones</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript" src="assets/js/detalle_cliente_actions.js"></script>
<!-- Boostrap Tabs -->
<script type="text/javascript" src="assets/widgets/tabs/tabs.js"></script>

<!-- Tabdrop Responsive -->
<script type="text/javascript" src="assets/widgets/tabs/tabs-responsive.js"></script>

<!-- Uniform -->
<script type="text/javascript" src="assets/widgets/uniform/uniform.js"></script>
<script type="text/javascript" src="assets/widgets/uniform/uniform-demo.js"></script>
<script type="text/javascript" src="assets/widgets/input-switch/inputswitch.js"></script>
<script type="text/javascript">
    /* Input switch */

    $(function() { "use strict";
        $('.input-switch').bootstrapSwitch();
    });
</script>

<!-- Bootstrap Daterangepicker -->
<script type="text/javascript" src="assets/widgets/daterangepicker/moment.js"></script>
<script type="text/javascript" src="assets/widgets/daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="assets/widgets/daterangepicker/daterangepicker-demo.js"></script>
<script type="text/javascript" src="assets/widgets/datepicker/datepicker.js"></script>
<script type="text/javascript">
    /* Datepicker bootstrap */

    $(function() { "use strict";
        $('.bootstrap-datepicker').bsdatepicker({
            format: 'mm-dd-yyyy'
        });
    });

</script>
<!-- jQueryUI Autocomplete -->

<script type="text/javascript" src="assets/widgets/autocomplete/autocomplete.js"></script>
<script type="text/javascript" src="assets/widgets/autocomplete/menu.js"></script>
<script type="text/javascript" src="assets/widgets/autocomplete/autocomplete-demo.js"></script>

<!-- Data tables -->

<script type="text/javascript" src="assets/widgets/datatable/datatable.js"></script>
<script type="text/javascript" src="assets/widgets/datatable/datatable-bootstrap.js"></script>
<script type="text/javascript" src="assets/widgets/datatable/datatable-responsive.js"></script>

<!-- jQueryUI Accordion -->

<script type="text/javascript" src="assets/widgets/accordion-ui/accordion.js"></script>
<!-- Markdown -->

<script type="text/javascript" src="assets/widgets/markdown/markdown.js"></script>
<script type="text/javascript">
	$(function () {
        $("textarea#wmd-input").pagedownBootstrap();
    });

</script>

<!-- New Charts -->
<script type="text/javascript" src="assets/new_charts/Chart.min.js"></script>
<script type="text/javascript" src="assets/new_charts/charts-init.js"></script>
<script type="text/javascript" src="assets/new_charts/new_chart.js"></script>

<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
<script type="text/javascript" src="assets/js/funnel-chart.js"></script>

<script type="text/javascript" src="assets/js-init/detalle_campania.js"></script>
<?php include_once('template/footer.php') ?>