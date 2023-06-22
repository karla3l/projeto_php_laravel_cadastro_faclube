@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Cadastrar Fã</h1>
    <hr />
    <form action="{{ route('fa_clube.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>
  <div class="col">
                <input type="text" name="cpf" class="form-control" placeholder="CPF">
            </div>

<div class="col">
                <input type="text" name="idade" class="form-control" placeholder="idade">
            </div>
  <div class="col">
                <input type="text" name="cidade" class="form-control" placeholder="cidade">
            </div>

<div class="col">
                <input type="text" name="email" class="form-control" placeholder="email">
            </div>



        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Incluir</button>
            </div>
        </div>
    </form>
@endsection
