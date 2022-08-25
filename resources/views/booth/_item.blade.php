<div class="col-12 col-lg-8" id="{{$booth_id}}">
    <img src="{{$major->getMedia('img')->first()->getFullUrl()}}" alt="{{$department->name}} {{$major->name}}" class="w-100">
    @if($major->getMedia('thumbnail')->count())
        <div id="thumbnail">
            <img src="{{$major->getMedia('thumbnail')->first()->getFullUrl()}}" alt="{{$department->name}} {{$major->name}}">
        </div>
    @endif
    @include('booth._btn')
</div>

