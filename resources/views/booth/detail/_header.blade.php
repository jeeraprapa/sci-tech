<header class="header-booth-detail" style="background-color: {{object_get($department,'primary_color','#B1D34A')}}">
    <h1 class="w-100">
        {{$department->type}}
    </h1>
    <nav class="d-flex">
        <a href="{{route('booth.major',['department'=>$department->slug,'slug'=>$major->slug])}}">
            <h2>{{$major->name}}</h2>
        </a>
        @if($next)
            <a href="{{route('booth.major',['department'=>$department->slug,'slug'=>$next->slug])}}" class="d-none d-lg-inline-block" style="background-color: {{object_get($department,'secondary_color','#80BF41')}}">
                <h2>{{$next->name}}</h2>
            </a>
        @endif
    </nav>
    <img src="{{asset('images/booth/border_header.png')}}" alt="" class="border-header w-100">
</header>
