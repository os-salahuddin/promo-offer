<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\APIBaseController;

class VersionController extends APIBaseController
{
    public function index()
    {
        return $this->respondInJSON(200, [], [
            'is_maintenance' => true,
        ]);
    }
}
