@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                    <!-- BREADCRUMB -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="my-auto">
                            <h4 class="page-title">Mail</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Mail</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Compose-mail</li>
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
						<!-- Col -->
						<div class="col-lg-4 col-xl-3 col-md-12 col-sm-12">
							<div class="card mg-b-20">
								<div class="main-content-left main-content-left-mail card-body">
									<a class="btn btn-primary btn-compose" href="{{url('mail-compose')}}" id="btnCompose">Compose</a>
									<div class="main-mail-menu">
										<nav class="nav main-nav-column mg-b-20">
											<a class="nav-link" href="javascript:void(0);"><i class="bx bxs-inbox"></i> Inbox <span>18</span></a>
											<a class="nav-link" href="javascript:void(0);"><i class="bx bx-star"></i> Starred <span>8</span></a>
											<a class="nav-link" href="javascript:void(0);"><i class="bx bx-alarm-snooze"></i> Snoozed <span>6</span></a>
											<a class="nav-link" href="javascript:void(0);"><i class="bx bx-bookmarks"></i> Important <span>15</span></a>
											<a class="nav-link" href="javascript:void(0);"><i class="bx bx-send"></i> Sent Mail <span>24</span></a>
											<a class="nav-link" href="javascript:void(0);"><i class="bx bx-edit"></i> Drafts <span>2</span></a>
											<a class="nav-link" href="javascript:void(0);"><i class="bx bx-message-error"></i> Spam <span>32</span></a>
											<a class="nav-link" href="javascript:void(0);"><i class="bx bx-message-square-detail"></i> Chats <span>14</span></a>
											<a class="nav-link" href="javascript:void(0);"><i class="bx bx-folder"></i> All Mail <span>652</span></a>
											<a class="nav-link" href="javascript:void(0);"><i class="bx bx-book-content"></i> Contacts <span>547</span></a>
											<a class="nav-link" href="javascript:void(0);"><i class="bx bx-trash"></i> Trash <span>365</span></a>
										</nav>
										<label class="main-content-label main-content-label-sm">Settings</label>
										<nav class="nav main-nav-column">
											<a class="nav-link active" href="javascript:void(0);">Email Settings</a>
											<a class="nav-link" href="javascript:void(0);">Account Information</a>
										</nav>
									</div><!-- main-mail-menu -->
								</div>
							</div>
						</div>
						<!-- /Col -->
						<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Compose new message</h3>
								</div>
								<div class="card-body">
									<form >
										<div class="form-group">
											<div class="row align-items-center">
												<label class="col-sm-2">To</label>
												<div class="col-sm-10">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row align-items-center">
												<label class="col-sm-2">Subject</label>
												<div class="col-sm-10">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row ">
												<label class="col-sm-2">Message</label>
												<div class="col-sm-10">
													<textarea rows="10" class="form-control"></textarea>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="card-footer d-sm-flex">
									<div class="mt-2 mb-2">
										<a href="javascript:void(0);" class="me-3" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="attach"><i class="bx bx-paperclip text-muted tx-22"></i></a>
										<a href="javascript:void(0);" class="me-3" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Link"><i class="bx bx-link text-muted tx-22"></i></a>
										<a href="javascript:void(0);" class="me-3" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Photos"><i class="bx bx-image text-muted tx-22"></i></a>
										<a href="javascript:void(0);" class="me-3" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Delete"><i class="bx bx-trash text-muted tx-22"></i></a>
									</div>
									<div class="btn-list ms-auto">
										<button type="button" class="btn btn-success btn-space">Discard</button>
										<button type="button" class="btn btn-primary btn-space">Save</button>
										<button type="button" class="btn btn-danger btn-space">Send</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAL SPARKLINE JS -->
        <script src="{{asset('build/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- INTERNAL SELECT2 JS -->
        <script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>
		@vite('resources/assets/js/select2.js')
        

@endsection