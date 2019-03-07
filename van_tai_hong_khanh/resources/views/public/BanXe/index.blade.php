@extends('public.master')

@section('content-full')
    <div id="dich-vu-container" style="background-image: url('{{asset('upload/dichvu/bg.jpg')}}');">
        <div class="container-fluid">
            <div class="row" style="height: 700px">  
                <div class="col-md-4">
                
                </div>

                <div class="col-md-8">

                    <div class="row">
                        @foreach($banxes as $banxe)
                            
                                <div class="col-md-4" style="margin-top: 40px">
                                    <a href="{{url('ban-xe/'.$banxe->url_prefix)}}">
                                        <div class="item-container" style="width: 250px; height:250px">
                                            <img src="{{ ($banxe->hinh_mo_ta) ? asset('upload/'.$banxe->hinh_mo_ta) : asset('upload/no-image.png') }}" alt="hinh_mo_ta" class="item-image" style='height: 100%; width: 100%; object-fit: contain'>
                                            <div class="item-overlay">
                                                <div class="item-text">{{$banxe->tieu_de}}</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                        
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection

@section('css')
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />  
@endsection


@section('js')

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
    <script>
    $('document').ready(function(){
        $("#share").jsSocials({
            showLabel: false,
            showCount: false,
            shares: ["twitter", "facebook", "googleplus", "linkedin", "pinterest"]
        });

    });
    </script>
@endsection
