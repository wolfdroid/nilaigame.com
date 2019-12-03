<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Product;
use App\Review;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$votes = Vote::orderBy('created_at', 'desc')->paginate(10);
        /*
        $products = Product::orderBy('id', 'asc')->paginate(15);
        */
        $scores = DB::table('reviews')
            ->select('product_id', DB::raw('avg(score) as avg_score'))
            ->groupBy('product_id');
        $products = DB::table('products')
            ->leftJoinSub($scores,'scores', function($join){
                $join->on('products.id', '=', 'scores.product_id');
            })
            ->orderBy('created_at', 'desc')->paginate(10);
        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Required files
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'developer_id' => 'required',
            'publisher_id' => 'required',
            'release' => 'required',
            'description' => 'required'
        ]);

        // Post a New Game
        $product = new Product;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->developer_id = $request->input('developer_id');
        $product->publisher_id = $request->input('publisher_id');
        $product->release = $request->input('release');
        $product->description = $request->input('description');
        $product->user_id = auth()->user()->id;
        $product->save();

        // Redirect page with messages
        return redirect('/products')->with('success', 'Product Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        /*
        $scores = DB::table('reviews')
            ->select('product_id', DB::raw('avg(score) as avg_score'))
            ->groupBy('product_id');
        $products = DB::table('products')
            ->leftJoinSub($scores,'scores', function($join){
                $join->on('products.id', '=', 'scores.product_id');
            })
            ->orderBy('created_at', 'desc')->paginate(10);
        */ 
       
        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Required files
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'developer_id' => 'required',
            'publisher_id' => 'required',
            'release' => 'required',
            'description' => 'required'
        ]);

        // Post a New Game
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->developer_id = $request->input('developer_id');
        $product->publisher_id = $request->input('publisher_id');
        $product->release = $request->input('release');
        $product->description = $request->input('description');
        $product->save();

        // Redirect page with messages
        return redirect('/products')->with('success', 'Product Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete the product
        $product = Product::find($id);
        $product->delete();

        // Redirect page with messages
        return redirect('/products')->with('success', 'Product Removed');
    }
}
