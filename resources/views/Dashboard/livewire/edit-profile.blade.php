@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                    <!-- BREADCRUMB -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="my-auto">
                            <h4 class="page-title">Pages</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit-Profile</li>
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
						<div class="col-lg-4">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="ps-0">
										<div class="main-profile-overview">
											<div class="main-img-user profile-user">
												<img alt="" src="{{asset('build/assets/img/users/6.jpg')}}"><a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
											</div>
											<div class="d-flex justify-content-between mg-b-20">
												<div>
													<h5 class="main-profile-name">Petey Cruiser</h5>
													<p class="main-profile-name-text">Web Designer</p>
												</div>
											</div>
											<h6>Bio</h6>
											<div class="main-profile-bio">
												pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure.. <a href="javascript:void(0);">More</a>
											</div><!-- main-profile-bio -->
											<div class="row">
												<div class="col-md-4 col mb20">
													<h5>947</h5>
													<h6 class="text-small text-muted mb-0">Followers</h6>
												</div>
												<div class="col-md-4 col mb20">
													<h5>583</h5>
													<h6 class="text-small text-muted mb-0">Tweets</h6>
												</div>
												<div class="col-md-4 col mb20">
													<h5>48</h5>
													<h6 class="text-small text-muted mb-0">Posts</h6>
												</div>
											</div>
											<hr class="mg-y-30">
											<label class="main-content-label tx-13 mg-b-20">Social</label>
											<div class="main-profile-social-list">
												<div class="media">
													<div class="media-icon bg-primary-transparent text-primary">
														<i class="icon ion-logo-github"></i>
													</div>
													<div class="media-body">
														<span>Github</span> <a href="javascript:void(0);">github.com/spruko</a>
													</div>
												</div>
												<div class="media">
													<div class="media-icon bg-success-transparent text-success">
														<i class="icon ion-logo-twitter"></i>
													</div>
													<div class="media-body">
														<span>Twitter</span> <a href="javascript:void(0);">twitter.com/spruko</a>
													</div>
												</div>
												<div class="media">
													<div class="media-icon bg-info-transparent text-info">
														<i class="icon ion-logo-linkedin"></i>
													</div>
													<div class="media-body">
														<span>Linkedin</span> <a href="javascript:void(0);">linkedin.com/spruko</a>
													</div>
												</div>
												<div class="media">
													<div class="media-icon bg-danger-transparent text-danger">
														<i class="icon ion-md-link"></i>
													</div>
													<div class="media-body">
														<span>My Portfolio</span> <a href="javascript:void(0);">spruko.com/</a>
													</div>
												</div>
											</div>
											<hr class="mg-y-30">
											<h6>Skills</h6>
											<div class="skill-bar mb-4 clearfix mt-3">
												<span>HTML5 / CSS3</span>
												<div class="progress mt-2">
													<div class="progress-bar bg-primary-gradient" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
												</div>
											</div>
											<!--skill bar-->
											<div class="skill-bar mb-4 clearfix">
												<span>Javascript</span>
												<div class="progress mt-2">
													<div class="progress-bar bg-danger-gradient" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 89%"></div>
												</div>
											</div>
											<!--skill bar-->
											<div class="skill-bar mb-4 clearfix">
												<span>Bootstrap</span>
												<div class="progress mt-2">
													<div class="progress-bar bg-success-gradient" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
												</div>
											</div>
											<!--skill bar-->
											<div class="skill-bar clearfix">
												<span>Coffee</span>
												<div class="progress mt-2">
													<div class="progress-bar bg-info-gradient" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
												</div>
											</div>
											<!--skill bar-->
										</div><!-- main-profile-overview -->
									</div>
								</div>
							</div>
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label tx-13 mg-b-25">
										contact
									</div>
									<div class="main-profile-contact-list">
										<div class="media">
											<div class="media-icon bg-primary-transparent text-primary">
												<i class="icon ion-md-phone-portrait"></i>
											</div>
											<div class="media-body">
												<span>Mobile</span>
												<div>
													+245 354 654
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-icon bg-success-transparent text-success">
												<i class="icon ion-logo-slack"></i>
											</div>
											<div class="media-body">
												<span>Slack</span>
												<div>
													@spruko.w
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-icon bg-info-transparent text-info">
												<i class="icon ion-md-locate"></i>
											</div>
											<div class="media-body">
												<span>Current Address</span>
												<div>
													San Francisco, CA
												</div>
											</div>
										</div>
									</div><!-- main-profile-contact-list -->
								</div>
							</div>
						</div>

						<!-- Col -->
						<div class="col-lg-8">
							<div class="card">
								<div class="card-body">
									<div class="mb-4 main-content-label">Personal Information</div>
									<form class="form-horizontal">
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">Language</label>
												</div>
												<div class="col-md-9">
													<select class="form-control select2">
														<option>Us English</option>
														<option>Arabic</option>
														<option>Korean</option>
													</select>
												</div>
											</div>
										</div>
										<div class="mb-4 main-content-label">Name</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">User Name</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control"  placeholder="User Name" value="Petey Cruiser">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">First Name</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control"  placeholder="First Name" value="Petey">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">last Name</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control"  placeholder="Last Name" value="Pechon">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">Nick Name</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control"  placeholder="Nick Name" value="Petey">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">Designation</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control"  placeholder="Designation" value="Web Designer">
												</div>
											</div>
										</div>
										<div class="mb-4 main-content-label">Contact Info</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">Email<i>(required)</i></label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control"  placeholder="Email" value="info@Valex.in">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">Website</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control"  placeholder="Website" value="@spruko.w">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">Phone</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control"  placeholder="phone number" value="+245 354 654">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">Address</label>
												</div>
												<div class="col-md-9">
													<textarea class="form-control" name="example-textarea-input" rows="2"  placeholder="Address">San Francisco, CA</textarea>
												</div>
											</div>
										</div>
										<div class="mb-4 main-content-label">Social Info</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">Twitter</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control"  placeholder="twitter" value="twitter.com/spruko.me">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">Facebook</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control"  placeholder="facebook" value="https://www.facebook.com/Redash">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">Google+</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control"  placeholder="google" value="spruko.com">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">Linked in</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control"  placeholder="linkedin" value="linkedin.com/in/spruko">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">Github</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control" placeholder="github" value="github.com/sprukos">
												</div>
											</div>
										</div>
										<div class="mb-4 main-content-label">About Yourself</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">Biographical Info</label>
												</div>
												<div class="col-md-9">
													<textarea class="form-control" name="example-textarea-input" rows="4" placeholder="">pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure..</textarea>
												</div>
											</div>
										</div>
										<div class="mb-4 main-content-label">Email Preferences</div>
										<div class="form-group mb-0">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">Verified User</label>
												</div>
												<div class="col-md-9">
													<div class="custom-controls-stacked">
														<label class="ckbox mg-b-10 me-3"><input checked="" type="checkbox" class="mb-2"><span> Accept to receive post or page notification emails</span></label>
														<label class="ckbox"><input checked="" type="checkbox" class="mb-2"><span> Accept to receive email sent to multiple recipients</span></label>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>
								</div>
							</div>
						</div>
						<!-- /Col -->
					</div>
					<!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAL CHART BUNDLE JS -->
        <script src="{{asset('build/assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

        <!-- INTERNAL SELECT2 JS -->
        <script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>
        @vite('resources/assets/js/select2.js')
@endsection