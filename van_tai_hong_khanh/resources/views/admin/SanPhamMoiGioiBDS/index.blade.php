@extends('admin.master')


@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection
@section('content')
<a href="{{url('/admin/moi-gioi-bds/create')}}" class="btn btn-success">Thêm Loại Môi Giới BĐS</a>
<br>
<br>
<table id="myTable" class="display">
    <thead>
        <tr>
          <th>ID</th>
          <th>Tên Loại Môi Giới BĐS</th>
          <th></th>
        </tr>
    </thead>
    <tbody>
      @foreach($moi_gioi_bdss as $moi_gioi_bds)
        <tr>
            <td>{{$moi_gioi_bds->id}}</td>
            <td>{{$moi_gioi_bds->ten}}</td>
            <td>
              <form id="form-xoa" action="{{url('admin/moi-gioi-bds/delete')}}" method="POST" style="display: inline-block" onsubmit="return confirm('Xóa dịch vụ này?');">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$moi_gioi_bds->id}}">
                <input id="xoa-btn" type="submit" name="submit" class="btn btn-danger" value="Xóa">
              </form>
            </td>
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





