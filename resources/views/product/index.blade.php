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
            
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <table class="table table-bordered mt-3">
               
                <tr>
                    <th>Product Name</th>
                    <th>Part Number</th>
                    <th>Prize</th>
                    <th>Options</th>
                </tr>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->part_number }}</td>
                    <td>{{ $product->prize }}</td>
                    <td>
                     <form action="{{ route('products.destroy',$product->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('products.show',$product->id) }}">Show</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                </tr>
                @endforeach
            </table>
            
  
        </div>
    </div>
</div>
     
</body>
</html>
