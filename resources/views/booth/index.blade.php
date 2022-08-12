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
                @if($department->slug == "computer-science")
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('images/booth/com-sci/computer.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('images/booth/com-sci/data.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('images/booth/com-sci/it.png')}}" alt="" class="img-fluid">
                    </div>
                @elseif($department->slug == "digital-technology")
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('images/booth/tech-digital/digital-sci.png')}}" alt=""
                             class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('images/booth/tech-digital/it.png')}}" alt=""
                             class="img-fluid">
                    </div>
                @elseif($department->slug == "industrial-technology")
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('images/booth/manage-engineer.png')}}" alt=""
                             class="img-fluid">
                    </div>
                @elseif($department->slug == "engineer-management-technology")
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('images/booth/ti/manage.png')}}" alt=""
                             class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('images/booth/ti/manufacturing.png')}}" alt=""
                             class="img-fluid">
                    </div>
                @endif
            </div>
        </div>
    </section>
    @if(!$department->teachers->isEmpty())
        @include('teacher.list')
    @endif
@endsection
