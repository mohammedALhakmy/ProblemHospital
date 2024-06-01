@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                    <!-- BREADCRUMB -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="my-auto">
                            <h4 class="page-title">Elements</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Elements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Breadcrumbs</li>
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
                    <!-- END BREADCRUMB -->

					<!-- ROW OPEN -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card" id="basic">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Basic Styling</h6>
										<p class="text-muted card-sub-title">The example below is the basic styling of the breadcrumb from Bootstrap.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<nav aria-label="breadcrumb">
												<ol class="breadcrumb breadcrumb-style3 mg-b-0">
													<li class="breadcrumb-item">
														<a href="javascript:void(0);">Home</a>
													</li>
													<li class="breadcrumb-item">
														<a href="javascript:void(0);">Library</a>
													</li>
													<li class="breadcrumb-item active">Data</li>
												</ol>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-12 col-md-12">
							<div class="card custom-card" id="custom">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Custom Styling</h6>
										<p class="text-muted card-sub-title">The example below is the custom styling of the breadcrumb used by this template.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<nav aria-label="breadcrumb">
												<ol class="breadcrumb breadcrumb-style3 mg-b-0">
													<li class="breadcrumb-item">
														<a href="javascript:void(0);">Home</a>
													</li>
													<li class="breadcrumb-item">
														<a href="javascript:void(0);">Library</a>
													</li>
													<li class="breadcrumb-item active">Data</li>
												</ol>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="col-lg-12 col-md-12">
							<div class="card custom-card" id="divider">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Custom Divider</h6>
										<p class="text-muted card-sub-title">The example below is the custom styling of the breadcrumb using different divider.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<nav aria-label="breadcrumb">
												<ol class="breadcrumb breadcrumb-style2 mb-0">
													<li class="breadcrumb-item">
														<a href="javascript:void(0);">Home</a>
													</li>
													<li class="breadcrumb-item">
														<a href="javascript:void(0);">Library</a>
													</li>
													<li class="breadcrumb-item active">Data</li>
												</ol>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card" id="center">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Breadcrumbs-Center align</h6>
										<p class="text-muted card-sub-title">The example below is the center aligment of the breadcrumb</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<nav class="breadcrumb-3">
												<ol class="breadcrumb breadcrumb-style3 mb-0">
													<li class="breadcrumb-item">
														<a href="javascript:void(0);">Home</a>
													</li>
													<li class="breadcrumb-item">
														<a href="javascript:void(0);">Library</a>
													</li>
													<li class="breadcrumb-item active">Data</li>
												</ol>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-12 col-md-12">
							<div class="card custom-card" id="right">
									<div class="card-body">
										<div>
											<h6 class="card-title mb-1">Breadcrumbs-Right align</h6>
											<p class="text-muted card-sub-title">The example below is the Right aligment of the breadcrumb</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav class="breadcrumb-4">
													<ol class="breadcrumb breadcrumb-style3 mb-0">
														<li class="breadcrumb-item">
															<a href="javascript:void(0);">Home</a>
														</li>
														<li class="breadcrumb-item">
															<a href="javascript:void(0);">Library</a>
														</li>
														<li class="breadcrumb-item active">Data</li>
													</ol>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<!-- ROW CLOSED -->

@endsection

@section('scripts')

        <!-- INTERNAL DATEPICKER JS -->
        <script src="{{asset('build/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
@endsection