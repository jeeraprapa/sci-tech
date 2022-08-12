@extends('admin::layouts.default')

@section('page_title')
    แขนงวิชา
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">แขนงวิชา</h3>
                    <div class="card-tools">
                        <a class="btn btn-block btn-primary" href="{{ route('admin.department.create') }}">สร้างแขนงวิชา</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr class="text-secondary">
                            <th width="30%">ชื่อ</th>
                            <th width="20%">ประเภท</th>
                            <th width="20%">Slug</th>
                            <th width="20%">วันที่สร้าง</th>
                            <th width="20%">เมนู</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($departments as $value)
                            <tr>
                                <td width="30%">
                                    {{ $value->name }}
                                </td>
                                <td width="20%">
                                    {{ $value->type }}
                                </td>
                                <td width="20%">
                                    {{ $value->slug }}
                                </td>
                                <td width="20%">
                                    {{ $value->created_at }}
                                </td>
                                <td class="align-middle" width="20%">
                                    <div class="dropdown">
                                        <a href="javascript:;" class="btn btn-success dropdown-toggle" data-toggle="dropdown" id="dropdownMenu">
                                            เมนู
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                                            <li>
                                                {{ Html::trash('ลบ', route('admin.department.destroy', $value->id), ['delete_button_class' => 'btn btn-link text-danger text-gradient px-3 mb-0', 'delete_button_icon_class' => 'far fa-trash-alt me-2']) }}
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('admin.department.edit', ['id' => $value->id]) }}">
                                                    <i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i> แก้ไข
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">
                                    ไม่พบข้อมูล
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {!! $departments->appends(request()->query())->links() !!}
                </div>
            </div>
        </div>
    </div>

@stop
