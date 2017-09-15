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
                <ul>
                    @foreach($post->comments as $comment)
                        <li>
                            {{ $comment->body }}
                        </li>
                    @endforeach
                </ul>
          </div>
        </div>
      </div>
    </article>

    <!-- comment form -->
    @include('partials.commentform')

@endsection