<?php

namespace App\Http\Controllers;
use App\hinh_anh;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    //
    public function indexAdmin()
    {
        //
        $slider_1s = hinh_anh::where('loai_hinh_anh','slider_1')->get();
        $slider_2s = hinh_anh::where('loai_hinh_anh','slider_2')->get();
        $slider_3s = hinh_anh::where('loai_hinh_anh','slider_3')->get();
        return view('admin.Slider.index',['slider_1s' => $slider_1s,'slider_2s' => $slider_2s,'slider_3s' => $slider_3s]);
        
    }

    public function update(Request $request){
        $this->upload_image_slider_1($request);
        $this->upload_image_slider_2($request);
        $this->upload_image_slider_3($request);

        $delete_image_ids = $request['delete_image'];
        $delete_image_ids = $delete_image_ids ? $delete_image_ids: [];
        foreach($delete_image_ids as $delete_image_id){
            
            $hinhanh = hinh_anh::where('id','=',$delete_image_id)->first();
            if($hinhanh){
                $hinhanh->delete();
            }
        }
       return redirect()->back();
    }

    
    function upload_image_slider_1(Request $request)
    {
        if($request->hasFile('hinh_anh_slider_1')) {
            $files = $request->file('hinh_anh_slider_1');
            foreach($files as $file){
                if($file->isValid()){
                    $path = public_path() . '/upload/';
                    $file->move($path, $file->getClientOriginalName() );
                    $hinhanh = new hinh_anh;
                    $hinhanh->url = $file->getClientOriginalName();
                    $hinhanh->loai_hinh_anh = 'slider_1';
                    $hinhanh->save();
                }
            }
        }
        return null;
    }
    function upload_image_slider_2(Request $request)
    {
        if($request->hasFile('hinh_anh_slider_2')) {
            $files = $request->file('hinh_anh_slider_2');
            foreach($files as $file){
                if($file->isValid()){
                    $path = public_path() . '/upload/';
                    $file->move($path, $file->getClientOriginalName() );
                    $hinhanh = new hinh_anh;
                    $hinhanh->url = $file->getClientOriginalName();
                    $hinhanh->loai_hinh_anh = 'slider_2';
                    $hinhanh->save();
                }
            }
        }
        return null;
    }
    function upload_image_slider_3(Request $request)
    {
        if($request->hasFile('hinh_anh_slider_3')) {
            $files = $request->file('hinh_anh_slider_3');
            foreach($files as $file){
                if($file->isValid()){
                    $path = public_path() . '/upload/';
                    $file->move($path, $file->getClientOriginalName() );
                    $hinhanh = new hinh_anh;
                    $hinhanh->url = $file->getClientOriginalName();
                    $hinhanh->loai_hinh_anh = 'slider_3';
                    $hinhanh->save();
                }
            }
        }
        return null;
    }


}
