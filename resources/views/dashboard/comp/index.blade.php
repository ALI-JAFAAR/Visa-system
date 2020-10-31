@extends('layouts.app')

@section('Content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800" style="text-align: center;width: 100%;font-weight: bold;">المركبات المكتملة</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered"  width="100%" cellspacing="0">
        <thead>
          <tr>
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
                <td>{{  $row->car_info }}</td>
                <td>{{  $row->price }}</td>
                <td>{{  $row->phone }}</td>
                <td>{{  $row->Kbm }}</td>
                <td>{{  $row->img1 }}</td>
                <td>
                  <center>
                    <a href="{{ route('del',$row->id) }}"><i class="fas fa-trash"></i></a> 
                    <a href="{{ route('view',$row->id) }}"><i class="fas fa-eye"></i></a>
                  </center>    
                </td>
              
              </tr>
            @endforeach
          @endif
        </tbody>
      </table>
        {!! $data->links() !!}
    </div>
  </div>
</div>
@endsection