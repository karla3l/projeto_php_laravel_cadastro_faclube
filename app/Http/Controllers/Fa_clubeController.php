<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fa_clube;
use Illuminate\Support\Facades\DB;


class Fa_clubeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fa_clube = Fa_clube::orderBy('created_at', 'DESC')->get();

        return view('fa_clube.index', compact('fa_clube'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fa_clube = new Fa_clube;
        return view('fa_clube.create')->with(['fa_clube' => $fa_clube]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fa_clube = new Fa_clube;
        $this->validate($request, [
        'nome' => 'required',
        'cpf' => 'required',
        'idade' => 'required',
        'cidade' => 'required',
        'email' => 'required'
        ]);
        $fa_clube->fill($request->all());
        $fa_clube->save();
        return redirect()->route('fa_clube.index')->with('success', 'Fã cadastrado com sucesso!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fa_clube = Fa_clube::findOrFail($id);

        return view('fa_clube.show', compact('fa_clube'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fa_clube = Fa_clube::findOrFail($id);
        return view('fa_clube.edit', compact('fa_clube'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fa_clube = Fa_clube::find($id);
        $this->validate($request, [
            'nome' => 'required',
            'cpf' => 'required',
            'idade' => 'required',
            'cidade' => 'required',
            'email' => 'required'
        ]);
        $fa_clube->fill($request->all());
        $fa_clube->save();
        return redirect()->route('fa_clube.index')->with('success', 'Fã alterado com sucesso!');;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fa_clube = Fa_clube::findOrFail($id);
        $fa_clube->delete();
        return redirect()->route('fa_clube.index')->with('success', 'Fã excluído com sucesso!');
    }
    public function getLoglista() {
        $html = '<h2>Lista de fã cadastrados para receber presentes</h2>';
        $html .= '<ul>';
        $fa_clubes = DB::select('select * from fa_clubes');
        foreach ($fa_clubes as $n) {
            $html .= '<li> Nome: '. $n->nome .' ---
            CPF: '. $n->cpf .' ---
            Idade: '. $n->idade .' ---
            Cidade: '. $n->cidade .' ---
            Email: '. $n->email .' </li>';

        }
            $html .= '</ul>';
 return $html;
}
}
