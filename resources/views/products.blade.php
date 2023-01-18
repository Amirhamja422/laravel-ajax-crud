<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Line awesome CSS -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <title>Ajax Crud</title>
  </head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <h2 class="my-5 text-center">ABL</h2>
            <a href=""  class ="btn btn-success my-3" data-toggle="modal" data-target="#addModal">Add Product</a>
            <div class="table-data">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key=>$data)
                <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $data->name }}</td>
                <td>{{ $data->price }}</td>
                <td>
                    <a href="" class="btn btn-primary update_product_form"
                      data-toggle="modal" data-target="#updateModal"
                      data-id="{{ $data->id }}"
                      data-name="{{ $data->name }}"
                      data-price="{{ $data->price }}"
                     ><i class="las la-edit"></i></a>
                     <a href="" class="btn btn-danger delete_product"
                      data-id="{{ $data->id }}"
                    ><i class="las la-times"></i></a>
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
            {{-- { !! $products->links() !! } --}}
            </div>  
        </div>
    </div>
</div>
@include('add_product_modal');
@include('update_product_modal');
@include('product_js');
{!! Toastr::message() !!}

</body>
</html>

