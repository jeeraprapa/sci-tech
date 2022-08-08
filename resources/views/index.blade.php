<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('WEB_TITLE','SCI-TECH')}}</title>
    <link href="{{asset('vendors/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{mix('css/app.css')}}" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <main class="w-100">
            <img src="{{asset('images/index/bg.png')}}" alt="" class="img-fluid">
        </main>
    </div>
</body>
<script src="{{asset('vendors/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/js/bootstrap.bundle.min.js')}}"></script>
</html>
