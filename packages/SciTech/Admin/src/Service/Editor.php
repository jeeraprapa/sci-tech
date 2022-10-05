<?php

namespace SciTech\Admin\Service;

use File;
use Illuminate\Support\Facades\Storage;

class Editor
{
    public function uploadImage($field)
    {
        $field = str_replace('<?xml encoding="utf-8" ?>','',$field);

        $dom = new \DomDocument();
        $dom->loadHtml('<?xml encoding="utf-8" ?>' .$field, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $image_file = $dom->getElementsByTagName('img');

        if (!File::exists(public_path('uploads'))) {
            File::makeDirectory(public_path('uploads'));
        }

        foreach($image_file as $key => $image) {
            $dataImage = $image->getAttribute('src');
            if ($this->checkBase64Image($dataImage)) {
                list($type, $dataImage) = explode(';', $dataImage);
                list(, $dataImage) = explode(',', $dataImage);

                $uniqueKey = $this->generateRandomString();
                $img_data = base64_decode($dataImage);
                $image_name = "/uploads/" . time() . $key . $uniqueKey . '.png';
                $path = public_path() . $image_name;
                if(env('MEDIA_DISK') != 's3'){
                    file_put_contents($path, $img_data);
                }else{
                    $file_path = 'editor/'.$uniqueKey.'.jpg';
                    Storage::disk('s3')->put($file_path, $img_data, 'public');

                    $image_name = Storage::disk('s3')->url($file_path);
                }


                $image->removeAttribute('src');
                $image->setAttribute('src', $image_name);
            }
        }

        return $dom->saveHTML();
    }

    public function checkBase64Image($value) {
        $explode = explode(',', $value);
        $allow = ['png', 'jpg', 'jpeg'];
        $format = str_replace(
            [
                'data:image/',
                ';',
                'base64',
            ],
            [
                '', '', '',
            ],
            $explode[0]
        );

        // check file format
        if (!in_array($format, $allow)) {
            return false;
        }

        // check base64 format
        if (!preg_match('%^[a-zA-Z0-9/+]*={0,2}$%', $explode[1])) {
            return false;
        }

        return true;
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}
