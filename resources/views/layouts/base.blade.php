<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.meta')
    @stack('css')
</head>

<body>
<div class="fakeLoader"></div>
<script>
    $.fakeLoader({
        bgColor: '#98cc77'
    });
</script>
<div class="wrapper">
    @include('layouts.header')
    <main>
        @yield('content')
    </main>
</div>
@stack('js')
</body>

<script src="{{asset('vendors/js/bootstrap.bundle.min.js')}}"></script>

</html>
