@extends('layouts.master')

@section('content')

<div class="main-content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                	<div class="row">
                        <div class="col-lg-5">
                            <!-- Product image -->
                            <a href="javascript: void(0);" class="text-center d-block mb-4">
                                <img src="{{ asset('img/shop-img/7.jpg')}}" class="img-fluid" alt="Product">
                            </a>

                            <div class="d-lg-flex d-none justify-content-center">
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('img/shop-img/9.jpg')}}" class="img-fluid img-thumbnail p-2" style="max-width: 80px;" alt="Product">
                                </a>
                                <a href="javascript: void(0);" class="ml-2">
                                    <img src="{{ asset('img/shop-img/7.jpg')}}" class="img-fluid img-thumbnail p-2" style="max-width: 80px;" alt="Product">
                                </a>
                                <a href="javascript: void(0);" class="ml-2">
                                    <img src="{{ asset('img/shop-img/6.jpg')}}" class="img-fluid img-thumbnail p-2" style="max-width: 80px;" alt="Product">
                                </a>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-7 col-xl-5">
                            <form class="pl-lg-4">
                                <!-- Product title -->
                                <h3 class="mt-0 font-24">{{ $products->product_name }}</h3>
                                <p class="mb-1 font-15">Added Date: {{ $products->created_at }} </p>
                                <p></p>
                                <p class="font-15">
                                    <span class="text-warning zmdi zmdi-star-outline"></span>
                                    <span class="text-warning zmdi zmdi-star-outline"></span>
                                    <span class="text-warning zmdi zmdi-star-outline"></span>
                                    <span class="text-warning zmdi zmdi-star-outline"></span>
                                    <span class="text-warning zmdi zmdi-star-outline"></span>
                                </p>

                                <!-- Product description -->
                                <div class="mt-4">
                                    <h6 class="font-18">Price:</h6>
                                    <h3> $120.58</h3>
                                </div>

                                <!-- Quantity -->
                                <div class="mt-4">
                                    <h6 class="font-18">Quantity</h6>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label for="size">Men's size</label>
                                                <select class="form-control" id="size">
                                                    <option>Chooze size</option>
                                                    <option>11.5</option>
                                                    <option>11</option>
                                                    <option>10.5</option>
                                                    <option>10</option>
                                                    <option>9.5</option>
                                                    <option>9</option>
                                                    <option>8.5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="quantity">Quantity</label>
                                                <select class="form-control" id="quantity">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-buttons">
                                    <a class="btn btn-primary mt-10" href="#">Add to Cart</a>
                                </div>

                                <!-- Product description -->
                                <div class="mt-4">
                                    <h6 class="font-18">Description:</h6>
                                    <p class="font-15">{{ $products->detail_product_description }}</p>
                                </div>

                                <!-- Product information -->
                                <div class="mt-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="font-18 mb-0">Available Stock:</h6>
                                            <p class="font-22 mb-0">1256</p>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection