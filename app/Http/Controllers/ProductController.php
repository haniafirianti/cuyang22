<?php

namespace App\Http\Controllers;

use App\CategoryProduct;
use App\Product;
use App\User;
use App\DetailProduct;
use Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::join('category_products', 'products.product_category_id', '=', 'category_products.id')
        ->select(
            'products.id as product_id',
            'products.*',
            'category_products.*')->get();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::get();
        $code = rand();
        $categories = CategoryProduct::orderBy('category_name','asc')->get();
        return view('products.create', compact('users','code','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_category_id' => 'required',
        ]);
        $users = Auth::user();
        
        $products = new Product;
        $products->product_name =  $request->product_name;
        $products->product_category_id =  $request->product_category_id;
        
        $products->product_status = "1";
        $products->created_by = $users->id;
        $products_save = $products->save();

        $request = $request->input();
        if ($products_save) {
            foreach ($request as $key => $requestType) {
            
                if (is_array($requestType)) {

                    foreach ($requestType as $requestKey => $requestValue) {
                        $keyName = 'item';
                        if ($keyName == 'item') {
                            $requestValue = str_replace(".", "", $requestValue);
                        }
                        $productDetails = new DetailProduct;
                        $productDetails->product_id = $products->id;
                        $productDetails->type = $keyName;
                        $productDetails->key = $requestKey;
                        $productDetails->value = $requestValue;
                        $productDetails->save();
                    }
                }
            }
        } else {
            # code...
        }
        

        Alert::success('Barang', 'Berhasil di tambahkan');
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    // $products = Product::leftjoin('categories','products.categories_id','=','categories.id')->leftjoin('details_products','details_products.product_id', '=','products.id')->select(
    //        'products.*',
    //        'categories.category_name',
    //        'details_products.*')
    public function show($id)
    {

        $products = DetailProduct::findOrFail($id);

        return view('products.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = Auth()->user();
        $products = Product::whereId($id)->first();
        dd($products);
        $products->deleted_by = $users->id;
        $products->save();
        $products->delete();

        Alert::success('Barang', 'Berhasil Di Hapus');
        return redirect()->back();
    }
}
