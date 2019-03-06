@extends('public.master')

@section('content-full')



<div id="mau-xe-hp-container" class="bg-cover"style="background-image: url('{{asset('upload/hp-thue-xe.png')}}');">
        <div class="container-fluid">
                <div class="row" style="height: 800px; position: relative">  
                        <div class="slider_1_content" style="width:100%; height: fit-content;">
                                <div class="owl-one owl-carousel owl-theme" style="width: 400px; height: 200px; position: relative; top: 40px; left: 220px">
                                @foreach ($slider_1s as $slider_1)
                                        <div class="item" style="width: 400px; height: 200px;">
                                                <div style="width: 400px; height: 200px; 
                                                background-image:url('{{asset('/upload/'.$slider_1->url)}}');
                                                background-size: contain; background-repeat: no-repeat">
                                                </div>
                                        </div>
                                @endforeach
                                </div>
                        </div>

                        <div class="slider_2_content"  style="width:100%; height: fit-content;">
                                <div class="owl-two owl-carousel owl-theme" style="width: 400px; height: 200px; position: relative; top: 60px; left: 500px">
                                @foreach ($slider_2s as $slider_2)
                                        <div class="item" style="width: 400px; height: 200px;">
                                                <div style="width: 400px; height: 200px; 
                                                background-image:url('{{asset('/upload/'.$slider_2->url)}}');
                                                background-size: contain; background-repeat: no-repeat">
                                                </div>
                                        </div>
                                @endforeach
                                </div>
                        </div>
                        <div class="slider_3_content"  style="width:100%; height: fit-content;">
                                <div class="owl-three owl-carousel owl-theme" style="width: 400px; height: 200px; position: relative; top: 60px; left: 820px"">
                                @foreach ($slider_3s as $slider_3)
                                        <div class="item" style="width: 400px; height: 200px;">
                                                <div style="width: 400px; height: 200px; 
                                                background-image:url('{{asset('/upload/'.$slider_3->url)}}');
                                                background-size: contain; background-repeat: no-repeat">
                                                </div>
                                        </div>
                                @endforeach
                                </div>
                        </div>
                </div>
        </div>
</div>
<div id="tin-tuc-hp-container" class="bg-cover" style="background-image: url('{{asset('upload/hp-dich-vu.png')}}');">
        <div class="container-fluid">
                <div class="row" style="height: 700px">  
                        
                </div>
        </div>
</div>
<div id="nha-xe-hp-container" >
        <div class="container-fluid">
                <div class="row">
                        <div class="col-md-6">
                                <div style="height: 400px">  
                                        <h4 class="nha-xe-title">NHÀ XE UY TÍN<h4>
                                        <hr class="line">
                                        <p class="nha-xe-content">
                                                Xe ô tô tự lái <br>
                                                Xe khách <br>
                                                Xe hợp đồng <br>
                                                Tham quan du lịch<br>
                                        </p>
                                </div>
                        </div>
                        <div class="col-md-6 bg-cover" style="background-image: url('{{asset('upload/cxcx.png')}}'); ">
                                <div style="height: 400px">  
                                </div>
                        </div>
                </div>
        </div>
</div>

<script>
$('.owl-one').owlCarousel({
        loop: true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:3000,
        items: 1
})
$('.owl-two').owlCarousel({
        loop: true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:3000,
        items: 1
})
$('.owl-three').owlCarousel({
        loop: true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:3000,
        items: 1
})
</script>
@endsection
