<!-- jQuery -->
<script src="{{ asset('Template/plugins/jquery/jquery.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('Template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->

<script src="{{ asset('Template/dist/js/adminlte.min.js')}}"></script>
<script src="{{  asset('Template/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{  asset('Template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{  asset('Template/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{  asset('Template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{  asset('Template/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{  asset('Template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{  asset('Template/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{  asset('Template/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{  asset('Template/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{  asset('Template/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{  asset('Template/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{  asset('Template/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script src="{{ asset ('Template/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset ('Template/js/demo.js')}}"></script>

<script>
    $(function () {
    $("#example1").DataTable({
        "lengthChange": true, "autoWidth": true, "responsive": true
        // "buttons": [""]
    }).buttons().container().appendTo('#example1_wrapper .col-md-12:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
    });
</script>

<script type='text/javascript'>
    $(document).ready(function(){

    $('#lab').change(function(){
         // Department id
        var idlab = $(this).val();

         // Empty the dropdown
        $('#pc').find('option').not(':first').remove();

         // AJAX request
        $.ajax({
           url: '/getEmployees/'+idpc, //pc
        type: 'get',
        dataType: 'json',
        success: function(response){
                var len = 0;
                if(response['data'] != null){
                    len = response['data'].length;
                }

                if(len > 0){
                    // Read data and create <option >
                    for(var i=0; i<len; i++){
                        var idpc = response['data'][i].idpc;
                        var namapc = response['data'][i].namapc;
                        var option = "<option value='"+idpc+"'>"+namapc+"</option>";
                        $("#pc").append(option);
                    }
                }
        }
        });
    });
    });
</script>
