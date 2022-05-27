@extends('administration.layouts.app')

@section('admin_content')

<div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Vendor Card</h1>
            <p class="breadcrumbs"><span><a href="{{ route ('super.admin') }}">Home</a></span><span><i class="mdi mdi-chevron-right"></i></span> Vendor</p>
        </div>
        <div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVendor">Add Vendor</button></div>
    </div>
    <div class="card card-default p-4 ec-card-space">
        <div class="ec-vendor-card mt-m-24px row">
            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-24px"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                    <div class="vendor-info card-body text-center p-4">
                        <a href="{{ route ('admin.detail.agent.commercial' , ['id_agent'=>1])}}" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3"><img src="{{ asset ('admin/img/vendor/u1.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                            <h5 class="card-title text-dark">Emma Smith</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-1"><i class="mdi mdi-cellphone-basic mr-1"></i> <span>+91 963-852-7410</span></li>
                                <li class="d-flex"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="4124392c20312d2401242c20282d6f222e2c">[email&#160;protected]</span></span>
                                </li>
                            </ul>
                        </a>
                        <div class="row justify-content-center ec-vendor-detail">
                            <div class="col-4">
                                <h6 class="text-uppercase">Items</h6>
                                <h5>180</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Sell</h6>
                                <h5>1908</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Payout</h6>
                                <h5>$2691</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-24px"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                    <div class="vendor-info card-body text-center p-4">
                        <a href="{{ route ('admin.detail.agent.commercial' , ['id_agent'=>1])}}" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3"><img src="{{ asset ('admin/img/vendor/u2.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                            <h5 class="card-title text-dark">Bobly Smith</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-1"><i class="mdi mdi-cellphone-basic mr-1"></i> <span>+91 863-852-7654</span></li>
                                <li class="d-flex"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="f4918c9995849891b49199959d98da979b99">[email&#160;protected]</span></span>
                                </li>
                            </ul>
                        </a>
                        <div class="row justify-content-center ec-vendor-detail">
                            <div class="col-4">
                                <h6 class="text-uppercase">Items</h6>
                                <h5>65</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Sell</h6>
                                <h5>548</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Payout</h6>
                                <h5>$254</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-24px"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                    <div class="vendor-info card-body text-center p-4">
                        <a href="{{ route ('admin.detail.agent.commercial' , ['id_agent'=>1])}}" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3"><img src="{{ asset ('admin/img/vendor/u3.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                            <h5 class="card-title text-dark">Robin Hood</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-1"><i class="mdi mdi-cellphone-basic mr-1"></i> <span>+91 889-852-7466</span></li>
                                <li class="d-flex"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="52372a3f33223e3712373f333b3e7c313d3f">[email&#160;protected]</span></span>
                                </li>
                            </ul>
                        </a>
                        <div class="row justify-content-center ec-vendor-detail">
                            <div class="col-4">
                                <h6 class="text-uppercase">Items</h6>
                                <h5>654</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Sell</h6>
                                <h5>548</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Payout</h6>
                                <h5>$654</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-24px"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                    <div class="vendor-info card-body text-center p-4">
                        <a href="{{ route ('admin.detail.agent.commercial' , ['id_agent'=>1])}}" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3"><img src="{{ asset ('admin/img/vendor/u4.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                            <h5 class="card-title text-dark">devin chingol</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-1"><i class="mdi mdi-cellphone-basic mr-1"></i> <span>+91 789-852-7865</span></li>
                                <li class="d-flex"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="d2b7aabfb3a2beb792b7bfb3bbbefcb1bdbf">[email&#160;protected]</span></span>
                                </li>
                            </ul>
                        </a>
                        <div class="row justify-content-center ec-vendor-detail">
                            <div class="col-4">
                                <h6 class="text-uppercase">Items</h6>
                                <h5>977</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Sell</h6>
                                <h5>987</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Payout</h6>
                                <h5>$654</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-24px"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                    <div class="vendor-info card-body text-center p-4">
                        <a href="{{ route ('admin.detail.agent.commercial' , ['id_agent'=>1])}}" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3"><img src="{{ asset ('admin/img/vendor/u5.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                            <h5 class="card-title text-dark">Nitilo Smith</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-1"><i class="mdi mdi-cellphone-basic mr-1"></i> <span>+91 658-852-7410</span></li>
                                <li class="d-flex"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="b6d3cedbd7c6dad3f6d3dbd7dfda98d5d9db">[email&#160;protected]</span></span>
                                </li>
                            </ul>
                        </a>
                        <div class="row justify-content-center ec-vendor-detail">
                            <div class="col-4">
                                <h6 class="text-uppercase">Items</h6>
                                <h5>654</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Sell</h6>
                                <h5>159</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Payout</h6>
                                <h5>$951</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-24px"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                    <div class="vendor-info card-body text-center p-4">
                        <a href="{{ route ('admin.detail.agent.commercial' , ['id_agent'=>1])}}" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3"><img src="{{ asset ('admin/img/vendor/u6.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                            <h5 class="card-title text-dark">Mehulo Kathia</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-1"><i class="mdi mdi-cellphone-basic mr-1"></i> <span>+91 698-852-7410</span></li>
                                <li class="d-flex"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="f89d80959988949db89d95999194d69b9795">[email&#160;protected]</span></span>
                                </li>
                            </ul>
                        </a>
                        <div class="row justify-content-center ec-vendor-detail">
                            <div class="col-4">
                                <h6 class="text-uppercase">Items</h6>
                                <h5>658</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Sell</h6>
                                <h5>854</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Payout</h6>
                                <h5>$634</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-24px"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                    <div class="vendor-info card-body text-center p-4">
                        <a href="{{ route ('admin.detail.agent.commercial' , ['id_agent'=>1])}}" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3"><img src="{{ asset ('admin/img/vendor/u7.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                            <h5 class="card-title text-dark">Bridg Stone</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-1"><i class="mdi mdi-cellphone-basic mr-1"></i> <span>+91 333-852-7410</span></li>
                                <li class="d-flex"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="92f7eafff3e2fef7d2f7fff3fbfebcf1fdff">[email&#160;protected]</span></span>
                                </li>
                            </ul>
                        </a>
                        <div class="row justify-content-center ec-vendor-detail">
                            <div class="col-4">
                                <h6 class="text-uppercase">Items</h6>
                                <h5>652</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Sell</h6>
                                <h5>125</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Payout</h6>
                                <h5>$475</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-24px"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                    <div class="vendor-info card-body text-center p-4">
                        <a href="{{ route ('admin.detail.agent.commercial' , ['id_agent'=>1])}}" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3"><img src="{{ asset ('admin/img/vendor/u8.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                            <h5 class="card-title text-dark">pintu Trainee</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-1"><i class="mdi mdi-cellphone-basic mr-1"></i> <span>+91 698-866-7410</span></li>
                                <li class="d-flex"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="1f7a67727e6f737a5f7a727e7673317c7072">[email&#160;protected]</span></span>
                                </li>
                            </ul>
                        </a>
                        <div class="row justify-content-center ec-vendor-detail">
                            <div class="col-4">
                                <h6 class="text-uppercase">Items</h6>
                                <h5>658</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Sell</h6>
                                <h5>457</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Payout</h6>
                                <h5>$874</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-24px"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                    <div class="vendor-info card-body text-center p-4">
                        <a href="{{ route ('admin.detail.agent.commercial' , ['id_agent'=>1])}}" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3"><img src="{{ asset ('admin/img/vendor/u9.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                            <h5 class="card-title text-dark">DL Kapdia</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-1"><i class="mdi mdi-cellphone-basic mr-1"></i> <span>+91 332-852-3215</span></li>
                                <li class="d-flex"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="4c2934212d3c20290c29212d2520622f2321">[email&#160;protected]</span></span>
                                </li>
                            </ul>
                        </a>
                        <div class="row justify-content-center ec-vendor-detail">
                            <div class="col-4">
                                <h6 class="text-uppercase">Items</h6>
                                <h5>180</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Sell</h6>
                                <h5>1908</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Payout</h6>
                                <h5>$2691</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-24px"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                    <div class="vendor-info card-body text-center p-4">
                        <a href="{{ route ('admin.detail.agent.commercial' , ['id_agent'=>1])}}" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3"><img src="{{ asset ('admin/img/vendor/u10.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                            <h5 class="card-title text-dark">Manu Semli</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-1"><i class="mdi mdi-cellphone-basic mr-1"></i> <span>+91 654-852-7744</span></li>
                                <li class="d-flex"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="77120f1a16071b1237121a161e1b5914181a">[email&#160;protected]</span></span>
                                </li>
                            </ul>
                        </a>
                        <div class="row justify-content-center ec-vendor-detail">
                            <div class="col-4">
                                <h6 class="text-uppercase">Items</h6>
                                <h5>252</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Sell</h6>
                                <h5>542</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Payout</h6>
                                <h5>$854</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-24px"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                    <div class="vendor-info card-body text-center p-4">
                        <a href="{{ route ('admin.detail.agent.commercial' , ['id_agent'=>1])}}" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3"><img src="{{ asset ('admin/img/vendor/u11.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                            <h5 class="card-title text-dark">Niki Smith</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-1"><i class="mdi mdi-cellphone-basic mr-1"></i> <span>+91 45+6-852-5522</span></li>
                                <li class="d-flex"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="2f4a57424e5f434a6f4a424e4643014c4042">[email&#160;protected]</span></span>
                                </li>
                            </ul>
                        </a>
                        <div class="row justify-content-center ec-vendor-detail">
                            <div class="col-4">
                                <h6 class="text-uppercase">Items</h6>
                                <h5>425</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Sell</h6>
                                <h5>352</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Payout</h6>
                                <h5>$421</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-24px"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                    <div class="vendor-info card-body text-center p-4">
                        <a href="{{ route ('admin.detail.agent.commercial' , ['id_agent'=>1])}}" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3"><img src="{{ asset ('admin/img/vendor/u12.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                            <h5 class="card-title text-dark">Jullie Bronzna</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-1"><i class="mdi mdi-cellphone-basic mr-1"></i> <span>+91 325-852-6543</span></li>
                                <li class="d-flex"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="92f7eafff3e2fef7d2f7fff3fbfebcf1fdff">[email&#160;protected]</span></span>
                                </li>
                            </ul>
                        </a>
                        <div class="row justify-content-center ec-vendor-detail">
                            <div class="col-4">
                                <h6 class="text-uppercase">Items</h6>
                                <h5>254</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Sell</h6>
                                <h5>574</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="text-uppercase">Payout</h6>
                                <h5>$325</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-end border-bottom-0">
                    <button type="button" class="btn-edit-icon"><a href="{{ route ('admin.detail.agent.commercial' , ['id_agent'=>1])}}"><i class="mdi mdi-pencil"></i></a> </button>
                    <button type="button" class="btn-close-icon" data-bs-dismiss="modal" aria-label="Close"><i class="mdi mdi-close"></i></button>
                </div>
                <div class="modal-body pt-0">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="profile-content-left px-4">
                                <div class="text-center widget-profile px-0 border-0">
                                    <div class="card-img mx-auto rounded-circle"><img src="{{ asset ('admin/img/user/u1.jpg') }}" alt="user image"></div>
                                    <div class="card-body">
                                        <h4 class="py-2 text-dark">John Deo</h4>
                                        <p><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6e04010600400b160f031e020b2e09030f0702400d0103">[email&#160;protected]</a></p><a class="btn btn-primary btn-pill my-3"
                                            href="#">Follow</a></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="text-center pb-4">
                                        <h6 class="text-dark pb-2">1503</h6>
                                        <p>Items</p>
                                    </div>
                                    <div class="text-center pb-4">
                                        <h6 class="text-dark pb-2">2905</h6>
                                        <p>Sell</p>
                                    </div>
                                    <div class="text-center pb-4">
                                        <h6 class="text-dark pb-2">1200</h6>
                                        <p>Payout</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-info px-4">
                                <h4 class="text-dark mb-1">Contact Details</h4>
                                <p class="text-dark font-weight-medium pt-3 mb-2">Email address</p>
                                <p><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="deb4b1b6b0f0bba6bfb3aeb2bb9eb9b3bfb7b2f0bdb1b3">[email&#160;protected]</a></p>
                                <p class="text-dark font-weight-medium pt-3 mb-2">Phone Number</p>
                                <p>+00 1234 5678 91</p>
                                <p class="text-dark font-weight-medium pt-3 mb-2">Birthday</p>
                                <p>Dec 10, 1991</p>
                                <p class="text-dark font-weight-medium pt-3 mb-2">Event</p>
                                <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-add-member" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <form class="modal-header border-bottom-0"><input class="form-control" placeholder="Search..."></form>
                <div class="modal-body p-0" data-simplebar style="height:320px">
                    <ul class="list-unstyled border-top mb-0">
                        <li>
                            <div class="media media-message">
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/user/u1.jpg') }}" alt="Image"> <span class="status away"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Aaren</h4>
                                        <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>
                                    </div>
                                    <div class="control outlined control-checkbox checkbox-primary"><input type="checkbox" checked>
                                        <div class="control-indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media media-message">
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/user/u2.jpg') }}" alt="Image"> <span class="status active"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Leon Battista</h4>
                                        <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>
                                    </div>
                                    <div class="control outlined control-checkbox checkbox-primary"><input type="checkbox" checked>
                                        <div class="control-indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media media-message">
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/user/u3.jpg') }}" alt="Image"> <span class="status away"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Abriel</h4>
                                        <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>
                                    </div>
                                    <div class="control outlined control-checkbox checkbox-primary"><input type="checkbox">
                                        <div class="control-indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media media-message">
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/user/u4.jpg') }}" alt="Image"> <span class="status active"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Emma</h4>
                                        <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>
                                    </div>
                                    <div class="control outlined control-checkbox checkbox-primary"><input type="checkbox">
                                        <div class="control-indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media media-message">
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/user/u5.jpg') }}" alt="Image"> <span class="status away"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Emily</h4>
                                        <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>
                                    </div>
                                    <div class="control outlined control-checkbox checkbox-primary"><input type="checkbox">
                                        <div class="control-indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media media-message">
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/user/u6.jpg') }}" alt="Image"> <span class="status"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">William</h4>
                                        <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>
                                    </div>
                                    <div class="control outlined control-checkbox checkbox-primary"><input type="checkbox">
                                        <div class="control-indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media media-message">
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/user/u7.jpg') }}" alt="Image"> <span class="status away"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Sophia</h4>
                                        <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>
                                    </div>
                                    <div class="control outlined control-checkbox checkbox-primary"><input type="checkbox">
                                        <div class="control-indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media media-message">
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/user/u8.jpg') }}" alt="Image"> <span class="status"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Sophia</h4>
                                        <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>
                                    </div>
                                    <div class="control outlined control-checkbox checkbox-primary"><input type="checkbox">
                                        <div class="control-indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media media-message">
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/user/u1.jpg') }}" alt="Image"> <span class="status away"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Aaren</h4>
                                        <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>
                                    </div>
                                    <div class="control outlined control-checkbox checkbox-primary"><input type="checkbox">
                                        <div class="control-indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media media-message">
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/user/u2.jpg') }}" alt="Image"> <span class="status"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Abby</h4>
                                        <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>
                                    </div>
                                    <div class="control outlined control-checkbox checkbox-primary"><input type="checkbox">
                                        <div class="control-indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media media-message">
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/user/u3.jpg') }}" alt="Image"> <span class="status away"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Abriel</h4>
                                        <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>
                                    </div>
                                    <div class="control outlined control-checkbox checkbox-primary"><input type="checkbox">
                                        <div class="control-indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media media-message">
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/user/u4.jpg') }}" alt="Image"> <span class="status active"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Emma</h4>
                                        <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>
                                    </div>
                                    <div class="control outlined control-checkbox checkbox-primary"><input type="checkbox">
                                        <div class="control-indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media media-message">
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/user/u5.jpg') }}" alt="Image"> <span class="status"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Emily</h4>
                                        <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>
                                    </div>
                                    <div class="control outlined control-checkbox checkbox-primary"><input type="checkbox">
                                        <div class="control-indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media media-message">
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/user/u6.jpg') }}" alt="Image"> <span class="status away"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">William</h4>
                                        <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>
                                    </div>
                                    <div class="control outlined control-checkbox checkbox-primary"><input type="checkbox">
                                        <div class="control-indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media media-message">
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/user/u7.jpg') }}" alt="Image"> <span class="status"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Sophia</h4>
                                        <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>
                                    </div>
                                    <div class="control outlined control-checkbox checkbox-primary"><input type="checkbox">
                                        <div class="control-indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer px-4"><button type="button" class="btn btn-secondary btn-pill" data-bs-dismiss="modal">Cancel</button> <button type="button" class="btn btn-primary btn-pill">Add new member</button></div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-add-contact" id="addVendor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header px-4">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add New Vendor</h5>
                    </div>
                    <div class="modal-body px-4">
                        <div class="form-group row mb-6"><label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Vendor Image</label>
                            <div class="col-sm-8 col-lg-10">
                                <div class="custom-file mb-1"><input type="file" class="custom-file-input" id="coverImage" required><label class="custom-file-label" for="coverImage">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <div class="form-group"><label for="firstName">First name</label><input class="form-control" id="firstName" value="John"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><label for="lastName">Last name</label><input class="form-control" id="lastName" value="Deo"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4"><label for="userName">User name</label><input class="form-control" id="userName" value="johndoe"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4"><label for="email">Email</label><input type="email" class="form-control" id="email" value="johnexample@gmail.com"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4"><label for="Birthday">Birthday</label><input class="form-control" id="Birthday" value="10-12-1991"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4"><label for="event">Address</label><input class="form-control" id="event" value="Address here"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer px-4"><button type="button" class="btn btn-secondary btn-pill" data-bs-dismiss="modal">Cancel</button> <button type="button" class="btn btn-primary btn-pill">Save Contact</button></div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection