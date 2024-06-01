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
                                <li class="breadcrumb-item active" aria-current="page">Flex</li>
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
					<div class="row row-sm">
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<!--div-->
							<div class="card flex-card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Enable Flex
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="d-flex pd-10 bg-gray-200 flex-container">
										I'm a flexbox container!
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card  flex-card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Direction
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div>
										<div class="d-flex flex-row bg-gray-200 mg-b-20">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row-reverse bg-gray-200">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card  flex-card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Justify Content
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div>
										<div class="d-flex flex-row justify-content-start bg-gray-200 mg-b-20">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row justify-content-end bg-gray-200 mg-b-20">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row justify-content-center bg-gray-200 mg-b-20">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row justify-content-between bg-gray-200 mg-b-20">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row justify-content-around bg-gray-200">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card  flex-card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Align Items
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div>
										<div class="d-flex flex-row align-items-start bg-gray-200 ht-100 mg-b-20">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row align-items-center bg-gray-200 ht-100 mg-b-20">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row align-items-end bg-gray-200 ht-100 mg-b-20">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row align-items-stretch bg-gray-200 ht-100">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card flex-card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Align Self
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div>
										<div class="d-flex flex-row bg-gray-200 ht-100 mg-b-20">
											<div class="pd-10 bg-gray-300 align-self-start">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400 align-self-center">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500 align-self-end">
												Flex item 3
											</div>
											<div class="pd-10 bg-gray-400 align-self-stretch">
												Flex item 4
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card flex-card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Fill
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div>
										<div class="d-flex bg-gray-200">
											<div class="pd-10 bg-gray-300 flex-fill">
												Flex item with a lot of content
											</div>
											<div class="pd-10 bg-gray-400 flex-fill">
												Flex item
											</div>
											<div class="pd-10 bg-gray-500 flex-fill">
												Flex item
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card flex-card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Grow and Shrink
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div>
										<div class="d-flex bg-gray-200">
											<div class="pd-10 bg-gray-300 flex-grow-1">
												Flex item
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item
											</div>
											<div class="pd-10 bg-gray-500">
												Third flex item
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card flex-card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Auto Margins
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div>
										<div class="d-flex bg-gray-200">
											<div class="pd-10 bg-gray-300">
												Flex item
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item
											</div>
											<div class="pd-10 bg-gray-500 mg-l-auto">
												Third flex item
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card flex-card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Auto Margins
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div>
										<div class="d-flex bg-gray-200">
											<div class="pd-10 bg-gray-300">
												Flex item
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item
											</div>
											<div class="pd-10 bg-gray-500 mg-l-auto">
												Third flex item
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->
					</div>
					<!-- ROW CLOSED -->

@endsection

@section('scripts')

@endsection