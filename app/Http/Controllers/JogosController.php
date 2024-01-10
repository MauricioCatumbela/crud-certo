<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jogo;

class JogosController extends Controller
{
    public function index()
    {
        $jogos = jogo::all();
   /*      dd($jogos); */
        return view ('jogos.index',['jogos'=>$jogos]);
    }
    public function create()
    {
        return view('jogos.create');
    
}

public function store(Request $request)
{
   jogo::create($request->all());
   return redirect()->route('jogos-index');
}

public function edit($id)
{
    $jogos = jogo::where('id',$id)->first();
    if(!empty($jogos))
    {
        return view ('jogos.edit',['jogos'=>$jogos]);

    }
    else

    {
   
    
   
return redirect()->route('jogos-index');
}

}

public function update(Request $request, $id)

    {
       $data = [

            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'ano_criaçao' => $request->ano_criaçao,
            'valor' => $request->valor,

       ];
       jogo::where('id',$id)->update($data);
       return redirect()->route('jogos-index');
    }

    public function destroy($id)
    {
        jogo::where('id',$id)->delete();
        return redirect()->route('jogos-index');
    }

}
