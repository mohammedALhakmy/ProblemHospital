@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                    <!-- BREADCRUMB -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="my-auto">
                            <h4 class="page-title">Advanced UI</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Modals</li>
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
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">Basic Example of Modal View</h6>
                                        <p class="text-muted card-sub-title">Below is the static example of the basic modal.
                                        </p>
                                    </div>
                                    <div class="pd-20 bg-light text-dark">
                                        <div class="modal d-block pos-static basic-modal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content modal-content-demo">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title">Modal Header</h6><button aria-label="Close"
                                                            class="close" data-bs-dismiss="modal" type="button"><span
                                                                aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>Modal Body</h6>
                                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                                            aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                                            voluptatem sequi nesciunt.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn ripple btn-primary" type="button">Save
                                                            changes</button>
                                                        <button class="btn ripple btn-secondary"
                                                            type="button">Close</button>
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
                        <div class="col-sm-4 col-md-6 col-lg-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title">Basic Modal</h6>
                                    </div>
                                    <a class="btn ripple btn-primary" data-bs-target="#modaldemo1" data-bs-toggle="modal"
                                        href="javascript:void(0);">View Demo</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-6 col-lg-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title">Small Modal</h6>
                                    </div>
                                    <a class="btn ripple btn-secondary" data-bs-target="#modaldemo2" data-bs-toggle="modal"
                                        href="javascript:void(0);">View Demo</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-6 col-lg-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title">Large Modal</h6>
                                    </div>
                                    <a class="btn ripple btn-info btn-b" data-bs-target="#modaldemo3" data-bs-toggle="modal"
                                        href="javascript:void(0);">View Demo</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-6 col-lg-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title">Grid Modal</h6>
                                    </div>
                                    <a class="btn ripple btn-warning" data-bs-target="#modaldemo6" data-bs-toggle="modal"
                                        href="javascript:void(0);">View Demo</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-6 col-lg-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title">Modal Success Alert Messages</h6>
                                    </div>
                                    <a class="btn ripple btn-success" data-bs-target="#modaldemo4" data-bs-toggle="modal"
                                        href="javascript:void(0);">View Demo</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-6 col-lg-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title">Modal Danger Alert Messages</h6>
                                    </div>
                                    <a class="btn ripple btn-danger" data-bs-target="#modaldemo5" data-bs-toggle="modal"
                                        href="javascript:void(0);">View Demo</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title">Select2 Inside Modals</h6>
                                    </div>
                                    <a class="btn ripple btn-teal" data-bs-target="#select2modal" data-bs-toggle="modal"
                                        href="javascript:void(0);">View Demo</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title">Scrolling Modal</h6>
                                    </div>
                                    <a class="btn ripple btn-primary" data-bs-target="#scrollingmodal"
                                        data-bs-toggle="modal" href="javascript:void(0);">View Demo</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title">Scrolling with Content</h6>
                                    </div>
                                    <a class="btn ripple btn-secondary" data-bs-target="#scrollmodal" data-bs-toggle="modal"
                                        href="javascript:void(0);">View Demo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END ROW -->

                    <!-- ROW -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">Modal Animation Effects</h6>
                                        <p class="text-muted card-sub-title">Below are different kind of effects to choose
                                            from.</p>
                                    </div>
                                    <div class="row row-sm">
                                        <div class="col-sm-6 col-md-4 col-xl-3">
                                            <a class="modal-effect btn btn-outline-primary btn-block"
                                                data-bs-effect="effect-scale" data-bs-toggle="modal"
                                                href="#modaldemo8">Scale</a>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mg-sm-t-0">
                                            <a class="modal-effect btn btn-outline-primary btn-block"
                                                data-bs-effect="effect-slide-in-right" data-bs-toggle="modal"
                                                href="#modaldemo8">Slide In Right</a>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mg-md-t-0">
                                            <a class="modal-effect btn btn-outline-primary btn-block"
                                                data-bs-effect="effect-slide-in-bottom" data-bs-toggle="modal"
                                                href="#modaldemo8">Slide In Bottom</a>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mg-xl-t-0">
                                            <a class="modal-effect btn btn-outline-primary btn-block"
                                                data-bs-effect="effect-newspaper" data-bs-toggle="modal"
                                                href="#modaldemo8">Newspaper</a>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
                                            <a class="modal-effect btn btn-outline-primary btn-block"
                                                data-bs-effect="effect-fall" data-bs-toggle="modal"
                                                href="#modaldemo8">Fall</a>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
                                            <a class="modal-effect btn btn-outline-primary btn-block"
                                                data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal"
                                                href="#modaldemo8">Flip Horizontal</a>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
                                            <a class="modal-effect btn btn-outline-primary btn-block"
                                                data-bs-effect="effect-flip-vertical" data-bs-toggle="modal"
                                                href="#modaldemo8">Flip Vertical</a>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
                                            <a class="modal-effect btn btn-outline-primary btn-block"
                                                data-bs-effect="effect-super-scaled" data-bs-toggle="modal"
                                                href="#modaldemo8">Super Scaled</a>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
                                            <a class="modal-effect btn btn-outline-primary btn-block"
                                                data-bs-effect="effect-sign" data-bs-toggle="modal"
                                                href="#modaldemo8">Sign</a>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
                                            <a class="modal-effect btn btn-outline-primary btn-block"
                                                data-bs-effect="effect-rotate-bottom" data-bs-toggle="modal"
                                                href="#modaldemo8">Rotate Bottom</a>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
                                            <a class="modal-effect btn btn-outline-primary btn-block"
                                                data-bs-effect="effect-rotate-left" data-bs-toggle="modal"
                                                href="#modaldemo8">Rotate Left</a>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
                                            <a class="modal-effect btn btn-outline-primary btn-block"
                                                data-bs-effect="effect-just-me" data-bs-toggle="modal"
                                                href="#modaldemo8">Just Me</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END ROW -->

                    <!-- BASIC MODAL -->
                    <div class="modal" id="modaldemo1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Basic Modal</h6><button aria-label="Close" class="close"
                                        data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Modal Body</h6>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END BASIC MODAL -->

                    <!-- SMALL MODAL -->
                    <div class="modal" id="modaldemo2">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Small Modal</h6><button aria-label="Close" class="close"
                                        data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SMALL MODAL -->

                    <!-- LARGE MODAL -->
                    <div class="modal" id="modaldemo3">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Large Modal</h6><button aria-label="Close" class="close"
                                        data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Modal Body</h6>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END LARGE MODAL -->

                    <!-- SCROLL MODAL -->
                    <div class="modal" id="scrollingmodal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Scrolling With Content Modal</h6><button aria-label="Close"
                                        class="close" data-bs-dismiss="modal" type="button"><span
                                            aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                                        was born and I will give you a complete account of the system, and expound the actual
                                        teachings of the great explorer of the truth, the master-builder of human happiness. No one
                                        rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who
                                        do not know how to pursue pleasure rationally encounter consequences that are extremely
                                        painful. </p>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                        cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id
                                        est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
                                        and demoralized by the charms of pleasure of the moment, so blinded by desire, that they
                                        cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to
                                        those who fail in their duty through weakness of will, which is the same as saying through
                                        shrinking from toil and pain.</p>
                                    <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of
                                        choice is untrammelled and when nothing prevents our being able to do what we like best,
                                        every pleasure is to be welcomed and every pain avoided. But in certain circumstances and
                                        owing to the claims of duty or the obligations of business it will frequently occur that
                                        pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds
                                        in these matters to this principle of selection: he rejects pleasures to secure other
                                        greater pleasures, or else he endures pains to avoid worse pains.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SCROLL MODAL -->

                    <!-- SCROLL WITH CONTENT MODAL -->
                    <div class="modal" id="scrollmodal">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Scrolling With Content Modal</h6><button aria-label="Close"
                                        class="close" data-bs-dismiss="modal" type="button"><span
                                            aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                                        was born and I will give you a complete account of the system, and expound the actual
                                        teachings of the great explorer of the truth, the master-builder of human happiness. No one
                                        rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who
                                        do not know how to pursue pleasure rationally encounter consequences that are extremely
                                        painful. </p>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                        cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id
                                        est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
                                        and demoralized by the charms of pleasure of the moment, so blinded by desire, that they
                                        cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to
                                        those who fail in their duty through weakness of will, which is the same as saying through
                                        shrinking from toil and pain.</p>
                                    <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of
                                        choice is untrammelled and when nothing prevents our being able to do what we like best,
                                        every pleasure is to be welcomed and every pain avoided. But in certain circumstances and
                                        owing to the claims of duty or the obligations of business it will frequently occur that
                                        pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds
                                        in these matters to this principle of selection: he rejects pleasures to secure other
                                        greater pleasures, or else he endures pains to avoid worse pains.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SCROLL WITH CONTENT MODAL -->

                    <!-- MODAL ALERT MESSAGE -->
                    <div class="modal" id="modaldemo4">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content tx-size-sm">
                                <div class="modal-body tx-center pd-y-20 pd-x-20">
                                    <button aria-label="Close" class="close" data-bs-dismiss="modal" type="button"><span
                                            aria-hidden="true">&times;</span></button> <i
                                        class="icon ion-ios-checkmark-circle-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
                                    <h4 class="tx-success tx-semibold mg-b-20">Congratulations!</h4>
                                    <p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration.</p><button aria-label="Close"
                                        class="btn ripple btn-success pd-x-25" data-bs-dismiss="modal"
                                        type="button">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal" id="modaldemo5">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content tx-size-sm">
                                <div class="modal-body tx-center pd-y-20 pd-x-20">
                                    <button aria-label="Close" class="close" data-bs-dismiss="modal" type="button"><span
                                            aria-hidden="true">&times;</span></button> <i
                                        class="icon icon ion-ios-close-circle-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                                    <h4 class="tx-danger mg-b-20">Error: Cannot process your entry!</h4>
                                    <p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration.</p><button aria-label="Close"
                                        class="btn ripple btn-danger pd-x-25" data-bs-dismiss="modal"
                                        type="button">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MODAL ALERT MESSAGE -->

                    <!-- BASIC MODAL -->
                    <div class="modal" id="select2modal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Select2 Modal</h6><button aria-label="Close" class="close"
                                        data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Modal Body</h6>
                                    <!-- Select2 -->
                                    <select class="form-control select2-show-search select2-dropdown">
                                        <option label="Choose one">
                                        </option>
                                        <option value="Firefox">
                                            Firefox
                                        </option>
                                        <option value="Chrome">
                                            Chrome
                                        </option>
                                        <option value="Safari">
                                            Safari
                                        </option>
                                        <option value="Opera">
                                            Opera
                                        </option>
                                        <option value="Internet Explorer">
                                            Internet Explorer
                                        </option>
                                    </select>
                                    <!-- Select2 -->
                                    <p class="mt-3">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END BASIC MODAL -->

                    <!-- GRID MODAL -->
                    <div class="modal" id="modaldemo6">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Grid Modal</h6><button aria-label="Close" class="close"
                                        data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                                architecto beatae vitae dicta sunt explicabo.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                                praising pain was born and I will give you a complete account of the who loves toil
                                                and pain can procureor sit aspernatur system.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>expound the actual teachings of the great explorer of the truth, the master-builder
                                                of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it
                                                is pleasure desires to obtain pain.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                                adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                                magnam aliquam quaerat aut odit voluptatem.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END GRID MODAL -->

                    <!-- MODAL EFFECTS -->
                    <div class="modal fade" id="modaldemo8">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Modal Header</h6><button aria-label="Close" class="close"
                                        data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Modal Body</h6>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MODAL EFFECTS -->
@endsection

@section('scripts')

        <!-- INTERNAL SELECT2 JS -->
        <script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>

        <!-- INTERNAL MODAL JS -->
        @vite('resources/assets/js/modal.js')


@endsection