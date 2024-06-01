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
                                <li class="breadcrumb-item active" aria-current="page">Listgroup</li>
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
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Basic List group</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <ul class="list-group">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                        <li class="list-group-item">A fourth item</li>
                                        <li class="list-group-item">And a fifth one</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Basic List group with Active item</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <ul class="list-group">
                                        <li class="list-group-item active" aria-current="true">An active item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                        <li class="list-group-item">A fourth item</li>
                                        <li class="list-group-item">And a fifth one</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Basic List group with Disabled item</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <ul class="list-group">
                                        <li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                        <li class="list-group-item">A fourth item</li>
                                        <li class="list-group-item">And a fifth one</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">List group with Link</h3>
                                </div>
                                <div class="card-body  pt-0">
                                    <div class="list-group">
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action active"
                                            aria-current="true">
                                            The current link item
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">A
                                            second link item</a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">A third
                                            link item</a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">A
                                            fourth link item</a>
                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action disabled" tabindex="-1">A
                                            disabled link item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">List group with Buttons</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="list-group">
                                        <button type="button" class="list-group-item list-group-item-action active"
                                            aria-current="true">
                                            The current button
                                        </button>
                                        <button type="button" class="list-group-item list-group-item-action">A second
                                            item</button>
                                        <button type="button" class="list-group-item list-group-item-action">A third button
                                            item</button>
                                        <button type="button" class="list-group-item list-group-item-action">A fourth button
                                            item</button>
                                        <button type="button" class="list-group-item list-group-item-action" disabled>A
                                            disabled button item</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Numbered list group</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Cras justo odio</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title  mg-b-10">List group with flush</h3>
                                    <p class="mg-b-20">Add .list-group-flush to remove some borders and rounded corners to
                                        render list group items edge-to-edge in a parent container(e.g., cards).</p>
                                    <div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">An item</li>
                                            <li class="list-group-item">A second item</li>
                                            <li class="list-group-item">A third item</li>
                                            <li class="list-group-item">A fourth item</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Numbered list group with custom content</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-bold">Subheading</div>
                                                Cras justo odio
                                            </div>
                                            <span class="badge bg-primary rounded-pill">14</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-bold">Subheading</div>
                                                Cras justo odio
                                            </div>
                                            <span class="badge bg-primary rounded-pill">14</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-bold">Subheading</div>
                                                Cras justo odio
                                            </div>
                                            <span class="badge bg-primary rounded-pill">14</span>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title  mg-b-10">Horizontal List group</h3>
                                    <p class="mg-b-20">Add .list-group-horizontal to change the layout of list group items
                                        from vertical to horizontal across all breakpoints. Alternatively, choose a
                                        responsive variant .list-group-horizontal-{sm|md|lg|xl|xxl} to make a list group
                                        horizontal starting at that breakpoint’s min-width.</p>
                                    <div>
                                        <ul class="list-group list-group-horizontal mb-3">
                                            <li class="list-group-item">An item</li>
                                            <li class="list-group-item">A second item</li>
                                            <li class="list-group-item">A third item</li>
                                        </ul>
                                        <ul class="list-group list-group-horizontal-sm mb-3">
                                            <li class="list-group-item">An item</li>
                                            <li class="list-group-item">A second item</li>
                                            <li class="list-group-item">A third item</li>
                                        </ul>
                                        <ul class="list-group list-group-horizontal-md mb-3">
                                            <li class="list-group-item">An item</li>
                                            <li class="list-group-item">A second item</li>
                                            <li class="list-group-item">A third item</li>
                                        </ul>
                                        <ul class="list-group list-group-horizontal-lg mb-3">
                                            <li class="list-group-item">An item</li>
                                            <li class="list-group-item">A second item</li>
                                            <li class="list-group-item">A third item</li>
                                        </ul>
                                        <ul class="list-group list-group-horizontal-xl mb-3">
                                            <li class="list-group-item">An item</li>
                                            <li class="list-group-item">A second item</li>
                                            <li class="list-group-item">A third item</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title  mg-b-10">List group with Checkboxes</h3>
                                    <p class="mg-b-20">Place Bootstrap’s checkboxes and radios within list group items and
                                        customize as needed. You can use them without labels, but please remember to include
                                        an aria-label attribute and value for accessibility.</p>
                                    <div>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <label class="d-flex align-items-center mb-0">
                                                    <span class="check-box mb-0">
                                                        <span class="ckbox"><input type="checkbox"><span></span></span>
                                                    </span>
                                                    <span class="ms-3 my-auto">
                                                        First checkbox
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="list-group-item">
                                                <label class="d-flex align-items-center mb-0">
                                                    <span class="check-box mb-0">
                                                        <span class="ckbox"><input type="checkbox"><span></span></span>
                                                    </span>
                                                    <span class="ms-3 my-auto">
                                                        Second checkbox
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="list-group-item">
                                                <label class="d-flex align-items-center mb-0">
                                                    <span class="check-box mb-0">
                                                        <span class="ckbox"><input type="checkbox"><span></span></span>
                                                    </span>
                                                    <span class="ms-3 my-auto">
                                                        Third checkbox
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="list-group-item">
                                                <label class="d-flex align-items-center mb-0">
                                                    <span class="check-box mb-0">
                                                        <span class="ckbox"><input type="checkbox"><span></span></span>
                                                    </span>
                                                    <span class="ms-3 my-auto">
                                                        Fourth checkbox
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="list-group-item">
                                                <label class="d-flex align-items-center mb-0">
                                                    <span class="check-box mb-0">
                                                        <span class="ckbox"><input type="checkbox"><span></span></span>
                                                    </span>
                                                    <span class="ms-3 my-auto">
                                                        Fifth checkbox
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body ">
                                    <h3 class="card-title  mg-b-10">List group with Contextual classes</h3>
                                    <p class="mg-b-20">Use contextual classes to style list items with a stateful background
                                        and color..</p>
                                    <div>
                                        <ul class="list-group">
                                            <li class="list-group-item">A simple default list group item</li>

                                            <li class="list-group-item list-group-item-primary">A simple primary list group
                                                item</li>
                                            <li class="list-group-item list-group-item-secondary">A simple secondary list
                                                group item</li>
                                            <li class="list-group-item list-group-item-success">A simple success list group
                                                item</li>
                                            <li class="list-group-item list-group-item-warning">A simple warning list group
                                                item</li>
                                            <li class="list-group-item list-group-item-info">A simple info list group item
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">List style with paragraph</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <div>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor, fuga veniam
                                            alias ab nemo nesciunt aperiam vero rem enim ,Lorem ipsum dolor sit amet
                                            consectetur, adipisicing elit. Quos obcaecati velit earum suscipit possimus
                                            quaerat similique eos quod distinctio commodi dicta ?
                                        </p>
                                        <ul class="paragraph-list">
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Consectetur adipiscing elit</li>
                                            <li>Integer molestie lorem at massa</li>
                                            <li>Facilisis in pretium nisl aliquet</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Unorder List Style</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <ul class="list-style-1">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit
                                            <ul>
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                            </ul>
                                        </li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Unorder List Style2</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <ul class="list-style2">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit
                                            <ul>
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                            </ul>
                                        </li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Unorder List Style3</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <ul class="list-style3">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit
                                            <ul>
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                            </ul>
                                        </li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Unorder List Style4</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <ul class="list-style4">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit
                                            <ul>
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                            </ul>
                                        </li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Unorder List Style5</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <ul class="list-style5">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit
                                            <ul>
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                            </ul>
                                        </li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Unorder List Style6</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <ul class="list-style6">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit
                                            <ul>
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                            </ul>
                                        </li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Order list</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <ol class="order-list">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit
                                            <ol class="order-list">
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                            </ol>
                                        </li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Order With unorder</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <ol class="order-list">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit
                                            <ul class="list-style4 ps-5">
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                            </ul>
                                        </li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END ROW -->

                    <!-- ROW -->
                    <div class="row row-sm">
                        <div class="col-lg-6 col-md-12">
                            <div class="card mg-b-20" id="list">
                                <div class="card-header">
                                    <h3 class="card-title">Basic Example</h3>
                                    <p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your
                                        website apllication</p>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="listgroup-example ">
                                                <ul class="list-group">
                                                    <li>Dapibus ac facilisis in</li>
                                                    <li>Morbi leo risus</li>
                                                    <li>Cras justo odio
                                                        <ul class="list-style-disc">
                                                            <li>Lorem </li>
                                                            <li>established</li>
                                                            <li>Contrary</li>
                                                        </ul>
                                                    </li>
                                                    <li>Porta ac consectetur ac</li>
                                                    <li>Vestibulum at eros</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-12">
                            <div class="card mg-b-20" id="list1">
                                <div class="card-header">
                                    <h3 class="card-title">Active Item</h3>
                                    <p class="mg-b-20 text-muted card-sub-title">It is Very Easy to Customize and it uses in
                                        your website apllication</p>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="listgroup-example2">
                                                <ul class="list-group">
                                                    <li>Dapibus ac facilisis in</li>
                                                    <li>Morbi leo risus</li>
                                                    <li>Cras justo odio
                                                        <ul class="list-style-disc">
                                                            <li>Lorem </li>
                                                            <li>established</li>
                                                            <li>Contrary</li>
                                                        </ul>
                                                    </li>
                                                    <li>Porta ac consectetur ac</li>
                                                    <li>Vestibulum at eros</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-xl-6 col-md-12">
                            <div class="card mg-b-20">
                                <div class="card-header">
                                    <h3 class="card-title">Custom content</h3>
                                    <p class="mg-b-20 text-muted card-sub-title">It is Very Easy to Customize and it uses in
                                        your website apllication</p>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="list-group">
                                                <a class="list-group-item list-group-item-action flex-column align-items-start active"
                                                    href="javascript:void(0);">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-2 tx-14">List group item heading</h5><small>3 days
                                                            ago</small>
                                                    </div>
                                                    <p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus.
                                                        Maecenas sed diam eget risus varius blandit.</p><small>Donec id elit
                                                        non mi porta.</small>
                                                </a> <a
                                                    class="list-group-item list-group-item-action flex-column align-items-start"
                                                    href="javascript:void(0);">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-2 tx-14">List group item heading</h5><small
                                                            class="text-muted">3 days ago</small>
                                                    </div>
                                                    <p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus.
                                                        Maecenas sed diam eget risus varius blandit.</p><small
                                                        class="text-muted">Donec id elit non mi porta.</small>
                                                </a> <a
                                                    class="list-group-item list-group-item-action flex-column align-items-start"
                                                    href="javascript:void(0);">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-2 tx-14">List group item heading</h5><small
                                                            class="text-muted">3 days ago</small>
                                                    </div>
                                                    <p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus.
                                                        Maecenas sed diam eget risus varius blandit.</p><small
                                                        class="text-muted">Donec id elit non mi porta.</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-xl-6 col-md-12">
                            <div class="card mg-b-20">
                                <div class="card-header">
                                    <h3 class="card-title">Custom content with image</h3>
                                    <p class="mg-b-20 text-muted card-sub-title">It is Very Easy to Customize and it uses in
                                        your website apllication</p>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="list-group">
                                                <a class="list-group-item list-group-item-action flex-column align-items-start active"
                                                    href="javascript:void(0);">
                                                    <div class="d-flex">
                                                        <img alt="" class="me-3 rounded-circle avatar-md"
                                                            src="{{asset('build/assets/img/users/3.jpg')}}">
                                                        <div class="flex-grow-1">
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <h5 class="mb-2 tx-14">List group item heading</h5><small>3
                                                                    days ago</small>
                                                            </div>
                                                            <p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget
                                                                metus. Maecenas sed diam eget risus varius blandit.</p>
                                                            <small>Donec id elit non mi porta.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="list-group-item list-group-item-action flex-column align-items-start"
                                                    href="javascript:void(0);">
                                                    <div class="d-flex">
                                                        <img alt="" class="me-3 rounded-circle avatar-md"
                                                            src="{{asset('build/assets/img/users/8.jpg')}}">
                                                        <div class="flex-grow-1">
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <h5 class="mb-2 tx-14">List group item heading</h5><small>3
                                                                    days ago</small>
                                                            </div>
                                                            <p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget
                                                                metus. Maecenas sed diam eget risus varius blandit.</p>
                                                            <small>Donec id elit non mi porta.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="list-group-item list-group-item-action flex-column align-items-start"
                                                    href="javascript:void(0);">
                                                    <div class="d-flex">
                                                        <img alt="" class="me-3 rounded-circle avatar-md"
                                                            src="{{asset('build/assets/img/users/11.jpg')}}">
                                                        <div class="flex-grow-1">
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <h5 class="mb-2 tx-14">List group item heading</h5><small>3
                                                                    days ago</small>
                                                            </div>
                                                            <p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget
                                                                metus. Maecenas sed diam eget risus varius blandit.</p>
                                                            <small>Donec id elit non mi porta.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-xl-6 col-md-12">
                            <div class="card mg-b-20">
                                <div class="card-header">
                                    <h3 class="card-title">USER LIST</h3>
                                    <p class="mg-b-20 text-muted card-sub-title">It is Very Easy to Customize and it uses in
                                        your website apllication</p>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="text-wrap">
                                        <div class="">
                                            <div class="list-group">
                                                <div class="list-group-item pd-y-20">
                                                    <div class="media">
                                                        <div class="d-flex mg-r-10 wd-50">
                                                            <img class="me-4 rounded-circle avatar-md"
                                                                src="{{asset('build/assets/img/users/17.jpg')}}" alt="avatar">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="media-body d-flex">
                                                                <h6 class="tx-15 mb-2">Blake Vanessa</h6>
                                                                <span class="tx-12 float-end ms-auto text-muted">4 hours
                                                                    ago</span>
                                                            </div>
                                                            <p class="tx-13 mg-b-10 text-muted mb-0">Lorem Ipsum is simply
                                                                dummy text of the printing and typesetting industry. Lorem
                                                                Ipsum has been the industry's .</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item pd-y-20">
                                                    <div class="media">
                                                        <div class="d-flex mg-r-10 wd-50">
                                                            <img class="me-4 rounded-circle avatar-md"
                                                                src="{{asset('build/assets/img/users/5.jpg')}}" alt="avatar">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="media-body d-flex">
                                                                <h6 class="tx-15 mb-2">Elizabeth Parsons</h6>
                                                                <span class="tx-12 float-end ms-auto text-muted">8 hours
                                                                    ago</span>
                                                            </div>
                                                            <p class="tx-13 mg-b-10 text-muted mb-0">Lorem Ipsum is simply
                                                                dummy text of the printing and typesetting industry. Lorem
                                                                Ipsum has been the industry's .</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item pd-y-20">
                                                    <div class="media">
                                                        <div class="d-flex mg-r-10 wd-50">
                                                            <img class="me-4 rounded-circle avatar-md"
                                                                src="{{asset('build/assets/img/users/12.jpg')}}" alt="avatar">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="media-body d-flex">
                                                                <h6 class="tx-15 mb-2">Nicola Lambert</h6>
                                                                <span class="tx-12 float-end text-muted ms-auto">12 hours
                                                                    ago</span>
                                                            </div>
                                                            <p class="tx-13 mg-b-10 text-muted mb-0">Lorem Ipsum is simply
                                                                dummy text of the printing and typesetting industry. Lorem
                                                                Ipsum has been the industry's .</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-xl-6 col-md-12">
                            <div class="card mg-b-20" id="list8">
                                <div class="card-header border-bottom-0">
                                    <div>
                                        <h3 class="card-title ">Using Image</h3>
                                        <p class="mg-b-20 text-muted card-sub-title">It is Very Easy to Customize and it
                                            uses in your website apllication.</p>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="text-wrap">
                                        <div class="">
                                            <ul class="list-group wd-md-100p users-list-group">
                                                <li class="list-group-item d-sm-flex d-block align-items-center">
                                                    <img alt="" class="me-3 rounded-circle avatar-md"
                                                        src="{{asset('build/assets/img/users/5.jpg')}}">
                                                    <div>
                                                        <h6 class="tx-15 mb-1 tx-inverse tx-semibold mg-b-0">Adrian Monino
                                                        </h6><span class="d-block tx-13 text-muted">Premium Member</span>
                                                    </div>
                                                    <div class="d-flex float-start ms-auto">
                                                        <a href="javascript:void(0);" class="btn btn-light btn-icon me-2">
                                                            <div class=""><i class="bx bx-plus"></i></div>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-light btn-icon">
                                                            <div class=""><i class="bx bx-minus"></i></div>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-sm-flex d-block align-items-center">
                                                    <img alt="" class="me-3 rounded-circle avatar-md"
                                                        src="{{asset('build/assets/img/users/6.jpg')}}">
                                                    <div>
                                                        <h6 class="tx-15 mb-1 tx-inverse tx-semibold mg-b-0">Joel Mendez
                                                        </h6><span class="d-block tx-13 text-muted">Premium Member</span>
                                                    </div>
                                                    <div class="d-flex float-start ms-auto">
                                                        <a href="javascript:void(0);" class="btn btn-light btn-icon me-2">
                                                            <div class=""><i class="bx bx-plus"></i></div>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-light btn-icon">
                                                            <div class=""><i class="bx bx-minus"></i></div>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-sm-flex d-block align-items-center">
                                                    <img alt="" class="me-3 rounded-circle avatar-md"
                                                        src="{{asset('build/assets/img/users/15.jpg')}}">
                                                    <div>
                                                        <h6 class="tx-15 mb-1 tx-inverse tx-semibold mg-b-0">Joel Mendez
                                                        </h6><span class="d-block tx-13 text-muted">Premium Member</span>
                                                    </div>
                                                    <div class="d-flex float-start ms-auto">
                                                        <a href="javascript:void(0);" class="btn btn-light btn-icon me-2">
                                                            <div class=""><i class="bx bx-plus"></i></div>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-light btn-icon">
                                                            <div class=""><i class="bx bx-minus"></i></div>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-sm-flex d-block align-items-center">
                                                    <img alt="" class="me-3 rounded-circle avatar-md"
                                                        src="{{asset('build/assets/img/users/12.jpg')}}">
                                                    <div>
                                                        <h6 class="tx-15 mb-1 tx-inverse tx-semibold mg-b-0">Marianne Audrey
                                                        </h6><span class="d-block tx-13 text-muted">Premium Member</span>
                                                    </div>
                                                    <div class="d-flex float-start ms-auto">
                                                        <a href="javascript:void(0);" class="btn btn-light btn-icon me-2">
                                                            <div class=""><i class="bx bx-plus"></i></div>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-light btn-icon">
                                                            <div class=""><i class="bx bx-minus"></i></div>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAL DATEPICKER JS -->
        <script src="{{asset('build/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

        <!-- INTERNAL SELECT2 JS -->
        <script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>

        <!-- INTERNAL PRISM JS -->
        <script src="{{asset('build/assets/plugins/prism/prism.js')}}"></script>

@endsection