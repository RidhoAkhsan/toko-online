@extends('layouts.parent')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Show My Transaction</h5>

            <table class="table table-striped table-bordered">
                <tr>
                    <th>Name</th>
                    <td>{{ $myTransaction->user->name }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $myTransaction->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $myTransaction->email }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $myTransaction->phone }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $myTransaction->address }}</td>
                </tr>
                <tr>
                    <th>Courier</th>
                    <td>{{ $myTransaction->courier }}</td>
                </tr>
                <tr>
                    <th>Total Price</th>
                    <td>Rp. {{ number_format($myTransaction->total_price) }}</td>
                </tr>
                <tr>
                    <th>Payment</th>
                    <td>{{ $myTransaction->payment }}</td>
                </tr>
                <tr>
                    <th>Payment URL</th>
                    <td>
                        <a href="{{ $myTransaction->payment_url }}" target="_blank">
                            {{ $myTransaction->payment_url }}
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        @if ($myTransaction->status == 'PENDING')
                        <span class="badge bg-warning">PENDING</span>
                        @elseif ($myTransaction->status == 'SUCCESS')
                        <span class="badge bg-success">SUCCESS</span>
                        @elseif ($myTransaction->status == 'FAILED')
                        <span class="badge bg-danger">FAILED</span>
                        @elseif ($myTransaction->status == 'SHIPPING')
                        <span class="badge bg-info">SHIPPING</span>
                        @elseif ($myTransaction->status == 'SHIPPED')
                        <span class="badge bg-primary">SHIPPED</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Created_At</th>
                    <td>{{ $myTransaction->created_at }}</td>
                </tr>
                <tr>
                    <th>Updated_At</th>
                    <td>{{ $myTransaction->updated_at }}</td>
                </tr>
            </table>

            <div class="text-end mt-2">
                <a href="{{ route('dashboard.my-transaction.index') }}" class="btn btn-primary mt-2">
                    <i class="bi bi-arrow-left"></i>
                    Back
                </a>
            </div>

        </div>
    </div>
</div>

@endsection