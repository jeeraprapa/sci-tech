@extends('layouts.base',['title'=>"แขนงวิชาเทคโนโลยีอุตสาหกรรม"])

@section('content')
    <section id="booth">
        <div class="container-fluid">
            <header>
                <h1>
                    แขนงวิชาเทคโนโลยีอุตสาหกรรม
                    <span>
                    ระดับปริญาตรี
                </span>
                </h1>
            </header>
            <div class="row justify-content-center" id="booth-list">
                <div class="col-12 col-lg-6">
                    <img src="{{asset('images/booth/manage-engineer.png')}}" alt=""
                         class="img-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection
