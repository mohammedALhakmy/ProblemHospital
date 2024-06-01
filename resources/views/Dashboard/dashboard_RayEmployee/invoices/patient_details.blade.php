
@extends('Dashboard.layouts.app')

@section('styles')

@endsection

@section('content')

    <div class="form-group">
        <label for="exampleFormControlTextarea1">ملاحظات دكتور الاشعة</label>
        <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="3">{{$rays->description_employee}}</textarea>
    </div>

    <!-- Gallery -->
    <div class="demo-gallery">
        <ul id="lightgallery" class="list-unstyled row row-sm pr-0">

            @foreach($rays->images as $image)

                <li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('Dashboard/img/Rays/'.$image->filename)}}" data-src="{{URL::asset('Dashboard/img/Rays/'.$image->filename)}}">
                    <a href="#">
                        <img width="50px" height="350px" class="img-responsive" src="{{URL::asset('Dashboard/img/Rays/'.$image->filename)}}" alt="NoImg">
                    </a>
                </li>
            @endforeach
        </ul>
        <!-- /Gallery -->

    </div>
    @endsection
