<h1>Detalles del Empleado</h1>
<p><strong>CI:</strong> {{ $empleado->ci }}</p>
<p><strong>Nombre:</strong> {{ $empleado->nombre }}</p>
<p><strong>Segundo Nombre:</strong> {{ $empleado->segundo_nombre }}</p>
<p><strong>Apellido Paterno:</strong>{{ $empleado->apellido_p}}</p>
<p><strong>Apellido Materno:</strong>{{ $empleado->apellido_m}}</p>
<p><strong>Fecha Nacimiento:</strong>{{ $empleado->fecha_nacimiento}}</p>
<p><strong>Estado Civil: </strong>{{ $empleado->estado_civil}} </p>
<p><strong>Telefono: </strong>{{ $empleado->telefono}} </p>
<p><strong>Direccion Principal: </strong>{{ $empleado->direccion1}} </p>
<p><strong>Direccion Secundario: </strong>{{ $empleado->direccion2}} </p>
<p><strong>Genero: </strong>{{ $empleado->genero}} </p>
<hr>
<p><strong>Departamento:</strong>{{ $empleado->departamento ? $empleado->departamento->nombre : 'Sin Designacion'}}</p>
<p><strong>Distrito:</strong>{{ $empleado->distrito ? $empleado->distrito->nombre : 'Sin Distrito'}}</p>
<p><strong>Area Puesto:</strong>{{ $empleado->area_puesto ? $empleado->area_puesto->nombre : 'Sin puestos'}}</p>
<p><strong>Cargo: </strong>{{ $empleado->cargo_puesto ? $empleado->cargo_enpleado->cargo : 'Sin cargo'}}<p>
<p><strong>Nivel Estudio: </strong>{{ $empleado->nivel_estudio ? $empleado->nivel_estudio->descripcion : 'Sin Estudio'}}</p>
<p><strong>Especialidad: </strong>{{ $empleado->especialidad ? $empleado->especialidad->nombre_especialidad : 'Sin especialidad'}}</p>
<p><strong>Tipo de Contrato: </strong>{{ $empleado->contratacion ? $empleado->contratacion->tipo_contratacion : 'Sin Contrato'}}</p>
<p><strong>Fecha Inicio: </strong>{{ $empleado->contratacion ? $empleado->contratacion->fecha_inicio : 'Sin fecha'}}</p>
<p><strong>Fecha Fin: </strong>{{ $empleado->contratacion ? $empleado->contratacion->fecha_fin : 'Sin fecha'}}</p>
<p><strong>Item:</strong>{{ $empleado->item ? $empleado->item->num_item : 'Sin ítem' }}</p>
<p><strong>Descripcion Item: </strong>{{ $empleado->item ? $empleado->item->descripcion : 'Sin descripcion'}}</p>
<p><strong>Hora Inicio: </strong>{{ $empleado->horario_asignado ? $empleado->horario_asignado->hora_inicio : 'Sin hora'}}</p>
<p><strong>Hora Fin: </strong>{{ $empleado->horario_asignado ? $empleado->horario_asignado->hora_fin : 'Sin hora'}}</p>
<p><strong>Tuno Trabajo: </strong>{{ $empleado->turno_trabajo ? $empleado->turno_trabajo->descripcion : 'Sin turno'}}</p>
