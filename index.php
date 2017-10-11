<?php
include('inc/header.php');
include('inc/conexion.php');
      
?>
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">
									Reporte por Empresas
								</h3>
							</div>
							<div>
								<span class="m-subheader__daterange">
									<span class="m-subheader__daterange-label">
										<span >Seleccione la Empresa: </span>
										<form method="get">
										<select class="m-bootstrap-select m_selectpicker"  name="empresa" onchange='this.form.submit()'>
                  <!--select para los permisionarios-->
                  <option value="0">Seleccione</option>
                  <?php

          $sql = "SELECT * FROM empresas";
          $result_scale = mysqli_query($con, $sql)or die(mysqli_error());
          while($row = mysqli_fetch_array($result_scale))
          {
           unset($id, $name);
              $id = $row['id_empresa'];
              $name = $row['nombre_empresa']; 
              echo '<option value="'.$id.'">'.$name.'</option>';
          }
          
         ?> 
         </select>
         <noscript><input type="submit" value="Submit"></noscript>
</form>
									</span>
									
								</span>
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">

						<!--Begin::Main Portlet-->

						<!--End::Main Portlet-->
						<!--Begin::Main Portlet-->
						<div class="m-portlet m-portlet--mobile">
       <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
         <div class="m-portlet__head-title">
          <h3 class="m-portlet__head-text">
           <?php
															            if (isset($_GET["empresa"])) {
															            	$id = $_GET["empresa"];
															            			 $sql = "SELECT * FROM empresas WHERE id_empresa='".$id."'";
          $result_scale = mysqli_query($con, $sql)or die(mysqli_error());
          while($row = mysqli_fetch_array($result_scale))
          {
           unset($id, $name);
              $id = $row['id_empresa'];
              $name = $row['nombre_empresa']; 
              echo $name;
          }
															            }?>
           <small>
            Reportes
           </small>
          </h3>
         </div>
        </div>
       </div>

							<div class="m-portlet__body  m-portlet__body--no-padding">
								<div class="row m-row--no-padding m-row--col-separator-xl">
									<div class="col-xl-4">
										<!--begin:: Widgets/Stats2-1 -->
										<div class="m-widget1">
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">
															Folios
														</h3>
														<span class="m-widget1__desc">
															Total de Folios
														</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-brand">
															            <?php
															            if (isset($_GET["empresa"])) {
													$empresa = $_GET["empresa"];		            	
			          $sql = "SELECT COUNT(*) as total_rem FROM remisiones WHERE empresa ='".$empresa."'";
			          $result_scale = mysqli_query($con, $sql)or die(mysqli_error());
			          while($row = mysqli_fetch_array($result_scale))
			          {
			           unset($id, $name);
			              $rem = $row['total_rem'];
			              echo $rem;
			          }
			          }
			         ?> 
														</span>
													</div>
												</div>
											</div>
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">
															Unidades m3
														</h3>
														<span class="m-widget1__desc">
															 Total de m3
														</span>
														</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-danger">
															<?php
															            if (isset($_GET["empresa"])) {
													$empresa = $_GET["empresa"];		            	
			          $sql = "SELECT SUM(unidad_m3) as total_u FROM remisiones WHERE empresa ='".$empresa."'";
			          $result_scale = mysqli_query($con, $sql)or die(mysqli_error());
			          while($row = mysqli_fetch_array($result_scale))
			          {
			           unset($m3);
			              $m3 = $row['total_u'];
			              echo $m3;
			          }
			          }
			         ?> 
														</span>
													</div>
												</div>
											</div>
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">
															Ganancias
														</h3>
														<span class="m-widget1__desc">
															Ganancias por los viajes
														</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-success">
															<?php
															            if (isset($_GET["empresa"])) {
													$empresa = $_GET["empresa"];		            	
			          $sql = "SELECT SUM(total) as total FROM viajes inner join remisiones on viajes.no_remision = remisiones.no_remision WHERE empresa ='".$empresa."'";
			          $result_scale = mysqli_query($con, $sql)or die(mysqli_error());
			          while($row = mysqli_fetch_array($result_scale))
			          {
			           unset($total);
			              $total = $row['total'];
			              echo $total;
			          }
			          }
			         ?> 
														</span>
													</div>
												</div>
											</div>
										</div>
										<!--end:: Widgets/Stats2-1 -->
									</div>
									<div class="col-xl-8">
										<!--begin:: Widgets/Profit Share-->
										<div class="m-widget14">
										<!-- aqui ira la datatable-->
											<table id="myTable" class="table table-striped table-bordered" width="100%">
												<thead>
												<tr>
													<th>Remision</th>
													<th>Fecha</th>
													<th>Camion</th>
													<th>Operador</th>
													<th>m3</th>
												</tr>
												</thead>
												<tbody>
												<?php
																 
																  $sql = "SELECT * FROM remisiones inner join empresas on remisiones.empresa = empresas.id_empresa
inner join materiales on materiales.id_material = remisiones.material	WHERE empresa ='".$empresa."'";
																  $result_scale = mysqli_query($con, $sql)or die(mysqli_error());
																  while($row = mysqli_fetch_array($result_scale)){
																   $remision     = $row['no_remision'];
																   $fecha     = $row['fecha_remision'];
																   $placas     = $row['placas_camion'];												$operador     = $row['operador'];
																   $unidades     = $row['unidad_m3'];								   
																  
																   // Now for each looped row
																	echo utf8_encode(' <tr>
																		<td>'.$remision.'</td>
																		<td>'.$fecha.'</td>
																		<td>'.$placas.'</td>
																		<td>'.$operador.'</td>
																		<td>'.$unidades.'</td>
																	</tr>');																												  
																  } // End our scale while loop		
																  
													?>
											   
												</tbody>
											</table>
										</div>
										<!--end:: Widgets/Profit Share-->
									</div>
								</div>
							</div>
						</div>
						<!--End::Main Portlet-->
					</div>
				</div>
<?php
include('inc/footer.php');
?>