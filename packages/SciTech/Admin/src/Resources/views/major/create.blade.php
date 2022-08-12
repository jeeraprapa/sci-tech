@extends('admin::layouts.default')

@section('page_title')
    สร้างข้อมูลวิชาเอก
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">สร้างข้อมูลวิชาเอก</h3>
                </div>
                <div class="card-body p-3">
                    {!! Form::open(['route' => 'admin.major.store', 'autocomplete' => 'off', 'id' => 'admin-form','files'=>true]) !!}
                    @include('admin::major.partials.general')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop
