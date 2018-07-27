<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = Book::all();
        return view('admin.book.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Book();
        $obj->name = Input::get('name');
        $obj->price = Input::get('price');
        $obj->categoryId = Input::get('categoryId');
        $obj->description = Input::get('description');
        $obj->images = Input::get('images');
        $obj->save();
        return redirect('/admin/book');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Book::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.book.show')
            ->with('obj', $obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Book::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.book.edit')
            ->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = Book::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->name = Input::get('name');
        $obj->price = Input::get('price');
        $obj->categoryId = Input::get('categoryId');
        $obj->description = Input::get('description');
        $obj->images = Input::get('images');
        $obj->save();
        return redirect('/admin/book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Book::find($id);
        if ($obj == null) {
            return response('Sản phẩm không tồn tại hoặc đã hết!', 404);
        }
        $obj->delete();
        return response('Đã xóa!', 200);
    }
}
