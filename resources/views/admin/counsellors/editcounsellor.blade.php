<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Counsellors List</title>


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
            <div class="container-fluid p-0 sm_padding_15px">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Add Counsellor</h3>
                                    </div>
                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="card-body">
                                    <form action="{{url('admin/counsellors/update/'.$counsellor->id)}}" method="POST">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label class="form-label" for="firstName">First Name</label>
                                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ $counsellor->first_name }}" id="first_name" placeholder="First Name">
                                                @error('first_name')
                                                    <div style="color:red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class=" col-md-4">
                                                <label class="form-label" for="lastName">Last Name</label>
                                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $counsellor->last_name }}" id="last_name" placeholder="Last Name">
                                                @error('last_name')
                                                    <div style="color:red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class=" col-md-4">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $counsellor->email }}" id="email" placeholder="Email">
                                                @error('email')
                                                    <div style="color:red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label" for="phoneNumber">Contacts</label>
                                                <input type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ $counsellor->phone_number }}" id="phone_number" placeholder="Phone Number">
                                                @error('phone_number')
                                                    <div style="color:red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class=" col-md-6">
                                                <label class="form-label" for="price">Price</label>
                                                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $counsellor->price }}" id="price" placeholder="KES">
                                                @error('price')
                                                    <div style="color:red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>