@extends('layouts.base',['title'=>$department->name])

@push('css')
    <link href="{{asset('vendor/lightgallery/dist/css/lightgallery.css')}}" rel="stylesheet">
@endpush

@section('content')
    <section id="booth">
        <div class="container-fluid">
            <header>
                <h1>
                    {{$department->name}}
                    <span>
                    {{$department->type}}
                </span>
                </h1>
            </header>
            <div class="row justify-content-center" id="booth-list">
                @include('booth._item1')
            </div>
        </div>
    </section>
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
            // lightGallery(document.getElementById('lightgallery'))
            lightGallery(document.getElementById('video'));
        });
        // function showGallery(page){
        //     $("#lightgallery div:nth-child(" + page+ ")").trigger("click");
        // }

    </script>
@endpush
