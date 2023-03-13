<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $param = [
            'categories' => $categories
        ];
        return view ('admin.categories.index', $param);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $category = new Category();
            $category->name = $request->name;
            $category->save();
            alert()->success('Thêm danh mục' , 'Thành công');
            return redirect()->route('category.index');
        } catch (\Throwable $th) {
            alert()->error('Thêm danh mục','Thất bại');
            return redirect()->route('category.index');
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
        $categories = Category::find($id);
        $param = [
            'categories' => $categories
        ];
        return view('admin.categories.edit', $param);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $category = new Category();
            $category = Category::find($id);
            $category->name = $request->name;
            $category->save();
            alert()->success('Cập nhật danh mục' , 'Thành công');
            return redirect()->route('category.index');
        } catch (\Throwable $th) {
            alert()->error('Thêm danh mục','Thất bại');
            return redirect()->route('category.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $category = Category::find($id);
        $category->delete();
        alert()->success('xoá danh mục','thành công');
        return redirect()->route('category.index');
        } catch (\Throwable $th) {
            alert()->error('xoá danh mục','không thành công');
            return redirect()->route('category.index');
        }


    }
}
