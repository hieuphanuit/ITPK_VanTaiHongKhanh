@extends('public.master')






@section('content')
@if (\Session::has('success'))
    <br>
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success')[0]!!}</li>
        </ul>
    </div>
@endif
@if (\Session::has('errors'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('errors')[0] !!}</li>
        </ul>
    </div>    
@endif

<div class="container">
    <div style="padding: 30px 0px;">
        <div class="row contact-box">
            <div class="col-md-4">
                <h1>Liên Hệ: </h1>
                <form action="{{url('/lien-he')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Họ tên: </label>
                    <input  class="form-control" type="text" name="ten" required/>
                </div>
                <div class="form-group">
                    <label>Địa chỉ: </label>
                    <input  class="form-control" type="text" name="dia_chi" required/>
                </div>
                <div class="form-group">
                    <label>Số điện thoại: </label>
                    <input  class="form-control" type="text" name="so_dien_thoai" required/>
                </div>
                <div class="form-group">
                    <label>Email: </label>
                    <input  class="form-control" type="text" name="email" required/>
                </div>
                <div class="form-group ta-center">
                    <input class="btn btn-success" type="submit" name="submit"/>
                </div>
                </form>
            </div>
            <div class="col-md-8">
                <h1>Địa Chỉ: </h1>
                <address>
                    <img src="{{asset('upload/icons/place-icon.png')}}">&nbsp&nbsp&nbsp {{$lien_he->dia_chi}}<br>
                    <img src="{{asset('upload/icons/phone-icon.png')}}">&nbsp&nbsp {{$lien_he->dien_thoai}}<br>
                    <img src="{{asset('upload/icons/mail-icon.png')}}">&nbsp&nbsp <a href="mailto:{{$lien_he->email}}">{{$lien_he->email}}</a><br>
                    <img src="{{asset('upload/icons/website-icon.png')}}">&nbsp&nbsp <a href="{{$lien_he->website}}">{{$lien_he->website}}</a><br>
                </address>
                <div class="map">
                    <?php echo $lien_he->map ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection