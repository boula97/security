@extends('front.layouts.master')
@section('content')
  <!-- slider section -->
  <section class="slider_section" dir="ltr">
    <div id="carouselExampleIndicators" class="carousel slide vert" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner text-center">
        <div class="carousel-item active">
          <div class="slider_box" style=" background-image: url(../images/banner.jpg);">
            <div class="fixed_company-detail">
              <p>
                شركة خدمات امنية
              </p>
            </div>
            <div class="slider-detail" dir="rtl">
              <div class="slider_detail-heading">
                <h2>
                  نحن شركة رويال
                </h2>
                <h1>للخدمات الامنية </h1>
                <h1> والتوظيف في قطاع الامن</h1>
              </div>
              <div class="slider_detail-text">
                <p>
                  نقدم العديد من لخدمات في قطاع الامن لحمايتكم وحماية مؤسساتكم وايضا نوفر العدبد من الوظائق لكل من يرغب
                  في العمل في هذا القطاع
                </p>
              </div>
              <!-- <div class="slider_detail-btn">
                <a href="">
                  <img src="images/arrow.png" alt="" class="ml-2" />
                  <span>
                    قراءة المزيد
                  </span>
                </a>
              </div> -->
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="slider_box" style=" background-image: url(../images/banner2.jpg);">
            <div class="fixed_company-detail">
              <p>
                شركة خدمات امنية
              </p>
            </div>
            <div class="slider-detail" dir="rtl">
              <div class="slider_detail-heading">
                <h2>
                  نحن شركة رويال
                </h2>
                <h1>للخدمات الامنية </h1>
                <h1> والتوظيف في قطاع الامن</h1>
              </div>
              <div class="slider_detail-heading">
                <p class="text-center">
                  نقدم العديد من لخدمات في قطاع الامن لحمايتكم وحماية مؤسساتكم وايضا نوفر العدبد من الوظائق لكل من يرغب
                  في العمل في هذا القطاع
                </p>
              </div>
              <!-- <div class="slider_detail-btn">
                <a href="">
                  <img src="images/arrow.png" alt="" class="ml-2" />
                  <span>
                    قراءة المزيد
                  </span>
                </a>
              </div> -->
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="slider_box" style=" background-image: url(../images/banner3.jpg);">
            <div class="fixed_company-detail">
              <p>
                شركة خدمات امنية
              </p>
            </div>
            <div class="slider-detail" dir="rtl">
              <div class="slider_detail-heading">
                <h2>
                  نحن شركة رويال
                </h2>
                <h1>للخدمات الامنية </h1>
                <h1> والتوظيف في قطاع الامن</h1>
              </div>
              <div class="slider_detail-text">
                <p>
                  نقدم العديد من لخدمات في قطاع الامن لحمايتكم وحماية مؤسساتكم وايضا نوفر العدبد من الوظائق لكل من يرغب
                  في العمل في هذا القطاع
                </p>
              </div>
              <!-- <div class="slider_detail-btn">
                <a href="">
                  <img src="images/arrow.png" alt="" class="ml-2" />
                  <span>
                    قراءة المزيد
                  </span>
                </a>
              </div> -->
            </div>
          </div>
        </div>
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
  </section>
  <!-- end slider section -->

  <!-- welcome section -->
  <!-- <section class="welcome_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6">
          <div>
            <img class="img-fluid" src="images/welcome.jpg" alt="" />
          </div>
        </div>
        <div class=" col-md-6">
          <div class="welcome_detail">
            <div class="welcome_detail-btn">
              <a href="">
                <span>
                  قراءة المزيد
                </span>
                <img src="images/arrow-black.png" alt="" class="ml-2" />
              </a>
            </div>

            <h3>
              أهلا بكم
            </h3>
            <h2>
              في شركة رويال لخدمات الأمن
            </h2>
            <p>
              لدينا افراد امن وجارد لحمايتك وحماية المنشآت وتأمين المؤتمرات والاحتفالات والشخصيات الهامة. افراد جارد بلياقة بدنية وامانة وخبرة آمنية لسلامة الافراد والمباني والمناسبات والاحتفالات. حراسة افراد ومنشآت. حراسات جارد مدربه. لدينا افراد امن وجارد لحمايتك وحماية المنشآت وتأمين المؤتمرات والاحتفالات والشخصيات الهامة. افراد جارد بلياقة بدنية وامانة وخبرة آمنية لسلامة الافراد والمباني والمناسبات والاحتفالات. حراسة افراد ومنشآت. حراسات جارد مدربه.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- end welcome section -->

  <!-- service section -->
  <section class="service_section ">
    <div class="container">
      <div class="service_detail">
        <h3>
          اهم
        </h3>
        <h2>
         الخدمات التي نقدمها</h2>
      </div>
      <div class="service_img-container">
        <div class="service_img-box i-box-1">
          <a href="{{route('service',1)}}"> الأمن المصرفي</a>
        </div>
        <div class="service_img-box i-box-2">
          <a href="{{route('service',2)}}">حارس شخصي </a>
        </div>
        <div class="service_img-box i-box-3">
          <a href="{{route('service',3)}}">أمن الفنادق </a>
        </div>
        <div class="service_img-box i-box-4">
          <a href="{{route('service',4)}}"> امن المنازل</a>
        </div>
      </div>
      <!-- <div class="service_btn">
        <a href="">
          <span>
            قراءة المزيد
          </span>
          <img src="images/arrow-black.png" alt="" class="ml-2" />
        </a>
      </div> -->
    </div>
  </section>
  <!-- end service section -->

  <!-- security section -->

  <!-- <section class="security_section layout_padding">
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
    <div class="security_btn">
      <a href="">
        <span>
          قراءة المزيد
        </span>
        <img src="images/arrow-black.png" alt="" class="ml-2" />
      </a>
    </div>
  </section> -->
  <!-- end security section -->


  <!-- story section -->

  <!-- <section class="layout_padding story_section">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6">
          <div>
            <img class="img-fluid" src="images/security.jpg" alt="" />
          </div>
        </div>
        <div class=" col-md-6 p-5">
          <div class="story_detail">
            <h3>
              لدينا الكثر من
            </h3>
            <h2>
              قصص النجاح
            </h2>
            <p>
