<div class="booth-wrapper" id="{{$booth_id}}">
    <div class="booth-detail">
        @if($major->getFirstMedia('img'))
        <img src="{{$major->getFirstMedia('img')->getFullUrl()}}" alt="{{$department->name}} {{$major->name}}" class="w-100">
        @endif

        @include('booth.detail._btn')
    </div>
</div>
