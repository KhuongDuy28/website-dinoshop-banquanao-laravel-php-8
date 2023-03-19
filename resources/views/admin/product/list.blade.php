@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th style="text-align: center;">Tên sản phẩm</th>
                <th style="text-align: center;">Danh mục</th>
                <th style="text-align: center;">Giá gốc</th>
                <th style="text-align: center;">Giá khuyến mãi</th>
                <th style="text-align: center;">Ảnh sản phẩm</th>
                <th style="text-align: center;">Trạng Thái</th>
                <th style="width:170px; text-align: center;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $product)
                <tr>
                    <td style="text-align: center;">{{ $product->name }}</td>
                    <td style="text-align: center;">{{ $product->menu->name }}</td>
                    <td style="text-align: center;">{{ $product->price }}</td>
                    <td style="text-align: center;">{{ $product->price_sale }}</td>
                    <td style="text-align: center;">
                        <a href="{{ $product->thumb }}" target="_blank">
                            <img src="{{ $product->thumb }}" width="auto" height="70px" alt="Image">
                        </a>
                    </td>
                    <td style="text-align: center;">{!! \App\Helpers\Helper::active($product->active) !!}</td>

                    <td style="text-align: center;">

                        <a class="btn btn-outline-primary btn-sm" href="/admin/products/edit/{{ $product->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        
                        <a class="btn btn-outline-danger btn-sm"
                         onclick="removeRow( {{ $product->id }} , '/admin/products/destroy')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $products->links() !!}
@endsection
