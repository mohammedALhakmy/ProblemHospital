@extends('Dashboard.layouts.custom-app')

@section('styles')

@endsection

@section('content')
@section('custom-body3')

        <div class="ltr error-page1 main-body bg-light text-dark error-3">
@endsection

            <div class="page">

                <div class="container-fluid">
                    <div class="row no-gutter">
                        <!-- The image half -->
                        <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
                            <div class="row wd-100p mx-auto text-center">
                                <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                                    <img src="{{asset('build/assets/img/pngs/8.png')}}"
                                        class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                                </div>
                            </div>
                        </div>
                        <!-- The content half -->
                        <div class="col-md-6 col-lg-6 col-xl-5 bg-white py-4">
                            <div class="login d-flex align-items-center py-2">
                                <!-- Demo content-->
                                <div class="container p-0">
                                    <div class="row">
                                        <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                            <div class="card-sigin">
                                                <div class="mb-5 d-flex">
                                        <h1 class="main-logo1 ms-1 me-0 my-auto tx-28">{{__('message.system')}}
                                            <span> {{__('message.management')}} </span>{{__('message.Hospitals')}}</h1>
                                                </div>
                                                <div class="card-sigin">
                                                    <div class="main-signup-header">
                                                        <h5 class="fw-semibold mb-4">{{__('message.Register Log in to the system Enter the following data')}}.</h5>
                                                        <form action="{{route('admin.login')}}" method="post">
                                                            @csrf
                                                            @error('email')
                                                                <span class="table-danger alert-danger">{{$message}}</span>
                                                            @enderror

                                                            @error('password')
                                                                <span class="table-danger form-control alert-danger">{{$message}}</span>
                                                            @enderror
                                                            <div class="form-group">
                                                                <label class="form-label text-dark">{{__('message.Login to the system as')}}</label>
                                                                <div class="d-md-flex ad-post-details justify-content-around">
                                                                    <label class="custom-control form-radio mb-2 me-4">
                                                                        <input type="radio" class="custom-control-input" name="insurance_type" {{ old('insurance_type') == "0" ? "checked" : "" }} value="0">
                                                                        <span class="custom-control-label">{{__('message.admin')}}</span>
                                                                    </label>

                                                                    <label class="custom-control form-radio mb-2 me-4">
                                                                        <input type="radio" class="custom-control-input" name="insurance_type" {{ old('insurance_type') == "4" ? "checked" : "" }} value="3">
                                                                        <span class="custom-control-label">{{__('message.labs')}}</span>
                                                                    </label>

                                                                    <label class="custom-control form-radio mb-2">
                                                                        <input type="radio" class="custom-control-input" name="insurance_type" {{ old('insurance_type') == "1" ? "checked" : "" }} value="1">
                                                                        <span class="custom-control-label">{{__('message.user')}}</span>
                                                                    </label>

                                                                    <label class="custom-control form-radio mb-2">
                                                                        <input type="radio" class="custom-control-input" name="insurance_type" {{ old('insurance_type') == "2" ? "checked" : "" }} value="2">
                                                                        <span class="custom-control-label">{{__('message.Doctor')}}</span>
                                                                    </label>

                                                                    <label class="custom-control form-radio mb-2">
                                                                        <input type="radio" class="custom-control-input" name="insurance_type" {{ old('insurance_type') == "3" ? "checked" : "" }} value="3">
                                                                        <span class="custom-control-label">{{__('message.الاشعة')}}</span>
                                                                    </label>

                                                                    <label class="custom-control form-radio mb-2">
                                                                        <input type="radio" class="custom-control-input" name="insurance_type" {{ old('insurance_type') == "5" ? "checked" : "" }} value="5">
                                                                        <span class="custom-control-label">{{__('message.مريض')}}</span>
                                                                    </label>

                                                                </div>
                                                                <span class="text-danger error-message" id="insurance_type_error"></span>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>{{__('message.Email')}}</label>
                                                                <input class="form-control" value="{{old('email')}}" name="email" placeholder="{{__('message.Enter your email')}}" type="email">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>{{__('message.Password')}}</label>
                                                                <input class="form-control" name="password" placeholder="{{__('message.Enter your password')}}" type="password">
                                                            </div>
                                                            <input type="submit"  class="btn btn-main-primary btn-block" value="{{__('message.Sign In')}}"></input>
                                                        </form>
                                                        <div class="main-signin-footer  mt-2">
                                                            <p><a href="{{url('forgot')}}">{{__('message.Forgot password?')}}</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                </div>

            </div>

@endsection

@section('scripts')

@endsection
