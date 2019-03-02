@extends('layouts.app')

@section('content')

<div class="columns section">
    <div class="column is-8 is-offset-2">
      
        <div class="card box">
            <header class="card-header">
                <div class="card-header-title">
                    <div class="columns" style="width: 100%;">
                        <div class="column is-10">Lista de Etiquetas</div>
                        <div class="column is-2"><a href="{{ route('tags.create') }}" class="button is-primary">Crear Etiqueta</a></div>
                        
                    </div>
                </div>
            </header>
           
            <div class="card-content">
                <table class="table is-hoverable is-striped is-fullwidth">
                    <thead>
                        <tr>
                            <th width="10px">ID</th>
                            <th>Nombre</th>
                            <th  colspan="3"></th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($tags as $tag)
                                <tr>
                                    <td>{{ $tag->id }}</td>
                                    <td>{{ $tag->name }}</td>
                                    <td width="10px">
                                        <a href="{{ route('tags.show', $tag->id) }}" class="button is-link">Ver</a>
                                    </td>
                                    <td width="10px">
                                        <a href="{{ route('tags.edit', $tag->id) }}" class="button is-warning">Editar</a>
                                    </td>
                                    <td width="10px">
                                       {!!  Form::open(['route' =>  ['tags.destroy', $tag->id], 
                                        'method' => 'DELETE' ]) !!}
                                        <button type="submit" class="button is-danger">Eliminar</button>
                                        {!! Form::close(); !!}
                                    </td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>

            <footer class="card-footer">
               
            </footer>

        </div>

    </div>
</div>

@endsection