<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{

    public function save_livro(Request $req) {
        $nome = $req->nome;
        $editora = $req->editora;
        $autor = $req->autor;
        $ano = $req->ano;
        $valor = $req->valor;
        $nomeAnunciante = $req->anunciante;
        $endereco_imagem = $req->endereco_imagem;

        $novo_livro = new Livro(["nome" => $nome, "editora" => $editora, "autor" => $autor, "ano" => $ano, "valor" => $valor, "anunciante" => $nomeAnunciante, "endereco_imagem" => $endereco_imagem]);
        $novo_livro->save();

        return redirect(route("mostrar_livros"));
    }

    public function filtrar_livro(Request $req) {
        $coluna = $req->coluna;
        $dado = $req->dado;
        $comparacao = "LIKE";

        $livros = Livro::where($coluna, $comparacao, $dado)->get();
        
        return view("livraria.anuncios")->with("livros", $livros);
    }

    // Funções que retornam as views
    public function mostrar_livros() {
        $livros = Livro::all();
        return view("livraria.index")->with("livros", $livros);
    }

    public function anuncios() {
        $livros = Livro::all();
        return view("livraria.anuncios")->with("livros", $livros);
    }

    public function contato() {
        return view("livraria.contato");
    }

    public function about() {
        return view("livraria.about");
    }

    public function criar_usuario() {
        return view("livraria.criar_usuario");
    }

    public function add_livro() {
        return view("livraria.add_livro");
    }

    public function consultar_livro() {
        return view("livraria.consultar_livro");
    }

}
