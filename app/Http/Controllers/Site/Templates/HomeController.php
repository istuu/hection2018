<?php

namespace App\Http\Controllers\Site\Templates;

use Illuminate\Http\Request;
use App\Http\Controllers\Site\BaseController;
use App\Libraries\Mailer;
use Validator;
use Wa;
use DB;
use URL;
use Browser;

class HomeController extends BaseController
{
    public function before()
    {
        $this->mail = new Mailer;
        $banner  = Wa::model('banner')->first();
        view()->share([
            'banner'   => $banner,
        ]);
        parent::before();
    }

}
