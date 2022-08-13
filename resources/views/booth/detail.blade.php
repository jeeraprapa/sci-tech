@extends('layouts.base',['title'=>$department->name])

@push('css')
    <link href="{{asset('vendor/lightgallery/dist/css/lightgallery.css')}}" rel="stylesheet">
@endpush

@section('content')
    <section id="booth">
        <div class="container-fluid">
            <header class="header-booth-detail">
                <h1>
                    {{$department->type}}
                </h1>
                <nav>
                    <a href="{{route('booth.major',['department'=>$department->slug,'slug'=>$major->slug])}}" class="{{$next ? '' : 'border-right'}}">
                        <h2>{{$major->name}}</h2>
                    </a>
                    @if($next)
                        <a href="{{route('booth.major',['department'=>$department->slug,'slug'=>$next->slug])}}">
                            <h2>{{$next->name}}</h2>
                        </a>
                    @endif
                </nav>
            </header>

            <div class="row justify-content-center" id="booth-list">
                @if($department->slug == "computer-science")
                    @include('booth._item',['booth_id'=>'booth-item1'])
                @elseif($department->slug == "digital-technology")
                    @include('booth._item',['booth_id'=>'booth-item2'])
                @elseif($department->slug == "industrial-technology")
                    @include('booth._item',['booth_id'=>'booth-item3'])
                @else
                    @include('booth._item',['booth_id'=>'booth-item4'])
                @endif
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade modal-blog" id="modal-course" tabindex="-1" aria-labelledby="modal-course" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="text-title">
                        <div class="title">
                            <div class=" titletext" id="exampleModalLabel">หลักสูตร</div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>

                    <div class="text-detail">
                        <h3 class="h3 pb-3">{{$major->name}}</h3>
                        {!! $major->detail !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/js/lightgallery.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/js/lg-fullscreen.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/js/lg-zoom.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/js/lg-rotate.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/js/lg-video.js')}}"></script>
    <script>
        $(document).ready(function (){
            lightGallery(document.getElementById('posters'))
            lightGallery(document.getElementById('video'));
        });
        // function showGallery(page){
        //     $("#lightgallery div:nth-child(" + page+ ")").trigger("click");
        // }

    </script>
@endpush
