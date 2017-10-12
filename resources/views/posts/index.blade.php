@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('posts.create') }}" class="btn btn-default">Tulisan baru</a> 
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>edit | hapus | lihat</td>
            </tr>
        @endforeach
       </tbody>
    </table>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection