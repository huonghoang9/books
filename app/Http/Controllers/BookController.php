<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Producer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    //

    public function list_book(Request $request){
        $book = new Book();
        $listBook = DB::table('books')
        ->join('producers', 'books.producer_id', '=', 'producers.id')
        ->join('authors', 'books.author_id', '=', 'authors.id')
        ->join('categories', 'books.cate_id', '=', 'categories.id')
        ->select('books.*', 'producers.producer_name', 'authors.author_name', 'categories.category_name')
        ->get();

        if($request->post() && $request->searchBook){
            $listBook = $book::where('book_name', 'like','%'.$request->searchBook.'%')->get();
        }
        return view('book.list', compact('listBook'));
    }

    public function add(BookRequest $request){
        if($request->isMethod('POST')){
            
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $request->image = uploadFile('images',$request->file('image'));
        }

        $params = $request->except('_token');
        $params['image'] = $request->image;

            $book = Book::create($params);

            $producer = Producer::create([
                'producer_name' => $request->producer_name,
            ]);

            $book->producer()->associate($producer);

            $author = Author::create([
                'author_name' => $request->author_name,
            ]);

            $book->author()->associate($author);

            $book->save();

            if ( $book->id && $producer->id && $author->id ){
                Session::flash('success','Thêm sách mới thành công');
            }
        }
        return view('book.add');
    }
}
