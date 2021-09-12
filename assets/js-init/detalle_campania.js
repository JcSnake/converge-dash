/* Datatables responsive */

    $(document).ready(function() {
        $('#datatable-responsive').DataTable( {
            responsive: true
        } );
        $('#datatable-micrositios').DataTable();
        $('#datatable-micrositios2').DataTable();
        $('#datatable-databases').DataTable();
        $('#datatable-databases2').DataTable();
        $('#datatable-ventas').DataTable();
        $('#datatable-ventas2').DataTable();

    } );

    $(document).ready(function() {
        $('#datatable-responsive_wrapper .row').css("width", "100%");
        $('#datatable-responsive_length').css("display", "none");
        $('#datatable-responsive_filter').css("display", "none");

        $('#datatable-micrositios_wrapper .row').css("width", "100%");
        $('#datatable-micrositios_length').css("display", "none");
        $('#datatable-micrositios_filter').css("display", "none");

        $('#datatable-micrositios2_wrapper .row').css("width", "100%");
        $('#datatable-micrositios2_length').css("display", "none");
        $('#datatable-micrositios2_filter').css("display", "none");
        
        $('#datatable-databases_wrapper .row').css("width", "100%");
        $('#datatable-databases_length').css("display", "none");
        $('#datatable-databases_filter').css("display", "none");

        $('#datatable-databases2_wrapper .row').css("width", "100%");
        $('#datatable-databases2_length').css("display", "none");
        $('#datatable-databases2_filter').css("display", "none");

        $('#datatable-ventas_wrapper .row').css("width", "100%");
        $('#datatable-ventas_length').css("display", "none");
        $('#datatable-ventas_filter').css("display", "none");

        $('#datatable-ventas2_wrapper .row').css("width", "100%");
        $('#datatable-ventas2_length').css("display", "none");
        $('#datatable-ventas2_filter').css("display", "none");
    });

    $(function() { "use strict";
        $(".tabs").tabs();
    });
    $(function() { "use strict";
        $('.nav-responsive').tabdrop();
    });
    $(function() { "use strict";
        $(".accordion").accordion({
            heightStyle: "content"
        });
    });
    
    