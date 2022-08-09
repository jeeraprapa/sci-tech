@extends('admin::layouts.default')

@section('page_title')
    บล็อก
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">บล็อก</h3>
                    <div class="card-tools">
                        <a class="btn btn-block btn-primary" href="{{ route('admin.blog.create') }}">สร้างบล็อก</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr class="text-secondary">
                            <th width="30%">ชื่อ</th>
                            <th width="20%">ประเภท</th>
                            <th width="10%">สถานะ</th>
                            <th width="20%">วันที่สร้าง</th>
                            <th width="20%">เมนู</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($blogs as $value)
                            <tr>
                                <td width="30%">
                                    {{ $value->name }}
                                </td>
                                <td width="20%">
                                    {{ $value->category->name }}
                                </td>
                                <td width="10%">
                                    @if($value->status)
                                        <span class="badge bg-primary">{{ $value->status_label }}</span>
                                    @else
                                        <span class="badge bg-danger">{{ $value->status_label }}</span>
                                    @endif
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
                                                {{ Html::trash('ลบ', route('admin.blog.destroy', $value->id), ['delete_button_class' => 'btn btn-link text-danger text-gradient px-3 mb-0', 'delete_button_icon_class' => 'far fa-trash-alt me-2']) }}
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('admin.blog.edit', ['id' => $value->id]) }}">
                                                    <i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i> แก้ไข
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('admin.blog.media', ['blog' => $value->id]) }}">
                                                    <i class="fas fa-image text-dark me-2" aria-hidden="true"></i> รูปภาพ
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
                    {!! $blogs->appends(request()->query())->links() !!}
                </div>
            </div>
        </div>
    </div>

@stop
