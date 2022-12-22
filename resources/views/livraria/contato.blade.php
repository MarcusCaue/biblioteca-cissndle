@extends("livraria.components.layout")

@section("cabecalho")
    <h1>Contato</h1>
@endsection

@section("titulo")
    Contato
@endsection

@section("main")
    <div class="mt-3">
        <form action="https://formspree.io/f/myyvyvqj" method="post">
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
                <input class="form-control" name="title" id="title" placeholder="Título" type="text">
                <label for="title">Título</label>
            </div>

            <div class="form-floating mt-4">
                <textarea class="form-control" name="message" id="message" placeholder="Digite aqui a sua mensagem! :)" style="height: 20vh;" required></textarea>
                <label for="message"> Digite aqui a sua mensagem! :) </label>
            </div>
        
            <div class="d-flex justify-content-end mt-3">
                <button class="btn btn-secondary col-1 p-2" type="reset"> Limpar </button>
                <button class="ms-2 btn btn-info col-1 p-2" type="submit"> Enviar </button>
            </div>
        </form>
    </div>

@endsection
