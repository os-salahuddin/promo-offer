<?php

namespace App\Http\Controllers;
use App\Traits\ApiResponseTraits;
use \Illuminate\Routing\Controller as BaseController;
class APIBaseController extends BaseController
{
   use ApiResponseTraits;
}
