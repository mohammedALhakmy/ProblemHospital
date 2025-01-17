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
                                <li class="breadcrumb-item active" aria-current="page">Chart-peity</li>
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
						<div class="col-lg-12">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Line Chart
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="d-sm-flex">
										<div>
											<span class="peity-line" data-peity='{ "fill": false, "stroke": "#285cf7", "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
										</div>
										<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
											<span class="peity-line" data-peity='{ "fill": false, "stroke": "#f10075", "height": 70, "width": 200 }'>-10,-4,-4,-7,-5,-9,-10,-1,-4,-4,-7,-5,-9,-10</span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-->
						<div class="col-lg-12">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Area Chart
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="d-sm-flex">
										<div>
											<span class="peity-line" data-peity='{ "fill": "rgba(86, 70, 255,.2)", "stroke": "#285cf7", "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
										</div>
										<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
											<span class="peity-line" data-peity='{ "fill": "rgba(241,0,117,.2)", "stroke": "#f10075", "height": 70, "width": 200 }'>-10,-4,-4,-7,-5,-9,-10,-1,-4,-4,-7,-5,-9,-10</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ROW CLOSED -->

					<!-- ROW OPEN -->
					<div class="row row-sm">
						<div class="col-lg-12">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Bar Chart
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="d-lg-flex">
										<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-t-20 bg-light text-dark">
											<span class="peity-bar" data-peity='{ "fill": ["#285cf7"], "height": 70, "width": 200 }'>10,4,4,7,5,9,10,5,4,4,7,5,9,10</span>
										</div>
										<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-t-20 bg-light text-dark">
											<span class="peity-bar" data-peity='{ "fill": ["#285cf7","#560bd0"], "height": 70, "width": 200 }'>10,4,4,7,5,9,10,5,4,4,7,5,9,10</span>
										</div>
									</div>
									<div class="d-lg-flex">
										<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-b-20 bg-light text-dark">
											<span class="peity-bar" data-peity='{ "fill": ["#560bd0"], "height": 70, "width": 200 }'>-10,-12,-12,-7,-5,-9,-10,-5,-13,-12,-7,-5,-9,-10</span>
										</div>
										<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-b-20 bg-light text-dark">
											<span class="peity-bar" data-peity='{ "fill": ["#560bd0","#f10075"], "height": 70, "width": 200 }'>-10,-12,-12,-7,-5,-9,-10,-5,-13,-12,-7,-5,-9,-10</span>
										</div>
										<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-y-10 bg-light text-dark">
											<span class="peity-bar" data-peity='{ "fill": ["#285cf7","#f10075"], "height": 70, "width": 200 }'>10,-4,4,5,-7,5,-9,-5,10,-5,4,-4,7,-5,9,-10,9,10</span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-->
						<div class="col-lg-12">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Pie Chart
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="d-md-flex flex-wrap">
										<div class="mg-r-20 mg-t-10">
											<span class="peity-pie" data-peity='{ "fill": ["#285cf7", "#ecf0fa"], "height": 70, "width": 70 }'>1/5</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-pie" data-peity='{ "fill": ["#8500ff", "#ecf0fa"], "height": 70, "width": 70 }'>226/360</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-pie" data-peity='{ "fill": ["#f10075", "#ecf0fa"], "height": 70, "width": 70 }'>0.52/1.561</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-pie" data-peity='{ "fill": ["#3bb001", "#ecf0fa"], "height": 70, "width": 70 }'>1,4</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-pie" data-peity='{ "fill": ["#dc3545", "#ecf0fa"], "height": 70, "width": 70 }'>226,134</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-pie" data-peity='{ "fill": ["#3db4ec", "#ecf0fa"], "height": 70, "width": 70 }'>0.52,1.041</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-pie" data-peity='{ "fill": ["#285cf7","#8500ff","#f10075"], "height": 70, "width": 70 }'>10,4,4</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Donut Chart
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="d-md-flex flex-wrap">
										<div class="mg-r-20 mg-t-10">
											<span class="peity-donut" data-peity='{ "fill": ["#285cf7", "#ecf0fa"], "height": 70, "width": 70 }'>1/5</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-donut" data-peity='{ "fill": ["#8500ff", "#ecf0fa"], "height": 70, "width": 70 }'>226/360</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-donut" data-peity='{ "fill": ["#f10075", "#ecf0fa"], "height": 70, "width": 70 }'>0.52/1.561</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-donut" data-peity='{ "fill": ["#3bb001", "#ecf0fa"], "height": 70, "width": 70 }'>1,4</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-donut" data-peity='{ "fill": ["#dc3545", "#ecf0fa"], "height": 70, "width": 70 }'>226,134</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-donut" data-peity='{ "fill": ["#3db4ec", "#ecf0fa"], "height": 70, "width": 70 }'>0.52,1.041</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-donut" data-peity='{ "fill": ["#285cf7","#8500ff","#f10075"], "height": 70, "width": 70 }'>10,4,4</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ROW CLOSED -->

					<!-- ROW OPEN -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Data Attributes
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="d-md-flex flex-wrap">
										<div class="mg-r-20 mg-t-10">
											<div class="">
												<p class="data-attributes">
													<span data-peity='{ "fill": ["#285cf7", "#ecf0fa"], "height": 70, "width": 70, "innerRadius": 10, "radius": 40 }'>1/7</span>
												</p>
											</div>
										</div>
										<div class="mg-r-20 mg-t-10">
											<div class="">
												<p class="data-attributes">
													<span data-peity='{ "fill": ["#8500ff", "#ecf0fa"],"height": 70, "width": 70, "innerRadius": 14, "radius": 36 }'>2/7</span>
												</p>
											</div>
										</div>
										<div class="mg-r-20 mg-t-10">
											<div class="">
												<p class="data-attributes">
													<span data-peity='{ "fill": ["#f10075", "#ecf0fa"], "height": 70, "width": 70, "innerRadius": 16, "radius": 32 }'>3/7</span>
												</p>
											</div>
										</div>
										<div class="mg-r-20 mg-t-10">
											<div class="">
												<p class="data-attributes">
													<span data-peity='{ "fill": ["#3bb001", "#ecf0fa"], "height": 70, "width": 70, "innerRadius": 18, "radius": 28 }'>4/7</span>
												</p>
											</div>
										</div>
										<div class="mg-r-20 mg-t-10">
											<div class="">
												<p class="data-attributes">
													<span data-peity='{ "fill": ["#dc3545", "#ecf0fa"], "height": 70, "width": 70, "innerRadius": 20, "radius": 24 }'>5/7</span>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Updating Charts
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="wd-200">
										<span class="updating-chart" data-peity='{ "fill": ["rgba(86, 70, 255,.4)"],"stroke":["#285cf7]}'>5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ROW CLOSED -->

@endsection

@section('scripts')

        <!-- INTERNAL JQUERY PEITY JS -->
        <script src="{{asset('build/assets/plugins/peity/jquery.peity.min.js')}}"></script>

        <!-- INTERNAL PEITY JS -->
        @vite('resources/assets/js/chart.peity.js')
@endsection