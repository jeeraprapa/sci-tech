<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.meta',['title'=>'นิทรรศการ “การเรียนรู้สาขาวิชาวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยสุโขทัยธรรมาธิราช”'])
</head>
<body>
    <div class="fakeLoader"></div>
    <script>
        $.fakeLoader({
            bgColor: '#98cc77'
        });
    </script>
    <div class="wrapper" id="second">
        <header>
            <div class="d-lg-none header-small">
                <h1 class="text-center mb-0">
                    <span class="d-block">
                        นิทรรศการ
                    </span>
                    “การเรียนรู้สาขาวิชาวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยสุโขทัยธรรมาธิราช”
                </h1>
                <div class="position-absolute w-100 p-4 d-flex justify-content-between align-items-center">
                    <a href="{{route('index')}}" class="d-flex">
                        <img src="{{asset('images/logo.png')}}" alt="">
                    </a>
                    <nav>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC8AAAAvCAYAAABzJ5OsAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAE9SURBVHgB7dYxTsMwFAbg/6VRs5YbmBMgisRMTwCcACEhhMRAmMoGMxUiW2FCHIETUGYE4QjhBGRNRWxeKpCcpKLra/W+xfFzBiey3m9AKaWUUqqG5hXv3ocbAWwPghz3Ry/NWmvz92/DW+cQQxpyycnW9Xmt5E8e0rhXlNEXhIo6xdrhZpL/zQN/cbZAyCBT5m+8EjbfcAENAmvPnCNRZz4MwisopZZXK6R+e/0BkZPTbRyybmf6tLBVFjZKeTDcKiEJ/9AJDwO/tmIJC0wg0+KE5a/bn6K7CwsDIfgI57yvRyilllcricZpbKiMLiEIp33eoTI56t98+vVWqyQbPfNgIEiV9t8u3OPHdb9eC6kqYfkeYSCTme3P00pYIiQQiI9O0kzYubev8evFDgSxrsxPt0cfUEoppZT63w8NUW0Gh/VHjQAAAABJRU5ErkJggg==" alt="">
                        </button>
                        <div class="collapse navbar-collapse justify-content-center position-absolute position-right-0 mt-4" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                @foreach($departments as $department)
                                    <a class="nav-link {{request()->is('*'.$department->slug) ? 'active' : ''}} {{$loop->last ? "border-end-0" : ""}}"
                                       href="{{route('booth',['slug'=>$department->slug])}}">{{$department->name}}</a>
                                @endforeach
                                <a class="nav-link" href="{{asset('360')}}" target="_blank">งานวิจัยของนักศึกษา</a>
                                <a class="nav-link" href="{{route('blogs')}}">กิจกรรมบริการวิชาการสังคม</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="fixed-top  m-3 d-none d-lg-flex justify-content-between align-items-center">
                <a href="{{route('index')}}">
                    <img src="{{asset('images/logo.png')}}" alt="">
                </a>
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
                            <a class="nav-link" href="{{asset('360')}}" target="_blank">งานวิจัยของนักศึกษา</a>
                            <a class="nav-link" href="{{route('blogs')}}">กิจกรรมบริการวิชาการสังคม</a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <div class="d-lg-none">
                <img src="{{asset('images/sm-main.png')}}" alt="" class="img-fluid w-100">
            </div>
            <div class="d-none d-lg-block position-relative" id="video-container">
                <img src="{{asset('images/second.jpg')}}" alt="" class="img-fluid w-100 opacity-0 z-index-99" usemap="#area-map">

                <video autoplay muted loop preload="auto" class="position-absolute w-100 top-0 d-xxl-none">
                    <source src="{{asset('video/ipad.mp4')}}" type="video/mp4">
                </video>
                <video autoplay muted loop preload="auto" class="position-absolute w-100 top-0 d-none d-xxl-block">
                    <source src="{{asset('video/second-video.mp4')}}" type="video/mp4">
                </video>
            </div>

            <map name="area-map">
                <area class="area-map" target="" alt="1"
                      data-name="แขนงวิชาวิทยาการคอมพิวเตอร์"
                      data-type="ระดับปริญาตรี"
                      data-color="#ffcd2f"
                      data-bg="{{asset('images/booth/Icon-Scitech-Booth1.png')}}"
                      href="{{route('booth.com-sci')}}"
                      coords="184,522,366,422,366,383,391,365,415,378,449,363,457,312,525,295,601,353,601,393,776,493,786,519,739,553,572,670,530,749,276,614"
                      shape="poly">
                <area class="area-map" target="" alt="2"
                      data-name="แขนงวิชาเทคโนโลยีดิจิทัล"
                      data-type="ระดับปริญาโท"
                      data-color="#b1d34a"
                      data-bg="{{asset('images/booth/Icon-Scitech-Booth4.png')}}"
                      href="{{route('booth.tech-digital')}}" coords="4728,398,778,365,779,322,876,280,898,300,924,281,929,217,949,207,976,222,986,183,995,132,1029,136,1181,176,1271,232,1376,285,1431,322,1424,370,1387,412,1276,436,1288,478,1178,553,1068,624,749,443"
                      shape="poly">
                <area class="area-map" target="" alt="3"
                      data-name="แขนงวิชาเทคโนโลยีอุตสาหกรรม"
                      data-type="ระดับปริญาตรี"
                      data-color="#6ECBF1"
                      data-bg="{{asset('images/booth/Icon-Scitech-Booth3.png')}}"
                      href="{{route('booth.industrial-tech')}}"
                      coords="494,783,486,816,712,939,791,995,832,995,1115,819,1027,741,810,598,664,634,596,687" shape="poly">
                <area class="area-map" target="" alt="4"
                      data-name="แขนงวิชาเทคโนโลยการจัดการทางวิศวกรรม"
                      data-type="ระดับปริญาโท"
                      data-color="#799FE6"
                      data-bg="{{asset('images/booth/Icon-Scitech-Booth2.png')}}"
                      href="{{route('booth.engineer-management')}}"
                      coords="1029,721,1254,870,1264,949,1763,697,1712,663,1627,700,1356,493,1181,582,1102,629" shape="poly">
            </map>
        </main>
        <div class="float-menu">
            <a href="{{asset('360')}}" data-bs-toggle="tooltip" data-bs-placement="right" title="งานวิจัยของนักศึกษา">
                <img src="{{asset('images/icon-research.png')}}" alt="">
            </a>
            <a href="{{route('blogs')}}" data-bs-toggle="tooltip" data-bs-placement="right" title="กิจกรรมบริการวิชาการสังคม">
                <img src="{{asset('images/icon-blog.png')}}" alt="">
            </a>
        </div>
        <div id="tooltip">
            <span>
                <div></div>
            </span>
        </div>
    </div>
