<?php

namespace App\Http\Controllers;

use App\Http\Requests\PromotionRequest;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PromotionController extends Controller
{
    public function list_promotion(Request $request)
    {
        $promotion = new Promotion();
        $listPromotion = $promotion::all();
        if ($request->post() && $request->searchPromotion) {
            $listPromotion = $promotion::where('discount_code', 'like','%'. $request->searchPromotion . '%')->get();
        }
        return view('promotion.list',compact('listPromotion'));


    }

    public function add(PromotionRequest $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $promotion = Promotion::create($params);
            if($promotion->id){
                Session::flash('success', "Thêm mã khuyến mãi thành công");
            }
        }
        return view('promotion.add');
    }

    public function edit(PromotionRequest $request,$id){
        $promotion = DB::table('promotions')->where('id', $id)->first();
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $result = Promotion::where('id', $id)->update($params);
            if($result){
                Session::flash('success','Sửa Mã Thành Công');
                return redirect()->route('edit_promotion', ['id'=>$id]);
            }
        }
        return view('promotion.edit',compact('promotion'));
    }

    public function delete(Request $request, $id){
        $promotionDL = Promotion::where('id', $id)->delete();
        if($promotionDL){
            Session::flash('success', 'Xóa mã thành công');
            return redirect()->route('list_promotion');
        }
    }
}
