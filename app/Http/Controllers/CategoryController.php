<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function list_category(Request $request){

        // truy vấn bằng model
        $category = new Category();
        $listCategory = $category::all();
        if($request->post() && $request->searchCategory){
            $listCategory = $category::where('category_name', 'like','%'.$request->searchCategory.'%')->get();
        }
        return view('categories.list',compact('listCategory'));
    }

    public function add(CategoryRequest $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $category = Category::create($params);
            if($category->id){
                Session::flash('success','Thêm danh mục thành công');
            }
        }
        return view('categories.add');
    }

    public function edit(CategoryRequest $request, $id){
        $category = DB::table('categories')->where('id',$id)->first();
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $result =Category::where('id', $id)->update($params);
            if($result){
                Session::flash('success','Sửa danh mục thành công');
                return redirect()->route('edit_category',['id'=>$id]);
            }
        }
        return view('categories.edit', compact('category'));
    }
    public function delete(Request $request, $id){

        $categoryDL = Category::where('id', $id)->delete();
        if($categoryDL){
            Session::flash('success', 'Xóa loại sách thành công');
            return redirect()->route('list_category');
        }
    }
}

