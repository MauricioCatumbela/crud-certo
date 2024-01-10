@extends('layouts.app')


@section('title','criação')

@section('content')

<div class="container mt-5">
    <h1>Crie um novo jogo</h1>
    <hr>
    <form action="{{ route('jogos-store')}}" method="POST">
        @csrf
    <div class="form-group">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite um nome....">

        </div>
            <br>
        <div class="form-group">
            <label for="categorianome">Categoria</label>
            <input type="text" class="form-control" name="categoria" placeholder="Digite uma categoria....">

        </div>
        <br>
        <div class="form-group">
            <label for="ano_criaçao">Ano de criaão</label>
            <input type="number" class="form-control" name="ano_criaçao" placeholder="Digite o ano de criação....">

        </div>
        <br>
        <div class="form-group">
            <label for="nome">valor</label>
            <input type="number" class="form-control" name="valor" placeholder="Digite um valor para o jogo....">

        </div>
        <div class="form-group">
           
            <input type="submit" class="btn btnm5" name="submit" placeholder="Digite um valor para o jogo....">

        </div>
    </div>

    </form>
    <a href="{{route('jogos-store')}}" class="btn btn-success" class="btn btn-sucess">Listagem</a>

</div>


@endsection

           