@extends('Dashboard.layouts.app')

@section('styles')

@endsection

@section('content')

    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <h4 class="page-title">Pages</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Empty</li>
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
    <!-- ROW -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">الاقسام</h3>
                    <a href="#AddService" data-bs-placement="top"  data-bs-effect="effect-super-scaled"
                       data-bs-toggle="modal"  class="btn btn-success btn-sm">اضافة موقع</a>

{{--                    <a href="#btn_delete_all" data-bs-placement="top"  data-bs-effect="effect-super-scaled"--}}
{{--                       data-bs-toggle="modal" id="btn_delete_all"  class="btn btn-success btn-sm">حذف </a>--}}
                    <a href="#" class="btn btn-success btn-sm" id="btn_delete_selected">{{ trans('doctors.delete_select') }}</a>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table border-top-0 table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-5p border-bottom-0">#</th>
                                <th class="wd-25p border-bottom-0">الاسم</th>
                                <th class="wd-25p border-bottom-0">السعر</th>
                                <th class="wd-25p border-bottom-0">الحاله</th>
                                <th class="wd-25p border-bottom-0">الوصف</th>
                                <th class="wd-30p border-bottom-0">تاريخ الاضافة</th>
                                <th class="wd-10p border-bottom-0">التحكم</th>
                            </tr>
                            </thead>
                            @if(@isset($Services) && !@empty($Services))
                                <tbody>
                               @foreach($Services as $key =>$Service)
                                    <tr>
                                        <td>{{$key+=1}}</td>

                                        <td>{{$Service->name}}</td>
                                        <td>{{$Service->price}}</td>
                                        <td>
                                            <div class="dot-label bg-{{$Service->status == "1" ? 'success':'danger'}} ml-0"></div>
                                            {{$Service->status == "1" ? trans('مفعل'):trans('غير مفعل')}}
                                        </td>
                                        <td>{{$Service->description}}</td>
                                        <td>{{\Carbon\Carbon::parse($Service->created_at)->diffForHumans()}}</td>
                                        <td class="justify-content-between">
                                            <a href="#EditEditDataServices"
                                               data-bs-placement="top"
                                               data-bs-effect="effect-super-scaled"
                                               data-bs-toggle="modal"
                                               data-id="{{$Service->id}}"
                                               data-name="{{$Service->name}}"
                                               data-price="{{$Service->price}}"
                                               data-description="{{$Service->description}}"
                                               class="fa fa-edit">
                                            </a>
                                            <a href="#Delete_Section"
                                                class="modal-effect" style="padding-right: 10px"
                                               data-bs-toggle="modal"
                                               data-bs-placement="top"
                                               data-bs-effect="effect-super-scaled"
                                               data-id="{{$Service->id}}"
                                               data-name="{{$Service->name}}"
                                               data-price="{{$Service->price}}"
                                               data-description="{{$Service->description}}"
                                                ><i
                                                    class="fa fa-trash text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->
    <div class="modal fade" id="AddService">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">
                        إضافة خدمة
                    </h6>
                    <button aria-label="Close" class="close"
                            data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="box-shadow-0">
                            <form class="form-horizontal" id="DataService" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12 mt-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder=" اسم الخدمة ">
                                        <span class="text-danger error-message" id="name_error"></span>
                                    </div>
                                </div>
                                    <div class="col-md-12 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="description" name="description" placeholder="الوصف">
                                            <span class="text-danger error-message" id="description_error"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="price" name="price" placeholder="السعر">
                                            <span class="text-danger error-message" id="price_error"></span>
                                        </div>
                                    </div>


                                <div class="modal-footer">
                                    <button class="btn btn-info" type="button" id="SaveService">حفظ البيانات</button>
                                    <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">إغلاق</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="EditEditDataServices">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">
                        إضافة قسم
                    </h6>
                    <button aria-label="Close" class="close"
                            data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="box-shadow-0">
                            <form class="form-horizontal" id="EditEditUpdateDataServices">
                                @csrf
                                <input type="hidden" id="id" name="id" >
                                <div class="col-md-12 mt-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder=" اسم الخدمة ">
                                        <span class="text-danger error-message" id="name_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="description" name="description" placeholder="الوصف">
                                        <span class="text-danger error-message" id="description_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="price" name="price" placeholder="السعر">
                                        <span class="text-danger error-message" id="price_error"></span>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button class="btn ripple btn-info" type="button" id="EditEditSaveServices">حفظ البيانات</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">إغلاق</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- END ROW -->

    <div class="modal fade" id="Delete_Section">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف البيانات القسم </h6>
                    <button aria-label="Close" class="close"
                            data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('Sections.destroy', 'test') }}" method="post">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <p>هل انت متاكد من عملية الحذف ؟</p><br>
                        <input type="hidden" name="id" id="id" value="">
                        <input class="form-control" name="name" id="name" readonly type="text">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">تاكيد</button>
                        <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close" >الغاء</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="DeleteDDoctor">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        {{ trans('doctors.delete_select') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('Doctor.destroy', 'test') }}" method="post">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <h5>{{trans('sections_trans.Warning')}}</h5>
                        <input type="text" id="delete_select_id" name="delete_select_id" value=''>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/sections_trans.Close')}}</button>
                        <button type="submit" class="btn btn-danger">{{trans('Dashboard/sections_trans.submit')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete_selected_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ trans('doctors.delete_select') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('Doctor.destroy', 'test') }}" method="post">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <h5>{{ trans('sections_trans.Warning') }}</h5>
                        <!-- حقل مخفي لتخزين معرفات العناصر المحددة -->
                        <input type="hidden" id="selected_items" name="selected_items">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('Dashboard/sections_trans.Close') }}</button>
                        <button type="submit" class="btn btn-danger">{{ trans('Dashboard/sections_trans.submit') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection


@section('scripts')

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>

    <!-- DATA TABLE JS-->
    <script src="{{asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

    <!--INTERNAL DATATABLE JS -->
    @vite('resources/assets/js/table-data.js')

    @vite('resources/assets/js/advanced-form-elements.js')

    <script src="{{asset('build/assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#SaveService').on('click', function() {
                $('.error-message').html('');
                var formData = new FormData($('#DataService')[0]);
                $.ajax({
                    url: '{{ route('Service.store') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#DataService')[0].reset();
                        $('#AddService').modal('hide');
                        showNotification('success', 'تم حفظ بيانات بنجاح');
                        setTimeout(function() {
                            window.location.href = '/Service';
                        }, 1000);
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('#' + key + '_error').html(value[0]);
                            });
                        } else {
                            alert('An error occurred while saving data.');
                        }
                    }
                });
            });
            function showNotification(type, message) {
                toastr[type](message);
            }
        });
    </script>


    <script>
        $('#EditEditDataServices').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var name = button.data('name');
            var description = button.data('description');
            var price = button.data('price');

            var modal = $(this);
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #description').val(description); ;
            modal.find('.modal-body #price').val(price);
        });
    </script>



    <script>
        $(document).ready(function() {
            $('#EditEditSaveServices').on('click', function() {
                $('.error-message').html('');
                var formData = new FormData($('#EditEditUpdateDataServices')[0]);
                $.ajax({
                    url: '{{ route('Services.update') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#EditEditDataServices').modal('hide');
                        $('#EditEditUpdateDataServices')[0].reset();
                        showNotification('success', 'تم تحديث  بيانات بنجاح');
                        setTimeout(function() {
                            window.location.href = '/Service';
                        }, 500);
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('#' + key + '_errors').html(value[0]);
                            });
                        } else {
                            alert('An error occurred while saving data.');
                        }
                    }
                });
            });
            function showNotification(type, message) {
                toastr[type](message);
            }
        });
    </script>



    <script>
        $('#Delete_Section').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
        })
    </script>


    <script>
        $(function() {
            jQuery("[name=select_all]").click(function(source) {
                checkboxes = jQuery("[name=delete_select]");
                for(var i in checkboxes) {
                    checkboxes[i].checked = source.target.checked;
                }
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            $("#btn_delete_selected").click(function () {
                var selected = [];
                $(".delete_select:checked").each(function () {
                    selected.push($(this).val());
                });
                $("#selected_items").val(selected.join(","));
                $("#delete_selected_modal").modal("show");
            });
        });
    </script>


@endsection
