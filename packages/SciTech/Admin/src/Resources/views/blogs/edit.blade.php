@extends('admin::layouts.default')

@section('page_title')
    แก้ไขข้อมูลบล็อก
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">แก้ไขข้อมูลบล็อก</h3>
                </div>
                <div class="card-body p-3">
                    {!! Form::model($blog, ['route' => ['admin.blog.update', 'id' => $blog->id], 'method' => 'put', 'autocomplete' => 'off']) !!}
                        @include('admin::blogs.partials.general')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop
