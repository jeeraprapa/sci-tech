<section id="teacher">
    <div class="container">
        <header class="mb-4">
            <h1>
                {{$department->name}}
                <span>
                    คณาจารย์ผู้รับผิดชอบหลักสูตร
                </span>
            </h1>
        </header>
        <div class="row justify-content-center" id="teacher-list">
            @foreach($department->teachers as $teacher)
                <div class="col-12 col-md-4 col-lg-3 p-4 text-center">
                    <img src="{{$teacher->getMedia('img')->first()->getFullUrl()}}" alt="" class="img-fluid">
                    <p class="text-center fw-bold p-2">{{$teacher->name}}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>


