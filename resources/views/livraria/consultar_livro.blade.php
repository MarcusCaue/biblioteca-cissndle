@extends('livraria.components.layout')

@section('titulo')
Consultar Livro
@endsection

@section("cabecalho")
<h1>Consultar Livro</h1>
@endsection

@section('main')
<div class="mt-3">
    <form action="{{route('filtrar_livro')}}" method="post">
        @csrf

        <div>
            <label class="form-label" for="coluna">Escolha em qual coluna você quer aplicar o filtro</label>
            <select name="coluna" class="form-select">
                <option value="nome" selected>Nome</option>
                <option value="autor">Autor</option>
                <option value="editora">Editora</option>
                <option value="ano">Ano</option>
                <option value="valor">Valor</option>
                <option value="anunciante">Anunciante</option>
            </select>
        </div>

        <div class="form-floating mt-4">
            <input class="form-control" id="dado" name="dado" type="text" placeholder="Nome" required>
            <label for="dado">Digite o dado</label>
        </div>

        <div class="d-flex justify-content-end mt-3">
            <button class="btn btn-secondary col-1 p-2" type="reset"> Limpar </button>
            <button class="ms-2 btn btn-info col-1 p-2" type="submit"> Consultar </button>
        </div>
    </form>
</div>
@endsection