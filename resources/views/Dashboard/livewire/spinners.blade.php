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
                                <li class="breadcrumb-item active" aria-current="page">Spinner</li>
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
                        <div class="col-xl-12 col-lg-12">
                            <div class="card" id="spinner">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">Basic Example</h6>
                                        <p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in
                                            your website apllication.</p>
                                    </div>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="spinner-border" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="spinner2">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">BORDER SPINNERS</h6>
                                        <p class="text-muted card-sub-title">Use the border spinners for a lightweight
                                            loading indicator..</p>
                                    </div>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div>
                                                <div class="spinner-border text-primary" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                                <div class="spinner-border text-secondary" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                                <div class="spinner-border text-success" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                                <div class="spinner-border text-danger" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                                <div class="spinner-border text-warning" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                                <div class="spinner-border text-info" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                                <div class="spinner-border text-light" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                                <div class="spinner-border text-dark" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="spinner3">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">GROWING SPINNER</h6>
                                        <p class="text-muted card-sub-title">If you don’t fancy a border spinner, switch to
                                            the grow spinner. While it doesn’t technically spin, it does repeatedly grow!
                                        </p>
                                    </div>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="spinner-grow" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="spinner4">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">GROWING Color</h6>
                                        <p class="text-muted card-sub-title">If you don’t fancy a border spinner, switch to
                                            the grow spinner. While it doesn’t technically spin, it does repeatedly grow!
                                        </p>
                                    </div>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="spinner-grow text-primary" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-secondary" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-success" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-danger" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-warning" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-info" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-light" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-dark" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="spinner5">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">ALIGNMENT</h6>
                                        <p class="text-muted card-sub-title">Use flexbox utilities or text alignment
                                            utilities to place spinners exactly where you need them in any situation.</p>
                                    </div>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="text-center mg-b-20">
                                                <div class="spinner-border" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <div class="spinner-border" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="spinner6">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">Size</h6>
                                        <p class="mg-b-20">Add <code>.spinner-border-sm</code> and
                                            <code>.spinner-grow-sm</code> to make a smaller spinner that can quickly be used
                                            within other components.</p>
                                    </div>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="spinner-border spinner-border-sm" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow spinner-grow-sm" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="spinner7">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">Button</h6>
                                        <p class="text-muted card-sub-title">Use spinners within buttons to indicate an
                                            action is currently processing or taking place. You may also swap the text out
                                            of the spinner element and utilize button text as needed..</p>
                                    </div>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <button class="btn btn-primary" type="button" disabled>
                                                <span class="spinner-border spinner-border-sm" role="status"
                                                    aria-hidden="true"></span>
                                                <span class="sr-only">Loading...</span>
                                            </button>
                                            <button class="btn btn-primary" type="button" disabled>
                                                <span class="spinner-border spinner-border-sm" role="status"
                                                    aria-hidden="true"></span>
                                                Loading...
                                            </button>
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