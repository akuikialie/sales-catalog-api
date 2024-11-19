<?php

namespace App\Http\Controllers\Homepage;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function index()
    {
        $datas = [
            [
                'id' => 1,
                'alt' => 'alt 1',
                'path' => '',
            ],
            [
                'id' => 2,
                'alt' => 'alt 2',
                'path' => '',
            ],
        ];

        return response()->json(
            [
                'code' => 200,
                'message' => 'success',
                'datas' => $datas,
            ]);
    }
}
