<?php

namespace App\Http\Controllers;

use App\Games;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function adicionar(){

        return view("admin.games.adicionar");

    }

    public function salvar(Request $req){
        $dados=$req->all();
        if($req->hasFile('imagem')){
            $imagem=$req->file('imagem');
            // criando um numero aleatorio para receber no nome da imagem
            $num=rand(1111,9999);
            $dir="img/games/";
            $extencao=$imagem->guessClientExtension();
            $nomeImagem="Imagem".$num.".".$extencao;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem']=$dir."/".$nomeImagem;

        }

        Games::create($dados);
        return redirect()->route("site.home");
        
        
    }

    public function lista_jogos(){

        $registros=Games::all();
        return view("admin.games.lista_jogos",compact('registros'));

    }

    public function excluir_game(Request $req,$id){
        $dados=$req->all();
        Games::find($id)->delete($dados);

        return redirect()->route('site.home');
    }

    public function editar_game($id){

        $registro=Games::find($id);
  
        return view("admin.games.editar_game",compact('registro'));
    }


    public function atualizar_game(Request $req,$id){

        $dados=$req->all();
        if($req->hasFile('imagem')){
            $imagem=$req->file('imagem');
            // criando um numero aleatorio para receber no nome da imagem
            $num=rand(1111,9999);
            $dir="img/games/";
            $extencao=$imagem->guessClientExtension();
            $nomeImagem="Imagem".$num.".".$extencao;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem']=$dir."/".$nomeImagem;

        }
        
        Games::find($id)->update($dados);
        return redirect()->route('site.home'); 
    }


   
}

