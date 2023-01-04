<?php

namespace App\Http\Controllers\Front;



use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function showUsername(){
        return 'hytham';
    }

    public function getIndex()
    {
        // $data = [ 'ahmed', 'abbas', 'mohamed'];
        $data = [];
        return view('welcome',compact('data'));

    }
}

/* $data = [];
            $data['id'] = 5;
            $data['name'] = 'hytham'; */
        /* $obj = new \stdClass();
        $obj->name = 'ahmed';
        $obj->id = 5;
        $obj->gender = 'male';
        return view('welcome',compact('obj')); */


?>
