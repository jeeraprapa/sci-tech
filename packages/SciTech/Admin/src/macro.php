<?php

use Illuminate\Support\Arr;

Html::macro('trash', function ($text, $url, $attributes = []) {
    $data = compact('text', 'url', 'attributes');
    $html = view('admin::delete_form')
        ->with($data)
        ->render();

    return new \Illuminate\Support\HtmlString($html);
});
