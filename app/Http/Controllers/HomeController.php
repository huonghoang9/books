<?php
namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    public function index(Request $request){
        // Lấy danh sách tất cả các sách.
        $books = Book::all();
        // Sắp xếp danh sách sách theo rating, giảm dần.
        $books = $books->sortByDesc('rating');

        // Lấy top 10 sách có rating cao nhất.
        $top10Books = $books->take(10);

        // Thêm dữ liệu từ bảng category và bảng author producer.
        foreach ($top10Books as $book) {
            $book->category = $book->category()->first();
            $book->author = $book->author()->first();
            $book->producer = $book->producer()->first();
        }

        // Lấy keyword từ request.
    $keyword = $request->get('keyword');

    // Lọc danh sách sách theo keyword.
    if($request->post() && $request->searchBook ){
        $books = DB::table('books') ->join('authors', 'books.author_id', '=', 'authors.id')
            ->where('book_name', 'like', '%'.$request->searchBook.'%')
            ->get();
              }
        //Trả về danh sách top 10 sách theo rating.
        return view('home',  compact('top10Books','books'));
    }

    public function product_cate($categoryId){
    // Lấy danh sách sản phẩm của danh mục
    $books = Book::where('cate_id', $categoryId)->get();

    // Trả về danh sách sản phẩm
    return view('product_cate', compact('books'));
    }

    public function detail(Request $request, $id){
        $detailBook = Book::findOrFail($id);
        $categories = Category::all();
        $similarBook = Book::select('*')
        ->where('cate_id', $detailBook->cate_id)
        ->get();
        return view('detail', compact('detailBook','similarBook','categories'));
    }

    public function delete_cart($rowID){
        Cart::update($rowID,0);
        return view('cart');
    }
}
