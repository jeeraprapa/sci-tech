<div class="row">
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('name', 'ชื่อ', array('class' => 'required')) }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('slug', 'Slug', array('class' => 'required')) }}
            {{ Form::text('slug', null, ['class' => 'form-control']) }}
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
            {{ Form::label('category_id', 'ประเภท', array('class' => 'required')) }}
            {{ Form::select('category_id', $categories, null, ['placeholder' => 'กรุณาเลือกประเภท', 'class' => 'form-control']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="form-group">
            {{ Form::label('published_at', 'วันที่เผยแพร่') }}
            {{ Form::text('published_at', null, array('class' => 'form-control datetime-picker')) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="form-group">
            {{ Form::label('short_description', 'รายละเอียดอย่างย่อ', array('class' => 'required')) }}
            {{ Form::textarea('short_description', null, ['class' => 'form-control editor']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="form-group">
            {{ Form::label('description', 'รายละเอียด', array('class' => 'required')) }}
            {{ Form::textarea('description', null, ['class' => 'form-control editor']) }}
        </div>
    </div>
</div>

