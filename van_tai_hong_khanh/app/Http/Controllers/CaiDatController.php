<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cai_dat;


class CaiDatController extends Controller
{
    //
    public function indexAdmin()
    {
        //
        $facebook_chat_box = $this->getFacebookChatboxCaiDat();
        return view('admin.CaiDat.index',['facebook_chat_box' => $facebook_chat_box->gia_tri]);
    }
    
    public function update(Request $request){
        $input = $request->all();
        echo $input['facebook_chat_box'];
        $facebook_chat_box = cai_dat::where('ten_cai_dat','facebook_chat_box')->first();
        $facebook_chat_box->gia_tri = $input['facebook_chat_box'];
      //  return  redirect()->back();
    }
    public function getFacebookChatboxCaiDat()
    {
        $facebook_chat_box = cai_dat::where('ten_cai_dat','facebook_chat_box')->first();
        if(!$facebook_chat_box){
            $facebook_chat_box = new cai_dat;
            $facebook_chat_box->ten_cai_dat = 'facebook_chat_box';
            $facebook_chat_box->save();
        }
        return $facebook_chat_box;
    }

    public function getHeaderSetting(){
        $cai_dats=[];
        $cai_dats['facebook_chat_box'] = $this->getFacebookChatboxCaiDat();
        return $cai_dats;
    }


}
