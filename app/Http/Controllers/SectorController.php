<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;


class SectorController extends Controller
{
    public function index() {
        $sectors = Sector::all();

        return view('sectors.index',['sectors' => $sectors]);
    }

    public function create() {
        return view('sectors.create');
    }

    public function edit(Sector $sector) {
        return view('sectors.edit',['sector' => $sector]);
    }

    public function store(Request $request) {
        $data = $request-> validate([
            'nome' => 'required|string',
            'sigla' => 'required|string',
        ]);

        $data['nome'] = mb_strtoupper($data['nome'],"utf-8" );
        $data['sigla'] = mb_strtoupper($data['sigla'],"utf-8" );


        $newSector = Sector::create($data);

        return redirect(route('sector.index'));
    }

    public function update(Sector $sector, Request $request) {
        $data = $request-> validate([
            'nome' => 'required|string',
            'sigla' => 'required|string',
        ]);

        $data['nome'] = mb_strtoupper($data['nome'],"utf-8" );
        $data['sigla'] = mb_strtoupper($data['sigla'],"utf-8" );


        $sector->update($data);
        

        return redirect(route('sector.index'))->with('success','Setor editado com sucesso!');
    }
}
