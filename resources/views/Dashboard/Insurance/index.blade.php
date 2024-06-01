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
                    <h3 class="card-title">{{__('message.Insurance')}}</h3>
                    <a href="#AddInsurance" data-bs-placement="top"  data-bs-effect="effect-super-scaled"
                       data-bs-toggle="modal"  class="btn btn-success btn-sm">{{__('message.add Insurance')}}</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table border-top-0 table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-5p border-bottom-0">#</th>
                                <th class="wd-25p border-bottom-0">اسم الشركة</th>
                                <th class="wd-40p border-bottom-0">كود الشركة</th>
                                <th class="wd-40p border-bottom-0">نسبة التحمل المريض</th>
                                <th class="wd-40p border-bottom-0">نسبة التحمل الشركة</th>
                                <th class="wd-40p border-bottom-0">الوصف</th>
                                <th class="wd-40p border-bottom-0">الحاله</th>
                                <th class="wd-10p border-bottom-0">التحكم</th>
                            </tr>
                            </thead>
                            @if(@isset($Insurances) && !@empty($Insurances))
                                <tbody>
                               @foreach($Insurances as $key =>$Insurance)
                                    <tr>
                                        <td>{{$key+=1}}</td>
                                        <td>{{$Insurance->name}}</td>
                                        <td>{{$Insurance->insurance_code}}</td>
                                        <td>{{$Insurance->discount_percentage}}</td>
                                        <td>{{$Insurance->Company_rate}}</td>
                                        <td>{{$Insurance->notes}}</td>
                                        <td>{{$Insurance->status}}</td>
                                        <td class="justify-content-between">
                                            <a href="#EditDataInsurance"
                                               data-bs-placement="top"
                                               data-bs-effect="effect-super-scaled"
                                               data-bs-toggle="modal"
                                               data-id="{{ $Insurance->id }}"
                                               data-name="{{ $Insurance->name }}"
                                               data-insurance_code="{{ $Insurance->insurance_code }}"
                                               data-discount_percentage="{{ $Insurance->discount_percentage }}"
                                               data-company_rate="{{ $Insurance->Company_rate }}"
                                               data-notes="{{ $Insurance->notes }}"
                                               class="fa fa-edit">
                                            </a>
                                            <a href="#Delete_Section"
                                                class="modal-effect" style="padding-right: 10px"
                                               data-bs-toggle="modal"
                                               data-bs-placement="top"
                                               data-bs-effect="effect-super-scaled"
                                               data-id="{{ $Insurance->id }}"
                                               data-name="{{ $Insurance->name }}"
                                               data-description="{{ $Insurance->description }}"
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
    <div class="modal fade" id="AddInsurance">
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
                            <form class="form-horizontal" id="DataInsurance">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder=" اسم الشركة ">
                                            <span class="text-danger error-message" id="name_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="notes" name="notes" placeholder=" وصف    ">
                                            <span class="text-danger error-message" id="notes_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="insurance_code" name="insurance_code" placeholder=" كود الشركة    ">
                                            <span class="text-danger error-message" id="insurance_code_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Company_rate" name="Company_rate" placeholder=" نسبة التحمل الشركة    ">
                                            <span class="text-danger error-message" id="Company_rate_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="discount_percentage" name="discount_percentage" placeholder=" نسبة التحمل المريض    ">
                                            <span class="text-danger error-message" id="discount_percentage_error"></span>
                                        </div>
                                    </div>
                                </div>


                                <div class="modal-footer">
                                    <button class="btn ripple btn-info" type="button" id="SaveInsurance">حفظ البيانات</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">إغلاق</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="EditDataInsurance">
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
                            <form class="form-horizontal" id="EditUpdateDataInsurance">
                                @csrf
                                <input type="hidden" id="id" name="id" >
                                <div class="row">
                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder=" اسم الشركة ">
                                            <span class="text-danger error-message" id="name_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="notes" name="notes" placeholder=" وصف    ">
                                            <span class="text-danger error-message" id="notes_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="insurance_code" name="insurance_code" placeholder=" كود الشركة    ">
                                            <span class="text-danger error-message" id="insurance_code_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Company_rate" name="Company_rate" placeholder=" نسبة التحمل الشركة    ">
                                            <span class="text-danger error-message" id="Company_rate_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="discount_percentage" name="discount_percentage" placeholder=" نسبة التحمل المريض    ">
                                            <span class="text-danger error-message" id="discount_percentage_error"></span>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 justify-content-end">
                                        <div class="checkbox">
                                            <div class="form-checkbox custom-control">
                                                <input type="checkbox" name="status" checked value="1" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                                                <label for="checkbox-2"  class="custom-control-label mt-1">الشركة مفعل</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-info" type="button" id="EditSaveInsurance">حفظ البيانات</button>
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
            $('#SaveInsurance').on('click', function() {
                $('.error-message').html('');
                var formData = new FormData($('#DataInsurance')[0]);
                $.ajax({
                    url: '{{ route('Insurance.store') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#DataInsurance')[0].reset();
                        $('#AddInsurance').modal('hide');
                        showNotification('success', 'تم حفظ بيانات بنجاح');
                        setTimeout(function() {
                            window.location.href = '/Insurance';
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
        $('#EditDataInsurance').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var notes = button.data('notes')
            var insurance_code = button.data('insurance_code')
            var Company_rate = button.data('company_rate')
            var discount_percentage = button.data('discount_percentage')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #notes').val(notes);
            modal.find('.modal-body #insurance_code').val(insurance_code);
            modal.find('.modal-body #Company_rate').val(Company_rate);
            modal.find('.modal-body #discount_percentage').val(discount_percentage);
        })
    </script>


    <script>
        $(document).ready(function() {
            $('#EditSaveInsurance').on('click', function() {
                $('.error-message').html('');
                var formData = new FormData($('#EditUpdateDataInsurance')[0]);
                $.ajax({
                    url: '{{ route('Insurances.update') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#EditDataInsurance').modal('hide');
                        $('#EditUpdateDataInsurance')[0].reset();
                        showNotification('success', 'تم تحديث  بيانات بنجاح');
                        setTimeout(function() {
                            window.location.href = '/Insurance';
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
