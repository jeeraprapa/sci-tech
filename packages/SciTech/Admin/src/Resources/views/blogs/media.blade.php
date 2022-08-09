@extends('admin::layouts.default')

@section('page_title')
    สร้างข้อมูลรูปภาพของบล็อก
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">สร้างข้อมูลรูปภาพของบล็อก</h3>
                </div>
                <div class="card-body p-3">
                    {!! Form::open(['route' => ['admin.blog.media.store', 'blog' => $blog->id], 'autocomplete' => 'off', 'id' => 'gallery', 'class' => 'dropzone']) !!}
                        <div class="dz-message">
                            ลากไฟล์หรือคลิกเพื่อเลือกไฟล์<br>
                            <span class="note">( ขนาดไฟล์ห้ามใหญ่กว่า 2MB และรองรับไฟล์นามสกุล .jpg .png )</span>
                        </div>
                    {!! Form::close() !!}

                    <ul class="upload-preview">
                        <div class="overflow-lists">
                            @foreach($blog->getMedia('images') as $mediaItem)
                                <li class="dz-preview">
                                    <div class="dz-image">
                                        <img data-dz-thumbnail
                                             src="{{ $mediaItem->getFullUrl() }}"
                                             width="140" class="img-thumbnail">
                                    </div>
                                    <div class="dz-action">
                                        @if(!$mediaItem->hasCustomProperty('thumbnail'))
                                            <a class="dz-thumbnail" href="{{ route('admin.blog.media.thumbnail', ['blog' => $blog, 'id' => $mediaItem->id]) }}">ตั้งเป็นรูปตัวอย่าง</a>
                                        @endif

                                        <a class="dz-remove" href="{{ route('admin.blog.media.destroy', ['blog' => $blog, 'id' => $mediaItem->id]) }}" data-dz-remove>ลบ</a>
                                    </div>
                                </li>
                            @endforeach
                        </div>
                    </ul>

                    <div id="upload-template">
                        <li class="dz-preview">
                            <div class="dz-image">
                                <img data-dz-thumbnail width="140" class="img-thumbnail">
                            </div>
                            <div class="dz-action"></div>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@push('scripts')
    <script>
        Dropzone.options.gallery = {
            uploadMultiple: false,
            parallelUploads: 100,
            maxFilesize: 2,
            dictFileTooBig: 'ขนาดไฟล์ห้ามใหญ่กว่า 2MB',
            previewsContainer: ".upload-preview > .overflow-lists",
            previewTemplate: document.querySelector('#upload-template').innerHTML,
            acceptedFiles: 'image/jpeg,image/jpg,image/png',
            init:function() {
                this.on("success", function(file, response) {
                    file.serverId = response.id;
                    $(".dz-preview:last-child").attr("id", file.serverId);
                    var el = file.previewElement.querySelector(".dz-action");

                    var url_thumbnail = "/admin/blogs/" + {{ $blog->id }} + "/media/" + response.id + "/thumbnail";
                    $(el).append('<a class="dz-thumbnail" href="' + url_thumbnail + '">ตั้งเป็นรูปตัวอย่าง</a>');

                    var url_delete = "/admin/blogs/" + {{ $blog->id }} + "/media/" + response.id + "/delete";
                    $(el).append('<a class="dz-remove" href="' + url_delete + '" data-dz-remove>ลบ</a>');
                });
                this.on("error", function(file, message) {
                    alert(message);
                    this.removeFile(file);
                });
            }
        };
    </script>
@endpush
