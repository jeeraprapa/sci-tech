@extends('admin::layouts.default')

@section('page_title')
    สร้างข้อมูลอาจารย์
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">สร้างข้อมูลอาจารย์</h3>
                </div>
                <div class="card-body p-3">
                    {!! Form::open(['route' => 'admin.teacher.store', 'autocomplete' => 'off', 'id' => 'admin-form','files'=>true]) !!}
                    @include('admin::teacher.partials.general')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop
