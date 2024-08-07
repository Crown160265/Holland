
@extends('layouts.main')

@section('main')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb background-red" style="height: 25vh;">
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Single Product Section Start -->
    <div class="section section-margin-top section-padding-03">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 offset-lg-0 col-md-10 offset-md-1">

                    <!-- Product Details Image Start -->
                    <div class="product-details-img d-flex overflow-hidden flex-row">

                        <!-- Single Product Image Start -->
                        <div class="single-product-vertical-tab swiper-container order-2">
                            @php
                                $singleProductName = $singleProduct->name;
                                $singleProductPrice = $singleProduct->price;
                                $singleProductCategory = $singleProduct->category;
                                if($type=='diary') {
                                    $singleImageUrl = '/assets/images/diary/' . $singleProductName . '.jpg'; 
                                }
                                else {
                                    $singleProductTemp = $singleProduct->temp;
                                    $singleImageUrl = '/assets/images/' . strtolower(str_replace(" ", "-", $singleProductCategory)) . '/' . $singleProductName . '.jpg'; 
                                }
                            @endphp
                            <div class="swiper-wrapper popup-gallery" id="popup-gallery">
                                
                                <a class="swiper-slide h-auto" href="">
                                    <img class="w-100" src="{{$singleImageUrl}}" style="height:auto; aspect-ratio:1/1;" alt="Product">
                                </a>
                                <a class="swiper-slide h-auto" href="">
                                    <img class="w-100" src="{{$singleImageUrl}}" style="height:auto; aspect-ratio:1/1;" alt="Product">
                                </a>
                                <a class="swiper-slide h-auto" href="">
                                    <img class="w-100" src="{{$singleImageUrl}}" style="height:auto; aspect-ratio:1/1;" alt="Product">
                                </a>
                                <a class="swiper-slide h-auto" href="">
                                    <img class="w-100" src="{{$singleImageUrl}}" style="height:auto; aspect-ratio:1/1;" alt="Product">
                                </a>
                                <a class="swiper-slide h-auto" href="">
                                    <img class="w-100" src="{{$singleImageUrl}}" style="height:auto; aspect-ratio:1/1;" alt="Product">
                                </a>
                                <a class="swiper-slide h-auto" href="">
                                    <img class="w-100" src="{{$singleImageUrl}}" style="height:auto; aspect-ratio:1/1;" alt="Product">
                                </a>
                            </div>

                            <!-- Swiper Pagination Start -->
                            <!-- <div class="swiper-pagination d-none"></div> -->
                            <!-- Swiper Pagination End -->

                            <!-- Next Previous Button Start -->
                            <div class="swiper-button-vertical-next swiper-button-next"><i class="lastudioicon-arrow-right"></i></div>
                            <div class="swiper-button-vertical-prev swiper-button-prev"><i class="lastudioicon-arrow-left"></i></div>
                            <!-- Next Previous Button End -->

                        </div>
                        <!-- Single Product Image End -->

                    </div>
                    <!-- Product Details Image End -->

                </div>
                <div class="col-lg-6">

                    <!-- Product Summery Start -->
                    <div class="col-lg-12 single-product-tab">
                    <div class="tab-content mb-text" id="myTabContent">
                        <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                            <div>
                                <h5 class="product-desc-title">{{$singleProductName}}</h5>
                                <p class="product-desc-text">Lekker fris {{$singleProductName}} in een snoeperige hartvorm. Makkelijk klein zakje, lekker voor onderweg. Eerlijk gemaakt: zonder gelatine, 100% vegan.</p>
                            </div>
                        </div>
                        <div class="product-additional-info" id="connect-4" role="tabpanel" aria-labelledby="review-tab">
                            <div class="size-tab table-responsive-lg">
                                <table class="table border mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="cun-name"><span>Color</span></td>
                                            <td>Blue, Gray, Green, Red, Yellow</td>
                                        </tr>
                                        <tr>
                                            <td class="cun-name"><span>Size</span></td>
                                            <td>Large, Medium, Small</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                    <!-- Product Summery End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Single Product Section End -->

    <!-- Product Section Strat -->
    <div class="section-padding-03 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Strat -->
                    <div class="section-title">
                        <h2 class="section-title__title">Related Product</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <!-- Product Active Strat -->
            <div class="product-active">
                <div class="swiper">
                    <div class="swiper-wrapper">
                    @foreach($relatedProducts as $product)
                        @php
                            $productName = $product->name;
                            $productPrice = $product->price;
                            $productCategory = $product->category;
                            if($type == 'diary') {
                                $imageUrl = '/assets/images/diary/' . $productName . '.jpg'; 
                            }
                            else {
                                $productTemp = $product->temp;
                                $imageUrl = '/assets/images/' . strtolower(str_replace(" ", "-", $productCategory)) . '/' . $productName . '.jpg'; 
                            }
                        @endphp
                        <div class="swiper-slide">
                            <!-- Product Item Start -->
                             
                                <div class="product-item text-center">
                                    @if($type == 'candy' && $productTemp != null)
                                        <div class="product-item__badge">{{$productTemp}}</div>
                                    @endif
                                    <div class="product-item__image border w-100">
                                        <a href="/product/{{$productName}}"><img  style="width:70%; height:auto; aspect-ratio:1/1;" src="{{$imageUrl}}" alt="Product"></a>
                                    </div>
                                    <div class="product-item__content pt-5">
                                        <h5 class="product-item__title"><a href="/product/{{$productName}}">{{$productName}}</a></h5>
                                    </div>
                                </div>
                            
                            <!-- Product Item End -->
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"><i class="lastudioicon-arrow-right"></i></div>
                    <div class="swiper-button-prev"><i class="lastudioicon-arrow-left"></i></div>
                </div>
            </div>
            <!-- Product Active End -->

        </div>
    </div>
    <!-- Product Section End -->
@endsection
