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
    <h3>Order Data List</h3>
    <div class="col-md-8 col-lg-8 col-xs-8">
        @if(Session::has("success_done"))
            <div class="alert alert-primary" role="alert">
                {{ Session::get("success_done") }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
               <tr>
                   <th>Customer</th>
                   <th>email</th>
                   <th>price</th>
                   <th>Order Date</th>
                   <th>Action</th>
               </tr>
            </thead>
            <tbody>
              @foreach($order_data as $order)
              <tr>
                  <td>{{ $order->customer->name }}</td>
                  <td>{{ $order->customer->email }}</td>
                  <td>{{ $order->price }}</td>
                  <td>{{ $order->created_at }}</td>
                  <td>
                      <a href="" class="btn btn-info btn-xs">Edit</a>
                      <a href="" class="btn btn-danger btn-xs">Delete</a>
                  </td>
              </tr>
              @endforeach
            </tbody>
        </table>
        <h3>Customer Orders</h3>
        <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Customer</th>
                    <th>email</th>
                    <th>Order Count</th>
                    <th>Order Numbers</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customer_data as $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>
                            {{ count($customer->order) }}
                        </td>
                        <td>
                            @foreach($customer->order as $order)
                               {{ $order->id }}={{ $order->price  }},
                            @endforeach
                        </td>
                        <td>
                            <a href="" class="btn btn-info btn-xs">Edit</a>
                            <a href="" class="btn btn-danger btn-xs">Delete</a>
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