<?php
include('../inc/header.php');
//incluir conexion
include('../inc/conexion.php');
?>

<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<div class="m-content">
						<!-- aqui una prueba con ajax-->
						<div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											Operadores
											<small>
												Administración
											</small>
										</h3>
									</div>
								</div>
							</div>
							<div class="m-portlet__body">
								<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
									<div class="row align-items-center">
										<div class="col-xl-8 order-2 order-xl-1">
											<div class="form-group m-form__group row align-items-center">
												<div class="col-md-4">
													<div class="m-input-icon m-input-icon--left">
														<input type="text" class="form-control m-input" placeholder="Buscar..." id="m_form_search">
														<span class="m-input-icon__icon m-input-icon__icon--left">
															<span>
																<i class="la la-search"></i>
															</span>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-12 order-1 order-xl-2 m--align-right">
											<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal_op">
												<span>
													<i class="flaticon-user"></i>
													<span>
														Nuevo Operador
													</span>
												</span>
											</a>
											<div class="m-separator m-separator--dashed d-xl-none"></div>
										</div>
									</div>
								</div>
								<!--end: Search Form -->

								<div class="m_datatable_operadores"></div>


							</div>
						</div>
						
					</div>
				</div>

			<div class="modal fade" id="modal_op" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Nuevo Operador</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">×</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <form id="nuevo_operador" method="POST" action="operadores/insertar.php">
					          <div class="form-group">
					            <label for="nombre_op" class="form-control-label">Nombre completo del operador:</label>
					            <input type="text" class="form-control" id="nombre_op" name="nombre_op">
					          </div>
					        
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					        <button type="submit" class="btn btn-primary">Guardar</button>
					        </form>
					      </div>
					    </div>
					  </div>
					</div>				

				
				
<?php
include('../inc/footer.php');
?>