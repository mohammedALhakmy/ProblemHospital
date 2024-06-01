@extends('Dashboard.layouts.app')

@section('styles')

@endsection

@section('content')
    <!-- row opened -->
                    <div class="row row-sm mt-5">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-md-nowrap" id="example1">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>تاريخ الفاتورة</th>
                                                <th>اسم الخدمة</th>
                                                <th>اسم المريض</th>
                                                <th>سعر الخدمة</th>
                                                <th>قيمة الخصم</th>
                                                <th>نسبة الضريبة</th>
                                                <th>قيمة الضريبة</th>
                                                <th>الاجمالي مع الضريبة</th>
                                                <th>حالة الفاتورة</th>
                                                <th>العمليات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           @foreach($invoices as $invoice)
                                               <tr>
                                                   <td>{{ $loop->iteration}}</td>
                                                   <td>{{ $invoice->invoice_date }}</td>
                                                   <td>{{ $invoice->Service->name ?? $invoice->Group->name }}</td>
                                                   <td>
                                                       <a href="{{route('Patien_Detail',$invoice->patient_id)}}">{{ $invoice->Patient->name }}</a>
                                                   </td>
                                                   <td>{{ number_format($invoice->price, 2) }}</td>
                                                   <td>{{ number_format($invoice->discount_value, 2) }}</td>
                                                   <td>{{ $invoice->tax_rate }}%</td>
                                                   <td>{{ number_format($invoice->tax_value, 2) }}</td>
                                                   <td>{{ number_format($invoice->total_with_tax, 2) }}</td>
                                                   <td>
                                                      @if($invoice->invoice_status == "1")
                                                           <span class="bg-danger">تحت الاجراء</span>
                                                      @elseif($invoice->invoice_status == 2)
                                                           <span class="bg-warning">مراجعة</span>
                                                       @else
                                                          <span class="bg-success">مكتملة</span>
                                                       @endif
                                                   </td>

                                                   <td>
                                                   <div class="btn-group ms-2 mt-2 mb-2">
                                                        <div class="dropdown">
                                                            <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-rounded btn-primary" data-bs-toggle="dropdown" id="dropdownMenuButton4" type="button">Processes <i class="fas fa-caret-down ms-1"></i></button>
                                                           <div class="dropdown-menu tx-13">
                                                               <a class="modal-effect" data-effect="effect-scale" data-bs-toggle="modal" data-bs-placement="top"  data-bs-effect="effect-super-scaled"  data-toggle="modal" href="#add_diagnosis{{$invoice->id}}"><i class="text-primary fa fa-stethoscope">
                                                                   </i>&nbsp;&nbsp;اضافة تشخيص </a><br>
                                                               <a class="modal-effect" data-effect="effect-scale" data-bs-toggle="modal" data-bs-placement="top"  data-bs-effect="effect-super-scaled"  data-toggle="modal" href="#add_review{{$invoice->id}}"><i class="text-warning far fa-file-alt"></i>&nbsp;&nbsp;اضافة مراجعة </a>
                                                               <br>
                                                               <a class="modal-effect" data-effect="effect-scale" data-bs-toggle="modal" data-bs-placement="top"  data-bs-effect="effect-super-scaled"  data-toggle="modal" href="#xray_conversion{{$invoice->id}}"><i class="text-primary fas fa-x-ray"></i>&nbsp;&nbsp;تحويل الي الاشعة </a>
                                                               <br>
                                                                <a class="modal-effect" data-effect="effect-scale" data-bs-toggle="modal" data-bs-placement="top"  data-bs-effect="effect-super-scaled"  data-toggle="modal" href="#laboratorie_conversion{{$invoice->id}}"><i class="text-warning fas fa-syringe"></i>&nbsp;&nbsp;تحويل الي المختبر </a>
                                                               <br>
                                                               <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete"><i class="text-danger  ti-trash"></i>&nbsp;&nbsp;حذف البيانات</a>
                                                           </div>
                                                        </div>
										    </div>
                                                   </td>
                                               </tr>
                                               @include('Dashboard.Doctor.Invoice.add_diagnosis')
                                               @include('Dashboard.Doctor.Invoice.add_review')
                                               @include('Dashboard.Doctor.Invoice.xray_conversion')
                                               @include('Dashboard.Doctor.Invoice.Laboratorie_conversion')
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
@endsection
