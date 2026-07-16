<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestApiController extends Controller
{
    public function users($id)
    {
        $response = Http::get("https://jsonplaceholder.typicode.com/users/$id");

        if ($response->successful()) {

            return response()->json($response->json());
        }

        return response()->json([
            'message' => 'API Failed'
        ]);
    }
}
