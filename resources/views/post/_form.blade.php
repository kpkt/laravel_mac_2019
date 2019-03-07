<div class="row form-group">
    <div class="col-2">
        <label>Category</label>
    </div>
    <div class="col-4">
        {!! Form::select('category_id', $categories, old('category_id'),
            ['class' => 'form-control', 'placeholder' => '-- Sila Pilih --']
        ) !!}
    </div>
</div>

<div class="row form-group">
    <div class="col-2"><label>Subject</label></div>
    <div class="col-7">
        {!! Form::text('subject', old('subject'), ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row form-group">
    <div class="col-2"><label>Thumbnail</label></div>
    <div class="col-8">
        {!! Form::file('thumbnail') !!}
    </div>
</div>

<div class="row form-group">
    <div class="col">
        {!! Form::textarea('content', old('content'), ['class' => 'form-control summernote']) !!}
    </div>
</div>

<div class="row form-group">
    <label>Tags:</label>
    @foreach($tags as $tag)
        <div class="col-2">
{{--            {!! Form::checkbox('tags[]', $tag->id, false) !!} {{ $tag->name }}--}}
            {!! Form::checkbox('tags[]', $tag->id, isset($post) ? $post->tags->contains($tag->id) : false) !!} {{ $tag->name }}
        </div>
    @endforeach
</div>

<div class="row justify-content-end form-group">
    <div class="col-2">
        {!! Form::checkbox('is_draft', 1, true) !!} Draft
    </div>
</div>

<div class="row justify-content-end form-group">
    <div class="col-2">
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
        {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    </div>
</div>