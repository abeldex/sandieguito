//== Class definition

var DatatableRemoteAjaxDemo = function () {
	//== Private functions

	// basic demo
	var demo = function () {

		var datatable = $('.m_datatable').mDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
						url: 'http://148.227.28.28/sandieguito/remisiones/get_remisiones.php'
					}
				},
				pageSize: 10,
				saveState: {
					cookie: true,
					webstorage: true
				},
				serverPaging: true,
				serverFiltering: true,
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
			sortable: true,

			// column based filtering
			filterable: false,

			pagination: true,

			// columns definition
			columns: [{
				field: "no_remision",
				title: "No.",
				sortable: false,
				width: 30,
				//selector: {class: 'm-checkbox--solid m-checkbox--brand'}
			}, {
				field: "fecha_remision",
				title: "Fecha",
				width: 70,
				responsive: {visible: 'lg'}
			}, {
				field: "hora_llegada_origen",
				title: "Hora llegada",
				width: 70,
				responsive: {visible: 'lg'}
			},{
				field: "hora_salida_origen",
				title: "Hora Salida",
				width: 70,
				responsive: {visible: 'lg'}
			},{
				field: "nombre_empresa",
				title: "Empresa",
				width: 70,
				responsive: {visible: 'lg'}
			},{
				field: "obra",
				title: "Obra",
				width: 70,
				responsive: {visible: 'lg'}
			},{
				field: "nombre_material",
				title: "Material",
				width: 90,
				responsive: {visible: 'lg'}
			},{
				field: "unidad_m3",
				title: "m3",
				width: 70,
				responsive: {visible: 'lg'}
			},
			{
				field: "numero_camion",
				title: "Camion",
				width: 70,
				responsive: {visible: 'lg'}
			},{
				field: "placas_camion",
				title: "Placas",
				width: 50,
				responsive: {visible: 'lg'}
			},
			{
				field: "nombre_operador",
				title: "Operador",
				width: 90,
				responsive: {visible: 'lg'}
			},	{
				field: "recibido_obra",
				title: "Recibido",
				width: 90,
				responsive: {visible: 'lg'}
			},
			{
				field: "placas_gondola",
				title: "Gondola",
				width: 90,
				responsive: {visible: 'lg'}
			},{
				field: "Actions",
				width: 110,
				title: "Acciones",
				sortable: false,
				overflow: 'visible',
				template: function (row) {
					var dropup = (row.getDatatable().getPageSize() - row.getIndex()) <= 4 ? 'dropup' : ''; 

					return '\
						<div class="dropdown '+ dropup +'">\
							<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">\
                                <i class="la la-ellipsis-h"></i>\
                            </a>\
						  	<div class="dropdown-menu dropdown-menu-right">\
						    	<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\
						    	<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\
						    	<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\
						  	</div>\
						</div>\
						<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">\
							<i class="la la-edit"></i>\
						</a>\
						<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">\
							<i class="la la-trash"></i>\
						</a>\
					';
				}
			}]
		});

		var query = datatable.getDataSourceQuery();

		$('#m_form_search').on('keyup', function (e) {
			// shortcode to datatable.getDataSourceParam('query');
			var query = datatable.getDataSourceQuery();
			query.generalSearch = $(this).val().toLowerCase();
			// shortcode to datatable.setDataSourceParam('query', query);
			datatable.setDataSourceQuery(query);
			datatable.load();
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
			demo();
		}
	};
}();

jQuery(document).ready(function () {
	DatatableRemoteAjaxDemo.init();
});