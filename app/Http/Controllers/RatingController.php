<?php

namespace App\Http\Controllers;

use App\Models\DoctorTeeth;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            $stars_rated = $request->input('product_rating');
            $product_id = $request->input('product_id');

            $product_check = DoctorTeeth::where('id', $product_id)->where('status','0')->first();
                if($product_check)
                {
                    $verified_purchase = DoctorTeeth::where('orders.user_id', Auth::id())
                        ->join('order_items','orders.id','order_items.order_id')
                        ->where('order_items.prod_id',$product_id)->get();

                    if($verified_purchase)
                      {
                        $existing_rating = Rating::where('user_id',Auth::id())->where('prod_id',$product_id)->first();
                        if($existing_rating)
                        {
                            $existing_rating->$stars_rated = $stars_rated;
                            $existing_rating->update();
                        }
                            else
                        {
                            Rating::create([
                            'user_id'=>Auth::id(),
                            'prod_id'=> $product_id,
                            'stars_rated'=> $stars_rated
                        ]);
                        }
                            return redirect()->back();
                        }
                            else
                        {
                            return redirect()->back()->with('status',"You cannot rateaproduct without purchase");
                        }
                    }
                            else
                {
                            return redirect()->back()->with('status',"sss");
                    }
         }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show(Rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rating $rating)
    {
        //
    }
}
