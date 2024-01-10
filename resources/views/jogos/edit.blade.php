@extends('layouts.app')


@section('title','ediç]ao')

@section('content')

<div class="container mt-5">
    <h1>editar jogo</h1>
    <hr>
    <form action="{{ route('jogos-update', ['id'=>$jogos->id]) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="form-group">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" value="{{ $jogos->nome}}" placeholder="Digite um nome....">

        </div>
            <br>
        <div class="form-group">
            <label for="categorianome">Categoria</label>
            <input type="text" class="form-control" name="categoria" value="{{$jogos->categoria}}" placeholder="Digite uma categoria....">

        </div>
        <br>
        <div class="form-group">
            <label for="ano_criaçao">Ano de criaão</label>
            <input type="number" class="form-control" name="ano_criaçao" value="{{$jogos->ano_criaçao}}" placeholder="Digite o ano de criação....">

        </div>
        <br>
        <div class="form-group">
            <label for="nome">valor</label>
            <input type="number" class="form-control" name="valor" value="{{$jogos->valor}}" placeholder="Digite um valor para o jogo....">

        </div>
        <div class="form-group">
           
            <input type="submit" class="btn btn btn-sucess" name="submit" value="Atualizar">

        </div>
    </div>

    </form>
    <a href="{{route('jogos-store')}}" class="btn btn-success" class="btn btn-sucess">atualizar</a>

</div>


@endsection

           