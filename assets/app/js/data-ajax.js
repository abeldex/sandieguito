//== Class definition

var DatatableRemoteAjaxDemo = function () {
	//== Private functions

	// load remisiones
	var remisiones = function () {


		//datatable de los materiales
		var datatable3 = $('.m_datatable_r').mDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
						url: 'http://localhost/sandieguito/remisiones/get_remisiones.php'
					}
				},
				pageSize: 10,
				saveState: {
					cookie: true,
					webstorage: true
				},
				serverPaging: false,
				serverFiltering: false,
				serverSorting: true
			},

			// layout definition
			layout: {
				theme: 'default', // datatable theme
				class: '', // custom wrapper class
				scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
				footer: false // display/hide footer

			},

			// column sorting
			sortable: false,

			// column based filtering
			filterable: true,

			pagination: true,

			toolbar: {
				layout: ['pagination', 'info'],
				placement: ['bottom'],
				scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
				height: 350,
				footer: false // display/hide footer

			},

			// columns definition
			columns: [{
				field: "no_remision",
				title: "No.",
				sortable: false,
				textAlign: 'center',
				width: 30
				//selector: {class: 'm-checkbox--solid m-checkbox--brand'}
			}, {
				field: "placas_camion",
				title: "Camion",
				width: 70
			},{
				field: "unidad_m3",
				title: "m3",
				width: 30
			},{
				field: "nombre_empresa",
				title: "Empresa",
				width: 70
			}, {
				field: "fecha_remision",
				title: "Fecha",
				width: 90
			}, {
				field: "obra",
				title: "Obra",
				width: 90
			},{
				field: "nombre_material",
				title: "Material",
				width: 90
			},{
				field: "operador",
				title: "operador",
				width: 140
			},{				
				field: "Actions",
				title: "Acciones",
				sortable: false,
				overflow: 'visible',
				template: function (row) {
					var dropup = (row.getDatatable().getPageSize() - row.getIndex()) <= 4 ? 'dropup' : ''; 

					return '\
						<a class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" href="#"><i class="la la-edit"></i></a>\
						<a class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" href="#"><i class="la la-trash"></i></a>\
					';
				}
			}],
			translate: {
				records: {
					processing: 'Cargando...',
					noRecords: 'No se encontrarón materiales'
				},
				toolbar: {
					pagination: {
						items: {
							default: {
								first: 'Primero',
								prev: 'Anterior',
								next: 'Siguiente',
								last: 'Último',
								more: 'Más páginas',
								input: 'Número de página',
								select: 'Seleccionar tamaño de página'
							},
							info: 'Viendo {{start}} - {{end}} de {{total}} registros'
						}
					}
				}
			}



		});



			//datatble de las enmpresas
		var datatable2 = $('.m_datatable_emp').mDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
						url: 'http://localhost/sandieguito/empresas/get_empresas.php'
					}
				},
				pageSize: 10,
				saveState: {
					cookie: true,
					webstorage: true
				},
				serverPaging: false,
				serverFiltering: false,
				serverSorting: true
			},

			// layout definition
			layout: {
				theme: 'default', // datatable theme
				class: '', // custom wrapper class
				scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
				footer: false // display/hide footer

			},

			// column sorting
			sortable: false,

			// column based filtering
			filterable: true,

			pagination: true,

			toolbar: {
				layout: ['pagination', 'info'],
				placement: ['bottom'],
				scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
				height: 350,
				footer: false // display/hide footer

			},

			// columns definition
			columns: [{
				field: "id_empresa",
				title: "ID",
				sortable: false,
				textAlign: 'center',
				width: 30,
				//selector: {class: 'm-checkbox--solid m-checkbox--brand'}
			}, {
				field: "nombre_empresa",
				title: "Nombre"
			}, {				
				field: "Actions",
				width: 100,
				title: "Acciones",
				sortable: false,
				overflow: 'visible',
				template: function (row) {
					var dropup = (row.getDatatable().getPageSize() - row.getIndex()) <= 4 ? 'dropup' : ''; 

					return '\
						<a class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" href="#"><i class="la la-edit"></i></a>\
						<a class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" href="#"><i class="la la-trash"></i></a>\
					';
				}
			}],
			translate: {
				records: {
					processing: 'Cargando...',
					noRecords: 'No se encontrarón materiales'
				},
				toolbar: {
					pagination: {
						items: {
							default: {
								first: 'Primero',
								prev: 'Anterior',
								next: 'Siguiente',
								last: 'Último',
								more: 'Más páginas',
								input: 'Número de página',
								select: 'Seleccionar tamaño de página'
							},
							info: 'Viendo {{start}} - {{end}} de {{total}} registros'
						}
					}
				}
			}



		});


		//datatable de los materiales
		var datatable3 = $('.m_datatable_mat').mDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
						url: 'http://localhost/sandieguito/materiales/get_materiales.php'
					}
				},
				pageSize: 10,
				saveState: {
					cookie: true,
					webstorage: true
				},
				serverPaging: false,
				serverFiltering: false,
				serverSorting: true
			},

			// layout definition
			layout: {
				theme: 'default', // datatable theme
				class: '', // custom wrapper class
				scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
				footer: false // display/hide footer

			},

			// column sorting
			sortable: false,

			// column based filtering
			filterable: true,

			pagination: true,

			toolbar: {
				layout: ['pagination', 'info'],
				placement: ['bottom'],
				scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
				height: 350,
				footer: false // display/hide footer

			},

			// columns definition
			columns: [{
				field: "id_material",
				title: "ID",
				sortable: false,
				textAlign: 'center',
				width: 30,
				//selector: {class: 'm-checkbox--solid m-checkbox--brand'}
			}, {
				field: "nombre_material",
				title: "Nombre del material"
			}, {
				field: "precio_compra",
				title: "Precio Compra"
			}, {
				field: "precio_venta",
				title: "Precio Venta"
			}, {				
				field: "Actions",
				title: "Acciones",
				sortable: false,
				overflow: 'visible',
				template: function (row) {
					var dropup = (row.getDatatable().getPageSize() - row.getIndex()) <= 4 ? 'dropup' : ''; 

					return '\
						<a class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" href="#"><i class="la la-edit"></i></a>\
						<a class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" href="#"><i class="la la-trash"></i></a>\
					';
				}
			}],
			translate: {
				records: {
					processing: 'Cargando...',
					noRecords: 'No se encontrarón materiales'
				},
				toolbar: {
					pagination: {
						items: {
							default: {
								first: 'Primero',
								prev: 'Anterior',
								next: 'Siguiente',
								last: 'Último',
								more: 'Más páginas',
								input: 'Número de página',
								select: 'Seleccionar tamaño de página'
							},
							info: 'Viendo {{start}} - {{end}} de {{total}} registros'
						}
					}
				}
			}



		});

		//datatable para los camiones
		var datatable4 = $('.m_datatable_camiones').mDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
						url: 'http://localhost/sandieguito/camiones/get_camiones.php'
					}
				},
				pageSize: 10,
				saveState: {
					cookie: true,
					webstorage: true
				},
				serverPaging: false,
				serverFiltering: false,
				serverSorting: true
			},

			// layout definition
			layout: {
				theme: 'default', // datatable theme
				class: '', // custom wrapper class
				scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
				footer: false // display/hide footer

			},

			// column sorting
			sortable: false,

			// column based filtering
			filterable: true,

			pagination: true,

			toolbar: {
				layout: ['pagination', 'info'],
				placement: ['bottom'],
				scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
				height: 350,
				footer: false // display/hide footer

			},

			// columns definition
			columns: [{
				field: "placas_camion",
				title: "Placas",
				sortable: false
				//selector: {class: 'm-checkbox--solid m-checkbox--brand'}
			}, {
				field: "numero_camion",
				title: "No."
			}, {
				field: "modelo_camion",
				title: "Modelo"
			},{
				field: "nombre_permisionario",
				title: "Permisionario"
			},{				
				field: "Actions",
				title: "Acciones",
				sortable: false,
				width:100,
				overflow: 'visible',
				template: function (row) {
					var dropup = (row.getDatatable().getPageSize() - row.getIndex()) <= 4 ? 'dropup' : ''; 

					return '\
						<a class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" href="#"><i class="la la-edit"></i></a>\
						<a class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" href="#"><i class="la la-trash"></i></a>\
					';
				}
			}],
			translate: {
				records: {
					processing: 'Cargando...',
					noRecords: 'No se encontrarón camiones'
				},
				toolbar: {
					pagination: {
						items: {
							default: {
								first: 'Primero',
								prev: 'Anterior',
								next: 'Siguiente',
								last: 'Último',
								more: 'Más páginas',
								input: 'Número de página',
								select: 'Seleccionar tamaño de página'
							},
							info: 'Viendo {{start}} - {{end}} de {{total}} registros'
						}
					}
				}
			}



		});

		//datatable de los operadores
		var datatable5 = $('.m_datatable_operadores').mDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
						url: 'http://localhost/sandieguito/operadores/get_operadores.php'
					}
				},
				pageSize: 10,
				saveState: {
					cookie: true,
					webstorage: true
				},
				serverPaging: false,
				serverFiltering: false,
				serverSorting: true
			},

			// layout definition
			layout: {
				theme: 'default', // datatable theme
				class: '', // custom wrapper class
				scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
				footer: false // display/hide footer

			},

			// column sorting
			sortable: false,

			// column based filtering
			filterable: true,

			pagination: true,

			toolbar: {
				layout: ['pagination', 'info'],
				placement: ['bottom'],
				scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
				height: 350,
				footer: false // display/hide footer

			},

			// columns definition
			columns: [{
				field: "id_operador",
				title: "ID",
				sortable: false,
				textAlign: 'center',
				width: 30
				//selector: {class: 'm-checkbox--solid m-checkbox--brand'}
			}, {
				field: "nombre_operador",
				title: "Nombre del operador"
			}, {				
				field: "Actions",
				title: "Acciones",
				sortable: false,
				width:100,
				overflow: 'visible',
				template: function (row) {
					var dropup = (row.getDatatable().getPageSize() - row.getIndex()) <= 4 ? 'dropup' : ''; 

					return '\
						<a class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" href="#"><i class="la la-edit"></i></a>\
						<a class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" href="#"><i class="la la-trash"></i></a>\
					';
				}
			}],
			translate: {
				records: {
					processing: 'Cargando...',
					noRecords: 'No se encontrarón camiones'
				},
				toolbar: {
					pagination: {
						items: {
							default: {
								first: 'Primero',
								prev: 'Anterior',
								next: 'Siguiente',
								last: 'Último',
								more: 'Más páginas',
								input: 'Número de página',
								select: 'Seleccionar tamaño de página'
							},
							info: 'Viendo {{start}} - {{end}} de {{total}} registros'
						}
					}
				}
			}



		});

		//datatable de los permisionarios
		var datatable4 = $('.m_datatable_permisionarios').mDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
						url: 'http://localhost/sandieguito/permisionarios/get_permisionarios.php'
					}
				},
				pageSize: 10,
				saveState: {
					cookie: true,
					webstorage: true
				},
				serverPaging: false,
				serverFiltering: false,
				serverSorting: true
			},

			// layout definition
			layout: {
				theme: 'default', // datatable theme
				class: '', // custom wrapper class
				scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
				footer: false // display/hide footer

			},

			// column sorting
			sortable: false,

			// column based filtering
			filterable: true,

			pagination: true,

			toolbar: {
				layout: ['pagination', 'info'],
				placement: ['bottom'],
				scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
				height: 350,
				footer: false // display/hide footer

			},

			// columns definition
			columns: [{
				field: "id_permisionario",
				title: "ID",
				sortable: false,
				textAlign: 'center',
				width: 30
				//selector: {class: 'm-checkbox--solid m-checkbox--brand'}
			}, {
				field: "nombre_permisionario",
				title: "Nombre del Permisionario"
			}, {				
				field: "Actions",
				title: "Acciones",
				sortable: false,
				width:100,
				overflow: 'visible',
				template: function (row) {
					var dropup = (row.getDatatable().getPageSize() - row.getIndex()) <= 4 ? 'dropup' : ''; 

					return '\
						<a class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" href="#"><i class="la la-edit"></i></a>\
						<a class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" href="#"><i class="la la-trash"></i></a>\
					';
				}
			}],
			translate: {
				records: {
					processing: 'Cargando...',
					noRecords: 'No se encontrarón camiones'
				},
				toolbar: {
					pagination: {
						items: {
							default: {
								first: 'Primero',
								prev: 'Anterior',
								next: 'Siguiente',
								last: 'Último',
								more: 'Más páginas',
								input: 'Número de página',
								select: 'Seleccionar tamaño de página'
							},
							info: 'Viendo {{start}} - {{end}} de {{total}} registros'
						}
					}
				}
			}



		});




		var query = datatable3.getDataSourceQuery();
		
		$('#m_form_search').on('keyup', function (e) {
			// shortcode to datatable.getDataSourceParam('query');
			var query = datatable3.getDataSourceQuery();
			query.generalSearch = $(this).val().toLowerCase();
			// shortcode to datatable.setDataSourceParam('query', query);
			datatable3.setDataSourceQuery(query);
			datatable3.load();
		}).val(query.generalSearch);

		$('#m_form_status').on('change', function () {
			// shortcode to datatable.getDataSourceParam('query');
			var query = datatable.getDataSourceQuery();
			query.Status = $(this).val().toLowerCase();
			// shortcode to datatable.setDataSourceParam('query', query);
			datatable.setDataSourceQuery(query);
			datatable.load();
		}).val(typeof query.Status !== 'undefined' ? query.Status : '');

		$('#m_form_type').on('change', function () {
			// shortcode to datatable.getDataSourceParam('query');
			var query = datatable.getDataSourceQuery();
			query.Type = $(this).val().toLowerCase();
			// shortcode to datatable.setDataSourceParam('query', query);
			datatable.setDataSourceQuery(query);
			datatable.load();
		}).val(typeof query.Type !== 'undefined' ? query.Type : '');

		$('#m_form_status, #m_form_type').selectpicker();

	};


	return {
		// public functions
		init: function () {
			remisiones();
		}
	};

	
}();

jQuery(document).ready(function () {
	DatatableRemoteAjaxDemo.init();
});