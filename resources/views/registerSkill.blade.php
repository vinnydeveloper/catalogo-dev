@extends('layouts.app')

@section('content')
    <h1> Cadastro de Skill</h1>
    <form action="/skill/cadastro" method="post">
        @csrf
        <div class="form-group">
            <label>Nome da skill</label>
            <input type="text" name="nameSkill" class="form-control">
        </div>
        <div class="form-group">
            <label>Descrição da skill</label>
            <input type="text" name="descriptionSkill" class="form-control">
        </div>
        <button type="submit" class="btn btn-success"> Salvar Skill</button>
    </form>
@endsection