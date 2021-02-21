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
        dd($request->all());
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function delete($id)
    {

    }
}
