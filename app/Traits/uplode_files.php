<?php 
namespace App\Traits;
 
use Illuminate\Support\Facades\Storage;
trait uplode_files{


    function SaveImg($photo,$path){
        $file_extension =$photo->getClientOriginalName();
        $file_name=time() .$file_extension;
        $photo->move($path,$file_name);
        return $file_name;
    }

    function DeleteImg($photo,$path){
        Storage::disk($path)->delete($photo);
    }
}
