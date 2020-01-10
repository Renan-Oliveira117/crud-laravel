@extends('layout.app')
@section('title', 'Registro')

@section('content')
<h1>REGISTRO</h1>
<hr>

<div class="container">


  @if(isset($contato))

  {!! Form::model($contato, ['method' => 'put', 'route' => ['contatos.update', $contato->id ], 'class' => 'form-horizontal']) !!}

  @else

  {!! Form::open(['method' => 'post','route' => 'contatos.store', 'class' => 'form-horizontal']) !!}

  @endif

  <div class="card">
    <div class="card-header">
      <span class="card-title">
        @if (isset($contato))
        EDITANDO REGISTRO {{ $contato->id }}
        @else
        CRIANDO NOVO REGISTRO
        @endif
      </span>
    </div>
    <div class="card-body">
      <div class="form-row form-group">

        {!! Form::label('nome', 'Nome', ['class' => 'col-form-label col-sm-2 text-right']) !!}

        <div class="col-sm-4">

          {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder'=>'Defina o nome']) !!}

        </div>

      </div>
      <div class="form-row form-group">

        {!! Form::label('sobrenome', 'Sobreome', ['class' => 'col-form-label col-sm-2 text-right']) !!}

        <div class="col-sm-4">

          {!! Form::text('sobrenome', null, ['class' => 'form-control', 'placeholder'=>'Defina o sobrenome']) !!}

        </div>

      </div>
      <div class="form-row form-group">

        {!! Form::label('telefone', 'Telefone', ['class' => 'col-form-label col-sm-2 text-right']) !!}

        <div class="col-sm-8">

          {!! Form::text('Telefone', null, ['class' => 'form-control', 'placeholder'=>'Defina o telefone']) !!}

        </div>

      </div>
    </div>
    <div class="card-footer">
      {!! Form::button('cancelar', ['class'=>'btn btn-danger btn-sm', 'onclick' =>'windo:history.go(-1);']); !!}
      {!! Form::submit( isset($contato) ? 'atualizar' : 'criar', ['class'=>'btn btn-success btn-sm']) !!}

    </div>
  </div>

  {!! Form::close() !!}

</div>
@endsection