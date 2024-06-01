@extends('Dashboard.layouts.app')

@section('styles')


@endsection

@section('content')

  <div class="row row-sm  mt-5">
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
                                                <th>تاريخ الدفع</th>
                                                <th >المبلغ</th>
                                                <th>البيان</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           @foreach($payments as $payment)
                                               <tr>
                                                   <td>{{$loop->iteration}}</td>
                                                   <td>{{$payment->date}}</td>
                                                   <td>{{$payment->amount}}</td>
                                                   <td>{{$payment->description}}</td>
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
                    <!-- /row -->

				</div>
@endsection
