<div class="row">
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('name', 'ชื่อสิทธิ์', array('class' => 'required')) }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
    </div>
</div>
<table class="table">
    <thead>
        <tr class="text-secondary">
            <th width="10%"></th>
            <th width="70%">ชื่อ</th>
            <th width="20%">คุ้มกัน</th>
        </tr>
    </thead>
    <tbody>
        @foreach($permissions as $permission)
            <tr>
                <td width="10%">
                    {{ Form::checkbox("permission[$permission->name]", $permission->name, in_array($permission->name, $rolePermissions) ? true : false) }}
                </td>
                <td width="70%">{{ preg_replace('/\.|\:/', ' ', $permission->name) }}</td>
                <td width="20%">{{ $permission->guard_name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
