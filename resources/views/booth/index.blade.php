@extends('layouts.base',['title'=>$department->name])

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
                @foreach($department->majors as $major)
                    <div class="col-12 col-lg-6">
                        <a href="{{route('booth.major',['department'=>$department->slug,'slug'=>$major->slug])}}">
                            <img src="{{$major->getMedia('img')->first()->getFullUrl()}}" alt="{{$department->name}} {{$major->name}}"
                             class="img-fluid">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @if(!$department->teachers->isEmpty())
        @include('teacher.list')
    @endif
@endsection
