<?php

namespace App\Traits;

use Illuminate\Support\Facades\Input;
use Validator;

trait CaptchaTrait
{
    public function captchaCheck()
    {
        $rules = ['captcha' => 'required|captcha'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            return false;
        }
        else
        {
            return true;
        }
    }
}
