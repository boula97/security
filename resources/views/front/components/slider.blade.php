<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<style>
    .sliderBtn {
        background: rgb(92, 255, 92) !important;
        background: linear-gradient(90deg, rgba(92, 255, 92, 1) 0%, rgba(0, 163, 0, 1) 100%) !important;
        color: #fff !important;
        font-size: 15px;

    }

    .sliderBtn:checked,
    .sliderBtn:focus,
    .sliderBtn:visited,
    .sliderBtn:active,
    .sliderBtn:hover {
        background: rgb(92, 255, 92);
        background: linear-gradient(90deg, rgba(92, 255, 92, 1) 0%, rgba(0, 163, 0, 1) 100%);
        color: #fff !important;
        font-size: 15px;
    }

    .carousel-caption {
        background: rgba(255, 255, 255, 0.3);
        margin: auto;
        bottom: 3rem;
        height: auto;
        width: 700px;
        padding: 40px;
    }

    @media (max-width: 991px) {
        .carousel-caption {
            background: rgba(255, 255, 255, 0.3);
            margin: auto;
            bottom: 3rem;
            height: auto;
            width: auto;
            padding: 40px;
            font-size: 12px;
        }

        .carousel-caption h3 {
            font-size: 25px;
        }

        .carousel-caption p {
            font-size: 16px;
        }

        .sliderBtn {
            background: rgb(92, 255, 92) !important;
            background: linear-gradient(90deg, rgba(92, 255, 92, 1) 0%, rgba(0, 163, 0, 1) 100%) !important;
            color: #fff !important;
            font-size: 13px;
            margin: auto;
        }
    }

</style>
<header class="slider-main">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($sliders as $slider)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" data-bs-interval="3000"
                class="{{$loop->index < 1 ? 'active' : ''}}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            @foreach ($sliders as $slider)
            <div class="carousel-item {{$loop->index==0?'active':''}}"
                style="background-image: url('{{asset('public/'.$slider->image)}}')">
                <div class="carousel-caption d-md-block">
                    <div class="row">
                        <div class="col-md-12 animate__animated animate__fadeInDown">
                            <h3>{{$slider->title}}</h3>
                            {!! $slider->description !!}
                            <a href="tel:00966537394580"><button
                                    class="btn sliderBtn">اتصل بنا للتفاصيل والاسعار <i
                                        class="fa fa-phone"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">السابق</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">التالي</span>
        </a>
    </div>
</header>
