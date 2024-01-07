<?php

namespace App\Services;

use Illuminate\Http\Request;

class FirebaseMethods
{
    public function upload($fileParams)
    {
        if ($fileParams){

        $firebase_storage_path = 'Images/';
        $name     = pathinfo($fileParams->getClientOriginalName(), PATHINFO_FILENAME);
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = $fileParams->getClientOriginalExtension();
        $timestamp = time();
        $file      = $name . '_' . $timestamp . '.' . $extension;
        if ($fileParams->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }
        $url = env('FIREBASE_URL') . '/v0/b/' . env('FIREBASE_STORAGE_DEFAULT_BUCKET') . '/o/' . 'Images%2F' . $file . '?alt=media';
        return $url;
        }
    }

    function extractNameFromUrl($url)
    {
        if ($url){
        $urlParts = parse_url($url);
        $path = $urlParts['path'];
        $fileName = pathinfo($path, PATHINFO_BASENAME);
        $decodedFileName = urldecode($fileName);

        return $decodedFileName;
        }
    }

    function deleteFile($fileUrl){
        if ($fileUrl){
        app('firebase.storage')->getBucket()->object($fileUrl)->delete();
        }
    }
}
