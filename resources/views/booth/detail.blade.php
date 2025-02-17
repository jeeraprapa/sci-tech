@extends('layouts.base',['title'=>$major->name])

@push('css')
    <link href="{{asset('vendor/lightgallery/dist/css/lightgallery.css')}}" rel="stylesheet">
@endpush

@section('content')
    <section id="booth">
        <div class="container-fluid">
            @if($department->majors->count() > 1)
                @include('booth.detail._header')
            @else
                @include('booth._header')
            @endif

                @if($department->slug == "computer-science")
                    @include('booth.detail._item',['booth_id'=>'booth-item1'])
                @elseif($department->slug == "digital-technology")
                    @include('booth.detail._item',['booth_id'=>'booth-item2'])
                @elseif($department->slug == "industrial-technology")
                    @include('booth.detail._item',['booth_id'=>'booth-item4'])
                @else
                    @include('booth.detail._item',['booth_id'=>'booth-item3'])
                @endif

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
                        {!! $major->detail !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade modal-blog" id="modal-name" tabindex="-1" aria-labelledby="modal-name" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="text-title">
                        <div class="title">
                            <div class=" titletext" id="exampleModalLabel">ชื่อปริญญาและสาขาวิชา</div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>

                    <div class="text-detail">
                        {!! $major->full_name !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade modal-blog" id="modal-video" tabindex="-1" aria-labelledby="modal-video" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="text-title">
                        <div class="title">
                            <div class=" titletext" id="exampleModalLabel">
                                @if(!$major->video_title)
                                    Video แนะนำหลักสูตร
                                @else
                                    {{$major->video_title}}
                                @endif
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>

                    <div class="text-detail">
                        {!! $major->video !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{asset('vendor/lightgallery/js/lightgallery.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/js/lg-fullscreen.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/js/lg-zoom.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/js/lg-rotate.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/js/lg-video.js')}}"></script>
    <script>
        $(document).ready(function (){
            lightGallery(document.getElementById('lightgallery'))
            // lightGallery(document.getElementById('video'));
        });
        function showGallery(){
            $("#lightgallery div:nth-child(1)").trigger("click");
        }

    </script>
@endpush
