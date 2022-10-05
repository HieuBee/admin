<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Categories;
use App\Models\Postimage;

class newsController extends Controller
{
    public function create() {
        $categories = Categories::all();
        return view('users.news.create', compact('categories'));
    }

    public function store(Request $request){
        // Kiểm tra xem dữ liệu từ client gửi lên bao gốm những gì
        // dd($request);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        
        /* dd($data); */
        // mã hóa password trước khi đẩy lên DB
        /* $data['password'] = Hash::make($request->password); */

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path().'/img', $filename);
            $data['image']= $filename;
        }

        $validated = $request->validate([
            'title' => 'required|unique:news|max:255',
            /* 'image' => 'required', */
            'content' => 'required',
            /* 'descriptrion' => 'required', */
            'active' => 'required',
            'arrange' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);


        // Tạo mới user với các dữ liệu tương ứng với dữ liệu được gán trong $data
        News::create($data);
        return redirect('/news')->with('thongbao', 'Create success');
    }
    
    public function edit($id){
        // Tìm đến đối tượng muốn update
        $new = News::findOrFail($id);

        $categories = Categories::all();
        return view('users.news.edit', compact('new', 'categories'));
    }

    public function update(Request $request, $id){
        // Tìm đến đối tượng muốn update
        $news = News::findOrFail($id);

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

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path().'/img', $filename);
            $data['image']= $filename;
        }

        $validated = $request->validate([
            'category_id' => 'required',
            'title' => 'required|max:255',
            /* 'image' => 'required|mimes:jpeg,bmp,png', */
            'content' => 'required',
            /* 'descriptrion' => 'required', */
            'active' => 'required',
            'arrange' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);


        $news->update($data);
        return redirect('/news')->with('thongbao', 'Update success');
        /* $category = news::all(); */
        /* return view('users.news.update', compact('category')); */
    }

    public function delete($id){
        // Tìm đến đối tượng muốn xóa
        $news = News::findOrFail($id);

        $news->delete();
        return redirect('/news')->with('thongbao', 'Success delete');
    }

    public function index(Request $request){
        // lấy ra toàn bộ user
        $news = News::all();
        //dd($users);

        $search = $request['search'] ?? "";
        if($search != "") {
            $news = News::where('title', 'LIKE', "%$search%")->orwhere('description', 'LIKE', "%$search%")->orwhere('content', 'LIKE', "%$search%")->orwhere('arrange', 'LIKE', "%$search%")->orwhere('active', '=', $search)->paginate(5);
        } else{
            $news = News::paginate(5);
        }

        // trả về view hiển thị danh sách user
        return view('users.news.view', compact('news'));
    }
}
