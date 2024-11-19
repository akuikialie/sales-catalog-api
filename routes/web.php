<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




/* ROUTE INFRASTRUCTURE - START */
Route::get('/env', ['as' => 'index', 'uses' => 'DefaultController@index']);
Route::get('/routes', function () use ($router) {
    $routeCollection = Route::getRoutes();

    echo "<table style='width:100%'>";
    echo "<tr>";
    echo "<td width='10%'><h4>HTTP Method</h4></td>";
    echo "<td width='10%'><h4>Route</h4></td>";
    echo "<td width='10%'><h4>Name</h4></td>";
    echo "<td width='10%'><h4>Middleware</h4></td>";
    echo "<td width='70%'><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    echo "<pre>";
    foreach ($routeCollection as $value) {
        // var_dump($value);
        echo "<tr>";
        echo "<td>" . implode(' | ', $value->methods) . "</td>";
        echo "<td>" . $value->uri . "</td>";
        echo "<td>" . @$value->action['as'] . "</td>";
        echo "<td>";
        if (isset($value->action['middleware']) && is_array($value->action['middleware'])) {
            foreach($value->action['middleware'] as $valMidlleware) {
                echo $valMidlleware;
                echo ",";
            }
        }
        echo "</td>";
        // echo "<td>" . $value['uri'] . "</td>";
        echo "<td>" . isset($value->action['uses']) ? '' : "-" . "</td>";
        echo "</tr>";
    }
    echo "</table>";
});

/* ROUTE INFRASTRUCTURE - END */