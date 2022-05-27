@extends('administration.layouts.app') @section('admin_content')

<div class="content">
    <div class="breadcrumb-wrapper breadcrumb-wrapper-2">
        <h1>Orders History</h1>
        <p class="breadcrumbs"><span><a href="{{ route('super.admin') }}">Home</a></span> <span><i class="mdi mdi-chevron-right"></i></span>History</p>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="responsive-data-table_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row justify-content-between top-information">
                                <div class="dataTables_length" id="responsive-data-table_length"><label>Show <select name="responsive-data-table_length" aria-controls="responsive-data-table" class="form-select form-select-sm"><option value="20">20</option><option value="30">30</option><option value="50">50</option><option value="75">75</option><option value="-1">All</option></select> entries</label></div>
                                <div id="responsive-data-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="responsive-data-table"></label></div>
                            </div>
                            <table id="responsive-data-table" class="table dataTable no-footer" style="width: 100%;" aria-describedby="responsive-data-table_info">
                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 14px;">ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 62px;">Customer</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 128px;">Email</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Items: activate to sort column ascending" style="width: 36px;">Items</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 33px;">Price</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Payment: activate to sort column ascending" style="width: 56px;">Payment</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 61px;">Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 29px;">Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 56px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td class="sorting_1">1047</td>
                                        <td>Bhavesh Markue</td>
                                        <td>Bhavesh@example.com</td>
                                        <td>8</td>
                                        <td>$140</td>
                                        <td>PAID</td>
                                        <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">1047</td>
                                        <td>Bhavesh Markue</td>
                                        <td>Bhavesh@example.com</td>
                                        <td>8</td>
                                        <td>$140</td>
                                        <td>PAID</td>
                                        <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">1047</td>
                                        <td>Bhavesh Markue</td>
                                        <td>Bhavesh@example.com</td>
                                        <td>8</td>
                                        <td>$140</td>
                                        <td>PAID</td>
                                        <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">1047</td>
                                        <td>Bhavesh Markue</td>
                                        <td>Bhavesh@example.com</td>
                                        <td>8</td>
                                        <td>$140</td>
                                        <td>PAID</td>
                                        <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">1047</td>
                                        <td>Bhavesh Markue</td>
                                        <td>Bhavesh@example.com</td>
                                        <td>8</td>
                                        <td>$140</td>
                                        <td>PAID</td>
                                        <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">1047</td>
                                        <td>Bhavesh Markue</td>
                                        <td>Bhavesh@example.com</td>
                                        <td>8</td>
                                        <td>$140</td>
                                        <td>PAID</td>
                                        <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">1047</td>
                                        <td>Bhavesh Markue</td>
                                        <td>Bhavesh@example.com</td>
                                        <td>8</td>
                                        <td>$140</td>
                                        <td>PAID</td>
                                        <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">1047</td>
                                        <td>Bhavesh Markue</td>
                                        <td>Bhavesh@example.com</td>
                                        <td>8</td>
                                        <td>$140</td>
                                        <td>PAID</td>
                                        <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">1047</td>
                                        <td>Bhavesh Markue</td>
                                        <td>Bhavesh@example.com</td>
                                        <td>8</td>
                                        <td>$140</td>
                                        <td>PAID</td>
                                        <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">1048</td>
                                        <td>mehul Markue</td>
                                        <td>mehul@example.com</td>
                                        <td>5</td>
                                        <td>$100</td>
                                        <td>COD</td>
                                        <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">1048</td>
                                        <td>mehul Markue</td>
                                        <td>mehul@example.com</td>
                                        <td>5</td>
                                        <td>$100</td>
                                        <td>COD</td>
                                        <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">1048</td>
                                        <td>mehul Markue</td>
                                        <td>mehul@example.com</td>
                                        <td>5</td>
                                        <td>$100</td>
                                        <td>COD</td>
                                        <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">1048</td>
                                        <td>mehul Markue</td>
                                        <td>mehul@example.com</td>
                                        <td>5</td>
                                        <td>$100</td>
                                        <td>COD</td>
                                        <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">1048</td>
                                        <td>mehul Markue</td>
                                        <td>mehul@example.com</td>
                                        <td>5</td>
                                        <td>$100</td>
                                        <td>COD</td>
                                        <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">1048</td>
                                        <td>mehul Markue</td>
                                        <td>mehul@example.com</td>
                                        <td>5</td>
                                        <td>$100</td>
                                        <td>COD</td>
                                        <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">1048</td>
                                        <td>mehul Markue</td>
                                        <td>mehul@example.com</td>
                                        <td>5</td>
                                        <td>$100</td>
                                        <td>COD</td>
                                        <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">1048</td>
                                        <td>mehul Markue</td>
                                        <td>mehul@example.com</td>
                                        <td>5</td>
                                        <td>$100</td>
                                        <td>COD</td>
                                        <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">1048</td>
                                        <td>mehul Markue</td>
                                        <td>mehul@example.com</td>
                                        <td>5</td>
                                        <td>$100</td>
                                        <td>COD</td>
                                        <td><span class="mb-2 mr-2 badge badge-success">Delivered</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">1049</td>
                                        <td>Ktn Markue</td>
                                        <td>ktn@example.com</td>
                                        <td>10</td>
                                        <td>$280</td>
                                        <td>COD</td>
                                        <td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">1049</td>
                                        <td>Ktn Markue</td>
                                        <td>ktn@example.com</td>
                                        <td>10</td>
                                        <td>$280</td>
                                        <td>COD</td>
                                        <td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
                                        <td>2021-10-30</td>
                                        <td>
                                            <div class="btn-group mb-1"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Detail</a> <a class="dropdown-item" href="#">Track</a> <a class="dropdown-item" href="#">Cancel</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row justify-content-between bottom-information">
                                <div class="dataTables_info" id="responsive-data-table_info" role="status" aria-live="polite">Showing 1 to 20 of 36 entries</div>
                                <div class="dataTables_paginate paging_simple_numbers" id="responsive-data-table_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="responsive-data-table_previous"><a href="#" aria-controls="responsive-data-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#" aria-controls="responsive-data-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="responsive-data-table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                        <li class="paginate_button page-item next" id="responsive-data-table_next"><a href="#" aria-controls="responsive-data-table" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection