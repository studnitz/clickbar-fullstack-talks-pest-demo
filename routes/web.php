<?php

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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

Route::get('/persons', function () {
    $persons = Person::all();

    return view('persons', [
        'persons' => $persons,
    ]);
});

Route::post('/persons', function (Request $request) {
    $request->validate([
        'first_name' => ['required', 'string'],
        'last_name' => ['required', 'string'],
        'birthday' => ['required', 'date', 'before_or_equal:today'],
    ]);

    $person = new Person();
    $person->first_name = $request->first_name;
    $person->last_name = $request->last_name;
    $person->birthday = Carbon::parse($request->birthday);
    $person->save();

    return redirect('/persons');
});
