@extends('master')

@section('content')
    <h1>{{ $page_name }}</h1>

    @if ($product_count <= 10)
        <p>Product is reducting..... Please refill </p>
    @else
        <p> Product Count: {{ $product_count }}</p>
    @endif


    @switch($color)
        @case("blue")
        <p>Blue color is available </p>
        @break
        @case("red")
        <p>Red color is available </p>
        @break
        @case("green")
        <p>Green color is available </p>
        @break
        @default
        <p>Stock Out </p
    @endswitch

    @empty($products)
        <p> No products found </p>
    @endempty


@endsection
