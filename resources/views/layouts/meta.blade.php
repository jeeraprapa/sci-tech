<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>
    @if(isset($title))
        {{$title}}
    @else
        {{env('WEB_TITLE','SCI-TECH')}}
    @endif
</title>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta property="og:url"                content="http:{{request()->url()}}" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="นิทรรศการสาขาวิชาวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยสุโขทัยธรรมาธิราช" />
<meta property="og:description"        content="นิทรรศการสาขาวิชาวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยสุโขทัยธรรมาธิราช" />
<meta property="og:image"              content="{{asset('images/logo2.png')}}" />

<link rel="icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
<link href="{{asset('vendors/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{mix('css/app.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('vendor/fakerLoader/fakeLoader.min.css') }}">

<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('vendor/fakerLoader/fakeLoader.min.js')}}"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HWW0XZWSDY"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HWW0XZWSDY');
</script>
