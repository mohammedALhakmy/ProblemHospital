@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                    <!-- BREADCRUMB -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="my-auto">
                            <h4 class="page-title">Utilities</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Height</li>
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

					<!-- ROW -->
					<div class="row">
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<!--div-->
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Height Values
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="d-flex">
										<div class="d-flex align-items-center justify-content-center wd-150 ht-80 bg-gray-400">
											.ht-80
										</div>
										<div class="d-flex align-items-center justify-content-center wd-150 ht-150 bg-gray-400 mg-l-20">
											.ht-150
										</div>
										<div class="d-flex align-items-center justify-content-center wd-150 ht-100 bg-gray-400 mg-l-20">
											.ht-100
										</div>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-20 mb-0">
											<tbody>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
													<td><code>.ht-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Values</b></td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-20 mb-0">
											<tbody>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
													<td><code>.ht-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Values</b></td>
													<td>15 | 20 | 25 | 30 | ... | 100 &nbsp; (step of 5) Regular Height</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-20 mb-0">
											<tbody>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
													<td><code>.ht-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Values</b></td>
													<td>150 | 200 | 250 | 300 | ... | 850 &nbsp; (step of 50) Bigger Height</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Percentage Height
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mb-0">
											<tbody>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
													<td><code>.ht-[value]p</code></td>
												</tr>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Values</b></td>
													<td>10 | 20 | 30 | 40 | ... | 100 &nbsp; (step of 10)</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Media Query Height
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap  mb-0">
											<tbody>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
													<td><code>.ht-[size]-[value]</code></td>
													<td><code>.ht-[size]-[value]p</code></td>
												</tr>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Values</b></td>
													<td>
														<p class="mg-b-5">size: xs | sm | md | lg | xl</p>
														<p class="mg-b-0">value: the height value (refer to code above)</p>
													</td>
													<td>
														<p class="mg-b-5">size: xs | sm | md | lg | xl</p>
														<p class="mg-b-0">value: the height value (refer to code above)</p>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Extra Height Classes
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap  mb-0">
											<tbody>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
													<td><code>.ht-100v</code></td>
													<td><code>.ht-auto</code></td>
												</tr>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Values</b></td>
													<td>Set a height to an element based on viewport height.</td>
													<td>Set an auto height to an element.</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END ROW -->

@endsection

@section('scripts')

@endsection