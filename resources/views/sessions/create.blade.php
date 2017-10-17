@extends ('partials.master')

@section('content')
<div class="col-sm-8">
    <h1>Log in</h1>

    <form action="/sessions" method="POST" role="form">
        {{ csrf_field() }}
    
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" placeholder="Enter password" name="password" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
    @include ('partials.errors')

</div>

@endsection