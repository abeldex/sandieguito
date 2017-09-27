//== Class definition

var DatatableRemoteAjaxDemo = function () {
	//== Private functions
	
	var options = {
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
        serverSorting: false
    },

    layout: {
        theme: 'default',
        class: 'm-datatable--brand',
        scroll: false,
        height: null,
        footer: false,
        header: true,

        smoothScroll: {
            scrollbarShown: true
        },

        spinner: {
            overlayColor: '#000000',
            opacity: 0,
            type: 'loader',
            state: 'brand',
            message: true
        },

        icons: {
            sort: {asc: 'la la-arrow-up', desc: 'la la-arrow-down'},
            pagination: {
                next: 'la la-angle-right',
                prev: 'la la-angle-left',
                first: 'la la-angle-double-left',
                last: 'la la-angle-double-right',
                more: 'la la-ellipsis-h'
            },
            rowDetail: {expand: 'fa fa-caret-down', collapse: 'fa fa-caret-right'}
        }
    },

    sortable: false,

    pagination: true,

    detail: {
        title: 'Load sub table',
        content: function (e) {
            // e.data
            // e.detailCell
        }
    },

    // columns definition
			columns: [{
				field: "id_material",
				title: "ID",
				sortable: false,
				width: 30,
				//selector: {class: 'm-checkbox--solid m-checkbox--brand'}
			}, {
				field: "nombre_material",
				title: "Nombre del material",
				width: 200,
				responsive: {visible: 'lg'}
			}, {				
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
			}],

    toolbar: {
        layout: ['pagination', 'info'],

        placement: ['bottom'],  //'top', 'bottom'

        items: {
            pagination: {
                type: 'default',

                pages: {
                    desktop: {
                        layout: 'default',
                        pagesNumber: 6
                    },
                    tablet: {
                        layout: 'default',
                        pagesNumber: 3
                    },
                    mobile: {
                        layout: 'compact'
                    }
                },

                navigation: {
                    prev: true,
                    next: true,
                    first: true,
                    last: true
                },

                pageSizeSelect: [10, 20, 30, 50, 100]
            },

            info: true
        }
    },

    translate: {
        records: {
            processing: 'Please wait...',
            noRecords: 'No records found'
        },
        toolbar: {
            pagination: {
                items: {
                    default: {
                        first: 'First',
                        prev: 'Previous',
                        next: 'Next',
                        last: 'Last',
                        more: 'More pages',
                        input: 'Page number',
                        select: 'Select page size'
                    },
                    info: 'Displaying {{start}} - {{end}} of {{total}} records'
                }
            }
        }
    }
}

jQuery(document).ready(function () {
	DatatableRemoteAjaxDemo.init();
});