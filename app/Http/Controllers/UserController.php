<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function create() {
        return view('users.create');
    }

    public function store(Request $request){
        // Kiểm tra xem dữ liệu từ client gửi lên bao gốm những gì
        // dd($request);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        // dd($data);
        // mã hóa password trước khi đẩy lên DB
        $data['password'] = Hash::make($request->password);

        // Tạo mới user với các dữ liệu tương ứng với dữ liệu được gán trong $data
        User::create($data);
        echo"success create user";
    }
    
    public function edit($id){
        // Tìm đến đối tượng muốn update
        $user = User::findOrFail($id);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id){
        // Tìm đến đối tượng muốn update
        $user = User::findOrFail($id);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        // dd($data);
        // mã hóa password trước khi đẩy lên DB
        $data['password'] = Hash::make($request->password);
        
        // Update user
        /* $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->save(); */
        $user->update($data);
        echo"success update user";
    }

    public function delete($id){
        // Tìm đến đối tượng muốn xóa
        $user = User::findOrFail($id);

        $user->delete();
        echo"Success delete user";
    }

    public function index(){
        // lấy ra toàn bộ user
        $users = User::all();
        //dd($users);

        // trả về view hiển thị danh sách user
        return view('users.view', compact('users'));
    }

}
