@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                    <!-- BREADCRUMB -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="my-auto">
                            <h4 class="page-title">Filemanager</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Filemanager</a></li>
                                <li class="breadcrumb-item active" aria-current="page">File-Attachments</li>
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

					<!-- ROW OPEN -->
                    <div class="row sidemenu-height">
                        <div class="col-lg-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                     <div>
                                        <h6 class="main-content-label mb-1">file-attachment tags</h6>
                                        <p class="text-muted card-sub-title">Predefined button styles, each serving its own semantic purpose.</p>
                                    </div>
                                     <div class="tags">

                                            <span class="tag tag-attachments rounded-pill bg-primary text-white mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> <span class="">Image01..._jpg </span><a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments  rounded-pill bg-info text-white"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments rounded-pill bg-danger text-white"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments rounded-pill bg-success text-white"><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span> Document.exl <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments rounded-pill bg-danger text-white"><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span>AMN0012.pdf <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments  rounded-pill bg-primary text-white"><span class="me-2"><i class="mdi mdi-zip-box tx-24"></i></span> design00123.zip <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments rounded-pill bg-info text-white"><span class="me-2"><i class="mdi mdi-file-word tx-24"></i></span>Document.doc <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments rounded-pill bg-warning text-white text-white"><span class="me-2"><i class="mdi mdi-file-powerpoint  tx-24"></i></span> prsentation.ppt <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments  rounded-pill bg-pink text-white"><span class="me-2"><i class="mdi mdi-volume-high tx-24"></i></span>audio-mp4 <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                     <div>
                                        <h6 class="main-content-label mb-1">file-attachment tags</h6>
                                        <p class="text-muted card-sub-title">Predefined button styles, each serving its own semantic purpose.</p>
                                    </div>
                                     <div class="tags">
                                            <span class="tag tag-attachments rounded-pill  tag-outline-primary mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> Image01..._jpg <a href="javascript:void(0);" class="mt-1 ms-4 text-primary"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments rounded-pill tag-outline-info"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <a href="javascript:void(0);" class="mt-1 ms-4 text-info"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments rounded-pill  tag-outline-danger"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <a href="javascript:void(0);" class="mt-1 ms-4 text-danger"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments rounded-pill  tag-outline-success"><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span> Document.exl <a href="javascript:void(0);" class="mt-1 ms-4 text-success"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments rounded-pill  tag-outline-danger"><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span>AMN0012.pdf <a href="javascript:void(0);" class="mt-1 ms-4 text-danger"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments rounded-pill   tag-outline-primary"><span class="me-2"><i class="mdi mdi-zip-box tx-24"></i></span> design00123.zip <a href="javascript:void(0);" class="mt-1 ms-4 text-primary"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments rounded-pill   tag-outline-info"><span class="me-2"><i class="mdi mdi-file-word tx-24"></i></span>Document.doc <a href="javascript:void(0);" class="mt-1 ms-4 text-info"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments rounded-pill   tag-outline-warning"><span class="me-2"><i class="mdi mdi-file-powerpoint  tx-24"></i></span> prsentation.ppt <a href="javascript:void(0);" class="mt-1 ms-4 text-warning"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments rounded-pill   tag-outline-pink"><span class="me-2"><i class="mdi mdi-volume-high tx-24"></i></span>audio-mp4 <a href="javascript:void(0);" class="mt-1 ms-4 text-pink"><i class="fe fe-x"></i></a></span>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                     <div>
                                        <h6 class="main-content-label mb-1">file-attachment tags</h6>
                                        <p class="text-muted card-sub-title">Predefined button styles, each serving its own semantic purpose.</p>
                                    </div>
                                     <div class="tags">
                                            <span class="tag tag-attachments  bg-primary text-white mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> Image01..._jpg <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments   bg-info text-white"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments  bg-danger text-white"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments  bg-success text-white"><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span> Document.exl <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments  bg-danger text-white"><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span>AMN0012.pdf <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments   bg-primary text-white"><span class="me-2"><i class="mdi mdi-zip-box tx-24"></i></span> design00123.zip <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments  bg-info text-white"><span class="me-2"><i class="mdi mdi-file-word tx-24"></i></span>Document.doc <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments  bg-warning text-white text-white"><span class="me-2"><i class="mdi mdi-file-powerpoint  tx-24"></i></span> prsentation.ppt <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments   bg-pink text-white"><span class="me-2"><i class="mdi mdi-volume-high tx-24"></i></span>audio-mp4 <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                     <div>
                                        <h6 class="main-content-label mb-1">file-attachment tags</h6>
                                        <p class="text-muted card-sub-title">Predefined button styles, each serving its own semantic purpose.</p>
                                    </div>
                                     <div class="tags">
                                            <span class="tag tag-attachments   tag-outline-primary mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> Image01..._jpg <a href="javascript:void(0);" class="mt-1 ms-4 text-primary"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments  tag-outline-info"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <a href="javascript:void(0);" class="mt-1 ms-4 text-info"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments   tag-outline-danger"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <a href="javascript:void(0);" class="mt-1 ms-4 text-danger"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments   tag-outline-success"><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span> Document.exl <a href="javascript:void(0);" class="mt-1 ms-4 text-success"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments   tag-outline-danger"><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span>AMN0012.pdf <a href="javascript:void(0);" class="mt-1 ms-4 text-danger"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments    tag-outline-primary"><span class="me-2"><i class="mdi mdi-zip-box tx-24"></i></span> design00123.zip <a href="javascript:void(0);" class="mt-1 ms-4 text-primary"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments    tag-outline-info"><span class="me-2"><i class="mdi mdi-file-word tx-24"></i></span>Document.doc <a href="javascript:void(0);" class="mt-1 ms-4 text-info"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments    tag-outline-warning"><span class="me-2"><i class="mdi mdi-file-powerpoint  tx-24"></i></span> prsentation.ppt <a href="javascript:void(0);" class="mt-1 ms-4 text-warning"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments    tag-outline-pink"><span class="me-2"><i class="mdi mdi-volume-high tx-24"></i></span>audio-mp4 <a href="javascript:void(0);" class="mt-1 ms-4 text-pink"><i class="fe fe-x"></i></a></span>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                     <div>
                                        <h6 class="main-content-label mb-1">file-attachment tags</h6>
                                        <p class="text-muted card-sub-title">Predefined button styles, each serving its own semantic purpose.</p>
                                    </div>
                                     <div class="tags">
                                            <span class="tag tag-attachments  bg-primary text-white mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> Image01..._jpg <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments   bg-info text-white"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments bg-danger text-white"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments  bg-success text-white"><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span> Document.exl <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments  bg-danger text-white"><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span>AMN0012.pdf <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments   bg-primary text-white"><span class="me-2"><i class="mdi mdi-zip-box tx-24"></i></span> design00123.zip <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments  bg-info text-white"><span class="me-2"><i class="mdi mdi-file-word tx-24"></i></span>Document.doc <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments  bg-warning text-white text-white"><span class="me-2"><i class="mdi mdi-file-powerpoint  tx-24"></i></span> prsentation.ppt <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments   bg-pink text-white"><span class="me-2"><i class="mdi mdi-volume-high tx-24"></i></span>audio-mp4 <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                     <div>
                                        <h6 class="main-content-label mb-1">file-attachment tags</h6>
                                        <p class="text-muted card-sub-title">Predefined button styles, each serving its own semantic purpose.</p>
                                    </div>
                                     <div class="tags">
                                            <span class="tag tag-attachments  tag-outline-primary mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> Image01..._jpg <a href="javascript:void(0);" class="mt-1 ms-4 text-primary"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments tag-outline-info"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <a href="javascript:void(0);" class="mt-1 ms-4 text-info"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments  tag-outline-danger"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <a href="javascript:void(0);" class="mt-1 ms-4 text-danger"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments  tag-outline-success"><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span> Document.exl <a href="javascript:void(0);" class="mt-1 ms-4 text-success"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments  tag-outline-danger"><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span>AMN0012.pdf <a href="javascript:void(0);" class="mt-1 ms-4 text-danger"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments   tag-outline-primary"><span class="me-2"><i class="mdi mdi-zip-box tx-24"></i></span> design00123.zip <a href="javascript:void(0);" class="mt-1 ms-4 text-primary"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments   tag-outline-info"><span class="me-2"><i class="mdi mdi-file-word tx-24"></i></span>Document.doc <a href="javascript:void(0);" class="mt-1 ms-4 text-info"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments   tag-outline-warning"><span class="me-2"><i class="mdi mdi-file-powerpoint  tx-24"></i></span> prsentation.ppt <a href="javascript:void(0);" class="mt-1 ms-4 text-warning"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments   tag-outline-pink"><span class="me-2"><i class="mdi mdi-volume-high tx-24"></i></span>audio-mp4 <a href="javascript:void(0);" class="mt-1 ms-4 text-pink"><i class="fe fe-x"></i></a></span>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                     <div>
                                        <h6 class="main-content-label mb-1">file-attachment sizes</h6>
                                        <p class="text-muted card-sub-title">Predefined button styles, each serving its own semantic purpose.</p>
                                    </div>
                                     <div class="tags">
                                            <span class="tag tag-attachments-sm rounded-pill bg-primary text-white mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-20"></i></span> Image01..._jpg <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments  rounded-pill bg-info text-white"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments-lg rounded-pill bg-danger text-white"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                     <div>
                                        <h6 class="main-content-label mb-1">file-attachment sizes</h6>
                                        <p class="text-muted card-sub-title">Predefined button styles, each serving its own semantic purpose.</p>
                                    </div>
                                     <div class="tags">
                                            <span class="tag tag-attachments-sm rounded-pill tag-outline-warning mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-20"></i></span> Image01..._jpg <a href="javascript:void(0);" class="mt-1 ms-4 text-warning"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments  rounded-pill tag-outline-success"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <a href="javascript:void(0);" class="mt-1 ms-4 text-success"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments-lg rounded-pill tag-outline-pink"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <a href="javascript:void(0);" class="mt-1 ms-4 text-pink"><i class="fe fe-x"></i></a></span>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                     <div>
                                        <h6 class="main-content-label mb-1">file-attachment sizes</h6>
                                        <p class="text-muted card-sub-title">Predefined button styles, each serving its own semantic purpose.</p>
                                    </div>
                                     <div class="tags">
                                            <span class="tag tag-attachments-sm  bg-primary text-white mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-20"></i></span> Image01..._jpg <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments   bg-info text-white"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments-lg  bg-danger text-white"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                     <div>
                                        <h6 class="main-content-label mb-1">file-attachment sizes</h6>
                                        <p class="text-muted card-sub-title">Predefined button styles, each serving its own semantic purpose.</p>
                                    </div>
                                     <div class="tags">
                                        <span class="tag tag-attachments-sm  tag-outline-warning mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-20"></i></span> Image01..._jpg <a href="javascript:void(0);" class="mt-1 ms-4 text-warning"><i class="fe fe-x"></i></a></span>

                                        <span class="tag tag-attachments   tag-outline-success"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <a href="javascript:void(0);" class="mt-1 ms-4 text-success"><i class="fe fe-x"></i></a></span>

                                        <span class="tag tag-attachments-lg  tag-outline-pink"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <a href="javascript:void(0);" class="mt-1 ms-4 text-pink"><i class="fe fe-x"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                     <div>
                                        <h6 class="main-content-label mb-1">file-attachment sizes</h6>
                                        <p class="text-muted card-sub-title">Predefined button styles, each serving its own semantic purpose.</p>
                                    </div>
                                     <div class="tags">
                                            <span class="tag tag-attachments-sm  bg-primary text-white mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-20"></i></span> Image01..._jpg <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments   bg-info text-white"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>

                                            <span class="tag tag-attachments-lg  bg-danger text-white"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <a href="javascript:void(0);" class="mt-1 ms-4 text-white"><i class="fe fe-x"></i></a></span>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                     <div>
                                        <h6 class="main-content-label mb-1">file-attachment sizes</h6>
                                        <p class="text-muted card-sub-title">Predefined button styles, each serving its own semantic purpose.</p>
                                    </div>
                                     <div class="tags">
                                        <span class="tag tag-attachments-sm  tag-outline-warning mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-20"></i></span> Image01..._jpg <a href="javascript:void(0);" class="mt-1 ms-4 text-warning"><i class="fe fe-x"></i></a></span>

                                        <span class="tag tag-attachments   tag-outline-success"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <a href="javascript:void(0);" class="mt-1 ms-4 text-success"><i class="fe fe-x"></i></a></span>

                                        <span class="tag tag-attachments-lg  tag-outline-pink"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <a href="javascript:void(0);" class="mt-1 ms-4 text-pink"><i class="fe fe-x"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW CLOSED -->

                    <!-- ROW OPEN -->
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                        <div>
                                        <h6 class="main-content-label mb-1 card-sub-title">Image-attachment</h6>
                                        <p class="text-muted card-sub-title"></p>
                                    </div>
                                    <div class="h-100  attached-file-grid6">
                                        <div class="pro-img-box attached-file-image">
                                            <a href="javascript:void(0);">
                                                <img class=" pic-1 pos-relative rounded-5" src="{{asset('build/assets/img/media/1.jpg')}}" alt="attached-file-image"><span class="image-pic">123image.jpg</span>
                                            </a>
                                            <ul class="icons">
                                                <li class="me-1"><a href="javascript:void(0);"><i class="fe fe-download"></i></a></li>
                                                <li class="me-1"><a href="javascript:void(0);"><i class="fe fe-trash"></i></a></li>
                                                <li class="me-1"><a href="javascript:void(0);"><i class="fe fe-share"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                        <div>
                                        <h6 class="main-content-label mb-1">Image-attachment</h6>
                                        <p class="text-muted card-sub-title"></p>
                                    </div>
                                    <div class="h-100  attached-file-grid6">
                                        <div class="pro-img-box attached-file-image">
                                            <a href="javascript:void(0);">
                                                <img class=" pic-1 pos-relative rounded-5" src="{{asset('build/assets/img/media/2.jpg')}}" alt="attached-file-image"><span class="image-pic">123image.jpg</span>
                                            </a>
                                            <ul class="icons">
                                                <li class="me-1"><a href="javascript:void(0);"><i class="fe fe-download"></i></a></li>
                                                <li class="me-1"><a href="javascript:void(0);"><i class="fe fe-trash"></i></a></li>
                                                <li class="me-1"><a href="javascript:void(0);"><i class="fe fe-share"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                        <div>
                                        <h6 class="main-content-label mb-1">Image-attachment</h6>
                                        <p class="text-muted card-sub-title"></p>
                                    </div>
                                    <div class="h-100  attached-file-grid6">
                                        <div class="pro-img-box attached-file-image">
                                            <a href="javascript:void(0);">
                                                <img class=" pic-1 pos-relative rounded-5" src="{{asset('build/assets/img/media/3.jpg')}}" alt="attached-file-image"><span class="image-pic">123image.jpg</span>
                                            </a>
                                            <ul class="icons">
                                                <li class="me-1"><a href="javascript:void(0);"><i class="fe fe-download"></i></a></li>
                                                <li class="me-1"><a href="javascript:void(0);"><i class="fe fe-trash"></i></a></li>
                                                <li class="me-1"><a href="javascript:void(0);"><i class="fe fe-share"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                        <div>
                                        <h6 class="main-content-label mb-1">Image-attachment</h6>
                                        <p class="text-muted card-sub-title"></p>
                                    </div>
                                    <div class="h-100  attached-file-grid6">
                                        <div class="pro-img-box attached-file-image">
                                            <a href="javascript:void(0);">
                                                <img class=" pic-1 pos-relative rounded-5" src="{{asset('build/assets/img/media/4.jpg')}}" alt="attached-file-image"><span class="image-pic">123image.jpg</span>
                                            </a>
                                            <ul class="icons">
                                                <li class="me-1"><a href="javascript:void(0);"><i class="fe fe-download"></i></a></li>
                                                <li class="me-1"><a href="javascript:void(0);"><i class="fe fe-trash"></i></a></li>
                                                <li class="me-1"><a href="javascript:void(0);"><i class="fe fe-share"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW CLOSED -->

					<!-- ROW OPEN -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Image File_Attachment Small Size</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-wrap pb-3">
                                        <div class="file-image-1">
                                            <div class="product-image">
                                                <a href="{{url('filemanager-details')}}">
                                                    <img src="{{asset('build/assets/img/files/5.png')}}" class="rounded-5" alt="">
                                                </a>
                                                <ul class="icons">
                                                    <li><a href="javascript:void(0);" class="bg-danger btn"><i class="fe fe-trash"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-pink btn"><i class="fe fe-download"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-primary btn"><i class="fe fe-eye"></i></a></li>
                                                </ul>
                                            </div>
											<span class="file-name-1">Image01.jpg</span>
                                        </div>
                                        <div class="file-image-1">
                                            <div class="product-image">
                                                <a href="{{url('filemanager-details')}}"><img src="{{asset('build/assets/img/files/1.png')}}" alt=""></a>
                                                <ul class="icons">
                                                    <li><a href="javascript:void(0);" class="bg-danger btn"><i class="fe fe-trash"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-pink btn"><i class="fe fe-download"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-primary btn"><i class="fe fe-eye"></i></a></li>
                                                </ul>
                                            </div>
											<span class="file-name-1">Word.doc</span>
                                        </div>
                                        <div class="file-image-1">
                                            <div class="product-image">
                                                <a href="{{url('filemanager-details')}}"><img src="{{asset('build/assets/img/files/3.png')}}" alt=""></a>
                                                <ul class="icons">
                                                    <li><a href="javascript:void(0);" class="bg-danger btn"><i class="fe fe-trash"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-pink btn"><i class="fe fe-download"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-primary btn"><i class="fe fe-eye"></i></a></li>
                                                </ul>
                                            </div>
											<span class="file-name-1">Excel.xls</span>
                                        </div>
                                        <div class="file-image-1">
                                            <div class="product-image">
                                                <a href="{{url('filemanager-details')}}"><img src="{{asset('build/assets/img/files/2.png')}}" alt=""></a>
                                                <ul class="icons">
                                                    <li><a href="javascript:void(0);" class="bg-danger btn"><i class="fe fe-trash"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-pink btn"><i class="fe fe-download"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-primary btn"><i class="fe fe-eye"></i></a></li>
                                                </ul>
                                            </div>
											<span class="file-name-1">Document.pdf</span>
                                        </div>
                                        <div class="file-image-1">
                                            <div class="product-image">
                                                <a href="{{url('filemanager-details')}}">
                                                    <img src="{{asset('build/assets/img/media/11.jpg')}}" class="rounded-5" alt="">
                                                </a>
                                                <ul class="icons">
                                                    <li><a href="javascript:void(0);" class="bg-danger btn"><i class="fe fe-trash"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-pink btn"><i class="fe fe-download"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-primary btn"><i class="fe fe-eye"></i></a></li>
                                                </ul>
                                            </div>
											<span class="file-name-1">Image02.jpg</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW CLOSED -->

                    <!-- ROW OPEN -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Image File_Attachment Medium Size</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-wrap pb-3">
                                        <div class="file-image-1 file-image-md">
                                            <div class="product-image">
                                                <a href="{{url('filemanager-details')}}">
                                                    <img src="{{asset('build/assets/img/files/5.png')}}" class="rounded-5" alt="">
                                                </a>
                                                <ul class="icons">
                                                    <li><a href="javascript:void(0);" class="bg-danger btn"><i class="fe fe-trash"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-pink btn"><i class="fe fe-download"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-primary btn"><i class="fe fe-eye"></i></a></li>
                                                </ul>
                                            </div>
											<span class="file-name-1">Image01.jpg</span>
                                        </div>
                                        <div class="file-image-1 file-image-md">
                                            <div class="product-image">
                                                <a href="{{url('filemanager-details')}}"><img src="{{asset('build/assets/img/files/1.png')}}" alt=""></a>
                                                <ul class="icons">
                                                    <li><a href="javascript:void(0);" class="bg-danger btn"><i class="fe fe-trash"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-pink btn"><i class="fe fe-download"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-primary btn"><i class="fe fe-eye"></i></a></li>
                                                </ul>
                                            </div>
											<span class="file-name-1">Word.doc</span>
                                        </div>
                                        <div class="file-image-1 file-image-md">
                                            <div class="product-image">
                                                <a href="{{url('filemanager-details')}}"><img src="{{asset('build/assets/img/files/3.png')}}" alt=""></a>
                                                <ul class="icons">
                                                    <li><a href="javascript:void(0);" class="bg-danger btn"><i class="fe fe-trash"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-pink btn"><i class="fe fe-download"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-primary btn"><i class="fe fe-eye"></i></a></li>
                                                </ul>
                                            </div>
											<span class="file-name-1">Excel.xls</span>
                                        </div>
                                        <div class="file-image-1 file-image-md">
                                            <div class="product-image">
                                                <a href="{{url('filemanager-details')}}"><img src="{{asset('build/assets/img/files/2.png')}}" alt=""></a>
                                                <ul class="icons">
                                                    <li><a href="javascript:void(0);" class="bg-danger btn"><i class="fe fe-trash"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-pink btn"><i class="fe fe-download"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-primary btn"><i class="fe fe-eye"></i></a></li>
                                                </ul>
                                            </div>
											<span class="file-name-1">Document.pdf</span>
                                        </div>
                                        <div class="file-image-1 file-image-md">
                                            <div class="product-image">
                                                <a href="{{url('filemanager-details')}}">
                                                    <img src="{{asset('build/assets/img/media/11.jpg')}}" class="rounded-5" alt="">
                                                </a>
                                                <ul class="icons">
                                                    <li><a href="javascript:void(0);" class="bg-danger btn"><i class="fe fe-trash"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-pink btn"><i class="fe fe-download"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-primary btn"><i class="fe fe-eye"></i></a></li>
                                                </ul>
                                            </div>
											<span class="file-name-1">Image02.jpg</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW CLOSED -->

                    <!-- ROW OPEN -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Image File_Attachment Large Size</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-wrap pb-3">
                                        <div class="file-image-1 file-image-lg">
                                            <div class="product-image">
                                                <a href="{{url('filemanager-details')}}">
                                                    <img src="{{asset('build/assets/img/files/5.png')}}" class="rounded-5" alt="">
                                                </a>
                                                <ul class="icons">
                                                    <li><a href="javascript:void(0);" class="bg-danger btn"><i class="fe fe-trash"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-pink btn"><i class="fe fe-download"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-primary btn"><i class="fe fe-eye"></i></a></li>
                                                </ul>
                                            </div>
											<span class="file-name-1">Image01.jpg</span>
                                        </div>
                                        <div class="file-image-1 file-image-lg">
                                            <div class="product-image">
                                                <a href="{{url('filemanager-details')}}"><img src="{{asset('build/assets/img/files/1.png')}}" alt=""></a>
                                                <ul class="icons">
                                                    <li><a href="javascript:void(0);" class="bg-danger btn"><i class="fe fe-trash"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-pink btn"><i class="fe fe-download"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-primary btn"><i class="fe fe-eye"></i></a></li>
                                                </ul>
                                            </div>
											<span class="file-name-1">Word.doc</span>
                                        </div>
                                        <div class="file-image-1 file-image-lg">
                                            <div class="product-image">
                                                <a href="{{url('filemanager-details')}}"><img src="{{asset('build/assets/img/files/3.png')}}" alt=""></a>
                                                <ul class="icons">
                                                    <li><a href="javascript:void(0);" class="bg-danger btn"><i class="fe fe-trash"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-pink btn"><i class="fe fe-download"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-primary btn"><i class="fe fe-eye"></i></a></li>
                                                </ul>
                                            </div>
											<span class="file-name-1">Excel.xls</span>
                                        </div>
                                        <div class="file-image-1 file-image-lg">
                                            <div class="product-image">
                                                <a href="{{url('filemanager-details')}}"><img src="{{asset('build/assets/img/files/2.png')}}" alt=""></a>
                                                <ul class="icons">
                                                    <li><a href="javascript:void(0);" class="bg-danger btn"><i class="fe fe-trash"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-pink btn"><i class="fe fe-download"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-primary btn"><i class="fe fe-eye"></i></a></li>
                                                </ul>
                                            </div>
											<span class="file-name-1">Document.pdf</span>
                                        </div>
                                        <div class="file-image-1 file-image-lg">
                                            <div class="product-image">
                                                <a href="{{url('filemanager-details')}}">
                                                    <img src="{{asset('build/assets/img/media/11.jpg')}}" class="rounded-5" alt="">
                                                </a>
                                                <ul class="icons">
                                                    <li><a href="javascript:void(0);" class="bg-danger btn"><i class="fe fe-trash"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-pink btn"><i class="fe fe-download"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="bg-primary btn"><i class="fe fe-eye"></i></a></li>
                                                </ul>
                                            </div>
											<span class="file-name-1">Image02.jpg</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW CLOSED -->

@endsection

@section('scripts')

@endsection