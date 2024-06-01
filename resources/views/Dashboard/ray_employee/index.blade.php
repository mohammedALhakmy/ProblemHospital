@extends('Dashboard.layouts.app')

@section('styles')

@endsection

@section('content')

      <div class="row row-sm mt-5">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <div class="d-flex justify-content-between">

                                        <button type="button"
                                               data-bs-toggle="modal"
                                               data-bs-placement="top"
                                               data-bs-effect="effect-super-scaled" class="modal-effect btn btn-primary" href="#add">
                                           اضافة موظف جديد
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table style="text-align: center" class="table text-md-nowrap" id="example1">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>الاسم</th>
                                                <th >البريد الالكتروني</th>
                                                <th>تاريخ الاضافة</th>
                                                <th >العمليات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           @foreach($ray_employees as $ray_employee)
                                               <tr>
                                                   <td>{{$loop->iteration}}</td>
                                                   <td>{{$ray_employee->name}}</td>
                                                   <td>{{ $ray_employee->email }}</td>
                                                   <td>{{ $ray_employee->created_at->diffForHumans() }}</td>
                                                   <td>
                                                       <a data-bs-toggle="modal" data-bs-placement="top" data-bs-effect="effect-super-scaled" class="modal-effect btn btn-primary" href="#edit{{$ray_employee->id}}"><i class="fa fa-edit"></i></a>
                                                       <a class="modal-effect btn btn-sm btn-danger" data-bs-placement="top" data-bs-effect="effect-scale"  data-bs-toggle="modal" href="#delete{{$ray_employee->id}}"><i class="fa fa-trash"></i></a>
                                                   </td>
                                               </tr>

                                               @include('Dashboard.ray_employee.edit')
                                               @include('Dashboard.ray_employee.delete')

                                           @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- bd -->
                            </div><!-- bd -->
                        </div>
                        <!--/div-->

                    @include('Dashboard.ray_employee.add')
                    <!-- /row -->

				</div>
				<!-- row closed -->

			<!-- Container closed -->

@endsection
