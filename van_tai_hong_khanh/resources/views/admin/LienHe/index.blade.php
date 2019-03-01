@extends('admin.master')
@section('content')

<form action="http://vantaihongkhanh.test/admin/lien-he/update" method="POST">
        {{ csrf_field() }}
        <input type="hidden" value="1" name="id">
        <div class="form-group">
            <label for="usr">Địa chỉ: </label>
            <input type="text" class="form-control" name="dia_chi" value="{{$lien_he->dia_chi}}">
        </div>
        <div class="form-group">
            <label for="usr">Điện thoại:</label>
            <input type="text" class="form-control" name="dien_thoai" value="{{$lien_he->dien_thoai}}">
        </div>
        <div class="form-group">
            <label for="usr">Email:</label>
            <input type="text" class="form-control" name="email" value="{{$lien_he->email}}">
        </div>
        <div class="form-group">
            <label for="usr">Website:</label>
            <input type="text" class="form-control" name="website" value="{{$lien_he->website}}">
        </div>
        <div class="form-group">
        <label for="usr">Map iframe:</label>
            <textarea class="form-control" name="map" rows="10">{{$lien_he->map}}</textarea>
        </div>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>

    @endsection

@section('content-header')
    Liên Hệ
@endsection