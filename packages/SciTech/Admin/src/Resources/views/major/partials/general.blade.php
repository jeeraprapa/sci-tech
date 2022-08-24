<div class="row">
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('name', 'ชื่อ', array('class' => 'required')) }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('youtube_url', 'Youtube', array('class' => 'required')) }}
            {{ Form::text('youtube_url', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('department_id', 'แขนงวิชา', array('class' => 'required')) }}
            {{ Form::select('department_id', $departments, null, ['placeholder' => 'กรุณาเลือกประเภท', 'class' => 'form-control']) }}
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
            {{ Form::label('img', 'ภาพบูธ', array('class' => 'required')) }}
            {{ Form::file('img', null, ['class' => 'form-control']) }}
            @if(!empty($major) and $major->getMedia('img')->count())
                <br>
                <img src="{{$major->getMedia('img')->first()->getFullUrl()}}" alt="" class="img-thumbnail">
            @endif
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('thumbnail', 'โปสเตอร์พรีวิว', array('class' => 'required')) }}
            {{ Form::file('thumbnail', null, ['class' => 'form-control']) }}
            @if(!empty($major) and $major->getMedia('thumbnail')->count())
                <br>
                <img src="{{$major->getMedia('thumbnail')->first()->getFullUrl()}}" alt="" class="img-thumbnail">
            @endif
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            {{ Form::label('full_name', 'ชื่อปริญญาและสาขาวิชา', array('class' => 'required')) }}
            {{ Form::textarea('full_name', null, ['class' => 'form-control editor']) }}
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            {{ Form::label('detail', 'หลักสูตร', array('class' => 'required')) }}
            {{ Form::textarea('detail', null, ['class' => 'form-control editor']) }}
        </div>
    </div>
</div>
{{ Form::submit('บันทึก', ['class' => 'btn btn-primary']) }}
<a href="{{ route('admin.major.index') }}" class="btn btn-secondary">ย้อนกลับ</a>
