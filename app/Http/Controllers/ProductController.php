<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;
use App\Models\SalesPoint;
use App\Models\Chief;
use App\Models\CustomerReview;

class ProductController extends Controller {

    public function home() {
        $candyProducts = Product::where('type', 'candy')->get();
        $diaryProducts = Product::where('type', 'diary')->get();

        return view('index', ['candyProducts'=>$candyProducts, 'diaryProducts'=>$diaryProducts]);
    }

    // public function about() {
    //     $products = Product::all();
    //     $chiefs = Chief::all();
    //     $reviews = CustomerReview::all();

    //     return view('about', ['products'=>$products, 'chiefs'=>$chiefs, 'reviews'=>$reviews]);
    // }

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
        $id = $singleProduct->id;
        if($type == 'diary'){
            $relatedProducts = Product::where('type', $type)->get();
        }
        else {
            $category = $singleProduct->category;
            $relatedProducts = Product::where('category', $category)->get();
        }
        $customerReviews = CustomerReview::where('productId', $id)->where('productType', $type)->get();
        return view('single-product', ['type'=>$type,'singleProduct'=>$singleProduct, 'relatedProducts'=>$relatedProducts, 'customerReviews'=>$customerReviews]);
    }

    public function store(Request $request, Response $response) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'productId' => 'required|integer',
            'productType' => 'required|string|max:255',
            'score' => 'required|numeric',
            'comment' => 'required|string|max:10000',
        ]);

        // dd($response);

        try {
            CustomerReview::create([
                'name' => $request->name,
                'email' => $request->email,
                'productId' => $request->productId,
                'productType' => $request->productType,
                'score' => $request->score,
                'comment' => $request->comment
            ]);
            return redirect()->back()->with('success', 'Review submitted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to submit review: ' . $e->getMessage()]);
        }
        
    }
}
