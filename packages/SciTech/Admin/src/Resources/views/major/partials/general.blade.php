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
     <div class="col-4">
         <div class="form-group">
             {{ Form::label('poster1', 'โปสเตอร์พรีวิวหน้ารวม 1', array('class' => 'required')) }}
             {{ Form::file('poster1', null, ['class' => 'form-control']) }}
             @if(!empty($major) and $major->getFirstMedia('poster1'))
                 <br>
                 <img src="{{$major->getFirstMedia('poster1')->getFullUrl()}}" alt="" class="img-thumbnail">
             @endif
         </div>
     </div>
     <div class="col-4">
         <div class="form-group">
             {{ Form::label('poster2', 'โปสเตอร์พรีวิวหน้ารวม 2', array('class' => 'required')) }}
             {{ Form::file('poster2', null, ['class' => 'form-control']) }}
             @if(!empty($major) and $major->getFirstMedia('poster2'))
                 <br>
                 <img src="{{$major->getFirstMedia('poster2')->getFullUrl()}}" alt="" class="img-thumbnail">
             @endif
         </div>
     </div>
    <div class="col-4">
        <div class="form-group">
            {{ Form::label('icon', 'ภาพบูธพรีวิวหน้ารวม', array('class' => 'required')) }}
            {{ Form::file('icon', null, ['class' => 'form-control']) }}
            @if(!empty($major) and $major->getFirstMedia('icon'))
                <br>
                <img src="{{$major->getFirstMedia('icon')->getFullUrl()}}" alt="" class="img-thumbnail">
            @endif
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            {{ Form::label('img', 'ภาพบูธพื้นหลังหน้าหลัก', array('class' => 'required')) }}
            {{ Form::file('img', null, ['class' => 'form-control']) }}
            @if(!empty($major) and $major->getFirstMedia('img'))
                <br>
                <img src="{{$major->getFirstMedia('img')->getFullUrl()}}" alt="" class="img-thumbnail">
            @endif
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            {{ Form::label('thumbnail', 'โปสเตอร์พรีวิวหน้าหลัก', array('class' => 'required')) }}
            {{ Form::file('thumbnail', null, ['class' => 'form-control']) }}
            @if(!empty($major) and $major->getFirstMedia('thumbnail'))
                <br>
                <img src="{{$major->getFirstMedia('thumbnail')->getFullUrl()}}" alt="" class="img-thumbnail">
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
    <div class="col-12">
        <div class="form-group">
            {{ Form::label('video', 'video แนะนำหลักสูตร', array('class' => 'required')) }}
            {{ Form::textarea('video', null, ['class' => 'form-control editor']) }}
        </div>
    </div>
</div>
{{ Form::submit('บันทึก', ['class' => 'btn btn-primary']) }}
<a href="{{ route('admin.major.index') }}" class="btn btn-secondary">ย้อนกลับ</a>
