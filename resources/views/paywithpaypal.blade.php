<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <!-- <h2>Vertical (basic) form</h2> -->
  @if(Session::has('success'))

    <div class="alert alert-success">
      <strong>{{Session::get('success')}}!</strong>
    </div>

  @endif
  @if(Session::has('error'))
   <div class="alert alert-danger">
    <strong>{{Session::get('error')}}!</strong> 
    </div>
  @endif

  <form action="{{route('paypal.paypal')}}" method="post">
    {{csrf_field()}}
  <!--   @if($errors)
    @foreach ($errors->all() as $error)
     <div class="alert alert-danger">
        <div>{{ $error }}</div>
      </div>
    @endforeach
    @endif -->
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
      <p style="color: red"> {{ $errors->first('name') }}</p>
    </div>
      <div class="form-group">
      <label for="email">quantity:</label>
      <input type="number" class="form-control" id="quantity" placeholder="Enter Quantity" name="quantity"
      >
       <p style="color: red">{{ $errors->first('quantity') }}</p>
    </div>
      <div class="form-group">
      <label for="email">amount:</label>
      <input type="number" class="form-control" id="amount" placeholder="Enter Amount" name="amount">
      <p style="color: red">{{ $errors->first('amount') }}</p>
    </div>
    
   
    <button type="submit" class="btn btn-primary">Pay with Paypal</button>
  </form>
</div>

</body>
</html>
