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
                <img src="{{$teacher->getMedia('img')->first()->getFullUrl()}}" alt="" class="img-fluid" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <p class="text-center fw-bold p-2">{{$teacher->name}}</p>
            </div>
            @endforeach
        </div>



        <!-- Modal -->
        <div class="modal fade modal-blog" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <img src="{{asset('images/teacher/teacher.jpg')}}" alt="" class="img-fluid px-5 p-md-0">
                                <p class="py-3">อาจารย์ชาลิสา หน่อแก้ว</p>
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <div class="row lh-lg">
                                    <div class="col-4 text-success"> แขนงวิชา : </div>
                                    <div class="col-8 text-detail"> นอนอย่างเดียว </div>
                                    <div class="col-4 text-success">ประวัติการศึกษา :</div>
                                    <div class="col-8 text-detail">
                                        <ul>
                                            <li>ปี 2524 วิทยาศาสตรบัณฑิต สาขาชีววิทยา / ม.รามคำแหง</li>
                                            <li>ปี 2524 วิทยาศาสตรมหาบัณฑิต สาขาสัตววิทยา / ม.เกษตรศาสตร์</li>
                                        </ul>
                                    </div>
                                    <div class="col-4 text-success"> E-Mail : </div>
                                    <div class="col-8 text-detail"> mail@mail.com </div>
                                    <div class="col-4 text-success"> Tel : </div>
                                    <div class="col-8 text-detail"> 0999999999 </div>
                                    <div class="col-12 text-success"> วีดีโอแนะนำอาจารย์ : </div>
                                    <div class="col-12 py-4">
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.youtube.com/embed/v7bnOxV4jAc" title="[MV] IU(아이유)_LILAC(라일락)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="border-radius: 12px;" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
</section>