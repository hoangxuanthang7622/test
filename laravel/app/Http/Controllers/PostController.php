<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts =Post::paginate(3);
        $categories = Category::all();
        $param = [
            'posts' => $posts,
            'categories' => $categories,
        ];
        return view('admin.posts.index' , $param);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        $param = [
            'categories' => $categories
        ];
        return view('admin.posts.create', $param);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $post = new Post();
            $post->title = $request->title;
            $post->content = $request->content;
            $post->category_id = $request->category_id;
            $post->status = 0;
            $post->save();
            alert()->success('Thêm bài viết' , 'Thành công');
            return redirect()->route('post.index');
        } catch (\Throwable $th) {
            alert()->error('Thêm bài viết','Thất bại');
            return redirect()->route('post.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $categories = Category::all();
        $posts = Post::find($id);
        $param = [
            'categories' => $categories,
            'posts' => $posts
        ];
        return view('admin.posts.edit', $param);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $post = Post::find($id);
            $post->title = $request->title;
            $post->category_id = $request->category_id;
            $post->content = $request->content;
            $post->status = $request->status;
                $post->save();
                alert()->success('Cập nhật','thành công');
                return redirect()->route('post.index');
            } catch (\Throwable $th) {
                alert()->error('Cập nhật','thất bại');
                return redirect()->route('post.index');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $post = Post::find($id);
        $post->delete();
        alert()->success('xoá danh mục','thành công');
        return redirect()->route('post.index');
        } catch (\Throwable $th) {
            alert()->error('xoá danh mục','không thành công');
            return redirect()->route('post.index');
        }
    }
}
