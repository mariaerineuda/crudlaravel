<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function mkchato(string $id)
    {
        $results = DB::table('usuarios')
        ->where( 'id',$id)->first();
        return view('editarusuarios')->with('results',$results);

    }
    /**
     * Show the profile for a given user.
     */
    public function lista()
    {
        $results = DB::table('usuarios')->get();
        return view('listausuarios')->with('results',$results); 
        
    }

    public function apagarusuario(string $id) {
    
            DB::table('usuarios')
            ->where( 'id',$id)->delete();
            
            return redirect()->back();
     }
    public function postformulario(Request $request) {
    
        DB::insert('insert into usuarios (nome,telefone, endereco) values (?,?, ?)', [$request['nome'],$request['telefone'],$request['endereco'] ]);
        return redirect()->back();
    }
    public function formulario()
    {

        return view('formulario');
        
    }
    public function updatedeusuario( Request $request ,string $id) {
   
        DB::table('usuarios')
        ->where( 'id',$id)->update([
            'nome'=>$request['nome'],
            'telefone'=>$request['telefone'],
            'endereco'=>$request['endereco'],
        ]);
    }
}


