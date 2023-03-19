@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')

<form action="" method="POST" style="margin: 0px 28px 0px 28px;">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">CẬP NHẬT DANH MỤC</h5>
            <div class="card-body">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tên danh mục</label>
                    <input type="text" class="form-control" value="{{ $menu->name }}" name="name" placeholder="Nhập tên danh mục">
                </div>

                <div class="custom-select ">
                    <label>Danh mục</label>
                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="parent_id">
                        <option selected=""></option>
                        <option value="0" {{ $menu->parent_id == 0 ? 'selected' : ''}}>Danh mục gốc</option>
                        @foreach ( $menus as $menuParent )
                        <option value="{{ $menuParent->id }}" {{ $menu->parent_id == $menuParent->id ? 'selected' : ''}}>
                            {{ $menuParent->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label>Mô tả</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $menu->description }}</textarea>
                </div>

                <div>
                    <label>Mô tả chi tiết</label>
                    <textarea class="form-control" id="content" name="content" rows="3">{{ $menu->content }}</textarea>
                </div>

                <div class="col-md">
                    <small class="text-light fw-semibold">Kích hoạt</small>
                    <div class="form-check mt-3">
                        <input name="active" class="form-check-input" type="radio" value="1" id="active" {{ $menu->active == 1 ? 'checked=""' : '' }}>
                        <label class="form-check-label" for="active"> Có </label>
                    </div>
                    <div class="form-check">
                        <input name="active" class="form-check-input" type="radio" value="0" id="no_active" {{ $menu->active == 0 ? 'checked=""' : '' }}>
                        <label class="form-check-label" for="no_active"> Không </label>
                    </div>
                </div>

                <div class="card-footer" style="padding: 30px 0;">
                    <button type="submit" class="btn btn-primary">CẬP NHẬT</button>
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