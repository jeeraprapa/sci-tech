@extends('admin::layouts.default')

@section('page_title')
    แก้ไขข้อมูลเจ้าหน้าที่
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">แก้ไขข้อมูลเจ้าหน้าที่</h3>
                </div>
                <div class="card-body p-3">
                    {!! Form::model($admin, ['route' => ['admin.staff.update', 'id' => $admin->id], 'method' => 'put', 'autocomplete' => 'off']) !!}
                        @include('admin::admins.partials.general')
                        {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop
