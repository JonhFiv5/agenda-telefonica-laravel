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
        
    }

    public function show($id)
    {

    }

    public function create()
    {

    }

    public function store(Request $request)
    {

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
