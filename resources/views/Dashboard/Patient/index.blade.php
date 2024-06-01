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
                    <a href="#AddPatient" data-bs-placement="top"  data-bs-effect="effect-super-scaled"
                       data-bs-toggle="modal"  class="btn btn-success btn-sm">اضافة Patients</a>

{{--                    <a href="#btn_delete_all" data-bs-placement="top"  data-bs-effect="effect-super-scaled"--}}
{{--                       data-bs-toggle="modal" id="btn_delete_all"  class="btn btn-success btn-sm">حذف </a>--}}
                    <a href="#" class="btn btn-success btn-sm" id="btn_delete_selected">{{ trans('doctors.Patients') }}</a>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table border-top-0 table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-5p border-bottom-0">#</th>
                                <th class="wd-25p border-bottom-0">الاسم</th>
                                <th class="wd-25p border-bottom-0">الايميل</th>
                                <th class="wd-25p border-bottom-0">تاريخ الميلاد</th>
                                <th class="wd-25p border-bottom-0">رقم الهاتف</th>
                                <th class="wd-30p border-bottom-0">الجنس</th>
                                <th class="wd-30p border-bottom-0">فصيلة الدم</th>
                                <th class="wd-10p border-bottom-0">التحكم</th>
                            </tr>
                            </thead>
                            @if(@isset($Patients) && !@empty($Patients))
                                <tbody>
                               @foreach($Patients as $key =>$Patient)
                                    <tr>
                                        <td>{{$key+=1}}</td>

                                        <td><a href="{{route('Patient.show',$Patient->id)}}">{{$Patient->name}}</a></td>
                                        <td>{{$Patient->email}}</td>
                                        <td>{{$Patient->date_birth}}</td>
                                        <td>{{$Patient->phone }}</td>
                                        <td>{{$Patient->gender }}</td>
                                        <td>{{$Patient->blood_group }}</td>
                                        <td class="justify-content-between">
                                            <a href="#EditEditDataPatient"
                                               data-bs-placement="top"
                                               data-bs-effect="effect-super-scaled"
                                               data-bs-toggle="modal"
                                               data-id="{{$Patient->id}}"
                                               data-name="{{$Patient->name}}"
                                               data-email="{{$Patient->email}}"
                                               data-phone="{{$Patient->phone}}"
                                               data-gender="{{$Patient->gender}}"
                                               data-date_birth="{{$Patient->date_birth}}"
                                               data-blood_group="{{$Patient->blood_group}}"
                                               class="fa fa-edit">
                                            </a>
                                            <a href="#Delete_Section"
                                                class="modal-effect" style="padding-right: 10px"
                                               data-bs-toggle="modal"
                                               data-bs-placement="top"
                                               data-bs-effect="effect-super-scaled"
                                               data-id="{{$Patient->id}}"
                                               data-name="{{$Patient->name}}"
                                               data-email="{{$Patient->email}}"
                                               data-phone="{{$Patient->phone}}"
                                               data-gender="{{$Patient->gender}}"
                                               data-date_birth="{{$Patient->date_birth}}"
                                               data-blood_group="{{$Patient->blood_group}}"
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
    <div class="modal fade" id="AddPatient">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">
                        إضافة AddPatient
                    </h6>
                    <button aria-label="Close" class="close"
                            data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="box-shadow-0">
                            <form class="form-horizontal" id="DataPatient" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12 mt-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder=" اسم المريض ">
                                        <span class="text-danger error-message" id="name_error"></span>
                                    </div>
                                </div>
                                    <div class="col-md-12 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" name="email" placeholder="email">
                                            <span class="text-danger error-message" id="email_error"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-md-2">
                                        <div class="form-group">
                                            <input type="date" class="form-control" id="date_birth" name="date_birth" placeholder="تاريخ الميلاد">
                                            <span class="text-danger error-message" id="date_birth_error"></span>
                                        </div>
                                    </div>

                                <div class="col-md-12 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="  رقم الهاتف">
                                            <span class="text-danger error-message" id="phone_error"></span>
                                        </div>
                                    </div>

                                <div class="col-md-12 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="address" name="address" placeholder="  العنوان  ">
                                            <span class="text-danger error-message" id="address_error"></span>
                                        </div>
                                    </div>

                                <div class="col-md-12 mt-md-2">
                                        <div class="form-group">
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="ذكر">ذكر</option>
                                                <option value="انثى">انثى</option>
                                            </select>
                                        </div>
                                    </div>

                                <div class="col-md-12 mt-md-2">
                                    <label>فصلية الدم</label>
                                    <select class="form-control" id="blood_group" name="blood_group" required>
                                        <option value="" selected>-- اختار من القائمة --</option>
                                        <option value="O-">O-</option>
                                        <option value="O+">O+</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                </div>


                                <div class="modal-footer">
                                    <button class="btn btn-info" type="button" id="SavePatient">حفظ البيانات</button>
                                    <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">إغلاق</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="EditEditDataPatient">
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
                            <form class="form-horizontal" id="EditEditUpdateDataPatient">
                                @csrf
                                <input type="hidden" id="id" name="id" >
                                <div class="col-md-12 mt-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder=" اسم المريض ">
                                        <span class="text-danger error-message" id="name_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="email">
                                        <span class="text-danger error-message" id="email_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-md-2">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="date_birth" name="date_birth" placeholder="تاريخ الميلاد">
                                        <span class="text-danger error-message" id="date_birth_error"></span>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="  رقم الهاتف">
                                        <span class="text-danger error-message" id="phone_error"></span>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="address" name="address" placeholder="  العنوان  ">
                                        <span class="text-danger error-message" id="address_error"></span>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-md-2">
                                    <div class="form-group">
                                        <select name="gender" id="gender" class="form-control">
                                            <option value="ذكر">ذكر</option>
                                            <option value="انثى">انثى</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-md-2">
                                    <label>فصلية الدم</label>
                                    <select class="form-control" id="blood_group" name="blood_group" required>
                                        <option value="" selected>-- اختار من القائمة --</option>
                                        <option value="O-">O-</option>
                                        <option value="O+">O+</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                </div>



                                <div class="modal-footer">
                                    <button class="btn ripple btn-info" type="button" id="EditEditSavePatient">حفظ البيانات</button>
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
            $('#SavePatient').on('click', function() {
                $('.error-message').html('');
                var formData = new FormData($('#DataPatient')[0]);
                $.ajax({
                    url: '{{ route('Patient.store') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#DataPatient')[0].reset();
                        $('#AddPatient').modal('hide');
                        showNotification('success', 'تم حفظ بيانات بنجاح');
                        setTimeout(function() {
                            window.location.href = '/Patient';
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
        $('#EditEditDataPatient').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var name = button.data('name');
            var email = button.data('email');
            var date_birth = button.data('date_birth');
            var phone = button.data('phone');
            var blood_group = button.data('blood_group');
            var address = button.data('address');
            var gender = button.data('gender');

            var modal = $(this);
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #email').val(email); ;
            modal.find('.modal-body #date_birth').val(date_birth);
            modal.find('.modal-body #phone').val(phone);
            modal.find('.modal-body #gender').val(gender);
            modal.find('.modal-body #blood_group').val(blood_group);
            modal.find('.modal-body #address').val(address);
        });
    </script>



    <script>
        $(document).ready(function() {
            $('#EditEditSavePatient').on('click', function() {
                $('.error-message').html('');
                var formData = new FormData($('#EditEditUpdateDataPatient')[0]);
                $.ajax({
                    url: '{{ route('Patients.update') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#EditEditDataPatient').modal('hide');
                        $('#EditEditUpdateDataPatient')[0].reset();
                        showNotification('success', 'تم تحديث  بيانات بنجاح');
                        setTimeout(function() {
                            window.location.href = '/Patient';
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
