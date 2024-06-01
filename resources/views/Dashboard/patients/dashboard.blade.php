@extends('Dashboard.layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- BREADCRUMB -->
                        <div class="row row-sm mt-5">
					<div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-primary-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">اجمالي عدد الفواتير</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{App\Models\Ray::count()}}</h4>
										</div>
									</div>
								</div>
							</div>
							<span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-danger-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">اجمالي المدفوعات</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white"><a style="color: white" href="{{route('payments.patient')}}">{{App\Models\PatientAccount::where('patient_id',auth('patient')->user()->id)->sum('credit')}}</a> </h4>
										</div>
									</div>
								</div>
							</div>
							<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
						</div>
					</div>

				</div>

				<!-- row closed -->

                <div class="row row-sm row-deck">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card card-table-two">
                            <div class="d-flex justify-content-between">
                                <h2 class="card-title mb-1">اخر 5 فواتير علي النظام</h2>
                            </div><br>
                            <div class="table-responsive country-table">
                                <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>تاريخ الفاتورة</th>
                                        <th>اسم المريض</th>
                                        <th>اسم الطبيب</th>
                                        <th>حالة الفاتورة</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse(\App\Models\Invoice::latest()->take(5)->where('patient_id',auth('patient')->user()->id)->get() as $invoice )
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td class="tx-right tx-medium tx-inverse">{{$invoice->created_at}}</td>
                                            <td class="tx-right tx-medium tx-danger">{{$invoice->patient->name}}</td>
                                            <td class="tx-right tx-medium tx-inverse">{{$invoice->doctor->name}}</td>
                                            <td class="tx-right tx-medium tx-inverse">
                                                @if($invoice->case == 0)
                                                    <span class="badge badge-danger">تحت الاجراء</span>
                                                @else
                                                    <span class="badge badge-success">مكتملة</span>
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
