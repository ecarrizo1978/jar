<div class="form-group">
	{{ form::label('name','Nombre del Usuario') }}
	{{ form::text('name', null, ['class' => 'form-control' ] ) }}
</div>

<hr>

<h3>Lista de Roles</h3>

<div class="form-group">
	<ul class="list-unstyle">
		@foreach($roles as $role)
			<li>
				<label>
					{{ Form::checkbox('roles[]', $role->id, null) }}
					{{ $role->name }}
					<em>({{ $role->description }})</em>
				</label>
			</li>
		@endforeach
	</ul>
</div>

<div class="form-group">
	{{ form::submit('Guardar', ['class' => 'btn btn-sm btn-primary' ] ) }}
</div>