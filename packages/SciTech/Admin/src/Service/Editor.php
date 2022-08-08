<?php

namespace SciTech\Admin\Service;

use File;
use Illuminate\Support\Facades\Log;

class Editor
{
    public function uploadImage($field)
    {

        $dom = new \DomDocument();
        $dom->loadHtml($field, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $image_file = $dom->getElementsByTagName('img');

        if (!File::exists(public_path('uploads'))) {
            File::makeDirectory(public_path('uploads'));
        }

        foreach($image_file as $key => $image) {
            $dataImage = $image->getAttribute('src');
            if ($this->checkBase64Image($dataImage)) {
                list($type, $dataImage) = explode(';', $dataImage);
                list(, $dataImage) = explode(',', $dataImage);

                $img_data = base64_decode($dataImage);
                $image_name = "/uploads/" . time().$key.'.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $img_data);

                $image->removeAttribute('src');
                $image->setAttribute('src', $image_name);
            }
        }

        return $dom->saveHTML();
    }

    public function checkBase64Image($value) {
        $explode = explode(',', $value);
        $allow = ['png', 'jpg'];
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
}
