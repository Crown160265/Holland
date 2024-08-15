@extends('layouts.main')

@section('main')
    @php
        $title = $salespoint->title;
        $description = $salespoint->description;
        $position = $salespoint->position;
        $owner = $salespoint->owner;
        $titletolow = strtolower(str_replace(" ", "-", $title));
        $imageUrl = '/assets/images/make-sale' .'/' . $titletolow . '.jpg';
        $facebookUrl = $salespoint->facebook;
        $twitterUrl = $salespoint->twitter;
        $pinterestUrl = $salespoint->pinterest;
        $instagramUrl = $salespoint->instagram;
    @endphp
    <div class="breadcrumb background-red" style="height: 25vh;">
    </div>
    <div class="blog-sidebar blog-sidebar-right" style="background-image: url(/assets/images/background-1.png);">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12 section-padding-04">
                    <div class="">
                        <div class="single-blog">
                            <div class="border-red">
                                <div class="single-blog-image border-blue">
                                    <img src="{{$imageUrl}}" alt="Single-Blog">
                                </div>
                            </div>
                            <div class="single-blog-content pt-10">
                                <div class="section-title-04">
                                    <h3 class="slider-content-04__title_contact text-red"><a href="/salespoint/{{$titletolow}}">{{$title}}</a></h3>
                                </div>
                                <div class="blog-post__text text-black">{{$description}}</div>

                                <div class="single-blog-bottom">
                                    <div class="col-auto">
                                        <div class="single-blog-tags">
                                            <div class="text-blue">Position : {{$position}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-blog-bottom">
                                    <div class="col-auto">
                                        <div class="single-blog-tags">
                                            <div class="text-blue">Owner : {{$owner}}</div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="single-blog-share">
                                            <span class="label">Share:</span>
                                            <div class="social">
                                                <a href="{{$facebookUrl}}"><i class="lastudioicon-b-facebook"></i></a>
                                                <a href="{{$twitterUrl}}"><i class="lastudioicon-b-twitter"></i></a>
                                                <a href="{{$pinterestUrl}}"><i class="lastudioicon-b-pinterest"></i></a>
                                                <a href="{{$instagramUrl}}"><i class="lastudioicon-b-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-blog-comments">
                                    <h4 class="single-blog-title">Leave a Reply</h4>
                                    <form class="contact-section2_form" id="contact-form" action="#" method="post">
                                        <div class="row">
                                            <div class="col-sm-4 col-12 form-p">
                                                <div class="form-group">
                                                    <input class="form-field border-red" type="text" placeholder="First Name*">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 form-p">
                                                <div class="form-group">
                                                    <input class="form-field border-red" type="email" placeholder="Email*">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-12 form-p">
                                                <div class="form-group">
                                                    <input class="form-field border-red" type="text" placeholder="Website">
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-p">
                                                <div class="form-group">
                                                    <textarea class="form-control text-area border-blue" name="con_message" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-p">
                                                <div class="form-group mb-0 d-flex justify-content-start">
                                                    <button class="btn btn-secondary btn-hover-primary rounded-0" type="submit">Post comments</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Section End -->
@endsection
    