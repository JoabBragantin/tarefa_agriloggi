@extends('template.hello_world')

@section('content')
<table class="table" border="3">
  <thead class="thead-dark">
    <tr>
    
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Quantity</th>
      <th scope="col">Stock_Users</th>
      <th scope="col">Category</th>
      <th scope="col">Boost</th>
    </tr>
  </thead>
  <tbody>
    @foreach($product as $products)
    <tr>
      <th scope="row">{{$products->idProdutc}}</th>
      <td>{{$products->title}}</td>
      <td>{{$products->quantityType_idquantityType}}</td>
      <td>{{$products->stock_Users}}</td>
      <td>{{$products->category_idcategory}}</td>
      <td>{{$products->boost}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
