<div class="row">
    <div class="col-12">
        <div class="form-group">
            {{ Form::label('name', 'ชื่อ', array('class' => 'required')) }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('title', 'Title', array('class' => 'required')) }}
            {{ Form::text('title', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('sub_title', 'Sub Title', array('class' => 'required')) }}
            {{ Form::text('sub_title', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('type', 'ระดับ', array('class' => 'required')) }}
            {{ Form::text('type', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('slug', 'Slug', array('class' => 'required')) }}
            {{ Form::text('slug', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('primary_color', 'Primary Color', array('class' => 'required')) }}
            {{ Form::color('primary_color', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('secondary_color', 'Secondary Color', array('class' => 'required')) }}
            {{ Form::color('secondary_color', null, ['class' => 'form-control']) }}
        </div>
    </div>
</div>
{{ Form::submit('บันทึก', ['class' => 'btn btn-primary']) }}
<a href="{{ route('admin.blog.index') }}" class="btn btn-secondary">ย้อนกลับ</a>
