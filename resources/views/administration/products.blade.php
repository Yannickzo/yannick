@extends('administration.layouts.app') @section('admin_content')

<div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Product</h1>
            <p class="breadcrumbs">
                <span><a href="{{ route('super.admin') }}">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Product
            </p>
        </div>
        <div>
            <a href="{{ route ('admin.ajouter.produit')}}" class="btn btn-primary">Add Porduct</a
                >
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card card-default">
                  <div
                    class="card-header card-header-border-bottom d-flex justify-content-between"
                  >
                    <div class="card-bar">
                      <div class="col-lg-6 col-md-12">
                        <input
                          class="form-control"
                          id="searchProduct"
                          placeholder="search with product name.."
                        />
                      </div>
                      <div class="col-lg-6 col-md-12 sort">
                        <div class="col-lg-4 col-md-6 p-space">
                          <select class="form-control" id="dropdownCategory">
                            <option value="ALL">ALL Category</option>
                            <option value="MEN">Men's</option>
                            <option value="WOMAN">Woman's</option>
                            <option value="KID">Kids</option>
                            <option value="OTHER">OTHER</option>
                          </select>
                        </div>
                        <div class="col-lg-4 col-md-6 p-space">
                          <select class="form-control" id="dropdownOrderBy">
                            <option value="ALL">ORDER BY</option>
                            <option value="MEN">Letest</option>
                            <option value="WOMAN">Price Low - High</option>
                            <option value="KID">Price High - Low</option>
                            <option value="OTHER">OTHER</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p1.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>Glomy shoes</h3>
                              <p>$50</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p2.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>Full Cap t-Shirt</h3>
                              <p>$120</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p3.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>Full Sleeve t-Shirt</h3>
                              <p>$120</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p4.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>Round Cap with Black Frame</h3>
                              <p>$120</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p5.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>Mini Blue Bag</h3>
                              <p>$120</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p6.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>Doctor's kit for baby</h3>
                              <p>$120</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p1.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>Baby Smart shoes</h3>
                              <p>$120</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p2.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>Full Sleeve T-Shirt</h3>
                              <p>$120</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p9.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>Full Sleeve For Men's</h3>
                              <p>$120</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p10.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>shoes for Men</h3>
                              <p>$120</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p11.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>Classic Purse for Woman</h3>
                              <p>$120</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p12.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>High Heal Scandle for Woman</h3>
                              <p>$120</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p13.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>Big basket Lather Bag</h3>
                              <p>$120</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p14.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>Lather shoes for Kids</h3>
                              <p>$120</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p15.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>Baby Pink shoes</h3>
                              <p>$120</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p16.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>Big Basket For Grossary</h3>
                              <p>$120</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p17.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>Boat Ear buds</h3>
                              <p>$120</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p7.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>Smart Shirt For Men</h3>
                              <p>$120</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p8.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>Smart Digital Watches</h3>
                              <p>$120</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-wrapper">
                          <div class="card-container">
                            <div class="card-top">
                              <img
                                class="card-image"
                                src="{{ asset ('admin/img/products/p10.jpg') }}"
                                alt=""
                              />
                            </div>
                            <div class="card-bottom">
                              <h3>shoes for Men</h3>
                              <p>$120</p>
                            </div>
                            <div class="card-action">
                              <div class="card-edit">
                                <i class="mdi mdi-circle-edit-outline"></i>
                              </div>
                              <div class="card-preview">
                                <i class="mdi mdi-eye-outline"></i>
                              </div>
                              <div class="card-remove">
                                <i class="mdi mdi mdi-delete-outline"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <nav aria-label="Page navigation example p-0">
                        <ul
                          class="pagination pagination-seperated pagination-seperated-rounded"
                        >
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous"
                              ><span
                                aria-hidden="true"
                                class="mdi mdi-chevron-left mr-1"
                              ></span>
                              Prev <span class="sr-only">Previous</span></a
                            >
                          </li>
                          <li class="page-item active">
                            <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">Next
                              <span
                                aria-hidden="true"
                                class="mdi mdi-chevron-right ml-1"
                              ></span>
                              <span class="sr-only">Next</span></a
                            >
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection