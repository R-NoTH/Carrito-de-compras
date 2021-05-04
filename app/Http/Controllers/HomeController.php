<?php

namespace App\Http\Controllers;

use App\Models\CarShopping;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allProducts = Product::all();
        $carProducts = CarShopping::all();
        return view('main', compact('allProducts', 'carProducts'));
    }
    public function modal(Request $request)
    {
        $id = $request->id;
        $product = Product::find($id);

        return Response()->json($product);
    }
    public function carShopping(Request $request)
    {
        // $status = $request->status;
        $campos = $request->except('_token');
        $newproduct = new CarShopping();
        $newproduct->create($campos);
        return back();
    }
    public function buyProduct(Request $request)
    {
        // $status = $request->status;
        $idproduct = $request->id;
        $productCars = CarShopping::where('product_id',$idproduct)->get();
        foreach($productCars as $productCar){
            $productCar->status = 1;
            $productCar=$productCar;
            $productCar->save();
        }
        // dd($request);

        return Response()->json($productCar);
    }
    public function editProduct(Request $request)
    {

        $idproduct = $request->id;



        return Response()->json($request);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
