@extends('layouts.app')

@section('body_content')
    
@include('layouts.breadcrumb')

<div class="page-content mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="shop-product-fillter mb-50 pr-30">
                            <div class="totall-product">
                                <h2>
                                    <img class="w-36px mr-10" src="{{ asset ('imgs/theme/icons/category-1.svg') }}" alt="" />
                                    Recips Articles
                                </h2>
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
                                            <span><i class="fi-rs-apps-sort"></i>Sort:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span>Featured <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">Featured</a></li>
                                            <li><a href="#">Newest</a></li>
                                            <li><a href="#">Most comments</a></li>
                                            <li><a href="#">Release Date</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="loop-grid pr-30">
                            <div class="row">
                                <article class="col-xl-4 col-lg-6 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right.html">
                                            <img class="border-radius-15" src="{{ asset ('imgs/blog/blog-1.png') }}" alt="" />
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid.html">Side Dish</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">The Intermediate Guide to Healthy Food</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-4 col-lg-6 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right.html">
                                            <img class="border-radius-15" src="{{ asset ('imgs/blog/blog-2.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid.html">Soups and Stews</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">Summer Quinoa Salad Jars with Lemon Dill</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-4 col-lg-6 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right.html">
                                            <img class="border-radius-15" src="{{ asset ('imgs/blog/blog-3.png') }}" alt="" />
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid.html"><i class="fi-rs-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid.html">Salad</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">Caprese Chicken with Smashed Potatoes</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-4 col-lg-6 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right.html">
                                            <img class="border-radius-15" src="{{ asset ('imgs/blog/blog-4.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid.html">Dessert</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">Harissa Chickpeas with Whipped Feta</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-4 col-lg-6 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right.html">
                                            <img class="border-radius-15" src="{{ asset ('imgs/blog/blog-5.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid.html">Breakfast</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">Almond Butter Chocolate Chip Zucchini Bars</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-4 col-lg-6 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right.html">
                                            <img class="border-radius-15" src="{{ asset ('imgs/blog/blog-6.png') }}" alt="" />
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid.html"><i class="fi-rs-picture"></i></a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid.html">Vegan</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">Smoky Beans & Greens Tacos with Aji Verde</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-4 col-lg-6 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right.html">
                                            <img class="border-radius-15" src="{{ asset ('imgs/blog/blog-7.png') }}" alt="" />
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid.html"><i class="fi-rs-play-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid.html">Gluten Free</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">Sticky Ginger Rice Bowls with Pickled Veg</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-4 col-lg-6 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right.html">
                                            <img class="border-radius-15" src="{{ asset ('imgs/blog/blog-8.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid.html">Side Dish</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">Creamy Garlic Sun-Dried Tomato Pasta</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-4 col-lg-6 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right.html">
                                            <img class="border-radius-15" src="{{ asset ('imgs/blog/blog-9.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid.html">Dairy Free</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">The Absolute Easiest Spinach and Pizza</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-4 col-lg-6 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right.html">
                                            <img class="border-radius-15" src="{{ asset ('imgs/blog/blog-10.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid.html">Salad</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">Sticky Ginger Rice Bowls with Pickled</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-4 col-lg-6 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right.html">
                                            <img class="border-radius-15" src="{{ asset ('imgs/blog/blog-1.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid.html">Soups</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">The Best Soft Chocolate Chip Cookies</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-4 col-lg-6 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right.html">
                                            <img class="border-radius-15" src="{{ asset ('imgs/blog/blog-12.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid.html">Vegetarian</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">Baked Mozzarella Chicken Rolls</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-4 col-lg-6 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right.html">
                                            <img class="border-radius-15" src="{{ asset ('imgs/blog/blog-13.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid.html"> Dessert </a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">The Best Avocado Egg Salad</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-4 col-lg-6 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right.html">
                                            <img class="border-radius-15" src="{{ asset ('imgs/blog/blog-14.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid.html">Vegetarian</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">The litigants on the screen are not actors</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-4 col-lg-6 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right.html">
                                            <img class="border-radius-15" src="{{ asset ('imgs/blog/blog-15.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid.html">Vegetarian</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">The litigants on the screen are not actors</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
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
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-area">
                            <div class="sidebar-widget-2 widget_search mb-50">
                                <div class="search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Search…" />
                                        <button type="submit"><i class="fi-rs-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget widget-category-2 mb-50">
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
                            <!-- Product sidebar Widget -->
                            <div class="sidebar-widget product-sidebar mb-50 p-30 bg-grey border-radius-10">
                                <h5 class="section-title style-1 mb-30">Trending Now</h5>
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
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="{{ asset ('imgs/shop/thumbnail-6.jpg') }}" alt="#" />
                                    </div>
                                    <div class="content pt-10">
                                        <h6><a href="shop-product-detail.html">Lorem, ipsum</a></h6>
                                        <p class="price mb-0 mt-5">$25</p>
                                        <div class="product-rate">
                                            <div class="product-rating" style="width: 60%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget widget_instagram mb-50">
                                <h5 class="section-title style-1 mb-30">Gallery</h5>
                                <div class="instagram-gellay">
                                    <ul class="insta-feed">
                                        <li>
                                            <a href="#"><img class="border-radius-5" src="{{ asset ('imgs/shop/thumbnail-1.jpg') }}" alt="" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img class="border-radius-5" src="{{ asset ('imgs/shop/thumbnail-2.jpg') }}" alt="" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img class="border-radius-5" src="{{ asset ('imgs/shop/thumbnail-3.jpg') }}" alt="" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img class="border-radius-5" src="{{ asset ('imgs/shop/thumbnail-4.jpg') }}" alt="" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img class="border-radius-5" src="{{ asset ('imgs/shop/thumbnail-5.jpg') }}" alt="" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img class="border-radius-5" src="{{ asset ('imgs/shop/thumbnail-6.jpg') }}" alt="" /></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Tags-->
                            <div class="sidebar-widget widget-tags mb-50 pb-10">
                                <h5 class="section-title style-1 mb-30">Popular Tags</h5>
                                <ul class="tags-list">
                                    <li class="hover-up">
                                        <a href="blog-category-grid.html"><i class="fi-rs-cross mr-10"></i>Cabbage</a>
                                    </li>
                                    <li class="hover-up">
                                        <a href="blog-category-grid.html"><i class="fi-rs-cross mr-10"></i>Broccoli</a>
                                    </li>
                                    <li class="hover-up">
                                        <a href="blog-category-grid.html"><i class="fi-rs-cross mr-10"></i>Smoothie</a>
                                    </li>
                                    <li class="hover-up">
                                        <a href="blog-category-grid.html"><i class="fi-rs-cross mr-10"></i>Fruit</a>
                                    </li>
                                    <li class="hover-up mr-0">
                                        <a href="blog-category-grid.html"><i class="fi-rs-cross mr-10"></i>Salad</a>
                                    </li>
                                    <li class="hover-up mr-0">
                                        <a href="blog-category-grid.html"><i class="fi-rs-cross mr-10"></i>Appetizer</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="banner-img wow fadeIn mb-50 animated d-lg-block d-none">
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
            </div>
        </div>
@endsection