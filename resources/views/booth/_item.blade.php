<div class="col-12 col-lg-8" id="{{$booth_id}}">
    <img src="{{$major->getMedia('img')->first()->getFullUrl()}}" alt="{{$department->name}} {{$major->name}}" class="w-100">

    <div class="booth-name">
        {{$major->name}}
    </div>

    @if($major->getFirstMedia('thumbnail'))
        <div id="thumbnail">
            <img src="{{$major->getFirstMedia('thumbnail')->getFullUrl()}}" alt="{{$department->name}} {{$major->name}}">
        </div>
    @endif
    @include('booth._btn')
</div>

