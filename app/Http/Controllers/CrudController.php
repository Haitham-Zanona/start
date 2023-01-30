<?php

namespace App\Http\Controllers;

use App\Events\VideoViewer;
use App\Models\Offer;
use App\Models\Videos;
use App\Traits\OfferTrait;
use Illuminate\Http\Request;
use App\Http\Requests\OfferRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Concerns\InteractsWithInput;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
// use App\Http\Controllers\Redirect as Redirect;

class CrudController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    use OfferTrait;
    public function __construct()
    {

    }

     public function getOffers(){
        return Offer::select('id','name')->get();
     }

      /* public function store(){
        Offer::create([
            'name' => 'Hytham',
            'price' => '5000',
            'details' => 'offer details',
        ]);

    } */
      public function store(OfferRequest $request){
        //validate data before insert to database
        /* $rules = [
            'name' => 'required|max:100|unique:offers,name',
            'price' => 'required|numeric',
            'details' => 'required',
        ]; */
        /* $messages = [
            'name.required' => __('messages.offer name required'),
            'name.unique' => __('messages.offer name must be unique'),
            'name.max' => __('messages.offer name must be less than 100 letter'),
            'price.required' => __('messages.offer price required'),
            'price.numeric' => __('messages.offer price should be number'),
            'details.required' => __('messages.offer details required'),
        ]; */
       /*  $validator = Validator::make($request->all(),$rules,$messages);
        if($validator ->fails()){
            return $validator->errors()->first(); //(if you want just the first error)


        } */

        /* if($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput($request->all());
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        } */

        $file_name = $this->saveImage($request -> photo, 'dist/images/offers');

        //insert
        $offer = Offer::create(([
            'photo'=>$file_name,
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'price' =>$request->price,
            'details_ar' =>$request->details_ar,
            'details_en' =>$request->details_en,
        ]));

        return redirect()->back()->with(['success'=>__('messages.Offer added successfully')]);
    }



    public function create(){
        return view('offers.create');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   /*  public function index()
    {
        return view('home');
    } */

    public function getAllOffers()
    {
       $offers = Offer::select('id',
        /* 'name_ar',
        'name_en', */
        'price',
        'photo',
        /* 'details_ar',
        'details_en', */
        'name_'.LaravelLocalization::getCurrentLocale().' as name',
        'details_'.LaravelLocalization::getCurrentLocale().' as details',
        )->get();
        return view('offers.all', compact('offers'));
    }

    public function editOffer($offer_id){

        //Offer::findOrFail($offer_id);
        $offer = Offer::find($offer_id);//search in given table id only
        if (!$offer) {
            return redirect()->back();
        }

        $offer = Offer::select('id','name_ar','name_en','photo','price','details_ar','details_en') ->find($offer_id);
        return view('offers.edit', compact('offer'));
        //return $offer_id;
        }


    public function delete($offer_id)
    {
            //check if offer id exists
        $offer = Offer::find($offer_id);    // Offer::where('id','$offer_id')-> first();

        if (!$offer) {
            return redirect()->back()->with(['error' => __('messages.offer not exist')]);
        }
        $offer->delete();
        return redirect()->route('offers.all')->with(['success'=>__('messages.offer deleted successfully')]);

    }

    public function updateOffer(OfferRequest $request,$offer_id)
    {
        //validation request

        //Check if offer exists
        $offer = Offer::select('id','name_ar','name_en','photo','price','details_ar','details_en') ->find($offer_id);

        if (!$offer) {
            return redirect()->back();
        }
        //update data
        $offer->update($request -> all());

        return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);

        /* $offer->update([
            'name_ar' => $request ->name_ar,
            'name_en' => $request ->name_en,

        ]); */
    }


    public function getVideo()
    {
        $video = Videos::first();
        // return view('video',['video', $video]);
        event(new VideoViewer($video));
        return view("video") -> with("video", $video);
    }
}
