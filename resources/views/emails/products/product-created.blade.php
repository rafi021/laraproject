<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    p{
        font-weight: 600;
        font-size: 24px;
        color: red;
    }
</style>

<p>
    Product: {{ $product->name }} Created
</p>

<p>
    <img src="{{ asset('uploads/product-image/'.$product->image)}}" alt="">
</p>
