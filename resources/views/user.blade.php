<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Data</title>
</head>
<body>
   <div>
       <h3 style="color: red">Hello Laravel Training| {{ $show_name }} </h3>
       <h3 style="color: green">Our Address: {{ $address }}</h3>
       <h3 style="color: blue">My Email: {!! $email !!}</h3>
   </div>
</body>
</html>