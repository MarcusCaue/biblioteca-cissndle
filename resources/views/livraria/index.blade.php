@extends("livraria.components.layout")

@section("cabecalho")
    <h1 class="text-center">Livraria Cissndle</h1>
    <hr class="w-25 m-auto">
@endsection

@section("titulo")
    Livraria Cissndle
@endsection

@section('main')

<div class="container mt-4">
    @if($livros->count() == 0)
        <p class="text-bg-danger text-center rounded fs-4 p-3"> Não há livros cadastrados ou não temos livros que satisfaçam as condições de sua consulta. </p>
    @endif

    @foreach($livros as $lv)
        <div class="card col-6 mb-3 mx-auto">
            <img src="{{$lv->endereco_imagem}}" class="card-img-top" width="5px">
            <div class="card-body">
                <h5 class="card-title"> {{$lv->nome}} </h5>
                <div class="card-text">
                    <ul>
                        <li>Anunciante: {{$lv->anunciante}}</li>
                        <li>Autor: {{$lv->autor}}</li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
