@extends('layouts.base',['title'=>$department->name])

@section('content')
    <section id="booth">
        <div class="container-fluid">
            @include('booth._header')
            <div class="row justify-content-center" id="booth-list">
                @foreach($department->majors as $major)
                    <div class="col-12 col-lg-5 {{$major->booth_id}} px-5 mb-5">
                        <a href="{{route('booth.major',['department'=>$department->slug,'slug'=>$major->slug])}}">
                            @if($major->getFirstMedia('icon'))
                                <img src="{{$major->getFirstMedia('icon')->getFullUrl()}}" alt="{{$department->name}} {{$major->name}}"
                                     class="img-fluid">
                            @elseif($major->getFirstMedia('img'))
                                <img src="{{$major->getFirstMedia('img')->getFullUrl()}}" alt="{{$department->name}} {{$major->name}}"
                             class="img-fluid">
                            @endif
                        </a>
                        <div class="booth-click">
                            <img src="{{asset('images/click.png')}}" alt="icon">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @if(!$department->teachers->isEmpty())
        @include('teacher.list')
    @endif
@endsection
