<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    //
    public function list_user(Request $request){
        $user = new User();
        $listUser = $user::all();
        if($request->post() && $request->searchUser){
            $listUser = $user::where('name', 'like','%'.$request->searchUser.'%')->get();
        }
        return view('user.list',compact('listUser'));
    }

    public function add(UserRequest $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $user = User::create($params);

            if($user->id){
                Session::flash('success', 'Thêm người dùng thành công');
            }
        }
        return view('user.add');
    }

    public function edit(UserRequest $request, $id){
        $user = DB::table('users')->where('id', $id)->first();
        if($request->isMethod('POST')) {
            $params = $request->except('_token');
            $result = User::where('id', $id)->update($params);

            if ($result) {
                Session::flash('success', 'Sửa thông tin người dùng thành công');
                return redirect()->route('edit_user', ['id' => $id]);
            }
        }
        return view('user.edit', compact('user'));
    }

    public function delete(Request $request, $id){
        $userDL = User::where('id', $id)->delete();
        if($userDL){
            Session::flash('success', 'Xóa thông tin người dùng thành công ');
            return redirect()->route('list_user');
        }
    }

}
