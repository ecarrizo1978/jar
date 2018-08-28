@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Cargos
                    @can('cargos.create')
                        <a href="{{ route('cargos.create') }}" class="btn btn-sm btn-primary pull-right">Crear</a>
                    @endcan
                </div>

                <div class="panel-body">

                    <table>
                        <thead>
                            <tr>
                                <th width="20px" >ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cargos as $c)
                                <tr>
                                    <td>{{ $c->id }}</td>
                                    <td>{{ $c->nombre }}</td>
                                    <td>
                                        @can('cargos.show')
                                            <a href="{{ route('cargos.show', $c->id) }}" class="btn btn-sm btn-default">
                                                Ver
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('cargos.edit')
                                            <a href="{{ route('cargos.edit', $c->id) }}" class="btn btn-sm btn-default">
                                                Editar
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('cargos.destroy')
                                            {!!  Form::open(['route' => ['cargos.destroy', $c->id], 'method' => 'DELETE' ])   !!}
                                                <button class="btn btn-sm btn-danger">
                                                    Eliminar
                                                </button>
                                            {!! Form::close()  !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $cargos->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
