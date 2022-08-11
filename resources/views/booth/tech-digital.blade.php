@extends('layouts.base',['title'=>"แขนงวิชาเทคโนโลยีดิจิทัล"])

@section('content')
    <section id="booth">
        <div class="container-fluid">
            <header>
                <h1>
                    แขนงวิชาเทคโนโลยีดิจิทัล
                    <span>
                    ระดับปริญาโท
                </span>
                </h1>
            </header>
            <div class="row justify-content-center" id="booth-list">
                <div class="col-12 col-lg-6">
                    <img src="{{asset('images/booth/tech-digital/digital-sci.png')}}" alt=""
                         class="img-fluid">
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{asset('images/booth/tech-digital/it.png')}}" alt=""
                         class="img-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection
