    @foreach($objeto->toArray() as $key => $value)
    <div class="form-group">
        {{ Form::label($key, $key) }}
        {{ Form::text($key, $value, array('class' => 'form-control')) }}
    </div>
    @endforeach