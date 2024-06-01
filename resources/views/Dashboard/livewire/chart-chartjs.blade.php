@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                    <!-- BREADCRUMB -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="my-auto">
                            <h4 class="page-title">Charts</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Chartjs</li>
                            </ol>
                        </div>
                        <div class="d-flex my-xl-auto right-content align-items-center">
                            <div class="pe-1 mb-xl-0">
                                <button type="button" class="btn btn-info btn-icon me-2 btn-b"><i class="mdi mdi-filter-variant"></i></button>
                            </div>
                            <div class="pe-1 mb-xl-0">
                                <button type="button" class="btn btn-danger btn-icon me-2"><i class="mdi mdi-star"></i></button>
                            </div>
                            <div class="pe-1 mb-xl-0">
                                <button type="button" class="btn btn-warning  btn-icon me-2"><i class="mdi mdi-refresh"></i></button>
                            </div>
                            <div class="mb-xl-0">
                                <div class="btn-group dropdown">
                                    <button type="button" class="btn btn-primary">14 Aug 2019</button>
                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <!-- END BREADCRUMB -->

					<!-- ROW OPEN -->
					<div class="row row-sm">
						<div class="col-sm-12 col-md-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Line Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Valex template.</p>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartLine1"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-sm-12 col-md-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Area Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Valex template.</p>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartArea1"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- ROW CLOSED -->

					<!-- ROW OPEN -->
					<div class="row row-sm">
						<div class="col-sm-12 col-md-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Stacked Bar Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Valex template.</p>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartStacked1"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-sm-12 col-md-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Stacked Bar Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Valex template.</p>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartStacked2"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- ROW CLOSED -->

					<!-- ROW OPEN -->
					<div class="row row-sm">
						<div class="col-md-12">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="row row-sm">
										<div class="col-sm-12 col-md-6 col-xl-4">
											<div class="main-content-label tx-12 mg-b-15">
												Solid Color
											</div>
											<div class="ht-200 ht-lg-250">
												<canvas id="chartBar1"></canvas>
											</div>
										</div><!-- col-6 -->
										<div class="col-sm-12 col-md-6 col-xl-4 mg-t-20 mg-md-t-0">
											<div class="main-content-label tx-12 mg-b-15">
												With Transparency
											</div>
											<div class="ht-200 ht-lg-250">
												<canvas id="chartBar2"></canvas>
											</div>
										</div><!-- col-6 -->
										<div class="col-sm-12 col-md-6 col-xl-4 mg-t-20 mg-xl-t-0">
											<div class="main-content-label tx-12 mg-b-15">
												Using Gradient Color
											</div>
											<div class="ht-200 ht-lg-250">
												<canvas id="chartBar3"></canvas>
											</div>
										</div><!-- col-6 -->
									</div>
								</div><!-- col-12 -->
							</div><!-- col-12 -->
						</div><!-- col-12 -->
					</div>
					<!-- ROW CLOSED -->

					<!-- ROW OPEN -->
					<div class="row row-sm">
						<div class="col-sm-12 col-md-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Horizontal Bar Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Valex template.</p>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartBar4"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-sm-12 col-md-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Horizontal Bar Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Valex template.</p>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartBar5"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- ROW CLOSED -->

					<!-- ROW OPEN -->
					<div class="row row-sm">
						<div class="col-sm-12 col-md-6">
							<div class="card mg-b-md-20 overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Pie Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Valex template.</p>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartPie"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-sm-12 col-md-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Donut Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Valex template.</p>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartDonut"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- ROW CLOSED -->

@endsection

@section('scripts')

        <!-- INTERNAL DATEPICKER JS -->
        <script src="{{asset('build/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

        <!-- INTERNAL CHART.BUNDLE JS -->
		<script src="{{asset('build/assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

        <!-- INTERNAL CHARTJS JS -->
        @vite('resources/assets/js/chart.chartjs.js')

@endsection