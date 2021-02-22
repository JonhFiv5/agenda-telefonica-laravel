<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateContatoRequest;
use App\Models\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContatoController extends Controller
{
    private $repository;

    public function __construct(Contato $contato)
    {
        $this->repository = $contato;
    }

    public function index()
    {
        $contatos = $this->repository->orderBy('id', 'DESC')->paginate(10);

        return view ('agenda.pages.index', [
            'contatos' => $contatos,
        ]);
    }

    public function show($id)
    {
        $contato = $this->repository->find($id);
        if (!$contato) {
            abort(404);
        }

        return view('agenda.pages.show', [
            'contato' => $contato,
        ]);
    }

    public function create()
    {
        return view('agenda.pages.create');
    }

    public function store(StoreUpdateContatoRequest $request)
    {
        $dados = $request->only('nome', 'sobrenome', 'telefone');
        
        if ($request->hasFile('foto') && $request->foto->isValid()) {
            $foto = $request->foto;
            $fotoPath = $foto->store('contatos');
            $dados['foto'] = $fotoPath;
        }

        $this->repository->create($dados);

        return redirect()->route('contatos.index');
    }

    public function edit($id)
    {
        $contato = $this->repository->find($id);
        if (!$contato) {
            abort(404);
        }

        return view('agenda.pages.edit', [
            'contato' => $contato,
        ]);
    }

    public function update(StoreUpdateContatoRequest $request, $id)
    {
        $contato = $this->repository->find($id);
        if (!$contato) {
            abort(404);
        }
        $dados = $request->all();

        if ($request->hasFile('foto') && $request->foto->isValid()) {
            if ($contato->foto && Storage::exists($contato->foto)) {
                Storage::delete($contato->foto);
            }
            $foto = $request->foto;
            $fotoPath = $foto->store('contatos');
            $dados['foto'] = $fotoPath;
        }

        $contato->update($dados);

        return redirect()->route('contatos.index');
    }

    public function destroy($id)
    {
        $contato = $this->repository->find($id);
        if (!$contato) {
            abort(404);
        }

        if ($contato->foto && Storage::exists($contato->foto)) {
            Storage::delete($contato->foto);
        }

        $contato->delete();

        return redirect()->route('contatos.index');
    }
}
