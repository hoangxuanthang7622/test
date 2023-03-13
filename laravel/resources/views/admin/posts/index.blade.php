@extends('master')
@section('content')
@include('sweetalert::alert')
    <main class="page-content">
        <h2>Bài viết</h2>
        <hr>
        <a href="{{ route('post.create') }}" class="btn btn-success">Thêm bài viết</a>
        <table class="table">

        <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Thể Loại</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Tuỳ chỉnh</th>
                </tr>
        </thead>
        <tbody>
                @foreach ($posts as $key => $post)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>{{ $post->status == 0 ? ' Chờ duyệt' : 'Đã duyệt' }}</td>
                    <td>
                        <a href="{{ route('post.edit', $post->id) }}"class="btn btn-sm btn-icon btn btn-outline-warning "><i
                                    class="bi bi-pencil"></i>
                        </a>
                        <a href="{{ route('post.show', $post->id) }}"
                            class="btn btn-sm btn-icon btn btn-outline-info"><i class="bi bi-eye-fill"></i></a>
                        <form
                        onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"
                        action="{{ route('post.destroy', $post->id) }}" style="display:inline"
                        method="post">
                        <button type="submit" class="btn btn-sm btn-icon btn btn-outline-danger "><i class="bi bi-trash"></i>
                        </button>
                        @csrf
                        @method('DELETE')

                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="col-6">
            <div class="pagination float-right">
                {{ $posts->appends(request()->query()) }}
            </div>
        </div>
    </main>
@endsection
