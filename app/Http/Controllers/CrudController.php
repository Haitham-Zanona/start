<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Concerns\InteractsWithInput;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
// use App\Http\Controllers\Redirect as Redirect;

class CrudController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
      public function store(Request $request){
        //validate data before insert to database
        $rules = [
            'name' => 'required|max:100|unique:offers,name',
            'price' => 'required|numeric',
            'details' => 'required',
        ];
        $messages = [
            'name.required' => __('messages.offer name required'),
            'name.unique' => __('messages.offer name must be unique'),
            'name.max' => __('messages.offer name must be less than 100 letter'),
            'price.required' => __('messages.offer price required'),
            'price.numeric' => __('messages.offer price should be number'),
            'details.required' => __('messages.offer details required'),
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator ->fails()){
            return $validator->errors()->first(); //(if you want just the first error)


        }

        /* if($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput($request->all());
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        } */





        //insert
        Offer::create(([
            'name' => $request->name,
            'price' =>$request->price,
            'details' =>$request->details,
        ]));

        return redirect()->back()->with(['success'=>'تم اضافة العرض بنجاح']);


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
}
