
{{Form::open(array('url'=>'/admin/eventos', 'name'=>'formulario', 'class'=>'formulario', 'method'=>'POST')) }}   
{{ Form::label('data', 'Data:') }}
{{ Form::text('data', '', ['class'=>'data']) }}
{{ Form::label('hora', 'Hora:')}}
{{ Form::text('hora', '20:00', ['class'=>'hora'])}}
{{ Form::label('descricao', 'Descrição:')}}
{{ Form::text('descricao')}}
{{ Form::submit('Criar')}}
{{ Form::close()}}
<script src="/js/timepicker.init.js"></script>
<script src="/js/jqueryvalidation.init.js"></script>