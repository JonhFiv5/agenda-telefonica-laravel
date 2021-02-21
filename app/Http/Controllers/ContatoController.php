<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $dados = $request->only('nome', 'sobrenome', 'telefone');
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

    public function update(Request $request, $id)
    {
        $produto = $this->repository->find($id);
        if (!$produto) {
            abort(404);
        }
        $dados = $request->all();
        $produto->update($dados);

        return redirect()->route('contatos.index');
    }

    public function delete($id)
    {

    }
}
