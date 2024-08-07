<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SalesPoint;
use App\Models\Chief;
use App\Models\CustomerReview;

class ProductController extends Controller {

    public function home() {
        $candyProducts = Product::where('type', 'candy')->get();

        return view('index', ['candyProducts'=>$candyProducts]);
    }

    public function about() {
        $products = Product::all();
        $chiefs = Chief::all();
        $reviews = CustomerReview::all();

        return view('about', ['products'=>$products, 'chiefs'=>$chiefs, 'reviews'=>$reviews]);
    }

    public function salespoints() {
        $salespoints = SalesPoint::all();  
        return view('salespoint', ['salespoints'=>$salespoints]);
    }

    public function salespoint($title) {
        $titleUC = ucwords(str_replace("-", " ", $title));
        $salespoint = SalesPoint::where('title', $titleUC)->first();
        return view('salespoint-detail', ['salespoint'=>$salespoint]);
    }

    public function contact() {
              
        return view('contact');
    }

    public function candy() {

        $products = Product::where('type', 'candy')->get();

        return view('candy', ['products'=>$products]);
    }

    public function diary() {
        $products = Product::where('type', 'diary')->get();

        return view('diary', ['products'=>$products]);
    }

    public function products($category) {

        $products = Product::where('category', strtoupper(str_replace("-", " ", $category)))->get();

        return view('products', ['products'=>$products, 'category'=>$category]);
    }

    public function detail($productName) {
        $singleProduct = Product::where('name', $productName)->first();
        $type = $singleProduct->type;
        if($type == 'diary'){
            $relatedProducts = Product::where('type', $type)->get();
        }
        else {
            $category = $singleProduct->category;
            $relatedProducts = Product::where('category', $category)->get();
        }
        return view('single-product', ['type'=>$type,'singleProduct'=>$singleProduct, 'relatedProducts'=>$relatedProducts]);
        // $locationIds = empty(request()->location_ids) ? [] : request()->location_ids;
        // $sizeIds = empty(request()->size_ids) ? [] : request()->size_ids;
        // $keyword = empty(request()->keyword) ? '' : request()->keyword;

        // $locations = Location::withCount(['products' => function($q) {
        //     $q->where('products.is_active', true)
        //         ->where('products.is_verified', true);
        // }])->where('is_active', TRUE)
        // ->orderBy('name', 'ASC')
        // ->having('products_count', '>', 0)->get();
        // $sizes = Size::withCount(['products' => function($q) {
        //     $q->where('is_active', true)
        //         ->where('is_verified', true);
        // }])->where('is_active', TRUE)
        // ->orderBy('name', 'ASC')
        // ->having('products_count', '>', 0)->get();

        // $products = Product::where('is_active', true)->where('is_verified', true);
        // if (!empty($locationIds)) {
        //     $products = $products->whereIn('location_id', $locationIds);
        // }

        // if (!empty($sizeIds)) {
        //     $products = $products->whereIn('size_id', $sizeIds);
        // }

        // if (!empty($keyword)) {
        //     $products = $products->where('name', 'like', '%'.$keyword.'%');
        // }

        // $products = $products->orderBy('name', 'ASC')->orderBy('pack_size', 'asc')->get();
    }
}
