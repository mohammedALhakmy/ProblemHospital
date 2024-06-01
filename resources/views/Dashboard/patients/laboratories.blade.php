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
                                                <th>المطلوب</th>
                                                <th >اسم الدكتور</th>
                                                <th>اسم دكتور المختبر</th>
                                                <th>ملاحظة المختبر</th>
                                                <th>العمليات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           @foreach($laboratories as $laboratorie)
                                               <tr>
                                                   <td>{{$loop->iteration}}</td>
                                                   <td>{{$laboratorie->description}}</td>
                                                   <td>{{$laboratorie->doctor->name}}</td>
                                                   <td>{{$laboratorie->employee->name}}</td>
                                                   <td>{{$laboratorie->description_employee}}</td>
                                                   <td>
                                                       @if($laboratorie->employee_id !== null)
                                                           <a class="btn btn-primary btn-sm" href="{{route('laboratories.view',$laboratorie->id)}}" role="button">عرض التحليل</a>
                                                       @endif                                                   </td>
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
