<!-- Javascripts -->
<script src="{{ asset('assets/datatables/jquery/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('assets/libs/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/libs/tobii/js/tobii.min.js') }}"></script>
<script src="{{ asset('assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/libs/swiper/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.init.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/datatables/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/datatables/datatables/js/dataTables.jqueryui.min.js') }}"></script>
<script src="{{ asset('assets/datatables/responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/datatables/responsive/js/responsive.jqueryui.min.js') }}"></script>
<script src="{{ asset('assets/datatables/buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/datatables/buttons/js/buttons.jqueryui.min.js') }}"></script>
<script src="{{ asset('assets/datatables/buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/datatables/buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/datatables/buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/datatables/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/datatables/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/datatables/pdfmake/vfs_fonts.js') }}"></script>
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            responsive: true,
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
        } );
    
        table.buttons().container()
            .insertBefore( '#example_filter' );

        $('.dataTables_wrapper .ui-widget-header').addClass('ui-state-default');
        $('.dataTables_wrapper .ui-widget-content').addClass('ui-state-default');
    } );
</script>
<!-- Javascripts -->
