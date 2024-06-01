@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                    <!-- BREADCRUMB -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="my-auto">
                            <h4 class="page-title">Blog</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Page</li>
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

					<!-- ROW -->
					<div class="row">
						<div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12">
							<div class="card custom-card">
								<a href="{{url('blog-details')}}">
									<img class="card-img-top w-100 w-100" src="{{asset('build/assets/img/photos/27.jpg')}}" alt="">
								</a>
								<div class="card-body">
									<a href="javascript:void(0);" class="mt-4"><h4 class="font-weight-semibold text-dark">Best Place To visit For a Holiday idea of denouncing pleasure?</h4></a>
									<p class="mb-0 mt-3">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>

								</div>
								<div class="card-footer p-3">
									<div class="item7-card-desc d-sm-flex mt-0">
										<a href="javascript:void(0);" class="d-flex"><span class="fe fe-user text-muted me-2 tx-17"></span><div class="mt-0 mt-0  font-weight-semibold text-muted">Anna Ogden</div></a>
										<div class="d-flex ms-auto">
											<a href="javascript:void(0);" class="d-flex me-3"><span class="fe fe-calendar text-muted me-2 tx-17"></span><div class="mt-0 mt-0  font-weight-semibold text-muted">Jan-18-2020</div></a>
											<a class="me-0 d-flex" href="javascript:void(0);"><span class="fe fe-message-square text-muted me-2 tx-17"></span><div class="mt-0 mt-0  font-weight-semibold text-muted">12 Comments</div></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-3 col-xl-6 col-lg-6  col-sm-6">
							<div class="card custom-card card-img-top-1">
								<a href="{{url('blog-details')}}"><img class="card-img-top w-100 w-100" src="{{asset('build/assets/img/photos/11.jpg')}}" alt=""></a>
								<div class="card-body pb-0">
									<a href="{{url('blog-details')}}"><h4 class="card-title">10 Ways To Immediately Start Selling Products !</h4></a>
									<p class="mb-2">Those who do not know how  pursues or desires to  occur in which toil and pain can procure him some great pleasure. To take a trivial example  pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-buil .the great explorer of the truth, the master-buil</p>
								</div>
								<div class="item7-card-desc d-flex p-3 pt-0 align-items-center justify-content-center border-top">
									<div class="main-img-user online">
									<img alt="avatar" src="{{asset('build/assets/img/users/9.jpg')}}">
									</div>
									<div class="main-contact-body">
										<h6>Jiggel mossin</h6>
									</div>
									<div class="ms-auto">
										<a class="me-0 d-flex" href="javascript:void(0);"><span class="phone font-weight-semibold text-muted"><span class="fe fe-calendar text-muted me-2 tx-16"></span>Aug 01,2021</span></a>
									</div>
								</div>
							 </div>
						</div>
						<div class="col-xxl-3 col-xl-6 col-lg-6  col-sm-6">
							<div class="card">
								<div class="card-header pb-0">
									<h3 class="card-title">Latest Posts</h3>
								</div>
								<div class="card-body pt-1">
									<div class="list-catergory1">
										<div class="item-list">
											<ul class="list-group mb-0">
												<li class="list-group-item d-flex  border-bottom-0">
													<img src="{{asset('build/assets/img/photos/26.jpg')}}" class="avatar rounded-5 avatar-lg me-3 my-auto" alt="avatar-img">
													<div class="my-auto">
														<span class="d-block h6 text-dark">Health</span>
														<a class="text-default ">Health care and fitness awareness</a>
														<small class="d-block text-muted">22 hrs ago</small>
													</div>
												</li>
												<li class="list-group-item d-flex border-bottom-0">
													<img src="{{asset('build/assets/img/photos/23.jpg')}}" class="avatar rounded-5 avatar-lg me-3 my-auto" alt="avatar-img">
													<div class="my-auto">
														<span class="d-block h6 text-dark">Beautician</span>
														<a class="text-default ">Beautification courses are available.</a>
														<small class="d-block text-muted">2 hrs ago</small>
													</div>
												</li>
												<li class="list-group-item d-flex border-bottom-0 pt-4">
													<img src="{{asset('build/assets/img/photos/22.jpg')}}" class="avatar rounded-5 avatar-lg me-3 my-auto" alt="avatar-img">
													<div class="my-auto">
														<span class="d-block h6 text-dark">Tourism</span>
														<a class="text-default ">Explore tourism by visitinig places.</a>
														<small class="d-block text-muted">2 day ago</small>
													</div>
												</li>
												<li class="list-group-item d-flex border-bottom-0">
													<img src="{{asset('build/assets/img/photos/24.jpg')}}" class="avatar rounded-5 avatar-lg me-3 my-auto" alt="avatar-img">
													<div class="my-auto">
														<span class="d-block h6 text-dark">Literature</span>
														<a class="text-default ">English and spanish classes in Your way</a>
														<small class="d-block text-muted">1 week ago</small>
													</div>
												</li>
												<li class="list-group-item d-flex ">
													<img src="{{asset('build/assets/img/photos/25.jpg')}}" class="avatar rounded-5 avatar-lg me-3 my-auto" alt="avatar-img">
													<div class="my-auto">
														<span class="d-block h6 text-dark">Music</span>
														<a class="text-default ">Music in a peaceful way </a>
														<small class="d-block text-muted">1 day ago</small>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				    <!-- ROW CLOSED -->

                    <!-- ROW -->
                    <div class="row ">
                        <div class="col-xxl-3 col-xl-6 col-lg-6  col-sm-6">
                            <div class="card custom-card card-img-top-1">
                                <a href="{{url('blog-details')}}"><img class="card-img-top w-100 w-100" src="{{asset('build/assets/img/photos/2.jpg')}}" alt=""></a>
                                <div class="card-body pb-0">
                                    <a href="{{url('blog-details')}}"><h4 class="card-title">How To Become Better With Building In 1 Month !</h4></a>
                                    <p class="card-text mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="item7-card-desc d-flex p-3 pt-0 align-items-center justify-content-center border-top">
                                    <div class="main-img-user online">
                                    <img alt="avatar" src="{{asset('build/assets/img/users/2.jpg')}}">
                                    </div>
                                    <div class="main-contact-body">
                                        <h6>Abigail John</h6>
                                    </div>
                                    <div class="ms-auto">
                                        <a class="me-0 d-flex" href="javascript:void(0);"><span class="phone font-weight-semibold text-muted"><span class="fe fe-calendar text-muted me-2 tx-16"></span>Aug 24,2021</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6  col-sm-6">
                            <div class="card custom-card card-img-top-1">
                                <a href="{{url('blog-details')}}"><img class="card-img-top w-100 w-100" src="{{asset('build/assets/img/photos/1.jpg')}}" alt=""></a>
                                <div class="card-body pb-0">
                                    <a href="{{url('blog-details')}}"><h4 class="card-title">10 Ways To Immediately Start Selling Products !</h4></a>
                                    <p class="card-text mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                <div class="item7-card-desc d-flex p-3 pt-0 align-items-center justify-content-center border-top">
                                    <div class="main-img-user online">
                                    <img alt="avatar" src="{{asset('build/assets/img/users/9.jpg')}}">
                                    </div>
                                    <div class="main-contact-body">
                                        <h6>Jiggel mossin</h6>
                                    </div>
                                    <div class="ms-auto">
                                        <a class="me-0 d-flex" href="javascript:void(0);"><span class="phone font-weight-semibold text-muted"><span class="fe fe-calendar text-muted me-2 tx-16"></span>Aug 01,2021</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6  col-sm-6">
                            <div class="card custom-card card-img-top-1">
                                <a href="{{url('blog-details')}}"><img class="card-img-top w-100 w-100" src="{{asset('build/assets/img/photos/9.jpg')}}" alt=""></a>
                                <div class="card-body pb-0">
                                    <a href="{{url('blog-details')}}"><h4 class="card-title">3 Easy Ways To Make Your mobile Faster & Even !</h4></a>
                                    <p class="card-text mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="item7-card-desc d-flex p-3 pt-0 align-items-center justify-content-center border-top">
                                    <div class="main-img-user online">
                                    <img alt="avatar" src="{{asset('build/assets/img/users/7.jpg')}}">
                                    </div>
                                    <div class="main-contact-body">
                                        <h6>Raven Chanan</h6>
                                    </div>
                                    <div class="ms-auto">
                                        <a class="me-0 d-flex" href="javascript:void(0);"><span class="phone font-weight-semibold text-muted"><span class="fe fe-calendar text-muted me-2 tx-16"></span>Feb 19,2021</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6  col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-header pb-1">
                                    <h3 class="card-title mb-2">Blog AUthors</h3>
                                </div>
                                <div class="card-body p-0 customers mt-1">
                                    <div class="list-group list-lg-group list-group-flush">
                                <a href="javascript:void(0);" class="border-0">
                                        <div class="list-group-item list-group-item-action">
                                            <div class="media mt-0">
                                                <img class="avatar-lg rounded-circle me-3 my-auto" src="{{asset('build/assets/img/users/3.jpg')}}" alt="Image description">
                                                <div class="media-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="mt-0">
                                                            <h5 class="mb-1 tx-13 font-weight-sembold text-dark">Samantha Melon</h5>
                                                            <p class="mb-0 tx-13 text-muted">User ID: #1234</p>
                                                        </div>
                                                        <span class="ms-auto wd-45p fs-16 ">
                                                            <span id="spark1" class="wd-100p"></span>
                                                            <span class="float-end badge ">
                                                            <span class="op-7 text-success font-weight-semibold">8 hrs ago </span>
                                                        </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                        <a href="javascript:void(0);" class="border-0">
                                            <div class="list-group-item list-group-item-action">
                                                <div class="media mt-0">
                                                    <img class="avatar-lg rounded-circle me-3 my-auto" src="{{asset('build/assets/img/users/11.jpg')}}" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-1">
                                                                <h5 class="mb-1 tx-13 font-weight-sembold text-dark">Allie Grater</h5>
                                                                <p class="mb-0 tx-13 text-muted">User ID: #1234</p>
                                                            </div>
                                                            <span class="ms-auto wd-45p fs-16 ">
                                                                <span id="spark2" class="wd-100p"></span>
                                                                <span class="float-end badge ">
                                                                <span class="op-7 text-danger font-weight-semibold">12 hrs ago</span>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="border-0">
                                            <div class="list-group-item list-group-item-action">
                                                <div class="media mt-0">
                                                    <img class="avatar-lg rounded-circle me-3 my-auto" src="{{asset('build/assets/img/users/17.jpg')}}" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-1">
                                                                <h5 class="mb-1 tx-13 font-weight-sembold text-dark">Gabe Lackmen</h5>
                                                                <p class="mb-0 tx-13 text-muted">User ID: #1234</p>
                                                            </div>
                                                            <span class="ms-auto wd-45p fs-16 ">
                                                                <span id="spark3" class="wd-100p"></span>
                                                                <span class="float-end badge ">
                                                                <span class="op-7 text-danger font-weight-semibold">1 hr ago</span>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="border-0">
                                            <div class="list-group-item list-group-item-action">
                                                <div class="media mt-0">
                                                    <img class="avatar-lg rounded-circle me-3 my-auto" src="{{asset('build/assets/img/users/15.jpg')}}" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-1">
                                                                <h5 class="mb-1 tx-13 font-weight-sembold text-dark">Manuel Labor</h5>
                                                                <p class="mb-0 tx-13 text-muted">User ID: #1234</p>
                                                            </div>
                                                            <span class="ms-auto wd-45p fs-16">
                                                                <span id="spark6" class="wd-100p"></span>
                                                            <span class="float-end badge  ">
                                                            <span class="op-7 text-success font-weight-semibold">3 days ago</span>
                                                        </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0);" class="border-0">
                                            <div class="list-group-item list-group-item-action">
                                                <div class="media mt-0">
                                                    <img class="avatar-lg rounded-circle me-3 my-auto" src="{{asset('build/assets/img/users/13.jpg')}}" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-1">
                                                                <h5 class="mb-1 tx-13 font-weight-sembold text-dark">Manuel Labor</h5>
                                                                <p class="mb-0 tx-13 text-muted">User ID: #1234</p>
                                                            </div>
                                                            <span class="ms-auto wd-45p fs-16">
                                                                <span id="spark4" class="wd-100p"></span>
                                                                <span class="float-end badge ">
                                                                <span class="op-7 text-danger font-weight-semibold">22 hrs ago</span>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="border-0">
                                            <div class="list-group-item list-group-item-action">
                                                <div class="media mt-0">
                                                    <img class="avatar-lg rounded-circle me-3 my-auto" src="{{asset('build/assets/img/users/13.jpg')}}" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-1">
                                                                <h5 class="mb-1 tx-13 font-weight-sembold text-dark">Manuel Labor</h5>
                                                                <p class="mb-0 tx-13 text-muted">User ID: #1234</p>
                                                            </div>
                                                            <span class="ms-auto wd-45p fs-16">
                                                                <span id="spark5" class="wd-100p"></span>
                                                                <span class="float-end badge ">
                                                                <span class="op-7 text-danger font-weight-semibold">1 day ago</span>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW CLOSED -->
                    <ul class="pagination product-pagination ms-auto float-end">
                        <li class="page-item page-prev disabled">
                            <a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                        <li class="page-item page-next">
                            <a class="page-link" href="javascript:void(0);">Next</a>
                        </li>
                    </ul>

@endsection

@section('scripts')

@endsection