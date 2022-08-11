<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{asset('vendors/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{mix('css/app.css')}}" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        @include('layouts.header')
        <main>
            <section id="blog">
                <div class="container-fluid">
                    <div class="text-header">กิจกรรมบริการวิชาการสังคม</div>

                    <div class="row align-items-start content">
                        <div class="col-12 col-lg-3 p-4">
                            <div class="card" data-bs-toggle="modal" data-bs-target="#modal-blog">
                                <div class="card-image">
                                    <img src="{{asset('images/blog1.png')}}" alt="" class="w-100">
                                </div>
                                <div class="card-body">
                                    <h4>
                                        บริการวิชาการแก่สังคม โครงการพัฒนาคุณภาพชีวิตผู้สูงอายุ
                                    </h4>
                                    <p>
                                        โครงการบริการวิชาการแก่สังคม ระดับมหาวิทยาลัย พื้นที่เทศบาลตำบลท่าศาลา
                                    </p>
                                    <span class="text-success">
                                        อ่านเพิ่มเติม...
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 p-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{asset('images/blog1.png')}}" alt="" class="w-100">
                                </div>
                                <div class="card-body">
                                    <h4>
                                        บริการวิชาการแก่สังคม โครงการพัฒนาคุณภาพชีวิตผู้สูงอายุ
                                    </h4>
                                    <p>
                                        โครงการบริการวิชาการแก่สังคม ระดับมหาวิทยาลัย พื้นที่เทศบาลตำบลท่าศาลา
                                    </p>
                                    <span class="text-success">
                                        อ่านเพิ่มเติม...
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 p-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{asset('images/blog1.png')}}" alt="" class="w-100">
                                </div>
                                <div class="card-body">
                                    <h4>
                                        บริการวิชาการแก่สังคม โครงการพัฒนาคุณภาพชีวิตผู้สูงอายุ
                                    </h4>
                                    <p>
                                        โครงการบริการวิชาการแก่สังคม ระดับมหาวิทยาลัย พื้นที่เทศบาลตำบลท่าศาลา
                                    </p>
                                    <span class="text-success">
                                        อ่านเพิ่มเติม...
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 p-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{asset('images/blog1.png')}}" alt="" class="w-100">
                                </div>
                                <div class="card-body">
                                    <h4>
                                        บริการวิชาการแก่สังคม โครงการพัฒนาคุณภาพชีวิตผู้สูงอายุ
                                    </h4>
                                    <p>
                                        โครงการบริการวิชาการแก่สังคม ระดับมหาวิทยาลัย พื้นที่เทศบาลตำบลท่าศาลา
                                    </p>
                                    <span class="text-success">
                                        อ่านเพิ่มเติม...
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Modal -->
            <div class="modal fade" id="modal-blog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="text-title">
                                <div class="title">
                                    <div class=" titletext" id="exampleModalLabel">บริการวิชาการแก่สังคม โครงการพัฒนา คุณภาพชีวิตผู้สูงอายุ</div>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="date">12/02/2564</div>
                            </div>

                            <div class="image-content">
                                <img src="{{asset('images/detail-blog1.png')}}" alt="" class="w-100">
                            </div>

                            <div class="text-detail">
                                โครงการบริการวิชาการแก่สังคม ระดับมหาวิทยาลัย พื้นที่เทศบาลตำบลท่าศาลา สำนักวิจัยและบริการวิชาการและคณะวิชา มหาวิทยาลัยพายัพ ร่วมกับเทศบาลตำบลท่าศาลา ดำเนินโครงการบริการวิชาการ ระดับมหาวิทยาลัย ปีการศึกษา 2563 ภายใต้ “โครงการพัฒนาคุณภาพชีวิตผู้สูงอายุ พื้นที่เทศบาลตำบลท่าศาลา อำเภอเมือง จังหวัดเชียงใหม่” โดยมีกลุ่มเป้าหมาย : โรงเรียนเกษียณวัย โดยดำเนินกิจกรรม ในวันที่ 5 กุมภาพันธ์ 2564 เรื่อง “การทำดอกไม้จากผ้าใยบัว เพื่อสร้างรายได้เสริม” วิทยากรและทีมงานจากคณะบริหารธุรกิจและวิทยาศาสตร์ โครงการบริการวิชาการแก่สังคม ระดับมหาวิทยาลัย พื้นที่เทศบาลตำบลท่าศาลา สำนักวิจัยและบริการวิชาการและคณะวิชา มหาวิทยาลัยพายัพ ร่วมกับเทศบาลตำบลท่าศาลา ดำเนินโครงการบริการวิชาการ ระดับมหาวิทยาลัย ปีการศึกษา 2563 ภายใต้
                                โครงการบริการวิชาการแก่สังคม ระดับมหาวิทยาลัย พื้นที่เทศบาลตำบลท่าศาลา สำนักวิจัยและบริการวิชาการและคณะวิชา มหาวิทยาลัยพายัพ ร่วมกับเทศบาลตำบลท่าศาลา ดำเนินโครงการบริการวิชาการ ระดับมหาวิทยาลัย ปีการศึกษา 2563 ภายใต้ “โครงการพัฒนาคุณภาพชีวิตผู้สูงอายุ พื้นที่เทศบาลตำบลท่าศาลา อำเภอเมือง จังหวัดเชียงใหม่” โดยมีกลุ่มเป้าหมาย : โรงเรียนเกษียณวัย โดยดำเนินกิจกรรม ในวันที่ 5 กุมภาพันธ์ 2564 เรื่อง “การทำดอกไม้จากผ้าใยบัว เพื่อสร้างรายได้เสริม” วิทยากรและทีมงานจากคณะบริหารธุรกิจและวิทยาศาสตร์
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

    </div>
</body>

<script src="{{asset('vendors/js/bootstrap.bundle.min.js')}}"></script>


</html>
