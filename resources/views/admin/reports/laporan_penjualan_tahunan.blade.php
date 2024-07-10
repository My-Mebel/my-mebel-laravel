{{-- This page is rendered by orders() method inside Admin/OrderController.php --}}
@extends('admin.layout.layout')


@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div style="display: flex; justify-content: space-between;">
                                <h4 class="card-title">Orders</h4>
                                <div style="display: flex; align-items: center; gap: 30px;">
                                    <h4 style="font-size: 16px; font-weight: 400; margin: 0;">Tahun: {{ $currentDate }}
                                    </h4>
                                    <button
                                        style="background: transparent; border: 1px solid #375957; border-radius: 8px; padding: 6px 10px;">
                                        <div style="display: flex; align-items: center; gap: 8px;">
                                            <img src="{{ asset('images/export.png') }}" alt="export"
                                                class="object-contain">
                                            <span>Export</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div class="table-responsive pt-3">
                                {{-- DataTable --}}
                                <table id="orders" class="table table-bordered"> {{-- using the id here for the DataTable --}}
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Order ID</th>
                                            <th>Product Code</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Qty.</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            // dd($orders); // check if the authenticated/logged-in user is 'vendor' (show ONLY orders of products belonging to them), or 'admin' (show ALL orders)
                                        @endphp
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $order['id'] }}</td>
                                                <td>{{ $order['order_id'] }}</td>
                                                <td>{{ $order['product_code'] }}</td>
                                                <td>{{ $order['product_name'] }}</td>
                                                <td>Rp. {{ $order['product_price'] }}</td>
                                                <td>{{ $order['product_qty'] }}</td>
                                                <td>Rp. {{ $order['product_price'] * $order['product_qty'] }}</td>
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
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022. All rights
                    reserved.</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
