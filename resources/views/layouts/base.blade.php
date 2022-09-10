<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.meta')
    @stack('css')
</head>

<body>
{{--<div class="fakeLoader"></div>--}}
{{--<script>--}}
{{--    $.fakeLoader({--}}
{{--        bgColor: '#98cc77'--}}
{{--    });--}}
{{--</script>--}}
<div class="wrapper">
    @include('layouts.header')
    <main>
        @yield('content')
    </main>
</div>
@stack('js')
</body>

<script src="{{asset('vendors/js/bootstrap.bundle.min.js')}}"></script>
<script>
    var modal = document.getElementById('modal-video')
    window.addEventListener('hidden.bs.modal', function (event) {
        $('body').find('iframe').each(function (i,iframe){
            // var iframe = modal.getElementsByTagName("iframe")[i];
            var url = iframe.getAttribute('src');
            iframe.setAttribute('src', '');
            iframe.setAttribute('src', url);
        })
    })


</script>

</html>
