<?php

namespace App\Traits;




/**
 * offer trait
 */
trait OfferTrait
{
    function saveImage($photo,$folder)
    {
        //save photo in folder
        $file_extension = $photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'dist/images/offers';
        $photo->move($path,$file_name);

        return $file_name;
    }
}
