@extends('Dashboard.layouts.app')

@section('styles')

@endsection
@section('content')
         <!-- row opened -->
                    <div class="row row-sm mt-5">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <div class="d-flex justify-content-between">
                                        <button href="#add" data-bs-placement="top"  data-bs-effect="effect-super-scaled"
                       data-bs-toggle="modal"  class="btn btn-success btn-sm">
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
                                           @foreach($laboratorie_employees as $laboratorie_employee)
                                               <tr>
                                                   <td>{{$loop->iteration}}</td>
                                                   <td>{{$laboratorie_employee->name}}</td>
                                                   <td>{{ $laboratorie_employee->email }}</td>
                                                   <td>{{ $laboratorie_employee->created_at->diffForHumans() }}</td>
                                                   <td>
                                                       <a data-bs-placement="top"  data-bs-effect="effect-super-scaled"
                       data-bs-toggle="modal"  class="btn btn-success btn-sm" href="#edit{{$laboratorie_employee->id}}"><i class="las la-pen"></i></a>
                                                       <a data-bs-placement="top"  data-bs-effect="effect-super-scaled"
                       data-bs-toggle="modal"  class="btn btn-danger btn-sm"  href="#delete{{$laboratorie_employee->id}}"><i class="las la-trash"></i></a>
                                                   </td>
                                               </tr>

                                               @include('Dashboard.laboratorie_employee.edit')
                                               @include('Dashboard.laboratorie_employee.delete')

                                           @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- bd -->
                            </div><!-- bd -->
                        </div>
                        <!--/div-->

                    @include('Dashboard.laboratorie_employee.add')
                    <!-- /row -->

				</div>
@endsection
