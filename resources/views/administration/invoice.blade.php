@extends('administration.layouts.app') @section('admin_content')

<div class="content">
    <div class="breadcrumb-wrapper breadcrumb-wrapper-2">
        <h1>Invoice</h1>
        <p class="breadcrumbs"><span><a href="{{ route('super.admin') }}">Home</a></span> <span><i class="mdi mdi-chevron-right"></i></span>Invoice</p>
    </div>
    <div class="card invoice-wrapper border-radius border bg-white p-4">
        <div class="d-flex justify-content-between">
            <h3 class="text-dark font-weight-medium">Invoice #125</h3>
            <div class="btn-group"><button class="btn btn-sm btn-primary"><i class="mdi mdi-content-save"></i> Save</button> <button class="btn btn-sm btn-primary"><i class="mdi mdi-printer"></i> Print</button></div>
        </div>
        <div class="row pt-5">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <p class="text-dark mb-2">From</p><address><span>Ekka</span><br>47 Elita Squre, VIP Chowk,<br><span>Email:</span> example@gmail.com<br><span>Phone:</span> +91 5264 251 325</address></div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <p class="text-dark mb-2">To</p><address><span>John Marle</span><br>58 Jamie Ways, North Faye, Q5 5ZP<br><span>Email</span>: example@gmail.com<br><span>Phone:</span> +91 5264 521 943</address></div>
            <div class="col-xl-4 disp-none"></div>
            <div class="col-xl-2 col-lg-4 col-sm-6">
                <p class="text-dark mb-2">Details</p><address><span>Invoice ID:</span> <span class="text-dark">#2365546</span><br><span>Date :</span> March 25, 2018<br><span>VAT:</span> PL6541215450</address></div>
        </div>
        <div class="table-responsive">
            <table class="table mt-3 table-striped table-responsive table-responsive-large inv-tbl" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Item</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Unit_Cost</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img class="invoice-item-img" src="{{ asset ('admin/img/products/p1.jpg') }}" alt="product-image"></td>
                        <td>Baby Pink Shoese</td>
                        <td>Amazing shoes with 10 day's replacement warrenty</td>
                        <td>4</td>
                        <td>$50.00</td>
                        <td>$200.00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img class="invoice-item-img" src="{{ asset ('admin/img/products/p2.jpg') }}" alt="product-image"></td>
                        <td>Man T-Shirt with Cap Style</td>
                        <td>Long Sleeve men T-shirt with cap in Dark Blue Color</td>
                        <td>10</td>
                        <td>$50.00</td>
                        <td>$500.00</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><img class="invoice-item-img" src="{{ asset ('admin/img/products/p3.jpg') }}" alt="product-image"></td>
                        <td>Full Sleeve T-Shirt for men</td>
                        <td>Amazing T-shirt in pure Cotton for both</td>
                        <td>10</td>
                        <td>$20.00</td>
                        <td>$200.00</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><img class="invoice-item-img" src="{{ asset ('admin/img/products/p4.jpg') }}" alt="product-image"></td>
                        <td>Round Hat for Men</td>
                        <td>Pure Leather Hat for men with black round tap</td>
                        <td>6</td>
                        <td>$50.00</td>
                        <td>$300.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row justify-content-end inc-total">
            <div class="col-lg-3 col-xl-3 col-xl-3 ml-sm-auto">
                <ul class="list-unstyled mt-3">
                    <li class="mid pb-3 text-dark">Subtotal <span class="d-inline-block float-right text-default">$1200.00</span></li>
                    <li class="mid pb-3 text-dark">Vat(10%) <span class="d-inline-block float-right text-default">$100.00</span></li>
                    <li class="pb-3 text-dark">Total <span class="d-inline-block float-right">$1300.00</span></li>
                </ul><a href="javascript:void(0)" class="btn btn-block mt-2 btn-primary btn-pill">Procced to Payment</a></div>
        </div>
    </div>
</div>

@endsection



