@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cargo</div>

                <div class="panel-body">

					{!!  Form::model($cargos, ['route' => ['cargos.update', $cargos->id], 'method' => 'PUT' ])   !!}
                        
						@include('cargos.partials.form')

                    {!! Form::close()  !!}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
