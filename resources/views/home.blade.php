@extends('layouts.dashboard')

@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Products</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active">Products</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Filter</h4>

                            <div>
                                <h5 class="font-size-14 mb-3">Clothes</h5>
                                <ul class="list-unstyled product-list">
                                    <li><a href="javascript: void(0);"><i class="mdi mdi-chevron-right me-1"></i>
                                            T-shirts</a></li>
                                    <li><a href="javascript: void(0);"><i class="mdi mdi-chevron-right me-1"></i>
                                            Shirts</a></li>
                                    <li><a href="javascript: void(0);"><i class="mdi mdi-chevron-right me-1"></i>
                                            Jeans</a></li>
                                    <li><a href="javascript: void(0);"><i class="mdi mdi-chevron-right me-1"></i>
                                            Jackets</a></li>
                                </ul>
                            </div>

                            <div class="mt-4 pt-3">
                                <h5 class="font-size-14 mb-3">Price</h5>
                                <input type="text" id="pricerange">
                            </div>

                            <div class="mt-4 pt-3">
                                <h5 class="font-size-14 mb-3">Discount</h5>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="productdiscountCheck1">
                                    <label class="form-check-label" for="productdiscountCheck1">
                                        Less than 10%
                                    </label>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="productdiscountCheck2">
                                    <label class="form-check-label" for="productdiscountCheck2">
                                        10% or more
                                    </label>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="productdiscountCheck3" checked>
                                    <label class="form-check-label" for="productdiscountCheck3">
                                        20% or more
                                    </label>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="productdiscountCheck4">
                                    <label class="form-check-label" for="productdiscountCheck4">
                                        30% or more
                                    </label>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="productdiscountCheck5">
                                    <label class="form-check-label" for="productdiscountCheck5">
                                        40% or more
                                    </label>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="productdiscountCheck6">
                                    <label class="form-check-label" for="productdiscountCheck6">
                                        50% or more
                                    </label>
                                </div>

                            </div>

                            <div  class="mt-4 pt-3">
                                <h5 class="font-size-14 mb-3">Customer Rating</h5>
                                <div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="productratingCheck1">
                                        <label class="form-check-label" for="productratingCheck1">
                                            4 <i class="bx bxs-star text-warning"></i> & Above
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="productratingCheck2">
                                        <label class="form-check-label" for="productratingCheck2">
                                            3 <i class="bx bxs-star text-warning"></i> & Above
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="productratingCheck3">
                                        <label class="form-check-label" for="productratingCheck3">
                                            2 <i class="bx bxs-star text-warning"></i> & Above
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="productratingCheck4">
                                        <label class="form-check-label" for="productratingCheck4">
                                            1 <i class="bx bxs-star text-warning"></i>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-9">

                    <div class="row mb-3">
                        <div class="col-xl-4 col-sm-6">
                            <div class="mt-2">
                                <h5>Clothes</h5>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-6">
                            <form class="mt-4 mt-sm-0 float-sm-end d-sm-flex align-items-center">
                                <div class="search-box me-2">
                                    <div class="position-relative">
                                        <input type="text" class="form-control border-0" placeholder="Search...">
                                        <i class="bx bx-search-alt search-icon"></i>
                                    </div>
                                </div>
                                <ul class="nav nav-pills product-view-nav justify-content-end mt-3 mt-sm-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><i class="bx bx-grid-alt"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="bx bx-list-ul"></i></a>
                                    </li>
                                </ul>


                            </form>
                        </div>
                    </div>
                  @foreach ($products as $product)
                  <div class="row">
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="product-img position-relative">
                                    <div class="avatar-sm product-ribbon">
                                        <span class="avatar-title rounded-circle  bg-primary">
                                           {{$product->percentage_discount}} %
                                        </span>
                                    </div>
                                    <a  href="{{ route('product_details',$product->id) }}">
                                        <img   src="/storage/assets/images/{{$product->image}}" alt=""
                                        class="img-fluid mx-auto d-block">
                                    </a>
                                </div>
                                <div class="mt-4 text-center">
                                    <h5 class="mb-3 text-truncate"><a href="{{ route('product_details',$product->id) }}"
                                         class="text-dark">{{$product->name}} </a></h5>

                                    <p class="text-muted">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                    </p>
                                    <h5 class="my-0"><span class="text-muted me-2"><del>${{$product->discount}}</del></span>
                                        <b>${{$product->price}}</b></h5>

                                </div>
                                div
                            </div>
                        </div>
                    </div>
                </div>

                  @endforeach
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
                                <li class="page-item disabled">
                                    <a href="javascript: void(0);" class="page-link"><i
                                            class="mdi mdi-chevron-left"></i></a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript: void(0);" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="javascript: void(0);" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript: void(0);" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript: void(0);" class="page-link">4</a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript: void(0);" class="page-link">5</a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript: void(0);" class="page-link"><i
                                            class="mdi mdi-chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())

                    </script> © Skote.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection