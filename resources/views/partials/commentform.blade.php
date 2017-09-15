<h3>Leave a comment:</h3>
<br>
<form method="POST" action="/comments">
    {{ csrf_field() }}

    <div class="form-group">
        <input type="hidden" name="post_id" value="{{ $post->id }}" />
        <label for="body">What do you want to say?</label>
        <input type="text" class="form-control" id="body" name="body">
    </div>

    <button type="submit" class="btn btn-primary">Submit!</button>
</form>

@include ('partials.errors')