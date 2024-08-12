
@extends('layouts.main')

@section('main')
<div class="breadcrumb background-red" style="height: 25vh;">
    </div>
   
    <div class="slider-section slider-active overflow-hidden">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Single Slider Start -->
                <div class="swiper-slide single-slider-04 animation-style-04" style="height:75vh; background-image: url('/assets/images/bg/redbg6.jpg');">
                    @php
                        
                        for($i = 1; $i <=20; $i++) {
                            $imageHtml = '';
                            $randomNumber1 = rand(1, 9);
                            $randomNumber2 = rand(($i-1)*100, $i*100);
                            $randomNumber3 = rand(1, 8);
                            $imageHtml .= '<img class="call-to-action-more__images_' . $randomNumber1 . '" style="left:' . $randomNumber2 . 'px;" src="assets/images/drop-images/petal' . $randomNumber3 . '.png" alt="Svg Text">';
                            echo $imageHtml;
                        }
                        
                    @endphp
                    <div class="container">
                        <!-- Slider Content Start -->
                        <div class="slider-content-04">
                            <h1 class="slider-content-04__title text-white">Contact Us</h1>
                            <a class="slider-content-07__btn btn slider-btn-02 rounded-pill" href="{{url('/')}}"><span>Home</span></a>
                        </div>
                        <!-- Slider Content Start -->
                    </div>
                </div>
                
                <!-- Single Slider End -->
            </div>
        </div>
    </div>
    <div class="section-padding-03 contact-section2 contact-section2_bg" style="background-image: url('/assets/images/bg/whitebg.jpg'); background-size:cover; background-repeat:no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="contact-section2_formbg h-100">
                        <div class="section-title-04">
                            <h5 class="slider-content-04__title_contact text-red">Information</h5>
                        </div>
                        <!-- <h2 class="contact-section2__title">Information</h2> -->
                        <div class="contact-section2__text text-black">Voor vragen of assistentie kunt u gerust contact met ons opnemen via ons contactformulier of via e-mail op uw e-mailadres.<br> Ons klantenserviceteam is beschikbaar van maandag tot en met vrijdag, van 9.00 tot 17.00 uur, om u te helpen met vragen of zorgen.<br> U kunt ons ook rechtstreeks bellen op uw telefoonnummer voor onmiddellijke assistentie.</div>
                        <ul class="contact-section2_list">
                            <li>
                                <span class="contact-section2_list__icon"><i class="lastudioicon lastudioicon-pin-3-2"></i></span>
                                <span class="contact-section2_list__text text-black">6391 Elgin St. Celina, Delaware 10299 <br> 2464 Royal Ln. Mesa, New Jersey 45463</span>
                            </li>
                            <li>
                                <span class="contact-section2_list__icon"><i class="lastudioicon lastudioicon-phone-2"></i></span>
                                <span class="contact-section2_list__text text-black">+880-123-456789 <br> +880-123-456789</span>
                            </li>
                            <li>
                                <span class="contact-section2_list__icon"><i class="lastudioicon lastudioicon-mail"></i></span>
                                <span class="contact-section2_list__text text-black">info@admin.com <br> test.mail.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <div class="contact-section2_formbg h-100">
                        <div class="section-title-04 text-center">
                            <h5 class="slider-content-04__title_contact text-red">Say Something</h5>
                        </div>
                        <form class="contact-section2_form" id="contact-form" action="assets/php/mail.php" method="post">
                            <div class="row">
                                <div class="col-sm-6 col-6 form-p">
                                    <div class="form-group">
                                        <label>First Name*</label>
                                        <input class="form-field" type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-6 form-p">
                                    <div class="form-group">
                                        <label>Last Name*</label>
                                        <input class="form-field" type="text" name="lastname">
                                    </div>
                                </div>
                                <div class="col-md-12 form-p">
                                    <div class="form-group">
                                        <label>Email Address*</label>
                                        <input class="form-field" type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12 form-p">
                                    <div class="form-group">
                                        <label>Message*</label>
                                        <textarea class="form-control text-area" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 form-p">
                                    <div class="form-group mb-0 d-flex justify-content-center">
                                        <button class="btn btn-secondary btn-hover-primary" type="submit" value="Send Massage">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Message Notification -->
                        <div class="form-messege"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact form section End -->

    <!-- Contact Map Start -->
    <div class="section">
        <!-- Google Map Area Start -->
        <div class="google-map-area w-100" data-aos="fade-up" data-aos-duration="1000">
            <iframe class="contact-map" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Netherland,%20Western%20Europe+(Netherland)&amp;t=&amp;z=10&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </div>
        <!-- Google Map Area Start -->
    </div>
    <!-- Contact Map End -->
@endsection
    