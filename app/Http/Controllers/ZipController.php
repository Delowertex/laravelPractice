<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;
use File;

class ZipController extends Controller
{
    public function zipFile(){
        $zip = new ZipArchive;
        $filename = 'myzip.zip';

        if($zip->open(public_path($filename), ZipArchive::CREATE)===true){
            $files = File::files(public_path('myfiles'));
            foreach($files as $value){
                $file = basename($value);
                $zip->addFile($value, $file);
            }
            $zip->close();
        }

        return response()->download(public_path($filename));
    }
}
