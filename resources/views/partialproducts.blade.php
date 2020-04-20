@extends('allproducts')

@section('prodcontent')
{{$products->links()}}


<div class="category-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li class="{{$cats == 1 ? 'active' : ''}}"><a href="{{route('ProductByCats', ['$cat' => 1])}}" >T-Shirt</a></li>
            <li class="{{$cats == 3 ? 'active' : ''}}"><a href="{{route('ProductByCats', ['$cat' => 3])}}">Sunglass</a></li>
            <li class="{{$cats == 2 ? 'active' : ''}}"><a href="{{route('ProductByCats', ['$cat' => 2])}}">Blazers</a></li>
            <li class="{{$cats == 4 ? 'active' : ''}}"><a href="{{route('ProductByCats', ['$cat' => 4])}}">Kids</a></li>
            <li class="{{$cats == 5 ? 'active' : ''}}"><a href="{{route('ProductByCats', ['$cat' => 5])}}">Polo shirt</a></li>
        </ul>
    </div>
    <div class="tab-content">

        <div class="tab-pane fade in active" id="tshirt" >

            @foreach( $products as $product)
                <div class="col-md-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{Storage::disk('local')->url('product_images/'.$product->image)}}" alt="" />
                                <h2>{{$product->price}}</h2>
                                <p>{{$product->description}}</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>

            @endforeach

        </div>

    </div>
</div>
{{$products->links()}}
@endsection