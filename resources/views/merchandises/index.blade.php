@extends('base')

@section('content')
<div class="all">


    <h1>Merchandises</h1>

    <table class="table table-bordered table-striped table-sm table">
    <thead>
        <tr>
            <th>#</th>
            <th>Brand Name</th>
            <th>Product Name</th>
            <th>Retail Price</th>
            <th>Wholesale Price</th>
            <th>Wholesale Qty.</th>
            <th>Quantity Stock</th>
            <th>Unit ID</th>
            <th>Category ID</th>
        </tr>
    </thead>

    <tbody>
        @foreach($merchandises as $merch)

        <tr>
            <td>{{$merch->id}}</td>
            <td>{{$merch->brand_name}}</td>
            <td>{{$merch->product_name}}</td>
            <td>{{$merch->retail_price}}</td>
            <td>{{$merch->wholesale_price}}</td>
            <td>{{$merch->wholesale_qty}}</td>
            <td>{{$merch->qty_stock}}</td>
            <td>{{$merch->unit_id}}</td>
            <td>{{$merch->category_id}}</td>
        </tr>

        @endforeach
    </tbody>
    <style>
        .table{
            font-size: 20px;
        }
        .all{
            margin-top: 50px;
        }
    </style>
    </table>
</div>

@stop
