@extends('master')
@section('content')
    <main class="page-content">
        <h1>Sửa bài viết</h1>
        <form action="{{ route('post.update', $posts->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label">Tiêu đề</label>
                <input type="text" id="fname" name="title" value='{{ $posts->title }}' class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Nội dung</label>
                <input type="text" id="fname" name="content" value='{{ $posts->content }}' class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Thể loại</label>
                <select name="category_id" id="" class="form-control">
                    <option value="">-Vui Lòng Chọn-</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Trạng thái</label>
                <select name="status" class="form-select" id="inputGroupSelect02">
                    @if ($posts->status == 0)
                        <option selected value="0">Chờ duyệt<table></table>
                        </option>
                        <option value="1">Đã duyệt</option>
                    @else
                        <option value="0">Chờ duyệt<table></table>
                        </option>
                        <option selected value="1">Đã duyệt</option>
                    @endif
                </select>
            </div>
            <input type="submit" value="lưu" class="btn btn-success">
            <a href="{{ route('post.index') }}" class="btn btn-danger">Huỷ</a>
        </form>
    </main>
@endsection
