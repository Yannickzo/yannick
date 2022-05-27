@extends('administration.layouts.app') @section('admin_content')

<div class="content">
    <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
        <h1>Sub Category</h1>
        <p class="breadcrumbs"><span><a href="{{ route('super.admin') }}">Home</a></span> <span><i class="mdi mdi-chevron-right"></i></span>Sub Category</p>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-12">
            <div class="ec-cat-list card card-default mb-24px">
                <div class="card-body">
                    <div class="ec-cat-form">
                        <h4>Add Sub Category</h4>
                        <form>
                            <div class="form-group row"><label for="text" class="col-12 col-form-label">Name</label>
                                <div class="col-12"><input id="text" name="text" class="form-control here slug-title"></div>
                            </div>
                            <div class="form-group row"><label for="slug" class="col-12 col-form-label">Slug</label>
                                <div class="col-12"><input id="slug" name="slug" class="form-control here set-slug"> <small>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</small></div>
                            </div>
                            <div class="form-group row"><label class="col-12 col-form-label">Sort Description</label>
                                <div class="col-12"><textarea id="sortdescription" name="sortdescription" cols="40" rows="2" class="form-control"></textarea></div>
                            </div>
                            <div class="form-group row"><label for="parent-category" class="col-12 col-form-label">Parent Category</label>
                                <div class="col-12"><select id="parent-category" name="parent-category" class="custom-select"><option value="">Clothes</option><option value="uncategorized">Footwear</option><option value="new category">Jewellry</option><option value="new category">Perfume</option><option value="new category">Cosmatics</option><option value="new category">Glasses</option><option value="new category">Bags</option></select></div>
                            </div>
                            <div class="form-group row"><label class="col-12 col-form-label">Full Description</label>
                                <div class="col-12"><textarea id="fulldescription" name="fulldescription" cols="40" rows="4" class="form-control"></textarea></div>
                            </div>
                            <div class="form-group row"><label class="col-12 col-form-label">Product Tags <span>( Type and make comma to separate tags )</span></label>
                                <div class="col-12">
                                    <div class="bootstrap-tagsinput"><input type="text" placeholder=""></div><input class="form-control" id="group_tag" name="group_tag" placeholder="" data-role="tagsinput" style="display: none;"></div>
                            </div>
                            <div class="row">
                                <div class="col-12"><button name="submit" type="submit" class="btn btn-primary">Submit</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-12">
            <div class="ec-cat-list card card-default">
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="responsive-data-table_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row justify-content-between top-information">
                                <div class="dataTables_length" id="responsive-data-table_length"><label>Show <select name="responsive-data-table_length" aria-controls="responsive-data-table" class="form-select form-select-sm"><option value="20">20</option><option value="30">30</option><option value="50">50</option><option value="75">75</option><option value="-1">All</option></select> entries</label></div>
                                <div id="responsive-data-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="responsive-data-table"></label></div>
                            </div>
                            <table id="responsive-data-table" class="table dataTable no-footer" aria-describedby="responsive-data-table_info">
                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Thumb: activate to sort column descending" style="width: 43.5781px;">Thumb</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 50.3828px;">Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Main Categories: activate to sort column ascending" style="width: 67.7031px;">Main Categories</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Product: activate to sort column ascending" style="width: 48.25px;">Product</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Total Sell: activate to sort column ascending" style="width: 29.5781px;">Total Sell</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 39.6953px;">Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Trending: activate to sort column ascending" style="width: 54.7422px;">Trending</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 54.3516px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td class="sorting_1"><img class="cat-thumb" src="{{ asset ('admin/img/category/clothes.png') }}" alt="product image"></td>
                                        <td>Winter Wear</td>
                                        <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-tag">Clothes</span></span>
                                        </td>
                                        <td>28</td>
                                        <td>2161</td>
                                        <td>ACTIVE</td>
                                        <td><span class="badge badge-success">Top</span></td>
                                        <td>
                                            <div class="btn-group"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1"><img class="cat-thumb" src="{{ asset ('admin/img/category/footwear.png') }}" alt="product image"></td>
                                        <td>Sport Shoes</td>
                                        <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-tag">Footwear</span></span>
                                        </td>
                                        <td>68</td>
                                        <td>5161</td>
                                        <td>ACTIVE</td>
                                        <td><span class="badge bg-primary">Medium</span></td>
                                        <td>
                                            <div class="btn-group"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1"><img class="cat-thumb" src="{{ asset ('admin/img/category/footwear.png') }}" alt="product image"></td>
                                        <td>Casual Shoes</td>
                                        <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-tag">Footwear</span></span>
                                        </td>
                                        <td>68</td>
                                        <td>5161</td>
                                        <td><span class="inactive">Inactive</span></td>
                                        <td><span class="badge badge-success">Top</span></td>
                                        <td>
                                            <div class="btn-group"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1"><img class="cat-thumb" src="{{ asset ('admin/img/category/clothes.png') }}" alt="product image"></td>
                                        <td>Jeans</td>
                                        <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-tag">Clothes</span></span>
                                        </td>
                                        <td>38</td>
                                        <td>1561</td>
                                        <td>ACTIVE</td>
                                        <td><span class="badge bg-primary">Medium</span></td>
                                        <td>
                                            <div class="btn-group"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1"><img class="cat-thumb" src="{{ asset ('admin/img/category/cosmetics.png') }}" alt="product image"></td>
                                        <td>Makeup kit</td>
                                        <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-tag">Cosmatics</span></span>
                                        </td>
                                        <td>18</td>
                                        <td>1061</td>
                                        <td>ACTIVE</td>
                                        <td><span class="badge bg-danger">Low</span></td>
                                        <td>
                                            <div class="btn-group"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1"><img class="cat-thumb" src="{{ asset ('admin/img/category/glasses.png') }}" alt="product image"></td>
                                        <td>Lenses</td>
                                        <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-tag">Glasses</span></span>
                                        </td>
                                        <td>82</td>
                                        <td>10061</td>
                                        <td><span class="inactive">Inactive</span></td>
                                        <td><span class="badge bg-primary">Medium</span></td>
                                        <td>
                                            <div class="btn-group"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1"><img class="cat-thumb" src="{{ asset ('admin/img/category/bag.png') }}" alt="product image"></td>
                                        <td>Shopping Bag</td>
                                        <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-tag">Bags</span></span>
                                        </td>
                                        <td>18</td>
                                        <td>3061</td>
                                        <td>ACTIVE</td>
                                        <td><span class="badge badge-success">Top</span></td>
                                        <td>
                                            <div class="btn-group"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1"><img class="cat-thumb" src="{{ asset ('admin/img/category/bag.png') }}" alt="product image"></td>
                                        <td>Gym Backpack</td>
                                        <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-tag">Bags</span></span>
                                        </td>
                                        <td>68</td>
                                        <td>5161</td>
                                        <td>ACTIVE</td>
                                        <td><span class="badge bg-primary">Medium</span></td>
                                        <td>
                                            <div class="btn-group"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1"><img class="cat-thumb" src="{{ asset ('admin/img/category/glasses.png') }}" alt="product image"></td>
                                        <td>Sunglasses</td>
                                        <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-tag">Glasses</span></span>
                                        </td>
                                        <td>82</td>
                                        <td>10061</td>
                                        <td><span class="inactive">Inactive</span></td>
                                        <td><span class="badge bg-primary">Medium</span></td>
                                        <td>
                                            <div class="btn-group"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1"><img class="cat-thumb" src="{{ asset ('admin/img/category/jewelry.png') }}" alt="product image"></td>
                                        <td>Earing</td>
                                        <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-tag">Jewellry</span></span>
                                        </td>
                                        <td>68</td>
                                        <td>5161</td>
                                        <td><span class="inactive">Inactive</span></td>
                                        <td><span class="badge badge-success">Top</span></td>
                                        <td>
                                            <div class="btn-group"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1"><img class="cat-thumb" src="{{ asset ('admin/img/category/perfume.png') }}" alt="product image"></td>
                                        <td>Deodorant</td>
                                        <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-tag">Perfume</span></span>
                                        </td>
                                        <td>38</td>
                                        <td>1561</td>
                                        <td>ACTIVE</td>
                                        <td><span class="badge bg-primary">Medium</span></td>
                                        <td>
                                            <div class="btn-group"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1"><img class="cat-thumb" src="{{ asset ('admin/img/category/clothes.png') }}" alt="product image"></td>
                                        <td>Tops</td>
                                        <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-tag">Clothes</span></span>
                                        </td>
                                        <td>38</td>
                                        <td>1561</td>
                                        <td>ACTIVE</td>
                                        <td><span class="badge bg-primary">Medium</span></td>
                                        <td>
                                            <div class="btn-group"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1"><img class="cat-thumb" src="{{ asset ('admin/img/category/cosmetics.png') }}" alt="product image"></td>
                                        <td>Skin care kit</td>
                                        <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-tag">Cosmatics</span></span>
                                        </td>
                                        <td>18</td>
                                        <td>1061</td>
                                        <td>ACTIVE</td>
                                        <td><span class="badge bg-danger">Low</span></td>
                                        <td>
                                            <div class="btn-group"><button type="button" class="btn btn-outline-success">Info</button> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row justify-content-between bottom-information">
                                <div class="dataTables_info" id="responsive-data-table_info" role="status" aria-live="polite">Showing 1 to 13 of 13 entries</div>
                                <div class="dataTables_paginate paging_simple_numbers" id="responsive-data-table_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="responsive-data-table_previous"><a href="#" aria-controls="responsive-data-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#" aria-controls="responsive-data-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                        <li class="paginate_button page-item next disabled" id="responsive-data-table_next"><a href="#" aria-controls="responsive-data-table" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
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