منذ بدات شركتنا في عام 1997 ونحن نقوم بدعم الكثير من الشركات والفنادق والمنازل واصحاب الاعمال بافراد الامن الموثوق بهم لحمايتم وحماية ممتلكاتهم وقد قدمنا نجاحا مبهرا في ذللك وايضا امتلكنا سمعة حسنة في مجال الامن والحراسةز نعمل دائما علي مساعدة المجتكع من خلال توفير فرص للشياي للعمل معنا في قطاع الامن ةالادارة وقد استطعنا اشغال الكثير من المتقدمين لوظائفنا بمرتبات مجزيةز
            </p>
            <div class="story_detail-btn">
              <a href="">
                <span>
                  قراءة المزيد
                </span>
                <img src="images/arrow-black.png" alt="" class="ml-2" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- end story section -->

  <!-- contact section -->
  <section class="contact_section layout_padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6 contact_form-container">
          <div class="contact_box">
            <h4>تقدم للوظيفة الان</h1>
              <form action="{{route('job.form')}}" method="post">
                @csrf
                <input type="text" name="name" required placeholder="اسمك">
                <input type="text" name="email" required placeholder="بريد إلكتروني">
                <input type="text" name="phone" required placeholder="رقم الهاتف">
                <br>
                <label for="" class="b-2">الوظيفة</label>
                <select class="form-control" required name="job" id="">
                    <option value="امن خاص">امن خاص</option>
                    <option value="امن الفنادق">امن الفنادق</option>
                    <option value="امن المنازل">امن المنازل</option>
                    <option value="الامن المصرفي">الامن المصرفي</option>
                </select>
                <div>
                  <button type="submit">
                    إرسال
                  </button>
                </div>
              </form>
          </div>
        </div>
        <div class=" col-md-6">
          <div id="map" class="h-100 w-100 ">

          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end contact section -->
@endsection
