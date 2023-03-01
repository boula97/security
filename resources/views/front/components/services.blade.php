<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet"> --}}

    <style>
        * {
            /* font-family: 'Amiri', serif; */
            font-size: 20px;
        }

        /*----  Main Style  ----*/
        #cards_landscape_wrap-2 {
            text-align: center;
        }

        #cards_landscape_wrap-2 .container {
            padding-top: 80px;
            padding-bottom: 100px;
        }

        #cards_landscape_wrap-2 a {
            text-decoration: none;
            outline: none;
        }

        #cards_landscape_wrap-2 .card-flyer {
            border-radius: 5px;
        }

        #cards_landscape_wrap-2 .card-flyer .image-box {
            background: #ffffff;
            overflow: hidden;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.50);
            border-radius: 5px;
        }

        #cards_landscape_wrap-2 .card-flyer .image-box img {
            -webkit-transition: all .9s ease;
            -moz-transition: all .9s ease;
            -o-transition: all .9s ease;
            -ms-transition: all .9s ease;
            width: 100%;
            height: 300px;
        }

        #cards_landscape_wrap-2 .card-flyer:hover .image-box img {
            opacity: 0.7;
            -webkit-transform: scale(1.15);
            -moz-transform: scale(1.15);
            -ms-transform: scale(1.15);
            -o-transform: scale(1.15);
            transform: scale(1.15);
        }

        #cards_landscape_wrap-2 .card-flyer .text-box {
            text-align: center;
        }

        #cards_landscape_wrap-2 .card-flyer .text-box .text-container {
            padding: 30px 18px;
        }

        #cards_landscape_wrap-2 .card-flyer {
            background: #FFFFFF;
            margin-top: 50px;
            -webkit-transition: all 0.2s ease-in;
            -moz-transition: all 0.2s ease-in;
            -ms-transition: all 0.2s ease-in;
            -o-transition: all 0.2s ease-in;
            transition: all 0.2s ease-in;
            box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.40);
        }

        #cards_landscape_wrap-2 .card-flyer:hover {
            background: #fff;
            box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.50);
            -webkit-transition: all 0.2s ease-in;
            -moz-transition: all 0.2s ease-in;
            -ms-transition: all 0.2s ease-in;
            -o-transition: all 0.2s ease-in;
            transition: all 0.2s ease-in;
            margin-top: 50px;
        }

        #cards_landscape_wrap-2 .card-flyer .text-box p {
            margin-top: 10px;
            margin-bottom: 0px;
            padding-bottom: 0px;
            font-size: 14px;
            letter-spacing: 1px;
            color: #000000;
        }

        #cards_landscape_wrap-2 .card-flyer .text-box h6 {
            margin-top: 0px;
            margin-bottom: 4px;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            font-family: 'Roboto Black', sans-serif;
            letter-spacing: 1px;
            color: rgba(0, 163, 0, 1);
        }

        .sliderBtn {
            height: 45px;
        }
    </style>
</head>
<!-- Portfolio Section -->
<h1 class="my-4">خدماتنا المميزة</h1>


<!-- Topic Cards -->
<div id="cards_landscape_wrap-2">
    <div class="container">
        <div class="row">
            @foreach ($services as $service)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" data-aos="fade-up" data-aos-duration="3000">
                <a href="{{ route('front.show.service',['id'=>$service->id]) }}">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="{{ asset('public/'.$service->image) }}" alt="{{ $service->title }}" />
                            </div>
                            <div class="text-container">
                                <h6>{{ $service->title }}</h6>
                                <div class="card-footer">
                                    <a href="tel:00966500774150">
                                        <button class="btn sliderBtn">اتصل بنا<i class="fa fa-phone pe-2"></i>
                                        </button>
                                    </a>
                                    <a href="{{ route('front.show.service',['id'=>$service->id]) }}">
                                        <button class="btn sliderBtn">تصفح الخدمة
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
