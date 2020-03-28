<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;


class FeedbackController extends BaseController
{
    use ValidatesRequests;

    public function __invoke()
    {
        return view('feedback');
    }
}
