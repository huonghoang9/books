@extends('templates.layout')
@section('content')

    <form action="{{route('add_book')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Tên Sách</label>
            <input type="text" class="form-control" name="book_name">
        </div>

        <div class="mb-3">
            <label class="form-label">Giá</label>
            <input type="text" class="form-control" name="price">
        </div>

        <div class="mb-3">
            <label class="form-label">Giá Khuyến Mãi</label>
            <input type="text" class="form-control" name="promotion_price">
        </div>

        <div class="mb-3">
            <label class="form-label">Năm Xuất Bản</label>
            <input type="text" class="form-control" name="publishing_year">
        </div>

        <div class="mb-3">
            <label class="form-label">Số Lượng</label>
            <input type="text" class="form-control" name="quantity">
        </div>

        <div class="mb-3">
            <label class="form-label">Loại Sách</label>
            <input type="text" class="form-control" name="cate_id">
        </div>

        <div class="form-floating">
            <label for="floatingTextarea2">Mô Tả</label>
            <textarea class="form-control"  id="floatingTextarea2" style="height: 100px" name="describe"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Nhà Xuất Bản</label>
            <input type="text" class="form-control" name="producer_name">
        </div>

        <div class="mb-3">
            <label class="form-label">Tác Giả</label>
            <input type="text" class="form-control" name="author_name">
        </div>

        <div class="form-group">
            <label class="col-md-3 col-sm-4 control-label">Ảnh</label>
            <div class="col-md-9 col-sm-8">
                <div class="row">
                    <div class="col-xs-6">
                        <img id="anh_san_pham" src="https://png.pngtree.com/png-clipart/20190618/original/pngtree-cartoon-clothing-clothes-apparel-png-image_3927384.jpg" alt="your image"
                             style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid"/>
                        <input type="file" name="image" accept="image/*"
                               class="form-control-file @error('image') is-invalid @enderror" id="cmt_anh">
                        <label for="cmt_truoc">Ảnh </label><br/>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Thêm</button>
        <a class="btn btn-primary" role="button" href="{{route('list_book')}}">Danh sách</a>
    </form>
@endsection
