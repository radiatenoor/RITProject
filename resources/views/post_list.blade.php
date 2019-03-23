<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h3>Post Data List</h3>
    <div class="col-md-8 col-lg-8 col-xs-8">
        @if(Session::has("success_done"))
            <div class="alert alert-primary" role="alert">
                {{ Session::get("success_done") }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
               <tr>
                   <th>User</th>
                   <th>Title</th>
                   <th>Description</th>
                   <th>Action</th>
               </tr>
            </thead>
            <tbody>
              @foreach($all_data as $post)
              <tr>
                  <td>{{ $post->user_one->full_name }}</td>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->description }}</td>
                  <td>
                      <a href="{{ route('edit.user',$post->id) }}" class="btn btn-info btn-xs">Edit</a>
                      <a href="{{ route('delete.user',$post->id) }}" class="btn btn-danger btn-xs">Delete</a>
                  </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/core.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>

</script>
</body>
</html>