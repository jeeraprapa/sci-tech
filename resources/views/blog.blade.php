@extends('layouts.base',['title'=>'กิจกรรมบริการวิชาการสังคม'])

@push('css')
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
@endpush


@section('content')
    <section id="blog">
        <div class="container-fluid">
            <div class="text-header">กิจกรรมบริการวิชาการสังคม</div>

            <div class="row align-items-start content">

                @foreach($blogs as $blog)

                    <div class="col-12 col-lg-3 p-4">
                        <div class="card" data-bs-toggle="modal"
                             data-bs-target="#modal-blog-{{$blog->id}}">
                            <div class="card-image">
                                <img
                                    src="{{$blog->thumbnail() ? $blog->thumbnail()->getFullUrl() : ''}}"
                                    alt="" class="w-100">
                            </div>
                            <div class="card-body">
                                <h4>
                                    {{$blog->name}}
                                </h4>
                                <p>
                                    {{$blog->short_description}}
                                </p>
                                <span class="text-success">
                                    อ่านเพิ่มเติม...
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @foreach($blogs as $blog)
    <!-- Modal -->
    <div class="modal fade modal-blog" id="modal-blog-{{$blog->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="text-title">
                        <div class="title">
                            <div class=" titletext" id="exampleModalLabel">{{$blog->name}}</div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
{{--                        <div class="date">--}}
{{--                            {{$blog->published_at->format('d/m/Y')}}--}}
{{--                        </div>--}}
                    </div>

                    <div class="image-content">
                        <!-- Slider main container -->
                        <div class="swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                @foreach($blog->getMedia('images') as $mediaItem)
                                    @if(!$mediaItem->hasCustomProperty('thumbnail'))
                                        <div class="swiper-slide">
                                            <img src="{{ $mediaItem->getFullUrl() }}" alt="" class="w-100">
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <!-- If we need scrollbar -->
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                    <div class="text-detail">
                        {!! $blog->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection

@push('css')
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper('.swiper', {
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

    });
</script>
@endpush
