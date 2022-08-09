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
    <div class="wrapper" id="second">
        <header class="fixed-top m-3 d-flex justify-content-between align-items-center">
            <img src="{{asset('images/logo.png')}}" alt="">
            <h1 class="text-center">
                <span class="d-block">
                    นิทรรศการ
                </span>
                “การเรียนรู้สาขาวิชาวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยสุโขทัยธรรมาธิราช”
            </h1>
            <nav>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC8AAAAvCAYAAABzJ5OsAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAE9SURBVHgB7dYxTsMwFAbg/6VRs5YbmBMgisRMTwCcACEhhMRAmMoGMxUiW2FCHIETUGYE4QjhBGRNRWxeKpCcpKLra/W+xfFzBiey3m9AKaWUUqqG5hXv3ocbAWwPghz3Ry/NWmvz92/DW+cQQxpyycnW9Xmt5E8e0rhXlNEXhIo6xdrhZpL/zQN/cbZAyCBT5m+8EjbfcAENAmvPnCNRZz4MwisopZZXK6R+e/0BkZPTbRyybmf6tLBVFjZKeTDcKiEJ/9AJDwO/tmIJC0wg0+KE5a/bn6K7CwsDIfgI57yvRyilllcricZpbKiMLiEIp33eoTI56t98+vVWqyQbPfNgIEiV9t8u3OPHdb9eC6kqYfkeYSCTme3P00pYIiQQiI9O0kzYubev8evFDgSxrsxPt0cfUEoppZT63w8NUW0Gh/VHjQAAAABJRU5ErkJggg==" alt="">
                </button>
                <div class="collapse navbar-collapse justify-content-center position-absolute position-right-0 mt-4" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">ตำราและกิจกรรมการเรียนการสอน</a>
                        <a class="nav-link" href="#">ความเชี่ยวชาญเฉพาะด้านของคณาจารย์</a>
                        <a class="nav-link" href="#">งานวิจัยของนักเรียนและนักศึกษา</a>
                        <a class="nav-link" href="#">กิจกรรมบริการวิชาการสังคม</a>
                    </div>
                </div>
            </nav>
        </header>
        <main class="pt-80">
            <img src="{{asset('images/main.png')}}" alt="" class="img-fluid w-100" usemap="#area-map">

            <map name="area-map">
                <area class="area-map" target="" alt="1" data-name="แขนงวิชาวิทยาการคอมพิวเตอร์" href="1" coords="13,317,221,187,584,444,307,626,-1,444,9,368" shape="poly">
                <area class="area-map" target="" alt="2" data-name="แขนงวิชาเทคโนโลยีดิจิทัล" href="2" coords="471,323,737,120,1150,403,864,568,516,363" shape="poly">
                <area class="area-map" target="" alt="3" data-name="แขนงวิชาเทคโนโลยีอุตสาหกรรม" href="3" coords="218,746,579,533,840,693,493,903" shape="poly">
                <area class="area-map" target="" alt="4" data-name="แขนงวิชาเทคโนโลยการจัดการทางวิศวกรรม" href="4" coords="845,678,1220,462,1420,618,1084,836" shape="poly">
            </map>
        </main>
        <div id="tooltip" style=""><span></span></div>
    </div>
</body>
<script src="{{asset('vendors/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/vendors/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/vendors/jquery.maphilight.js') }}" defer></script>
<script src="{{ asset('js/vendors/jquery.rwdImageMaps.min.js') }}" defer></script>

<script>
    $(document).ready(function (){

        var mouseX;
        var mouseY;
        $(document).mousemove(function (e) {
            // mouse coordinates
            mouseX = e.pageX;
            mouseY = e.pageY;

        });

        $('img[usemap]').rwdImageMaps();

        $('img[usemap]').maphilight({
            fillOpacity: 0.1,
            stroke: false,
            fillColor: 'E8ECF2FF'
        });

        $(".area-map").mouseover(function () {
            // populate tooltip string
            var name = $(this).data('name');
            name = "<img src='{{asset('images/pin.png')}}'>" + name;
            $('#tooltip span').html(name);

            // show tooltip
            $('#tooltip').stop(false, true).fadeIn(1);

            // position tooltip relative to mouse coordinates
            $(this).mousemove(function () {
                $('#tooltip').css({
                    'top': mouseY - 100,
                    'left': mouseX - 100
                });
            });
        }).mouseout(function () {
            // hide tooltip
            $('#tooltip').stop(false, true).fadeOut(2000);
        }).click(function(){
            url = $(this).attr('data-link');
            window.location.href = url;
        });

        $('.navbar-brand').mouseover(function (){

            var name = "วัคซีน เครื่องมือต้านการระบาดของโรคติดเชื้ออุบัติใหม่";
            name = "<img src='{{asset('images/pin.png')}}'>" + name;
            $('#tooltip span').html(name);

            // show tooltip
            $('#tooltip').stop(false, true).fadeIn(1);

            $(this).mousemove(function () {
                $('#tooltip').css({
                    'top': mouseY + 50,
                    'left': mouseX + 50
                });
            });

        }).mouseout(function () {
            // hide tooltip
            $('#tooltip').stop(false, true).fadeOut(2000);
        });

    });
</script>
</html>
