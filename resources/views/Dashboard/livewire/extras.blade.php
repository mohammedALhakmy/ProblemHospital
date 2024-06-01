@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                    <!-- BREADCRUMB -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="my-auto">
                            <h4 class="page-title">Utilities</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Extras</li>
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
                        <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                            <!--div-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="main-content-label mg-b-5">
                                        Opacity
                                    </div>
                                    <p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
                                    <div class="example">
                                        <div class="gray-set">
                                            <div class="flex-1 bg-primary p-3 op-1">.op-1</div>
                                            <div class="flex-1 bg-primary p-3 op-2">.op-2</div>
                                            <div class="flex-1 bg-primary p-3 op-3">.op-3</div>
                                            <div class="flex-1 bg-primary p-3 op-4">.op-4</div>
                                            <div class="flex-1 bg-primary p-3 op-5">.op-5</div>
                                            <div class="flex-1 bg-primary p-3 op-6">.op-6</div>
                                            <div class="flex-1 bg-primary p-3 op-7">.op-7</div>
                                            <div class="flex-1 bg-primary p-3 op-8">.op-8</div>
                                            <div class="flex-1 bg-primary p-3 op-9">.op-9</div>
                                        </div>
                                    </div>
                                    <div class="table-responsive mg-t-20 mb-0">
                                        <table class="table main-table-reference text-nowrap mg-t-0">
                                            <tbody>
                                                <tr>
                                                    <td class="bg-gray-100 wd-20p"><b>Classes</b></td>
                                                    <td><code>.op-[value]</code></td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-gray-100 wd-20p"><b>Values</b></td>
                                                    <td>0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive mg-t-20 mb-0">
                                        <table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
                                            <tbody>
                                                <tr>
                                                    <td class="bg-gray-100 wd-20p"><b>Classes</b></td>
                                                    <td><code>.op-[breakpoint]-[value]</code></td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-gray-100 wd-20p"><b>Values</b></td>
                                                    <td>
                                                        <p class="mg-b-5">breakpoint: xs | sm | md | lg | xl</p>
                                                        <p class="mg-b-0">value: 0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!--/div-->
                        <!--div-->
                        <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="main-content-label mg-b-5">
                                        Shadow
                                    </div>
                                    <p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
                                    <div class="table-responsive mg-t-20 mb-0">
                                        <table class="table main-table-reference text-nowrap mg-t-0 mb-0">
                                            <tbody>
                                                <tr>
                                                    <td class="bg-gray-100 wd-20p"><b>Classes</b></td>
                                                    <td><code>.shadow-base</code></td>
                                                    <td><code>.shadow-none</code></td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-gray-100 wd-20p"><b>Values</b></td>
                                                    <td>Add shadow to any box element.</td>
                                                    <td>Remove shadow to any box element.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END ROW -->

@endsection

@section('scripts')

@endsection