@extends ('partials.master')

@section ('content')
    <h1>Create a post!</h1>
    <br>
    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title of the post:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="body">What do you want to say?</label>
            <input type="text" class="form-control" id="body" name="body">
        </div>

        <button type="submit" class="btn btn-primary">Submit!</button>
    </form>

@include ('partials.errors')

@endsection