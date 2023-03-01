<div class="row">
    <div class="col-md-12 mb-5">
        <h3 class="text-center mb-4">راسلنا الان!</h3>
        <form id="contactForm" style="text-align: right;" method="post">
            @csrf
            <div class="control-group form-group">
                <div class="controls">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                        required data-validation-required-message="Please enter your name." value="{{ old('name') }}"
                        placeholder="الاسم بالكامل">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone"
                        required data-validation-required-message="Please enter your phone number."
                        value="{{ old('phone') }}" placeholder="رقم الهاتف">
                    @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        id="email" required data-validation-required-message="Please enter your email address."
                        value="{{ old('email') }}" placeholder="البريد الالكتروني">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <textarea rows="5" cols="100" class="form-control @error('message') is-invalid @enderror"
                        name="message" id="message" required
                        data-validation-required-message="Please enter your message" placeholder="الرسالة"
                        maxlength="999" style="resize:none">{{ old('message') }}</textarea>
                    @error('message')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">ارسال</button>
        </form>
    </div>
    <div class="col-md-6">
        <h3>{{ $contact_section->subtitle }}</h3>
        <p>
            <i style="color: #07AA07" class="fas fa-map-marker-alt"></i>
            {{ $setting->address }}
        </p>

        <p>
            {{ $setting->phone1 }}
            <a class="pe-5 ps-3" href="https://wa.me/966500774150">
                <i style="color: #07AA07; font-size:200%" class="fab fa-whatsapp"></i>
            </a>
            <a href="tel:00966500774150">
                <i style="color: #07AA07; font-size:200%" class="fas fa-phone-square"></i>
            </a>
        </p>

        <p>
            {{ $setting->phone2 }}
            <a class="pe-5 ps-3" href="https://wa.me/966537394580">
                <i style="color: #07AA07; font-size:200%" class="fab fa-whatsapp"></i>
            </a>
            <a href="tel:00966537394580">
                <i style="color: #07AA07; font-size: 200%" class="fas fa-phone-square"></i>
            </a>
        </p>

        <p>{{ $setting->phone3 }}
            <a class="pe-5 ps-3" href="https://wa.me/966594394745">
                <i style="color: #07AA07; font-size:200%" class="fab fa-whatsapp"></i>
            </a>
            <a href="tel:00966594394745"><i style="color: #07AA07; font-size:200%" class="fas fa-phone-square"></i>
            </a>
        </p>

        <p>
            <a style="color: #000" href="mailto:medahtahmed465@gmail.com">{{ $setting->email1 }}
                <i style="color: #07AA07;" class="fas fa-envelope px-3"></i>
            </a>
        </p>

        <p>
            <a style="color: #000;" href="mailto:aomarkhmis1234@gmail.com">{{ $setting->email2 }}
                <i style="color: #07AA07;" class="fas fa-envelope px-3"></i>
            </a>
        </p>

        <p>
            <i style="color: #07AA07;" class="ps-3 fas fa-calendar-check"></i>
            {{ $setting->appointment1 }}
        </p>

        <p>
            <i style="color: #07AA07;" class="ps-3 fas fa-calendar-check"></i>
            {{ $setting->appointment2 }}
        </p>
    </div>

    <div class="col-md-6">
        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3628.0335249046357!2d46.7234823!3d24.588039199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0ff202f3831b%3A0xf1617dae8e633e63!2z2YXYtdio2KfYqiDYs9iq2YrZhCDZhtmI2KfZgdmK2LEg2LTZhNin2YTYp9iq!5e0!3m2!1sen!2seg!4v1666437627350!5m2!1sen!2seg"></iframe>
    </div>
</div>



{{--
<div class="row">

   <div class="row">
        <div class="col-lg-8 mb-4 contact-left">


        </div>
    </div> --}}
