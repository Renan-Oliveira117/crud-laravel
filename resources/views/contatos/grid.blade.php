@extends('layout.app')
@section('title', 'Listando todos os registros')
 
@section('content')
<h1>LISTA DE CLIENTE</h1>
<hr>
<div class="container">
    <table class="table table-bordered table-striped table-sm">
        <thead>
      <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Sobrenome</th>
          <th>telefone</th>
          <th>
        <a href="{{ route('contatos.create') }}" class="btn btn-info btn-sm" >Novo</a>
          </th>
      </tr>
        </thead>
        <tbody>
      @forelse($contatos as $contato)
      <tr>
          <td>{{ $contato->id }}</td>
          <td>{{ $contato->nome }}</td>
          <td>{{ $contato->sobrenome}}</td>
          <td>{{ $contato->telefone }}</td>
          <td>
        <a href="{{ route('contatos.edit', ['id' => $contato->id]) }}" class="btn btn-warning btn-sm">Editar</a>
        <form method="POST" action="{{ route('contatos.destroy', ['id' => $contato->id]) }}" style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
            @csrf
            <input type="hidden" name="_method" value="delete" >
            <button class="btn btn-danger btn-sm">Excluir</button>
        </form>
          </td>
      </tr>
      @empty
      <tr>
          <td colspan="6">Nenhum registro encontrado para listar</td>
      </tr>
      @endforelse
        </tbody>
    </table>
</div>
@endsection