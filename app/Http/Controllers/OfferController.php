<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Traits\OfferTrait;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    use OfferTrait;
    public function create()
    {
        //view form to add this offer
        return view('ajaxoffers.create');
    }

    public function store(Request $request)
    {
        //save offer into DB using AJAX

       /*  $file_name = $this->saveImage($request -> photo, 'dist/images/offers'); */
        //insert table offers in database
        Offer::create(([
            /* 'photo'=>$file_name, */
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'price' =>$request->price,
            'details_ar' =>$request->details_ar,
            'details_en' =>$request->details_en,
        ]));
    }
}
