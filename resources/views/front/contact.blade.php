@extends('front.layouts.master')
@section('content')
  <!-- contact section -->
  <section class="contact_section layout_padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6 contact_form-container">
          <div class="contact_box">
            <h4>تقدم للوظيفة الان</h1>
                <form action="{{route('contact.form')}}" method="post">
                    @csrf
                    <input type="text" name="name" required placeholder="اسمك">
                    <input type="email" name="email" required placeholder="بريد إلكتروني">
                    <input type="text" name="phone" required placeholder="رقم الهاتف">
                <input type="text" name="message" required placeholder="رسالتك">
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
