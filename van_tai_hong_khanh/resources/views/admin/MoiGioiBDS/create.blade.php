@extends('admin.master')






@section('content')


    <form action="{{ url('/admin/moi-gioi-bds') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="usr">Tên Loại Môi Giới BĐS:</label>
            <input type="text" class="form-control" name="ten">
        </div>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
@endsection

@section('content-header')
    Loại Môi Giới BDS
@endsection