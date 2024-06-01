@extends('Dashboard.layouts.app')

@section('styles')

@endsection

@section('content')

  		<!-- row -->
                    <!-- row opened -->
                  <div class="row row-sm mt-5">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <div class="d-flex justify-content-between">
                                        <a href="{{route('Payment.create')}}" class="btn btn-primary" role="button"
                                           aria-pressed="true">اضافة سند جديد</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-md-nowrap" id="example1">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>اسم المريض</th>
                                                <th>المبلغ</th>
                                                <th>البيان</th>
                                                <th>تاريخ الاضافة</th>
                                                <th>العمليات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           @foreach($payments as $payment)
                                               <tr>
                                                   <td>{{$loop->iteration}}</td>
                                                   <td>{{ $payment->patients->name }}</td>
                                                   <td>{{ number_format($payment->amount, 2) }}</td>
                                                   <td>{{ \Str::limit($payment->description, 50) }}</td>
                                                   <td>{{ $payment->created_at->diffForHumans() }}</td>
                                                   <td>
                                                       <a href="{{route('Payment.edit',$payment->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                       <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"  data-toggle="modal" href="#delete{{$payment->id}}"><i class="las la-trash"></i></a>
                                                       <a href="{{route('Payment.show',$payment->id)}}" class="btn btn-primary btn-sm" target="_blank" title="طباعه سند صرف"><i class="fas fa-print"></i></a>

                                                   </td>
                                               </tr>
                                           @include('Dashboard.Payment.delete')
                                           @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- bd -->
                            </div><!-- bd -->
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
            $('#SaveDoctor').on('click', function() {
                $('.error-message').html('');
                var formData = new FormData($('#DataDoctor')[0]);
                $.ajax({
                    url: '{{ route('Doctor.store') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#DataDoctor')[0].reset();
                        $('#AddDoctor').modal('hide');
                        showNotification('success', 'تم حفظ بيانات بنجاح');
                        setTimeout(function() {
                            window.location.href = '/Doctor';
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
        $('#EditEditDataSection').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var name = button.data('name');
            var filenameOld = button.data('filename');
            var email = button.data('email');
            var phone = button.data('phone');
            var price = button.data('price');
            var section_id = button.data('section_id');

            var modal = $(this);
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #filenameOld').val(filenameOld);
            modal.find('.modal-body #phone').val(phone);
            modal.find('.modal-body #email').val(email);
            modal.find('.modal-body #price').val(price);
            modal.find('.modal-body #section_id').val(section_id);

            var appointmentD = button.data('appointments');
            var hoursArray = appointmentD.split(',');
            var selectField = modal.find('.modal-body #appointmentD2').val(hoursArray);
            selectField.trigger('change');
        });
    </script>



    <script>
        $(document).ready(function() {
            $('#EditEditSaveSection').on('click', function() {
                $('.error-message').html('');
                var formData = new FormData($('#EditEditUpdateDataSection')[0]);
                $.ajax({
                    url: '{{ route('Doctors.update') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#EditEditDataSection').modal('hide');
                        $('#EditEditUpdateDataSection')[0].reset();
                        showNotification('success', 'تم تحديث  بيانات بنجاح');
                        setTimeout(function() {
                            window.location.href = '/Doctor';
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
