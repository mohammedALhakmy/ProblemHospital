@extends('Dashboard.layouts.app')

@section('styles')

@endsection

@section('content')

                    <!-- BREADCRUMB -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="my-auto">
                            <h4 class="page-title">Forms</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form-Advanced</li>
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
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Single Select Style</h6>
										<p class="text-muted card-sub-title">First import a latest version of jquery in your page. Then the jquery.sumoselect.min.js and its css (sumoselect.css)</p>
									</div>
									<div class="mb-4">
										<p class="mg-b-10">Single Select</p>
										<select name="somename" class="form-control SlectBox" onclick="console.log($(this).val())" onchange="console.log('change is firing')">
											<!--placeholder-->
											<option title="Volvo is a car"  value="volvo">Volvo</option>
											<option value="saab">Saab</option>
											<option value="mercedes">Mercedes</option>
											<option value="audi">Audi</option>
										</select>
									</div>
									<div class="mb-4">
										<p class="mg-b-10">Disabled Select</p>
										<select class="SlectBox form-control" disabled>
											<option value="volvo">Volvo</option>
											<option selected value="saab">Saab</option>
											<option value="mercedes">Mercedes</option>
											<option value="audi">Audi</option>
											<option disabled value="opt1">option1</option>
											<option value="opt2">option2</option>
											<option value="opt3">option3</option>
										</select>
									</div>
									<div>
										<p class="mg-b-10">Inline Select</p>
										<select class="SlectBox form-control">
											<option>selected</option>
											<option>Volvo</option>
											<option>Saab</option>
											<option value="mercedes">Mercedes</option>
											<option value="audi">Audi</option>
											<option>Volvo</option>
											<option>Saab</option>
											<option value="mercedes">Mercedes</option>
											<option value="audi">Audi</option>
											<option>Volvo</option>
											<option>Saab</option>
											<option value="mercedes">Mercedes</option>
											<option value="audi">Audi</option>
											<option>Volvo</option>
											<option>Saab</option>
											<option value="mercedes">Mercedes</option>
											<option value="audi">Audi</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Multiple Select Styles</h6>
										<p class="text-muted card-sub-title">First import a latest version of jquery in your page. Then the jquery.sumoselect.min.js and its css (sumoselect.css)</p>
									</div>
									<div class="mb-4">
										<p class="mg-b-10">Multiple Select</p>
										<select multiple="multiple" class="testselect2">
											<option selected value="volvo">Volvo</option>
											<option value="saab">Saab</option>
											<option value="mercedes">Mercedes</option>
											<option value="audi">Audi</option>
										</select>
									</div>
									<div class="mb-4">
										<p class="mg-b-10">Disabled Select</p>
										<select multiple="multiple" class="testselect2" disabled >
										   <option selected value="volvo">Volvo</option>
										   <option value="saab">Saab</option>
										   <option disabled="disabled" value="mercedes">Mercedes</option>
										   <option value="audi">Audi</option>
										   <option value="bmw">BMW</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option class="someclass" value="audi">Audi</option>
										   <option class="someclass" value="bmw">BMW</option>
										   <option class="someclass" value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="audi">Audi</option>
										   <option value="bmw">BMW</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="hyundai">Hyundai</option>
										   <option value="mitsubishi">Mitsubishi</option>
										</select>
									</div>
									<div>
										<p class="mg-b-10">Optgroup Support</p>
										<select   multiple="multiple" class="testselect2">
										   <option selected value="volvo">Volvo</option>
										   <option value="saab">Saab</option>
										   <option disabled="disabled" value="mercedes">Mercedes</option>
										   <option value="audi">Audi</option>
										   <option value="bmw">BMW</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option class="someclass" value="audi">Audi</option>
										   <option class="someclass" value="bmw">BMW</option>
										   <option class="someclass" value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="audi">Audi</option>
										   <option value="bmw">BMW</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="hyundai">Hyundai</option>
										   <option value="mitsubishi">Mitsubishi</option>
									   </select>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <!-- END ROW -->

                    <!-- ROW -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Multiple Select Styles</h6>
										<p class="text-muted card-sub-title">First import a latest version of jquery in your page. Then the jquery.sumoselect.min.js and its css (sumoselect.css)</p>
									</div>
									<div class="mb-4">
										<p class="mg-b-10">Multiple Select-1</p>
										<select multiple="multiple" onchange="console.log($(this).children(':selected').length)" class="selectsum1">
										   <option selected value="volvo">Volvo</option>
										   <option value="saab">Saab</option>
										   <option disabled="disabled" value="mercedes">Mercedes</option>
										   <option value="audi">Audi</option>
										   <option selected value="bmw">BMW</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="mitsubishi">Mitsubishi</option>
										</select>
									</div>
									<div>
										<p class="mg-b-10">Multiple Select-2</p>
										<select multiple="multiple" onchange="console.log($(this).children(':selected').length)" class="selectsum2">
										   <option selected value="volvo">Volvo</option>
										   <option value="saab">Saab</option>
										   <option disabled="disabled" value="mercedes">Mercedes</option>
										   <option value="audi">Audi</option>
										   <option selected value="bmw">BMW</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="mitsubishi">Mitsubishi</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END ROW -->

					<!-- ROW -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Telephone Input</h6>
										<p class="text-muted card-sub-title">A JavaScript plugin for entering and validating international telephone numbers. It adds a flag dropdown to any input, detects the user's country, displays a relevant placeholder and provides formatting/validation methods.</p>
									</div>
									<div class="input-group telephone-input">
										<input type="tel" id="mobile-number" placeholder="e.g. +1 702 123 4567">
										<span class="input-group-btn">
											<button class="btn ripple btn-primary" type="button">Submit</button>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END ROW -->

					<!-- ROW -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">File Upload</h6>
										<p class="text-muted card-sub-title">Dropify is a jQuery plugin to create a beautiful file uploader that converts a standard <code>input type="file"</code> into a nice drag & drop zone with previews and custom styles.</p>
									</div>
									<div class="row mb-4">
										<div class="col-sm-12 col-md-4">
											<input type="file" class="dropify" data-height="200">
										</div>
										<div class="col-sm-12 col-md-4 mg-t-10 mg-md-t-0">
											<input type="file" class="dropify" data-default-file="{{asset('build/assets/img/photos/1.jpg')}}" data-height="200">
										</div>
										<div class="col-sm-12 col-md-4 mg-t-10 mg-md-t-0">
											<input type="file" class="dropify" disabled="disabled">
										</div>
									</div>
									<div>
										<input id="demo" type="file" name="files" accept="image/jpeg, image/png" multiple>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAL DATEPICKER JS -->
        <script src="{{asset('build/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

        <!-- INTERNAL SELECT2 JS -->
		<script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>

        <!-- INTERNAL FILEUPLOADS JS -->
        <script src="{{asset('build/assets/plugins/fileuploads/js/fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fileuploads/js/file-upload.js')}}"></script>

        <!-- INTERNAL FANCY UPLOADER JS -->
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

        <!-- INTERNAL FORM-ELEMENTS JS -->
        @vite('resources/assets/js/advanced-form-elements.js')


        @vite('resources/assets/js/select2.js')


        <!-- INTERNAL SUMOSELECT JS -->
		<script src="{{asset('build/assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>

        <!-- INTERNAL TELEPHONEINPUT JS -->
        <script src="{{asset('build/assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
        <script src="{{asset('build/assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>
@endsection
