@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th style="text-align: center;">Tiêu đề</th>
                <th style="text-align: center;">Link</th>
                <th style="text-align: center;">Ảnh</th>
                <th style="text-align: center;">Trạng Thái</th>
                <th style="width:170px; text-align: center;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sliders as $key => $slider)
                <tr>
                    <td style="text-align: center;">{{ $slider->name }}</td>
                    <td style="text-align: center;">{{ $slider->url }}</td>
                    <td style="text-align: center;">
                        <a href="{{ $slider->thumb }}" target="_blank">
                            <img src="{{ $slider->thumb }}" width="auto" height="70px" alt="Image">
                        </a>          
                    </td>
                    <td style="text-align: center;">{!! \App\Helpers\Helper::active($slider->active) !!}</td>

                    <td style="text-align: center;">
                        <a class="btn btn-outline-primary btn-sm" href="/admin/sliders/edit/{{ $slider->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-outline-danger btn-sm"
                         onclick="removeRow( {{ $slider->id }} , '/admin/sliders/destroy')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $sliders->links() !!}
@endsection
