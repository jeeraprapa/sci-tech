<div class="row">
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('name', 'ชื่อ', array('class' => 'required')) }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('email', 'email', array('class' => 'required')) }}
            {{ Form::text('email', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('tel', 'เบอร์โทร', array('class' => 'required')) }}
            {{ Form::text('tel', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('department_id', 'แขนงวิชา', array('class' => 'required')) }}
            {{ Form::select('department_id', $departments, null, ['placeholder' => 'กรุณาเลือกประเภท', 'class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            {{ Form::label('eduction', 'ประวัติการศึกษา', array('class' => 'required')) }}
            {{ Form::textarea('eduction', null, ['class' => 'form-control','size'=>'x3']) }}
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            {{ Form::label('youtube_url', 'Youtube Link', array('class' => 'required')) }}
            {{ Form::text('youtube_url', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            {{ Form::label('img', 'Image', array('class' => 'required')) }}
            {{ Form::file('img', null, ['class' => 'form-control']) }}
        </div>
    </div>
</div>
{{ Form::submit('บันทึก', ['class' => 'btn btn-primary']) }}
<a href="{{ route('admin.teacher.index') }}" class="btn btn-secondary">ย้อนกลับ</a>