</body>
<script src="{{asset('vendors/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('js/vendors/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/vendors/jquery.maphilight.js') }}" defer></script>
<script src="{{ asset('js/vendors/jquery.rwdImageMaps.min.js') }}" defer></script>

<script>
    $(document).ready(function (){
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

        var mouseX;
        var mouseY;
        $(document).mousemove(function (e) {
            // mouse coordinates
            mouseX = e.pageX;
            mouseY = e.pageY;

        });

        $('img[usemap]').rwdImageMaps();

        $('img[usemap]').maphilight({
            fillOpacity: 1,
            stroke: false,
            fillColor: 'E8ECF2FF'
        });

        $(".area-map").mouseover(function () {
            // populate tooltip string
            var name = $(this).data('name');
            var type = $(this).data('type');
            var bg = $(this).data('bg');
            var color = $(this).data('color');

            name = "" + name + "<p style='color: "+ color +"'>" + type + "</p>";
            $('#tooltip span div').html(name);

            // show tooltip
            $('#tooltip').stop(false, true).fadeIn(1);

            // position tooltip relative to mouse coordinates
            $(this).mousemove(function () {
                $('#tooltip').css({
                    'top': mouseY - 100,
                    'left': mouseX - 100,
                    'background-image': 'url('+bg+')',
                    'background-size': '100% 100%'
                });
            });
        }).mouseout(function () {
            // hide tooltip
            $('#tooltip').stop(false, true).fadeOut(2000);
        }).click(function(){
            url = $(this).attr('data-link');
            window.location.href = url;
        });

    });
</script>
</html>
