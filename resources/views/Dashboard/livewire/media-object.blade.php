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
                                <li class="breadcrumb-item active" aria-current="page">Media-object</li>
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
                            <div class="card" id="media-object">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">Basic Example</h6>
                                        <p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in
                                            your website apllication.</p>
                                    </div>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="media d-block d-sm-flex">
                                                <img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0"
                                                    src="{{asset('build/assets/img/users/4.jpg')}}">
                                                <div class="media-body">
                                                    <h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
                                                    Lorem Ipsum generators on the Internet as necessary aut odit aut fugit,
                                                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                                                    nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                                    amet, consectetur, adipisci velit
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="media-object2">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">Nesting</h6>
                                        <p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in
                                            your website apllication.</p>
                                    </div>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="media d-block d-sm-flex">
                                                <img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0"
                                                    src="{{asset('build/assets/img/users/9.jpg')}}">
                                                <div class="media-body">
                                                    <h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
                                                    <p>Lorem Ipsum generators on the Internet as necessary aut odit aut
                                                        fugit, sed quia consequuntur magni dolores eos qui ratione
                                                        voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                                                        ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                    <div class="media d-block d-sm-flex mg-t-25">
                                                        <img alt=""
                                                            class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0"
                                                            src="{{asset('build/assets/img/users/8.jpg')}}">
                                                        <div class="media-body">
                                                            <h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
                                                            Lorem Ipsum generators on the Internet as necessary aut odit aut
                                                            fugit, sed quia consequuntur magni dolores eos qui ratione
                                                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                                                            ipsum quia dolor sit amet, consectetur, adipisci velit
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="media-object3">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">Alignment</h6>
                                        <p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in
                                            your website apllication.</p>
                                    </div>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="media d-block d-sm-flex">
                                                <img alt=""
                                                    class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0 align-self-center"
                                                    src="{{asset('build/assets/img/users/14.jpg')}}">
                                                <div class="media-body">
                                                    <h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
                                                    Lorem Ipsum generators on the Internet as necessary aut odit aut fugit,
                                                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                                                    nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                                    amet, consectetur, adipisci velit Lorem Ipsum generators on the Internet
                                                    as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos
                                                    qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                                                    dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="media-object4">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">Order</h6>
                                        <p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in
                                            your website apllication.</p>
                                    </div>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="media d-block d-sm-flex">
                                                <div class="media-body">
                                                    <h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
                                                    Lorem Ipsum generators on the Internet as necessary aut odit aut fugit,
                                                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                                                    nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                                    amet, consectetur, adipisci velit
                                                </div>
                                                <img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-t-20 mg-sm-t-0"
                                                    src="{{asset('build/assets/img/users/5.jpg')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="media-object5">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">Media List</h6>
                                        <p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in
                                            your website apllication.</p>
                                    </div>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="media media-list d-block d-sm-flex">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="media d-block d-sm-flex">
                                                        <img alt=""
                                                            class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0"
                                                            src="{{asset('build/assets/img/users/2.jpg')}}">
                                                        <div class="media-body">
                                                            <h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
                                                            Lorem Ipsum generators on the Internet as necessary aut odit aut
                                                            fugit, sed quia consequuntur magni dolores eos qui ratione
                                                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                                                            ipsum quia dolor sit amet, consectetur, adipisci velit
                                                        </div>
                                                    </li>
                                                    <li class="media d-block d-sm-flex mg-t-25">
                                                        <img alt=""
                                                            class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0"
                                                            src="{{asset('build/assets/img/users/12.jpg')}}">
                                                        <div class="media-body">
                                                            <h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
                                                            Lorem Ipsum generators on the Internet as necessary aut odit aut
                                                            fugit, sed quia consequuntur magni dolores eos qui ratione
                                                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                                                            ipsum quia dolor sit amet, consectetur, adipisci velit
                                                        </div>
                                                    </li>
                                                    <li class="media d-block d-sm-flex mg-t-25">
                                                        <img alt=""
                                                            class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0"
                                                            src="{{asset('build/assets/img/users/7.jpg')}}">
                                                        <div class="media-body">
                                                            <h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
                                                            Lorem Ipsum generators on the Internet as necessary aut odit aut
                                                            fugit, sed quia consequuntur magni dolores eos qui ratione
                                                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                                                            ipsum quia dolor sit amet, consectetur, adipisci velit
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
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