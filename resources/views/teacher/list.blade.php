<section id="teacher">
    <div class="container pt-3">
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
            <div class="col-12 col-md-6 col-lg-3 p-4 text-center ">
                <div class="teacher-img">
                    <img src="{{$teacher->getMedia('img')->first()->getFullUrl()}}" alt="" class="w-100" data-bs-toggle="modal" data-bs-target="#teacherModal-{{$teacher->id}}">
                </div>
                <div class="text-center fw-lighter py-4">
                    <small>{{$teacher->name}}</small>
                </div>
            </div>
            @endforeach
        </div>


    @foreach($department->teachers as $teacher)
        <!-- Modal -->
        <div class="modal fade modal-blog" id="teacherModal-{{$teacher->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content p-0">
                    <div class="modal-body">
                        <div class="text-header">
                            <div class="title">
                                <div class="text-title p-3" id="exampleModalLabel">ข้อมูลอาจารย์</div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-sm-12 col-md-4 text-center">
                                <img src="{{$teacher->getMedia('img')->first()->getFullUrl()}}" alt="" class="img-fluid px-5 p-md-0">
                                <p class="py-3"><small>{{$teacher->name}}</small></p>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <div class="row lh-lg">
                                    <div class="col-4 text-success pb-1"> แขนงวิชา : </div>
                                    <div class="col-8 text-detail pb-1"> {{$department->name}} </div>
                                    <div class="col-4 text-success pb-1">ประวัติการศึกษา :</div>
                                    <div class="col-8 text-detail pb-1">
                                        {!! nl2br($teacher->education) !!}
                                    </div>
                                    <div class="col-4 text-success pb-1"> E-Mail : </div>
                                    <div class="col-8 text-detail pb-1"> {{$teacher->email}} </div>
                                    <div class="col-4 text-success pb-1"> Tel : </div>
                                    <div class="col-8 text-detail pb-1"> {{$teacher->tel}} </div>
                                    @if($teacher->research)
                                    <div class="col-12 text-success pb-1"> ผลงานทางวิชาการ : </div>
                                    <div class="col-12 text-detail pb-1"> {!! $teacher->research !!} </div>
                                    @endif

                                    @if($teacher->youtube_url)
                                    <div class="col-12 text-success pb-1"> วีดีโอแนะนำอาจารย์ : </div>
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
