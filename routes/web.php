<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/aprendendo', function () {
    return view('aprendendo');
});
Route::get('/formulario', function () {
    return view('formulario');
});
Route::post('/postdoformulario', function (Request $request) {
   
    DB::insert('insert into usuarios (nome,telefone, endereco) values (?,?, ?)', [$request['nome'],$request['telefone'],$request['endereco'] ]);
    return redirect()->back();
    
});
Route::get('/listausuarios', function () {
    $results = DB::table('usuarios')->get();
    return view('listausuarios')->with('results',$results); 
});
Route::get('/apagarusuario', function () {
    
   DB::table('usuarios')
    ->where( 'id',$_GET['id'])->delete();
    
    return redirect()->back();
});
Route::get('/editarusuarios', function () {
    
    $results = DB::table('usuarios')
    ->where( 'id',$_GET['id'])->first();
    return view('editarusuarios')->with('results',$results);

});

Route::post('/updatedeusuario', function (Request $request) {
   
    DB::table('usuarios')
    ->where( 'id',$_GET['id'])->update([
        'nome'=>$request['nome'],
        'telefone'=>$request['telefone'],
        'endereco'=>$request['endereco'],
    ]);
    
    return redirect()->back();

});