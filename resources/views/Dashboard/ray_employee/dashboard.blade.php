@extends('Dashboard.layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- BREADCRUMB -->
                        <div class="breadcrumb-header justify-content-between">
                            <div class="left-content">
                                <div>
                                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">شش</h2>
                                <p class="mg-b-0">Sales monitoring dashboard template.</p>
                                </div>
                            </div>
                            <div class="main-dashboard-header-right">
                                <div>
                                    <label class="tx-13">Customer Ratings</label>
                                    <div class="main-star">
                                        <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star"></i> <span>(14,873)</span>
                                    </div>
                                </div>
                                <div>
                                    <label class="tx-13">Online Sales</label>
                                    <h5>563,275</h5>
                                </div>
                                <div>
                                    <label class="tx-13">Offline Sales</label>
                                    <h5>783,675</h5>
                                </div>
                            </div>
                        </div>
                        <!-- END BREADCRUMB -->

                        <!-- ROW -->
                        <div class="row row-sm">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden sales-card bg-primary-gradient">
                                    <div class="px-3 pt-3  pb-2 pt-0">
                                        <div class="">
                                            <h6 class="mb-3 tx-12 text-white"> إجمالي عدد الفواتير المكتملة</h6>
                                        </div>
                                        <div class="pb-0 mt-0">
                                            <div class="d-flex">
                                                <div class="">
                                                    <h4 class="tx-20 fw-bold mb-1 text-white">{{App\Models\Ray::where('case',0)->count()}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden sales-card bg-danger-gradient">
                                    <div class="px-3 pt-3  pb-2 pt-0">
                                        <div class="">
                                            <h6 class="mb-3 tx-12 text-white">إجمالي عدد الفواتير</h6>
                                        </div>
                                        <div class="pb-0 mt-0">
                                            <div class="d-flex">
                                                <div class="">
                                                    <h4 class="tx-20 fw-bold mb-1 text-white">{{App\Models\Ray::count()}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden sales-card bg-warning-gradient">
                                    <div class="px-3 pt-3  pb-2 pt-0">
                                        <div class="">
                                            <h6 class="mb-3 tx-12 text-white">  إجمالي عدد الفواتير تحت الاجراء!</h6>
                                        </div>
                                        <div class="pb-0 mt-0">
                                            <div class="d-flex">
                                                <div class="">
                                                    <h4 class="tx-20 fw-bold mb-1 text-white">{{App\Models\Ray::where('case',1)->count()}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
                                </div>
                            </div>
                        </div>
                        <!-- END ROW -->
                        <!-- ROW -->
                        <div class="row row-sm row-deck">

                            <div class="col-md-12 col-lg-12 col-xl-12">
                                <div class="card card-table-two">
                                    <div class=" card-header p-0 d-flex justify-content-between">
                                        <h4 class="card-title mb-1">Your Most Recent Earnings</h4>
                                        <a href="javascript:void(0);" class="tx-inverse" data-bs-toggle="dropdown"><i
                                            class="mdi mdi-dots-horizontal text-gray"></i></a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Another
                                                Action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Something Else
                                                Here</a>
                                        </div>
                                    </div>
                                    <span class="tx-12 tx-muted mb-3 ">This is your most recent earnings for today's date.</span>
                                    <div class="table-responsive country-table">
                                        <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                                             <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>تاريخ الفاتورة</th>
                                        <th>اسم المريض</th>
                                        <th>اسم الطبيب</th>
                                        <th>المطلوب</th>
                                        <th>حالة الفاتورة</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse(\App\Models\Ray::latest()->take(5)->get() as $invoice )
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td class="tx-right tx-medium tx-inverse">{{$invoice->created_at}}</td>
                                            <td class="tx-right tx-medium tx-danger">{{$invoice->patient->name}}</td>
                                            <td class="tx-right tx-medium tx-inverse">{{$invoice->doctor->name}}</td>
                                            <td class="tx-right tx-medium tx-danger">{{$invoice->description}}</td>
                                            <td class="tx-right tx-medium tx-inverse">
                                                @if($invoice->case == 0)
                                                    <span class="bg-danger">تحت الاجراء</span>
                                                @else
                                                    <span class="bg-success">مكتملة</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        لاتوجد بيانات
                                    @endforelse
                                    </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ROW -->

@endsection

@section('scripts')

        <!--INTERNAL CHART.BUNDLE JS -->
        <script src="{{asset('build/assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

        <!--INTERNAL SPARKLINE JS -->
        <script src="{{asset('build/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- RAPHAEL JS -->
        <script src="{{asset('build/assets/plugins/raphael/raphael.min.js')}}"></script>

        <!-- INTERNAL APEXCHART JS -->

        @vite('resources/assets/js/apexcharts.js')


        <script src="{{asset('build/assets/jquery.vmap.sampledata.js')}}"></script>

        <!-- MODAL POPUP JS -->
        @vite('resources/assets/js/modal-popup.js')


        <!-- INTERNAL MAP JS -->
		<script src="{{asset('build/assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

		<!-- INTERNAL INDEX JS -->
        @vite('resources/assets/js/index.js')

        @vite('resources/assets/js/index1.js')

@endsection
