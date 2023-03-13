@extends('master')
@section('content')
    <main class="page-content">

        <h1>Thêm bài viết</h1>
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label">Tiêu đề</label>
                <input type="text" id="fname" name="title" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Nội dung</label>
                <input type="text" id="fname" name="content" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Loại bài viết</label>
                <select name="category_id" id="" class="form-control">
                    <option value="">-Vui Lòng Chọn-</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            {{-- <div class="mb-3">
                <label class="form-label">Trạng thái</label>
                <select name="status" class="form-select">
                    <option value="0">Chờ duyệt</option>
                    <option value="1">Đã duyệt</option>
                </select>
            </div> --}}

            <input type="submit" value="Thêm" class="btn btn-success">
            <a href="{{ route('post.index') }}" class="btn btn-danger">Huỷ</a>

        </form>
    </main>
@endsection
