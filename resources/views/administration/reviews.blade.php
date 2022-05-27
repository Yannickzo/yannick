@extends('administration.layouts.app') 
@section('admin_content')

    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-wrapper-2 d-flex align-items-center justify-content-between">
            <h1>Review</h1>
            <p class="breadcrumbs"><span><a href="{{ route('super.admin') }}">Home</a></span> <span><i class="mdi mdi-chevron-right"></i></span>Review</p>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="responsive-data-table" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Name</th>
                                        <th>Profile</th>
                                        <th>Vendor</th>
                                        <th>Ratings</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <tr>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/products/p1.jpg') }}" alt="product image"></td>
                                        <td>Baby shoes</td>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/user/u1.jpg') }}" alt="product image"></td>
                                        <td>Johnas Pintu</td>
                                        <td>
                                            <div class="ec-t-rate"><i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star"></i></div>
                                        </td>
                                        <td>2021-12-03</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/products/p2.jpg') }}" alt="product image"></td>
                                        <td>Full Sleeve With Cap</td>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/user/u2.jpg') }}" alt="product image"></td>
                                        <td>Mehuli Bronita</td>
                                        <td>
                                            <div class="ec-t-rate"><i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i></div>
                                        </td>
                                        <td>2021-11-28</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/products/p3.jpg') }}" alt="product image"></td>
                                        <td>T-Shirt for Men</td>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/user/u3.jpg') }}" alt="product image"></td>
                                        <td>Hardi Katlin</td>
                                        <td>
                                            <div class="ec-t-rate"><i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star"></i></div>
                                        </td>
                                        <td>2021-11-22</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/products/p4.jpg') }}" alt="product image"></td>
                                        <td>Round Cap for Men</td>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/user/u4.jpg') }}" alt="product image"></td>
                                        <td>Ketan Khatri</td>
                                        <td>
                                            <div class="ec-t-rate"><i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i></div>
                                        </td>
                                        <td>2021-11-20</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/products/p5.jpg') }}" alt="product image"></td>
                                        <td>Blue ladies Bag for Woman</td>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/user/u5.jpg') }}" alt="product image"></td>
                                        <td>Aliza Bravin</td>
                                        <td>
                                            <div class="ec-t-rate"><i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star"></i> <i class="mdi mdi-star"></i></div>
                                        </td>
                                        <td>2021-11-12</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/products/p6.jpg') }}" alt="product image"></td>
                                        <td>Doctor Kit for Kids</td>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/user/u6.jpg') }}" alt="product image"></td>
                                        <td>Methue Liliza</td>
                                        <td>
                                            <div class="ec-t-rate"><i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star"></i></div>
                                        </td>
                                        <td>2021-11-02</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/products/p7.jpg') }}" alt="product image"></td>
                                        <td>Full Sleeve Coton Shirt</td>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/user/u7.jpg') }}" alt="product image"></td>
                                        <td>Alona Nusk</td>
                                        <td>
                                            <div class="ec-t-rate"><i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star"></i> <i class="mdi mdi-star"></i></div>
                                        </td>
                                        <td>2021-10-29</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/products/p8.jpg') }}" alt="product image"></td>
                                        <td>Smart Digital Watches</td>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/user/u8.jpg') }}" alt="product image"></td>
                                        <td>Giorgia Punte</td>
                                        <td>
                                            <div class="ec-t-rate"><i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i></div>
                                        </td>
                                        <td>2021-11-02</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/products/p1.jpg') }}" alt="product image"></td>
                                        <td>Baby shoes</td>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/user/u1.jpg') }}" alt="product image"></td>
                                        <td>Johnas Pintu</td>
                                        <td>
                                            <div class="ec-t-rate"><i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star"></i></div>
                                        </td>
                                        <td>2021-12-03</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/products/p2.jpg') }}" alt="product image"></td>
                                        <td>Full Sleeve With Cap</td>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/user/u2.jpg') }}" alt="product image"></td>
                                        <td>Mehuli Bronita</td>
                                        <td>
                                            <div class="ec-t-rate"><i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i></div>
                                        </td>
                                        <td>2021-11-28</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/products/p3.jpg') }}" alt="product image"></td>
                                        <td>T-Shirt for Men</td>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/user/u3.jpg') }}" alt="product image"></td>
                                        <td>Hardi Katlin</td>
                                        <td>
                                            <div class="ec-t-rate"><i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star"></i></div>
                                        </td>
                                        <td>2021-11-22</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/products/p4.jpg') }}" alt="product image"></td>
                                        <td>Round Cap for Men</td>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/user/u4.jpg') }}" alt="product image"></td>
                                        <td>Ketan Khatri</td>
                                        <td>
                                            <div class="ec-t-rate"><i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i></div>
                                        </td>
                                        <td>2021-11-20</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/products/p5.jpg') }}" alt="product image"></td>
                                        <td>Blue ladies Bag for Woman</td>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/user/u5.jpg') }}" alt="product image"></td>
                                        <td>Aliza Bravin</td>
                                        <td>
                                            <div class="ec-t-rate"><i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star"></i> <i class="mdi mdi-star"></i></div>
                                        </td>
                                        <td>2021-11-12</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/products/p6.jpg') }}" alt="product image"></td>
                                        <td>Doctor Kit for Kids</td>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/user/u6.jpg') }}" alt="product image"></td>
                                        <td>Methue Liliza</td>
                                        <td>
                                            <div class="ec-t-rate"><i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star"></i></div>
                                        </td>
                                        <td>2021-11-02</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/products/p7.jpg') }}" alt="product image"></td>
                                        <td>Full Sleeve Coton Shirt</td>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/user/u7.jpg') }}" alt="product image"></td>
                                        <td>Alona Nusk</td>
                                        <td>
                                            <div class="ec-t-rate"><i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star"></i> <i class="mdi mdi-star"></i></div>
                                        </td>
                                        <td>2021-10-29</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/products/p8.jpg') }}" alt="product image"></td>
                                        <td>Smart Digital Watches</td>
                                        <td><img class="tbl-thumb" src="{{ asset ('admin/img/user/u8.jpg') }}" alt="product image"></td>
                                        <td>Giorgia Punte</td>
                                        <td>
                                            <div class="ec-t-rate"><i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i></div>
                                        </td>
                                        <td>2021-11-02</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection