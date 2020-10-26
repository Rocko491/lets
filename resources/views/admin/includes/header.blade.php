<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    {{--<link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }}">--}}
    <!-- App title -->
    <title>Lets Admin Panel</title>

    <!-- App css -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/css/core.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/css/components.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/css/pages.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/css/menu.css') }}" rel="stylesheet" type="text/css"/>
/    <link href="{{ asset('backend/css/responsive.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('backend/plugins/switchery/switchery.min.css') }}">


    <!-- Sweet Alert -->
    <link href="{{ asset('backend/plugins/bootstrap-sweetalert/sweet-alert.css') }}" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> -->

    <!-- DataTables -->
    <link href="{{ asset('backend/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/plugins/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('backend/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/plugins/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/plugins/datatables/dataTables.colVis.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/plugins/datatables/fixedColumns.dataTables.min.css') }}" rel="stylesheet"
          type="text/css"/>

    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.4.2/b-html5-1.4.2/sc-1.4.3/datatables.min.css"/> -->

    <link href="{{ asset('backend/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/plugins/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}"
          rel="stylesheet"/>

    <link href="{{ asset('backend/plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/plugins/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">


    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{ asset('backend/js/modernizr.min.js') }}"></script>

</head>
{{--<body class="fixed-left">
    <div id="wrapper">--}}
        @yield('content')
    {{--</div>
</body>--}}

<!-- jQuery  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--Auto Complete js/css -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--Auto Complete js/css end -->
<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/common_validate.js') }}"></script>
<script src="{{ asset('backend/js/common_function.js') }}"></script>
<script src="{{ asset('backend/js/detect.js') }}"></script>
<script src="{{ asset('backend/js/fastclick.js') }}"></script>
<script src="{{ asset('backend/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('backend/js/waves.js') }}"></script>
<script src="{{ asset('backend/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('backend/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('backend/plugins/switchery/switchery.min.js') }}"></script>
<script src="{{ asset('backend/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('backend/plugins/timepicker/bootstrap-timepicker.js') }}"></script>
<script src="{{ asset('backend/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('backend/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('backend/plugins/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
<script src="{{ asset('backend/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<!-- Google Charts js -->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<!-- Init -->
<!--<script type="text/javascript" src="--><?//=base_url()?><!--assets/pages/jquery.google-charts.init.js"></script>-->

<!-- Sweet-Alert  -->
<script src="{{ asset('backend/plugins/bootstrap-sweetalert/sweet-alert.min.js') }}"></script>
<script src="{{ asset('backend/pages/jquery.sweet-alert.init.js') }}"></script>

<!-- <script src="plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script> -->
<script type="text/javascript" src="{{ asset('backend/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/plugins/jquery-quicksearch/jquery.quicksearch.js') }}"></script>
<script src="{{ asset('backend/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>

<!-- Counter js  -->
<script src="{{ asset('backend/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('backend/plugins/counterup/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('backend/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('backend/plugins/timepicker/bootstrap-timepicker.js') }}"></script>
<script src="{{ asset('backend/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('backend/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('backend/plugins/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
<script src="{{ asset('backend/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/dataTables.bootstrap.js') }}"></script>

<script src="{{ asset('backend/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/jszip.min.js') }}"></script>
<!-- <script src="plugins/datatables/pdfmake.min.js"></script> -->
<script src="{{ asset('backend/plugins/datatables/vfs_fonts.js') }}"></script>

<!--  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.4.2/b-html5-1.4.2/sc-1.4.3/datatables.min.js"></script> -->

<script src="{{ asset('backend/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/responsive.bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/dataTables.scroller.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/dataTables.colVis.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/dataTables.fixedColumns.min.js') }}"></script>

<!-- init -->
<script src="{{ asset('backend/pages/jquery.datatables.init.js') }}"></script>
<script src="{{ asset('backend/pages/jquery.form-pickers.init.js') }}"></script>
<script type="text/javascript" src="{{ asset('pages/jquery.form-advanced.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('backend/js/jquery.core.js') }}"></script>
<script src="{{ asset('backend/js/jquery.app.js') }}"></script>
<!-- jquery alerts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable();
    });
    TableManageButtons.init();
</script>
<script>
    $(document).ready(function () {
        $('form.ajax_form').on('submit', function (e) {
            e.preventDefault();
            var url = $(this).attr('action');

            // Create an FormData object
            var data = new FormData(this);


            $.ajax({
                type: 'post',
                url: url,
                enctype: 'multipart/form-data',
                data: data,
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    if (data.error)
                        swal('Oops...', data.error, 'error');
                    if (data.success) {
                        swal("Done", data.success);
                        location.href = data.url;
                    }
                }
            });
        });
    });

    function delete_record(url) {
        swal({
            title: "Are you sure?",
            text: "You want to delete the record?",
            type: "warning",
            showCancelButton: true,
            cancelButtonClass: 'btn-default btn-md waves-effect',
            confirmButtonClass: 'btn-primary btn-md waves-effect waves-light',
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function () {
            $.ajax({
                type: 'post',
                url: url,
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    if (data.error)
                        swal('Oops...', data.error, 'error');
                    if (data.success) {
                        swal("Deleted!", "Record has been deleted successfully.", "success");
                        location.href = data.url;
                    }
                }
            });
        });
    }
</script>
</html>
