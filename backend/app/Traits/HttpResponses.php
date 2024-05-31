<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Resources\Json\JsonResource;

trait HttpResponses
{
    public function success(string $message, string|int $status, array|Model|JsonResource $data = [])
    {
        return response()->json([
            "message" => $message,
            "status" => $status,
            "data" => $data,
        ]);
    }

    public function error(string $message, string|int $status, array $error = [])
    {
        return response()->json([
            "message" => $message,
            "status" => $status,
            "error" => $error,
        ]);
    }
}
