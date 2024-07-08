@extends('admin.layout.layout')


@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Categories</h4>

                            {{-- Displaying The Validation Errors: https://laravel.com/docs/9.x/validation#quick-displaying-the-validation-errors AND https://laravel.com/docs/9.x/blade#validation-errors --}}
                            {{-- Determining If An Item Exists In The Session (using has() method): https://laravel.com/docs/9.x/session#determining-if-an-item-exists-in-the-session --}}
                            {{-- Our Bootstrap success message in case of updating admin password is successful: --}}
                            @if (Session::has('success_message')) <!-- Check AdminController.php, updateAdminPassword() method -->
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success:</strong> {{ Session::get('success_message') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif


                            <div class="table-responsive pt-3">
                                {{-- DataTable --}}
                                <table id="categories" class="table table-bordered"> {{-- using the id here for the DataTable --}}
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Parent</th>
                                            <th>Section ID</th>
                                            <th>Category Name</th>
                                            <th>Category Image</th>
                                            <th>Category Discount</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $cat)
                                            <tr>
                                                <td>{{ $cat['id'] }}</td>
                                                <td>{{ (isset($cat['parent_category']['category_name']) ? $cat['parent_category']['category_name'] : null) }}</td>
                                                <td>{{ $cat['section']['name'] }}</td>
                                                <td>{{ $cat['category_name'] }}</td>
                                                <td>
                                                    @if (!empty($cat['category_image']))
                                                        <img style="width:120px; height:120px" src="{{ asset('front/images/category_images/small/' . $cat['category_image']) }}"> {{-- Show the 'small' image size from the 'small' folder --}}
                                                    @else
                                                        <img style="width:120px; height:120px" src="{{ asset('front/images/product_images/small/no-image.png') }}"> {{-- Show the 'no-image' Dummy Image: If you have for example a table with an 'images' column (that can exist or not exist), use a 'Dummy Image' in case there's no image. Example: https://dummyimage.com/  --}}
                                                    @endif
                                                </td>
                                                <td>{{ $cat['category_discount'] }}</td>
                                                <td>{{ $cat['description'] }}</td>
                                                <td>
                                                    <a title="Edit Product" href="{{ url('admin/products/category/' . $cat['id']) }}">
                                                        <i style="font-size: 25px" class="mdi mdi-format-list-bulleted"></i> {{-- Icons from Skydash Admin Panel Template --}}
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022. All rights reserved.</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection