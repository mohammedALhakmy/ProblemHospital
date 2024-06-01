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
                    <h3 class="card-title">{{__('message.Ambulance')}}</h3>
                    <a href="#AddAmbulances" data-bs-placement="top"  data-bs-effect="effect-super-scaled"
                       data-bs-toggle="modal"  class="btn btn-success btn-sm">{{__('message.add Ambulance')}}</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table border-top-0 table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th >رقم السيارة</th>
                                <th >موديل السيارة</th>
                                <th>سنة الصنع</th>
                                <th>نوع السيارة</th>
                                <th >اسم السائق</th>
                                <th >رقم الرخصة</th>
                                <th >رقم الهاتف</th>
                                <th >حالة السيارة</th>
                                <th >ملاحظات</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            @if(@isset($ambulances) && !@empty($ambulances))
                                <tbody>
                                @foreach($ambulances as $ambulance)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$ambulance->car_number}}</td>
                                        <td>{{$ambulance->car_model}}</td>
                                        <td>{{$ambulance->car_year_made}}</td>
                                        <td>{{$ambulance->car_type == 1 ? 'مملكوكة' :'ايجار'}}</td>
                                        <td>{{$ambulance->driver_name}}</td>
                                        <td>{{$ambulance->driver_license_number}}</td>
                                        <td>{{$ambulance->driver_phone}}</td>
                                        <td>{{$ambulance->is_available == 1 ? 'مفعلة':'غير مفعلة'}}</td>
                                        <td>{{$ambulance->notes}}</td>
                                        <td class="justify-content-between">
                                            <a href="#EditDataAmbulances"
                                               data-bs-placement="top"
                                               data-bs-effect="effect-super-scaled"
                                               data-bs-toggle="modal"
                                               data-id="{{ $ambulance->id }}"
                                               data-iteration="{{ $ambulance->iteration }}"
                                               data-car_number="{{ $ambulance->car_number }}"
                                               data-car_model="{{ $ambulance->car_model }}"
                                               data-car_year_made="{{ $ambulance->car_year_made }}"
                                               data-car_type="{{ $ambulance->car_type }}"
                                               data-driver_name="{{ $ambulance->driver_name }}"
                                               data-driver_license_number="{{ $ambulance->driver_license_number }}"
                                               data-driver_phone="{{ $ambulance->driver_phone }}"
                                               data-is_available="{{ $ambulance->is_available }}"
                                               data-notes="{{ $ambulance->notes }}"
                                               class="fa fa-edit">
                                            </a>
                                            <a href="#Delete_Section"
                                                class="modal-effect" style="padding-right: 10px"
                                               data-bs-toggle="modal"
                                               data-bs-placement="top"
                                               data-bs-effect="effect-super-scaled"
                                               data-id="{{ $ambulance->id }}"
                                               data-name="{{ $ambulance->name }}"
                                               data-description="{{ $ambulance->description }}"
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
    <div class="modal fade" id="AddAmbulances">
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
                            <form class="form-horizontal" id="DataAmbulance">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="car_number" name="car_number" placeholder="رقم الوحة">
                                            <span class="text-danger error-message" id="car_number_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="car_model" name="car_model" placeholder="موديل السيارة">
                                            <span class="text-danger error-message" id="car_model_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="car_year_made" name="car_year_made" placeholder="سنة الصنع">
                                            <span class="text-danger error-message" id="car_year_made_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <label for="">نوع المركبة</label>
                                            <select  class="form-control" id="car_type" name="car_type">
                                                <option value="1">مملكوكة</option>
                                                <option value="0">ايجار</option>
                                            </select>
                                            <span class="text-danger error-message" id="car_type_error"></span>
                                        </div>
                                    </div>


                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <label for="">حالة السيارة</label>
                                            <select  class="form-control" id="is_available" name="is_available">
                                                <option value="1">مفعلة</option>
                                                <option value="0">غير مفعلة</option>
                                            </select>
                                            <span class="text-danger error-message" id="car_type_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="driver_name" name="driver_name" placeholder="اسم السائق">
                                            <span class="text-danger error-message" id="driver_name_error"></span>
                                        </div>
                                    </div>


                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="driver_license_number" name="driver_license_number" placeholder="رقم الرخصة">
                                            <span class="text-danger error-message" id="driver_license_number_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="driver_phone" name="driver_phone" placeholder="رقم الهاتف">
                                            <span class="text-danger error-message" id="driver_phone_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="notes" name="notes" placeholder="ملاحظات">
                                            <span class="text-danger error-message" id="notes_error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-info" type="button" id="SaveAmbulance">حفظ البيانات</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">إغلاق</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="EditDataAmbulances">
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
                            <form class="form-horizontal" id="EditUpdateDataAmbulances">
                                @csrf
                                <input type="hidden" id="id" name="id" >
                                <div class="row">
                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="car_number" name="car_number" placeholder="رقم الوحة">
                                            <span class="text-danger error-message" id="car_number_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="car_model" name="car_model" placeholder="موديل السيارة">
                                            <span class="text-danger error-message" id="car_model_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="car_year_made" name="car_year_made" placeholder="سنة الصنع">
                                            <span class="text-danger error-message" id="car_year_made_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <label for="">نوع المركبة</label>
                                            <select  class="form-control" id="car_type" name="car_type">
                                                <option value="1">مملكوكة</option>
                                                <option value="0">ايجار</option>
                                            </select>
                                            <span class="text-danger error-message" id="car_type_error"></span>
                                        </div>
                                    </div>


                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <label for="">حالة السيارة</label>
                                            <select  class="form-control" id="is_available" name="is_available">
                                                <option value="1">مفعلة</option>
                                                <option value="0">غير مفعلة</option>
                                            </select>
                                            <span class="text-danger error-message" id="car_type_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="driver_name" name="driver_name" placeholder="اسم السائق">
                                            <span class="text-danger error-message" id="driver_name_error"></span>
                                        </div>
                                    </div>


                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="driver_license_number" name="driver_license_number" placeholder="رقم الرخصة">
                                            <span class="text-danger error-message" id="driver_license_number_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="driver_phone" name="driver_phone" placeholder="رقم الهاتف">
                                            <span class="text-danger error-message" id="driver_phone_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="notes" name="notes" placeholder="ملاحظات">
                                            <span class="text-danger error-message" id="notes_error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-info" type="button" id="EditSaveAmbulances">حفظ البيانات</button>
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
                        <input class="form-control" name="description" id="description" readonly type="text">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">تاكيد</button>
                        <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close" >الغاء</button>
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
    <script>
        $(document).ready(function() {
            $('#SaveAmbulance').on('click', function() {
                $('.error-message').html('');
                var formData = new FormData($('#DataAmbulance')[0]);
                $.ajax({
                    url: '{{ route('Ambulance.store') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#DataAmbulance')[0].reset();
                        $('#AddAmbulances').modal('hide');
                        showNotification('success', 'تم حفظ بيانات بنجاح');
                        setTimeout(function() {
                            window.location.href = '/Ambulance';
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
        $('#EditDataAmbulances').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var iteration = button.data('iteration')
            var car_number = button.data('car_number')
            var car_model = button.data('car_model')
            var car_year_made = button.data('car_year_made')
            var car_type = button.data('car_type')
            var driver_name = button.data('driver_name')
            var driver_license_number = button.data('driver_license_number')
            var driver_phone = button.data('driver_phone')
            var is_available = button.data('is_available')
            var notes = button.data('notes')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #iteration').val(iteration);
            modal.find('.modal-body #car_number').val(car_number);
            modal.find('.modal-body #car_model').val(car_model);
            modal.find('.modal-body #car_year_made').val(car_year_made);
            modal.find('.modal-body #car_type').val(car_type);
            modal.find('.modal-body #driver_name').val(driver_name);
            modal.find('.modal-body #driver_license_number').val(driver_license_number);
            modal.find('.modal-body #driver_phone').val(driver_phone);
            modal.find('.modal-body #is_available').val(is_available);
            modal.find('.modal-body #notes').val(notes);
        })
    </script>


    <script>
        $(document).ready(function() {
            $('#EditSaveAmbulances').on('click', function() {
                $('.error-message').html('');
                var formData = new FormData($('#EditUpdateDataAmbulances')[0]);
                $.ajax({
                    url: '{{ route('Ambulances.update') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#EditDataAmbulances').modal('hide');
                        $('#EditUpdateDataAmbulances')[0].reset();
                        showNotification('success', 'تم تحديث  بيانات بنجاح');
                        setTimeout(function() {
                            window.location.href = '/Ambulance';
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
            var description = button.data('description')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #description').val(description);
        })
    </script>


@endsection
