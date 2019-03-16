<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="col-md-8 col-lg-8 col-xs-8">
        @if(count($errors)>0)
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(Session::has("success_done"))
            <div class="alert alert-primary" role="alert">
                {{ Session::get("success_done") }}
            </div>
        @endif
            <h3>Edit User Data</h3>
        <form action="{{ route('update.user',$user->id) }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="text" class="form-control" name="full_name" id="exampleInputEmail1"
                       aria-describedby="emailHelp" placeholder="Enter Name"
                       value="{{ $user->full_name }}">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                       aria-describedby="emailHelp" placeholder="Enter email"
                       value="{{ $user->email }}">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="text" class="form-control" name="password"
                       id="exampleInputPassword1" placeholder="Password"
                       value="{{ $user->password }}">
            </div>
            <div class="form-group form-check">
                <input type="radio" class="form-check-input" name="gender" id="exampleCheck1" value="Male" {{ $user->gender=="Male"?'checked':'' }}>Male<br>
                <input type="radio" class="form-check-input" name="gender" id="exampleCheck1" value="Female" {{ $user->gender=="Female"?'checked':'' }}>Female
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name="check_me" id="exampleCheck1" value="yes" {{ $user->check_me=="yes"?'checked':'' }}>
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/core.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>