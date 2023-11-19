<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Book;
use App\Models\User;
use App\Http\Requests\ReviewRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ReviewController extends Controller
{
    public function list_review(Request $request){
        $listReview = DB::table('reviews')
        ->join('users', 'reviews.user_id', '=', 'users.id')
        ->join('books', 'reviews.book_id','=','books.id')
        ->select('reviews.*', 'books.id', 'books.book_name', 'users.name')
        ->get();
        return view('review.list',compact('listReview'));
    }

    public function delete(Request $request, $id){
        $reviewDL = Review::where('id', $id)->delete();
        if($reviewDL){
            Session::flash('success', 'Xóa bình luận thành công');
            return redirect()->route('list_review');
        }
    }

    public function store(ReviewRequest $request)
    {
        if($request->isMethod('POST')){
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Bạn phải đăng nhập để bình luận!');
        }
      
        $comment = new Review();
        $comment->book_id = $request->input('book_id');
        $comment->user_id = auth()->user()->id;
        $comment->comment = $request->input('comment');
        $comment->rating = $request->input('rating');
        $comment->save();
    }
        return redirect()->back()->with('success', 'Bình luận đã được gửi thành công!');
    }
}
