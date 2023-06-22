@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Alterar Fã</h1>
    <hr />
    <form action="{{ route('fa_clube.update', $fa_clube->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="nome" value="{{ $fa_clube->nome }}" >
            </div>
<div class="col mb-3">
                <label class="form-label">CPF</label>
                <input type="text" name="cpf" class="form-control" placeholder="cpf" value="{{ $fa_clube->cpf }}" >
            </div>
<div class="col mb-3">
                <label class="form-label">Idade</label>
                <input type="text" name="idade" class="form-control" placeholder="idade" value="{{ $fa_clube->idade }}" >
            </div>
<div class="col mb-3">
                <label class="form-label">Cidade</label>
                <input type="text" name="cidade" class="form-control" placeholder="cidade" value="{{ $fa_clube->cidade }}" >
            </div>
<div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="email" value="{{ $fa_clube->email }}" >
            </div>

           
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Alterar</button>
            </div>
        </div>
    </form>
@endsection
