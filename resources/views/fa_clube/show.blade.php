@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Detalhe do Fã</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{ $fa_clube->nome }}" readonly>
        </div>

<div class="col mb-3">
            <label class="form-label">CPF</label>
            <input type="text" name="cpf" class="form-control" placeholder="cpf" value="{{ $fa_clube->cpf }}" readonly>
        </div>

<div class="col mb-3">
            <label class="form-label">Idade</label>
            <input type="text" name="idade" class="form-control" placeholder="idade" value="{{ $fa|_clube->idade }}" readonly>
        </div>
       
<div class="col mb-3">
            <label class="form-label">Cidade</label>
            <input type="text" name="cidade" class="form-control" placeholder="cidade" value="{{ $fa_clube->cidade }}" readonly>
        </div>

<div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="email" value="{{ $fa_clube->email }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Cadastrado Em</label>
            <input type="text" name="created_at" class="form-control" placeholder="Criado em" value="{{ $fa_clube->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Atualizado em</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Atualizado em" value="{{ $fa_clube->updated_at }}" readonly>
        </div>
    </div>
@endsection
