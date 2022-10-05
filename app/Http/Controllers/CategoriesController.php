<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\Hash;

class CategoriesController extends Controller
{
    public function create() {
        return view('users.categories.create');
    }

    public function store(Request $request){
        // Kiểm tra xem dữ liệu từ client gửi lên bao gốm những gì
        // dd($request);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();

        // dd($data);

        /* $request->validate([
            'title' => 'required',
            'descriptrion' => 'required',
            'active' => 'required',
            'arrange' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);
        return $request->input(); */

        $validated = $request->validate([
            'title' => 'required|unique:categories|max:255',
            'active' => 'required',
            /* 'descriptrion' => 'required', */
            'arrange' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);

        
        // Tạo mới user với các dữ liệu tương ứng với dữ liệu được gán trong $data
        Categories::create($data);
        return redirect('/categories')->with('thongbao', 'Success create');
    }
    
    public function edit($id){
        // Tìm đến đối tượng muốn update
        $categories = Categories::findOrFail($id);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        $categories = Categories::all();
        return view('users.categories.edit', compact('categories'));
    }

    public function update(Request $request, $id){
        // Tìm đến đối tượng muốn update
        $categories = Categories::findOrFail($id);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        // dd($data);
        // mã hóa password trước khi đẩy lên DB
        /* $data['password'] = Hash::make($request->password); */
        
        // Update user
        /* $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->save(); */

        $validated = $request->validate([
            'title' => 'required|max:255',
            'active' => 'required',
            /* 'descriptrion' => 'required', */
            'arrange' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);


        $categories->update($data);
        return redirect('/categories')->with('thongbao', 'Success update');
        /* $category = Categories::all(); */
        /* return view('users.categories.update', compact('category')); */
    }

    public function delete($id){
        // Tìm đến đối tượng muốn xóa
        $categories = Categories::findOrFail($id);

        $categories->delete();
        return redirect('/categories')->with('thongbao', 'Success delete');
    }

    public function index(Request $request){
        // lấy ra toàn bộ user
        $categories = Categories::all();
        //dd($users);

        $search = $request['search'] ?? "";
        if($search != "") {
            $categories = Categories::where('title', 'LIKE', "%$search%")->orwhere('description', 'LIKE', "%$search%")->orwhere('active', '=', $search)->paginate(5);
        } else{
            $categories = Categories::paginate(5);
        }

        // trả về view hiển thị danh sách user
        return view('users.categories.view', compact('categories'));
    }   
}
