<?php
namespace App\Http\Controllers;

use Cart;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    //
    public function cart(Request $request){
        $user = auth()->user();
    
        if(auth()->check()){
            
    
            if($request->isMethod('POST')){
                // Kiểm tra xem người dùng đã thêm sản phẩm vào giỏ hàng chưa
               
    
                    $bookID = $request->bookID_hidden;
                    $quantity = $request->quantityBook;
                    $book = DB::table('books')->where('id', $bookID)->first();
                    
                    $data['id'] = $bookID;
                    $data['qty'] = $quantity;
                    session(['quantity_' . $bookID => $quantity]);
                    $data['name'] = $book->book_name;
                    $data['price'] = $book->promotion_price;
                    $data['weight'] = '1';
                    $data['image'] = $book->image;
    
                    Cart::add($data);
    
                    // Update the cart subtotal
                    Cart::subtotal();
                    // Kiểm tra xem người dùng đã có bản ghi trong bảng cart chưa
                    $cart = DB::table('cart')->where('user_id', $user->id)->where('book_id', $bookID)->first();
                    if($cart){
                        // Nếu có, cập nhật số lượng và tổng tiền
                        DB::table('cart')->where('id', $cart->id)->update([
                            'quantity' => $cart->quantity + $quantity,
                           
                        ]);
                    }else{
                        // Nếu không, tạo một bản ghi mới
                        DB::table('cart')->insert([
                            'user_id' => $user->id,
                            'book_id' => $bookID,
                            'quantity' => $quantity,
                        ]);
                    }
                }
    // Cart::destroy();
    
        return view('cart');
        }
        else{
            return redirect()->route('login');
        }
    }

    public function delete_cart(int $rowId)
{
    // Lấy giỏ hàng
    $cart = Cart::content();

    // Xóa sản phẩm khỏi giỏ hàng
    unset($cart[$rowId]);

    // Cập nhật giỏ hàng
    Cart::update($cart);

    // Trở về trang giỏ hàng
    return redirect()->route('cart');
}

    public function vn_pay(Request $request){

        
        $data=$request->all();


        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/cart";
        $vnp_TmnCode = "R69IFXOA";//Mã website tại VNPAY 
        $vnp_HashSecret = "LHNFZCNBANJQOHMOFAKJKWWWDOFAJJKH"; //Chuỗi bí mật
        $vnp_TxnRef ='11133'; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh Toán Đơn Hàng';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $data['total'] * 100000;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params of 2.0.1 Version
        // $vnp_ExpireDate = $_POST['txtexpire'];
        //Billing
   
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
           
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
            , 'message' => 'success'
            , 'data' => $vnp_Url);
            if (isset($_POST['redirect'])) {
                header('Location: ' . $vnp_Url);
                die();
            } else {
                echo json_encode($returnData);
            }
            // vui lòng tham khảo thêm tại code demo
            
            }

        
}
    
    