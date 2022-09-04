<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     
<div class="container">
    <div class="card mt-3 mb-3">
        <div class="card-header text-center">
            <h4>Laravel</h4>
        </div>
        <div class="card-body">
           @if($product) 
           <h3>Product Name : </h3>  <p>{{$product->product_name}}</p>
           <h3>Part Number : </h3>   <p>{{$product->part_number}}</p>
           <h3>Prize : </h3>  <p>{{$product->prize}}</p>
           <h3>Articel Group Id : </h3><p>{{$product->articel_group_Id}}</p>
           @endif 
        </div>
    </div>
</div>
     
</body>
</html>