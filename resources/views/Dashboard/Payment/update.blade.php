
@extends('Dashboard.layouts.app')

@section('styles')
    <link href="{{asset('Dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection

@section('content')

      <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                        <form action="{{ route('Payment.update', 'test') }}" method="post" autocomplete="off">
                            {{ method_field('patch') }}
                            {{ csrf_field() }}
                        <div class="pd-30 pd-sm-40 bg-gray-200">

                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-1">
                                    <label>اسم المريض</label>
                                    <input class="form-control" value="{{$payment_accounts->id}}" name="id" type="hidden">

                                </div>
                                <div class="col-md-11 mg-t-5 mg-md-t-0">
                                    <select name="patient_id" class="form-control select2" required>
                                        @foreach($Patients as $Patient)
                                            <option value="{{$Patient->id}}" {{$payment_accounts->patient_id == $Patient->id ? 'selected':''}} >{{$Patient->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-1">
                                    <label>المبلغ</label>
                                </div>
                                <div class="col-md-11 mg-t-5 mg-md-t-0">
                                    <input class="form-control" value="{{$payment_accounts->amount}}" name="credit" type="number">
                                </div>
                            </div>

                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-1">
                                    <label>البيان</label>
                                </div>
                                <div class="col-md-11 mg-t-5 mg-md-t-0">
                                    <textarea class="form-control" name="description" rows="3">{{$payment_accounts->description}}</textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">{{ trans('Doctors.submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
