@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                    <!-- BREADCRUMB -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="my-auto">
                            <h4 class="page-title">Apps</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Draggable Cards</li>
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
					<div class="sortable">
						<div class="row row-sm">
							<div class="col-xl-4 col-sm-12 col-md-6  col-lg-4">
								<div class="card custom-card card-body card-draggable">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
								<div class="card custom-card card-draggable">
									<img alt="Image" class="img-fluid card-img-top" src="{{asset('build/assets/img/photos/1.jpg')}}">
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
								<div class="card custom-card card-draggable">
									<div class="card-body">
										<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
									<div class="card-footer">
										January, 20, 2017 4:30am
									</div>
								</div>
								<div class="card custom-card  bg-primary tx-white card-draggable">
									<div class="card-body custom-hvr">
										<h5 class="card-title tx-white tx-medium mg-b-10">The Card Title</h5>
										<p class="card-subtitle mg-b-15 tx-white-8">This is the card subtitle</p>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link tx-white-7 hover-white" href="javascript:void(0);">Card link</a> <a class="card-link tx-white-7 hover-white" href="javascript:void(0);">Another link</a>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-12 col-md-6 col-lg-4">
								<div class="card custom-card card-body card-draggable bg-secondary tx-white">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
								<div class="card custom-card card-draggable">
									<div class="card-body">
										<h5 class="card-title tx-dark tx-medium mg-b-10">The Card Title</h5>
										<p class="card-subtitle mg-b-15">This is the card subtitle</p>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link" href="javascript:void(0);">Card link</a> <a class="card-link" href="javascript:void(0);">Another link</a>
									</div>
								</div>
								<div class="card custom-card bg-dark card-body tx-white-8 bg-gray-800 card-draggable">
									Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
								</div>
								<div class="card custom-card card-draggable">
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
									<img alt="Image" class="img-fluid card-img-bottom" src="{{asset('build/assets/img/photos/3.jpg')}}">
								</div>
							</div>
							<div class="col-xl-4 col-sm-12 col-md-12 col-lg-4">
								<div class="card custom-card card-body card-draggable bg-primary tx-white">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
								<div class="card custom-card card-draggable">
									<img alt="Image" class="card-img img-fluid card-img-top" src="{{asset('build/assets/img/photos/6.jpg')}}">
									<div class="card-img-overlay pd-30 bg-black-4 d-flex flex-column justify-content-center custom-hvr-2">
										<p class="tx-white tx-medium mg-b-15">The Ghost Town</p>
										<p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
										<p class="tx-13 mg-b-0"><a class="tx-white" href="javascript:void(0);">Read more</a></p>
									</div>
								</div>
								<div class="card custom-card card-draggable">
									<div class="card-header tx-medium">
										Description
									</div>
									<div class="card-body">
										<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
								</div>
								<div class="card custom-card card-draggable">
									<img alt="Image" class="img-fluid card-img-top" src="{{asset('build/assets/img/photos/1.jpg')}}">
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END ROW -->

@endsection

@section('scripts')

        <!--- Internal Darggable js-->
        <script src="{{asset('build/assets/plugins/darggable/jquery-ui-darggable.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/darggable/darggable.js')}}"></script>

@endsection