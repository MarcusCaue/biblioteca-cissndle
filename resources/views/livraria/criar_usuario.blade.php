@extends("livraria.components.layout")

@section("cabecalho")
    <h1>Criar Usuário</h1>
@endsection

@section("titulo")
    Criar Usuário
@endsection

@section("main")
    <div class="mt-3">
        <form action="" method="post">
            @csrf

            <div class="form-floating">
                <input class="form-control" id="nome" name="nome" type="text" placeholder="Nome" required>
                <label for="nome">Nome</label>
            </div>

            <div class="form-floating mt-4">
                <input class="form-control" name="email" id="email" placeholder="Email" type="email" required>
                <label for="email">Email</label>
            </div>

            <div class="form-floating mt-4">
                <input class="form-control" name="senha" id="senha" placeholder="Senha" type="password" required>
                <label for="senha">Senha</label>
            </div>

            <div class="d-flex justify-content-end mt-3">
                <button class="btn btn-secondary col-1 p-2" type="reset"> Limpar </button>
                <button class="ms-2 btn btn-info col-1 p-2" type="submit"> Cadastrar </button>
            </div>
        </form>
    </div>
@endsection