@extends('administration.layouts.app') 
@section('admin_content')


<div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Brand</h1>
            <p class="breadcrumbs"><span><a href="{{ route('super.admin') }}">Home</a></span> <span><i class="mdi mdi-chevron-right"></i></span> Brand</p>
        </div>
        <div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-member">Add Brand</button></div>
    </div>

    <div class="product-brand card card-default p-24px">
        <div class="row mb-m-24px">
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                <div class="card card-default">
                    <div class="card-body text-center p-24px">
                        <div class="image mb-3"><img src="{{ asset ('admin/img/brand/1.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                        <h5 class="card-title text-dark">Brand A</h5>
                        <p class="item-count">2535<span>items</span></p><span class="brand-delete mdi mdi-delete-outline"></span></div>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                <div class="card card-default">
                    <div class="card-body text-center p-24px">
                        <div class="image mb-3"><img src="{{ asset ('admin/img/brand/2.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                        <h5 class="card-title text-dark">Brand B</h5>
                        <p class="item-count">535<span>items</span></p><span class="brand-delete mdi mdi-delete-outline"></span></div>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                <div class="card card-default">
                    <div class="card-body text-center p-24px">
                        <div class="image mb-3"><img src="{{ asset ('admin/img/brand/3.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                        <h5 class="card-title text-dark">Brand C</h5>
                        <p class="item-count">3535<span>items</span></p><span class="brand-delete mdi mdi-delete-outline"></span></div>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                <div class="card card-default">
                    <div class="card-body text-center p-24px">
                        <div class="image mb-3"><img src="{{ asset ('admin/img/brand/4.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                        <h5 class="card-title text-dark">Brand D</h5>
                        <p class="item-count">1535<span>items</span></p><span class="brand-delete mdi mdi-delete-outline"></span></div>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                <div class="card card-default">
                    <div class="card-body text-center p-24px">
                        <div class="image mb-3"><img src="{{ asset ('admin/img/brand/5.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                        <h5 class="card-title text-dark">Brand E</h5>
                        <p class="item-count">435<span>items</span></p><span class="brand-delete mdi mdi-delete-outline"></span></div>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                <div class="card card-default">
                    <div class="card-body text-center p-24px">
                        <div class="image mb-3"><img src="{{ asset ('admin/img/brand/1.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                        <h5 class="card-title text-dark">Brand F</h5>
                        <p class="item-count">4135<span>items</span></p><span class="brand-delete mdi mdi-delete-outline"></span></div>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                <div class="card card-default">
                    <div class="card-body text-center p-24px">
                        <div class="image mb-3"><img src="{{ asset ('admin/img/brand/2.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                        <h5 class="card-title text-dark">Brand G</h5>
                        <p class="item-count">2435<span>items</span></p><span class="brand-delete mdi mdi-delete-outline"></span></div>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                <div class="card card-default">
                    <div class="card-body text-center p-24px">
                        <div class="image mb-3"><img src="{{ asset ('admin/img/brand/3.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                        <h5 class="card-title text-dark">Brand H</h5>
                        <p class="item-count">1435<span>items</span></p><span class="brand-delete mdi mdi-delete-outline"></span></div>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                <div class="card card-default">
                    <div class="card-body text-center p-24px">
                        <div class="image mb-3"><img src="{{ asset ('admin/img/brand/4.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                        <h5 class="card-title text-dark">Brand I</h5>
                        <p class="item-count">2335<span>items</span></p><span class="brand-delete mdi mdi-delete-outline"></span></div>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                <div class="card card-default">
                    <div class="card-body text-center p-24px">
                        <div class="image mb-3"><img src="{{ asset ('admin/img/brand/5.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                        <h5 class="card-title text-dark">Brand j</h5>
                        <p class="item-count">3335<span>items</span></p><span class="brand-delete mdi mdi-delete-outline"></span></div>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                <div class="card card-default">
                    <div class="card-body text-center p-24px">
                        <div class="image mb-3"><img src="{{ asset ('admin/img/brand/1.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                        <h5 class="card-title text-dark">Brand K</h5>
                        <p class="item-count">1135<span>items</span></p><span class="brand-delete mdi mdi-delete-outline"></span></div>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                <div class="card card-default">
                    <div class="card-body text-center p-24px">
                        <div class="image mb-3"><img src="{{ asset ('admin/img/brand/2.jpg') }}" class="img-fluid rounded-circle" alt="Avatar Image"></div>
                        <h5 class="card-title text-dark">Brand L</h5>
                        <p class="item-count">1935<span>items</span></p><span class="brand-delete mdi mdi-delete-outline"></span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-end border-bottom-0"><button type="button" class="btn-edit-icon" data-bs-dismiss="modal" aria-label="Close"><i class="mdi mdi-pencil"></i></button>
                    <div class="dropdown"><button class="btn-dots-icon" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a></div>
                    </div><button type="button" class="btn-close-icon" data-bs-dismiss="modal" aria-label="Close"><i class="mdi mdi-close"></i></button></div>
                <div class="modal-body pt-0">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="profile-content-left px-4">
                                <div class="card text-center widget-profile px-0 border-0">
                                    <div class="card-img mx-auto rounded-circle"><img src="{{ asset ('admin/img/user/u6.jpg') }}" alt="user image"></div>
                                    <div class="card-body">
                                        <h4 class="py-2 text-dark">Albrecht Straub</h4>
                                        <p><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e2a38e809087818a96cc919690839780a2858f838b8ecc818d8f">[email&#160;protected]</a></p><a class="btn btn-primary btn-pill btn-lg my-4"
                                            href="#">Follow</a></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="text-center pb-4">
                                        <h6 class="text-dark pb-2">1503</h6>
                                        <p>Friends</p>
                                    </div>
                                    <div class="text-center pb-4">
                                        <h6 class="text-dark pb-2">2905</h6>
                                        <p>Followers</p>
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
                                <p><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c485a8a6b6a1a7acb0eab7b0b6a5b1a684a3a9a5ada8eaa7aba9">[email&#160;protected]</a></p>
                                <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                                <p>+99 9539 2641 31</p>
                                <p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
                                <p>Nov 15, 1990</p>
                                <p class="text-dark font-weight-medium pt-4 mb-2">Event</p>
                                <p>Lorem, ipsum dolor</p>
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
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/brand/1.jpg') }}" alt="Image"> <span class="status away"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Earth Fashion</h4>
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
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/brand/2.jpg') }}" alt="Image"> <span class="status active"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Leon Art</h4>
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
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/brand/3.jpg') }}" alt="Image"> <span class="status away"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Amazonee</h4>
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
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/brand/4.jpg') }}" alt="Image"> <span class="status active"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Wolmark</h4>
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
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/brand/5.jpg') }}" alt="Image"> <span class="status away"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Nikey</h4>
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
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/brand/1.jpg') }}" alt="Image"> <span class="status"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">William Fabric</h4>
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
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/brand/2.jpg') }}" alt="Image"> <span class="status away"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Sophia Shop</h4>
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
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/brand/3.jpg') }}" alt="Image"> <span class="status"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Etc Fashion</h4>
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
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/brand/4.jpg') }}" alt="Image"> <span class="status away"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Aaren Mart</h4>
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
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/brand/5.jpg') }}" alt="Image"> <span class="status"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Abby Cart</h4>
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
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/brand/1.jpg') }}" alt="Image"> <span class="status away"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Abriel Creation</h4>
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
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/brand/2.jpg') }}" alt="Image"> <span class="status active"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Emma Fashion</h4>
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
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/brand/3.jpg') }}" alt="Image"> <span class="status"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Kings Fashion</h4>
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
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/brand/4.jpg') }}" alt="Image"> <span class="status away"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Willyart</h4>
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
                                <div class="position-relative mr-3"><img class="rounded-circle" src="{{ asset ('admin/img/brand/5.jpg') }}" alt="Image"> <span class="status"></span></div>
                                <div class="media-body d-flex justify-content-between align-items-center">
                                    <div class="message-contents">
                                        <h4 class="title">Sophers</h4>
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
</div>

@endsection