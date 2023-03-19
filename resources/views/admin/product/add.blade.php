@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')

<form action="" method="POST" style="margin: 0px 28px 0px 28px;">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">THÊM SẢM PHẨM</h5>
            <div class="card-body">

                <!-- <div class="row"> -->
                <div style="width: 100%;">
                    <label for="exampleFormControlInput1" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ old('name') }}" placeholder="Nhập tên sản phẩm">
                </div>

                <div class="custom-select" style="width: 100%;">
                    <label class="lbl">Danh mục</label>
                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="menu_id">
                        <option selected=""></option>
                        @foreach ( $menus as $menu )
                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- </div> -->


                <div class="row">
                    <div style="width: 50%;">
                        <label for="exampleFormControlInput1" class="form-label">Giá gốc</label>
                        <input type="number" class="form-control" name="price" value="{{ old('price') }}">
                    </div>

                    <div style="width: 50%;">
                        <label for="exampleFormControlInput1" class="form-label">Giá giảm</label>
                        <input type="number" class="form-control" name="price_sale" value="{{ old('price_sale') }}">
                    </div>
                </div>

                <div class="text-product">
                    <label class="lbl">Mô tả</label>
                    <textarea class="form-control" id="description" rows="3" name="description" value="">{{ old('description') }}</textarea>
                </div>

                <div class="text-product">
                    <label class="lbl">Mô tả chi tiết</label>
                    <textarea class="form-control" id="content" name="content" rows="3" value="">{{ old('content') }}</textarea>
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



@section('footer')

<script>
    CKEDITOR.replace('content');
</script>

@endsection