@extends('admin::layouts.default')

@section('page_title')
    สิทธิ์
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">สิทธิ์</h3>

                    <div class="card-tools">
                        <a class="btn btn-block btn-primary" href="{{ route('admin.role.create') }}">สร้างสิทธิ์</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr class="text-secondary">
                                <th width="30%">ชื่อ</th>
                                <th width="20%">การคุ้มกัน</th>
                                <th width="20%">วันที่สร้าง</th>
                                <th width="30%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($roles as $value)
                                <tr>
                                    <td width="30%">
                                        {{ $value->name }}
                                    </td>
                                    <td width="20%">
                                        {{ $value->guard_name }}
                                    </td>
                                    <td width="20%">
                                        {{ $value->created_at }}
                                    </td>
                                    <td class="align-middle" width="30%">
                                        {{ Html::trash('ลบ', route('admin.role.destroy', $value->id), ['delete_button_class' => 'btn btn-link text-danger text-gradient px-3 mb-0', 'delete_button_icon_class' => 'far fa-trash-alt me-2']) }}
                                        <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('admin.role.edit', ['id' => $value->id]) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i> แก้ไข</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">
                                        {{ __('admin::app.data-table.empty') }}
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {!! $roles->appends(request()->query())->links() !!}
                </div>
            </div>
        </div>
    </div>
@stop
