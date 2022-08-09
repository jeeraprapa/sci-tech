@extends('admin::layouts.default')

@section('page_title')
    สร้างสิทธิ์
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">สร้างสิทธิ์</h3>
                </div>
                <div class="card-body p-3">
                    {!! Form::open(['route' => 'admin.role.store', 'autocomplete' => 'off', 'id' => 'admin-form']) !!}
                        @include('admin::roles.partials.general')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop
