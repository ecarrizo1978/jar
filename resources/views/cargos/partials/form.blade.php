<div class="form-group">
	{{ form::label('nombre','Nombre del Cargo') }}
	{{ form::text('nombre', null, ['class' => 'form-control' ] ) }}
</div>

<div class="form-group">
	{{ form::label('descripcion','Descripcion del Cargo') }}
	{{ form::text('descripcion', null, ['class' => 'form-control' ] ) }}
</div>

<div class="form-group">
	{{ form::submit('Guardar', ['class' => 'btn btn-sm btn-primary' ] ) }}
</div>