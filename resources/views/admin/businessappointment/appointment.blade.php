<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Adult Appointment</title>


    <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap1.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admin/vendors/themefy_icon/themify-icons.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admin/vendors/niceselect/css/nice-select.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admin/vendors/owl_carousel/css/owl.carousel.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admin/vendors/gijgo/gijgo.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admin/vendors/font_awesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/admin/vendors/tagsinput/tagsinput.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admin/vendors/datepicker/date-picker.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/admin/vendors/vectormap-home/vectormap-2.0.2.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admin/vendors/scroll/scrollable.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admin/vendors/datatable/css/jquery.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/admin/vendors/datatable/css/responsive.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/admin/vendors/datatable/css/buttons.dataTables.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admin/vendors/text_editor/summernote-bs4.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admin/vendors/morris/morris.css')}}">

    <link rel="stylesheet" href="{{asset('assets/admin/vendors/material_icon/material-icons.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admin/css/metisMenu.css')}}">

    <link rel="stylesheet" href="{{asset('assets/admin/css/style1.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/admin/css/colors/default.css')}}" id="colorSkinCSS">
</head>

<body class="crm_body_bg">
    @include('admin.layouts.sidebar')

    <section class="main_content dashboard_part large_header_bg">
        @include('admin.layouts.header')

        <div class="main_content_iner">
            <div class="container-fluid p-0 ">

                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Appointments</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="QA_section">
                                    <div class="white_box_tittle list_header">
                                        <h4>Adult Appointments</h4>
                                        <div class="box_right d-flex lms_block">
                                            <div class="serach_field_2">
                                                <div class="search_inner">
                                                    <form active="#">
                                                        <div class="search_field">
                                                            <input type="text" placeholder="Search content here...">
                                                        </div>
                                                        <button type="submit"> <i class="ti-search"></i> </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="QA_table mb_30">

                                        <table class="table lms_table_active ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Names</th>
                                                    <th scope="col">Phone Number</th>
                                                    <th scope="col">Appointment Date</th>
                                                    <th scope="col">Time Slot</th>
                                                    <th scope="col">Service</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($business_appointment as $appointment)
                                                <tr>
                                                    <td>{{$appointment->first_name}} {{$appointment->second_name}}</td>
                                                    <td>{{$appointment->phone_number}}</td>
                                                    <td>{{$appointment->appointment_date}}</td>
                                                    <td>{{$appointment->time_slot}}</td>
                                                    <td>{{$appointment->service}}</td>
                                                    <td>
                                                        <a href="{{url('admin/approve_business_appointment/'.$appointment->id)}}" class="btn btn-success">Approve</a>
                                                        <a href="{{url('admin/decline_business_appointment/'.$appointment->id)}}" class="btn btn-danger">Decline</a>
                                                    </td>
                                                </tr>
                                                    
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </section>

    <script src="{{asset('assets/admin/js/jquery1-3.4.1.min.js')}}"></script>


    <script src="{{asset('assets/admin/js/metisMenu.js')}}"></script>

    <script src="{{asset('assets/admin/vendors/count_up/jquery.waypoints.min.js')}}"></script>

    <script src="{{asset('assets/admin/vendors/chartlist/Chart.min.js')}}"></script>

    <script src="{{asset('assets/admin/vendors/count_up/jquery.counterup.min.js')}}"></script>

    <script src="{{asset('assets/admin/vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>

    <script src="{{asset('assets/admin/vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('assets/admin/vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/datatable/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/datatable/js/buttons.print.min.js')}}"></script>

    <script src="{{asset('assets/admin/vendors/datepicker/datepicker.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/datepicker/datepicker.en.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/datepicker/datepicker.custom.js')}}"></script>
    <script src="{{asset('assets/admin/js/chart.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/chartjs/roundedBar.min.js')}}"></script>

    <script src="{{asset('assets/admin/vendors/progressbar/jquery.barfiller.js')}}"></script>

    <script src="{{asset('assets/admin/vendors/tagsinput/tagsinput.js')}}"></script>

    <script src="{{asset('assets/admin/vendors/text_editor/summernote-bs4.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/am_chart/amcharts.js')}}"></script>

    <script src="{{asset('assets/admin/vendors/scroll/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/scroll/scrollable-custom.js')}}"></script>

    <script src="{{asset('assets/admin/vendors/vectormap-home/vectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/vectormap-home/vectormap-world-mill-en.js')}}"></script>

    <script src="{{asset('assets/admin/vendors/apex_chart/apex-chart2.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/apex_chart/apex_dashboard.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/echart/echarts.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/chart_am/core.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/chart_am/charts.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/chart_am/animated.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/chart_am/kelly.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/chart_am/chart-custom.js')}}"></script>

    <script src="{{asset('assets/admin/js/dashboard_init.js')}}"></script>
    <script src="{{asset('assets/admin/js/custom.js')}}"></script>
</body>

</html>