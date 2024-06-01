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
                                <li class="breadcrumb-item active" aria-current="page">Tags</li>
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
                    <!-- BREADCRUMB -->

                    <!-- ROW -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <!-- div -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="main-content-label mg-b-5">
                                        DEFAULT TAG
                                    </div>
                                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website aplication.
                                    </p>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="tags">
                                                <span class="tag">First tag</span>
                                                <span class="tag">Second tag</span>
                                                <span class="tag">Third tag</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/div-->

                            <!--div-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="main-content-label mg-b-5">
                                        Link Tag
                                    </div>
                                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website aplication.
                                    </p>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="tags">
                                                <span class="tag tag-rounded">First tag</span>
                                                <span class="tag tag-rounded">Second tag</span>
                                                <span class="tag tag-rounded">Third tag</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/div-->

                            <!--div-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="main-content-label mg-b-5">
                                        Default Tags Addon
                                    </div>
                                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website aplication.
                                    </p>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="tags">
                                                <span class="tag tag-default">
                                                    One
                                                    <a href="javascript:void(0);" class="tag-addon"><i
                                                            class="fe fe-x"></i></a>
                                                </span>
                                                <span class="tag tag-default">
                                                    Two
                                                    <a href="javascript:void(0);" class="tag-addon"><i
                                                            class="fe fe-x"></i></a>
                                                </span>
                                                <span class="tag tag-default">
                                                    Three
                                                    <a href="javascript:void(0);" class="tag-addon"><i
                                                            class="fe fe-x"></i></a>
                                                </span>
                                                <span class="tag tag-default">
                                                    Four
                                                    <a href="javascript:void(0);" class="tag-addon"><i
                                                            class="fe fe-x"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/div-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="main-content-label mg-b-5">
                                            Colored tags
                                        </div>
                                        <p class="mg-b-20">It is Very Easy to Customize and it uses in your website aplication.</p>
                                        <div class="text-wrap">
                                            <div class="example">
                                                <div class="tags">
                                                    <span class="tag tag-primary">primary tag<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a> </span>
                                                    <span class="tag tag-secondary">secondary tag<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a> </span>
                                                    <span class="tag tag-success">success tag<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a> </span>
                                                    <span class="tag tag-warning">warning tag<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a> </span>
                                                    <span class="tag tag-teal">teal tag<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a> </span>
                                                    <span class="tag tag-danger">danger tag<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <!--div-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="main-content-label mg-b-5">
                                        Colored tags
                                    </div>
                                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website aplication.
                                    </p>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="tags">
                                                <span class="tag tag-blue">Blue tag</span>
                                                <span class="tag tag-azure">Azure tag</span>
                                                <span class="tag tag-indigo">Indigo tag</span>
                                                <span class="tag tag-purple">Purple tag</span>
                                                <span class="tag tag-pink">Pink tag</span>
                                                <span class="tag tag-red">Red tag</span>
                                                <span class="tag tag-orange">Orange tag</span>
                                                <span class="tag tag-yellow">Yellow tag</span>
                                                <span class="tag tag-lime">Lime tag</span>
                                                <span class="tag tag-green">Green tag</span>
                                                <span class="tag tag-teal">Teal tag</span>
                                                <span class="tag tag-cyan">Cyan tag</span>
                                                <span class="tag tag-gray">Gray tag</span>
                                                <span class="tag tag-gray-dark">Dark gray tag</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/div-->

                            <!--div-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="main-content-label mg-b-5">
                                        Input Tags
                                    </div>
                                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website aplication.
                                    </p>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="form-group">
                                                <input type="text" data-role="tagsinput" value="jQuery,Script,Net"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group mb-0">
                                                <select multiple data-role="tagsinput" class="form-control">
                                                    <option value="jQuery">jQuery</option>
                                                    <option value="Angular">Angular</option>
                                                    <option value="React">React</option>
                                                    <option value="Vue">Vue</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/div-->
                    </div>
                    <!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAL INPUT TAGS JS -->
        <script src="{{asset('build/assets/plugins/inputtags/inputtags.js')}}"></script>

@endsection