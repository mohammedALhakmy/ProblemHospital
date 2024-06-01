@extends('Dashboard.layouts.app')

@section('styles')


@endsection

@section('content')

                    <div class="row row-sm mt-5">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table style="text-align: center" class="table text-md-nowrap" id="example1">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>تاريخ الفاتورة</th>
                                                <th >اسم الدكتور</th>
                                                <th>اسم الخدمة</th>
                                                <th >الاجمالي</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           @foreach($invoices as $invoice)
                                               <tr>
                                                   <td>{{$loop->iteration}}</td>
                                                   <td>{{$invoice->invoice_date}}</td>
                                                   <td>{{$invoice->doctor->name}}</td>
                                                   <td>{{$invoice->service->name}}</td>
                                                   <td>{{$invoice->total_with_tax}}</td>
                                               </tr>

                                           @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- bd -->
                            </div><!-- bd -->
                        </div>
                        <!--/div-->

                    @include('Dashboard.patients.add')

				</div>
@endsection
