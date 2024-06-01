@extends('Dashboard.layouts.app')

@section('styles')


@endsection

@section('content')

       <div class="row row-sm">
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
                                                <th>اسم دكتور الاشعة</th>
                                                <th>ملاحظة دكتور الاشعة</th>
                                                <th>العمليات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           @foreach($rays as $ray)
                                               <tr>
                                                   <td>{{$loop->iteration}}</td>
                                                   <td>{{$ray->description}}</td>
                                                   <td>{{$ray->doctor->name}}</td>
                                                   <td>{{$ray->employee->name}}</td>
                                                   <td>{{$ray->description_employee}}</td>
                                                   <td>
                                                       @if($ray->employee_id !== null)
                                                       <a class="btn btn-primary btn-sm" href="{{route('view_rays',$ray->id)}}" role="button">عرض الاشعة</a>
                                                       @endif
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

                    @include('Dashboard.patients.add')
                    <!-- /row -->

				</div>
				<!-- row closed -->

@endsection
