<?php

namespace App\Traits;

trait ApiResponseTraits
{
    public function respondInJSON(int $code, array $messages = [], $data = null)
    {
        return response()->json(
            [
                'code' => $code,
                'messages' => $messages,
                'data' => $data,
            ],
            $code
        );
    }
}
