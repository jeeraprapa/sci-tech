<div class="row">
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('name', 'ชื่อ', array('class' => 'required')) }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('email', 'อีเมล', array('class' => 'required')) }}
            {{ Form::email('email', null, ['class' => 'form-control']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('password', 'รหัสผ่าน') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('password_confirmation', 'ยืนยันรหัสผ่าน') }}
            {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('status', 'สถานะ', array('class' => 'required')) }}
            {{ Form::select('status', [true => 'เปิด', false => 'ปิด'], null, ['placeholder' => 'กรุณาเลือกสถานะ', 'class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('role_id', 'สิทธิ์', array('class' => 'required')) }}
            {{ Form::select('role_id', $roles, isset($adminRole) ? $adminRole : null, ['placeholder' => 'กรุณาเลือกสิทธิ์', 'class' => 'form-control']) }}
        </div>
    </div>
</div>
{{ Form::submit('บันทึก', ['class' => 'btn btn-primary']) }}
<a href="{{ route('admin.staff.index') }}" class="btn btn-secondary">ย้อนกลับ</a>
