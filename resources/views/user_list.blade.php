<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="col-md-8 col-lg-8 col-xs-8">
        <table class="table table-bordered">
            <thead>
               <tr>
                   <th>Full Name</th>
                   <th>Email</th>
                   <th>Pass</th>
                   <th>Gender</th>
                   <th>Check Me</th>
                   <th>Action</th>
               </tr>
            </thead>
            <tbody>
              @foreach($all_data as $data)
              <tr>
                  <td>{{ $data->full_name }}</td>
                  <td>{{ $data->email }}</td>
                  <td>{{ $data->password }}</td>
                  <td>{{ $data->gender }}</td>
                  <td>{{ $data->check_me }}</td>
                  <td>
                      <a href="{{ route('edit.user',$data->id) }}" class="btn btn-info btn-xs">Edit</a>
                      <button class="btn btn-danger btn-xs">Delete</button>
                  </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/core.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>