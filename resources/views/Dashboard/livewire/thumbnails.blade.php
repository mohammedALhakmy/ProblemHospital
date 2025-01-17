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
                                <li class="breadcrumb-item active" aria-current="page">Thumbnails</li>
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
                        <div class="col-lg-12 col-md-12">
                            <div class="card custom-card" id="thumb">
                                <div class="card-body ht-100p">
                                    <div>
                                        <h6 class="card-title mb-1">Image Thumbnail</h6>
                                        <p class="text-muted card-sub-title">Images in Bootstrap are made responsive with
                                            .img-fluid. max-width: 100%; and height: auto; are applied to the image so that
                                            it scales with the parent element.</p>
                                    </div>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <img alt="Responsive image" class="img-thumbnail"
                                                        src="{{asset('build/assets/img/photos/9.jpg')}}">
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <img alt="Responsive image" class="img-thumbnail"
                                                        src="{{asset('build/assets/img/photos/13.jpg')}}">
                                                </div>
                                                <div class="col-6 col-md-3 mg-t-10 mg-sm-t-0">
                                                    <img alt="Responsive image" class="img-thumbnail"
                                                        src="{{asset('build/assets/img/photos/14.jpg')}}">
                                                </div>
                                                <div class="col-6 col-md-3 mg-t-10 mg-sm-t-0">
                                                    <img alt="Responsive image" class="img-thumbnail"
                                                        src="{{asset('build/assets/img/photos/15.jpg')}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="card custom-card" id="aligning">
                                <div class="card-body ht-100p">
                                    <div>
                                        <h6 class="card-title mb-1">Aligning Thumbnails</h6>
                                        <p class="text-muted card-sub-title">Align images with the helper float classes or
                                            text alignment classes.</p>
                                    </div>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="clearfix">
                                                <img src="{{asset('build/assets/img/photos/10.jpg')}}"
                                                    class="float-sm-start wd-100p wd-sm-200" alt="img">
                                                <img src="{{asset('build/assets/img/photos/11.jpg')}}"
                                                    class="float-sm-end wd-100p wd-sm-200 mg-t-10 mg-sm-t-0" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="card custom-card" id="contentthumb">
                                <div class="card-body ht-100p">
                                    <div>
                                        <h6 class="card-title mb-1">Custom content Thumbnails</h6>
                                        <p class="text-muted card-sub-title">Using the images in custom content thumbnails
                                        </p>
                                    </div>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="img-thumbnail mb-3">
                                                        <a href="javascript:void(0);">
                                                            <img src="{{asset('build/assets/img/photos/4.jpg')}}" alt="thumb1"
                                                                class="thumbimg wd-100p">
                                                        </a>
                                                        <div class="caption">
                                                            <h5>Thumbnail label</h5>
                                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna
                                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                            <div class="btn btn-list ps-0 pb-0">
                                                                <a href="javascript:void(0);" class="btn ripple btn-primary"
                                                                    role="button">Button</a>
                                                                <a href="javascript:void(0);" class="btn ripple btn-secondary"
                                                                    role="button">Button</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="img-thumbnail mb-3">
                                                        <a href="javascript:void(0);">
                                                            <img src="{{asset('build/assets/img/photos/9.jpg')}}" alt="thumb1"
                                                                class="thumbimg  wd-100p">
                                                        </a>
                                                        <div class="caption">
                                                            <h5>Thumbnail label</h5>
                                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna
                                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                            <div class="btn btn-list ps-0 pb-0">
                                                                <a href="javascript:void(0);" class="btn ripple btn-primary"
                                                                    role="button">Button</a>
                                                                <a href="javascript:void(0);" class="btn ripple btn-secondary"
                                                                    role="button">Button</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="img-thumbnail mb-3">
                                                        <a href="javascript:void(0);">
                                                            <img src="{{asset('build/assets/img/photos/8.jpg')}}" alt="thumb1"
                                                                class="thumbimg  wd-100p">
                                                        </a>
                                                        <div class="caption">
                                                            <h5>Thumbnail label</h5>
                                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna
                                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                            <div class="btn btn-list ps-0 pb-0">
                                                                <a href="javascript:void(0);" class="btn ripple btn-primary"
                                                                    role="button">Button</a>
                                                                <a href="javascript:void(0);" class="btn ripple btn-secondary"
                                                                    role="button">Button</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END ROW -->

                    <!-- ROW -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xl-6">
                            <div class="card custom-card" id="responsive">
                                <div class="card-body ht-100p">
                                    <div>
                                        <h6 class="card-title mb-1">Responsive Thumbnails</h6>
                                        <p class="text-muted card-sub-title">Images in Bootstrap are made responsive with
                                            .img-fluid. max-width: 100%; and height: auto; are applied to the image so that
                                            it scales with the parent element.</p>
                                    </div>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div><img alt="Responsive image" class="img-fluid"
                                                    src="{{asset('build/assets/img/photos/7.jpg')}}"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xl-6">
                            <div class="card custom-card" id="background">
                                <div class="card-body ht-100p">
                                    <div>
                                        <h6 class="card-title mb-1">Background Image</h6>
                                        <p class="text-muted card-sub-title">Make image as background to your content using
                                            the helper or utilities classes.</p>
                                    </div>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <figure class="pos-relative mg-b-0">
                                                <img alt="Responsive image" class="img-fit-cover"
                                                    src="{{asset('build/assets/img/photos/12.jpg')}}">
                                                <figcaption class="pos-absolute a-0 pd-25 bg-black-5 tx-white-8">
                                                    <h6 class="tx-14 tx-sm-16 tx-white tx-semibold mg-b-15 mg-sm-b-20">What
                                                        Does Royalty-Free Mean?</h6>
                                                    <p class="mg-b-0">Royalty free means you just need to pay for rights to
                                                        use the item once per end product.
                                                        You don't need to pay additional or ongoing fees for each person who
                                                        sees or uses it.</p>
                                                </figcaption>
                                            </figure>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END ROW -->

@endsection

@section('scripts')

@endsection