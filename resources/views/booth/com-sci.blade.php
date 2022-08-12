@extends('layouts.base',['title'=>"แขนงวิชาวิทยาการคอมพิวเตอร์"])

@section('content')
    <section id="booth">
        <div class="container-fluid">
            <header>
                <h1>
                    แขนงวิชาวิทยาการคอมพิวเตอร์
                    <span>
                    ระดับปริญาตรี
                </span>
                </h1>
            </header>
            <div class="row justify-content-center" id="booth-list">
                <div class="col-12 col-lg-6">
                    <img src="{{asset('images/booth/com-sci/computer.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{asset('images/booth/com-sci/data.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{asset('images/booth/com-sci/it.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    @include('teacher.list')
@endsection
