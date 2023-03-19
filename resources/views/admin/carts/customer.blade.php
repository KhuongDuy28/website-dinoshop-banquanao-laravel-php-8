@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th style="text-align: center;">ID</th>
                <th style="text-align: center;">Tên khách hàng</th>
                <th style="text-align: center;">Số điện thoại</th>
                <th style="text-align: center;">Địa chỉ</th>
                <th style="text-align: center;">Email</th>
                <th style="text-align: center;">Ngày đặt hàng</th>
                {{-- <th style="width:170px; text-align: center;">Hành động</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $key => $customer)
                <tr>
                    <td style="text-align: center;">{{ $customer->id }}</td>
                    <td style="text-align: center;">{{ $customer->name }}</td>
                    <td style="text-align: center;">{{ $customer->phone }}</td>
                    <td style="text-align: center;">{{ $customer->address }}</td>
                    <td style="text-align: center;">{{ $customer->email }}</td>
                    <td style="text-align: center;">{{ $customer->created_at }}</td>


                    <td style="text-align: center;">
                        <a class="btn btn-outline-primary btn-sm" href="/admin/customers/view/{{ $customer->id }}">
                            <i class="fas fa-eye"></i>
                        </a>
                        
                        <a class="btn btn-outline-danger btn-sm"
                         onclick="removeRow( {{ $customer->id }} , '/admin/customers/destroy')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $customers->links() !!}
@endsection
