@extends("livraria.components.layout")

@section("cabecalho")
    <h1 class="text-center">Anúncios</h1>
    <hr class="w-25 m-auto">
@endsection

@section("titulo")
    Anúncios
@endsection

@section('main')

<?php
    $quant_livros = $livros->count();
    $quant_containeres = intval(ceil($quant_livros / 3));
    $index = 0;
?>

@if($livros->count() == 0)
    <p class="text-bg-danger text-center rounded fs-4 p-3"> Não há livros cadastrados ou não temos livros que satisfaçam as condições de sua consulta. </p>
@endif

@for($i = 0; $i < $quant_containeres; $i++)

<div class="container mt-4 d-flex justify-content-start">

    @for($j = 0; $j < 3; $j++)

        @if($index == $quant_livros)
            @break
        @endif

        <?php $lv = $livros[$index]; ?>

        <div class="card col-4 mb-3 mx-2">
            <img src="{{$lv->endereco_imagem}}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"> {{$lv->nome}} </h5>
                <div class="card-text">
                    <ul>
                        <li>Anunciante: {{$lv->anunciante}}</li>
                        <li>Nome: {{$lv->nome}}</li>
                        <li>Autor: {{$lv->autor}}</li>
                        <li>Editora: {{$lv->editora}}</li>
                        <li>Valor: {{number_format($lv->valor, 2, ",", ".")}}</li>
                        <li>Ano de Lançamento: {{$lv->ano}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <?php $index++ ?>

        @endfor
</div>
@endfor

<!-- JavaScript próprio -->
<script>
    const input = document.querySelector("#filtro_js")
    const cardTitles = document.querySelectorAll(".card-title")
    const titleBooks = []
    
    cardTitles.forEach((cardTitle) => {
        titleBooks.push(cardTitle.textContent.trim().toLowerCase())
    })

    const books = document.querySelectorAll(".card")


    input.addEventListener("input", () => {
        let valorInput = input.value.trim().toLowerCase()

        if (valorInput === "") {
            books.forEach((book) => {
                book.style.display = "flex"
            })
        }
        else {
            books.forEach((book) => {
                let titleBook = book.querySelector(".card-title").textContent.trim().toLowerCase()

                if (titleBook.includes(valorInput)) {
                    book.style.display = "flex"
                } else {
                    book.style.display = "none"
                }
            })
        }
    })
</script>

@endsection