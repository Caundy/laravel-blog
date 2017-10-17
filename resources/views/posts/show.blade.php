@extends ('partials.master')

@section ('content')

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <h1>
                {{ $post->title }}
            </h1>
            <p>
                {{ $post->body }}
            </p>
            <hr>
                <h3>Comments:</h3>
                <ul>
                    @foreach($post->comments as $comment)
                        <li style="list-style-type: none">
                            <strong>
                                {{ $comment->user->name }}:
                            </strong>
                            {{ $comment->body }}
                        </li>
                    @endforeach
                </ul>
          </div>
        </div>
      </div>
    </article>
    <br><br>
    <!-- comment form -->
    @include('partials.commentform')

@endsection