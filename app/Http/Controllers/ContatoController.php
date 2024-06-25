<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateContato;
use App\Models\Contato;
use App\Models\Facade\ContatosDB;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = ContatosDB::gridContatos();

        return view('admin/contatos/index', compact('contatos'));
    }

    public function create()
    {
        return view('admin/contatos/create');
    }

    public function store(StoreUpdateContato $request, Contato $contato)
    {
    // Para validar os dados do formulário
    $data = $request->validated();

    $contato->create($data);

    return redirect()->route('contatos.index');
    }

    public function edit($id)
    {
        $contatos = ContatosDB::getById($id);

        if(!empty($contatos))
        {
            return view('admin/contatos/edit', compact('contatos'));
        }
        else
        {
            return redirect()->route('contatos.index');
        }
    }

    public function update(StoreUpdateContato $request, Contato $contato, $id)
    {
        if(!$contato = $contato->find($id)) {
            return back();
        }

        $contato->update($request->validated());

        return redirect()->route('contatos.index');

        // $data = [
        //     'nome' => $request->nome,
        //     'sobrenome' => $request->sobrenome,
        //     'idade' => $request->idade,
        //     'telefone' => $request->telefone,
        //     'email' => $request->email,
        // ];
        // Contato::where('id', $id)->update($data);
        // return redirect()->route('contatos.index');
    }

    public function destroy($id)
    {
        if(!$contato = Contato::find($id)) {
            return back();
        }
        $contato->delete();

        return redirect()->route('contatos.index');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $contatos = Contato::where('nome', 'like', '%'.$search.'%')
                            ->orWhere('sobrenome', 'like', '%'.$search.'%')
                            ->get();

        //O % é usado para buscar por qualquer ocorrência do texto, antes ou depois do texto inserido.
        return view('admin/contatos/index', compact('contatos'));
    }
}
