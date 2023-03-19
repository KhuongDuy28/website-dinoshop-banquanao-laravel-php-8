@extends('admin.main')



@section('content')
<table class="table">
    <thead>
        <tr>
            <!-- <th style="width: 100px; text-align: center;">ID</th> -->
            <th style="text-align: center; width: 20%;">Tên danh mục</th>
            <th style="text-align: center;">Trạng Thái</th>
            <!-- <th>Update</th> -->
            <th style="width:20%; text-align: center; ">Hành động</th>
        </tr>
    </thead>
    <tbody>
        {!! App\Helpers\Helper::menu($menus) !!}
    </tbody>
</table>
@endsection