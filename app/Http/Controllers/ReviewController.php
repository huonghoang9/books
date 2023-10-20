<?php

namespace App\Http\Controllers;

use App\Models\Review;
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
}
