@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {!! Form::open(['route' => 'posts.store']) !!}
            <div class="form-group">
                {!! Form::label('Judul') !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Judul tulisan']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Konten') !!}
                {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Isi artikel']) !!}
            </div>
            {!! Form::submit('Simpan', ['class' => 'btn btn-default']) !!}
		{!! Form::close() !!} 
    </div>
</div>
@endsection