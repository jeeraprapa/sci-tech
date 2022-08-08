<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Sci Tech | Log in</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <b>Admin</b> Sci Tech
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">เข้าสู่ระบบ</p>

            {!! Form::open(['route' => 'admin.session.store', 'method' => 'post', 'autocomplete' => 'off', 'id' => 'login-form']) !!}
                <div class="input-group mb-3">
                    {{ Form::email('email', null, ['class' => 'form-control', 'type' => 'email', 'placeholder' => 'อีเมล']) }}
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'รหัสผ่าน']) }}
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            {{ Form::checkbox('remember', true, true) }}
                            {{ Form::label('remember', 'จำชื่อผู้ใช้งาน') }}
                        </div>
                    </div>
                    <div class="col-4">
                        {{ Form::submit('เข้าสู่ระบบ', ['class' => 'btn btn-primary btn-block']) }}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/adminlte.min.js') }}"></script>
</body>
</html>

