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
            <div class="col-12 col-md-6 col-lg-2 p-4 text-center">
                <img src="{{$teacher->getMedia('img')->first()->getFullUrl()}}" alt="" class="w-100" data-bs-toggle="modal" data-bs-target="#teacherModal-{{$teacher->id}}">
                <p class="text-center fw-bold p-2">{{$teacher->name}}</p>
            </div>
            @endforeach
        </div>


    @foreach($department->teachers as $teacher)
        <!-- Modal -->
        <div class="modal fade modal-blog" id="teacherModal-{{$teacher->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content p-0">
                    <div class="modal-body">
                        <div class="text-header">
                            <div class="title">
                                <div class="text-title" id="exampleModalLabel">ข้อมูลอาจารย์</div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="row py-3">
                            <div class="col-sm-12 col-md-3 text-center">
                                <img src="{{$teacher->getMedia('img')->first()->getFullUrl()}}" alt="" class="img-fluid px-5 p-md-0">
                                <p class="py-3">{{$teacher->name}}</p>
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <div class="row lh-lg">
                                    <div class="col-4 text-success"> แขนงวิชา : </div>
                                    <div class="col-8 text-detail"> {{$department->name}} </div>
                                    <div class="col-4 text-success">ประวัติการศึกษา :</div>
                                    <div class="col-8 text-detail">
                                        {!! nl2br($teacher->education) !!}
                                    </div>
                                    <div class="col-4 text-success"> E-Mail : </div>
                                    <div class="col-8 text-detail"> {{$teacher->email}} </div>
                                    <div class="col-4 text-success"> Tel : </div>
                                    <div class="col-8 text-detail"> {{$teacher->tel}} </div>
                                    @if($teacher->youtube_url)
                                    <div class="col-12 text-success"> วีดีโอแนะนำอาจารย์ : </div>
                                    <div class="col-12 py-4">
                                        <div class="ratio ratio-16x9">
                                            <iframe src="{{$teacher->youtube_url}}" style="border-radius: 12px;" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    @endif

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</section>
