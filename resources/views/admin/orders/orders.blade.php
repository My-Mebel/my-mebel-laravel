{{-- This page is rendered by orders() method inside Admin/OrderController.php --}}
@extends('admin.layout.layout')


@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Orders</h4>

                            <ul class="nav nav-pills border-bottom-0">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#pending">Pending</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#in-progress">In Progress</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#shipped">Shipped</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#delivered">Delivered</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#returned">Returned</a>
                                </li>
                            </ul>

                            <div class="tab-content border-0">
                                @foreach (['Pending', 'In Progress', 'Shipped', 'Delivered', 'Returned'] as $status)
                                    <div class="table-responsive pt-3 tab-pane {{ $loop->first ? 'active' : '' }}"
                                        id="{{ strtolower(str_replace(' ', '-', $status)) }}">
                                        {{-- DataTable --}}
                                        <table id="table-{{ strtolower(str_replace(' ', '-', $status)) }}"
                                            class="table table-bordered"> {{-- using the id here for the DataTable --}}
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Order Date</th>
                                                    <th>Customer Name</th>
                                                    <th>Customer Email</th>
                                                    <th>Ordered Products</th>
                                                    <th>Order Amount</th>
                                                    <th>Order Status</th>
                                                    <th>Payment Method</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    // dd($orders); // check if the authenticated/logged-in user is 'vendor' (show ONLY orders of products belonging to them), or 'admin' (show ALL orders)
                                                @endphp
                                                @foreach ($orders[$status] as $order)
                                                    @if ($order['orders_products'])
                                                        {{-- If the 'vendor' has ordered products (if a 'vendor' product has been ordered), show them. Check how we constrained the eager loads using a subquery in orders() method in Admin/OrderController.php inside the if condition --}}
                                                        <tr>
                                                            <td>{{ $order['id'] }}</td>
                                                            <td>{{ date('Y-m-d h:i:s', strtotime($order['created_at'])) }}
                                                            </td>
                                                            <td>{{ $order['name'] }}</td>
                                                            <td>{{ $order['email'] }}</td>
                                                            <td>
                                                                @foreach ($order['orders_products'] as $product)
                                                                    {{ $product['product_code'] }}
                                                                    ({{ $product['product_qty'] }})
                                                                    <br>
                                                                @endforeach
                                                            </td>
                                                            <td>{{ $order['grand_total'] }}</td>
                                                            <td>{{ $order['order_status'] }}</td>
                                                            <td>{{ $order['payment_method'] }}</td>
                                                            <td>
                                                                <a title="View Order Details"
                                                                    href="{{ url('admin/orders/' . $order['id']) }}">
                                                                    <i style="font-size: 25px"
                                                                        class="mdi mdi-file-document"></i>
                                                                    {{-- Icons from Skydash Admin Panel Template --}}
                                                                </a>
                                                                &nbsp;&nbsp;

                                                                {{-- View HTML invoice --}}
                                                                <a title="View Order Invoice"
                                                                    href="{{ url('admin/orders/invoice/' . $order['id']) }}"
                                                                    target="_blank">
                                                                    <i style="font-size: 25px" class="mdi mdi-printer"></i>
                                                                    {{-- Icons from Skydash Admin Panel Template --}}
                                                                </a>
                                                                &nbsp;&nbsp;

                                                                {{-- View PDF invoice --}}
                                                                <a title="Print PDF Invoice"
                                                                    href="{{ url('admin/orders/invoice/pdf/' . $order['id']) }}"
                                                                    target="_blank">
                                                                    <i style="font-size: 25px" class="mdi mdi-file-pdf"></i>
                                                                    {{-- Icons from Skydash Admin Panel Template --}}
                                                                </a>

                                                                &nbsp;&nbsp;
                                                                @if (Auth::guard('admin')->user()->type == 'superadmin')
                                                                    {{-- if the authenticated/logged-in user is 'admin' --}}
                                                                    <a href="JavaScript:void(0)" class="confirmDelete"
                                                                        module="order" moduleid="{{ $order['id'] }}">
                                                                        {{-- Check admin/js/custom.js and web.php (routes) --}}
                                                                        <i style="font-size: 25px; color: red;"
                                                                            class="mdi mdi-trash-can"></i>
                                                                        {{-- Icons from Skydash Admin Panel Template --}}
                                                                    </a>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endforeach
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
