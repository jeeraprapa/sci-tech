@extends('admin::layouts.default')

@section('page_title')
    {{ __('admin::app.admin.role.title') }}
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
                        {{ Form::submit('บันทึก', ['class' => 'btn btn-primary']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop
