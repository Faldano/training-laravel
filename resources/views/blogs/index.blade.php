@extends('layouts.app') 

@section('content') 
    <div class="container"> 
        @foreach ($posts as $post) 
            <div class="row"> 
                    <div class="col-md-8 col-md-offset-2"> 
                            <div class="panel panel-default"> 
                                    <div class="panel-heading">
                                        <a href="/posts/{{$post->id}}">
                                        {{$post->title}}
                                        </a>
                                    </div> 

                                    <div class="panel-body">
                                        {{ str_limit($post->content, 150)}}
                                    </div> 
                            </div> 
                    </div> 
            </div> 
        @endforeach 
    <div class="row" style="text-align: center;">
    {{$posts->links()}}
    </div>
    
    </div> 

@endsection