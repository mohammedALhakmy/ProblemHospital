@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                    <!-- BREADCRUMB -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="my-auto">
                            <h4 class="page-title">Advanced UI</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sweet-Alerts</li>
                            </ol>
                        </div>
                        <div class="d-flex my-xl-auto right-content align-items-center">
                            <div class="pe-1 mb-xl-0">
                                <button type="button" class="btn btn-info btn-icon me-2 btn-b"><i
                                        class="mdi mdi-filter-variant"></i></button>
                            </div>
                            <div class="pe-1 mb-xl-0">
                                <button type="button" class="btn btn-danger btn-icon me-2"><i
                                        class="mdi mdi-star"></i></button>
                            </div>
                            <div class="pe-1 mb-xl-0">
                                <button type="button" class="btn btn-warning  btn-icon me-2"><i
                                        class="mdi mdi-refresh"></i></button>
                            </div>
                            <div class="mb-xl-0">
                                <div class="btn-group dropdown">
                                    <button type="button" class="btn btn-primary">14 Aug 2019</button>
                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                        id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuDate">
                                        <a class="dropdown-item" href="javascript:void(0);">2015</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2016</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2017</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2018</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- BREADCRUMB -->

                    <!-- ROW -->
                    <div class="row row-deck">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Basic Sweet-alert</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <table class="table card-table border">
                                        <tr>
                                            <td>Title</td>
                                            <td><input type='text' class="form-control" placeholder='Title text' id='title'>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Message</td>
                                            <td><input type='text' class="form-control" placeholder='Your message'
                                                    id='message'></td>
                                        </tr>
                                        <tr>
                                            <td colspan='2' class="mt-5 text-center">
                                                <input type='button' class="btn btn-primary mt-2" value='Simple alert'
                                                    id='but1'>&nbsp;
                                                <input type='button' class="btn btn-danger mt-2" value='Alert with title'
                                                    id='but2'>&nbsp;
                                                <input type='button' class="btn btn-info mt-2" value='Alert with image'
                                                    id='but3'>&nbsp;
                                                <input type='button' class="btn btn-warning mt-2" value='With timer'
                                                    id='but4'>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div><!-- col end -->
                    </div>
                    <!-- END ROW -->

                    <!-- ROW -->
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="card custom-card text-center">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">Basic Alert</h6>
                                        <p class="text-muted card-sub-title">A Basic Message</p>
                                    </div>
                                    <div class="btn ripple btn-primary-gradient" id='swal-basic'>
                                        Click me !
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="card custom-card text-center">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">Title alert</h6>
                                        <p class="text-muted card-sub-title">A title with a text under</p>
                                    </div>
                                    <div class="btn ripple btn-danger-gradient" id='swal-title'>
                                        Click me !
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="card custom-card text-center">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">Success alert</h6>
                                        <p class="text-muted card-sub-title">A Success Message</p>
                                    </div>
                                    <div class="btn ripple btn-success-gradient" id='swal-success'>
                                        Click me !
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="card custom-card text-center">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">Warning alert</h6>
                                        <p class="text-muted card-sub-title">A warning message</p>
                                    </div>
                                    <div class="btn ripple btn-warning-gradient" id='swal-warning'>
                                        Click me !
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END ROW -->

                    <!-- ROW -->
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="card custom-card text-center">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">Passing a parameter alert</h6>
                                        <p class="text-muted card-sub-title">By passing a parameter</p>
                                    </div>
                                    <div class="btn ripple btn-purple-gradient" id='swal-parameter'>
                                        Click me !
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="card custom-card text-center">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">Image alert</h6>
                                        <p class="text-muted card-sub-title">A message with custom Image</p>
                                    </div>
                                    <div class="btn ripple btn-pink-gradient" id='swal-image'>
                                        Click me !
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="card custom-card text-center">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">Timer alert</h6>
                                        <p class="text-muted card-sub-title">A message with auto close timer</p>
                                    </div>
                                    <div class="btn ripple btn-dark-gradient" id='swal-timer'>
                                        Click me !
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="card custom-card text-center">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">Ajax Alert</h6>
                                        <p class="text-muted card-sub-title">With a loader (for a AJAX requests)</p>
                                    </div>
                                    <div class="btn ripple btn-info-gradient" id='swal-ajax'>
                                        Click me !
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAL SWEET-ALERT JS -->
        <script src="{{asset('build/assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/sweet-alert/jquery.sweet-alert.js')}}"></script>
        @vite('resources/assets/js/sweet-alert.js')


@endsection