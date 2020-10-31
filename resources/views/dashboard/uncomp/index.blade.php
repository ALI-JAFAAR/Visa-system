@extends('layouts.app')

@section('Content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800" style="text-align: center;width: 100%;font-weight: bold;">المركبات الغير مكتملة</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>المعلومات</th>
            <th>السعر</th>
            <th>رقم الهاتف</th>
            <th>العداد</th>
            <th>صور المركبة</th>
            <th>رؤية او حذف</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>ID</th>
            <th>المعلومات</th>
            <th>السعر</th>
            <th>رقم الهاتف</th>
            <th>العداد</th>
            <th>صور المركبة</th>
            <th>رؤية او حذف</th>
          </tr>
        </tfoot>
        <tbody>
          @if($data ??'')
            @foreach($data as $row)
              <tr>
                <td>{{  $row->id }}</td>
                <td>{{  $row->car_info }}</td>
                <td>{{  $row->price }}</td>
                <td>{{  $row->phone }}</td>
                <td>{{  $row->Kbm }}</td>
                <td><img width="150px" src ="https://lugta.info/img/{{  $row->img1 }}"></td>
                <td>
                  <center>
                    <a href="{{ route('del',$row->id) }}"><i class="fas fa-trash"></i></a>   
                    <a href="{{ route('edit-comp',$row->id) }}"><i class="fas fa-clipboard-check"></i></a>
                    <a href="{{ route('update',$row->id) }}"><i class="fas fa-edit"></i></a>
                    <a href="{{ route('view',$row->id) }}"><i class="fas fa-eye"></i></a>
                  </center>    
                </td>
              
              </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection