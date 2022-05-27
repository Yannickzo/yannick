@extends('layouts.app')

@section('body_content')
    
@include('layouts.breadcrumb')

<div class="page-content pt-50">
    <div class="container">
        <div class="archive-header-2 text-center">
            <h1 class="display-2 mb-50">Vendors List</h1>
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="sidebar-widget-2 widget_search mb-50">
                        <div class="search-form">
                            <form action="#">
                                <input type="text" placeholder="Search vendors (by name or ID)..." />
                                <button type="submit"><i class="fi-rs-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-50">
            <div class="col-12 col-lg-8 mx-auto">
                <div class="shop-product-fillter">
                    <div class="totall-product">
                        <p>We have <strong class="text-brand">780</strong> vendors now</p>
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
                                    <li><a class="active" href="#">Mall</a></li>
                                    <li><a href="#">Featured</a></li>
                                    <li><a href="#">Preferred</a></li>
                                    <li><a href="#">Total items</a></li>
                                    <li><a href="#">Avg. Rating</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row vendor-grid">
         
            <!--end vendor card-->
            <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                <div class="vendor-wrap mb-40">
                    <div class="vendor-img-action-wrap">
                        <div class="vendor-img">
                            <a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}">
                                <img class="default-img" src="{{ asset ('imgs/vendor/vendor-11.png') }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="vendor-content-wrap">
                        <div class="d-flex justify-content-between align-items-end mb-30">
                            <div>
                                <div class="product-category">
                                    <span class="text-muted">Since 2012</span>
                                </div>
                                <h4 class="mb-5"><a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}">Mrs. Dash</a></h4>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                            </div>
                            <div class="mb-10">
                                <span class="font-small total-product">380 products</span>
                            </div>
                        </div>
                        <div class="vendor-info mb-30">
                            <ul class="contact-infor text-muted">
                                <li><img src="{{ asset ('imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                <li><img src="{{ asset ('imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                            </ul>
                        </div>
                        <a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
            </div>
            <!--end vendor card-->
            <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                <div class="vendor-wrap mb-40">
                    <div class="vendor-img-action-wrap">
                        <div class="vendor-img">
                            <a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}">
                                <img class="default-img" src="{{ asset ('imgs/vendor/vendor-6.png') }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="vendor-content-wrap">
                        <div class="d-flex justify-content-between align-items-end mb-30">
                            <div>
                                <div class="product-category">
                                    <span class="text-muted">Since 2012</span>
                                </div>
                                <h4 class="mb-5"><a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}">Lindt Grocery A1</a></h4>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                            </div>
                            <div class="mb-10">
                                <span class="font-small total-product">380 products</span>
                            </div>
                        </div>
                        <div class="vendor-info mb-30">
                            <ul class="contact-infor text-muted">
                                <li><img src="{{ asset ('imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                <li><img src="{{ asset ('imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                            </ul>
                        </div>
                        <a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
            </div>
            <!--end vendor card-->
            <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                <div class="vendor-wrap mb-40">
                    <div class="vendor-img-action-wrap">
                        <div class="vendor-img">
                            <a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}">
                                <img class="default-img" src="{{ asset ('imgs/vendor/vendor-12.png') }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="vendor-content-wrap">
                        <div class="d-flex justify-content-between align-items-end mb-30">
                            <div>
                                <div class="product-category">
                                    <span class="text-muted">Since 2012</span>
                                </div>
                                <h4 class="mb-5"><a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}">Snyder's-Lance</a></h4>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                            </div>
                            <div class="mb-10">
                                <span class="font-small total-product">380 products</span>
                            </div>
                        </div>
                        <div class="vendor-info mb-30">
                            <ul class="contact-infor text-muted">
                                <li><img src="{{ asset ('imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                <li><img src="{{ asset ('imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                            </ul>
                        </div>
                        <a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
            </div>
            <!--end vendor card-->
            <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                <div class="vendor-wrap mb-40">
                    <div class="vendor-img-action-wrap">
                        <div class="vendor-img">
                            <a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}">
                                <img class="default-img" src="{{ asset ('imgs/vendor/vendor-13.png') }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="vendor-content-wrap">
                        <div class="d-flex justify-content-between align-items-end mb-30">
                            <div>
                                <div class="product-category">
                                    <span class="text-muted">Since 2012</span>
                                </div>
                                <h4 class="mb-5"><a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}">Dreyer's/Edy's</a></h4>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                            </div>
                            <div class="mb-10">
                                <span class="font-small total-product">380 products</span>
                            </div>
                        </div>
                        <div class="vendor-info mb-30">
                            <ul class="contact-infor text-muted">
                                <li><img src="{{ asset ('imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                <li><img src="{{ asset ('imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                            </ul>
                        </div>
                        <a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
            </div>
            <!--end vendor card-->
            <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                <div class="vendor-wrap mb-40">
                    <div class="vendor-img-action-wrap">
                        <div class="vendor-img">
                            <a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}">
                                <img class="default-img" src="{{ asset ('imgs/vendor/vendor-14.png') }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="vendor-content-wrap">
                        <div class="d-flex justify-content-between align-items-end mb-30">
                            <div>
                                <div class="product-category">
                                    <span class="text-muted">Since 2012</span>
                                </div>
                                <h4 class="mb-5"><a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}">Wonderful</a></h4>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                            </div>
                            <div class="mb-10">
                                <span class="font-small total-product">380 products</span>
                            </div>
                        </div>
                        <div class="vendor-info mb-30">
                            <ul class="contact-infor text-muted">
                                <li><img src="{{ asset ('imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                <li><img src="{{ asset ('imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                            </ul>
                        </div>
                        <a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
            </div>
            <!--end vendor card-->

            <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                <div class="vendor-wrap mb-40">
                    <div class="vendor-img-action-wrap">
                        <div class="vendor-img">
                            <a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}">
                                <img class="default-img" src="{{ asset ('imgs/vendor/vendor-15.png') }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="vendor-content-wrap">
                        <div class="d-flex justify-content-between align-items-end mb-30">
                            <div>
                                <div class="product-category">
                                    <span class="text-muted">Since 2012</span>
                                </div>
                                <h4 class="mb-5"><a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}">Almonds</a></h4>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                            </div>
                            <div class="mb-10">
                                <span class="font-small total-product">380 products</span>
                            </div>
                        </div>
                        <div class="vendor-info mb-30">
                            <ul class="contact-infor text-muted">
                                <li><img src="{{ asset ('imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                <li><img src="{{ asset ('imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                            </ul>
                        </div>
                        <a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
            </div>
            <!--end vendor card-->

            <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                <div class="vendor-wrap mb-40">
                    <div class="vendor-img-action-wrap">
                        <div class="vendor-img">
                            <a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}">
                                <img class="default-img" src="{{ asset ('imgs/vendor/vendor-1.png') }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="vendor-content-wrap">
                        <div class="d-flex justify-content-between align-items-end mb-30">
                            <div>
                                <div class="product-category">
                                    <span class="text-muted">Since 2012</span>
                                </div>
                                <h4 class="mb-5"><a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}">Pistachios</a></h4>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                            </div>
                            <div class="mb-10">
                                <span class="font-small total-product">380 products</span>
                            </div>
                        </div>
                        <div class="vendor-info mb-30">
                            <ul class="contact-infor text-muted">
                                <li><img src="{{ asset ('imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                <li><img src="{{ asset ('imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                            </ul>
                        </div>
                        <a href="{{ route ('singleVendor' , ['vendeur_id'=>1]) }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
            </div>
            <!--end vendor card-->
        </div>

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
    </div>
</div>

@endsection