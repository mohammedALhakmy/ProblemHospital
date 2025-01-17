@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                    <!-- BREADCRUMB -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="my-auto">
                            <h4 class="page-title">Forms</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form-Elements</li>
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
						<div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
							<div class="card  box-shadow-0">
								<div class="card-header">
									<h4 class="card-title mb-1">Default Form</h4>
									<p class="mb-2">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="card-body pt-0">
									<form class="form-horizontal" >
										<div class="form-group">
											<input type="text" class="form-control" id="inputName" placeholder="Name">
										</div>
										<div class="form-group">
											<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
										</div>
										<div class="form-group mb-0 justify-content-end">
											<div class="checkbox">
												<div class="form-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
													<label for="checkbox-2" class="custom-control-label mt-1">Check me Out</label>
												</div>
											</div>
										</div>
										<div class="form-group mb-0 mt-3 justify-content-end">
											<div>
												<button type="submit" class="btn btn-primary">Sign in</button>
												<button type="submit" class="btn btn-secondary ms-4">Cancel</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
							<div class="card  box-shadow-0 ">
								<div class="card-header">
									<h4 class="card-title mb-1">Vertical Form</h4>
									<p class="mb-2">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="card-body pt-0">
									<form >
										<div class="">
											<div class="form-group">
												<label for="exampleInputEmail1">Email address</label>
												<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Password</label>
												<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
											</div>
											<div class="checkbox">
												<div class="form-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
													<label for="checkbox-1" class="custom-control-label mt-1">Check me Out</label>
												</div>
											</div>
										</div>
										<button type="submit" class="btn btn-primary mt-3 mb-0">Submit</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- END ROW -->

					<!-- ROW -->
					<div class="row">
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<!--div-->
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Form Input and Textarea
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="row row-sm">
										<div class="col-lg">
											<input class="form-control" placeholder="Input box" type="text">
										</div>
										<div class="col-lg mg-t-10 mg-lg-t-0">
											<input class="form-control" placeholder="Input box (readonly)" readonly type="text">
										</div>
										<div class="col-lg mg-t-10 mg-lg-t-0">
											<input class="form-control" disabled placeholder="Input box (disabled)" type="text">
										</div>
									</div>
									<div class="row row-sm mg-t-20">
										<div class="col-lg">
											<textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
										</div>
										<div class="col-lg mg-t-10 mg-lg-t-0">
											<textarea class="form-control" placeholder="Textarea (readonly)" readonly rows="3"></textarea>
										</div>
										<div class="col-lg mg-t-10 mg-lg-t-0">
											<textarea class="form-control" disabled placeholder="Texarea (disabled)" rows="3"></textarea>
										</div>
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
										Form Input Sizes
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="row row-sm">
										<div class="col-lg">
											<input class="form-control form-control-sm mg-b-20" placeholder="Input sm box" type="text">
											<input class="form-control mg-b-20" placeholder="Input box" type="text">
											<input class="form-control form-control-lg" placeholder="Input lg box" type="text">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Valid State Input
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<form class="needs-validation was-validated">
										<div class="row row-sm">
											<div class="col-lg-6">
												<div class="form-group has-success mg-b-0">
													<input class="form-control" placeholder="Input box (success state)" required="" type="text" value="This is input">
													<textarea class="form-control mg-t-20" placeholder="Textarea (success state)" required="" rows="3">This is textarea</textarea>
												</div>
											</div>
											<div class="col-lg-6 mg-t-20 mg-lg-t-0">
												<div class="form-group has-danger mg-b-0">
													<input class="form-control" placeholder="Input box (invalid state)" required="" type="text">
													<textarea class="form-control mg-t-20" placeholder="Textarea (invalid state)" required="" rows="3"></textarea>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										File Browser
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="row row-sm">
										<div class="col-sm-12 col-md-12 col-lg-12">
											<div class="mb-3">
											<label for="formFile" class="form-label">Default file input example</label>
											<input class="form-control" type="file" id="formFile">
											</div>
											<div class="mb-3">
											<label for="formFileMultiple" class="form-label">Multiple files input example</label>
											<input class="form-control" type="file" id="formFileMultiple" multiple>
											</div>
											<div class="mb-3">
											<label for="formFileDisabled" class="form-label">Disabled file input example</label>
											<input class="form-control" type="file" id="formFileDisabled" disabled>
											</div>
											<div class="mb-3">
											<label for="formFileSm" class="form-label">Small file input example</label>
											<input class="form-control form-control-sm" id="formFileSm" type="file">
											</div>
											<div>
											<label for="formFileLg" class="form-label">Large file input example</label>
											<input class="form-control form-control-lg" id="formFileLg" type="file">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->


						<!--div-->
						<div class="col-md-12 col-xl-6 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-10">
										Custom Checkboxes &amp; Radios
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="row">
										<div class="col-lg-3">
											<label class="ckbox"><input type="checkbox" class="mb-2"><span>Checkbox Unchecked</span></label>
										</div>
										<div class="col-lg-3 mg-t-20 mg-lg-t-0">
											<label class="ckbox"><input checked type="checkbox" class="mb-2"><span>Checkbox Checked</span></label>
										</div>
										<div class="col-lg-3 mg-y-20 mg-lg-y-0">
											<label class="ckbox"><input disabled type="checkbox" class="mb-2"><span>Checkbox Disabled</span></label>
										</div>
									</div>
									<div class="row mg-lg-t-15">
										<div class="col-lg-3">
											<label class="rdiobox"><input name="rdio" type="radio" class="mb-2"> <span>Radio Unchecked</span></label>
										</div>
										<div class="col-lg-3 mg-t-20 mg-lg-t-0">
											<label class="rdiobox"><input checked name="rdio" type="radio" class="mb-2"> <span>Radio Checked</span></label>
										</div>
										<div class="col-lg-3 mg-t-20 mg-lg-t-0">
											<label class="rdiobox"><input disabled name="rdio" type="radio" class="mb-2"> <span>Radio Disabled</span></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-6 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Toggle Switches
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="main-toggle-group-demo">
										<div class="main-toggle">
											<span></span>
										</div>
										<div class="main-toggle main-toggle-secondary">
											<span></span>
										</div>
										<div class="main-toggle main-toggle-success">
											<span></span>
										</div>
										<div class="main-toggle main-toggle-dark">
											<span></span>
										</div>
									</div>
									<div class="main-toggle-group-demo mg-t-10">
										<div class="main-toggle on">
											<span></span>
										</div>
										<div class="main-toggle main-toggle-secondary on">
											<span></span>
										</div>
										<div class="main-toggle main-toggle-success on">
											<span></span>
										</div>
										<div class="main-toggle main-toggle-dark on">
											<span></span>
										</div>
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
										Input Groups
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="row row-sm">
										<div class="col-lg-4">
											<div class="input-group mb-3">
													<span class="input-group-text" id="basic-addon1">@</span>
													<input aria-describedby="basic-addon1" aria-label="Username" class="form-control" placeholder="Username" type="text">
											</div><!-- input-group -->
										</div>
										<div class="col-lg-4">
											<div class="input-group mb-3">
												<input aria-describedby="basic-addon2" aria-label="Recipient's username" class="form-control" placeholder="Recipient's username" type="text">
													<span class="input-group-text" id="basic-addon2">@example.com</span>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="input-group mb-3">
													<span class="input-group-text">$</span>
													<input aria-label="Amount (to the nearest dollar)" class="form-control rounded-0" type="text">
													<span class="input-group-text">.00</span>
											</div><!-- input-group -->
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-lg-4">
											<div class="input-group">
													<div class="input-group-text">
														<label class="ckbox wd-16 mg-b-0"><input class="mg-0" type="checkbox"><span></span></label>
													</div>
													<input class="form-control" placeholder="Text input with checkbox" type="text">
											</div><!-- input-group -->
										</div><!-- col-4 -->
										<div class="col-lg-4 mg-t-20 mg-lg-t-0">
											<div class="input-group">
													<div class="input-group-text">
														<label class="rdiobox wd-16 mg-b-0"><input type="radio"><span></span></label>
													</div>
													<input class="form-control" placeholder="Text input with radiobox" type="text">
											</div><!-- input-group -->
										</div><!-- col-4 -->
										<div class="col-lg-4 mg-t-20 mg-lg-t-0">
											<div class="input-group">
												<input class="form-control" placeholder="Search for..." type="text">
												<button class="btn btn-primary br-ts-0 br-bs-0" type="button"><i class="fa fa-search"></i></button>
											</div><!-- input-group -->
										</div><!-- col-4 -->
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
										Input Mask
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="row row-sm">
										<div class="col-lg-3">
											<div class="input-group">
													<div class="input-group-text">
														Date:
													</div>
													<input class="form-control" id="dateMask" placeholder="MM/DD/YYYY" type="text">
											</div><!-- input-group -->
										</div><!-- col-4 -->
										<div class="col-lg-3 mg-t-20 mg-lg-t-0">
											<div class="input-group">
													<div class="input-group-text">
														Phone:
													</div>
												<input class="form-control" id="phoneMask" placeholder="(000) 000-0000" type="text">
											</div><!-- input-group -->
										</div>
										<div class="col-lg-4 mg-t-20 mg-lg-t-0">
											<div class="input-group">
													<div class="input-group-text">
														Phone + Ext.:
													</div>
												<input class="form-control" id="phoneExtMask" placeholder="(000) 000-0000 ext 0000" type="text">
											</div><!-- input-group -->
										</div>
										<div class="col-lg-2 mg-t-20 mg-lg-t-0">
											<div class="input-group">
													<div class="input-group-text">
														SSN:
													</div><!-- input-group-text -->
												<input class="form-control" id="ssnMask" placeholder="000-00-0000" type="text">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->

							<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title mb-1">Color Picker</h4>
										<p class="mb-2">It is Very Easy to Customize and it uses in your website apllication.</p>
									</div>
									<div class="container p-0 p-md-5 ">
										<div class="card-body pt-0">
											<div class="d-flex justify-content-between">
												<div>
													<div class="theme-container"></div>
													<div class="pickr-container"></div>
												</div>
												<div>
													<div class="theme-container1"></div>
													<div class="pickr-container1"></div>
												</div>
												<div>
													<div class="theme-container2"></div>
													<div class="pickr-container2"></div>
												</div>
											</div>
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
										DATE, MONTH, YEAR RANGE PICKER
									</div>
									<div class="row row-sm">
										<div class="col-lg-3">
											<div class="input-group">
												<div class="input-group-text">
													<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
												</div>
												<input class="form-control" id="datepicker-date" placeholder="MM/DD/YYYY" type="text">
											</div><!-- input-group -->
										</div><!-- col-4 -->
										<div class="col-lg-3 mg-t-20 mg-lg-t-0">
											<div class="input-group">
												<div class="input-group-text">
													<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
												</div>
												<input class="form-control" id="datepicker-month" placeholder="(000) 000-0000" type="text">
											</div><!-- input-group -->
										</div>
										<div class="col-lg-4 mg-t-20 mg-lg-t-0">
											<div class="input-group">
												<div class="input-group-text">
													<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
												</div>
												<input class="form-control" id="datepicker-year" placeholder="(000) 000-0000 ext 0000" type="text">
											</div><!-- input-group -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->


						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="row row-sm">
								<div class="col-lg-4">
									<div class="card">
										<div class="card-body">
											<div class="main-content-label mg-b-5">
												jQuery UI Date Picker
											</div>
											<div class="input-group">
												<div class="input-group-text">
													<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
												</div>
												<input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
											</div><!-- input-group -->
										</div>
									</div>
								</div><!-- col-4 -->
								<div class="col-lg-4">
									<div class="card">
										<div class="card-body">
											<div class="main-content-label mg-b-5">
												jQuery UI Date Picker
											</div>
											<div class="input-group">
												<div class="input-group-text">
													<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
												</div>
												<input class="form-control" id="datepickerNoOfMonths" placeholder="MM/DD/YYYY" type="text">
											</div><!-- input-group -->
										</div>
									</div>
								</div><!-- col-4 -->
								<div class="col-lg-4">
									<div class="card">
										<div class="card-body">
											<div class="main-content-label mg-b-5">
												Date & Time Picker
											</div>
											<div class="input-group">
												<div class="input-group-text">
													<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
												</div>
												<input class="form-control" id="datetimepicker" type="text" value="2018-12-20 21:05">
											</div><!-- input-group -->
										</div>
									</div>
								</div><!-- col-4 -->
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-6 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Datetimepicker Style 2
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="row row-sm">
										<div class="input-group col-md-6">
												<div class="input-group-text">
													<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
												</div>
												<input class="form-control" id="datetimepicker2" type="text" value="2018-12-20 21:05">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-6 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Datetimepicker Style 3
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="row row-sm">
										<div class="input-group col-md-6">
												<div class="input-group-text">
													<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
												</div>
											<input type="text" value="January 20, 2019 09:00" id="datetimepicker3" class="form-control">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Select</h3>
								</div>
								<div class="card-body">
									<p>Customize the native <code class="highlighter-rouge">&lt;select&gt;</code>s with custom CSS that changes the element’s initial appearance.</p>
									<div class="form-group">
										<label class="form-label">Default Select</label>
										<select name="country" class="form-control select2-no-search" data-bs-placeholder="Select Country">
												<option value="br">Brazil</option>
												<option value="cz">Czech Republic</option>
												<option value="de">Germany</option>
												<option value="pl" selected>Poland</option>
											</select>
									</div>
									<div class="form-group">
										<label class="form-label">Customize Select</label>
										<select name="country" class="form-control form-select select2" data-bs-placeholder="Select Country">
											<option value="br">Brazil</option>
											<option value="cz">Czech Republic</option>
											<option value="de">Germany</option>
											<option value="pl" selected>Poland</option>
										</select>
									</div>
									<div class="form-group">
										<label class="form-label">Disabled Select</label>
										<select name="country" class="form-control form-select select2" data-bs-placeholder="Select Country" disabled>
												<option value="br">Brazil</option>
												<option value="cz">Czech Republic</option>
												<option value="de">Germany</option>
												<option value="pl" selected>Poland</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

					</div>
					<!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAL DATEPICKER JS -->
        <script src="{{asset('build/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

        <!-- INTERNAL JQUERY.MASKEDINPUT JS -->
		<script src="{{asset('build/assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>

        <!-- INTERNAL SPECTRUM-COLORPICKER JS -->
        <script src="{{asset('build/assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>

        <!--  INTERNAL SELECT2 JS -->
        <script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>

        <!-- INTERNAL ION-RANGESLIDER JS -->
        <script src="{{asset('build/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>

        <!-- INTERNAL JQUERY-AMAZEUI DATETIMEPICKER JS -->
        <script src="{{asset('build/assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>

        <!-- INTERNAL JQUERY-SIMPLE DATETIMEPICKER JS -->
        <script src="{{asset('build/assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>

        <!-- INTERNAL PICKER JS -->
        <script src="{{asset('build/assets/plugins/pickerjs/picker.min.js')}}"></script>

        <!-- INTERNAL COLORPICKER JS -->
        <script src="{{asset('build/assets/plugins/colorpicker/pickr.es5.min.js')}}"></script>
        @vite('resources/assets/js/colorpicker.js')


        <!-- BOOTSTRAP-DATEPICKER JS -->
        <script src="{{asset('build/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>

        <!-- INTERNAL FORM-ELEMENTS JS -->
        @vite('resources/assets/js/form-elements.js')
        

@endsection