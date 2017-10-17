@extends ('partials.master')

@section ('content')
    @foreach ($posts as $post)
    <div class="post-preview">
        <a href='/posts/{{$post->id}}'>
            <h2 class="post-title">
            {{$post->title}}
            </h2>
        </a>
        
        <h3 class="post-subtitle">
            {{$post->body}}
        </h3>

        <p class="post-meta">
        Posted by 
        {{ $post->user->name }} 
        {{ $post->created_at->diffForHumans() }}</p>
        </div>
            <hr>
    @endforeach
@endsection