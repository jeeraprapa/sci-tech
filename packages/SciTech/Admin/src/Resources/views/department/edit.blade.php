@extends('admin::layouts.default')

@section('page_title')
    แก้ไขข้อมูลแขนงวิชา
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">แก้ไขข้อมูลแขนงวิชา</h3>
                </div>
                <div class="card-body p-3">
                    {!! Form::model($department, ['route' => ['admin.department.update', 'id' => $department->id], 'method' => 'put', 'autocomplete' => 'off']) !!}
                    @include('admin::department.partials.general')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop
