@extends('layouts.base',['title'=>$department->name])

@section('content')
    <section id="booth">
        <div class="container-fluid">
            <header class="header">
                <h1>
                    {{$department->name}}
                    <span>
                    {{$department->type}}
                </span>
                </h1>
            </header>
            <div class="row justify-content-center" id="booth-list">
                @foreach($department->majors as $major)
                    <div class="col-12 col-lg-6 {{$major->booth_id}}">
                        <a href="{{route('booth.major',['department'=>$department->slug,'slug'=>$major->slug])}}">
                            @if($major->getFirstMedia('icon'))
                                <img src="{{$major->getFirstMedia('icon')->getFullUrl()}}" alt="{{$department->name}} {{$major->name}}"
                                     class="img-fluid">
                            @else
                                <img src="{{$major->getFirstMedia('img')->getFullUrl()}}" alt="{{$department->name}} {{$major->name}}"
                             class="img-fluid">
                            @endif
                        </a>
                        <div class="poster" id="poster1">
                            <img src="../images/poster/poster1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="poster" id="poster2">
                            <img src="../images/poster/poster2.jpg" alt="" class="img-fluid">
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
