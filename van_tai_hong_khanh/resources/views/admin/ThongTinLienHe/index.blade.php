@extends('admin.master')


@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection
@section('content')
<br>
<br>
<table id="myTable" class="display">
    <thead>
        <tr>
          <th>Họ tên</th>
          <th>Địa chỉ</th>
          <th>Số điện thoại</th>
          <th>Email</th>
        </tr>
    </thead>
    <tbody>
      @foreach($thong_tin_lien_hes as $thong_tin_lien_he)
        <tr>
            <td>{{$thong_tin_lien_he->id}}</td>
            <td>{{$thong_tin_lien_he->ten}}</td>
            <td>{{$thong_tin_lien_he->dia_chi}}</td>
            <td>{{$thong_tin_lien_he->so_dien_thoai}}</td>
            <td>{{$thong_tin_lien_he->email}}</td>
            
        </tr>
      @endforeach
    </tbody>
</table>
@endsection
@section('js')
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> 
<script>
  $(document).ready(function () {
      $('#myTable').DataTable();
  });
</script> 
@endsection





