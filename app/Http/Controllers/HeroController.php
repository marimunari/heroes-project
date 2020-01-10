<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\File;
use DB;

class HeroController extends Controller
{

    private $hero;

    public function __constructor(Hero $hero)
    {
        $this->hero = $hero;
    }

    public function index()
    {
        $heroes = Hero::all();
        return view('index', compact('heroes'));
    }

    public function insert()
    {
        return view('register');
    }

    public function delete(Request $req, $id)
    {
        $hero = Hero::find($id);
        $hero->delete();

        $heroes = Hero::all();
        return view('index', compact('heroes'));
    }

    public function editar($id)
    {
        $hero = Hero::find($id);
        return view('update', compact('hero'));
    }

    public function inserir(Request $req)
    {
        $nameImage = null;

        if ($req->hasFile('image')) {

            $name = $req->get('nome');
            $nameImage = "{$name}.gif";
            $upload = $req->image->storeAs('heroes', $nameImage);
        };

        $hero = new Hero([
            'nome' => $req->get('nome'),
            'classe' => $req->get('classe'),
            'especialidade' => $req->get('especialidade'),
            'vida' => $req->get('vida'),
            'defesa' => $req->get('defesa'),
            'dano' => $req->get('dano'),
            'vel_Atq' => $req->get('vel_Atq'),
            'vel_Mov' => $req->get('vel_Mov')
        ]);
        $hero->save();

        return redirect('/')->with('successo', 'Herói adicionado!');
    }

    public function update(Request $req, $id)
    {
        $nameImage = null;

        $hero = Hero::find($id);

        $hero->nome = $req->get('nome');
        $hero->classe = $req->get('classe');
        $hero->especialidade = $req->get('especialidade');
        $hero->vida = $req->get('vida');
        $hero->defesa = $req->get('defesa');
        $hero->dano = $req->get('dano');
        $hero->vel_Atq = $req->get('vel_Atq');
        $hero->vel_Mov = $req->get('vel_Mov');
        $hero->save();

        $heroes = Hero::all();
        return view('index', compact('heroes'));
    }
}
