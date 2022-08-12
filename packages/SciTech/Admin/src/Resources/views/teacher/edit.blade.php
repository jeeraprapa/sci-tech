@extends('admin::layouts.default')

@section('page_title')
    แก้ไขข้อมูลอาจารย์
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">แก้ไขข้อมูลอาจารย์</h3>
                </div>
                <div class="card-body p-3">
                    {!! Form::model($teacher, ['route' => ['admin.teacher.update', 'id' => $teacher->id], 'method' => 'put', 'autocomplete' => 'off','files'=>true]) !!}
                    @include('admin::teacher.partials.general')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop
