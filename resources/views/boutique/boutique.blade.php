@extends('layouts.app')

@section('body_content')
    
@include('layouts.breadcrumb')

<div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                        <div class="detail-gallery">
                            <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                            <!-- MAIN SLIDES -->
                            <div class="product-image-slider">
                                <figure class="border-radius-10">
                                    <img src="{{ asset ('imgs/shop/product-16-2.jpg') }}" alt="product image" />
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{ asset ('imgs/shop/product-16-1.jpg') }}" alt="product image" />
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{ asset ('imgs/shop/product-16-3.jpg') }}" alt="product image" />
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{ asset ('imgs/shop/product-16-4.jpg') }}" alt="product image" />
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{ asset ('imgs/shop/product-16-5.jpg') }}" alt="product image" />
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{ asset ('imgs/shop/product-16-6.jpg') }}" alt="product image" />
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{ asset ('imgs/shop/product-16-7.jpg') }}" alt="product image" />
                                </figure>
                            </div>
                            <!-- THUMBNAILS -->
                            <div class="slider-nav-thumbnails">
                                <div><img src="{{ asset ('imgs/shop/thumbnail-3.jpg') }}" alt="product image" /></div>
                                <div><img src="{{ asset ('imgs/shop/thumbnail-4.jpg') }}" alt="product image" /></div>
                                <div><img src="{{ asset ('imgs/shop/thumbnail-5.jpg') }}" alt="product image" /></div>
                                <div><img src="{{ asset ('imgs/shop/thumbnail-6.jpg') }}" alt="product image" /></div>
                                <div><img src="{{ asset ('imgs/shop/thumbnail-7.jpg') }}" alt="product image" /></div>
                                <div><img src="{{ asset ('imgs/shop/thumbnail-8.jpg') }}" alt="product image" /></div>
                                <div><img src="{{ asset ('imgs/shop/thumbnail-9.jpg') }}" alt="product image" /></div>
                            </div>
                        </div>
                        <!-- End Gallery -->
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="detail-info pr-30 pl-30">
                            <span class="stock-status out-stock"> Sale Off </span>
                            <h3 class="title-detail"><a href="{{ route('product' ,  ['product_id'=>1]) }}" class="text-heading">Seeds of Change Organic Quinoa, Brown</a></h3>
                            <div class="product-detail-rating">
                                <div class="product-rate-cover text-end">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                </div>
                            </div>
                            <div class="clearfix product-price-cover">
                                <div class="product-price primary-color float-left">
                                    <span class="current-price text-brand">$38</span>
                                    <span>
                                        <span class="save-price font-md color3 ml-15">26% Off</span>
                                        <span class="old-price font-md ml-15">$52</span>
                                    </span>
                                </div>
                            </div>
                            <div class="detail-extralink mb-30">
                                <div class="detail-qty border radius">
                                    <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                    <!-- <span class="qty-val">1</span> -->
                                    <input type="text" name="quantity" class="qty-val" value="1" min="1">
                                    <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                </div>
                                <div class="product-extra-link2">
                                    <button type="submit" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                            <div class="font-xs">
                                <ul>
                                    <li class="mb-5">Vendor: <span class="text-brand">Nest</span></li>
                                    <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2022</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Detail Info -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-30">
    <div class="row">
        <div class="col-lg-4-5">
            <div class="shop-product-fillter">
                <div class="totall-product">
                    <p>We found <strong class="text-brand">29</strong> items for you!</p>
                </div>
                <div class="sort-by-product-area">
                    <div class="sort-by-cover mr-10">
                        <div class="sort-by-product-wrap">
                            <div class="sort-by">
                                <span><i class="fi-rs-apps"></i>Show:</span>
                            </div>
                            <div class="sort-by-dropdown-wrap">
                                <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                            </div>
                        </div>
                        <div class="sort-by-dropdown">
                            <ul>
                                <li><a class="active" href="#">50</a></li>
                                <li><a href="#">100</a></li>
                                <li><a href="#">150</a></li>
                                <li><a href="#">200</a></li>
                                <li><a href="#">All</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sort-by-cover">
                        <div class="sort-by-product-wrap">
                            <div class="sort-by">
                                <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                            </div>
                            <div class="sort-by-dropdown-wrap">
                                <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                            </div>
                        </div>
                        <div class="sort-by-dropdown">
                            <ul>
                                <li><a class="active" href="#">Featured</a></li>
                                <li><a href="#">Price: Low to High</a></li>
                                <li><a href="#">Price: High to Low</a></li>
                                <li><a href="#">Release Date</a></li>
                                <li><a href="#">Avg. Rating</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row product-grid">
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-1-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-1-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Hot</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Snack</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Seeds of Change Organic Quinoe</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$28.85</span>
                                    <span class="old-price">$32.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-2-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-2-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="sale">Sale</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Hodo Foods</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">All Natural Italian-Style Chicken Meatballs</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 80%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (3.5)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Stouffer</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$52.85</span>
                                    <span class="old-price">$55.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-3-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-3-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="new">New</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Snack</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Angie’s Boomchickapop Sweet & Salty</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 85%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">StarKist</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$48.85</span>
                                    <span class="old-price">$52.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-4-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-4-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Vegetables</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Foster Farms Takeout Crispy Classic</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$17.85</span>
                                    <span class="old-price">$19.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-5-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-5-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="best">-14%</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Pet Foods</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Blue Diamond Almonds Lightly</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$23.85</span>
                                    <span class="old-price">$25.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-6-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-6-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Hodo Foods</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Chobani Complete Vanilla Greek</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$54.85</span>
                                    <span class="old-price">$55.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-7-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-7-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Meats</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Canada Dry Ginger Ale – 2 L Bottle</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$32.85</span>
                                    <span class="old-price">$33.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-8-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-8-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="sale">Sale</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Snack</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Encore Seafoods Stuffed Alaskan</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$35.85</span>
                                    <span class="old-price">$37.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-9-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-9-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Hot</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Coffes</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Gorton’s Beer Battered Fish Fillets</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Old El Paso</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$23.85</span>
                                    <span class="old-price">$25.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-10-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-10-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Cream</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Haagen-Dazs Caramel Cone Ice Cream</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 50%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (2.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Tyson</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$22.85</span>
                                    <span class="old-price">$24.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-1-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-1-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Hot</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Snack</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Seeds of Change Organic Quinoe</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$28.85</span>
                                    <span class="old-price">$32.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-2-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-2-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="sale">Sale</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Hodo Foods</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">All Natural Italian-Style Chicken Meatballs</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 80%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (3.5)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Stouffer</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$52.85</span>
                                    <span class="old-price">$55.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-3-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-3-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="new">New</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Snack</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Angie’s Boomchickapop Sweet & Salty</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 85%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">StarKist</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$48.85</span>
                                    <span class="old-price">$52.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-4-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-4-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Vegetables</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Foster Farms Takeout Crispy Classic</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$17.85</span>
                                    <span class="old-price">$19.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-5-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-5-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="best">-14%</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Pet Foods</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Blue Diamond Almonds Lightly</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$23.85</span>
                                    <span class="old-price">$25.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-6-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-6-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Hodo Foods</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Chobani Complete Vanilla Greek</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$54.85</span>
                                    <span class="old-price">$55.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-7-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-7-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Meats</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Canada Dry Ginger Ale – 2 L Bottle</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$32.85</span>
                                    <span class="old-price">$33.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-8-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-8-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="sale">Sale</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Snack</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Encore Seafoods Stuffed Alaskan</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$35.85</span>
                                    <span class="old-price">$37.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-9-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-9-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Hot</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Coffes</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Gorton’s Beer Battered Fish Fillets</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Old El Paso</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$23.85</span>
                                    <span class="old-price">$25.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                    <div class="product-cart-wrap">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                    <img class="default-img" src="{{ asset ('imgs/shop/product-10-1.jpg') }}" alt="" />
                                    <img class="hover-img" src="{{ asset ('imgs/shop/product-10-2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="{{ route('shop') }}">Cream</a>
                            </div>
                            <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Haagen-Dazs Caramel Cone Ice Cream</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 50%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (2.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Tyson</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$22.85</span>
                                    <span class="old-price">$24.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
            </div>
            <!--product grid-->
            <div class="pagination-area mt-20 mb-20">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fi-rs-arrow-small-left"></i></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fi-rs-arrow-small-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <section class="section-padding pb-5">
                <div class="section-title">
                    <h3 class="">Deals Of The Day</h3>
                    <a class="show-all" href="{{ route('shop') }}">
                        All Deals
                        <i class="fi-rs-angle-right"></i>
                    </a>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-cart-wrap style-2">
                            <div class="product-img-action-wrap">
                                <div class="product-img">
                                    <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                        <img src="{{ asset ('imgs/banner/banner-5.png') }}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="deals-countdown-wrap">
                                    <div class="deals-countdown" data-countdown="2025/03/25 00:00:00"></div>
                                </div>
                                <div class="deals-content">
                                    <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Seeds of Change Organic Quinoa, Brown</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-cart-wrap style-2">
                            <div class="product-img-action-wrap">
                                <div class="product-img">
                                    <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                        <img src="{{ asset ('imgs/banner/banner-6.png') }}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="deals-countdown-wrap">
                                    <div class="deals-countdown" data-countdown="2026/04/25 00:00:00"></div>
                                </div>
                                <div class="deals-content">
                                    <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Perdue Simply Smart Organics Gluten</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="vendor-details-1.html">Old El Paso</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$24.85</span>
                                            <span class="old-price">$26.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 d-none d-lg-block">
                        <div class="product-cart-wrap style-2">
                            <div class="product-img-action-wrap">
                                <div class="product-img">
                                    <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                        <img src="{{ asset ('imgs/banner/banner-7.png') }}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="deals-countdown-wrap">
                                    <div class="deals-countdown" data-countdown="2027/03/25 00:00:00"></div>
                                </div>
                                <div class="deals-content">
                                    <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Signature Wood-Fired Mushroom</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (3.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="vendor-details-1.html">Progresso</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$12.85</span>
                                            <span class="old-price">$13.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 d-none d-xl-block">
                        <div class="product-cart-wrap style-2">
                            <div class="product-img-action-wrap">
                                <div class="product-img">
                                    <a href="{{ route('product' ,  ['product_id'=>1]) }}">
                                        <img src="{{ asset ('imgs/banner/banner-8.png') }}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="deals-countdown-wrap">
                                    <div class="deals-countdown" data-countdown="2025/02/25 00:00:00"></div>
                                </div>
                                <div class="deals-content">
                                    <h2><a href="{{ route('product' ,  ['product_id'=>1]) }}">Simply Lemonade with Raspberry Juice</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (3.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="vendor-details-1.html">Yoplait</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$15.85</span>
                                            <span class="old-price">$16.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="{{ route ('panier') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Deals-->
        </div>
        <div class="col-lg-1-5 primary-sidebar sticky-sidebar">
            <div class="sidebar-widget widget-category-2 mb-30">
                <h5 class="section-title style-1 mb-30">Category</h5>
                <ul>
                    <li>
                        <a href="{{ route('shop') }}"> <img src="{{ asset ('imgs/theme/icons/category-1.svg') }}" alt="" />Milks & Dairies</a><span class="count">30</span>
                    </li>
                    <li>
                        <a href="{{ route('shop') }}"> <img src="{{ asset ('imgs/theme/icons/category-2.svg') }}" alt="" />Clothing</a><span class="count">35</span>
                    </li>
                    <li>
                        <a href="{{ route('shop') }}"> <img src="{{ asset ('imgs/theme/icons/category-3.svg') }}" alt="" />Pet Foods </a><span class="count">42</span>
                    </li>
                    <li>
                        <a href="{{ route('shop') }}"> <img src="{{ asset ('imgs/theme/icons/category-4.svg') }}" alt="" />Baking material</a><span class="count">68</span>
                    </li>
                    <li>
                        <a href="{{ route('shop') }}"> <img src="{{ asset ('imgs/theme/icons/category-5.svg') }}" alt="" />Fresh Fruit</a><span class="count">87</span>
                    </li>
                </ul>
            </div>
            <!-- Fillter By Price -->
            <div class="sidebar-widget price_range range mb-30">
                <h5 class="section-title style-1 mb-30">Fill by price</h5>
                <div class="price-filter">
                    <div class="price-filter-inner">
                        <div id="slider-range" class="mb-20"></div>
                        <div class="d-flex justify-content-between">
                            <div class="caption">From: <strong id="slider-range-value1" class="text-brand"></strong></div>
                            <div class="caption">To: <strong id="slider-range-value2" class="text-brand"></strong></div>
                        </div>
                    </div>
                </div>
                <div class="list-group">
                    <div class="list-group-item mb-10 mt-10">
                        <label class="fw-900">Color</label>
                        <div class="custome-checkbox">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                            <label class="form-check-label" for="exampleCheckbox1"><span>Red (56)</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>Green (78)</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="" />
                            <label class="form-check-label" for="exampleCheckbox3"><span>Blue (54)</span></label>
                        </div>
                        <label class="fw-900 mt-15">Item Condition</label>
                        <div class="custome-checkbox">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="" />
                            <label class="form-check-label" for="exampleCheckbox11"><span>New (1506)</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox21" value="" />
                            <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished (27)</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox31" value="" />
                            <label class="form-check-label" for="exampleCheckbox31"><span>Used (45)</span></label>
                        </div>
                    </div>
                </div>
                <a href="{{ route('shop') }}" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Fillter</a>
            </div>
            <!-- Product sidebar Widget -->
            <div class="sidebar-widget product-sidebar mb-30 p-30 bg-grey border-radius-10">
                <h5 class="section-title style-1 mb-30">New products</h5>
                <div class="single-post clearfix">
                    <div class="image">
                        <img src="{{ asset ('imgs/shop/thumbnail-3.jpg') }}" alt="#" />
                    </div>
                    <div class="content pt-10">
                        <h5><a href="shop-product-detail.html">Chen Cardigan</a></h5>
                        <p class="price mb-0 mt-5">$99.50</p>
                        <div class="product-rate">
                            <div class="product-rating" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
                <div class="single-post clearfix">
                    <div class="image">
                        <img src="{{ asset ('imgs/shop/thumbnail-4.jpg') }}" alt="#" />
                    </div>
                    <div class="content pt-10">
                        <h6><a href="shop-product-detail.html">Chen Sweater</a></h6>
                        <p class="price mb-0 mt-5">$89.50</p>
                        <div class="product-rate">
                            <div class="product-rating" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
                <div class="single-post clearfix">
                    <div class="image">
                        <img src="{{ asset ('imgs/shop/thumbnail-5.jpg') }}" alt="#" />
                    </div>
                    <div class="content pt-10">
                        <h6><a href="shop-product-detail.html">Colorful Jacket</a></h6>
                        <p class="price mb-0 mt-5">$25</p>
                        <div class="product-rate">
                            <div class="product-rating" style="width: 60%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-img wow fadeIn mb-lg-0 animated d-lg-block d-none">
                <img src="{{ asset ('imgs/banner/banner-11.png') }}" alt="" />
                <div class="banner-text">
                    <span>Oganic</span>
                    <h4>
                        Save 17% <br />
                        on <span class="text-brand">Oganic</span><br />
                        Juice
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection