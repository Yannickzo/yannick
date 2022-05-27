@extends('administration.layouts.app')

@section('admin_content')

<div class="content">
    <div class="breadcrumb-wrapper breadcrumb-contacts">
        <div>
            <h1>User Card</h1>
            <p class="breadcrumbs"><span><a href="{{ route ('super.admin')}}">Home</a></span> <span><i class="mdi mdi-chevron-right"></i></span>User</p>
        </div>
        <div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-contact">Nouvel utilisateur</button></div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-xl-4 mb-24px">
            <div class="ec-user-card card card-default p-4"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modalContact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                <a href="{{ route ('admin.detail.utilisateurs' , ['id_utilisateur'=>1])}}" class="media text-secondary"><img src="{{ asset ('admin/img/user/u-xl-1.jpg') }}" class="mr-3 img-fluid" alt="Avatar Image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 text-dark">Emma Smith</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-1"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="96f3eefbf7e6faf3d6f3fbf7fffab8f5f9fb">[email&#160;protected]</span></span>
                            </li>
                            <li class="d-flex mb-1"><i class="mdi mdi-phone mr-1"></i> <span>(123) 888 777 632</span></li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4 mb-24px">
            <div class="ec-user-card card card-default p-4"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modalContact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                <a href="{{ route ('admin.detail.utilisateurs' , ['id_utilisateur'=>1])}}" class="media text-secondary"><img src="{{ asset ('admin/img/user/u-xl-2.jpg') }}" class="mr-3 img-fluid" alt="Avatar Image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 text-dark">John Smith</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-1"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="b2d7cadfd3c2ded7f2d7dfd3dbde9cd1dddf">[email&#160;protected]</span></span>
                            </li>
                            <li class="d-flex mb-1"><i class="mdi mdi-phone mr-1"></i> <span>(123) 888 777 632</span></li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4 mb-24px">
            <div class="ec-user-card card card-default p-4"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modalContact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                <a href="{{ route ('admin.detail.utilisateurs' , ['id_utilisateur'=>1])}}" class="media text-secondary"><img src="{{ asset ('admin/img/user/u-xl-3.jpg') }}" class="mr-3 img-fluid" alt="Avatar Image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 text-dark">Mike Tison</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-1"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="a5c0ddc8c4d5c9c0e5c0c8c4ccc98bc6cac8">[email&#160;protected]</span></span>
                            </li>
                            <li class="d-flex mb-1"><i class="mdi mdi-phone mr-1"></i> <span>(123) 888 777 632</span></li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4 mb-24px">
            <div class="ec-user-card card card-default p-4"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modalContact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                <a href="{{ route ('admin.detail.utilisateurs' , ['id_utilisateur'=>1])}}" class="media text-secondary"><img src="{{ asset ('admin/img/user/u-xl-4.jpg') }}" class="mr-3 img-fluid" alt="Avatar Image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 text-dark">Jack Sparrow</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-1"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="76130e1b17061a1336131b171f1a5815191b">[email&#160;protected]</span></span>
                            </li>
                            <li class="d-flex mb-1"><i class="mdi mdi-phone mr-1"></i> <span>(123) 888 777 632</span></li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4 mb-24px">
            <div class="ec-user-card card card-default p-4"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modalContact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                <a href="{{ route ('admin.detail.utilisateurs' , ['id_utilisateur'=>1])}}" class="media text-secondary"><img src="{{ asset ('admin/img/user/u-xl-5.jpg') }}" class="mr-3 img-fluid" alt="Avatar Image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 text-dark">Mariya Martin</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-1"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="abced3c6cadbc7ceebcec6cac2c785c8c4c6">[email&#160;protected]</span></span>
                            </li>
                            <li class="d-flex mb-1"><i class="mdi mdi-phone mr-1"></i> <span>(123) 888 777 632</span></li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4 mb-24px">
            <div class="ec-user-card card card-default p-4"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modalContact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                <a href="{{ route ('admin.detail.utilisateurs' , ['id_utilisateur'=>1])}}" class="media text-secondary"><img src="{{ asset ('admin/img/user/u-xl-6.jpg') }}" class="mr-3 img-fluid" alt="Avatar Image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 text-dark">Volverin Wolker</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-1"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="d3b6abbeb2a3bfb693b6beb2babffdb0bcbe">[email&#160;protected]</span></span>
                            </li>
                            <li class="d-flex mb-1"><i class="mdi mdi-phone mr-1"></i> <span>(123) 888 777 632</span></li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4 mb-24px">
            <div class="ec-user-card card card-default p-4"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modalContact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                <a href="{{ route ('admin.detail.utilisateurs' , ['id_utilisateur'=>1])}}" class="media text-secondary"><img src="{{ asset ('admin/img/user/u-xl-7.jpg') }}" class="mr-3 img-fluid" alt="Avatar Image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 text-dark">Molla Hajim</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-1"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="67021f0a06170b0227020a060e0b4904080a">[email&#160;protected]</span></span>
                            </li>
                            <li class="d-flex mb-1"><i class="mdi mdi-phone mr-1"></i> <span>(123) 888 777 632</span></li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4 mb-24px">
            <div class="ec-user-card card card-default p-4"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modalContact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                <a href="{{ route ('admin.detail.utilisateurs' , ['id_utilisateur'=>1])}}" class="media text-secondary"><img src="{{ asset ('admin/img/user/u-xl-8.jpg') }}" class="mr-3 img-fluid" alt="Avatar Image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 text-dark">Jenny Smith</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-1"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="0e6b76636f7e626b4e6b636f6762206d6163">[email&#160;protected]</span></span>
                            </li>
                            <li class="d-flex mb-1"><i class="mdi mdi-phone mr-1"></i> <span>(123) 888 777 632</span></li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4 mb-24px">
            <div class="ec-user-card card card-default p-4"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modalContact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                <a href="{{ route ('admin.detail.utilisateurs' , ['id_utilisateur'=>1])}}" class="media text-secondary"><img src="{{ asset ('admin/img/user/u-xl-9.jpg') }}" class="mr-3 img-fluid" alt="Avatar Image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 text-dark">Moni Vakazu</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-1"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="15706d7874657970557078747c793b767a78">[email&#160;protected]</span></span>
                            </li>
                            <li class="d-flex mb-1"><i class="mdi mdi-phone mr-1"></i> <span>(123) 888 777 632</span></li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4 mb-24px">
            <div class="ec-user-card card card-default p-4"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modalContact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                <a href="{{ route ('admin.detail.utilisateurs' , ['id_utilisateur'=>1])}}" class="media text-secondary"><img src="{{ asset ('admin/img/user/u-xl-10.jpg') }}" class="mr-3 img-fluid" alt="Avatar Image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 text-dark">Martin Lynda</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-1"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="cbaeb3a6aabba7ae8baea6aaa2a7e5a8a4a6">[email&#160;protected]</span></span>
                            </li>
                            <li class="d-flex mb-1"><i class="mdi mdi-phone mr-1"></i> <span>(123) 888 777 632</span></li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4 mb-24px">
            <div class="ec-user-card card card-default p-4"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modalContact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                <a href="{{ route ('admin.detail.utilisateurs' , ['id_utilisateur'=>1])}}" class="media text-secondary"><img src="{{ asset ('admin/img/user/u-xl-11.jpg') }}" class="mr-3 img-fluid" alt="Avatar Image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 text-dark">Boron Noise</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-1"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="25405d4844554940654048444c490b464a48">[email&#160;protected]</span></span>
                            </li>
                            <li class="d-flex mb-1"><i class="mdi mdi-phone mr-1"></i> <span>(123) 888 777 632</span></li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4 mb-24px">
            <div class="ec-user-card card card-default p-4"><a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modalContact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i></a>
                <a href="{{ route ('admin.detail.utilisateurs' , ['id_utilisateur'=>1])}}" class="media text-secondary"><img src="{{ asset ('admin/img/user/u-xl-12.jpg') }}" class="mr-3 img-fluid" alt="Avatar Image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 text-dark">Walvi Nekki</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-1"><i class="mdi mdi-email mr-1"></i> <span><span class="__cf_email__" data-cfemail="a9ccd1c4c8d9c5cce9ccc4c8c0c587cac6c4">[email&#160;protected]</span></span>
                            </li>
                            <li class="d-flex"><i class="mdi mdi-phone mr-1"></i> <span>(123) 888 777 632</span></li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="modal fade modal-contact-detail" id="modalContact" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-end border-bottom-0">
                    <button type="button" class="btn-edit-icon"><a href="{{ route ('admin.detail.utilisateurs' , ['id_utilisateur'=>1])}}"><i class="mdi mdi-pencil"></i></a> </button>
                    <button type="button" class="btn-close-icon" data-bs-dismiss="modal" aria-label="Close"><i class="mdi mdi-close"></i></button>
                </div>
                <div class="modal-body pt-0">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="profile-content-left px-4">
                                <div class="text-center widget-profile px-0 border-0">
                                    <div class="card-img mx-auto rounded-circle"><img src="{{ asset ('admin/img/user/u6.jpg') }}" alt="user image"></div>
                                    <div class="card-body">
                                        <h4 class="py-2 text-dark">John Devilo</h4>
                                        <p><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f353037313a273e322f333a1f38323e3633713c3032">[email&#160;protected]</a></p><a class="btn btn-primary btn-pill my-4"
                                            href="#">Follow</a></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="text-center pb-4">
                                        <h6 class="text-dark pb-2">354</h6>
                                        <p>Bought</p>
                                    </div>
                                    <div class="text-center pb-4">
                                        <h6 class="text-dark pb-2">30</h6>
                                        <p>Wish List</p>
                                    </div>
                                    <div class="text-center pb-4">
                                        <h6 class="text-dark pb-2">1200</h6>
                                        <p>Following</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-info px-4">
                                <h4 class="text-dark mb-1">Contact Details</h4>
                                <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
                                <p><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9bf1f4f3f5fee3faf6ebf7fedbfcf6faf2f7b5f8f4f6">[email&#160;protected]</a></p>
                                <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                                <p>+00 9539 2641 31</p>
                                <p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
                                <p>Dec 10, 1991</p>
                                <p class="text-dark font-weight-medium pt-4 mb-2">Address</p>
                                <p>123/2, Kings fort street-2, Polo alto, US.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-add-contact" id="modal-add-contact" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header px-4">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add New User</h5>
                    </div>
                    <div class="modal-body px-4">
                        <div class="form-group row mb-6"><label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User Image</label>
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