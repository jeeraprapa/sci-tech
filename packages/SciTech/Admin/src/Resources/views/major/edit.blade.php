@extends('admin::layouts.default')

@section('page_title')
    แก้ไขข้อมูลวิชาเอก
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">แก้ไขข้อมูลวิชาเอก</h3>
                </div>
                <div class="card-body p-3">
                    {!! Form::model($major, ['route' => ['admin.major.update', 'id' => $major->id], 'method' => 'put', 'autocomplete' => 'off','files'=>true]) !!}
                    @include('admin::major.partials.general')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop
