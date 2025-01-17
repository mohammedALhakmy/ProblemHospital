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
                                <li class="breadcrumb-item active" aria-current="page">Badge</li>
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
							<div class="card mg-b-20">
								<div class="card-body">
							 <h3 class="card-title  mg-b-10">Buttons with square Badges</h3>
									<p class="mg-b-20 text-muted card-sub-title">Below exapmle badges are button badges.</p>
									<div class="text-wrap">
									<div class="example">
										<button type="button" class="btn btn-primary mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge  bg-white ms-1">2</span>
										</button>
										<button type="button" class="btn btn-secondary  mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge bg-white ms-1">1</span>
										</button>
										<button type="button" class="btn btn-success  mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge bg-white ms-1">5</span>
										</button>
										<button type="button" class="btn btn-info  mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge bg-white ms-1">3</span>
										</button>
										<button type="button" class="btn btn-warning mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge bg-white ms-1">6</span>
										</button>
										<button type="button" class="btn btn-danger  mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge bg-white ms-1">4</span>
										</button>
									</div>
									</div>
								</div>
							</div>
						</div><!-- COL-END -->
					</div>
					<!-- ROW CLOSED -->

					<!-- ROW OPEN -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card mg-b-20">
								<div class="card-body">
							 <h3 class="card-title  mg-b-10">Border buttons with square Badges</h3>
									<p class="mg-b-20 text-muted card-sub-title">Below exapmle badges are Border buttons badges..</p>
									<div class="text-wrap">
										<div class="example">
											<button type="button" class="btn btn-outline-primary mt-1 mb-1 me-3">
												<span>Notifications</span>
												<span class="badge  bg-primary ms-1">2</span>
											</button>
											<button type="button" class="btn btn-outline-success mt-1 mb-1 me-3">
												<span>Notifications</span>
												<span class="badge bg-success ms-1">65</span>
											</button>
											<button type="button" class="btn btn-outline-secondary   mt-1 mb-1 me-3">
												<span>Notifications</span>
												<span class="badge  bg-secondary ms-1">1</span>
											</button>
											<button type="button" class="btn btn-outline-info  mt-1 mb-1 me-3">
												<span>Notifications</span>
												<span class="badge bg-info ms-1">5333</span>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div><!-- COL-END -->
					</div>
					<!-- ROW CLOSED -->

					<!-- ROW OPEN -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card mg-b-20">
								<div class="card-body">
							 <h3 class="card-title  mg-b-10">Buttons with rounded Badges</h3>
									<p class="mg-b-20 text-muted card-sub-title">Below exapmle badges are  button rounded badges...</p>
									<div class="text-wrap">
										<div class="example">
											<button type="button" class="btn btn-info  mt-1 mb-1 me-3">
												<span>Notifications</span>
												<span class="badge bg-white rounded-pill ms-1">3</span>
											</button>
											<button type="button" class="btn btn-primary mt-1 mb-1 me-3">
												<span>Notifications</span>
												<span class="badge  bg-white rounded-pill ms-1">22</span>
											</button>
											<button type="button" class="btn btn-secondary  mt-1 mb-1 me-3">
												<span>Notifications</span>
												<span class="badge bg-white rounded-pill ms-1">145</span>
											</button>
											<button type="button" class="btn btn-success  mt-1 mb-1 me-3">
												<span>Notifications</span>
												<span class="badge bg-white rounded-pill ms-1">3225</span>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ROw CLOSED -->

					<!-- ROW OPEN -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card mg-b-20">
								<div class="card-body">
							 <h3 class="card-title  mg-b-10">Border buttons with rounded Badges</h3>
									<p class="mg-b-20 text-muted card-sub-title">Below exapmle badges are border  button rounded badges...</p>
									<div class="text-wrap">
										<div class="example">
											<button type="button" class="btn btn-outline-primary mt-1 mb-1 me-3">
												<span>Notifications</span>
												<span class="badge  bg-primary rounded-pill ms-1">2</span>
											</button>
											<button type="button" class="btn btn-outline-success mt-1 mb-1 me-3">
												<span>Notifications</span>
												<span class="badge bg-success rounded-pill ms-1">65</span>
											</button>
											<button type="button" class="btn btn-outline-secondary   mt-1 mb-1 me-3">
												<span>Notifications</span>
												<span class="badge  bg-secondary rounded-pill ms-1">43</span>
											</button>
											<button type="button" class="btn btn-outline-info  mt-1 mb-1 me-3">
												<span>Notifications</span>
												<span class="badge bg-info rounded-pill ms-1">563</span>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div><!-- COL-END -->
					</div>
					<!-- ROW CLOSED -->

					<!-- ROW OPEN -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card mg-b-20">
								<div class="card-body">
								 <h3 class="card-title  mg-b-10">Link Badges</h3>
									<p class="mg-b-20 text-muted card-sub-title">Badges can be used as part of links or buttons to provide a counter.</p>
									<div class="text-wrap">
										<div class="example">
											<button type="button" class="btn btn-primary mt-1 mb-1 me-3">Primary <span class="badge bg-light ms-1">22</span></button>
											<button type="button" class="btn btn-success mt-1 mb-1 me-3">Success <span class="badge bg-light  ms-1">New</span></button>
											<button type="button" class="btn btn-info mt-1 mb-1 me-3">Info <span class="badge bg-light  ms-1">5</span></button>
											<button type="button" class="btn btn-warning mt-1 mb-1 me-3">Warning <span class="badge bg-light badge-pill  ms-1"><i class="fe fe-plus-circle tx-14"></i></span></button>
											<button type="button" class="btn btn-danger mt-1 mb-1 me-3">Danger <span class="badge bg-light badge-pill  ms-1">Updated</span></button>
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
								 <h3 class="card-title  mg-b-10">Link Badges</h3>
									<p class="mg-b-20 text-muted card-sub-title">Badges can be used as part of links or buttons to provide a counter.</p>
									<div class="text-wrap">
										<div class="example">
											<button type="button" class="btn btn-primary position-relative badge-top-pill mb-2">
												Inbox
												<span class="position-absolute start-100 translate-middle badge rounded-pill bg-info">
												  8
												  <span class="visually-hidden">unread messages</span>
												</span>
											</button>
											<button type="button" class="btn btn-success position-relative mb-2 mt-2 badge-top-pill">
												Inbox
												<span class="position-absolute start-100 translate-middle badge rounded-pill bg-warning">
												  82
												  <span class="visually-hidden">unread messages</span>
												</span>
											</button>
											<button type="button" class="btn btn-danger position-relative mb-2 mt-2 badge-top-pill">
												Inbox
												<span class="position-absolute start-100 translate-middle badge rounded-pill bg-success">
												  539
												  <span class="visually-hidden">unread messages</span>
												</span>
											</button>
											<button type="button" class="btn btn-teal position-relative mb-2 mt-2 badge-top-pill">
												Inbox
												<span class="position-absolute start-100 translate-middle badge rounded-pill bg-warning">
												  9+
												  <span class="visually-hidden">unread messages</span>
												</span>
											</button>
											<button type="button" class="btn btn-info position-relative mb-2 mt-2 badge-top-pill">
												Inbox
												<span class="position-absolute start-100 translate-middle badge rounded-pill bg-danger">
												  99+
												  <span class="visually-hidden">unread messages</span>
												</span>
											</button>
											<button type="button" class="btn btn-warning position-relative mb-2 mt-2 badge-top-pill">
												Inbox
												<span class="position-absolute  start-100 translate-middle badge rounded-pill bg-primary">
												  999+
												  <span class="visually-hidden">unread messages</span>
												</span>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ROW CLOSED -->

                    <!-- ROW OPEN -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="card mg-b-20" id="badge">
                                <div class="card-body">
                                <h3 class="card-title  mg-b-10">Simple Badges</h3>
                                    <p class="mg-b-20 text-muted card-sub-title">Badges scale to match the size of the immediate parent element by using relative font sizing and em units...</p>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <h1>Heading 1 <span class="badge bg-light">New</span></h1>
                                            <h2>Heading 2 <span class="badge bg-light">New</span></h2>
                                            <h3>Heading 3 <span class="badge bg-light ">New</span></h3>
                                            <h4>Heading 4 <span class="badge bg-light ">New</span></h4>
                                            <h5>Heading 5 <span class="badge bg-light ">New</span></h5>
                                            <h6>Heading 6 <span class="badge bg-light ">New</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card mg-b-20" id="badge1">
                                <div class="card-body">
                                <h3 class="card-title  mg-b-10">Colored Badges</h3>
                                    <p class="mg-b-20 text-muted card-sub-title">Badges scale to match the size of the immediate parent element by using relative font sizing and em units...</p>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <h1 class="text-primary">Heading 1 <span class="badge bg-primary">New</span></h1>
                                            <h2 class="text-danger">Heading 2 <span class="badge bg-danger">New</span></h2>
                                            <h3 class="text-warning">Heading 3 <span class="badge bg-warning">New</span></h3>
                                            <h4 class="text-success">Heading 4 <span class="badge bg-success">New</span></h4>
                                            <h5 class="text-info">Heading 5 <span class="badge bg-info">New</span></h5>
                                            <h6 class="text-secondary">Heading 6 <span class="badge bg-secondary">New</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="card mg-b-20" id="badge2">
                                <div class="card-body">
                                <h3 class="card-title  mg-b-10">BADGES</h3>
                                    <p class="mg-b-20 text-muted card-sub-title">Badges scale to match the size of the immediate parent element by using relative font sizing and em units...</p>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <span class="badge bg-primary me-1 my-2">Primary</span>
                                            <span class="badge bg-secondary me-1">Secondary</span>
                                            <span class="badge bg-success me-1">Success</span>
                                            <span class="badge bg-danger me-1">Danger</span>
                                            <span class="badge bg-warning me-1">Warning</span>
                                            <span class="badge bg-info me-1">Info</span>
                                            <span class="badge bg-light me-1">Light</span>
                                            <span class="badge bg-dark me-1">Dark</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="card mg-b-20" id="badge3">
                                <div class="card-body">
                                <h3 class="card-title  mg-b-10">Pill Badges</h3>
                                    <p class="text-muted card-sub-title">Use the <code>.badge-pill</code> modifier class to make badges more rounded.</p>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <span class="badge badge-pill bg-primary me-1 my-2">Primary</span>
                                            <span class="badge badge-pill bg-secondary me-1">Secondary</span>
                                            <span class="badge badge-pill bg-success me-1">Success</span>
                                            <span class="badge badge-pill bg-danger me-1">Danger</span>
                                            <span class="badge badge-pill bg-warning me-1">Warning</span>
                                            <span class="badge badge-pill bg-info me-1">Info</span>
                                            <span class="badge badge-pill bg-light me-1">Light</span>
                                            <span class="badge badge-pill bg-dark me-1">Dark</span>
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