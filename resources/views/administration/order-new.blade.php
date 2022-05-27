@extends('administration.layouts.app') @section('admin_content')

<div class="content">
    <div class="breadcrumb-wrapper breadcrumb-wrapper-2">
        <h1>New Orders</h1>
        <p class="breadcrumbs"><span><a href="{{ route('super.admin') }}">Home</a></span> <span><i class="mdi mdi-chevron-right"></i></span>Orders</p>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="responsive-data-table" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Email</th>
                                    <th>Items</th>
                                    <th>Price</th>
                                    <th>Payment</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1050</td>
                                    <td>Johny Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="204a4f484e59604558414d504c450e434f4d">[email&#160;protected]</a></td>
                                    <td>3</td>
                                    <td>$80</td>
                                    <td>PAID</td>
                                    <td><span class="mb-2 mr-2 badge badge-secondary">Pending</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1049</td>
                                    <td>Ktn Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="85eef1ebc5e0fde4e8f5e9e0abe6eae8">[email&#160;protected]</a></td>
                                    <td>10</td>
                                    <td>$280</td>
                                    <td>COD</td>
                                    <td><span class="mb-2 mr-2 badge badge-warning">Redy To Ship</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1048</td>
                                    <td>mehul Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c8a5ada0bda488adb0a9a5b8a4ade6aba7a5">[email&#160;protected]</a></td>
                                    <td>5</td>
                                    <td>$100</td>
                                    <td>COD</td>
                                    <td><span class="mb-2 mr-2 badge badge-info">On The Way</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1047</td>
                                    <td>Bhavesh Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="185a70796e7d6b70587d60797568747d367b7775">[email&#160;protected]</a></td>
                                    <td>8</td>
                                    <td>$140</td>
                                    <td>PAID</td>
                                    <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1046</td>
                                    <td>Johny Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6e04010600172e0b160f031e020b400d0103">[email&#160;protected]</a></td>
                                    <td>3</td>
                                    <td>$80</td>
                                    <td>PAID</td>
                                    <td><span class="mb-2 mr-2 badge badge-secondary">Pending</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1045</td>
                                    <td>Ktn Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a1cad5cfe1c4d9c0ccd1cdc48fc2cecc">[email&#160;protected]</a></td>
                                    <td>10</td>
                                    <td>$280</td>
                                    <td>COD</td>
                                    <td><span class="mb-2 mr-2 badge badge-warning">Redy To Ship</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1044</td>
                                    <td>mehul Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fd9098958891bd98859c908d9198d39e9290">[email&#160;protected]</a></td>
                                    <td>5</td>
                                    <td>$100</td>
                                    <td>COD</td>
                                    <td><span class="mb-2 mr-2 badge badge-info">On The Way</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1043</td>
                                    <td>Bhavesh Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a2e0cac3d4c7d1cae2c7dac3cfd2cec78cc1cdcf">[email&#160;protected]</a></td>
                                    <td>8</td>
                                    <td>$140</td>
                                    <td>PAID</td>
                                    <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1042</td>
                                    <td>Johny Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="72181d1a1c0b32170a131f021e175c111d1f">[email&#160;protected]</a></td>
                                    <td>3</td>
                                    <td>$80</td>
                                    <td>PAID</td>
                                    <td><span class="mb-2 mr-2 badge badge-secondary">Pending</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1041</td>
                                    <td>Ktn Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="315a455f715449505c415d541f525e5c">[email&#160;protected]</a></td>
                                    <td>10</td>
                                    <td>$280</td>
                                    <td>COD</td>
                                    <td><span class="mb-2 mr-2 badge badge-warning">Redy To Ship</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1040</td>
                                    <td>mehul Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1a777f726f765a7f627b776a767f34797577">[email&#160;protected]</a></td>
                                    <td>5</td>
                                    <td>$100</td>
                                    <td>COD</td>
                                    <td><span class="mb-2 mr-2 badge badge-info">On The Way</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1039</td>
                                    <td>Bhavesh Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fbb9939a8d9e8893bb9e839a968b979ed5989496">[email&#160;protected]</a></td>
                                    <td>8</td>
                                    <td>$140</td>
                                    <td>PAID</td>
                                    <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1038</td>
                                    <td>Johny Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="afc5c0c7c1d6efcad7cec2dfc3ca81ccc0c2">[email&#160;protected]</a></td>
                                    <td>3</td>
                                    <td>$80</td>
                                    <td>PAID</td>
                                    <td><span class="mb-2 mr-2 badge badge-secondary">Pending</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1037</td>
                                    <td>Ktn Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c4afb0aa84a1bca5a9b4a8a1eaa7aba9">[email&#160;protected]</a></td>
                                    <td>10</td>
                                    <td>$280</td>
                                    <td>COD</td>
                                    <td><span class="mb-2 mr-2 badge badge-warning">Redy To Ship</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1036</td>
                                    <td>mehul Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5d30383528311d38253c302d3138733e3230">[email&#160;protected]</a></td>
                                    <td>5</td>
                                    <td>$100</td>
                                    <td>COD</td>
                                    <td><span class="mb-2 mr-2 badge badge-info">On The Way</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1035</td>
                                    <td>Bhavesh Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="36745e574053455e76534e575b465a531855595b">[email&#160;protected]</a></td>
                                    <td>8</td>
                                    <td>$140</td>
                                    <td>PAID</td>
                                    <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1034</td>
                                    <td>Johny Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="43292c2b2d3a03263b222e332f266d202c2e">[email&#160;protected]</a></td>
                                    <td>3</td>
                                    <td>$80</td>
                                    <td>PAID</td>
                                    <td><span class="mb-2 mr-2 badge badge-secondary">Pending</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1033</td>
                                    <td>Ktn Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e9829d87a98c91888499858cc78a8684">[email&#160;protected]</a></td>
                                    <td>10</td>
                                    <td>$280</td>
                                    <td>COD</td>
                                    <td><span class="mb-2 mr-2 badge badge-warning">Redy To Ship</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1032</td>
                                    <td>mehul Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0469616c716844617c65697468612a676b69">[email&#160;protected]</a></td>
                                    <td>5</td>
                                    <td>$100</td>
                                    <td>COD</td>
                                    <td><span class="mb-2 mr-2 badge badge-info">On The Way</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1031</td>
                                    <td>Bhavesh Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c183a9a0b7a4b2a981a4b9a0acb1ada4efa2aeac">[email&#160;protected]</a></td>
                                    <td>8</td>
                                    <td>$140</td>
                                    <td>PAID</td>
                                    <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1030</td>
                                    <td>Johny Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2b41444345526b4e534a465b474e05484446">[email&#160;protected]</a></td>
                                    <td>3</td>
                                    <td>$80</td>
                                    <td>PAID</td>
                                    <td><span class="mb-2 mr-2 badge badge-secondary">Pending</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1029</td>
                                    <td>Ktn Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="600b140e200518010d100c054e030f0d">[email&#160;protected]</a></td>
                                    <td>10</td>
                                    <td>$280</td>
                                    <td>COD</td>
                                    <td><span class="mb-2 mr-2 badge badge-warning">Redy To Ship</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1028</td>
                                    <td>mehul Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b5d8d0ddc0d9f5d0cdd4d8c5d9d09bd6dad8">[email&#160;protected]</a></td>
                                    <td>5</td>
                                    <td>$100</td>
                                    <td>COD</td>
                                    <td><span class="mb-2 mr-2 badge badge-info">On The Way</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1027</td>
                                    <td>Bhavesh Markue</td>
                                    <td><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d99bb1b8afbcaab199bca1b8b4a9b5bcf7bab6b4">[email&#160;protected]</a></td>
                                    <td>8</td>
                                    <td>$140</td>
                                    <td>PAID</td>
                                    <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                    <td>2021-10-30</td>
                                    <td>
                                        <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static"><span class="sr-only">Info</span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
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