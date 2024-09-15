<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;
// use Intervention\Image\ImageManagerStatic as Image;

class CaptchaController extends Controller
{
    public function generateCaptcha()
    {
        $captcha_text = Str::random(6);
        Session::put('captcha_text', $captcha_text);

        $image = Image::canvas(150, 40, '#f7f7f7');
        $image->text($captcha_text, 75, 20, function ($font) {
            $font->file(public_path('fonts/arial.ttf'));
            $font->size(24);
            $font->color('#008080');
            $font->align('center');
            $font->valign('middle');
        });

        return $image->response('png');
    }
}

