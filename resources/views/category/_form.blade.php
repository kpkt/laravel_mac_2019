<div class="form-group">
    <label>Category Name</label>
    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
</div>

<div class="form-group text-center">
    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
</div>