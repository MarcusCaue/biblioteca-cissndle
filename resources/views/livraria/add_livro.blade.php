@extends("livraria.components.layout")

@section("cabecalho")
    <h1>Adicionar Livro</h1>
@endsection

@section("titulo")
    Adicionar Livro
@endsection

@section("main")
    <div class="mt-3">
        <form action="{{ route('save_livro') }}" method="post">
            @csrf

            <div class="form-floating">
                <input class="form-control" name="anunciante" id="anunciante" placeholder="Nome Anunciante" type="text"  required>
                <label for="anunciante">Nome Anunciante</label>
            </div>

            <div class="form-floating mt-4">
                <input class="form-control" id="nome" name="nome" type="text" placeholder="Nome"  required>
                <label for="nome">Nome</label>
            </div>

            <div class="form-floating mt-4">
                <input class="form-control" id="endereco_imagem" name="endereco_imagem" type="text" placeholder="Endereço da imagem"  required onclick="alert('Cole aqui o endereço da imagem! ;)')">
                <label for="endereco_imagem">Endereço da imagem</label>
            </div>

            <div class="form-floating mt-4">
                <input class="form-control" name="autor" id="autor" placeholder="Autor" type="text"  required>
                <label for="autor">Autor</label>
            </div>

            <div class="form-floating mt-4">
                <input class="form-control" name="editora" id="editora" placeholder="Editora" type="text" required >
                <label for="editora">Editora</label>
            </div>

            <div class="form-floating mt-4">
                <input class="form-control" name="ano" id="ano" placeholder="Ano" type="number" max="2022" required >
                <label for="ano">Ano</label>
            </div>

            <div class="form-floating mt-4">
                <input class="form-control" name="valor" id="valor" placeholder="Valor" type="number" min="0" max="2022" step="0.01" required >
                <label for="valor">Valor</label>
            </div>

            <div class="d-flex justify-content-end mt-3">
                <button class="btn btn-secondary col-1 p-2" type="reset"> Limpar </button>
                <button class="ms-2 btn btn-info col-1 p-2" type="submit"> Adicionar </button>
            </div>
        </form>
    </div>
@endsection