
@extends('Dashboard.layouts.app')

@section('styles')

@endsection

@section('content')

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
                                <th>اسم المريض</th>
                                <th>اسم الدكتور</th>
                                <th>المطلوب</th>
                                <th>حالة الفاتورة</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($invoices as $invoice)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $invoice->created_at }}</td>
                                    <td>
                                        <a href="{{route('view_rays',$invoice->id)}}">
                                            {{ $invoice->Patient->name }}
</a>
                                    </td>
                                    <td>{{ $invoice->doctor->name }}</td>
                                    <td>{{ $invoice->description }}</td>
                                    <td>
                                        @if($invoice->case === 0)
                                            <span class="text-danger">تحت الاجراء</span>
                                        @else
                                            <span class="text-success">مكتملة</span>
                                        @endif
                                    </td>

                                    <td>
                                            <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-outline-primary btn-sm" data-toggle="dropdown" type="button">{{trans('doctors.Processes')}}<i class="fas fa-caret-down mr-1"></i></button>

                                                <a href="{{route('invoices_ray_employee.edit',$invoice->id)}}"><i class="text-primary fa fa-stethoscope"></i>&nbsp;&nbsp;اضافة تشخيص </a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- bd -->
            </div><!-- bd -->
        </div>
        <!--/div-->

        <!-- /row -->
    </div>

@endsection
