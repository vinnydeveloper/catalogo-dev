@extends('layouts.app')

@section('content')
    <h1> Cadastro de Dev</h1>
    <form action="/dev/cadastro" method="post">
        @csrf
        <div class="form-group">
            <label>Nome do Dev</label>
            <input type="text" name="nameDev" class="form-control">
        </div>
        <div class="form-group">
            <label>Link do GitHub</label>
            <input type="text" name="linkGitHub" class="form-control">
        </div>
        <div class="form-group">
            <label>Qual é o seu nivel de programação?</label>
            <select class="form-control" name="levelDev">
                <option value="junior">Junior</option>
                <option value="pleno">Pleno</option>
                <option value="Senior">Senior</option>
                <option value="Especialista">Especialista</option>
            </select>
        </div>
        <div class="form-group">
            <label>Qual é a sua habilidade?</label>
            <select class="form-control" name="skillDev">
                <option value="1">PHP</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success"> Salvar Dev</button>
    </form>
@endsection