<div class="form-group">
	{{ form::label('name','Nombre del Usuario') }}
	{{ form::text('name', null, ['class' => 'form-control' ] ) }}
</div>

<div class="form-group">
	{{ form::label('slug','Url Amigable') }}
	{{ form::text('slug', null, ['class' => 'form-control' ] ) }}
</div>

<div class="form-group">
	{{ form::label('description','Descripción') }}
	{{ form::textarea('description', null, ['class' => 'form-control' ] ) }}
</div>

<hr>

<h3>Permiso Especial</h3>

<div class="form-group">              
	<label>{{ form::radio('special','all-access') }} Acceso Total</label>
	<label>{{ form::radio('special','no-access') }} Ningun Acceso</label>
</div>

<h3>Lista de Permisos</h3>

<div class="form-group">
	<ul class="list-unstyle">
		@foreach($permissions as $p)
			<li>
				<label>
					{{ Form::checkbox('permissions[]', $p->id, null) }}
					{{ $p->name }}
					<em>({{ $p->description }})</em>
				</label>
			</li>
		@endforeach
	</ul>
</div>

<div class="form-group">
	{{ form::submit('Guardar', ['class' => 'btn btn-sm btn-primary' ] ) }}
</div>