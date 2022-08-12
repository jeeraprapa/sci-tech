<header class="header bg-white">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">

            <a class="navbar-brand" href="{{route('index')}}">
                <img src="{{asset('images/logo.png')}}" alt="" width="100%" height="60">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                <img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC8AAAAvCAYAAABzJ5OsAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAE9SURBVHgB7dYxTsMwFAbg/6VRs5YbmBMgisRMTwCcACEhhMRAmMoGMxUiW2FCHIETUGYE4QjhBGRNRWxeKpCcpKLra/W+xfFzBiey3m9AKaWUUqqG5hXv3ocbAWwPghz3Ry/NWmvz92/DW+cQQxpyycnW9Xmt5E8e0rhXlNEXhIo6xdrhZpL/zQN/cbZAyCBT5m+8EjbfcAENAmvPnCNRZz4MwisopZZXK6R+e/0BkZPTbRyybmf6tLBVFjZKeTDcKiEJ/9AJDwO/tmIJC0wg0+KE5a/bn6K7CwsDIfgI57yvRyilllcricZpbKiMLiEIp33eoTI56t98+vVWqyQbPfNgIEiV9t8u3OPHdb9eC6kqYfkeYSCTme3P00pYIiQQiI9O0kzYubev8evFDgSxrsxPt0cfUEoppZT63w8NUW0Gh/VHjQAAAABJRU5ErkJggg=="
                    alt="">
            </button>
            <div class="collapse navbar-collapse justify-content-center"
                 id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link {{request()->routeIs('booth.com-sci') ? 'active' : ''}}"
                       href="{{route('booth.com-sci')}}">แขนงวิชาวิทยาการคอมพิวเตอร์</a>
                    <a class="nav-link {{request()->routeIs('booth.tech-digital') ? 'active' : ''}}"
                       href="{{route('booth.tech-digital')}}">แขนงวิชาเทคโนโลยีดิจิทัล</a>
                    <a class="nav-link {{request()->routeIs('booth.industrial-tech') ? 'active' : ''}}"
                       href="{{route('booth.industrial-tech')}}">แขนงวิชาเทคโนโลยีอุตสาหกรรม</a>
                    <a class="nav-link border-end-0 {{request()->routeIs('booth.engineer-management') ? 'active' : ''}}"
                       href="{{route('booth.engineer-management')}}">แขนงวิชาเทคโนโลยการจัดการทางวิศวกรรม</a>
                    <a class="nav-link d-lg-none" href="{{route('blogs')}}">กิจกรรมบริการวิชาการสังคม</a>
                    <a class="nav-link d-lg-none" href="{{asset('360')}}" target="_blank">งานวิจัยของนักเรียนและนักศึกษา</a>
                </div>
            </div>
            <button type="button" class="navbar-toggler d-none d-lg-inline-block border-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarHamburger">
                <img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC8AAAAvCAYAAABzJ5OsAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAE9SURBVHgB7dYxTsMwFAbg/6VRs5YbmBMgisRMTwCcACEhhMRAmMoGMxUiW2FCHIETUGYE4QjhBGRNRWxeKpCcpKLra/W+xfFzBiey3m9AKaWUUqqG5hXv3ocbAWwPghz3Ry/NWmvz92/DW+cQQxpyycnW9Xmt5E8e0rhXlNEXhIo6xdrhZpL/zQN/cbZAyCBT5m+8EjbfcAENAmvPnCNRZz4MwisopZZXK6R+e/0BkZPTbRyybmf6tLBVFjZKeTDcKiEJ/9AJDwO/tmIJC0wg0+KE5a/bn6K7CwsDIfgI57yvRyilllcricZpbKiMLiEIp33eoTI56t98+vVWqyQbPfNgIEiV9t8u3OPHdb9eC6kqYfkeYSCTme3P00pYIiQQiI9O0kzYubev8evFDgSxrsxPt0cfUEoppZT63w8NUW0Gh/VHjQAAAABJRU5ErkJggg=="
                    alt="">
            </button>
        </nav>
        <nav>
            <div
                class="collapse navbar-collapse justify-content-center position-absolute position-right-0 mt-4 bg-white"
                id="navbarHamburger">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{asset('360')}}" target="_blank">งานวิจัยของนักเรียนและนักศึกษา</a>
                    <a class="nav-link" href="{{route('blogs')}}">กิจกรรมบริการวิชาการสังคม</a>
                </div>
            </div>
        </nav>
    </div>
</header>
