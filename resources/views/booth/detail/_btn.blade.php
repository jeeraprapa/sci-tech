@if($major->video)
    <div id="video" data-bs-toggle="modal" data-bs-target="#modal-video">
        <img src="{{asset('images/booth/bt-vdo.png')}}" alt="">
    </div>
@endif

@if($major->detail)
    <div id="course" data-bs-toggle="modal" data-bs-target="#modal-course">
        <img src="{{asset('images/booth/bt-course.png')}}" alt="">
    </div>
@endif

@if($major->full_name)
    <div id="name" data-bs-toggle="modal" data-bs-target="#modal-name">
        <img src="{{asset('images/booth/bt-major.png')}}" alt="">
    </div>
@endif

@if($major->getMedia('posters')->count())
    <div id="posters" onclick="showGallery()">
        <img src="{{asset('images/booth/bt-news.png')}}" alt="">
    </div>
    <div id="lightgallery" class="d-none">
        @foreach($major->getMedia('posters') as $poster)
            <div data-src="{{$poster->getFullUrl()}}" alt="{{$major->name}}"></div>
        @endforeach
    </div>
@endif
