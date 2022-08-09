@extends('admin::layouts.default')

@section('page_title')
    แก้ไขสิทธิ์
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">แก้ไขสิทธิ์</h3>
                </div>
                <div class="card-body p-3">
                    {!! Form::model($role, ['route' => ['admin.role.update', 'id' => $role->id], 'method' => 'put', 'autocomplete' => 'off']) !!}
                        @include('admin::roles.partials.general')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop
