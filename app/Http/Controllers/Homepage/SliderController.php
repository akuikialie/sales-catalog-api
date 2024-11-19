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
                'path' => 'https://klinikpintar.id/images/new_homepage/hero-update.png',
            ],
            [
                'id' => 2,
                'alt' => 'alt 2',
                'path' => 'https://klinikpintar.id/images/new_homepage/img-untuk-pasien.png',
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
