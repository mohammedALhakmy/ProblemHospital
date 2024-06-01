@extends('Dashboard.layouts.app')

@section('styles')

@endsection

@section('content')
     <div class="row">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="vtimeline">
                        @foreach($patient_records as $patient_record)

                            <div
                                class="timeline-wrapper {{ $loop->first ? '' : 'timeline-inverted' }} timeline-wrapper-primary">
                                <div class="timeline-badge"><i class="las la-check-circle"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h6 class="timeline-title">Art Ramadani posted a status update</h6>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{$patient_record->diagnosis}}</p>
                                    </div>
                                    <div class="timeline-footer d-flex align-items-center flex-wrap">
                                        <i class="fas fa-user-md"></i>&nbsp;
                                        <span>{{$patient_record->Doctor->name}}</span>
                                        <span class="mr-auto"><i class="fe fe-calendar text-muted mr-1"></i>{{$patient_record->date}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
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
