<?php

namespace App\Http\Controllers;

use App\ProductCar;
use Illuminate\Http\Request;

class ProductCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProductCar::all();
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
    public function store(Request $request, ProductCar $productCar)
    {
        $productCar->fill($request->all())->save();
        
        return $productCar;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCar $productCar)
    {
        return $productCar;
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
    public function update(Request $request, ProductCar $productCar)
    {
        $productCar->fill($request->all())->save();
        
        return $productCar;
    }

    public function updateStatus(Request $request, ProductCar $productCar)
    {
        $productCar->fill([
            'cart_id' => '2'
        ])->save();
        
        return $productCar;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCar $productCar)
    {
        $productCar->delete();

        return response()->json(null, 204);
    }
}
