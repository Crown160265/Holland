@extends('layouts.main')

@section('main')
    
    <div class="slider-section slider-active overflow-hidden">
        <div class="single-slider-04 animation-style-01" style="background-image: url(/assets/images/make-sale/bg4.png);">
            <div class="container">
                <!-- <div class="col-md-6"> -->
                    <div class="rolling-text slider-content-04__title text-white">
                        <span>Sales</span>
                    </div><br>
                    <div class="rolling-text slider-content-04__title text-white">
                        <span>Point</span>
                    </div>
                <!-- </div> -->
                

            </div>
        </div>
    </div>
    
    <div class="shop-product-section blog-sidebar blog-sidebar-right">
        <div class="row">
            <div class="col-12 section-padding-04 padding-x-60 pb-0">
                <div class="blog-sidebar_ml">
                    @foreach ($salespoints as $salespoint)
                        @php
                            $id = $salespoint->id;
                            $title = $salespoint->title;
                            $description = $salespoint->description;
                            $position = $salespoint->position;
                            $owner = $salespoint->owner;
                            $titletolow = strtolower(str_replace(" ", "-", $title));
                            $imageUrl = '/assets/images/make-sale' .'/' . $titletolow . '.jpg';
                        @endphp
                        @if($id % 2 == 1)
                            <div class="blog-post row">
                                <div class="col-md-6">
                                    <a href="/salespoint/{{$titletolow}}" class="blog-post_thumb"><img src="{{$imageUrl}}" style="border-radius:50px;" alt="SalesPoint-Image"></a>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <div class="blog-post__content">
                                        <div class="section-title-04">
                                            <h3 class="slider-content-04__title_contact text-red"><a href="/salespoint/{{$titletolow}}">{{$title}}</a></h3>
                                        </div>
                                        <div class="blog-post__text blog-post__overflow text-black">{{$description}}</div>
                                        
                                        <div class="blog-post__text text-blue">Owner : {{$owner}}</div>
                                        <div class="blog-post__text text-blue">Position : {{$position}}</div>
                                    </div>
                                </div>
                            </div>
                        @else 
                            <div class="blog-post row">
                                <div class="col-md-5">
                                    <div class="blog-post__content">
                                        <div class="section-title-04">
                                            <h3 class="slider-content-04__title_contact text-red"><a href="/salespoint/{{$titletolow}}">{{$title}}</a></h3>
                                        </div>
                                        <div class="blog-post__text blog-post__overflow text-black">{{$description}}</div>
                                        
                                        <div class="blog-post__text text-blue">Owner : {{$owner}}</div>
                                        <div class="blog-post__text text-blue">Position : {{$position}}</div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-6">
                                    <a href="/salespoint/{{$titletolow}}" class="blog-post_thumb"><img src="{{$imageUrl}}" style="border-radius:50px;" alt="SalesPoint-Image"></a>
                                </div>
                            </div>
                            
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <!-- Google Map Area Start -->
        <div class="google-map-area w-100" data-aos="fade-up" data-aos-duration="1000">
            <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2136.986005919501!2d-73.9685579655238!3d40.75862446708152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e4a1c884e5%3A0x24fe1071086b36d5!2sThe%20Atrium!5e0!3m2!1sen!2sbd!4v1585132512970!5m2!1sen!2sbd"></iframe>
        </div>
        <!-- Google Map Area Start -->
    </div>
    <!-- Why Choose Section End -->
@endsection
    