  
{{Form::model($objeto, [
    'method'=>'PATCH', 
    'class'=>'formulario',
    'route'=> ['eventos.update',
     $objeto->id]]) }}
            {{ Form::label('data', 'Data:') }}
            {{ Form::text('data', date('d/m/Y'), ['class'=>'data']) }}
            {{ Form::label('hora', 'Hora:') }}
            {{ Form::text('hora', '20:00', ['class'=>'hora']) }}
            {{ Form::label('descricao', 'Descrição:') }}
            {{ Form::text('descricao') }}
{{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}
<script src="/js/timepicker.init.js"></script>
<script src="/js/jqueryvalidation.init.js"></script>