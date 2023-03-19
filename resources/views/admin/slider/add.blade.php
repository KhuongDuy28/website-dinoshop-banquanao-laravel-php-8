@extends('admin.main')

@section('content')

<form action="" method="POST" style="margin: 0px 28px 0px 28px;">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">THÊM SLIDER</h5>
            <div class="card-body">


                <div style="width: 100%;">
                    <label for="exampleFormControlInput1" class="form-label">Tiêu đề</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ old('name') }}" placeholder="Nhập tiêu đề">
                </div>

                <div class="text-silder" style="width: 100%;">
                    <label for="exampleFormControlInput1" class="form-label">Đường dẫn</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="url" value="{{ old('url') }}">
                </div>

                <div class="text-silder" style="width: 100%;">
                    <label for="exampleFormControlInput1" class="form-label">Sắp xếp</label>
                    <input type="number" class="form-control" name="sort_by" value="1">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Ảnh sản phẩm</label>
                    <input class="form-control" type="file" id="upload">
                    <div id="image_show">

                    </div>
                    <input type="hidden" name="thumb" id="thumb">
                </div>

                <div class="col-md">
                    <small class="text-light fw-semibold">Kích hoạt</small>
                    <div class="form-check mt-3">
                        <input name="active" class="form-check-input" type="radio" value="1" id="active" checked="">
                        <label class="form-check-label" for="active"> Có </label>
                    </div>
                    <div class="form-check">
                        <input name="active" class="form-check-input" type="radio" value="0" id="no_active">
                        <label class="form-check-label" for="no_active"> Không </label>
                    </div>
                </div>

                <div class="card-footer" style="padding: 30px 0;">
                    <button type="submit" class="btn btn-primary">THÊM</button>
                </div>

            </div>
        </div>
    </div>
    @csrf
</form>

@endsection
