@extends('front.layouts.master')
@section('content')
    <!-- story section -->

    <section class="layout_padding story_section">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-md-6">
                    <div>
                        <img class="img-fluid" src="{{asset($service->image)}}" alt="" />
                    </div>
                </div>
                <div class=" col-md-6 p-5">
                    <div class="story_detail">
                        <h3>
                            {{ $service->title }}
                        </h3>
                        <!-- <h2>
                  قصص النجاح
                </h2> -->
                        <p>
                            {{$service->description}} </p>
                        <!-- <div class="story_detail-btn">
                  <a href="">
                    <span>
                      قراءة المزيد
                    </span>
                    <img src="images/arrow-black.png" alt="" class="ml-2" />
                  </a>
                </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end story section -->

    <!-- security section -->

    <section class="security_section layout_padding">
        <h3>
            حماية


        </h3>
        <h2>
            وامان
        </h2>
        <div class="security_container" dir="ltr">
            <div class="carousel-wrap">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="security_img-box i-box-1">
                            <a href=""> عرض المزيد</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="security_img-box i-box-2">
                            <a href=""> عرض المزيد</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="security_img-box i-box-3">
                            <a href=""> عرض المزيد</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- <div class="security_btn">
            <a href="">
              <span>
                قراءة المزيد
              </span>
              <img src="images/arrow-black.png" alt="" class="ml-2" />
            </a>
          </div> -->
    </section>
    <!-- end security section -->
@endsection
