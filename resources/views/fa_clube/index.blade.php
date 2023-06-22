@extends('layouts.app')

@section('body')
<div class="d-flex align-items-center justify-content-between">
<h1 class="mb-0">Fã</h1>
<a href="{{ route('fa_clube.create') }}" class="btn btn-primary">Cadastrar Fã</a>
</div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Idade</th>
                <th>Cidade</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @if($fa_clube->count() > 0)
                @foreach($fa_clube as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nome }}</td>
                        <td class="align-middle">{{ $rs->cpf }}</td>
                        <td class="align-middle">{{ $rs->idade }}</td>
                        <td class="align-middle">{{ $rs->cidade }}</td>
                        <td class="align-middle">{{ $rs->email }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('fa_clube.show', $rs->id) }}" type="button" class="btn btn-secondary">Detalhe</a>
                                <a href="{{ route('fa_clube.edit', $rs->id)}}" type="button" class="btn btn-warning">Alterar</a>
                                <form action="{{ route('fa_clube.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Excluir?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Excluir</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Fã não encontrada.</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
